<!-- ========== HEADER / NAVBAR ========== -->

<!-- ══ NAV ══════════════════════════════════════ -->
<nav class="rg-nav" id="rgNavbar">
  <a href="index.php" class="rg-nav-brand">
    <img src="logo.jpg" alt="Raj Aiswari Gold" width="100" height="50" id="rgNavLogo" onerror="this.style.display='none'">
    <span class="rg-nav-brand-text" id="rgNavText">Raj Aiswari</span>
  </a>

  <ul class="rg-nav-links">
    <li><a href="index.php">Home</a></li>
    <li><a href="index.php#about">About Us</a></li>
    <li><a href="products.php">Products</a></li>
    <li><a href="index.php#gallery">Gallery</a></li>
    <li><a href="index.php#clients">Clients</a></li>
    <li><a href="sister-concern.php">Sister Concern</a></li>
    <li><a href="software.php">Softwares</a></li>
    <li><a href="index.php#contact">Contact</a></li>
  </ul>

  <div class="rg-nav-social">
    <a href="https://www.facebook.com/rajasiwari" target="_blank" rel="noopener" class="rg-social-btn rg-fb" title="Facebook">
      <svg width="18" height="18" viewBox="0 0 24 24" fill="white">
        <path d="M24 12.073C24 5.405 18.627 0 12 0S0 5.405 0 12.073C0 18.1 4.388 23.094 10.125 24v-8.437H7.078v-3.49h3.047V9.41c0-3.025 1.792-4.697 4.533-4.697 1.312 0 2.686.236 2.686.236v2.97h-1.513c-1.491 0-1.956.93-1.956 1.886v2.267h3.328l-.532 3.49h-2.796V24C19.612 23.094 24 18.1 24 12.073z"/>
      </svg>
    </a>
    <a href="https://wa.me/8801716469866" target="_blank" rel="noopener" class="rg-social-btn rg-wp" title="WhatsApp">
      <svg width="18" height="18" viewBox="0 0 24 24" fill="white">
        <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/>
      </svg>
    </a>
  </div>

  <button class="rg-hamburger" id="rgHamburger" aria-label="Toggle menu">
    <span></span><span></span><span></span>
  </button>
</nav>

<!-- Mobile Menu -->
<nav class="rg-mobile-menu" id="rgMobileMenu">
  <a href="index.php"          onclick="rgCloseMenu()">Home</a>
  <a href="index.php#about"    onclick="rgCloseMenu()">About Us</a>
  <a href="products.php"       onclick="rgCloseMenu()">Products</a>
  <a href="index.php#gallery"  onclick="rgCloseMenu()">Gallery</a>
  <a href="index.php#clients"  onclick="rgCloseMenu()">Clients</a>
  <a href="sister-concern.php" onclick="rgCloseMenu()">Sister Concern</a>
  <a href="software.php"       onclick="rgCloseMenu()">Softwares</a>
  <a href="index.php#contact"  onclick="rgCloseMenu()">Contact</a>
  <div class="rg-mob-social">
    <a href="https://www.facebook.com/rajasiwari" target="_blank" rel="noopener" class="rg-fb">
      <svg width="15" height="15" viewBox="0 0 24 24" fill="white" style="pointer-events:none;"><path d="M24 12.073C24 5.405 18.627 0 12 0S0 5.405 0 12.073C0 18.1 4.388 23.094 10.125 24v-8.437H7.078v-3.49h3.047V9.41c0-3.025 1.792-4.697 4.533-4.697 1.312 0 2.686.236 2.686.236v2.97h-1.513c-1.491 0-1.956.93-1.956 1.886v2.267h3.328l-.532 3.49h-2.796V24C19.612 23.094 24 18.1 24 12.073z"/></svg>
      Facebook
    </a>
    <a href="https://wa.me/8801716469866" target="_blank" rel="noopener" class="rg-wp">
      <svg width="15" height="15" viewBox="0 0 24 24" fill="white" style="pointer-events:none;"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
      WhatsApp
    </a>
  </div>
</nav>
<!-- ========== WHATSAPP FLOATING BUTTON ========== -->
<div class="rg-wa-wrap" id="rgWaWrap">

  <!-- Popup card -->
  <div class="rg-wa-popup" id="rgWaPopup" role="dialog" aria-label="Chat with us on WhatsApp">
    <button class="rg-wa-close" id="rgWaClose" aria-label="Close chat popup">
      <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"><line x1="18" y1="6" x2="6" y2="18"/><line x1="6" y1="6" x2="18" y2="18"/></svg>
    </button>
    <div class="rg-wa-popup-head">
      <div class="rg-wa-avatar">
        <svg width="22" height="22" viewBox="0 0 24 24" fill="white"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
        <span class="rg-wa-online-dot"></span>
      </div>
      <div class="rg-wa-popup-info">
        <span class="rg-wa-popup-name">Raj Aiswari</span>
        <span class="rg-wa-popup-status">
          <span class="rg-wa-status-dot"></span>Online — typically replies instantly
        </span>
      </div>
    </div>
    <div class="rg-wa-popup-body">
      <div class="rg-wa-bubble">
        <p>Hello! 👋</p>
        <p>How can we help you today? Feel free to ask us anything about our products or services.</p>
        <span class="rg-wa-time">Just now</span>
      </div>
    </div>
    <a href="https://wa.me/8801716469866?text=Hello%2C%20I%20would%20like%20to%20know%20more%20about%20your%20products." target="_blank" rel="noopener" class="rg-wa-popup-btn">
      <svg width="16" height="16" viewBox="0 0 24 24" fill="white"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
      Start Chat on WhatsApp
    </a>
  </div>

  <!-- Floating trigger button -->
  <button class="rg-wa-fab" id="rgWaFab" aria-label="Chat with us on WhatsApp">
    <span class="rg-wa-fab-icon rg-wa-fab-icon--wa">
      <svg width="26" height="26" viewBox="0 0 24 24" fill="white"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
    </span>
    <span class="rg-wa-fab-icon rg-wa-fab-icon--close">
      <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2.5" stroke-linecap="round"><line x1="18" y1="6" x2="6" y2="18"/><line x1="6" y1="6" x2="18" y2="18"/></svg>
    </span>
    <span class="rg-wa-label">Chat with us</span>
    <span class="rg-wa-fab-ping"></span>
  </button>

