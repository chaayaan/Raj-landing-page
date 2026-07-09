<?php
require_once __DIR__ . '/navbar.php'; // must run before any output (starts the session)
$active = 'home';
?>
<!DOCTYPE html>
<html lang="<?php echo $lang; ?>" translate="no" class="notranslate">
<head>
<meta charset="UTF-8">
<meta name="google" content="notranslate">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no, viewport-fit=cover">
<title><?php echo htmlspecialchars($L['brand'] . ' — ' . $L['brand_sub']); ?></title>
<link rel="icon" type="image/png" href="../favicon.png">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700&family=Cormorant+Garamond:ital,wght@0,300;0,400;0,600;1,300;1,400&display=swap" rel="stylesheet">
<style>
<?php rg_navbar_css(); ?>

/* ---------- Home page ---------- */
.rg-home-banner{
  margin:14px 16px; border-radius:16px; overflow:hidden; position:relative;
  height:140px; background:linear-gradient(135deg,var(--rg-gold) 0%, #9A7218 100%);
  display:flex; align-items:center; justify-content:center;
}
.rg-home-banner img{ width:100%; height:100%; object-fit:cover; position:absolute; inset:0; }
.rg-home-banner-text{ position:relative; z-index:2; text-align:center; color:#fff; padding:0 20px; }
.rg-home-banner-text b{ font-family:'Cormorant Garamond',serif; font-size:1.3rem; display:block; }
.rg-home-banner-text span{ font-size:.72rem; opacity:.9; }

.rg-huid-info-grid{ display:flex; gap:10px; padding:0 16px; }
.rg-huid-info-card{
  flex:1; background:#fff; border:none; border-radius:12px;
  padding:14px 12px; text-align:center; box-shadow:var(--rg-elev-1);
  transition:box-shadow .18s ease, transform .18s ease;
}
.rg-huid-info-card:active{ box-shadow:var(--rg-elev-1); transform:translateY(1px); }
.rg-huid-info-card .rg-icon{ font-size:1.3rem; margin-bottom:4px; }
.rg-huid-info-card h3{ font-size:.78rem; font-weight:700; color:var(--rg-dark); margin-bottom:3px; }
.rg-huid-info-card p{ font-size:.68rem; color:var(--rg-muted); line-height:1.5; }

.rg-search-cta-wrap{ padding:16px; }
.rg-search-cta{
  display:flex; align-items:center; justify-content:center; gap:10px;
  width:100%; background:var(--rg-gold); color:#fff; border:none;
  padding:16px; border-radius:100px; font-size:.95rem; font-weight:700;
  letter-spacing:.03em; box-shadow:var(--rg-elev-3);
  transition:box-shadow .15s ease, transform .1s ease;
}
.rg-search-cta:active{ box-shadow:var(--rg-elev-1); transform:scale(.98); }
.rg-search-cta svg{ flex-shrink:0; }

.rg-home-sample{ padding:10px 16px 4px; text-align:center; }
.rg-home-sample img{ border-radius:14px; margin:0 auto; max-height:180px; object-fit:cover; box-shadow:var(--rg-elev-2); }
.rg-home-sample-caption{ font-size:.7rem; color:var(--rg-muted); margin-top:8px; }

.rg-home-footer{
  margin-top:20px; padding:22px 16px calc(20px + var(--rg-safe-b));
  background:var(--rg-dark); text-align:center;
}
.rg-home-footer .rg-footer-site{ color:var(--rg-gold-light); font-size:.82rem; font-weight:600; letter-spacing:.03em; }
.rg-home-footer .rg-footer-tag{ color:rgba(253,250,244,0.4); font-size:.68rem; margin-top:2px; }
.rg-home-footer .rg-footer-icons{ display:flex; justify-content:center; gap:14px; margin-top:14px; }
.rg-home-footer .rg-footer-icons a{
  width:36px; height:36px; border-radius:50%; display:flex; align-items:center; justify-content:center;
  box-shadow:var(--rg-elev-1); transition:box-shadow .15s ease, transform .1s ease;
}
.rg-home-footer .rg-footer-icons a:active{ transform:scale(.92); }
.rg-home-footer .rg-fb{ background:#1877F2; }
.rg-home-footer .rg-wp{ background:#25D366; }
</style>
</head>
<body>

<?php rg_navbar_render(); ?>

<!-- ══ HOME CONTENT ══ -->

<!-- <div class="rg-home-banner" id="about">
    <img src="banner.jpg" alt="" onerror="this.style.display='none'">
    <div class="rg-home-banner-text">
        <b><?php echo htmlspecialchars($L['home_banner_title']); ?></b>
        <span><?php echo htmlspecialchars($L['home_banner_sub']); ?></span>
    </div>
</div> -->


<!-- Sample hallmark image -->
<div class="rg-home-sample">
    <img src="app banner 1.png" alt="<?php echo htmlspecialchars($L['sample_caption']); ?>" onerror="this.src='https://via.placeholder.com/500x260/F5EDD6/B8881E?text=Hallmark+Sample'">
    <div class="rg-home-sample-caption"><?php echo htmlspecialchars($L['sample_caption']); ?></div>
</div>

<!-- Search CTA -->
<div class="rg-search-cta-wrap">
    <a href="search.php" class="rg-search-cta rg-ripple">
        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round"><circle cx="11" cy="11" r="8"/><path d="m21 21-4.3-4.3"/></svg>
        <?php echo htmlspecialchars($L['search_cta']); ?>
    </a>
</div>

<!-- Short HUID info -->
<div class="rg-huid-info-grid">
    <div class="rg-huid-info-card rg-press">
        <div class="rg-icon">🔎</div>
        <h3><?php echo htmlspecialchars($L['huid_what_title']); ?></h3>
        <p><?php echo htmlspecialchars($L['huid_what_body']); ?></p>
    </div>
    <div class="rg-huid-info-card rg-press">
        <div class="rg-icon">🛡️</div>
        <h3><?php echo htmlspecialchars($L['huid_why_title']); ?></h3>
        <p><?php echo htmlspecialchars($L['huid_why_body']); ?></p>
    </div>
</div>

<!-- Footer -->
<div class="rg-home-footer">
    <div class="rg-footer-site"><?php echo htmlspecialchars($L['footer_website']); ?></div>
    <div class="rg-footer-tag"><?php echo htmlspecialchars($L['footer_tagline']); ?></div>
    <div class="rg-footer-icons">
        <a href="https://www.facebook.com/rajasiwari" target="_blank" rel="noopener" class="rg-fb rg-ripple" aria-label="Facebook">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="white"><path d="M24 12.073C24 5.405 18.627 0 12 0S0 5.405 0 12.073C0 18.1 4.388 23.094 10.125 24v-8.437H7.078v-3.49h3.047V9.41c0-3.025 1.792-4.697 4.533-4.697 1.312 0 2.686.236 2.686.236v2.97h-1.513c-1.491 0-1.956.93-1.956 1.886v2.267h3.328l-.532 3.49h-2.796V24C19.612 23.094 24 18.1 24 12.073z"/></svg>
        </a>
        <a href="https://wa.me/8801716469866" target="_blank" rel="noopener" class="rg-wp rg-ripple" aria-label="WhatsApp">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="white"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347M12.05 0C5.495 0 .157 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.688 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0012.05 0z"/></svg>
        </a>
    </div>
</div>

<?php rg_bottomnav_render(); ?>
<script>
<?php rg_navbar_js(); ?>
</script>
</body>
</html>