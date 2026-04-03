<?php
require_once 'auth.php';
require_once 'db.php';
requireLogin();

$pageTitle  = 'Homepage';
$breadcrumb = 'Homepage';
$msg = $err = '';

function uploadImage($file, $folder) {
    $allowed = ['image/jpeg', 'image/png', 'image/webp', 'image/gif'];
    if (!in_array($file['type'], $allowed)) return [false, 'Only JPG, PNG, WebP, GIF allowed.'];
    if ($file['size'] > 10 * 1024 * 1024)  return [false, 'File must be under 10 MB.'];
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

    // ─ Banner: add ─
    if ($act === 'add_banner') {
        if (empty($_FILES['banner_image']['name'])) {
            $err = 'Please select a banner image.';
        } else {
            [$ok, $res] = uploadImage($_FILES['banner_image'], 'banners');
            if (!$ok) {
                $err = $res;
            } else {
                $isActive = isset($_POST['is_active']) ? 1 : 0;
                $stmt = mysqli_prepare($conn,
                    'INSERT INTO banners (image, is_active, created_at) VALUES (?, ?, NOW())');
                mysqli_stmt_bind_param($stmt, 'si', $res, $isActive);
                mysqli_stmt_execute($stmt) ? $msg = 'Banner added.' : $err = mysqli_error($conn);
                mysqli_stmt_close($stmt);
            }
        }
    }

    // ─ Banner: toggle active ─
    if ($act === 'toggle_banner') {
        $id    = (int)$_POST['id'];
        $newVal = (int)$_POST['new_val'];
        mysqli_query($conn, "UPDATE banners SET is_active = $newVal WHERE id = $id");
        $msg = 'Banner status updated.';
    }

    // ─ Banner: delete ─
    if ($act === 'delete_banner') {
        $id = (int)$_POST['id'];
        $res = mysqli_query($conn, "SELECT image FROM banners WHERE id = $id");
        $row = mysqli_fetch_assoc($res);
        if ($row && $row['image'] && file_exists('../' . $row['image'])) @unlink('../' . $row['image']);
        mysqli_query($conn, "DELETE FROM banners WHERE id = $id");
        $msg = 'Banner deleted.';
    }

    // ─ Gallery: add ─
    if ($act === 'add_gallery') {
        if (empty($_FILES['gallery_image']['name'])) {
            $err = 'Please select a gallery image.';
        } else {
            [$ok, $res] = uploadImage($_FILES['gallery_image'], 'gallery');
            if (!$ok) {
                $err = $res;
            } else {
                $title = trim($_POST['gallery_title'] ?? '');
                $stmt  = mysqli_prepare($conn,
                    'INSERT INTO gallery (image_path, title, created_at) VALUES (?, ?, NOW())');
                mysqli_stmt_bind_param($stmt, 'ss', $res, $title);
                mysqli_stmt_execute($stmt) ? $msg = 'Gallery image added.' : $err = mysqli_error($conn);
                mysqli_stmt_close($stmt);
            }
        }
    }

    // ─ Gallery: delete ─
    if ($act === 'delete_gallery') {
        $id = (int)$_POST['id'];
        $res = mysqli_query($conn, "SELECT image_path FROM gallery WHERE id = $id");
        $row = mysqli_fetch_assoc($res);
        if ($row && $row['image_path'] && file_exists('../' . $row['image_path'])) @unlink('../' . $row['image_path']);
        mysqli_query($conn, "DELETE FROM gallery WHERE id = $id");
        $msg = 'Gallery image deleted.';
    }
}

$tab      = $_GET['tab'] ?? 'banners';
$banners  = mysqli_query($conn, 'SELECT * FROM banners ORDER BY created_at DESC');
$gallery  = mysqli_query($conn, 'SELECT * FROM gallery ORDER BY created_at DESC');

include 'header.php';
?>

<div class="rga-page-header">
  <div>
    <h1>Homepage <em>Content</em></h1>
    <p>Manage hero banners and gallery images shown on the front page.</p>
  </div>
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