</div>

<!-- ========== HEADER SCOPED CSS ========== -->
<!-- All styles prefixed rg- to avoid bleeding into page CSS -->
<style>
/* ── Variables ───────────────────────────────────────────── */
:root {
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
  --rg-nav-h:       72px;
}

/* ── Reset & Base ────────────────────────────────────────── */
*, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }
html { scroll-behavior: smooth; font-size: 16px; }
body {
  font-family: 'Outfit', sans-serif;
  background: var(--rg-bg);
  color: var(--rg-text);
  overflow-x: hidden;
  line-height: 1.6;
}
img { display: block; max-width: 100%; height: auto; }
a { text-decoration: none; }

/* ── Navbar ──────────────────────────────────────────────── */
.rg-nav {
  position: fixed; top: 0; left: 0; right: 0; z-index: 1000;
  height: var(--rg-nav-h);
  display: flex; align-items: center; justify-content: space-between;
  padding: 0 48px;
  background: rgba(253,250,244,0.97);
  backdrop-filter: blur(16px);
  border-bottom: 1px solid var(--rg-gold-border);
  transition: box-shadow 0.3s, height 0.3s;
}
.rg-nav.rg-scrolled {
  box-shadow: 0 2px 24px rgba(120,90,30,0.1);
  height: 60px;
}

/* Brand */
.rg-nav-brand {
  display: flex; align-items: center; gap: 10px;
  flex-shrink: 0; text-decoration: none;
}
.rg-nav-brand img { width: 100px; height: 50px; object-fit: contain; display: block; }
.rg-nav-brand-text {
  font-family: 'Cormorant Garamond', serif;
  font-size: 1.4rem; font-weight: 600;
  color: var(--rg-gold); letter-spacing: 0.04em; line-height: 1.1; white-space: nowrap;
}
.rg-nav-brand-text span { color: var(--rg-dark); font-weight: 300; }

/* Links */
.rg-nav-links { display: flex; gap: 28px; list-style: none; }
.rg-nav-links a {
  color: var(--rg-muted); font-size: 0.8rem; font-weight: 500;
  letter-spacing: 0.1em; text-transform: uppercase;
  transition: color 0.3s; position: relative;
}
.rg-nav-links a::after {
  content: ''; position: absolute; bottom: -4px; left: 0;
  width: 0; height: 1.5px; background: var(--rg-gold); transition: width 0.3s;
}
.rg-nav-links a:hover { color: var(--rg-gold); }
.rg-nav-links a:hover::after { width: 100%; }

