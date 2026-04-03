<?php
require_once 'auth.php';
require_once 'db.php';
requireLogin();

$pageTitle  = 'Employees';
$breadcrumb = 'Employees';
$msg = $err = '';

// ── Upload helper ──────────────────────────────────────────────────────────
function uploadImage($file, $folder) {
    $allowed = ['image/jpeg', 'image/png', 'image/webp', 'image/gif'];
    if (!in_array($file['type'], $allowed)) {
        return [false, 'Only JPG, PNG, WebP, GIF files are allowed.'];
    }
    if ($file['size'] > 5 * 1024 * 1024) {
        return [false, 'File size must be under 5 MB.'];
    }
    $ext  = pathinfo($file['name'], PATHINFO_EXTENSION);
    $name = uniqid('img_', true) . '.' . strtolower($ext);
    $dest = '../uploads/' . $folder . '/' . $name;

    // Create folder if needed (adjust path when running on server)
    $dir = dirname($dest);
    if (!is_dir($dir)) mkdir($dir, 0755, true);

    if (!move_uploaded_file($file['tmp_name'], $dest)) {
        return [false, 'Failed to move uploaded file.'];
    }
    return [true, 'uploads/' . $folder . '/' . $name];
}

// ── Handle POST ────────────────────────────────────────────────────────────
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $action = $_POST['action'] ?? '';

    // Add
    if ($action === 'add') {
        $name = trim($_POST['name'] ?? '');
        if ($name === '') {
            $err = 'Name is required.';
        } else {
            $imagePath = null;
            if (!empty($_FILES['image']['name'])) {
                [$ok, $result] = uploadImage($_FILES['image'], 'employees');
                if (!$ok) { $err = $result; }
                else       { $imagePath = $result; }
            }
            if ($err === '') {
                $stmt = mysqli_prepare($conn,
                    'INSERT INTO employees (name, image, created_at) VALUES (?, ?, NOW())');
                mysqli_stmt_bind_param($stmt, 'ss', $name, $imagePath);
                if (mysqli_stmt_execute($stmt)) {
                    $msg = 'Employee "' . htmlspecialchars($name) . '" added successfully.';
                } else {
                    $err = 'Database error: ' . mysqli_error($conn);
                }
                mysqli_stmt_close($stmt);
            }
        }
    }

    // Delete
    if ($action === 'delete') {
        $id = (int)($_POST['id'] ?? 0);
        // Fetch image path to delete file
        $res = mysqli_query($conn, "SELECT image FROM employees WHERE id = $id");
        $row = mysqli_fetch_assoc($res);
        if ($row && $row['image'] && file_exists('../' . $row['image'])) {
            @unlink('../' . $row['image']);
        }
        mysqli_query($conn, "DELETE FROM employees WHERE id = $id");
        $msg = 'Employee deleted.';
    }
}

$action = $_GET['action'] ?? 'list';
$employees = mysqli_query($conn, 'SELECT * FROM employees ORDER BY created_at DESC');

include 'header.php';
?>

<div class="rga-page-header">
  <div>
    <h1>Team <em>Members</em></h1>
    <p>Manage employee ID cards and profiles.</p>
  </div>
  <?php if ($action !== 'add'): ?>
  <a href="?action=add" class="rga-btn rga-btn-gold">
    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"><line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/></svg>
    Add Employee
  </a>
  <?php endif; ?>
</div>

<?php if ($msg): ?>
<div class="rga-alert rga-alert-success">
  <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"><polyline points="20 6 9 17 4 12"/></svg>
  <?php echo $msg; ?>
</div>
<?php endif; ?>
<?php if ($err): ?>
<div class="rga-alert rga-alert-error">
  <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"><circle cx="12" cy="12" r="10"/><line x1="12" y1="8" x2="12" y2="12"/><line x1="12" y1="16" x2="12.01" y2="16"/></svg>
  <?php echo $err; ?>
</div>
<?php endif; ?>

