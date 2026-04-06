<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Gold Lab – Instant Gold Services & Ornament Solutions | Raj Aiswari</title>
  <link rel="icon" type="image/png" href="favicon.png">
  <meta name="theme-color" content="#B8881E">
  <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,600;1,300;1,400&family=Outfit:wght@300;400;500;600&display=swap" rel="stylesheet">

  <style>
    /* ── Variables ───────────────────────────────── */
    :root {
      --rg-gold:        #B8881E;
      --rg-gold-light:  #D4A83A;
      --rg-gold-pale:   #F5EDD6;
      --rg-gold-border: rgba(184,136,30,0.22);
      --rg-dark:        #1C1A16;
      --rg-dark2:       #232018;
      --rg-text:        #2E2A22;
      --rg-muted:       #7A7060;
      --rg-bg:          #FDFAF4;
      --rg-bg2:         #F7F2E8;
      --rg-white:       #FFFFFF;
      --rg-nav-h:       72px;
    }
    *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }
    html { scroll-behavior: smooth; font-size: 16px; }
    body { font-family: 'Outfit', sans-serif; background: var(--rg-bg); color: var(--rg-text); overflow-x: hidden; line-height: 1.6; }
    img { display: block; max-width: 100%; height: auto; }
    a { text-decoration: none; }

    /* ── Page Hero ───────────────────────────────── */
    .gl-hero {
      position: relative;
      min-height: 480px;
      display: flex;
      align-items: center;
      justify-content: center;
      text-align: center;
      background: var(--rg-dark);
      overflow: hidden;
      padding-top: var(--rg-nav-h);
    }
    .gl-hero-pattern {
      position: absolute; inset: 0; z-index: 0;
      background-image:
        linear-gradient(135deg, rgba(184,136,30,0.06) 25%, transparent 25%),
        linear-gradient(225deg, rgba(184,136,30,0.06) 25%, transparent 25%),
        linear-gradient(315deg, rgba(184,136,30,0.06) 25%, transparent 25%),
        linear-gradient(45deg,  rgba(184,136,30,0.06) 25%, transparent 25%);
      background-size: 40px 40px;
    }
    .gl-hero-img {
      position: absolute; inset: 0; z-index: 0;
      background-image: url('https://images.unsplash.com/photo-1611392492847-47e98e04b0f2?w=1600&q=80&auto=format&fit=crop');
      background-size: cover;
      background-position: center;
      opacity: 0.18;
    }
    .gl-hero-glow {
      position: absolute; inset: 0; z-index: 1;
      background: radial-gradient(ellipse 70% 60% at 50% 40%, rgba(184,136,30,0.18) 0%, transparent 70%),
                  linear-gradient(to top, rgba(28,26,22,0.95) 0%, rgba(28,26,22,0.4) 60%);
    }
    .gl-hero-content {
      position: relative; z-index: 2;
      padding: 70px 20px;
      max-width: 780px;
      margin: 0 auto;
      width: 100%;
    }
    .gl-eyebrow {
      display: flex;
      align-items: center;
      justify-content: center;
      gap: 12px;
      color: var(--rg-gold);
      font-size: 0.68rem;
      letter-spacing: 0.28em;
      text-transform: uppercase;
      font-weight: 600;
      margin-bottom: 16px;
      opacity: 0;
      animation: rg-fadeUp 0.9s ease 0.1s forwards;
    }
    .gl-eyebrow::before, .gl-eyebrow::after {
      content: '';
      width: 28px;
      height: 1.5px;
      background: var(--rg-gold);
    }
    .gl-hero-title {
      font-family: 'Cormorant Garamond', serif;
      font-size: clamp(2.4rem, 7vw, 4.8rem);
      font-weight: 300;
      line-height: 1.05;
      color: #FDFAF4;
      margin-bottom: 20px;
      opacity: 0;
      animation: rg-fadeUp 1s ease 0.2s forwards;
    }
    .gl-hero-title em { font-style: italic; color: var(--rg-gold-light); }
    .gl-hero-sub {
      font-size: 0.92rem;
      color: rgba(253,250,244,0.52);
      font-weight: 300;
      line-height: 1.8;
      max-width: 600px;
      margin: 0 auto 28px;
      opacity: 0;
      animation: rg-fadeUp 1s ease 0.35s forwards;
    }
    .gl-hero-badges {
      display: flex;
      align-items: center;
      justify-content: center;
      gap: 12px;
      flex-wrap: wrap;
      opacity: 0;
      animation: rg-fadeUp 1s ease 0.5s forwards;
    }
    .gl-badge {
      display: inline-flex; align-items: center; gap: 6px;
      border: 1px solid rgba(184,136,30,0.35);
      color: var(--rg-gold-light);
      font-size: 0.62rem; letter-spacing: 0.18em; text-transform: uppercase;
      padding: 6px 14px; font-weight: 600;
      background: rgba(184,136,30,0.08);
    }
    .gl-badge::before { content: '◆'; font-size: 0.45rem; }

    @keyframes rg-fadeUp {
      from { opacity: 0; transform: translateY(22px); }
      to   { opacity: 1; transform: translateY(0); }
    }

    /* ── Gold Rule ───────────────────────────────── */
    .rg-gold-rule { width: 48px; height: 2px; background: linear-gradient(to right, var(--rg-gold), transparent); margin: 18px 0 24px; }

    /* ── Intro Strip ─────────────────────────────── */
    .gl-intro {
      background: var(--rg-dark);
      padding: 48px clamp(20px,6vw,80px);
      text-align: center;
      border-top: 1px solid rgba(184,136,30,0.15);
      border-bottom: 1px solid rgba(184,136,30,0.15);
    }
    .gl-intro-inner { max-width: 820px; margin: 0 auto; }
    .gl-intro-label {
      display: flex; align-items: center; justify-content: center; gap: 12px;
      color: var(--rg-gold); font-size: 0.62rem; letter-spacing: 0.28em;
      text-transform: uppercase; font-weight: 600; margin-bottom: 16px;
    }
    .gl-intro-label::before, .gl-intro-label::after {
      content: ''; width: 24px; height: 1px; background: var(--rg-gold);
    }
    .gl-intro-text {
      font-family: 'Cormorant Garamond', serif;
      font-size: clamp(1.15rem, 2.5vw, 1.55rem);
      font-weight: 300; color: rgba(253,250,244,0.75); line-height: 1.75;
      font-style: italic;
    }

    /* ── Services Section ────────────────────────── */
    .gl-services { padding: 80px clamp(20px,6vw,80px); max-width: 1280px; margin: 0 auto; }
    .gl-section-header { text-align: center; margin-bottom: 56px; }
    .gl-section-eyebrow {
      display: flex; align-items: center; justify-content: center; gap: 12px;
      color: var(--rg-gold); font-size: 0.65rem; letter-spacing: 0.26em;
      text-transform: uppercase; font-weight: 600; margin-bottom: 14px;
    }
    .gl-section-eyebrow::before, .gl-section-eyebrow::after {
      content: ''; width: 24px; height: 1.5px; background: var(--rg-gold);
    }
    .gl-section-title {
      font-family: 'Cormorant Garamond', serif;
      font-size: clamp(2rem, 5vw, 3.2rem); font-weight: 300; color: var(--rg-dark); line-height: 1.1;
    }
    .gl-section-title em { font-style: italic; color: var(--rg-gold); }

    /* ── Service Cards ───────────────────────────── */
    .gl-service-card {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 0;
      background: var(--rg-white);
      border: 1px solid var(--rg-gold-border);
      margin-bottom: 28px;
      overflow: hidden;
      transition: box-shadow 0.4s, border-color 0.4s;
      position: relative;
    }
    .gl-service-card::before {
      content: ''; position: absolute;
      top: 0; left: 0; right: 0; height: 3px;
      background: linear-gradient(to right, var(--rg-gold), #D4A83A, transparent);
      transform: scaleX(0); transform-origin: left;
      transition: transform 0.5s ease;
    }
    .gl-service-card:hover { box-shadow: 0 8px 40px rgba(184,136,30,0.12); border-color: rgba(184,136,30,0.4); }
    .gl-service-card:hover::before { transform: scaleX(1); }
    .gl-service-card.reverse { direction: rtl; }
    .gl-service-card.reverse > * { direction: ltr; }

    .gl-service-img {
      position: relative; overflow: hidden; min-height: 320px;
    }
    .gl-service-img img {
      width: 100%; height: 100%; object-fit: cover;
      transition: transform 0.7s ease;
    }
    .gl-service-card:hover .gl-service-img img { transform: scale(1.04); }
    .gl-service-img-overlay {
      position: absolute; inset: 0;
      background: linear-gradient(to right, transparent 60%, var(--rg-white));
      z-index: 1;
    }
    .gl-service-card.reverse .gl-service-img-overlay {
      background: linear-gradient(to left, transparent 60%, var(--rg-white));
    }
    .gl-service-num {
      position: absolute; top: 20px; left: 20px; z-index: 2;
      font-family: 'Cormorant Garamond', serif;
      font-size: 3rem; font-weight: 300; color: rgba(255,255,255,0.22);
      line-height: 1; letter-spacing: -0.02em;
    }
    .gl-service-card.reverse .gl-service-num { left: auto; right: 20px; }

    .gl-service-content {
      padding: 44px 40px;
      display: flex; flex-direction: column; justify-content: center;
    }
    .gl-service-label {
      font-size: 0.58rem; letter-spacing: 0.22em; text-transform: uppercase;
      color: var(--rg-gold); font-weight: 600; margin-bottom: 10px;
      display: flex; align-items: center; gap: 8px;
    }
    .gl-service-label::before { content: ''; display: block; width: 18px; height: 1px; background: var(--rg-gold); }
    .gl-service-name {
      font-family: 'Cormorant Garamond', serif;
      font-size: clamp(1.5rem, 3vw, 2.2rem); font-weight: 300;
      color: var(--rg-dark); line-height: 1.15; margin-bottom: 16px;
    }
    .gl-service-name em { font-style: italic; color: var(--rg-gold); }
    .gl-service-divider { width: 36px; height: 1.5px; background: var(--rg-gold-border); margin-bottom: 16px; }
    .gl-service-points { list-style: none; display: flex; flex-direction: column; gap: 10px; }
    .gl-service-points li {
      display: flex; align-items: flex-start; gap: 10px;
      font-size: 0.86rem; color: var(--rg-muted); font-weight: 300; line-height: 1.6;
    }
    .gl-service-points li::before {
      content: '';
      display: block; width: 5px; height: 5px; border-radius: 50%;
      background: var(--rg-gold); flex-shrink: 0; margin-top: 8px;
    }

    /* ── CTA Banner ──────────────────────────────── */
    .gl-cta {
      margin: 0 clamp(20px,6vw,80px) 80px;
      background: var(--rg-dark);
      border: 1px solid rgba(184,136,30,0.2);
      padding: 60px 48px;
      position: relative;
      overflow: hidden;
      text-align: center;
    }
    .gl-cta::before {
      content: '';
      position: absolute; top: 0; left: 0; right: 0; height: 3px;
      background: linear-gradient(to right, transparent, var(--rg-gold), var(--rg-gold-light), transparent);
    }
    .gl-cta-pattern {
      position: absolute; inset: 0;
      background-image:
        linear-gradient(135deg, rgba(184,136,30,0.04) 25%, transparent 25%),
        linear-gradient(225deg, rgba(184,136,30,0.04) 25%, transparent 25%),
        linear-gradient(315deg, rgba(184,136,30,0.04) 25%, transparent 25%),
        linear-gradient(45deg,  rgba(184,136,30,0.04) 25%, transparent 25%);
      background-size: 40px 40px;
    }
    .gl-cta-content { position: relative; z-index: 1; max-width: 700px; margin: 0 auto; }
    .gl-cta-eyebrow {
      display: flex; align-items: center; justify-content: center; gap: 12px;
      color: var(--rg-gold); font-size: 0.62rem; letter-spacing: 0.26em;
      text-transform: uppercase; font-weight: 600; margin-bottom: 18px;
    }
    .gl-cta-eyebrow::before, .gl-cta-eyebrow::after {
      content: ''; width: 24px; height: 1px; background: var(--rg-gold);
    }
    .gl-cta-title {
      font-family: 'Cormorant Garamond', serif;
      font-size: clamp(1.8rem, 4.5vw, 3rem); font-weight: 300;
      color: #FDFAF4; line-height: 1.15; margin-bottom: 16px;
    }
    .gl-cta-title em { font-style: italic; color: var(--rg-gold-light); }
    .gl-cta-text {
      font-size: 0.88rem; color: rgba(253,250,244,0.45);
      font-weight: 300; line-height: 1.8; margin-bottom: 36px;
    }
    .gl-cta-btns { display: flex; align-items: center; justify-content: center; gap: 14px; flex-wrap: wrap; }
    .gl-btn-primary {
      display: inline-flex; align-items: center; gap: 9px;
      background: #25D366; color: #fff;
      padding: 15px 36px;
      font-family: 'Outfit', sans-serif; font-size: 0.8rem; font-weight: 600;
      letter-spacing: 0.12em; text-transform: uppercase;
      border: none; cursor: pointer;
      transition: background 0.3s, transform 0.2s, box-shadow 0.3s;
    }
    .gl-btn-primary:hover { background: #128C7E; transform: translateY(-2px); box-shadow: 0 6px 24px rgba(37,211,102,0.35); }
    .gl-btn-secondary {
      display: inline-flex; align-items: center; gap: 9px;
      background: transparent; color: var(--rg-gold);
      border: 1px solid rgba(184,136,30,0.4);
      padding: 15px 36px;
      font-family: 'Outfit', sans-serif; font-size: 0.8rem; font-weight: 600;
      letter-spacing: 0.12em; text-transform: uppercase;
      transition: background 0.3s, border-color 0.3s, transform 0.2s;
    }
    .gl-btn-secondary:hover { background: rgba(184,136,30,0.1); border-color: var(--rg-gold); transform: translateY(-2px); }

    /* ── Feature Strip ───────────────────────────── */
    .gl-features {
      background: var(--rg-bg2);
      border-top: 1px solid var(--rg-gold-border);
      border-bottom: 1px solid var(--rg-gold-border);
      padding: 40px clamp(20px,6vw,80px);
    }
    .gl-features-grid {
      max-width: 1280px; margin: 0 auto;
      display: grid; grid-template-columns: repeat(4, 1fr); gap: 32px;
    }
    .gl-feature {
      text-align: center;
    }
    .gl-feature-icon {
      width: 52px; height: 52px; margin: 0 auto 14px;
      background: var(--rg-gold-pale);
      border: 1px solid var(--rg-gold-border);
      display: flex; align-items: center; justify-content: center;
      color: var(--rg-gold);
    }
    .gl-feature-num {
      font-family: 'Cormorant Garamond', serif;
      font-size: 2rem; font-weight: 300; color: var(--rg-gold);
      line-height: 1; margin-bottom: 4px;
    }
    .gl-feature-label {
      font-size: 0.72rem; color: var(--rg-muted); font-weight: 300;
      letter-spacing: 0.06em; line-height: 1.4;
    }

    /* ── Reveal animations ───────────────────────── */
    .rg-reveal { opacity: 1; transform: translateY(0); transition: opacity 0.65s ease, transform 0.65s ease; }
    .rg-reveal.rg-anim { opacity: 0; transform: translateY(24px); }
    .rg-reveal.rg-anim.rg-vis { opacity: 1; transform: translateY(0); }
    .rg-d1 { transition-delay: 0.08s; }
    .rg-d2 { transition-delay: 0.16s; }
    .rg-d3 { transition-delay: 0.24s; }
    .rg-d4 { transition-delay: 0.32s; }

    /* ── Responsive ──────────────────────────────── */
    @media (max-width: 900px) {
      .gl-service-card, .gl-service-card.reverse { grid-template-columns: 1fr; direction: ltr; }
      .gl-service-img { min-height: 220px; }
      .gl-service-img-overlay,
      .gl-service-card.reverse .gl-service-img-overlay {
        background: linear-gradient(to top, var(--rg-white), transparent);
      }
      .gl-service-content { padding: 28px 24px; }
      .gl-features-grid { grid-template-columns: repeat(2, 1fr); }
      .gl-cta { padding: 40px 24px; margin: 0 20px 60px; }
    }
    @media (max-width: 560px) {
      :root { --rg-nav-h: 64px; }
      .gl-features-grid { grid-template-columns: repeat(2, 1fr); gap: 20px; }
      .gl-cta-btns { flex-direction: column; align-items: stretch; }
      .gl-btn-primary, .gl-btn-secondary { justify-content: center; }
    }
  </style>
</head>
<body>

<?php include 'header.php'; ?>

<!-- ══ HERO ══════════════════════════════════════ -->
<section class="gl-hero">
  <div class="gl-hero-pattern"></div>
  <div class="gl-hero-img"></div>
  <div class="gl-hero-glow"></div>
  <div class="gl-hero-content">
    <div class="gl-eyebrow">Raj Aiswari</div>
    <h1 class="gl-hero-title">Gold <em>Lab</em></h1>
    <p class="gl-hero-sub">Instant gold services and ornament solutions — all in one place. From testing and hallmarking to welding, exchange, and full workshop access.</p>
    <div class="gl-hero-badges">
      <span class="gl-badge">100% Accurate Testing</span>
      <span class="gl-badge">On-Demand Service</span>
      <span class="gl-badge">Best Quality</span>
    </div>
  </div>
</section>

<!-- ══ FEATURE STRIP ══════════════════════════════ -->
<div class="gl-features">
  <div class="gl-features-grid">
    <div class="gl-feature rg-reveal">
      <div class="gl-feature-icon">
        <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><path d="M22 11.08V12a10 10 0 11-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>
      </div>
      <div class="gl-feature-num">100%</div>
      <div class="gl-feature-label">Purity Accuracy</div>
    </div>
    <div class="gl-feature rg-reveal rg-d1">
      <div class="gl-feature-icon">
        <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
      </div>
      <div class="gl-feature-num">Instant</div>
      <div class="gl-feature-label">Results & Service</div>
    </div>
    <div class="gl-feature rg-reveal rg-d2">
      <div class="gl-feature-icon">
        <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="11" width="18" height="11" rx="2"/><path d="M7 11V7a5 5 0 0110 0v4"/></svg>
      </div>
      <div class="gl-feature-num">5+</div>
      <div class="gl-feature-label">Core Services</div>
    </div>
    <div class="gl-feature rg-reveal rg-d3">
      <div class="gl-feature-icon">
        <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 00-3-3.87"/><path d="M16 3.13a4 4 0 010 7.75"/></svg>
      </div>
      <div class="gl-feature-num">Trusted</div>
      <div class="gl-feature-label">By Customers & Craftsmen</div>
    </div>
  </div>
</div>

<!-- ══ SERVICES ════════════════════════════════════ -->
<div class="gl-services">

  <div class="gl-section-header rg-reveal">
    <div class="gl-section-eyebrow">What We Offer</div>
    <h2 class="gl-section-title">Our <em>Services</em></h2>
  </div>

  <!-- 1. Gold Testing -->
  <div class="gl-service-card rg-reveal">
    <div class="gl-service-img">
      <img src="gold machine.png" alt="Gold Testing Machine" loading="lazy">
      <div class="gl-service-img-overlay"></div>
      <div class="gl-service-num">01</div>
    </div>
    <div class="gl-service-content">
      <div class="gl-service-label">Service One</div>
      <h3 class="gl-service-name">Gold Testing <em>(Tunch)</em></h3>
      <div class="gl-service-divider"></div>
      <ul class="gl-service-points">
        <li>Get 100% accurate gold purity results instantly with our advanced Fischer testing equipment.</li>
        <li>Verify previous purity reports anytime via QR scan — full history at your fingertips.</li>
        <li>Reliable and trusted by both customers and shop owners across Chittagong.</li>
      </ul>
    </div>
  </div>

  <!-- 2. Hallmarking -->
  <div class="gl-service-card reverse rg-reveal rg-d1">
    <div class="gl-service-img">
      <img src="hallmark.jpg" alt="Gold Hallmarking" loading="lazy">
      <div class="gl-service-img-overlay"></div>
      <div class="gl-service-num">02</div>
    </div>
    <div class="gl-service-content">
      <div class="gl-service-label">Service Two</div>
      <h3 class="gl-service-name">Hallmarking & <em>Quality Verification</em></h3>
      <div class="gl-service-divider"></div>
      <ul class="gl-service-points">
        <li>Craftsmen and shop owners can hallmark products to guarantee and certify quality.</li>
        <li>Ensures that every ornament carries an authentic, verified purity stamp.</li>
        <li>Build customer trust and maintain the gold standard of your craftsmanship.</li>
      </ul>
    </div>
  </div>

  <!-- 3. Welding & Repairs -->
  <div class="gl-service-card rg-reveal">
    <div class="gl-service-img">
      <img src="lesar welding.jpg" alt="Gold Welding and Repair" loading="lazy">
      <div class="gl-service-img-overlay"></div>
      <div class="gl-service-num">03</div>
    </div>
    <div class="gl-service-content">
      <div class="gl-service-label">Service Three</div>
      <h3 class="gl-service-name">Welding & <em>Repairs</em></h3>
      <div class="gl-service-divider"></div>
      <ul class="gl-service-points">
        <li>Fix broken or damaged ornaments instantly with our precision welding tools.</li>
        <li>Fast, precise, and dependable service that restores your jewellery's original form.</li>
        <li>No waiting — repairs are completed on-site while you visit.</li>
      </ul>
    </div>
  </div>

  <!-- 4. Gold Purchase & Exchange -->
  <div class="gl-service-card reverse rg-reveal rg-d1">
    <div class="gl-service-img">
      <img src="gold exchanges.jpg" alt="Gold Exchange and Purchase" loading="lazy">
      <div class="gl-service-img-overlay"></div>
      <div class="gl-service-num">04</div>
    </div>
    <div class="gl-service-content">
      <div class="gl-service-label">Service Four</div>
      <h3 class="gl-service-name">Gold Purchase <em>& Exchange</em></h3>
      <div class="gl-service-divider"></div>
      <ul class="gl-service-points">
        <li>Buy, sell, or exchange gold as needed — at fair, transparent rates.</li>
        <li>Essential for craftsmen to source pure gold for creating new ornaments.</li>
        <li>Makes the workflow easier and smoother for both shop owners and artisans.</li>
      </ul>
    </div>
  </div>

  <!-- 5. Machinery & Workshop -->
  <div class="gl-service-card rg-reveal">
    <div class="gl-service-img">
      <img src="jewlry-testing-machne.jpg" alt="Gold Workshop Machinery" loading="lazy">
      <div class="gl-service-img-overlay"></div>
      <div class="gl-service-num">05</div>
    </div>
    <div class="gl-service-content">
      <div class="gl-service-label">Service Five</div>
      <h3 class="gl-service-name">Machinery & <em>Workshop Facilities</em></h3>
      <div class="gl-service-divider"></div>
      <ul class="gl-service-points">
        <li>Access modern wet machinery and a full suite of ornament tools on-site.</li>
        <li>Complete any gold-related task instantly and efficiently in one visit.</li>
        <li>State-of-the-art Fischer Measurement Technologies equipment for every process.</li>
      </ul>
    </div>
  </div>

</div><!-- /services -->

<!-- ══ INTRO ══════════════════════════════════════ -->
<div class="gl-intro">
  <div class="gl-intro-inner rg-reveal">
    <div class="gl-intro-label">Our Promise</div>
    <p class="gl-intro-text">At Gold Lab, you can access all your gold-related needs in one place, instantly and accurately. Our advanced machinery ensures fast, reliable, and precise results — trusted by both customers and craftsmen.</p>
  </div>
</div>

<?php include 'footer.php'; ?>

<script>
(function () {
  /* ── Scroll reveal ── */
  var els = document.querySelectorAll('.rg-reveal');
  var obs = new IntersectionObserver(function (entries) {
    entries.forEach(function (e) {
      if (e.isIntersecting) {
        e.target.classList.add('rg-vis');
        e.target.classList.remove('rg-anim');
        obs.unobserve(e.target);
      }
    });
  }, { threshold: 0, rootMargin: '0px 0px -30px 0px' });

  setTimeout(function () {
    els.forEach(function (el) {
      if (el.getBoundingClientRect().top > window.innerHeight) {
        el.classList.add('rg-anim');
        obs.observe(el);
      }
    });
  }, 80);
})();
</script>

</body>
</html>