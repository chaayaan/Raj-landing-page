<?php
require_once 'auth.php';
require_once 'db.php';
requireLogin();

$pageTitle  = 'Products';
$breadcrumb = 'Products';
$msg = $err = '';

function uploadImage($file, $folder) {
    $allowed = ['image/jpeg', 'image/png', 'image/webp', 'image/gif'];
    if (!in_array($file['type'], $allowed)) return [false, 'Only JPG, PNG, WebP, GIF allowed.'];
    if ($file['size'] > 8 * 1024 * 1024)   return [false, 'File must be under 8 MB.'];
    $ext  = strtolower(pathinfo($file['name'], PATHINFO_EXTENSION));
    $name = uniqid('img_', true) . '.' . $ext;
    $dir  = '../uploads/' . $folder;
    if (!is_dir($dir)) mkdir($dir, 0755, true);
    $dest = $dir . '/' . $name;
    if (!move_uploaded_file($file['tmp_name'], $dest)) return [false, 'Upload failed.'];
    return [true, 'uploads/' . $folder . '/' . $name];
}

// ── POST ──────────────────────────────────────────────────────────────────
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $act = $_POST['action'] ?? '';

    if ($act === 'add') {
        $catId = (int)($_POST['category_id'] ?? 0);
        $title = trim($_POST['title'] ?? '');
        $desc  = trim($_POST['description'] ?? '');

        if (!$title) {
            $err = 'Title is required.';
        } else {
            $imgPath = null;
            if (!empty($_FILES['image']['name'])) {
                [$ok, $res] = uploadImage($_FILES['image'], 'products');
                if (!$ok) $err = $res;
                else       $imgPath = $res;
            }
            if (!$err) {
                $stmt = mysqli_prepare($conn,
                    'INSERT INTO products (category_id, title, description, image_path, created_at)
                     VALUES (?, ?, ?, ?, NOW())');
                mysqli_stmt_bind_param($stmt, 'isss', $catId, $title, $desc, $imgPath);
                mysqli_stmt_execute($stmt) ? $msg = "Product \"$title\" added." : $err = mysqli_error($conn);
                mysqli_stmt_close($stmt);
            }
        }
    }

    if ($act === 'delete') {
        $id = (int)$_POST['id'];
        $res = mysqli_query($conn, "SELECT image_path FROM products WHERE id = $id");
        $row = mysqli_fetch_assoc($res);
        if ($row && $row['image_path'] && file_exists('../' . $row['image_path'])) {
            @unlink('../' . $row['image_path']);
        }
        mysqli_query($conn, "DELETE FROM products WHERE id = $id");
        $msg = 'Product deleted.';
    }
}