<!-- Tabs -->
<div style="display:flex;gap:4px;margin-bottom:24px;border-bottom:1px solid var(--border-dim);padding-bottom:0;">
  <a href="?tab=banners"
     style="padding:10px 20px;font-size:.8rem;font-weight:500;border-radius:6px 6px 0 0;
            background:<?php echo $tab === 'banners' ? 'var(--dark2)' : 'transparent'; ?>;
            color:<?php echo $tab === 'banners' ? 'var(--gold-light)' : 'var(--text-muted)'; ?>;
            border:1px solid <?php echo $tab === 'banners' ? 'var(--border-dim)' : 'transparent'; ?>;
            border-bottom:<?php echo $tab === 'banners' ? '1px solid var(--dark2)' : 'none'; ?>;
            margin-bottom:-1px;">
    Hero Banners
  </a>
  <a href="?tab=gallery"
     style="padding:10px 20px;font-size:.8rem;font-weight:500;border-radius:6px 6px 0 0;
            background:<?php echo $tab === 'gallery' ? 'var(--dark2)' : 'transparent'; ?>;
            color:<?php echo $tab === 'gallery' ? 'var(--gold-light)' : 'var(--text-muted)'; ?>;
            border:1px solid <?php echo $tab === 'gallery' ? 'var(--border-dim)' : 'transparent'; ?>;
            border-bottom:<?php echo $tab === 'gallery' ? '1px solid var(--dark2)' : 'none'; ?>;
            margin-bottom:-1px;">
    Gallery
  </a>
</div>

<?php if ($tab === 'banners'): ?>

<!-- ══ BANNERS ══════════════════════════════════════════════════════════════ -->
<div style="display:grid;grid-template-columns:320px 1fr;gap:20px;align-items:start;">

  <!-- Add Banner -->
  <div class="rga-card">
    <div class="rga-card-header">
      <span class="rga-card-title">Add New Banner</span>
    </div>
    <div class="rga-card-body">
      <form method="POST" enctype="multipart/form-data">
        <input type="hidden" name="action" value="add_banner">
        <div class="rga-field" style="margin-bottom:14px;">
          <label class="rga-label">Banner Image *</label>
          <label class="rga-file-label" for="bannerImg">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"><rect x="3" y="3" width="18" height="18" rx="2"/><circle cx="8.5" cy="8.5" r="1.5"/><polyline points="21 15 16 10 5 21"/></svg>
            <span id="bannerImgLabel">Upload image (recommended: 1920×600px)</span>
          </label>
          <input class="rga-file-input" type="file" id="bannerImg" name="banner_image" accept="image/*"
                 onchange="document.getElementById('bannerImgLabel').textContent = this.files[0]?.name || 'No file chosen'">
        </div>
        <div style="display:flex;align-items:center;gap:10px;margin-bottom:18px;">
          <label class="rga-toggle">
            <input type="checkbox" name="is_active" value="1" checked>
            <span class="rga-toggle-slider"></span>
          </label>
          <span style="font-size:.78rem;color:var(--text-muted);">Set as active (visible on site)</span>
        </div>
        <button type="submit" class="rga-btn rga-btn-gold" style="width:100%;justify-content:center;">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"><polyline points="20 6 9 17 4 12"/></svg>
          Upload Banner
        </button>
      </form>
    </div>
  </div>

  <!-- Banner list -->
  <div class="rga-card">
    <div class="rga-card-header">
      <span class="rga-card-title">All Banners (<?php echo mysqli_num_rows($banners); ?>)</span>
    </div>
    <?php if (mysqli_num_rows($banners) > 0): ?>
    <div class="rga-table-wrap">
      <table class="rga-table">
        <thead>
          <tr><th>Preview</th><th>File</th><th>Status</th><th>Added</th><th>Actions</th></tr>
        </thead>
        <tbody>
          <?php while ($b = mysqli_fetch_assoc($banners)): ?>
          <tr>
            <td>
              <img src="../<?php echo htmlspecialchars($b['image']); ?>"
                   style="width:100px;height:40px;object-fit:cover;border-radius:4px;border:1px solid var(--border-dim);" alt="">
            </td>
            <td style="font-size:.7rem;color:var(--text-dim);max-width:180px;overflow:hidden;text-overflow:ellipsis;white-space:nowrap;">
              <?php echo htmlspecialchars(basename($b['image'])); ?>
            </td>
            <td>
              <form method="POST" style="display:inline;">
                <input type="hidden" name="action" value="toggle_banner">
                <input type="hidden" name="id" value="<?php echo $b['id']; ?>">
                <input type="hidden" name="new_val" value="<?php echo $b['is_active'] ? 0 : 1; ?>">
                <label class="rga-toggle" title="Toggle active" style="cursor:pointer;"
                       onclick="this.closest('form').submit()">
                  <input type="checkbox" <?php echo $b['is_active'] ? 'checked' : ''; ?> readonly
                         style="pointer-events:none;">
                  <span class="rga-toggle-slider"></span>
                </label>
              </form>
            </td>
            <td><?php echo date('M j, Y', strtotime($b['created_at'])); ?></td>
            <td>
              <form method="POST" onsubmit="return confirm('Delete this banner?');" style="display:inline;">
                <input type="hidden" name="action" value="delete_banner">
                <input type="hidden" name="id" value="<?php echo $b['id']; ?>">
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
      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><rect x="3" y="3" width="18" height="18" rx="2"/><circle cx="8.5" cy="8.5" r="1.5"/><polyline points="21 15 16 10 5 21"/></svg>
      No banners yet. Upload your first hero image.
    </div>
    <?php endif; ?>
  </div>

