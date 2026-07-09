<?php
require_once __DIR__ . '/navbar.php'; // must run before any output (starts the session)
$active = 'profile';
?>
<!DOCTYPE html>
<html lang="<?php echo $lang; ?>" translate="no" class="notranslate">
<head>
<meta charset="UTF-8">
<meta name="google" content="notranslate">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no, viewport-fit=cover">
<title><?php echo htmlspecialchars($L['profile_title'] . ' | ' . $L['brand']); ?></title>
<link rel="icon" type="image/png" href="../favicon.png">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700&family=Cormorant+Garamond:ital,wght@0,300;0,400;0,600;1,300;1,400&display=swap" rel="stylesheet">
<style>
<?php rg_navbar_css(); ?>

/* ---------- Profile page ---------- */
.rg-page{ padding:16px 16px 8px; max-width:560px; margin:0 auto; }
.rg-card{
  background:#fff; border:none; border-radius:14px;
  padding:16px; margin-bottom:14px; box-shadow:var(--rg-elev-1);
}
.rg-page-title{
  font-family:'Cormorant Garamond',serif; font-size:1.5rem; font-weight:700;
  color:var(--rg-gold); margin-bottom:10px;
}
.rg-body-text{ font-size:.88rem; color:var(--rg-muted); line-height:1.75; }

.rg-profile-hero{
  display:flex; flex-direction:column; align-items:center; gap:10px;
  padding:32px 16px 8px; text-align:center;
}
.rg-profile-avatar{
  width:76px; height:76px; border-radius:50%; background:var(--rg-gold-pale);
  display:flex; align-items:center; justify-content:center; color:var(--rg-gold);
  box-shadow:var(--rg-elev-2);
}
.rg-profile-soon{
  display:inline-block; margin-top:6px; padding:4px 12px; border-radius:100px;
  background:var(--rg-gold-pale); color:var(--rg-gold); font-size:.68rem;
  font-weight:700; letter-spacing:.04em; text-transform:uppercase;
  box-shadow:var(--rg-elev-1);
}
</style>
</head>
<body>

<?php rg_navbar_render(); ?>

<div class="rg-profile-hero">
    <div class="rg-profile-avatar">
        <svg width="34" height="34" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/></svg>
    </div>
    <span class="rg-profile-soon">Coming Soon</span>
</div>

<div class="rg-page">
    <div class="rg-card">
        <div class="rg-page-title"><?php echo htmlspecialchars($L['profile_title']); ?></div>
        <p class="rg-body-text"><?php echo htmlspecialchars($L['profile_body']); ?></p>
    </div>
</div>

<?php rg_bottomnav_render(); ?>
<script>
<?php rg_navbar_js(); ?>
</script>
</body>
</html>