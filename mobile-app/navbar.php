<?php
/**
 * navbar.php
 * ─────────────────────────────────────────────────────────────
 * Self-contained header + bottom navigation for the Rajaiswari
 * mobile app. Handles the session-based language switch itself,
 * so every page only needs ONE include:
 *
 *   require_once __DIR__ . '/navbar.php';
 *   // $L (strings) and $lang are now available
 *
 * Set $active to 'home' | 'search' | 'profile' BEFORE including
 * this file to highlight the current bottom-nav tab.
 *
 * Must be included before any HTML output (it starts the session).
 * Call rg_navbar_render() after <body> opens to print the header,
 * intro overlay, and hamburger menu. Call rg_bottomnav_render()
 * near the end of <body> to print the bottom nav.
 * ─────────────────────────────────────────────────────────────
 */

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

if (isset($_GET['lang']) && in_array($_GET['lang'], array('en', 'bn'), true)) {
    $_SESSION['rg_lang'] = $_GET['lang'];
}

$lang = isset($_SESSION['rg_lang']) ? $_SESSION['rg_lang'] : 'en';

$rg_strings = array(

    'en' => array(
        'brand'                 => 'Rajaiswari',
        'brand_sub'             => 'Gold Testing Center',
        'nav_home'              => 'Home',
        'nav_search'            => 'Search',
        'nav_profile'           => 'Profile',
        'menu_intro_video'      => 'Intro Video',
        'menu_about'            => 'About Software',
        'menu_help'             => 'Help / User Guide',
        'menu_contact'          => 'Contact',
        'menu_privacy'          => 'Privacy Policy',
        'menu_close'            => 'Close menu',

        'home_banner_title'     => 'Rajaiswari Gold',
        'home_banner_sub'       => 'Hallmark & Tunch Testing Center',
        'huid_what_title'       => 'What is HUID?',
        'huid_what_body'        => 'HUID is a unique 6-character code stamped on every hallmark / tunch report we issue. It proves your report was genuinely tested and certified by us.',
        'huid_why_title'        => 'Why verify it?',
        'huid_why_body'         => 'Verifying the HUID confirms your gold\'s purity report is authentic — protecting you from fraudulent or duplicated reports.',
        'search_cta'            => 'Search HUID Report',
        'sample_caption'        => 'Sample hallmark-marked ornament',
        'footer_website'        => 'www.rajaiswari.com',
        'footer_tagline'        => 'Chattogram, Bangladesh',

        'search_title'          => 'Verify Your Report',
        'search_placeholder'    => 'Enter HUID e.g. 2226B9',
        'search_btn'            => 'Search',
        'scan_btn'              => 'Scan',
        'search_hint'           => 'Enter HUID or scan the QR code on your report',
        'search_loading'        => 'Looking up report...',
        'search_not_found'      => 'Report Not Found',
        'search_try_again'      => 'Please verify the QR code or HUID and try again.',
        'search_initial_info'   => 'Every genuine Rajaiswari report has a unique HUID. Search or scan it here to confirm your hallmark or tunch report is authentic — always verify before buying jewellery.',

        'about_title'           => 'About the Software',
        'about_body'            => 'This app lets you instantly verify the authenticity of any hallmark or tunch (gold purity) report issued by Rajaiswari Gold Testing Center using its unique HUID code.',

        'profile_title'         => 'Profile',
        'profile_body'          => 'Profile features are coming soon.',
        'lang_name_en'          => 'English',
        'lang_name_bn'          => 'বাংলা',
    ),

    'bn' => array(
        'brand'                 => 'রাজঐশ্বরী',
        'brand_sub'             => 'গোল্ড টেস্টিং সেন্টার',
        'nav_home'              => 'হোম',
        'nav_search'            => 'সার্চ',
        'nav_profile'           => 'প্রোফাইল',
        'menu_intro_video'      => 'ইন্ট্রো ভিডিও',
        'menu_about'            => 'সফটওয়্যার সম্পর্কে',
        'menu_help'             => 'হেল্প / গাইড',
        'menu_contact'          => 'যোগাযোগ',
        'menu_privacy'          => 'প্রাইভেসি পলিসি',
        'menu_close'            => 'মেনু বন্ধ করুন',

        'home_banner_title'     => 'রাজঐশ্বরী গোল্ড',
        'home_banner_sub'       => 'হলমার্ক ও টঞ্চ টেস্টিং সেন্টার',
        'huid_what_title'       => 'HUID কী?',
        'huid_what_body'        => 'HUID হলো আমাদের ইস্যুকৃত প্রতিটি হলমার্ক / টঞ্চ রিপোর্টে থাকা একটি ইউনিক ৬-ডিজিটের কোড। এটি প্রমাণ করে রিপোর্টটি আমাদের দ্বারা সঠিকভাবে পরীক্ষিত ও সার্টিফায়েড।',
        'huid_why_title'        => 'কেন যাচাই করবেন?',
        'huid_why_body'         => 'HUID যাচাই করলে নিশ্চিত হওয়া যায় আপনার স্বর্ণের রিপোর্টটি আসল — এটি নকল বা জাল রিপোর্ট থেকে আপনাকে সুরক্ষা দেয়।',
        'search_cta'            => 'HUID রিপোর্ট সার্চ করুন',
        'sample_caption'        => 'হলমার্ক-চিহ্নিত অলঙ্কারের নমুনা',
        'footer_website'        => 'www.rajaiswari.com',
        'footer_tagline'        => 'চট্টগ্রাম, বাংলাদেশ',

        'search_title'          => 'আপনার রিপোর্ট যাচাই করুন',
        'search_placeholder'    => 'HUID লিখুন যেমন 2226B9',
        'search_btn'            => 'সার্চ',
        'scan_btn'              => 'স্ক্যান',
        'search_hint'           => 'HUID লিখুন অথবা রিপোর্টের QR কোড স্ক্যান করুন',
        'search_loading'        => 'রিপোর্ট খোঁজা হচ্ছে...',
        'search_not_found'      => 'রিপোর্ট পাওয়া যায়নি',
        'search_try_again'      => 'অনুগ্রহ করে QR কোড অথবা HUID যাচাই করে আবার চেষ্টা করুন।',
        'search_initial_info'   => 'প্রতিটি আসল রাজঐশ্বরী রিপোর্টে একটি ইউনিক HUID থাকে। আপনার হলমার্ক বা টঞ্চ রিপোর্ট আসল কিনা যাচাই করতে এখানে সার্চ বা স্ক্যান করুন — গহনা কেনার আগে সবসময় যাচাই করুন।',

        'about_title'           => 'সফটওয়্যার সম্পর্কে',
        'about_body'            => 'এই অ্যাপের মাধ্যমে আপনি রাজঐশ্বরী গোল্ড টেস্টিং সেন্টার কর্তৃক ইস্যুকৃত যেকোনো হলমার্ক বা টঞ্চ রিপোর্টের সত্যতা তার ইউনিক HUID কোড দিয়ে তাৎক্ষণিকভাবে যাচাই করতে পারবেন।',

        'profile_title'         => 'প্রোফাইল',
        'profile_body'          => 'প্রোফাইল ফিচার শীঘ্রই আসছে।',
        'lang_name_en'          => 'English',
        'lang_name_bn'          => 'বাংলা',
    ),
);

