<?php
require_once 'auth.php';
require_once 'db.php';
requireLogin();

$pageTitle  = 'Sister Concerns';
$breadcrumb = 'Sister Concerns';
$msg = $err = '';

function uploadImage($file, $folder) {
    $allowed = ['image/jpeg', 'image/png', 'image/webp', 'image/gif'];
    if (!in_array($file['type'], $allowed)) return [false, 'Only JPG, PNG, WebP, GIF allowed.'];
    if ($file['size'] > 8 * 1024 * 1024)   return [false, 'File must be under 8 MB.'];
    $ext  = strtolower(pathinfo($file['name'], PATHINFO_EXTENSION));
    $name = uniqid('img_', true) . '.' . $ext;
    $dir  = '../uploads/' . $folder;
    if (!is_dir($dir)) mkdir($dir, 0755, true);
    if (!move_uploaded_file($file['tmp_name'], $dir . '/' . $name)) return [false, 'Upload failed.'];
    return [true, 'uploads/' . $folder . '/' . $name];
}

// ── POST ──────────────────────────────────────────────────────────────────
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $act = $_POST['action'] ?? '';

    if ($act === 'add') {
        $catId    = (int)($_POST['category_id'] ?? 0);
        $name     = trim($_POST['name']     ?? '');
        $desc     = trim($_POST['description']    ?? '');
        $year     = trim($_POST['established_year'] ?? '');
        $industry = trim($_POST['industry'] ?? '');
        $address  = trim($_POST['address']  ?? '');

        if (!$name) {
            $err = 'Company name is required.';
        } else {
            $stmt = mysqli_prepare($conn,
                'INSERT INTO sister_concerns
                 (category_id, name, description, established_year, industry, address, created_at)
                 VALUES (?, ?, ?, ?, ?, ?, NOW())');
            mysqli_stmt_bind_param($stmt, 'isssss', $catId, $name, $desc, $year, $industry, $address);

            if (mysqli_stmt_execute($stmt)) {
                $concernId = mysqli_insert_id($conn);
                $msg = "Sister concern \"$name\" added.";

                // Upload multiple images
                if (!empty($_FILES['images']['name'][0])) {
                    foreach ($_FILES['images']['name'] as $i => $fname) {
                        if (!$fname) continue;
                        $file = [
                            'name'     => $fname,
                            'type'     => $_FILES['images']['type'][$i],
                            'tmp_name' => $_FILES['images']['tmp_name'][$i],
                            'size'     => $_FILES['images']['size'][$i],
                        ];
                        [$ok, $res] = uploadImage($file, 'concerns');
                        if ($ok) {
                            $imgStmt = mysqli_prepare($conn,
                                'INSERT INTO concern_images (concern_id, image_path) VALUES (?, ?)');
                            mysqli_stmt_bind_param($imgStmt, 'is', $concernId, $res);
                            mysqli_stmt_execute($imgStmt);
                            mysqli_stmt_close($imgStmt);
                        }
                    }
                }
            } else {
                $err = mysqli_error($conn);
            }
            mysqli_stmt_close($stmt);
        }
    }

    if ($act === 'delete') {
        $id = (int)$_POST['id'];
        // Delete associated images
        $imgs = mysqli_query($conn, "SELECT image_path FROM concern_images WHERE concern_id = $id");
        while ($img = mysqli_fetch_assoc($imgs)) {
            if ($img['image_path'] && file_exists('../' . $img['image_path'])) {
                @unlink('../' . $img['image_path']);
            }
        }
        mysqli_query($conn, "DELETE FROM concern_images WHERE concern_id = $id");
        mysqli_query($conn, "DELETE FROM sister_concerns WHERE id = $id");
        $msg = 'Sister concern deleted.';
    }
}