<?php if ($action === 'add'): ?>
<!-- ── Add Form ── -->
<div class="rga-card" style="max-width:520px;margin-bottom:28px;">
  <div class="rga-card-header">
    <span class="rga-card-title">Add New Employee</span>
    <a href="employees.php" class="rga-btn rga-btn-outline rga-btn-xs">← Back</a>
  </div>
  <div class="rga-card-body">
    <form method="POST" enctype="multipart/form-data">
      <input type="hidden" name="action" value="add">

      <div class="rga-form-row full" style="margin-bottom:16px;">
        <div class="rga-field">
          <label class="rga-label">Full Name *</label>
          <input class="rga-input" type="text" name="name" placeholder="e.g. Md. Rahim Uddin" required>
        </div>
      </div>

      <div class="rga-form-row full">
        <div class="rga-field">
          <label class="rga-label">Employee ID Card Image</label>
          <label class="rga-file-label" for="empImage">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round">
              <rect x="3" y="3" width="18" height="18" rx="2"/>
              <circle cx="8.5" cy="8.5" r="1.5"/>
              <polyline points="21 15 16 10 5 21"/>
            </svg>
            <span id="empImageLabel">Click to upload image (JPG, PNG, WebP)</span>
          </label>
          <input class="rga-file-input" type="file" id="empImage" name="image"
                 accept="image/*"
                 onchange="document.getElementById('empImageLabel').textContent = this.files[0]?.name || 'No file chosen'">
        </div>
      </div>

      <div style="margin-top:24px;display:flex;gap:10px;">
        <button type="submit" class="rga-btn rga-btn-gold">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"><polyline points="20 6 9 17 4 12"/></svg>
          Save Employee
        </button>
        <a href="employees.php" class="rga-btn rga-btn-outline">Cancel</a>
      </div>
    </form>
  </div>
</div>
<?php endif; ?>

<!-- ── List ── -->
<div class="rga-card">
  <div class="rga-card-header">
    <span class="rga-card-title">All Employees (<?php echo mysqli_num_rows($employees); ?>)</span>
  </div>
  <?php if (mysqli_num_rows($employees) > 0): ?>
  <div class="rga-table-wrap">
    <table class="rga-table">
      <thead>
        <tr>
          <th>#</th>
          <th>Photo / ID Card</th>
          <th>Name</th>
          <th>Added</th>
          <th>Actions</th>
        </tr>
      </thead>
      <tbody>
        <?php $i = 1; while ($e = mysqli_fetch_assoc($employees)): ?>
        <tr>
          <td style="color:var(--text-dim);"><?php echo $i++; ?></td>
          <td>
            <?php if ($e['image']): ?>
              <img src="../<?php echo htmlspecialchars($e['image']); ?>"
                   class="rga-thumb-tall" alt=""
                   style="cursor:pointer;"
                   onclick="window.open('../<?php echo htmlspecialchars($e['image']); ?>','_blank')">
            <?php else: ?>
              <div style="width:36px;height:54px;background:var(--dark3);border-radius:4px;display:flex;align-items:center;justify-content:center;">
                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="var(--text-dim)" stroke-width="2"><circle cx="12" cy="8" r="4"/><path d="M4 20c0-4 3.6-7 8-7s8 3 8 7"/></svg>
              </div>
            <?php endif; ?>
          </td>
          <td style="color:var(--text);font-weight:500;"><?php echo htmlspecialchars($e['name']); ?></td>
          <td><?php echo date('M j, Y', strtotime($e['created_at'])); ?></td>
          <td>
            <form method="POST" onsubmit="return confirm('Delete this employee?');" style="display:inline;">
              <input type="hidden" name="action" value="delete">
              <input type="hidden" name="id" value="<?php echo $e['id']; ?>">
              <button type="submit" class="rga-btn rga-btn-danger rga-btn-xs">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"><polyline points="3 6 5 6 21 6"/><path d="M19 6l-1 14a2 2 0 01-2 2H8a2 2 0 01-2-2L5 6"/><path d="M10 11v6m4-6v6"/><path d="M9 6V4a1 1 0 011-1h4a1 1 0 011 1v2"/></svg>
                Delete
              </button>
            </form>
          </td>
        </tr>
        <?php endwhile; ?>
      </tbody>
    </table>
  </div>
  <?php else: ?>
  <div class="rga-empty">
    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
      <path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/><circle cx="9" cy="7" r="4"/>
      <path d="M23 21v-2a4 4 0 00-3-3.87"/><path d="M16 3.13a4 4 0 010 7.75"/>
    </svg>
    No employees found. <a href="?action=add" style="color:var(--gold-light)">Add your first employee →</a>
  </div>
  <?php endif; ?>
</div>

<?php include 'footer.php'; ?>