$L = $rg_strings[$lang];

if (!isset($active)) { $active = ''; }

$rg_whatsapp_number = '8801716469866';

/**
 * Prints the intro overlay + app header + hamburger menu.
 * Call this right after <body>.
 */
function rg_navbar_render() {
    global $L, $lang, $rg_whatsapp_number;
    ?>
    <!-- ══ INTRO OVERLAY (session based) ══ -->
    <div id="rg-intro-overlay">
        <video id="rg-intro-video" src="../rj logo animation.mp4" autoplay muted playsinline preload="auto"></video>
        <button type="button" id="rg-intro-skip" class="rg-intro-skip"><?php echo htmlspecialchars($L['menu_close']); ?> ✕</button>
    </div>

    <!-- ══ APP HEADER ══ -->
    <header class="rg-app-header">
        <a href="index.php" class="rg-app-brand rg-ripple">
            <img src="../logo.jpg" alt="" onerror="this.style.display='none';document.getElementById('rgBrandText').style.display='flex';" onload="document.getElementById('rgBrandText').style.display='none';">
            <span class="rg-app-brand-text" id="rgBrandText">
                <b><?php echo htmlspecialchars($L['brand']); ?></b>
                <small><?php echo htmlspecialchars($L['brand_sub']); ?></small>
            </span>
        </a>

        <div class="rg-app-header-actions">
            <div class="rg-lang-switch">
                <a href="?lang=en" class="rg-ripple <?php echo $lang === 'en' ? 'rg-lang-active' : ''; ?>">EN</a>
                <a href="?lang=bn" class="rg-ripple <?php echo $lang === 'bn' ? 'rg-lang-active' : ''; ?>">বাং</a>
            </div>

            <a class="rg-header-wa rg-ripple" href="https://wa.me/<?php echo $rg_whatsapp_number; ?>" target="_blank" rel="noopener" aria-label="WhatsApp">
                <svg width="17" height="17" viewBox="0 0 24 24" fill="white"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347M12.05 0C5.495 0 .157 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.688 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0012.05 0z"/></svg>
            </a>

            <button type="button" class="rg-header-menu-btn rg-ripple" id="rgMenuBtn" aria-label="Menu">
                <span></span><span></span><span></span>
            </button>
        </div>
    </header>

    <div class="rg-menu-scrim" id="rgMenuScrim"></div>
    <nav class="rg-menu-panel" id="rgMenuPanel">
        <button type="button" class="rg-menu-item rg-ripple" data-replay-intro>
            <span class="rg-menu-icon"><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polygon points="5 3 19 12 5 21 5 3"/></svg></span>
            <?php echo htmlspecialchars($L['menu_intro_video']); ?>
        </button>
        <a href="index.php#about" class="rg-ripple" onclick="rgCloseMenu()">
            <span class="rg-menu-icon"><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><line x1="12" y1="16" x2="12" y2="12"/><line x1="12" y1="8" x2="12.01" y2="8"/></svg></span>
            <?php echo htmlspecialchars($L['menu_about']); ?>
        </a>
        <a href="https://wa.me/<?php echo $rg_whatsapp_number; ?>" class="rg-ripple" target="_blank" rel="noopener" onclick="rgCloseMenu()">
            <span class="rg-menu-icon"><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72c.127.96.362 1.903.7 2.81a2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45c.907.338 1.85.573 2.81.7A2 2 0 0 1 22 16.92z"/></svg></span>
            <?php echo htmlspecialchars($L['menu_contact']); ?>
        </a>
    </nav>
    <?php
}