$action     = $_GET['action'] ?? 'list';
$categories = mysqli_query($conn, 'SELECT * FROM concern_categories ORDER BY name');
$concerns   = mysqli_query($conn,
    'SELECT sc.*, cc.name AS cat_name,
            (SELECT image_path FROM concern_images ci WHERE ci.concern_id = sc.id LIMIT 1) AS first_img,
            (SELECT COUNT(*) FROM concern_images ci WHERE ci.concern_id = sc.id) AS img_count
     FROM sister_concerns sc
     LEFT JOIN concern_categories cc ON cc.id = sc.category_id
     ORDER BY sc.created_at DESC');

include 'header.php';
?>

<div class="rga-page-header">
  <div>
    <h1>Sister <em>Concerns</em></h1>
    <p>Manage group companies and affiliated businesses.</p>
  </div>
  <?php if ($action !== 'add'): ?>
  <a href="?action=add" class="rga-btn rga-btn-gold">
    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"><line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/></svg>
    Add Concern
  </a>
  <?php endif; ?>
</div>

<?php if ($msg): ?>
<div class="rga-alert rga-alert-success">
  <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"><polyline points="20 6 9 17 4 12"/></svg>
  <?php echo htmlspecialchars($msg); ?>
</div>
<?php endif; ?>
<?php if ($err): ?>
<div class="rga-alert rga-alert-error">
  <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"><circle cx="12" cy="12" r="10"/><line x1="12" y1="8" x2="12" y2="12"/><line x1="12" y1="16" x2="12.01" y2="16"/></svg>
  <?php echo htmlspecialchars($err); ?>
</div>
<?php endif; ?>

<?php if ($action === 'add'): ?>
<div class="rga-card" style="max-width:720px;margin-bottom:28px;">
  <div class="rga-card-header">
    <span class="rga-card-title">Add Sister Concern</span>
    <a href="concerns.php" class="rga-btn rga-btn-outline rga-btn-xs">← Back</a>
  </div>
  <div class="rga-card-body">
    <form method="POST" enctype="multipart/form-data">
      <input type="hidden" name="action" value="add">

      <div class="rga-form-row" style="margin-bottom:16px;">
        <div class="rga-field">
          <label class="rga-label">Company Name *</label>
          <input class="rga-input" type="text" name="name" placeholder="e.g. Raj Electronics Ltd." required>
        </div>
        <div class="rga-field">
          <label class="rga-label">Category</label>
          <select class="rga-select" name="category_id">
            <option value="0">— No category —</option>
            <?php while ($c = mysqli_fetch_assoc($categories)): ?>
            <option value="<?php echo $c['id']; ?>"><?php echo htmlspecialchars($c['name']); ?></option>
            <?php endwhile; ?>
          </select>
        </div>
      </div>

      <div class="rga-form-row three" style="margin-bottom:16px;">
        <div class="rga-field">
          <label class="rga-label">Established Year</label>
          <input class="rga-input" type="text" name="established_year" placeholder="e.g. 2005" maxlength="4">
        </div>
        <div class="rga-field">
          <label class="rga-label">Industry</label>
          <input class="rga-input" type="text" name="industry" placeholder="e.g. Electronics">
        </div>
        <div class="rga-field">
          <label class="rga-label">Address</label>
          <input class="rga-input" type="text" name="address" placeholder="City, Country">
        </div>
      </div>

      <div class="rga-form-row full" style="margin-bottom:16px;">
        <div class="rga-field">
          <label class="rga-label">Description</label>
          <textarea class="rga-textarea" name="description" placeholder="What does this company do?"></textarea>
        </div>
      </div>

      <div class="rga-form-row full">
        <div class="rga-field">
          <label class="rga-label">Company Images (multiple allowed)</label>
          <label class="rga-file-label" for="concImgs">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"><rect x="3" y="3" width="18" height="18" rx="2"/><circle cx="8.5" cy="8.5" r="1.5"/><polyline points="21 15 16 10 5 21"/></svg>
            <span id="concImgsLabel">Click to upload images (hold Ctrl/Cmd for multiple)</span>
          </label>
          <input class="rga-file-input" type="file" id="concImgs" name="images[]"
                 accept="image/*" multiple
                 onchange="document.getElementById('concImgsLabel').textContent = this.files.length + ' file(s) selected'">
        </div>
      </div>

      <div style="margin-top:24px;display:flex;gap:10px;">
        <button type="submit" class="rga-btn rga-btn-gold">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"><polyline points="20 6 9 17 4 12"/></svg>
          Save Concern
        </button>
        <a href="concerns.php" class="rga-btn rga-btn-outline">Cancel</a>
      </div>
    </form>
  </div>
</div>
<?php endif; ?>

<!-- ── List ── -->
<div class="rga-card">
  <div class="rga-card-header">
    <span class="rga-card-title">All Sister Concerns (<?php echo mysqli_num_rows($concerns); ?>)</span>
  </div>
  <?php if (mysqli_num_rows($concerns) > 0): ?>
  <div class="rga-table-wrap">
    <table class="rga-table">
      <thead>
        <tr>
          <th>#</th>
          <th>Photo</th>
          <th>Company</th>
          <th>Category</th>
          <th>Industry</th>
          <th>Est.</th>
          <th>Images</th>
          <th>Actions</th>
        </tr>
      </thead>
      <tbody>
        <?php $i = 1; while ($c = mysqli_fetch_assoc($concerns)): ?>
        <tr>
          <td style="color:var(--text-dim);"><?php echo $i++; ?></td>
          <td>
            <?php if ($c['first_img']): ?>
              <img src="../<?php echo htmlspecialchars($c['first_img']); ?>" class="rga-thumb" alt="">
            <?php else: ?>
              <div style="width:48px;height:48px;background:var(--dark3);border-radius:6px;display:flex;align-items:center;justify-content:center;opacity:.35;">
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="7" width="20" height="14" rx="2"/><path d="M16 7V5a2 2 0 00-2-2h-4a2 2 0 00-2 2v2"/></svg>
              </div>
            <?php endif; ?>
          </td>
          <td style="color:var(--text);font-weight:500;">
            <?php echo htmlspecialchars($c['name']); ?>
            <?php if ($c['address']): ?>
            <div style="font-size:.7rem;color:var(--text-dim);font-weight:400;"><?php echo htmlspecialchars($c['address']); ?></div>
            <?php endif; ?>
          </td>
          <td>
            <?php if ($c['cat_name']): ?>
            <span class="rga-badge rga-badge-gold"><?php echo htmlspecialchars($c['cat_name']); ?></span>
            <?php else: ?>—<?php endif; ?>
          </td>
          <td><?php echo htmlspecialchars($c['industry'] ?: '—'); ?></td>
          <td><?php echo htmlspecialchars($c['established_year'] ?: '—'); ?></td>
          <td>
            <span class="rga-badge rga-badge-dim"><?php echo (int)$c['img_count']; ?> photo<?php echo $c['img_count'] != 1 ? 's' : ''; ?></span>
          </td>
          <td>
            <form method="POST" onsubmit="return confirm('Delete this company and all its images?');" style="display:inline;">
              <input type="hidden" name="action" value="delete">
              <input type="hidden" name="id" value="<?php echo $c['id']; ?>">
              <button type="submit" class="rga-btn rga-btn-danger rga-btn-xs">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" style="width:12px;height:12px;"><polyline points="3 6 5 6 21 6"/><path d="M19 6l-1 14a2 2 0 01-2 2H8a2 2 0 01-2-2L5 6"/></svg>
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
    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><rect x="2" y="7" width="20" height="14" rx="2"/><path d="M16 7V5a2 2 0 00-2-2h-4a2 2 0 00-2 2v2"/><line x1="12" y1="12" x2="12" y2="17"/><line x1="9" y1="14.5" x2="15" y2="14.5"/></svg>
    No sister concerns yet. <a href="?action=add" style="color:var(--gold-light)">Add one →</a>
  </div>
  <?php endif; ?>
</div>

<?php include 'footer.php'; ?>