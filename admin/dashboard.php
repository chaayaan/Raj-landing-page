<?php
require_once 'auth.php';
require_once 'db.php';
requireLogin();

$pageTitle  = 'Dashboard';
$breadcrumb = 'Dashboard';

// Count stats
$stats = [];
$tables = [
    'employees'      => 'Employees',
    'products'       => 'Products',
    'sister_concerns'=> 'Sister Concerns',
    'gallery'        => 'Gallery Images',
];
foreach ($tables as $table => $label) {
    $res = mysqli_query($conn, "SELECT COUNT(*) AS cnt FROM `$table`");
    $stats[$label] = $res ? (int)mysqli_fetch_assoc($res)['cnt'] : 0;
}

// Active banners
$res = mysqli_query($conn, "SELECT COUNT(*) AS cnt FROM banners WHERE is_active = 1");
$activeBanners = $res ? (int)mysqli_fetch_assoc($res)['cnt'] : 0;

// Recent employees
$recentEmp = mysqli_query($conn, 'SELECT * FROM employees ORDER BY created_at DESC LIMIT 5');

// Recent products
$recentProd = mysqli_query($conn,
    'SELECT p.*, c.name AS cat_name FROM products p
     LEFT JOIN categories c ON c.id = p.category_id
     ORDER BY p.created_at DESC LIMIT 5');

include 'header.php';
?>

<!-- Stats -->
<div class="rga-page-header">
  <div>
    <h1>Good <?php
      $h = (int)date('H');
      echo $h < 12 ? 'morning' : ($h < 18 ? 'afternoon' : 'evening');
    ?>, <em><?php echo htmlspecialchars($_SESSION['admin_username']); ?></em></h1>
    <p>Here's what's happening with your website today.</p>
  </div>
</div>

<div class="rga-stats-grid">
  <div class="rga-stat-card">
    <div class="rga-stat-icon">
      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
        <path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/><circle cx="9" cy="7" r="4"/>
        <path d="M23 21v-2a4 4 0 00-3-3.87"/><path d="M16 3.13a4 4 0 010 7.75"/>
      </svg>
    </div>
    <div class="rga-stat-num"><?php echo $stats['Employees']; ?></div>
    <div class="rga-stat-label">Team Members</div>
  </div>

  <div class="rga-stat-card">
    <div class="rga-stat-icon">
      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
        <path d="M6 2L3 6v14a2 2 0 002 2h14a2 2 0 002-2V6l-3-4z"/>
        <line x1="3" y1="6" x2="21" y2="6"/>
        <path d="M16 10a4 4 0 01-8 0"/>
      </svg>
    </div>
    <div class="rga-stat-num"><?php echo $stats['Products']; ?></div>
    <div class="rga-stat-label">Products</div>
  </div>

  <div class="rga-stat-card">
    <div class="rga-stat-icon">
      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
        <rect x="2" y="7" width="20" height="14" rx="2"/>
        <path d="M16 7V5a2 2 0 00-2-2h-4a2 2 0 00-2 2v2"/>
      </svg>
    </div>
    <div class="rga-stat-num"><?php echo $stats['Sister Concerns']; ?></div>
    <div class="rga-stat-label">Sister Concerns</div>
  </div>

  <div class="rga-stat-card">
    <div class="rga-stat-icon">
      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
        <rect x="3" y="3" width="18" height="18" rx="2"/>
        <circle cx="8.5" cy="8.5" r="1.5"/>
        <polyline points="21 15 16 10 5 21"/>
      </svg>
    </div>
    <div class="rga-stat-num"><?php echo $stats['Gallery Images']; ?></div>
    <div class="rga-stat-label">Gallery Images</div>
  </div>
</div>

<!-- Quick Actions -->
<div style="display:grid;grid-template-columns:1fr 1fr;gap:20px;margin-bottom:24px;">

  <!-- Recent Employees -->
  <div class="rga-card">
    <div class="rga-card-header">
      <span class="rga-card-title">Recent Employees</span>
      <a href="employees.php" class="rga-btn rga-btn-outline rga-btn-xs">View All</a>
    </div>
    <?php if (mysqli_num_rows($recentEmp) > 0): ?>
    <div class="rga-table-wrap">
      <table class="rga-table">
        <thead>
          <tr><th>Photo</th><th>Name</th><th>Added</th></tr>
        </thead>
        <tbody>
          <?php while ($e = mysqli_fetch_assoc($recentEmp)): ?>
          <tr>
            <td>
              <?php if ($e['image']): ?>
                <img src="../<?php echo htmlspecialchars($e['image']); ?>" class="rga-thumb-tall" alt="">
              <?php else: ?>
                <div style="width:36px;height:54px;background:var(--surface);border-radius:4px;display:flex;align-items:center;justify-content:center;opacity:.4;">
                  <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="8" r="4"/><path d="M4 20c0-4 3.6-7 8-7s8 3 8 7"/></svg>
                </div>
              <?php endif; ?>
            </td>
            <td style="color:var(--text);"><?php echo htmlspecialchars($e['name']); ?></td>
            <td><?php echo date('M j', strtotime($e['created_at'])); ?></td>
          </tr>
          <?php endwhile; ?>
        </tbody>
      </table>
    </div>
    <?php else: ?>
    <div class="rga-empty">
      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><circle cx="12" cy="8" r="4"/><path d="M4 20c0-4 3.6-7 8-7s8 3 8 7"/></svg>
      No employees yet. <a href="employees.php" style="color:var(--gold-light)">Add one →</a>
    </div>
    <?php endif; ?>
  </div>

  <!-- Recent Products -->
  <div class="rga-card">
    <div class="rga-card-header">
      <span class="rga-card-title">Recent Products</span>
      <a href="products.php" class="rga-btn rga-btn-outline rga-btn-xs">View All</a>
    </div>
    <?php if (mysqli_num_rows($recentProd) > 0): ?>
    <div class="rga-table-wrap">
      <table class="rga-table">
        <thead>
          <tr><th>Image</th><th>Title</th><th>Category</th></tr>
        </thead>
        <tbody>
          <?php while ($p = mysqli_fetch_assoc($recentProd)): ?>
          <tr>
            <td>
              <?php if ($p['image_path']): ?>
                <img src="../<?php echo htmlspecialchars($p['image_path']); ?>" class="rga-thumb" alt="">
              <?php else: ?>
                <div style="width:48px;height:48px;background:var(--surface);border-radius:6px;display:flex;align-items:center;justify-content:center;opacity:.4;">
                  <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="3" width="18" height="18" rx="2"/><circle cx="8.5" cy="8.5" r="1.5"/><polyline points="21 15 16 10 5 21"/></svg>
                </div>
              <?php endif; ?>
            </td>
            <td style="color:var(--text);"><?php echo htmlspecialchars($p['title']); ?></td>
            <td><span class="rga-badge rga-badge-gold"><?php echo htmlspecialchars($p['cat_name'] ?? '—'); ?></span></td>
          </tr>
          <?php endwhile; ?>
        </tbody>
      </table>
    </div>
    <?php else: ?>
    <div class="rga-empty">
      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M6 2L3 6v14a2 2 0 002 2h14a2 2 0 002-2V6l-3-4z"/><line x1="3" y1="6" x2="21" y2="6"/></svg>
      No products yet. <a href="products.php" style="color:var(--gold-light)">Add one →</a>
    </div>
    <?php endif; ?>
  </div>

</div>

<!-- Quick links -->
<div class="rga-card">
  <div class="rga-card-header">
    <span class="rga-card-title">Quick Actions</span>
  </div>
  <div class="rga-card-body" style="display:flex;gap:12px;flex-wrap:wrap;">
    <a href="employees.php?action=add" class="rga-btn rga-btn-gold">
      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"><line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/></svg>
      Add Employee
    </a>
    <a href="products.php?action=add" class="rga-btn rga-btn-outline">
      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"><line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/></svg>
      Add Product
    </a>
    <a href="concerns.php?action=add" class="rga-btn rga-btn-outline">
      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"><line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/></svg>
      Add Sister Concern
    </a>
    <a href="homepage.php" class="rga-btn rga-btn-outline">
      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"><path d="M3 9l9-7 9 7v11a2 2 0 01-2 2H5a2 2 0 01-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/></svg>
      Manage Homepage
    </a>
  </div>
</div>

<?php include 'footer.php'; ?>