/**
 * Prints the fixed bottom navigation. Call near the end of <body>.
 */
function rg_bottomnav_render() {
    global $L, $active;
    ?>
    <nav class="rg-bottom-nav">
        <a href="index.php" class="rg-bn-item rg-ripple <?php echo $active === 'home' ? 'rg-active' : ''; ?>">
            <span class="rg-bn-icon-wrap"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/></svg></span>
            <span><?php echo htmlspecialchars($L['nav_home']); ?></span>
        </a>

        <a href="search.php" class="rg-bn-item rg-ripple <?php echo $active === 'search' ? 'rg-active' : ''; ?>">
            <span class="rg-bn-icon-wrap"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="11" cy="11" r="8"/><line x1="21" y1="21" x2="16.65" y2="16.65"/></svg></span>
            <span><?php echo htmlspecialchars($L['nav_search']); ?></span>
        </a>

        <a href="profile.php" class="rg-bn-item rg-ripple <?php echo $active === 'profile' ? 'rg-active' : ''; ?>">
            <span class="rg-bn-icon-wrap"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/></svg></span>
            <span><?php echo htmlspecialchars($L['nav_profile']); ?></span>
        </a>
    </nav>
    <?php
}

/**
 * Prints the shared CSS (header, bottom nav, intro overlay, menu panel)
 * that every page needs. Call inside <head><style>...</style>.
 * Page-specific styles should be added on top of this in each page's
 * own <style> block.
 */
