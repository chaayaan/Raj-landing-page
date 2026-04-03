<?php
// Determine which page is active for nav highlighting
$currentPage = basename($_SERVER['PHP_SELF']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo isset($pageTitle) ? htmlspecialchars($pageTitle) . ' — ' : ''; ?>Raj Aiswari Admin</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700&family=Cormorant+Garamond:wght@400;600&display=swap" rel="stylesheet">
  <style>
    /* ─── Reset & Root ────────────────────────────────── */
    *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }

    :root {
      --gold:        #B8881E;
      --gold-light:  #D4A832;
      --gold-pale:   #F5E9C8;
      --dark:        #1C1812;
      --dark2:       #252118;
      --dark3:       #2E2820;
      --surface:     #322C22;
      --surface2:    #3D362A;
      --text:        #FDFAF4;
      --text-muted:  rgba(253,250,244,0.45);
      --text-dim:    rgba(253,250,244,0.22);
      --border:      rgba(184,136,30,0.18);
      --border-dim:  rgba(253,250,244,0.07);
      --danger:      #E05252;
      --success:     #52A87A;
      --sidebar-w:   240px;
      --top-h:       60px;
      --radius:      8px;
    }

    html, body {
      height: 100%;
      background: var(--dark);
      color: var(--text);
      font-family: 'Outfit', sans-serif;
      font-size: 14px;
      line-height: 1.6;
    }

    a { color: inherit; text-decoration: none; }
    img { max-width: 100%; display: block; }
    button, input, select, textarea { font-family: inherit; }

    /* ─── Layout Shell ───────────────────────────────── */
    .rga-layout {
      display: flex;
      min-height: 100vh;
    }

    /* ─── Sidebar ─────────────────────────────────────── */
    .rga-sidebar {
      width: var(--sidebar-w);
      background: var(--dark2);
      border-right: 1px solid var(--border-dim);
      display: flex;
      flex-direction: column;
      position: fixed;
      top: 0; left: 0; bottom: 0;
      z-index: 100;
      transition: transform 0.28s cubic-bezier(.4,0,.2,1);
    }

    .rga-sidebar-logo {
      padding: 20px 20px 16px;
      border-bottom: 1px solid var(--border-dim);
      display: flex;
      align-items: center;
      gap: 10px;
    }
    .rga-sidebar-logo .rga-logo-icon {
      width: 32px; height: 32px; border-radius: 6px;
      background: linear-gradient(135deg, var(--gold), var(--gold-light));
      display: flex; align-items: center; justify-content: center;
      flex-shrink: 0;
    }
    .rga-sidebar-logo .rga-logo-icon svg { width: 16px; height: 16px; }
    .rga-logo-text { line-height: 1.2; }
    .rga-logo-text strong {
      font-family: 'Cormorant Garamond', serif;
      font-size: 1rem; font-weight: 600;
      color: var(--gold-light);
      display: block;
    }
    .rga-logo-text span {
      font-size: 0.62rem; font-weight: 400;
      color: var(--text-dim); letter-spacing: 0.12em;
      text-transform: uppercase;
    }

    .rga-nav {
      flex: 1;
      overflow-y: auto;
      padding: 12px 0;
    }
    .rga-nav-section {
      padding: 18px 16px 6px;
      font-size: 0.58rem;
      font-weight: 700;
      letter-spacing: 0.2em;
      text-transform: uppercase;
      color: var(--text-dim);
    }
    .rga-nav-item {
      display: flex;
      align-items: center;
      gap: 10px;
      padding: 10px 16px;
      color: var(--text-muted);
      font-size: 0.82rem;
      font-weight: 400;
      border-radius: 0;
      transition: color 0.2s, background 0.2s;
      cursor: pointer;
      border-left: 2px solid transparent;
    }
    .rga-nav-item svg {
      width: 16px; height: 16px; flex-shrink: 0;
      opacity: 0.6; transition: opacity 0.2s;
    }
    .rga-nav-item:hover {
      color: var(--text);
      background: rgba(184,136,30,0.06);
    }
    .rga-nav-item:hover svg { opacity: 1; }
    .rga-nav-item.active {
      color: var(--gold-light);
      background: rgba(184,136,30,0.1);
      border-left-color: var(--gold);
      font-weight: 500;
    }
    .rga-nav-item.active svg { opacity: 1; }

    .rga-sidebar-footer {
      padding: 12px 16px;
      border-top: 1px solid var(--border-dim);
    }
    .rga-sidebar-footer a {
      display: flex; align-items: center; gap: 8px;
      color: var(--text-dim);
      font-size: 0.75rem;
      padding: 8px 0;
      transition: color 0.2s;
    }
    .rga-sidebar-footer a:hover { color: var(--danger); }
    .rga-sidebar-footer a svg { width: 14px; height: 14px; }

    /* ─── Main Area ──────────────────────────────────── */
    .rga-main {
      margin-left: var(--sidebar-w);
      flex: 1;
      display: flex;
      flex-direction: column;
      min-height: 100vh;
    }

    /* ─── Top Bar ─────────────────────────────────────── */
    .rga-topbar {
      height: var(--top-h);
      background: var(--dark2);
      border-bottom: 1px solid var(--border-dim);
      display: flex;
      align-items: center;
      justify-content: space-between;
      padding: 0 28px;
      position: sticky;
      top: 0;
      z-index: 90;
    }
    .rga-topbar-left {
      display: flex; align-items: center; gap: 12px;
    }
    .rga-topbar-title {
      font-size: 0.9rem;
      font-weight: 500;
      color: var(--text);
    }
    .rga-breadcrumb {
      font-size: 0.7rem;
      color: var(--text-dim);
      display: flex; align-items: center; gap: 6px;
    }
    .rga-breadcrumb a { color: var(--text-dim); }
    .rga-breadcrumb a:hover { color: var(--gold-light); }
    .rga-breadcrumb .sep { opacity: 0.4; }

    .rga-topbar-right {
      display: flex; align-items: center; gap: 14px;
    }
    .rga-topbar-user {
      display: flex; align-items: center; gap: 8px;
    }
    .rga-user-avatar {
      width: 30px; height: 30px; border-radius: 50%;
      background: linear-gradient(135deg, var(--gold), var(--gold-light));
      display: flex; align-items: center; justify-content: center;
      font-size: 0.65rem; font-weight: 700; color: var(--dark);
    }
    .rga-user-name {
      font-size: 0.78rem;
      color: var(--text-muted);
    }

    /* ─── Content Area ───────────────────────────────── */
    .rga-content {
      flex: 1;
      padding: 28px;
    }

    /* ─── Page Header ─────────────────────────────────── */
    .rga-page-header {
      display: flex;
      align-items: flex-start;
      justify-content: space-between;
      gap: 16px;
      margin-bottom: 28px;
      flex-wrap: wrap;
    }
    .rga-page-header h1 {
      font-family: 'Cormorant Garamond', serif;
      font-size: 1.7rem;
      font-weight: 600;
      color: var(--text);
      line-height: 1.2;
    }
    .rga-page-header h1 em {
      font-style: italic;
      color: var(--gold-light);
    }
    .rga-page-header p {
      font-size: 0.78rem;
      color: var(--text-muted);
      margin-top: 4px;
      font-weight: 300;
    }

    /* ─── Cards ──────────────────────────────────────── */
    .rga-card {
      background: var(--dark2);
      border: 1px solid var(--border-dim);
      border-radius: var(--radius);
      overflow: hidden;
    }
    .rga-card-header {
      padding: 16px 20px;
      border-bottom: 1px solid var(--border-dim);
      display: flex; align-items: center;
      justify-content: space-between; gap: 12px;
    }
    .rga-card-title {
      font-size: 0.78rem;
      font-weight: 600;
      letter-spacing: 0.06em;
      text-transform: uppercase;
      color: var(--text-muted);
    }
    .rga-card-body { padding: 20px; }

    /* ─── Forms ──────────────────────────────────────── */
    .rga-form-row {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 16px;
      margin-bottom: 16px;
    }
    .rga-form-row.full { grid-template-columns: 1fr; }
    .rga-form-row.three { grid-template-columns: 1fr 1fr 1fr; }

    .rga-field { display: flex; flex-direction: column; gap: 6px; }
    .rga-label {
      font-size: 0.7rem;
      font-weight: 600;
      letter-spacing: 0.1em;
      text-transform: uppercase;
      color: var(--text-muted);
    }
    .rga-input, .rga-select, .rga-textarea {
      background: var(--dark3);
      border: 1px solid var(--border-dim);
      border-radius: 6px;
      padding: 9px 12px;
      color: var(--text);
      font-size: 0.82rem;
      transition: border-color 0.2s, background 0.2s;
      outline: none;
      width: 100%;
    }
    .rga-input:focus, .rga-select:focus, .rga-textarea:focus {
      border-color: var(--gold);
      background: var(--surface);
    }
    .rga-textarea { resize: vertical; min-height: 100px; }
    .rga-select option { background: var(--dark3); }

    .rga-file-label {
      display: flex;
      align-items: center;
      gap: 10px;
      padding: 10px 14px;
      background: var(--dark3);
      border: 1px dashed rgba(184,136,30,0.3);
      border-radius: 6px;
      cursor: pointer;
      color: var(--text-muted);
      font-size: 0.78rem;
      transition: border-color 0.2s, color 0.2s;
    }
    .rga-file-label:hover { border-color: var(--gold); color: var(--gold-light); }
    .rga-file-label svg { width: 16px; height: 16px; flex-shrink: 0; }
    .rga-file-input { display: none; }

    /* ─── Buttons ─────────────────────────────────────── */
    .rga-btn {
      display: inline-flex;
      align-items: center;
      gap: 7px;
      padding: 9px 18px;
      border-radius: 6px;
      font-size: 0.78rem;
      font-weight: 500;
      cursor: pointer;
      border: none;
      transition: opacity 0.2s, transform 0.15s;
      letter-spacing: 0.03em;
    }
    .rga-btn:hover { opacity: 0.88; transform: translateY(-1px); }
    .rga-btn:active { transform: translateY(0); }
    .rga-btn svg { width: 14px; height: 14px; }

    .rga-btn-gold {
      background: linear-gradient(135deg, var(--gold), var(--gold-light));
      color: var(--dark);
    }
    .rga-btn-outline {
      background: transparent;
      border: 1px solid var(--border);
      color: var(--text-muted);
    }
    .rga-btn-outline:hover { border-color: var(--gold); color: var(--gold-light); }
    .rga-btn-danger {
      background: rgba(224,82,82,0.12);
      border: 1px solid rgba(224,82,82,0.25);
      color: var(--danger);
    }
    .rga-btn-danger:hover { background: rgba(224,82,82,0.22); opacity: 1; }
    .rga-btn-sm { padding: 6px 12px; font-size: 0.7rem; }
    .rga-btn-xs { padding: 4px 8px; font-size: 0.65rem; }

    /* ─── Tables ──────────────────────────────────────── */
    .rga-table-wrap { overflow-x: auto; }
    .rga-table {
      width: 100%;
      border-collapse: collapse;
    }
    .rga-table th, .rga-table td {
      padding: 11px 16px;
      text-align: left;
      font-size: 0.78rem;
    }
    .rga-table th {
      font-size: 0.62rem;
      font-weight: 700;
      letter-spacing: 0.15em;
      text-transform: uppercase;
      color: var(--text-dim);
      border-bottom: 1px solid var(--border-dim);
    }
    .rga-table td {
      border-bottom: 1px solid rgba(253,250,244,0.04);
      color: var(--text-muted);
      vertical-align: middle;
    }
    .rga-table tr:last-child td { border-bottom: none; }
    .rga-table tr:hover td { background: rgba(184,136,30,0.04); }

    .rga-thumb {
      width: 48px; height: 48px;
      border-radius: 6px;
      object-fit: cover;
      border: 1px solid var(--border-dim);
    }
    .rga-thumb-tall {
      width: 36px; height: 54px;
      border-radius: 4px;
      object-fit: cover;
      border: 1px solid var(--border-dim);
    }

    /* ─── Alert / Flash Messages ─────────────────────── */
    .rga-alert {
      padding: 12px 16px;
      border-radius: var(--radius);
      font-size: 0.8rem;
      margin-bottom: 20px;
      display: flex;
      align-items: center;
      gap: 10px;
    }
    .rga-alert svg { width: 15px; height: 15px; flex-shrink: 0; }
    .rga-alert-success {
      background: rgba(82,168,122,0.12);
      border: 1px solid rgba(82,168,122,0.25);
      color: #6fcfa0;
    }
    .rga-alert-error {
      background: rgba(224,82,82,0.1);
      border: 1px solid rgba(224,82,82,0.22);
      color: #f08080;
    }

    /* ─── Badge ──────────────────────────────────────── */
    .rga-badge {
      display: inline-flex;
      align-items: center;
      padding: 3px 8px;
      border-radius: 20px;
      font-size: 0.62rem;
      font-weight: 600;
      letter-spacing: 0.06em;
      text-transform: uppercase;
    }
    .rga-badge-gold {
      background: rgba(184,136,30,0.15);
      color: var(--gold-light);
      border: 1px solid rgba(184,136,30,0.25);
    }
    .rga-badge-green {
      background: rgba(82,168,122,0.12);
      color: #6fcfa0;
      border: 1px solid rgba(82,168,122,0.2);
    }
    .rga-badge-dim {
      background: rgba(253,250,244,0.05);
      color: var(--text-dim);
      border: 1px solid var(--border-dim);
    }

    /* ─── Stats (dashboard) ──────────────────────────── */
    .rga-stats-grid {
      display: grid;
      grid-template-columns: repeat(4, 1fr);
      gap: 16px;
      margin-bottom: 24px;
    }
    .rga-stat-card {
      background: var(--dark2);
      border: 1px solid var(--border-dim);
      border-radius: var(--radius);
      padding: 20px;
      display: flex;
      flex-direction: column;
      gap: 10px;
      transition: border-color 0.2s;
    }
    .rga-stat-card:hover { border-color: var(--border); }
    .rga-stat-icon {
      width: 36px; height: 36px; border-radius: 8px;
      display: flex; align-items: center; justify-content: center;
      background: rgba(184,136,30,0.1);
    }
    .rga-stat-icon svg { width: 18px; height: 18px; color: var(--gold); }
    .rga-stat-num {
      font-family: 'Cormorant Garamond', serif;
      font-size: 2rem; font-weight: 600;
      color: var(--text); line-height: 1;
    }
    .rga-stat-label {
      font-size: 0.68rem;
      color: var(--text-dim);
      text-transform: uppercase;
      letter-spacing: 0.1em;
    }

    /* ─── Empty state ────────────────────────────────── */
    .rga-empty {
      padding: 48px 24px;
      text-align: center;
      color: var(--text-dim);
      font-size: 0.82rem;
    }
    .rga-empty svg {
      width: 36px; height: 36px;
      opacity: 0.25; margin: 0 auto 12px;
      display: block;
    }

    /* ─── Toggle (active/inactive) ───────────────────── */
    .rga-toggle {
      position: relative;
      display: inline-block;
      width: 36px; height: 20px;
    }
    .rga-toggle input { opacity: 0; width: 0; height: 0; }
    .rga-toggle-slider {
      position: absolute; inset: 0;
      background: rgba(253,250,244,0.1);
      border-radius: 20px;
      cursor: pointer;
      transition: background 0.25s;
    }
    .rga-toggle-slider::before {
      content: '';
      position: absolute;
      width: 14px; height: 14px;
      left: 3px; top: 3px;
      background: white;
      border-radius: 50%;
      transition: transform 0.25s;
    }
    .rga-toggle input:checked + .rga-toggle-slider { background: var(--gold); }
    .rga-toggle input:checked + .rga-toggle-slider::before { transform: translateX(16px); }

    /* ─── Responsive ─────────────────────────────────── */
    @media (max-width: 900px) {
      .rga-stats-grid { grid-template-columns: 1fr 1fr; }
      .rga-form-row.three { grid-template-columns: 1fr 1fr; }
    }
    @media (max-width: 700px) {
      .rga-sidebar { transform: translateX(-100%); }
      .rga-sidebar.open { transform: none; }
      .rga-main { margin-left: 0; }
      .rga-form-row { grid-template-columns: 1fr; }
      .rga-stats-grid { grid-template-columns: 1fr 1fr; }
      .rga-content { padding: 16px; }
    }
  </style>
