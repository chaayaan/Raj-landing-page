<?php
/**
 * SETUP SCRIPT — Run once to create your admin user.
 * DELETE this file after running it.
 *
 * Usage: Visit  https://yoursite.com/admin/setup.php
 *        in your browser, fill the form, then DELETE setup.php.
 */

require_once 'db.php';

$msg = $err = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $secret   = trim($_POST['secret']   ?? '');
    $username = trim($_POST['username'] ?? '');
    $password = trim($_POST['password'] ?? '');

    // Simple one-time secret to prevent unauthorized use
    if ($secret !== 'rajaiswari2024') {
        $err = 'Invalid setup secret.';
    } elseif (strlen($username) < 3) {
        $err = 'Username must be at least 3 characters.';
    } elseif (strlen($password) < 6) {
        $err = 'Password must be at least 6 characters.';
    } else {
        $hash = password_hash($password, PASSWORD_DEFAULT);
        $stmt = mysqli_prepare($conn,
            'INSERT INTO users (username, password, created_at) VALUES (?, ?, NOW())');
        mysqli_stmt_bind_param($stmt, 'ss', $username, $hash);
        if (mysqli_stmt_execute($stmt)) {
            $msg = 'Admin user "' . htmlspecialchars($username) . '" created! '
                 . '<strong>Please delete this file (setup.php) immediately.</strong>';
        } else {
            $err = 'Error: ' . mysqli_error($conn) . ' (User may already exist.)';
        }
        mysqli_stmt_close($stmt);
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Admin Setup — Raj Aiswari</title>
  <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@400;500;600&display=swap" rel="stylesheet">
  <style>
    *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }
    body { font-family: 'Outfit', sans-serif; background: #1C1812; color: #FDFAF4; min-height: 100vh; display: flex; align-items: center; justify-content: center; }
    .box { background: #252118; border: 1px solid rgba(253,250,244,0.08); border-radius: 12px; padding: 36px; max-width: 420px; width: 100%; }
    h1 { font-size: 1.2rem; margin-bottom: 6px; color: #D4A832; }
    p.sub { font-size: .75rem; color: rgba(253,250,244,.4); margin-bottom: 24px; }
    label { display: block; font-size: .65rem; font-weight: 700; letter-spacing: .12em; text-transform: uppercase; color: rgba(253,250,244,.5); margin-bottom: 6px; margin-top: 14px; }
    input { width: 100%; background: #2E2820; border: 1px solid rgba(253,250,244,.08); border-radius: 6px; padding: 10px 12px; color: #FDFAF4; font-family: inherit; font-size: .85rem; outline: none; }
    input:focus { border-color: #B8881E; }
    button { margin-top: 22px; width: 100%; padding: 12px; background: linear-gradient(135deg, #B8881E, #D4A832); color: #1C1812; border: none; border-radius: 7px; font-family: inherit; font-size: .85rem; font-weight: 600; cursor: pointer; }
    .msg { padding: 12px; border-radius: 7px; font-size: .8rem; margin-bottom: 20px; }
    .msg.ok { background: rgba(82,168,122,.12); border: 1px solid rgba(82,168,122,.25); color: #6fcfa0; }
    .msg.er { background: rgba(224,82,82,.1); border: 1px solid rgba(224,82,82,.22); color: #f08080; }
    .warn { margin-top: 18px; padding: 12px; background: rgba(184,136,30,.1); border: 1px solid rgba(184,136,30,.2); border-radius: 7px; font-size: .75rem; color: rgba(253,250,244,.6); }
  </style>
</head>
<body>
<div class="box">
  <h1>⚙ Admin Setup</h1>
  <p class="sub">Create the first admin account. Delete this file after running.</p>

  <?php if ($msg): ?>
  <div class="msg ok"><?php echo $msg; ?></div>
  <?php endif; ?>
  <?php if ($err): ?>
  <div class="msg er"><?php echo htmlspecialchars($err); ?></div>
  <?php endif; ?>

  <form method="POST">
    <label>Setup Secret Key</label>
    <input type="password" name="secret" placeholder="Enter setup secret" required>

    <label>Admin Username</label>
    <input type="text" name="username" placeholder="e.g. admin" required>

    <label>Admin Password</label>
    <input type="password" name="password" placeholder="Min 6 characters" required>

    <button type="submit">Create Admin Account</button>
  </form>

  <div class="warn">
    ⚠ The default secret key is <code>rajaiswari2024</code>. Change it in this file before using.
    Delete <code>setup.php</code> after creating your account.
  </div>
</div>
</body>
</html>