function rg_navbar_css() {
    ?>
:root{
  --rg-gold:        #B8881E;
  --rg-gold-light:  #D4A83A;
  --rg-gold-pale:   #F5EDD6;
  --rg-gold-border: rgba(184,136,30,0.22);
  --rg-dark:        #1C1A16;
  --rg-text:        #2E2A22;
  --rg-muted:       #7A7060;
  --rg-bg:          #FDFAF4;
  --rg-bg2:         #F7F2E8;
  --rg-white:       #FFFFFF;
  --rg-header-h:    58px;
  --rg-bottomnav-h: 62px;
  --rg-safe-b: env(safe-area-inset-bottom, 0px);
  --rg-safe-t: env(safe-area-inset-top, 0px);

  /* Material-style elevation shadows (dp 1 / 2 / 3 / 4 / 8) */
  --rg-elev-1: 0 1px 2px rgba(28,26,22,0.14), 0 1px 3px rgba(28,26,22,0.10);
  --rg-elev-2: 0 2px 4px rgba(28,26,22,0.15), 0 3px 8px rgba(28,26,22,0.10);
  --rg-elev-3: 0 4px 8px rgba(28,26,22,0.16), 0 6px 14px rgba(28,26,22,0.10);
  --rg-elev-4: 0 6px 12px rgba(28,26,22,0.18), 0 10px 22px rgba(28,26,22,0.12);
  --rg-elev-8: 0 10px 20px rgba(28,26,22,0.20), 0 16px 34px rgba(28,26,22,0.14);
  --rg-ripple: rgba(184,136,30,0.28);
  --rg-ripple-light: rgba(255,255,255,0.45);
}

*,*::before,*::after{ box-sizing:border-box; margin:0; padding:0; -webkit-tap-highlight-color:transparent; }
html{ font-size:16px; }
body{
  font-family:'Outfit',sans-serif;
  background:var(--rg-bg);
  color:var(--rg-text);
  line-height:1.55;
  overscroll-behavior-y:contain;
  padding-top:calc(var(--rg-header-h) + var(--rg-safe-t));
  padding-bottom:calc(var(--rg-bottomnav-h) + var(--rg-safe-b) + 10px);
  min-height:100vh;
}
img{ display:block; max-width:100%; height:auto; }
a{ text-decoration:none; color:inherit; }
button{ font-family:inherit; }

/* ---------- Material-style ripple ---------- */
.rg-ripple{ position:relative; overflow:hidden; -webkit-tap-highlight-color:transparent; }
.rg-ripple-effect{
  position:absolute; border-radius:50%; transform:scale(0);
  background:var(--rg-ripple); pointer-events:none;
  animation:rg-ripple-anim .55s cubic-bezier(.4,0,.2,1);
}
.rg-ripple-effect.rg-ripple-light{ background:var(--rg-ripple-light); }
@keyframes rg-ripple-anim{
  to{ transform:scale(1); opacity:0; }
}
/* Material "state layer" press feedback for flat surfaces */
.rg-press{ transition:background-color .15s ease, transform .1s ease; }
.rg-press:active{ transform:scale(.97); }

/* ---------- Intro overlay ---------- */
#rg-intro-overlay{
  position:fixed; inset:0; z-index:99999; background:#fefefe;
  display:flex; align-items:center; justify-content:center;
  transition:opacity .5s ease, visibility .5s ease;
}
#rg-intro-overlay.rg-intro-hidden{ opacity:0; visibility:hidden; pointer-events:none; }
#rg-intro-video{ width:min(520px,88vw); aspect-ratio:1280/504; object-fit:contain; }
.rg-intro-skip{
  position:absolute; bottom:max(28px, calc(env(safe-area-inset-bottom,0px) + 18px));
  right:20px; background:rgba(28,26,22,0.55); color:#fff; border:none;
  padding:8px 16px; border-radius:100px; font-size:.78rem; font-weight:600;
  letter-spacing:.04em;
}

/* ---------- App Header ---------- */
.rg-app-header{
  position:fixed; top:0; left:0; right:0; z-index:1000;
  height:calc(var(--rg-header-h) + var(--rg-safe-t));
  padding-top:var(--rg-safe-t);
  display:flex; align-items:center; justify-content:space-between;
  gap:8px; padding-left:14px; padding-right:10px;
  background:rgba(253,250,244,0.98);
  backdrop-filter:blur(10px);
  box-shadow:var(--rg-elev-2);
}
.rg-app-brand{ display:flex; align-items:center; gap:8px; min-width:0; flex-shrink:1; border-radius:10px; padding:4px 6px; margin-left:-6px; }
.rg-app-brand img{ height:32px; width:auto; object-fit:contain; flex-shrink:0; }
.rg-app-brand-text{ display:none; flex-direction:column; line-height:1.05; min-width:0; }
.rg-app-brand-text b{
  font-family:'Cormorant Garamond',serif; font-size:1.05rem; font-weight:700;
  color:var(--rg-gold); white-space:nowrap; overflow:hidden; text-overflow:ellipsis;
}
.rg-app-brand-text small{ font-size:.58rem; color:var(--rg-muted); letter-spacing:.03em; white-space:nowrap; }