</head>
<body>

<div class="rga-layout">

  <!-- ── Sidebar ── -->
  <aside class="rga-sidebar" id="rgaSidebar">

    <div class="rga-sidebar-logo">
      <div class="rga-logo-icon">
        <svg viewBox="0 0 24 24" fill="none" stroke="var(--dark)" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
          <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/>
        </svg>
      </div>
      <div class="rga-logo-text">
        <strong>Raj Aiswari</strong>
        <span>Admin Panel</span>
      </div>
    </div>

    <nav class="rga-nav">
      <div class="rga-nav-section">Overview</div>

      <a href="dashboard.php" class="rga-nav-item <?php echo $currentPage === 'dashboard.php' ? 'active' : ''; ?>">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
          <rect x="3" y="3" width="7" height="7"/><rect x="14" y="3" width="7" height="7"/>
          <rect x="14" y="14" width="7" height="7"/><rect x="3" y="14" width="7" height="7"/>
        </svg>
        Dashboard
      </a>

      <div class="rga-nav-section">Content</div>

      <a href="employees.php" class="rga-nav-item <?php echo $currentPage === 'employees.php' ? 'active' : ''; ?>">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
          <path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/>
          <circle cx="9" cy="7" r="4"/>
          <path d="M23 21v-2a4 4 0 00-3-3.87"/>
          <path d="M16 3.13a4 4 0 010 7.75"/>
        </svg>
        Employees
      </a>

      <a href="products.php" class="rga-nav-item <?php echo $currentPage === 'products.php' ? 'active' : ''; ?>">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
          <path d="M6 2L3 6v14a2 2 0 002 2h14a2 2 0 002-2V6l-3-4z"/>
          <line x1="3" y1="6" x2="21" y2="6"/>
          <path d="M16 10a4 4 0 01-8 0"/>
        </svg>
        Products
      </a>

      <a href="concerns.php" class="rga-nav-item <?php echo $currentPage === 'concerns.php' ? 'active' : ''; ?>">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
          <rect x="2" y="7" width="20" height="14" rx="2"/>
          <path d="M16 7V5a2 2 0 00-2-2h-4a2 2 0 00-2 2v2"/>
          <line x1="12" y1="12" x2="12" y2="17"/>
          <line x1="9" y1="14.5" x2="15" y2="14.5"/>
        </svg>
        Sister Concerns
      </a>

      <a href="homepage.php" class="rga-nav-item <?php echo $currentPage === 'homepage.php' ? 'active' : ''; ?>">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
          <path d="M3 9l9-7 9 7v11a2 2 0 01-2 2H5a2 2 0 01-2-2z"/>
          <polyline points="9 22 9 12 15 12 15 22"/>
        </svg>
        Homepage
      </a>

    </nav>

    <div class="rga-sidebar-footer">
      <a href="../index.php" target="_blank">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
          <path d="M18 13v6a2 2 0 01-2 2H5a2 2 0 01-2-2V8a2 2 0 012-2h6"/>
          <polyline points="15 3 21 3 21 9"/>
          <line x1="10" y1="14" x2="21" y2="3"/>
        </svg>
        View Website
      </a>
      <a href="logout.php">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
          <path d="M9 21H5a2 2 0 01-2-2V5a2 2 0 012-2h4"/>
          <polyline points="16 17 21 12 16 7"/>
          <line x1="21" y1="12" x2="9" y2="12"/>
        </svg>
        Logout
      </a>
    </div>

  </aside>

  <!-- ── Main ── -->
  <main class="rga-main">

    <!-- Top Bar -->
    <div class="rga-topbar">
      <div class="rga-topbar-left">
        <button onclick="document.getElementById('rgaSidebar').classList.toggle('open')"
          style="background:none;border:none;cursor:pointer;color:var(--text-muted);padding:4px;display:none"
          id="rgaMenuBtn">
          <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"><line x1="3" y1="6" x2="21" y2="6"/><line x1="3" y1="12" x2="21" y2="12"/><line x1="3" y1="18" x2="21" y2="18"/></svg>
        </button>
        <?php if (isset($breadcrumb)): ?>
        <div class="rga-breadcrumb">
          <a href="dashboard.php">Admin</a>
          <span class="sep">/</span>
          <span><?php echo htmlspecialchars($breadcrumb); ?></span>
        </div>
        <?php endif; ?>
      </div>
      <div class="rga-topbar-right">
        <div class="rga-topbar-user">
          <div class="rga-user-avatar">
            <?php echo strtoupper(substr($_SESSION['admin_username'] ?? 'A', 0, 1)); ?>
          </div>
          <span class="rga-user-name"><?php echo htmlspecialchars($_SESSION['admin_username'] ?? 'Admin'); ?></span>
        </div>
      </div>
    </div>

    <!-- Content -->
    <div class="rga-content">

    <script>
      // Show mobile menu btn
      if (window.innerWidth <= 700) {
        document.getElementById('rgaMenuBtn').style.display = 'block';
      }
    </script>