</div>

<?php else: ?>

<!-- ══ GALLERY ══════════════════════════════════════════════════════════════ -->
<div style="display:grid;grid-template-columns:320px 1fr;gap:20px;align-items:start;">

  <!-- Add Gallery Image -->
  <div class="rga-card">
    <div class="rga-card-header">
      <span class="rga-card-title">Add Gallery Image</span>
    </div>
    <div class="rga-card-body">
      <form method="POST" enctype="multipart/form-data">
        <input type="hidden" name="action" value="add_gallery">
        <div class="rga-field" style="margin-bottom:14px;">
          <label class="rga-label">Image *</label>
          <label class="rga-file-label" for="galImg">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"><rect x="3" y="3" width="18" height="18" rx="2"/><circle cx="8.5" cy="8.5" r="1.5"/><polyline points="21 15 16 10 5 21"/></svg>
            <span id="galImgLabel">Click to upload image</span>
          </label>
          <input class="rga-file-input" type="file" id="galImg" name="gallery_image" accept="image/*"
                 onchange="document.getElementById('galImgLabel').textContent = this.files[0]?.name || 'No file chosen'">
        </div>
        <div class="rga-field" style="margin-bottom:18px;">
          <label class="rga-label">Caption (optional)</label>
          <input class="rga-input" type="text" name="gallery_title" placeholder="e.g. Fischer XDAL at work">
        </div>
        <button type="submit" class="rga-btn rga-btn-gold" style="width:100%;justify-content:center;">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"><polyline points="20 6 9 17 4 12"/></svg>
          Add to Gallery
        </button>
      </form>
    </div>
  </div>

  <!-- Gallery Grid -->
  <div class="rga-card">
    <div class="rga-card-header">
      <span class="rga-card-title">Gallery Images (<?php echo mysqli_num_rows($gallery); ?>)</span>
    </div>
    <?php if (mysqli_num_rows($gallery) > 0): ?>
    <div style="padding:16px;display:grid;grid-template-columns:repeat(auto-fill,minmax(130px,1fr));gap:12px;">
      <?php while ($g = mysqli_fetch_assoc($gallery)): ?>
      <div style="position:relative;border-radius:8px;overflow:hidden;border:1px solid var(--border-dim);aspect-ratio:1;">
        <img src="../<?php echo htmlspecialchars($g['image_path']); ?>"
             style="width:100%;height:100%;object-fit:cover;display:block;" alt="">
        <div style="position:absolute;inset:0;background:rgba(0,0,0,0);transition:background .2s;display:flex;align-items:flex-end;justify-content:flex-end;padding:6px;"
             onmouseenter="this.style.background='rgba(0,0,0,0.55)'"
             onmouseleave="this.style.background='rgba(0,0,0,0)'">
          <form method="POST" onsubmit="return confirm('Delete this gallery image?');">
            <input type="hidden" name="action" value="delete_gallery">
            <input type="hidden" name="id" value="<?php echo $g['id']; ?>">
            <button type="submit"
              style="background:rgba(224,82,82,0.85);border:none;border-radius:4px;width:26px;height:26px;cursor:pointer;display:flex;align-items:center;justify-content:center;color:white;padding:0;">
              <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"><polyline points="3 6 5 6 21 6"/><path d="M19 6l-1 14a2 2 0 01-2 2H8a2 2 0 01-2-2L5 6"/></svg>
            </button>
          </form>
        </div>
        <?php if ($g['title']): ?>
        <div style="position:absolute;bottom:0;left:0;right:0;padding:4px 6px;background:rgba(0,0,0,0.6);font-size:.6rem;color:rgba(255,255,255,.75);white-space:nowrap;overflow:hidden;text-overflow:ellipsis;">
          <?php echo htmlspecialchars($g['title']); ?>
        </div>
        <?php endif; ?>
      </div>
      <?php endwhile; ?>
    </div>
    <?php else: ?>
    <div class="rga-empty">
      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><rect x="3" y="3" width="18" height="18" rx="2"/><circle cx="8.5" cy="8.5" r="1.5"/><polyline points="21 15 16 10 5 21"/></svg>
      No gallery images yet. Add your first photo above.
    </div>
    <?php endif; ?>
  </div>

</div>

<?php endif; ?>

<?php include 'footer.php'; ?>