.rg-app-header-actions{ display:flex; align-items:center; gap:6px; flex-shrink:0; }

.rg-lang-switch{
  display:flex; border:1.5px solid var(--rg-gold-border); border-radius:100px;
  overflow:hidden; flex-shrink:0; background:#fff;
}
.rg-lang-switch a{
  padding:6px 10px; font-size:.68rem; font-weight:700; letter-spacing:.03em;
  color:var(--rg-muted); white-space:nowrap; transition:background-color .18s ease, color .18s ease;
}
.rg-lang-switch a.rg-lang-active{ background:var(--rg-gold); color:#fff; }

.rg-header-wa{
  width:34px; height:34px; border-radius:50%; background:#25D366;
  display:flex; align-items:center; justify-content:center; flex-shrink:0;
  box-shadow:var(--rg-elev-1); transition:box-shadow .15s ease, transform .1s ease;
}
.rg-header-wa:active{ box-shadow:var(--rg-elev-2); transform:scale(.94); }

.rg-header-menu-btn{
  width:34px; height:34px; border-radius:50%; border:none;
  background:#fff; display:flex; flex-direction:column; align-items:center; justify-content:center;
  gap:4px; flex-shrink:0; box-shadow:var(--rg-elev-1); transition:box-shadow .15s ease, transform .1s ease;
}
.rg-header-menu-btn:active{ box-shadow:var(--rg-elev-2); transform:scale(.94); }
.rg-header-menu-btn span{ display:block; width:16px; height:2px; background:var(--rg-dark); border-radius:2px; }

.rg-menu-panel{
  position:fixed; top:calc(var(--rg-header-h) + var(--rg-safe-t) + 6px); left:10px; right:10px; z-index:999;
  background:#fff; border-radius:16px; overflow:hidden;
  box-shadow:var(--rg-elev-8);
  transform:translateY(-8px) scale(.98); opacity:0; visibility:hidden;
  transition:transform .2s cubic-bezier(.4,0,.2,1), opacity .2s ease, visibility .2s;
  max-height:70vh; overflow-y:auto;
}
.rg-menu-panel.rg-open{ transform:translateY(0) scale(1); opacity:1; visibility:visible; }
.rg-menu-panel a, .rg-menu-panel button.rg-menu-item{
  display:flex; align-items:center; gap:10px; width:100%; text-align:left;
  padding:14px 18px; font-size:.9rem; font-weight:500; color:var(--rg-text);
  border-bottom:1px solid var(--rg-gold-border); background:none; border-left:none; border-right:none; border-top:none;
}
.rg-menu-panel a:last-child, .rg-menu-panel button.rg-menu-item:last-child{ border-bottom:none; }
.rg-menu-icon{ color:var(--rg-gold); flex-shrink:0; display:flex; }
.rg-menu-scrim{
  position:fixed; inset:0; z-index:998; background:rgba(20,16,8,0.28);
  opacity:0; visibility:hidden; transition:opacity .22s ease, visibility .22s;
}
.rg-menu-scrim.rg-open{ opacity:1; visibility:visible; }

/* ---------- Bottom Navigation ---------- */
.rg-bottom-nav{
  position:fixed; bottom:0; left:0; right:0; z-index:1000;
  height:calc(var(--rg-bottomnav-h) + var(--rg-safe-b));
  padding-bottom:var(--rg-safe-b);
  background:rgba(253,250,244,0.98);
  backdrop-filter:blur(10px);
  box-shadow:var(--rg-elev-8);
  display:flex;
}
.rg-bn-item{
  flex:1; display:flex; flex-direction:column; align-items:center; justify-content:center;
  gap:3px; color:var(--rg-muted); position:relative;
}
.rg-bn-item svg{ width:20px; height:20px; position:relative; z-index:1; }
.rg-bn-item span{ font-size:.66rem; font-weight:600; letter-spacing:.02em; transition:color .2s ease, font-weight .2s ease; }
.rg-bn-icon-wrap{
  display:flex; align-items:center; justify-content:center;
  width:52px; height:26px; border-radius:14px; margin-bottom:2px;
  background:transparent; transition:background-color .22s cubic-bezier(.4,0,.2,1), transform .22s cubic-bezier(.4,0,.2,1);
  transform:scale(1);
}
.rg-bn-item.rg-active .rg-bn-icon-wrap{ background:var(--rg-gold-pale); transform:scale(1.04); }
.rg-bn-item.rg-active{ color:var(--rg-gold); }
.rg-bn-item.rg-active span{ font-weight:700; }

@media (min-width:601px){
  .rg-page{ max-width:480px; margin-left:auto; margin-right:auto; }
}
    <?php
}