/* Social icons */
.rg-nav-social { display: flex; align-items: center; gap: 10px; flex-shrink: 0; }
.rg-social-btn {
  display: flex; align-items: center; justify-content: center;
  width: 38px; height: 38px; border-radius: 50%;
  transition: transform 0.2s, box-shadow 0.2s;
  flex-shrink: 0;
}
.rg-social-btn:hover { transform: translateY(-2px); box-shadow: 0 4px 14px rgba(0,0,0,0.18); }
.rg-fb { background: #1877F2; }
.rg-wp { background: #25D366; }

/* Hamburger */
.rg-hamburger {
  display: none; flex-direction: column; gap: 5px;
  cursor: pointer; padding: 4px; background: none; border: none;
}
.rg-hamburger span { display: block; width: 24px; height: 2px; background: var(--rg-dark); transition: all 0.3s; }
.rg-hamburger.rg-open span:nth-child(1) { transform: translateY(7px) rotate(45deg); }
.rg-hamburger.rg-open span:nth-child(2) { opacity: 0; }
.rg-hamburger.rg-open span:nth-child(3) { transform: translateY(-7px) rotate(-45deg); }

/* Mobile menu */
.rg-mobile-menu {
  display: none; position: fixed;
  top: var(--rg-nav-h); left: 0; right: 0;
  background: rgba(253,250,244,0.98);
  backdrop-filter: blur(16px);
  border-bottom: 1px solid var(--rg-gold-border);
  padding: 20px 24px 28px;
  flex-direction: column; gap: 0;
  z-index: 999;
  box-shadow: 0 8px 32px rgba(120,90,30,0.1);
}
.rg-mobile-menu.rg-open { display: flex; }
.rg-mobile-menu a {
  display: block; padding: 13px 0;
  border-bottom: 1px solid var(--rg-gold-border);
  color: var(--rg-text); font-size: 0.9rem;
  font-weight: 500; letter-spacing: 0.08em; text-transform: uppercase;
  transition: color 0.3s;
}
.rg-mobile-menu a:hover { color: var(--rg-gold); }

.rg-mob-social {
  display: flex; gap: 12px; margin-top: 18px;
}
.rg-mob-social a {
  flex: 1; display: flex; align-items: center; justify-content: center; gap: 8px;
  padding: 16px 12px; border-bottom: none !important;
  color: #fff !important; font-size: 0.88rem; font-weight: 600;
  letter-spacing: 0.06em; border-radius: 6px;
  transition: opacity 0.2s;
  min-height: 52px;
  position: relative; z-index: 10;
  pointer-events: all !important;
  -webkit-tap-highlight-color: rgba(0,0,0,0.1);
  touch-action: manipulation;
  cursor: pointer;
}
.rg-mob-social a:hover,
.rg-mob-social a:active { opacity: 0.88; }
.rg-mob-social a.rg-fb { background: #1877F2; }
.rg-mob-social a.rg-wp { background: #25D366; }
.rg-mob-social a svg { flex-shrink: 0; pointer-events: none; }

/* ── Page sections (shared layout styles) ────────────────── */
.rg-section     { padding: 80px clamp(20px, 6vw, 80px); }
.rg-section-sm  { padding: 60px clamp(20px, 6vw, 80px); }

.rg-eyebrow {
  display: flex; align-items: center; gap: 12px;
  color: var(--rg-gold); font-size: 0.68rem; letter-spacing: 0.24em;
  text-transform: uppercase; font-weight: 600; margin-bottom: 14px;
}
.rg-eyebrow::before { content: ''; display: block; width: 26px; height: 1.5px; background: var(--rg-gold); flex-shrink: 0; }

.rg-section-title {
  font-family: 'Cormorant Garamond', serif;
  font-size: clamp(1.8rem, 4.5vw, 3.2rem); font-weight: 300;
  line-height: 1.12; margin-bottom: 16px; color: var(--rg-dark);
}
.rg-section-title em { font-style: italic; color: var(--rg-gold); }
.rg-gold-rule { width: 50px; height: 2px; background: linear-gradient(to right, var(--rg-gold), transparent); margin: 18px 0 24px; }

/* ── Hero ────────────────────────────────────────────────── */
.rg-hero {
  height: 100vh; min-height: 560px;
  position: relative; display: flex;
  align-items: center; justify-content: center;
  overflow: hidden; padding-top: var(--rg-nav-h);
}
.rg-hero-bg { position: absolute; inset: 0; z-index: 0; }
.rg-hero-bg img {
  width: 100%; height: 100%; object-fit: cover;
  filter: brightness(0.3) saturate(0.7);
  transform: scale(1.05);
  animation: rg-heroZoom 14s ease-in-out infinite alternate;
}
@keyframes rg-heroZoom { from { transform: scale(1.05); } to { transform: scale(1.12); } }
.rg-hero-overlay {
  position: absolute; inset: 0; z-index: 1;
  background: linear-gradient(to top, rgba(28,26,22,0.55) 0%, transparent 55%);
}
.rg-hero-content {
  position: relative; z-index: 2;
  max-width: 800px; width: 100%; padding: 0 24px; text-align: center;
}
.rg-hero-eyebrow {
  display: inline-flex; align-items: center; gap: 12px;
  margin-bottom: 20px; color: #D4A83A;
  font-size: 0.68rem; letter-spacing: 0.26em; text-transform: uppercase; font-weight: 500;
  opacity: 0; animation: rg-fadeUp 1s ease 0.1s forwards;
  flex-wrap: wrap; justify-content: center;
}
.rg-hero-eyebrow::before, .rg-hero-eyebrow::after {
  content: ''; display: block; width: 32px; height: 1px; background: #D4A83A; opacity: 0.6; flex-shrink: 0;
}
.rg-hero-title {
  font-family: 'Cormorant Garamond', serif;
  font-size: clamp(2.6rem, 8vw, 6rem);
  font-weight: 300; line-height: 1.08; margin-bottom: 20px; color: #FDFAF4;
  opacity: 0; animation: rg-fadeUp 1.2s ease 0.25s forwards;
}
.rg-hero-title em { font-style: italic; color: #D4A83A; }
.rg-hero-sub {
  font-size: clamp(0.9rem, 2.5vw, 1rem); color: rgba(253,250,244,0.65);
  line-height: 1.75; max-width: 500px; margin: 0 auto 36px; font-weight: 300;
  opacity: 0; animation: rg-fadeUp 1.2s ease 0.4s forwards;
}
.rg-hero-btns {
  display: flex; gap: 14px; justify-content: center; flex-wrap: wrap;
  opacity: 0; animation: rg-fadeUp 1.2s ease 0.55s forwards;
}
@keyframes rg-fadeUp { from { opacity: 0; transform: translateY(28px); } to { opacity: 1; transform: translateY(0); } }
.rg-btn-gold {
  display: inline-block; background: var(--rg-gold); color: var(--rg-white);
  padding: 14px 32px; font-size: 0.82rem; font-weight: 600;
  letter-spacing: 0.1em; text-transform: uppercase; transition: background 0.3s, transform 0.2s;
}
.rg-btn-gold:hover { background: #9A7218; transform: translateY(-2px); }
.rg-btn-ghost {
  display: inline-block; border: 1.5px solid rgba(253,250,244,0.4); color: #FDFAF4;
  padding: 14px 32px; font-size: 0.82rem;
  letter-spacing: 0.1em; text-transform: uppercase; transition: border-color 0.3s, color 0.3s;
}
.rg-btn-ghost:hover { border-color: #D4A83A; color: #D4A83A; }

/* ── Slider ──────────────────────────────────────────────── */
.rg-slider {
  position: relative; width: 100%;
  height: clamp(260px, 42vw, 420px);
  overflow: hidden; background: var(--rg-dark);
}
.rg-slide { position: absolute; inset: 0; opacity: 0; transition: opacity 0.9s ease; display: flex; align-items: center; }
.rg-slide.rg-active { opacity: 1; }
.rg-slide img { position: absolute; inset: 0; width: 100%; height: 100%; object-fit: cover; filter: brightness(0.38) saturate(0.72); }
.rg-slide-body { position: relative; z-index: 2; padding: 0 clamp(24px, 6vw, 80px); max-width: 680px; width: 100%; }
.rg-slide-tag { font-size: 0.65rem; letter-spacing: 0.24em; text-transform: uppercase; color: #D4A83A; margin-bottom: 10px; display: block; }
.rg-slide-title { font-family: 'Cormorant Garamond', serif; font-size: clamp(1.4rem, 4vw, 2.4rem); font-weight: 300; color: #FDFAF4; line-height: 1.18; margin-bottom: 14px; }
.rg-slide-title em { font-style: italic; color: #D4A83A; }
.rg-slide-desc { font-size: clamp(0.8rem, 2vw, 0.88rem); color: rgba(253,250,244,0.58); font-weight: 300; line-height: 1.7; display: -webkit-box; -webkit-line-clamp: 3; -webkit-box-orient: vertical; overflow: hidden; }
.rg-slider-prev, .rg-slider-next {
  position: absolute; top: 50%; transform: translateY(-50%); z-index: 10;
  width: 42px; height: 42px; background: rgba(253,250,244,0.1); border: 1px solid rgba(253,250,244,0.2);
  color: #FDFAF4; font-size: 1.1rem; cursor: pointer;
  display: flex; align-items: center; justify-content: center; transition: background 0.3s;
}
.rg-slider-prev { left: 16px; }
.rg-slider-next { right: 16px; }
.rg-slider-prev:hover, .rg-slider-next:hover { background: var(--rg-gold); border-color: var(--rg-gold); }
.rg-slider-dots { position: absolute; bottom: 16px; left: 50%; transform: translateX(-50%); display: flex; gap: 8px; z-index: 10; }
.rg-sdot { width: 8px; height: 8px; border-radius: 50%; border: 1.5px solid rgba(253,250,244,0.4); cursor: pointer; transition: background 0.3s, border-color 0.3s; }
.rg-sdot.rg-active { background: var(--rg-gold); border-color: var(--rg-gold); }

/* ── Stats bar ───────────────────────────────────────────── */
.rg-stats-bar {
  background: var(--rg-white); padding: 40px 24px; border-bottom: 1px solid var(--rg-gold-border);
  display: grid; grid-template-columns: repeat(4, 1fr); gap: 20px; text-align: center;
  box-shadow: 0 2px 20px rgba(120,90,30,0.06);
}
.rg-stat-num { font-family: 'Cormorant Garamond', serif; font-size: clamp(2rem, 5vw, 3rem); font-weight: 600; color: var(--rg-gold); line-height: 1; display: block; }
.rg-stat-label { font-size: 0.68rem; letter-spacing: 0.12em; text-transform: uppercase; color: var(--rg-muted); margin-top: 6px; display: block; }

/* ── Marquee ─────────────────────────────────────────────── */
.rg-marquee-wrap { overflow: hidden; background: var(--rg-gold-pale); border-top: 1px solid var(--rg-gold-border); border-bottom: 1px solid var(--rg-gold-border); padding: 18px 0; }
.rg-marquee-track { display: flex; white-space: nowrap; animation: rg-marquee 28s linear infinite; }
.rg-marquee-item { display: inline-flex; align-items: center; gap: 16px; padding: 0 24px; font-family: 'Cormorant Garamond', serif; font-size: 1.1rem; font-weight: 400; letter-spacing: 0.06em; }
.rg-marquee-item a { color: var(--rg-gold); text-decoration: none; transition: color 0.3s; }
.rg-marquee-item a:hover { color: #9A7218; text-decoration: underline; }
.rg-marquee-dot { width: 5px; height: 5px; background: var(--rg-gold); border-radius: 50%; opacity: 0.4; flex-shrink: 0; }
@keyframes rg-marquee { from { transform: translateX(0); } to { transform: translateX(-50%); } }

/* ── About ───────────────────────────────────────────────── */
.rg-about-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 64px; align-items: center; }
.rg-about-images { position: relative; height: 500px; }
.rg-about-img-main { position: absolute; top: 0; left: 0; width: 75%; height: 76%; object-fit: cover; box-shadow: 0 8px 40px rgba(120,90,30,0.12); }
.rg-about-img-accent { position: absolute; bottom: 0; right: 0; width: 52%; height: 50%; object-fit: cover; border: 5px solid var(--rg-bg); box-shadow: 0 8px 40px rgba(120,90,30,0.12); }
.rg-about-badge {
  position: absolute; top: 50%; left: 50%; transform: translate(-50%,-50%);
  width: 88px; height: 88px; background: var(--rg-gold); border-radius: 50%;
  display: flex; flex-direction: column; align-items: center; justify-content: center;
  z-index: 3; box-shadow: 0 4px 20px rgba(184,136,30,0.4);
}
.rg-about-badge b { font-family: 'Cormorant Garamond', serif; font-size: 1.8rem; color: #fff; font-weight: 600; line-height: 1; }
.rg-about-badge small { font-size: 0.48rem; letter-spacing: 0.1em; text-transform: uppercase; color: rgba(255,255,255,0.8); }
.rg-about-text p { color: var(--rg-muted); line-height: 1.85; margin-bottom: 16px; font-weight: 300; font-size: 0.95rem; }
.rg-partner-chips { display: flex; flex-wrap: wrap; gap: 8px; margin-top: 28px; }
.rg-chip { border: 1px solid var(--rg-gold-border); background: var(--rg-gold-pale); color: var(--rg-gold); padding: 5px 13px; font-size: 0.7rem; letter-spacing: 0.1em; text-transform: uppercase; font-weight: 500; white-space: nowrap; }

/* ── Products ────────────────────────────────────────────── */
.rg-products-bg { background: var(--rg-bg2); }
.rg-products-intro { font-size: 0.92rem; color: var(--rg-muted); font-weight: 300; max-width: 560px; margin: 8px auto 0; text-align: center; line-height: 1.7; }
.rg-products-grid { display: grid; grid-template-columns: repeat(5, 1fr); gap: 10px; margin-top: 32px; }
.rg-prod-card {
  background: var(--rg-white); border: 1px solid #e0dbd0; border-radius: 4px;
  overflow: hidden; display: flex; flex-direction: column; align-items: center;
  text-align: center; padding: 0 0 12px;
  transition: box-shadow 0.3s, transform 0.3s, border-color 0.3s; cursor: pointer;
}
.rg-prod-card:hover { box-shadow: 0 6px 28px rgba(120,90,30,0.13); transform: translateY(-3px); border-color: var(--rg-gold-border); }
.rg-prod-img-wrap { width: 100%; aspect-ratio: 1/1; overflow: hidden; background: var(--rg-bg2); display: flex; align-items: center; justify-content: center; margin-bottom: 10px; }
.rg-prod-img-wrap img { width: 100%; height: 100%; object-fit: cover; transition: transform 0.5s; }
.rg-prod-card:hover .rg-prod-img-wrap img { transform: scale(1.05); }
.rg-prod-body { padding: 0 10px; width: 100%; }
.rg-prod-name { font-family: 'Cormorant Garamond', serif; font-size: 0.82rem; font-weight: 600; letter-spacing: 0.02em; color: var(--rg-dark); line-height: 1.25; text-align: center; }
.rg-prod-link { display: inline-flex; align-items: center; gap: 4px; color: var(--rg-gold); font-size: 0.62rem; letter-spacing: 0.06em; text-transform: uppercase; font-weight: 600; margin-top: 4px; opacity: 0; transition: opacity 0.3s, gap 0.3s; }
.rg-prod-card:hover .rg-prod-link { opacity: 1; }
.rg-prod-link:hover { gap: 7px; color: #9A7218; }

/* ── Why Choose ──────────────────────────────────────────── */
.rg-why-grid { display: grid; grid-template-columns: repeat(3, 1fr); gap: 24px; margin-top: 48px; }
.rg-why-card { background: var(--rg-white); border: 1px solid var(--rg-gold-border); padding: 32px 24px; position: relative; overflow: hidden; transition: box-shadow 0.3s, transform 0.3s; }
.rg-why-card::after { content: ''; position: absolute; top: 0; left: 0; width: 0; height: 3px; background: var(--rg-gold); transition: width 0.4s; }
.rg-why-card:hover { box-shadow: 0 8px 40px rgba(120,90,30,0.1); transform: translateY(-4px); }
.rg-why-card:hover::after { width: 100%; }
.rg-why-icon { width: 46px; height: 46px; background: var(--rg-gold-pale); border: 1px solid var(--rg-gold-border); display: flex; align-items: center; justify-content: center; margin-bottom: 20px; font-size: 1.3rem; }
.rg-why-card h3 { font-family: 'Cormorant Garamond', serif; font-size: 1.25rem; font-weight: 600; color: var(--rg-dark); margin-bottom: 10px; }
.rg-why-card p { color: var(--rg-muted); font-size: 0.86rem; line-height: 1.75; font-weight: 300; }

/* ── Gallery ─────────────────────────────────────────────── */
.rg-gallery-bg { background: var(--rg-bg2); }
.rg-gallery-grid { display: grid; grid-template-columns: 2fr 1fr 1fr; grid-template-rows: 260px 260px; gap: 3px; }
.rg-gal-item { overflow: hidden; position: relative; }
.rg-gal-item:first-child { grid-row: span 2; }
.rg-gal-item img { width: 100%; height: 100%; object-fit: cover; filter: saturate(0.8); transition: transform 0.6s, filter 0.4s; }
.rg-gal-item:hover img { transform: scale(1.06); filter: saturate(1.05); }
.rg-gal-overlay { position: absolute; inset: 0; background: rgba(184,136,30,0.15); opacity: 0; transition: opacity 0.4s; }
.rg-gal-item:hover .rg-gal-overlay { opacity: 1; }

/* ── Testimonial ─────────────────────────────────────────── */
.rg-testi-bg { background: var(--rg-gold-pale); border-top: 1px solid var(--rg-gold-border); border-bottom: 1px solid var(--rg-gold-border); text-align: center; }
.rg-testi-inner { max-width: 680px; margin: 0 auto; }
.rg-testi-text { font-family: 'Cormorant Garamond', serif; font-size: clamp(1.25rem, 3vw, 1.55rem); font-weight: 300; font-style: italic; line-height: 1.65; color: var(--rg-dark); margin-bottom: 24px; }
.rg-testi-author { font-size: 0.72rem; letter-spacing: 0.18em; text-transform: uppercase; color: var(--rg-gold); font-weight: 600; }

/* ── Clients ─────────────────────────────────────────────── */
.rg-clients-bg { background: var(--rg-white); text-align: center; }
.rg-clients-grid { display: grid; grid-template-columns: repeat(4, 1fr); gap: 16px; margin-top: 48px; }
.rg-client-card { border: 1px solid var(--rg-gold-border); background: var(--rg-bg); padding: 20px 16px; text-align: center; transition: border-color 0.3s, background 0.3s, box-shadow 0.3s; text-decoration: none; display: block; }
.rg-client-card:hover { border-color: var(--rg-gold); background: var(--rg-gold-pale); box-shadow: 0 4px 16px rgba(184,136,30,0.1); }
.rg-client-card img { width: 80px; height: 80px; object-fit: contain; margin: 0 auto 10px; border-radius: 50%; background: var(--rg-white); padding: 4px; border: 1px solid var(--rg-gold-border); }
.rg-client-name { font-family: 'Cormorant Garamond', serif; font-size: 1rem; letter-spacing: 0.06em; color: var(--rg-muted); transition: color 0.3s; display: block; line-height: 1.3; margin-bottom: 4px; }
.rg-client-country { font-size: 0.65rem; color: var(--rg-gold); letter-spacing: 0.1em; text-transform: uppercase; }
.rg-client-card:hover .rg-client-name { color: var(--rg-gold); }

/* ── Contact ─────────────────────────────────────────────── */
.rg-contact-bg { background: var(--rg-bg2); }
.rg-contact-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 64px; align-items: start; }
.rg-contact-detail { display: flex; align-items: flex-start; gap: 16px; margin-bottom: 22px; padding-bottom: 22px; border-bottom: 1px solid var(--rg-gold-border); }
.rg-contact-icon { width: 40px; height: 40px; background: var(--rg-gold-pale); border: 1px solid var(--rg-gold-border); display: flex; align-items: center; justify-content: center; font-size: 1rem; flex-shrink: 0; }
.rg-contact-label { font-size: 0.62rem; letter-spacing: 0.14em; text-transform: uppercase; color: var(--rg-gold); margin-bottom: 3px; font-weight: 600; }
.rg-contact-val { font-size: 0.9rem; color: var(--rg-text); line-height: 1.55; }
.rg-contact-form { display: flex; flex-direction: column; gap: 12px; }
.rg-form-row { display: grid; grid-template-columns: 1fr 1fr; gap: 12px; }
.rg-field { background: var(--rg-white); border: 1px solid var(--rg-gold-border); padding: 12px 16px; color: var(--rg-text); font-family: 'Outfit', sans-serif; font-size: 0.88rem; outline: none; width: 100%; transition: border-color 0.3s, box-shadow 0.3s; }
.rg-field:focus { border-color: var(--rg-gold); box-shadow: 0 0 0 3px rgba(184,136,30,0.07); }
.rg-field::placeholder { color: rgba(120,112,96,0.4); }
textarea.rg-field { resize: vertical; min-height: 110px; }
.rg-submit-btn { background: var(--rg-gold); color: var(--rg-white); border: none; padding: 14px; font-family: 'Outfit', sans-serif; font-size: 0.84rem; font-weight: 600; letter-spacing: 0.1em; text-transform: uppercase; cursor: pointer; width: 100%; transition: background 0.3s, transform 0.2s; }
.rg-submit-btn:hover { background: #9A7218; transform: translateY(-1px); }

/* ── Scroll Reveal ───────────────────────────────────────── */
.rg-reveal { opacity: 1; transform: translateY(0); transition: opacity 0.65s ease, transform 0.65s ease; }
.rg-reveal.rg-animate { opacity: 0; transform: translateY(20px); }
.rg-reveal.rg-animate.rg-visible { opacity: 1; transform: translateY(0); }
.rg-d1 { transition-delay: 0.08s; }
.rg-d2 { transition-delay: 0.16s; }
.rg-d3 { transition-delay: 0.24s; }

/* ── Responsive — Tablet (≤900px) ───────────────────────── */
@media (max-width: 900px) {
  .rg-nav { padding: 0 20px; }
  .rg-nav-links, .rg-nav-social { display: none; }
  .rg-hamburger { display: flex; }
  .rg-stats-bar { grid-template-columns: repeat(2, 1fr); }
  .rg-about-grid { grid-template-columns: 1fr; gap: 40px; }
  .rg-about-images { height: 340px; }
  .rg-about-img-main { width: 78%; height: 78%; }
  .rg-about-img-accent { width: 50%; height: 46%; }
  .rg-products-grid { grid-template-columns: repeat(3, 1fr); }
  .rg-why-grid { grid-template-columns: 1fr 1fr; }
  .rg-gallery-grid { grid-template-columns: 1fr 1fr; grid-template-rows: 220px 220px; }
  .rg-gal-item:first-child { grid-row: span 1; grid-column: span 2; }
  .rg-clients-grid { grid-template-columns: repeat(3, 1fr); }
  .rg-contact-grid { grid-template-columns: 1fr; gap: 40px; }
  .rg-form-row { grid-template-columns: 1fr; }
}

/* ── Responsive — Mobile (≤600px) ───────────────────────── */
@media (max-width: 600px) {
  :root { --rg-nav-h: 64px; }
  .rg-hero { min-height: 100svh; }
  .rg-hero-eyebrow::before, .rg-hero-eyebrow::after { display: none; }
  .rg-slider { height: 300px; }
  .rg-slide-desc { display: none; }
  .rg-stats-bar { grid-template-columns: repeat(2, 1fr); gap: 12px; padding: 28px 16px; }
  .rg-stat-num { font-size: 2rem; }
  .rg-about-images { height: 280px; }
  .rg-about-badge { width: 72px; height: 72px; }
  .rg-about-badge b { font-size: 1.4rem; }
  .rg-products-grid { grid-template-columns: repeat(2, 1fr); gap: 12px; }
  .rg-why-grid { grid-template-columns: 1fr; }
  .rg-gallery-grid { grid-template-columns: 1fr; grid-template-rows: auto; }
  .rg-gal-item { height: 200px; }
  .rg-gal-item:first-child { grid-column: span 1; grid-row: span 1; height: 240px; }
  .rg-clients-grid { grid-template-columns: repeat(2, 1fr); gap: 12px; }
  .rg-client-card img { width: 60px; height: 60px; }
  .rg-client-name { font-size: 0.88rem; }
  .rg-section { padding: 60px 20px; }
  .rg-section-sm { padding: 48px 20px; }
}
/* ══════════════════════════════════════════════════════════
   WHATSAPP FLOATING BUTTON
══════════════════════════════════════════════════════════ */
.rg-wa-wrap { position: fixed; bottom: 28px; right: 28px; z-index: 9999; display: flex; flex-direction: column; align-items: flex-end; gap: 12px; }

.rg-wa-popup { width: 300px; background: #fff; border-radius: 16px; box-shadow: 0 12px 48px rgba(0,0,0,0.16), 0 2px 8px rgba(0,0,0,0.08); overflow: hidden; opacity: 0; transform: translateY(16px) scale(0.96); pointer-events: none; transition: opacity 0.3s ease, transform 0.3s ease; transform-origin: bottom right; }
.rg-wa-popup.rg-wa-open { opacity: 1; transform: translateY(0) scale(1); pointer-events: all; }

.rg-wa-close { position: absolute; top: 10px; right: 12px; width: 22px; height: 22px; background: rgba(255,255,255,0.2); border: none; border-radius: 50%; cursor: pointer; display: flex; align-items: center; justify-content: center; color: #fff; transition: background 0.2s; z-index: 2; }
.rg-wa-close:hover { background: rgba(255,255,255,0.35); }

.rg-wa-popup-head { background: linear-gradient(135deg, #25D366 0%, #128C7E 100%); padding: 18px 16px 16px; display: flex; align-items: center; gap: 12px; position: relative; }
.rg-wa-avatar { width: 44px; height: 44px; border-radius: 50%; background: rgba(255,255,255,0.2); display: flex; align-items: center; justify-content: center; flex-shrink: 0; position: relative; }
.rg-wa-online-dot { position: absolute; bottom: 1px; right: 1px; width: 10px; height: 10px; border-radius: 50%; background: #4ADE80; border: 2px solid #25D366; animation: rg-wa-pulse 2s ease-in-out infinite; }
@keyframes rg-wa-pulse { 0%,100% { transform: scale(1); opacity: 1; } 50% { transform: scale(1.2); opacity: 0.8; } }
.rg-wa-popup-info { flex: 1; min-width: 0; }
.rg-wa-popup-name { display: block; color: #fff; font-weight: 600; font-size: 0.92rem; letter-spacing: 0.02em; line-height: 1.2; }
.rg-wa-popup-status { display: flex; align-items: center; gap: 5px; color: rgba(255,255,255,0.82); font-size: 0.7rem; margin-top: 3px; }
.rg-wa-status-dot { width: 7px; height: 7px; border-radius: 50%; background: #4ADE80; flex-shrink: 0; }

.rg-wa-popup-body { padding: 16px; background: #E5DDD5; background-image: url("data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' fill-rule='evenodd'%3E%3Cg fill='%23c5bdb5' fill-opacity='0.3'%3E%3Cpath d='M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E"); }
.rg-wa-bubble { background: #fff; border-radius: 0 12px 12px 12px; padding: 10px 14px 8px; max-width: 85%; box-shadow: 0 1px 4px rgba(0,0,0,0.1); position: relative; }
.rg-wa-bubble::before { content: ''; position: absolute; top: 0; left: -8px; border: 8px solid transparent; border-top-color: #fff; border-left: 0; }
.rg-wa-bubble p { font-size: 0.84rem; color: #2E2A22; line-height: 1.55; margin-bottom: 4px; }
.rg-wa-bubble p:last-of-type { margin-bottom: 0; }
.rg-wa-time { display: block; text-align: right; font-size: 0.62rem; color: #999; margin-top: 6px; }

.rg-wa-popup-btn { display: flex; align-items: center; justify-content: center; gap: 8px; width: 100%; padding: 14px; background: linear-gradient(135deg, #25D366 0%, #128C7E 100%); color: #fff; font-size: 0.82rem; font-weight: 600; letter-spacing: 0.06em; text-transform: uppercase; transition: opacity 0.2s, transform 0.2s; border: none; cursor: pointer; }
.rg-wa-popup-btn:hover { opacity: 0.92; transform: translateY(-1px); }

.rg-wa-fab { width: auto; min-width: 56px; height: 56px; background: linear-gradient(135deg, #25D366 0%, #128C7E 100%); border: none; border-radius: 100px; display: flex; align-items: center; gap: 10px; padding: 0 20px 0 16px; cursor: pointer; box-shadow: 0 4px 20px rgba(37,211,102,0.4); position: relative; transition: transform 0.25s ease, box-shadow 0.25s ease, padding 0.25s ease; overflow: hidden; }
.rg-wa-fab:hover { transform: translateY(-3px) scale(1.03); box-shadow: 0 8px 28px rgba(37,211,102,0.5); }
.rg-wa-fab:active { transform: scale(0.97); }
.rg-wa-fab-icon { display: flex; align-items: center; justify-content: center; flex-shrink: 0; transition: opacity 0.2s, transform 0.2s; }
.rg-wa-fab-icon--close { position: absolute; left: 16px; opacity: 0; transform: rotate(-90deg); }
.rg-wa-fab.rg-wa-active .rg-wa-fab-icon--wa   { opacity: 0; transform: rotate(90deg); }
.rg-wa-fab.rg-wa-active .rg-wa-fab-icon--close { opacity: 1; transform: rotate(0); }
.rg-wa-label { color: #fff; font-size: 0.8rem; font-weight: 600; letter-spacing: 0.06em; white-space: nowrap; transition: opacity 0.2s, max-width 0.3s; max-width: 120px; overflow: hidden; }
.rg-wa-fab.rg-wa-active .rg-wa-label { opacity: 0; max-width: 0; }
.rg-wa-fab-ping { position: absolute; inset: 0; border-radius: 100px; border: 2px solid rgba(37,211,102,0.6); animation: rg-wa-ring 2.5s ease-out infinite; pointer-events: none; }
@keyframes rg-wa-ring { 0% { transform: scale(1); opacity: 0.7; } 70%,100% { transform: scale(1.35); opacity: 0; } }

@media (max-width: 600px) {
  .rg-wa-wrap { bottom: 18px; right: 16px; }
  .rg-wa-popup { width: 272px; }
  .rg-wa-fab { height: 52px; padding: 0 16px 0 13px; }
  .rg-wa-label { font-size: 0.75rem; }
}
</style>

<!-- ========== HEADER JS ========== -->
<script>
(function () {
  /* ── Nav logo: hide text if image loads ── */
  var navLogo = document.getElementById('rgNavLogo');
  var navText = document.getElementById('rgNavText');
  if (navLogo) {
    navLogo.onload  = function () { navText.style.display = 'none'; };
    navLogo.onerror = function () { navLogo.style.display = 'none'; navText.style.display = ''; };
    if (navLogo.complete && navLogo.naturalWidth > 0) navText.style.display = 'none';
  }

  /* ── Hamburger ── */
  var hamburger  = document.getElementById('rgHamburger');
  var mobileMenu = document.getElementById('rgMobileMenu');

  if (hamburger) {
    hamburger.addEventListener('click', function () {
      hamburger.classList.toggle('rg-open');
      mobileMenu.classList.toggle('rg-open');
    });
  }

  /* ── Navbar scroll ── */
  var navbar = document.getElementById('rgNavbar');
  window.addEventListener('scroll', function () {
    navbar.classList.toggle('rg-scrolled', window.scrollY > 60);
  });

  /* ── WhatsApp Popup ── */
  var fab      = document.getElementById('rgWaFab');
  var popup    = document.getElementById('rgWaPopup');
  var closeBtn = document.getElementById('rgWaClose');
  var shown    = false;

  function openPopup()  { popup.classList.add('rg-wa-open');    fab.classList.add('rg-wa-active');    shown = true; }
  function closePopup() { popup.classList.remove('rg-wa-open'); fab.classList.remove('rg-wa-active'); shown = false; }

  if (fab)      fab.addEventListener('click', function () { shown ? closePopup() : openPopup(); });
  if (closeBtn) closeBtn.addEventListener('click', function (e) { e.stopPropagation(); closePopup(); });

  /* Auto-open after 4 s on first visit */
  if (!sessionStorage.getItem('rg_wa_shown')) {
    setTimeout(function () { openPopup(); sessionStorage.setItem('rg_wa_shown', '1'); }, 4000);
  }

  /* Close when clicking outside */
  document.addEventListener('click', function (e) {
    var wrap = document.getElementById('rgWaWrap');
    if (shown && wrap && !wrap.contains(e.target)) closePopup();
  });
})();

/* exposed globally for onclick="rgCloseMenu()" in mobile links */
function rgCloseMenu() {
  var h = document.getElementById('rgHamburger');
  var m = document.getElementById('rgMobileMenu');
  if (h) h.classList.remove('rg-open');
  if (m) m.classList.remove('rg-open');
}
</script>