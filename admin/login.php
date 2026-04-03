<?php
session_start();

// Redirect if already logged in
if (!empty($_SESSION['admin_id'])) {
    header('Location: dashboard.php');
    exit;
}

require_once 'db.php';

$error = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = trim($_POST['username'] ?? '');
    $password = $_POST['password'] ?? '';

    if ($username === '' || $password === '') {
        $error = 'Please enter both username and password.';
    } else {
        $stmt = mysqli_prepare($conn, 'SELECT id, username, password FROM users WHERE username = ? LIMIT 1');
        mysqli_stmt_bind_param($stmt, 's', $username);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);
        $user   = mysqli_fetch_assoc($result);
        mysqli_stmt_close($stmt);

        if ($user && password_verify($password, $user['password'])) {
            $_SESSION['admin_id']       = $user['id'];
            $_SESSION['admin_username'] = $user['username'];
            header('Location: dashboard.php');
            exit;
        } else {
            $error = 'Invalid username or password.';
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login — Raj Aiswari Admin</title>
  <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600&family=Cormorant+Garamond:ital,wght@0,400;0,600;1,400&display=swap" rel="stylesheet">
  <style>
    *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }
    :root {
      --gold:       #B8881E;
      --gold-light: #D4A832;
      --dark:       #1C1812;
      --dark2:      #252118;
      --dark3:      #2E2820;
      --text:       #FDFAF4;
      --text-muted: rgba(253,250,244,0.45);
      --border-dim: rgba(253,250,244,0.08);
      --border:     rgba(184,136,30,0.3);
      --danger:     #E05252;
    }
    html, body {
      min-height: 100vh;
      background: var(--dark);
      color: var(--text);
      font-family: 'Outfit', sans-serif;
      display: flex;
      align-items: center;
      justify-content: center;
    }

    /* background pattern */
    body::before {
      content: '';
      position: fixed; inset: 0;
      background:
        radial-gradient(ellipse at 30% 20%, rgba(184,136,30,0.12) 0%, transparent 55%),
        radial-gradient(ellipse at 70% 80%, rgba(184,136,30,0.07) 0%, transparent 50%);
      pointer-events: none;
    }

    .login-wrap {
      width: 100%;
      max-width: 400px;
      padding: 20px;
      position: relative;
      z-index: 1;
    }

    /* brand area */
    .login-brand {
      text-align: center;
      margin-bottom: 36px;
    }
    .login-brand-icon {
      width: 52px; height: 52px;
      border-radius: 14px;
      background: linear-gradient(135deg, var(--gold), var(--gold-light));
      display: inline-flex;
      align-items: center; justify-content: center;
      margin-bottom: 14px;
      box-shadow: 0 8px 28px rgba(184,136,30,0.35);
    }
    .login-brand-icon svg { width: 26px; height: 26px; }
    .login-brand h1 {
      font-family: 'Cormorant Garamond', serif;
      font-size: 1.65rem; font-weight: 600;
      color: var(--text);
      letter-spacing: 0.02em;
    }
    .login-brand p {
      font-size: 0.72rem;
      color: var(--text-muted);
      margin-top: 4px;
      letter-spacing: 0.12em;
      text-transform: uppercase;
    }

    /* card */
    .login-card {
      background: var(--dark2);
      border: 1px solid var(--border-dim);
      border-radius: 12px;
      padding: 32px;
      box-shadow: 0 24px 60px rgba(0,0,0,0.4);
    }

    .login-card h2 {
      font-size: 0.95rem;
      font-weight: 500;
      color: var(--text);
      margin-bottom: 24px;
    }

    /* error */
    .login-error {
      background: rgba(224,82,82,0.1);
      border: 1px solid rgba(224,82,82,0.22);
      color: #f08080;
      padding: 10px 14px;
      border-radius: 7px;
      font-size: 0.78rem;
      margin-bottom: 20px;
      display: flex;
      align-items: center;
      gap: 8px;
    }
    .login-error svg { width: 14px; height: 14px; flex-shrink: 0; }

    /* fields */
    .login-field {
      margin-bottom: 16px;
    }
    .login-label {
      display: block;
      font-size: 0.65rem;
      font-weight: 700;
      letter-spacing: 0.15em;
      text-transform: uppercase;
      color: var(--text-muted);
      margin-bottom: 7px;
    }
    .login-input {
      width: 100%;
      background: var(--dark3);
      border: 1px solid var(--border-dim);
      border-radius: 7px;
      padding: 11px 14px;
      color: var(--text);
      font-family: 'Outfit', sans-serif;
      font-size: 0.85rem;
      outline: none;
      transition: border-color 0.2s;
    }
    .login-input:focus {
      border-color: var(--gold);
    }
    .login-input::placeholder { color: rgba(253,250,244,0.2); }

    /* submit */
    .login-btn {
      width: 100%;
      margin-top: 24px;
      padding: 12px;
      background: linear-gradient(135deg, var(--gold), var(--gold-light));
      color: var(--dark);
      border: none;
      border-radius: 7px;
      font-family: 'Outfit', sans-serif;
      font-size: 0.85rem;
      font-weight: 600;
      cursor: pointer;
      letter-spacing: 0.04em;
      transition: opacity 0.2s, transform 0.15s;
      box-shadow: 0 4px 18px rgba(184,136,30,0.3);
    }
    .login-btn:hover { opacity: 0.9; transform: translateY(-1px); }
    .login-btn:active { transform: none; }

    .login-footer {
      text-align: center;
      margin-top: 20px;
      font-size: 0.68rem;
      color: rgba(253,250,244,0.2);
    }
  </style>
</head>
<body>

<div class="login-wrap">

  <div class="login-brand">
    <div class="login-brand-icon">
      <svg viewBox="0 0 24 24" fill="none" stroke="var(--dark)" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
        <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/>
      </svg>
    </div>
    <h1>Raj Aiswari</h1>
    <p>Admin Panel</p>
  </div>

  <div class="login-card">
    <h2>Sign in to continue</h2>

    <?php if ($error): ?>
    <div class="login-error">
      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
        <circle cx="12" cy="12" r="10"/><line x1="12" y1="8" x2="12" y2="12"/><line x1="12" y1="16" x2="12.01" y2="16"/>
      </svg>
      <?php echo htmlspecialchars($error); ?>
    </div>
    <?php endif; ?>

    <form method="POST" action="">
      <div class="login-field">
        <label class="login-label" for="username">Username</label>
        <input class="login-input" type="text" id="username" name="username"
               value="<?php echo htmlspecialchars($_POST['username'] ?? ''); ?>"
               placeholder="Enter username" autocomplete="username" required>
      </div>
      <div class="login-field">
        <label class="login-label" for="password">Password</label>
        <input class="login-input" type="password" id="password" name="password"
               placeholder="••••••••" autocomplete="current-password" required>
      </div>
      <button class="login-btn" type="submit">Sign In</button>
    </form>
  </div>

  <div class="login-footer">&copy; <?php echo date('Y'); ?> Raj Aiswari Group &mdash; Fischer Measurement Technologies Bangladesh</div>
</div>

</body>
</html>