/**
 * Prints the shared JS (intro overlay logic + hamburger menu toggle).
 * Call inside <script>...</script> near the end of <body>.
 */
function rg_navbar_js() {
    ?>
(function () {
  'use strict';

  /* ---------- Material-style ripple effect ---------- */
  function spawnRipple(target, x, y) {
    var rect = target.getBoundingClientRect();
    var size = Math.max(rect.width, rect.height) * 1.8;
    var ripple = document.createElement('span');
    ripple.className = 'rg-ripple-effect';
    if (getComputedStyle(target).color === 'rgb(255, 255, 255)' ||
        target.classList.contains('rg-header-wa')) {
      ripple.classList.add('rg-ripple-light');
    }
    ripple.style.width = ripple.style.height = size + 'px';
    ripple.style.left = (x - rect.left - size / 2) + 'px';
    ripple.style.top  = (y - rect.top  - size / 2) + 'px';
    target.appendChild(ripple);
    ripple.addEventListener('animationend', function () { ripple.remove(); });
  }
  document.addEventListener('pointerdown', function (e) {
    var target = e.target.closest ? e.target.closest('.rg-ripple') : null;
    if (!target) return;
    var x = (typeof e.clientX === 'number' && e.clientX !== 0) ? e.clientX : (target.getBoundingClientRect().left + target.offsetWidth / 2);
    var y = (typeof e.clientY === 'number' && e.clientY !== 0) ? e.clientY : (target.getBoundingClientRect().top + target.offsetHeight / 2);
    spawnRipple(target, x, y);
  }, { passive: true });

  var overlay = document.getElementById('rg-intro-overlay');
  var video   = document.getElementById('rg-intro-video');

  function hideOverlay() {
    if (!overlay) return;
    overlay.classList.add('rg-intro-hidden');
    sessionStorage.setItem('rg_intro_shown', '1');
  }

  function showOverlay() {
    if (!overlay || !video) return;
    overlay.classList.remove('rg-intro-hidden');
    try {
      video.currentTime = 0;
      video.play();
    } catch (e) { /* ignore autoplay errors */ }
  }

  if (overlay && video) {
    if (sessionStorage.getItem('rg_intro_shown')) {
      overlay.style.transition = 'none';
      overlay.classList.add('rg-intro-hidden');
    } else {
      video.addEventListener('ended', hideOverlay);
      var fallback = setTimeout(hideOverlay, 6000);
      video.addEventListener('ended', function () { clearTimeout(fallback); });
      video.addEventListener('error', function () {
        clearTimeout(fallback);
        setTimeout(hideOverlay, 300);
      });
    }

    var skipBtn = document.getElementById('rg-intro-skip');
    if (skipBtn) skipBtn.addEventListener('click', hideOverlay);
  }

  document.addEventListener('click', function (e) {
    var replayBtn = e.target.closest && e.target.closest('[data-replay-intro]');
    if (replayBtn) {
      e.preventDefault();
      closeMenu();
      showOverlay();
    }
  });

  var menuBtn   = document.getElementById('rgMenuBtn');
  var menuPanel = document.getElementById('rgMenuPanel');
  var menuScrim = document.getElementById('rgMenuScrim');

  function openMenu() {
    if (menuPanel) menuPanel.classList.add('rg-open');
    if (menuScrim) menuScrim.classList.add('rg-open');
  }
  function closeMenu() {
    if (menuPanel) menuPanel.classList.remove('rg-open');
    if (menuScrim) menuScrim.classList.remove('rg-open');
  }
  if (menuBtn) {
    menuBtn.addEventListener('click', function () {
      var isOpen = menuPanel && menuPanel.classList.contains('rg-open');
      isOpen ? closeMenu() : openMenu();
    });
  }
  if (menuScrim) menuScrim.addEventListener('click', closeMenu);

  window.rgCloseMenu = closeMenu;
})();
    <?php
}