$action     = $_GET['action'] ?? 'list';
$categories = mysqli_query($conn, 'SELECT * FROM categories ORDER BY name');
$products   = mysqli_query($conn,
    'SELECT p.*, c.name AS cat_name FROM products p
     LEFT JOIN categories c ON c.id = p.category_id
     ORDER BY p.created_at DESC');

include 'header.php';
?>

<div class="rga-page-header">
  <div>
    <h1>Product <em>Catalog</em></h1>
    <p>Add and manage your Fischer measurement instruments and gold testing equipment.</p>
  </div>
  <?php if ($action !== 'add'): ?>
  <a href="?action=add" class="rga-btn rga-btn-gold">
    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"><line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/></svg>
    Add Product
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
<div class="rga-card" style="max-width:620px;margin-bottom:28px;">
  <div class="rga-card-header">
    <span class="rga-card-title">Add New Product</span>
    <a href="products.php" class="rga-btn rga-btn-outline rga-btn-xs">← Back</a>
  </div>
  <div class="rga-card-body">
    <form method="POST" enctype="multipart/form-data">
      <input type="hidden" name="action" value="add">

      <div class="rga-form-row" style="margin-bottom:16px;">
        <div class="rga-field">
          <label class="rga-label">Category</label>
          <select class="rga-select" name="category_id">
            <option value="0">— No category —</option>
            <?php while ($c = mysqli_fetch_assoc($categories)): ?>
            <option value="<?php echo $c['id']; ?>"><?php echo htmlspecialchars($c['name']); ?></option>
            <?php endwhile; ?>
          </select>
        </div>
        <div class="rga-field">
          <label class="rga-label">Product Title *</label>
          <input class="rga-input" type="text" name="title" placeholder="e.g. FISCHERSCOPE X-RAY" required>
        </div>
      </div>

      <div class="rga-form-row full" style="margin-bottom:16px;">
        <div class="rga-field">
          <label class="rga-label">Description</label>
          <textarea class="rga-textarea" name="description" placeholder="Product details, specifications..."></textarea>
        </div>
      </div>

      <div class="rga-form-row full">
        <div class="rga-field">
          <label class="rga-label">Product Image</label>
          <label class="rga-file-label" for="prodImg">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"><rect x="3" y="3" width="18" height="18" rx="2"/><circle cx="8.5" cy="8.5" r="1.5"/><polyline points="21 15 16 10 5 21"/></svg>
            <span id="prodImgLabel">Click to upload image</span>
          </label>
          <input class="rga-file-input" type="file" id="prodImg" name="image" accept="image/*"
                 onchange="document.getElementById('prodImgLabel').textContent = this.files[0]?.name || 'No file chosen'">
        </div>
      </div>

      <div style="margin-top:24px;display:flex;gap:10px;">
        <button type="submit" class="rga-btn rga-btn-gold">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"><polyline points="20 6 9 17 4 12"/></svg>
          Save Product
        </button>
        <a href="products.php" class="rga-btn rga-btn-outline">Cancel</a>
      </div>
    </form>
  </div>
</div>
<?php endif; ?>

<!-- ── List ── -->
<div class="rga-card">
  <div class="rga-card-header">
    <span class="rga-card-title">All Products (<?php echo mysqli_num_rows($products); ?>)</span>
  </div>
  <?php if (mysqli_num_rows($products) > 0): ?>
  <div class="rga-table-wrap">
    <table class="rga-table">
      <thead>
        <tr>
          <th>#</th>
          <th>Image</th>
          <th>Title</th>
          <th>Category</th>
          <th>Description</th>
          <th>Added</th>
          <th>Actions</th>
        </tr>
      </thead>
      <tbody>
        <?php $i = 1; while ($p = mysqli_fetch_assoc($products)): ?>
        <tr>
          <td style="color:var(--text-dim);"><?php echo $i++; ?></td>
          <td>
            <?php if ($p['image_path']): ?>
              <img src="../<?php echo htmlspecialchars($p['image_path']); ?>" class="rga-thumb" alt="">
            <?php else: ?>
              <div style="width:48px;height:48px;background:var(--dark3);border-radius:6px;display:flex;align-items:center;justify-content:center;opacity:.35;">
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="3" width="18" height="18" rx="2"/><circle cx="8.5" cy="8.5" r="1.5"/><polyline points="21 15 16 10 5 21"/></svg>
              </div>
            <?php endif; ?>
          </td>
          <td style="color:var(--text);font-weight:500;max-width:180px;"><?php echo htmlspecialchars($p['title']); ?></td>
          <td>
            <?php if ($p['cat_name']): ?>
            <span class="rga-badge rga-badge-gold"><?php echo htmlspecialchars($p['cat_name']); ?></span>
            <?php else: ?>
            <span class="rga-badge rga-badge-dim">Uncategorized</span>
            <?php endif; ?>
          </td>
          <td style="max-width:220px;overflow:hidden;white-space:nowrap;text-overflow:ellipsis;">
            <?php echo htmlspecialchars(substr($p['description'] ?? '', 0, 80)); ?>
          </td>
          <td><?php echo date('M j, Y', strtotime($p['created_at'])); ?></td>
          <td>
            <form method="POST" onsubmit="return confirm('Delete this product?');" style="display:inline;">
              <input type="hidden" name="action" value="delete">
              <input type="hidden" name="id" value="<?php echo $p['id']; ?>">
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
    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M6 2L3 6v14a2 2 0 002 2h14a2 2 0 002-2V6l-3-4z"/><line x1="3" y1="6" x2="21" y2="6"/><path d="M16 10a4 4 0 01-8 0"/></svg>
    No products found. <a href="?action=add" style="color:var(--gold-light)">Add your first product →</a>
  </div>
  <?php endif; ?>
</div>

<?php include 'footer.php'; ?>