<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact – Raj Aiswari | Fischer Measurement Technologies Bangladesh</title>
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
    .cnt-hero {
      position: relative;
      min-height: 340px;
      display: flex;
      align-items: center;
      justify-content: center;
      text-align: center;
      background: var(--rg-dark);
      overflow: hidden;
      padding-top: var(--rg-nav-h);
    }
    .cnt-hero-pattern {
      position: absolute; inset: 0; z-index: 0;
      background-image:
        linear-gradient(135deg, rgba(184,136,30,0.06) 25%, transparent 25%),
        linear-gradient(225deg, rgba(184,136,30,0.06) 25%, transparent 25%),
        linear-gradient(315deg, rgba(184,136,30,0.06) 25%, transparent 25%),
        linear-gradient(45deg,  rgba(184,136,30,0.06) 25%, transparent 25%);
      background-size: 40px 40px;
    }
    .cnt-hero-glow {
      position: absolute; inset: 0; z-index: 1;
      background: radial-gradient(ellipse 70% 60% at 50% 40%, rgba(184,136,30,0.13) 0%, transparent 70%),
                  linear-gradient(to top, rgba(28,26,22,0.9) 0%, transparent 60%);
    }
    .cnt-hero-content {
      position: relative; z-index: 2;
      padding: 60px 20px;
      max-width: 720px;
      margin: 0 auto;
      width: 100%;
    }
    .cnt-eyebrow {
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
    .cnt-eyebrow::before {
      content: '';
      width: 28px;
      height: 1.5px;
      background: var(--rg-gold);
    }
    .cnt-hero-title {
      font-family: 'Cormorant Garamond', serif;
      font-size: clamp(2.2rem, 6vw, 4.2rem);
      font-weight: 300;
      line-height: 1.1;
      color: #FDFAF4;
      margin-bottom: 14px;
      opacity: 0;
      animation: rg-fadeUp 1s ease 0.2s forwards;
    }
    .cnt-hero-title em { font-style: italic; color: var(--rg-gold-light); }
    .cnt-hero-sub {
      font-size: 0.88rem;
      color: rgba(253,250,244,0.45);
      font-weight: 300;
      line-height: 1.7;
      max-width: 520px;
      margin: 0 auto;
      opacity: 0;
      animation: rg-fadeUp 1s ease 0.35s forwards;
    }
    @keyframes rg-fadeUp {
      from { opacity: 0; transform: translateY(22px); }
      to   { opacity: 1; transform: translateY(0); }
    }

    /* ── Gold Rule ───────────────────────────────── */
    .rg-gold-rule { width: 48px; height: 2px; background: linear-gradient(to right, var(--rg-gold), transparent); margin: 18px 0 24px; }

    /* ── Layout Body ─────────────────────────────── */
    .cnt-body { padding: 64px clamp(20px,6vw,80px) 80px; max-width: 1280px; margin: 0 auto; }
    .cnt-grid {
      display: grid;
      grid-template-columns: 1.05fr 1.35fr;
      gap: 64px;
      align-items: start;
    }

    /* ── Left Column ─────────────────────────────── */
    .cnt-left-eyebrow {
      display: flex; align-items: center; gap: 10px;
      color: var(--rg-gold); font-size: 0.65rem; letter-spacing: 0.24em;
      text-transform: uppercase; font-weight: 600; margin-bottom: 12px;
    }
    .cnt-left-eyebrow::before { content: ''; display: block; width: 24px; height: 1.5px; background: var(--rg-gold); flex-shrink: 0; }
    .cnt-left-title {
      font-family: 'Cormorant Garamond', serif;
      font-size: clamp(1.8rem,4vw,2.7rem);
      font-weight: 300; line-height: 1.1; color: var(--rg-dark); margin-bottom: 10px;
    }
    .cnt-left-title em { font-style: italic; color: var(--rg-gold); }
    .cnt-left-desc {
      color: var(--rg-muted); font-size: 0.88rem; line-height: 1.8; font-weight: 300;
      margin-bottom: 36px; border-left: 2px solid var(--rg-gold-border); padding-left: 16px;
    }

    /* Contact Cards */
    .cnt-cards { display: flex; flex-direction: column; gap: 12px; margin-bottom: 36px; }
    .cnt-card {
      display: flex; align-items: flex-start; gap: 16px;
      background: var(--rg-white); border: 1px solid var(--rg-gold-border);
      padding: 18px 20px;
      position: relative; overflow: hidden;
      transition: border-color 0.3s, box-shadow 0.3s, transform 0.3s;
    }
    .cnt-card::before {
      content: ''; position: absolute; top: 0; left: 0;
      width: 0; height: 2px; background: var(--rg-gold); transition: width 0.4s;
    }
    .cnt-card:hover { border-color: var(--rg-gold); box-shadow: 0 4px 22px rgba(184,136,30,0.1); transform: translateX(4px); }
    .cnt-card:hover::before { width: 100%; }
    .cnt-card-icon {
      width: 42px; height: 42px; flex-shrink: 0;
      background: var(--rg-gold-pale); border: 1px solid var(--rg-gold-border);
      display: flex; align-items: center; justify-content: center;
      color: var(--rg-gold);
    }
    .cnt-card-label { font-size: 0.6rem; letter-spacing: 0.18em; text-transform: uppercase; color: var(--rg-gold); font-weight: 600; margin-bottom: 3px; }
    .cnt-card-val { font-size: 0.88rem; color: var(--rg-text); line-height: 1.55; }
    .cnt-card-val a { color: var(--rg-text); transition: color 0.25s; }
    .cnt-card-val a:hover { color: var(--rg-gold); }

    /* Hours Table */
    .cnt-hours {
      background: var(--rg-bg2); border: 1px solid var(--rg-gold-border);
      padding: 22px 20px; margin-bottom: 36px;
    }
    .cnt-hours-title {
      font-size: 0.62rem; letter-spacing: 0.2em; text-transform: uppercase;
      color: var(--rg-gold); font-weight: 600; margin-bottom: 14px;
      display: flex; align-items: center; gap: 8px;
    }
    .cnt-hours-title::before { content: ''; display: block; width: 18px; height: 1px; background: var(--rg-gold); }
    .cnt-hours-row { display: flex; justify-content: space-between; align-items: center; padding: 7px 0; border-bottom: 1px solid var(--rg-gold-border); font-size: 0.82rem; }
    .cnt-hours-row:last-child { border-bottom: none; }
    .cnt-hours-day { color: var(--rg-muted); font-weight: 300; }
    .cnt-hours-time { color: var(--rg-text); font-weight: 500; }
    .cnt-hours-closed { color: rgba(184,30,30,0.6); font-weight: 400; }
    .cnt-hours-badge {
      display: inline-flex; align-items: center; gap: 5px;
      background: rgba(37,211,102,0.1); border: 1px solid rgba(37,211,102,0.25);
      color: #22a056; font-size: 0.58rem; letter-spacing: 0.12em; text-transform: uppercase;
      padding: 3px 9px; font-weight: 600; margin-top: 12px;
    }
    .cnt-hours-badge::before { content: ''; width: 6px; height: 6px; border-radius: 50%; background: #22a056; flex-shrink: 0; animation: pulse-green 1.8s ease-in-out infinite; }
    @keyframes pulse-green { 0%,100% { opacity:1; } 50% { opacity:0.4; } }

    /* ── Social Profiles ─────────────────────────── */
    .cnt-social-title {
      font-size: 0.62rem; letter-spacing: 0.2em; text-transform: uppercase;
      color: var(--rg-gold); font-weight: 600; margin-bottom: 14px;
      display: flex; align-items: center; gap: 8px;
    }
    .cnt-social-title::before { content: ''; display: block; width: 18px; height: 1px; background: var(--rg-gold); }
    .cnt-socials { display: flex; flex-direction: column; gap: 10px; }
    .cnt-social-card {
      display: flex; align-items: center; gap: 14px;
      border: 1px solid var(--rg-gold-border); background: var(--rg-white);
      padding: 13px 16px; text-decoration: none;
      transition: border-color 0.3s, box-shadow 0.3s, transform 0.25s;
      position: relative; overflow: hidden;
    }
    .cnt-social-card::after {
      content: '↗'; position: absolute; right: 16px;
      font-size: 0.8rem; color: var(--rg-gold); opacity: 0;
      transform: translateX(-6px); transition: opacity 0.3s, transform 0.3s;
    }
    .cnt-social-card:hover { border-color: var(--rg-gold); box-shadow: 0 4px 16px rgba(184,136,30,0.1); transform: translateX(4px); }
    .cnt-social-card:hover::after { opacity: 1; transform: translateX(0); }
    .cnt-social-icon {
      width: 40px; height: 40px; border-radius: 50%; flex-shrink: 0;
      display: flex; align-items: center; justify-content: center;
    }
    .cnt-social-name { font-size: 0.82rem; font-weight: 600; color: var(--rg-dark); letter-spacing: 0.02em; }
    .cnt-social-handle { font-size: 0.7rem; color: var(--rg-muted); font-weight: 300; margin-top: 1px; }

    /* ── Right Column: Form ──────────────────────── */
    .cnt-form-wrap {
      background: var(--rg-white);
      border: 1px solid var(--rg-gold-border);
      padding: 40px;
      position: relative;
    }
    .cnt-form-wrap::before {
      content: ''; position: absolute;
      top: 0; left: 0; right: 0;
      height: 3px;
      background: linear-gradient(to right, var(--rg-gold), #D4A83A, transparent);
    }
    .cnt-form-heading {
      font-family: 'Cormorant Garamond', serif;
      font-size: 1.7rem; font-weight: 300; color: var(--rg-dark); margin-bottom: 6px;
    }
    .cnt-form-heading em { font-style: italic; color: var(--rg-gold); }
    .cnt-form-sub { font-size: 0.8rem; color: var(--rg-muted); font-weight: 300; line-height: 1.65; margin-bottom: 28px; }
    .cnt-form-divider { width: 100%; height: 1px; background: var(--rg-gold-border); margin-bottom: 28px; }

    /* WhatsApp badge above form */
    .cnt-wa-badge {
      display: inline-flex; align-items: center; gap: 8px;
      background: rgba(37,211,102,0.1); border: 1px solid rgba(37,211,102,0.3);
      color: #128C7E; font-size: 0.68rem; letter-spacing: 0.12em; text-transform: uppercase;
      padding: 6px 12px; font-weight: 600; margin-bottom: 20px;
    }
    .cnt-wa-badge svg { flex-shrink: 0; }

    .cnt-form { display: flex; flex-direction: column; gap: 14px; }
    .cnt-field-wrap { display: flex; flex-direction: column; gap: 5px; }
    .cnt-label { font-size: 0.6rem; letter-spacing: 0.16em; text-transform: uppercase; color: var(--rg-gold); font-weight: 600; }
    .cnt-field {
      background: var(--rg-bg); border: 1px solid var(--rg-gold-border);
      padding: 12px 16px; color: var(--rg-text);
      font-family: 'Outfit', sans-serif; font-size: 0.88rem;
      outline: none; width: 100%;
      transition: border-color 0.3s, background 0.3s, box-shadow 0.3s;
    }
    .cnt-field:focus { border-color: var(--rg-gold); background: var(--rg-white); box-shadow: 0 0 0 3px rgba(184,136,30,0.08); }
    .cnt-field::placeholder { color: rgba(120,112,96,0.35); }
    textarea.cnt-field { resize: vertical; min-height: 120px; }
    select.cnt-field { appearance: none; background-image: url("data:image/svg+xml,%3Csvg width='10' height='6' viewBox='0 0 10 6' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M0 0l5 6 5-6z' fill='%23B8881E'/%3E%3C/svg%3E"); background-repeat: no-repeat; background-position: right 14px center; padding-right: 36px; cursor: pointer; }

    /* Submit */
    .cnt-submit-row { display: flex; align-items: center; gap: 20px; margin-top: 6px; }
    .cnt-submit-btn {
      flex-shrink: 0; background: #25D366; color: #fff; border: none;
      padding: 15px 36px; font-family: 'Outfit', sans-serif;
      font-size: 0.82rem; font-weight: 600; letter-spacing: 0.12em; text-transform: uppercase;
      cursor: pointer; position: relative; overflow: hidden;
      display: flex; align-items: center; gap: 9px;
      transition: background 0.3s, transform 0.2s, box-shadow 0.3s;
    }
    .cnt-submit-btn:hover { background: #128C7E; transform: translateY(-2px); box-shadow: 0 6px 24px rgba(37,211,102,0.35); }
    .cnt-submit-btn:active { transform: translateY(0); }
    .cnt-submit-note { font-size: 0.7rem; color: var(--rg-muted); font-weight: 300; line-height: 1.55; }
    .cnt-submit-note svg { display: inline; vertical-align: middle; margin-right: 4px; }

    /* ── Map Section ─────────────────────────────── */
    .cnt-map-section { padding: 0 clamp(20px,6vw,80px) 80px; max-width: 1280px; margin: 0 auto; }
    .cnt-map-header { margin-bottom: 24px; }
    .cnt-map-eyebrow {
      display: flex; align-items: center; gap: 10px;
      color: var(--rg-gold); font-size: 0.65rem; letter-spacing: 0.24em;
      text-transform: uppercase; font-weight: 600; margin-bottom: 10px;
    }
    .cnt-map-eyebrow::before { content: ''; display: block; width: 24px; height: 1.5px; background: var(--rg-gold); }
    .cnt-map-title {
      font-family: 'Cormorant Garamond', serif;
      font-size: clamp(1.5rem,3vw,2.2rem); font-weight: 300; color: var(--rg-dark);
    }
    .cnt-map-title em { font-style: italic; color: var(--rg-gold); }
    .cnt-map-frame {
      width: 100%; height: 380px; border: 1px solid var(--rg-gold-border); overflow: hidden;
      position: relative;
    }
    .cnt-map-frame iframe { display: block; width: 100%; height: 100%; border: 0; filter: saturate(0.7) brightness(1.03); }
    .cnt-map-frame:hover iframe { filter: saturate(1) brightness(1); }

    /* ── Reveal animations ───────────────────────── */
    .rg-reveal { opacity: 1; transform: translateY(0); transition: opacity 0.65s ease, transform 0.65s ease; }
    .rg-reveal.rg-anim { opacity: 0; transform: translateY(24px); }
    .rg-reveal.rg-anim.rg-vis { opacity: 1; transform: translateY(0); }
    .rg-d1 { transition-delay: 0.08s; }
    .rg-d2 { transition-delay: 0.16s; }
    .rg-d3 { transition-delay: 0.24s; }
    .rg-d4 { transition-delay: 0.32s; }

    /* ── Responsive ──────────────────────────────── */
    @media (max-width: 960px) {
      .cnt-grid { grid-template-columns: 1fr; gap: 48px; }
    }
    @media (max-width: 640px) {
      :root { --rg-nav-h: 64px; }
      .cnt-form-wrap { padding: 24px 18px; }
      .cnt-submit-row { flex-direction: column; align-items: flex-start; gap: 12px; }
      .cnt-submit-btn { width: 100%; justify-content: center; }
      .cnt-map-frame { height: 260px; }
    }
  </style>
</head>
<body>

<?php include 'header.php'; ?>

<!-- ══ HERO ══════════════════════════════════════ -->
<section class="cnt-hero">
  <div class="cnt-hero-pattern"></div>
  <div class="cnt-hero-glow"></div>
  <div class="cnt-hero-content">
    <div class="cnt-eyebrow">Get in Touch</div>
    <h1 class="cnt-hero-title">Let's Talk <em>Precision</em></h1>
    <p class="cnt-hero-sub">Reach out to Bangladesh's authorised Fischer Measurement Technologies representative. We respond within one business hour.</p>
  </div>
</section>

<!-- ══ BODY ══════════════════════════════════════ -->
<div class="cnt-body">
  <div class="cnt-grid">

    <!-- ── LEFT ── -->
    <div>
      <div class="cnt-left-eyebrow rg-reveal">Our Information</div>
      <h2 class="cnt-left-title rg-reveal">Find Us, <em>Reach</em> Us</h2>
      <div class="rg-gold-rule rg-reveal"></div>
      <p class="cnt-left-desc rg-reveal">Whether you need a product inquiry, calibration support, or a technical consultation — our team in Chittagong is always ready to assist with precision and care.</p>

      <!-- Contact Cards -->
      <div class="cnt-cards">
        <div class="cnt-card rg-reveal">
          <div class="cnt-card-icon">
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg>
          </div>
          <div>
            <div class="cnt-card-label">Our Address</div>
            <div class="cnt-card-val">Hazari Market (2nd Floor), Hazari Lane<br>Chittagong, Bangladesh — 4000</div>
          </div>
        </div>
        <div class="cnt-card rg-reveal rg-d1">
          <div class="cnt-card-icon">
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07A19.5 19.5 0 013.07 9.8a19.79 19.79 0 01-3.07-8.67A2 2 0 012 .91h3a2 2 0 012 1.72c.127.96.361 1.903.7 2.81a2 2 0 01-.45 2.11L6.09 8.91a16 16 0 006 6l1.27-1.27a2 2 0 012.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0122 16.92z"/></svg>
          </div>
          <div>
            <div class="cnt-card-label">Phone</div>
            <div class="cnt-card-val"><a href="tel:+8801716469866">+880 1716-469866</a></div>
          </div>
        </div>
        <div class="cnt-card rg-reveal rg-d2">
          <div class="cnt-card-icon">
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
          </div>
          <div>
            <div class="cnt-card-label">Email</div>
            <div class="cnt-card-val"><a href="mailto:shimudeb@gmail.com">shimudeb@gmail.com</a></div>
          </div>
        </div>
        <div class="cnt-card rg-reveal rg-d3">
          <div class="cnt-card-icon">
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="7" width="20" height="14" rx="2"/><path d="M16 7V5a2 2 0 00-2-2h-4a2 2 0 00-2 2v2"/><line x1="12" y1="12" x2="12" y2="16"/><line x1="10" y1="14" x2="14" y2="14"/></svg>
          </div>
          <div>
            <div class="cnt-card-label">Technology Partner</div>
            <div class="cnt-card-val">Fischer Measurement Technologies, Germany<br><a href="https://www.helmut-fischer.com/" target="_blank" rel="noopener">helmut-fischer.com ↗</a></div>
          </div>
        </div>
      </div>

      <!-- Business Hours -->
      <div class="cnt-hours rg-reveal">
        <div class="cnt-hours-title">Business Hours</div>
        <div class="cnt-hours-row"><span class="cnt-hours-day">Saturday – Thursday</span><span class="cnt-hours-time">10:00 AM – 11:00 PM</span></div>
        <div class="cnt-hours-row"><span class="cnt-hours-day">Friday</span><span class="cnt-hours-closed">Closed</span></div>
        <div class="cnt-hours-badge">Currently Open — We reply instantly on WhatsApp</div>
      </div>

      <!-- Social Profiles -->
      <div class="rg-reveal">
        <div class="cnt-social-title">Follow &amp; Connect</div>
        <div class="cnt-socials">

          <a href="https://www.facebook.com/rajasiwari" target="_blank" rel="noopener" class="cnt-social-card">
            <div class="cnt-social-icon" style="background:#1877F2;">
              <svg width="18" height="18" viewBox="0 0 24 24" fill="white"><path d="M24 12.073C24 5.405 18.627 0 12 0S0 5.405 0 12.073C0 18.1 4.388 23.094 10.125 24v-8.437H7.078v-3.49h3.047V9.41c0-3.025 1.792-4.697 4.533-4.697 1.312 0 2.686.236 2.686.236v2.97h-1.513c-1.491 0-1.956.93-1.956 1.886v2.267h3.328l-.532 3.49h-2.796V24C19.612 23.094 24 18.1 24 12.073z"/></svg>
            </div>
            <div>
              <div class="cnt-social-name">Facebook</div>
              <div class="cnt-social-handle">@rajasiwari</div>
            </div>
          </a>

          <a href="https://wa.me/8801716469866?text=Hello%2C%20I%20would%20like%20to%20know%20more%20about%20your%20products." target="_blank" rel="noopener" class="cnt-social-card">
            <div class="cnt-social-icon" style="background:#25D366;">
              <svg width="18" height="18" viewBox="0 0 24 24" fill="white"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
            </div>
            <div>
              <div class="cnt-social-name">WhatsApp</div>
              <div class="cnt-social-handle">+880 1716-469866</div>
            </div>
          </a>

          <a href="mailto:shimudeb@gmail.com" class="cnt-social-card">
            <div class="cnt-social-icon" style="background:linear-gradient(135deg,#EA4335,#FBBC04);">
              <svg width="18" height="18" viewBox="0 0 24 24" fill="white"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
            </div>
            <div>
              <div class="cnt-social-name">Email</div>
              <div class="cnt-social-handle">shimudeb@gmail.com</div>
            </div>
          </a>

          <a href="https://www.helmut-fischer.com/" target="_blank" rel="noopener" class="cnt-social-card">
            <div class="cnt-social-icon" style="background:var(--rg-dark);">
              <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#D4A83A" stroke-width="1.8" stroke-linecap="round"><circle cx="12" cy="12" r="10"/><line x1="2" y1="12" x2="22" y2="12"/><path d="M12 2a15.3 15.3 0 010 20M12 2a15.3 15.3 0 000 20"/></svg>
            </div>
            <div>
              <div class="cnt-social-name">Fischer Germany</div>
              <div class="cnt-social-handle">helmut-fischer.com</div>
            </div>
          </a>

        </div>
      </div>
    </div>

    <!-- ── RIGHT: Form ── -->
    <div>
      <div class="cnt-form-wrap rg-reveal rg-d1" id="contact-form">

        <div class="cnt-form-heading">Send an <em>Inquiry</em></div>

        <div class="cnt-wa-badge">
          <svg width="14" height="14" viewBox="0 0 24 24" fill="#25D366"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
          Message goes directly to WhatsApp
        </div>

        <p class="cnt-form-sub">Fill in the form and your inquiry will open in WhatsApp — ready to send instantly. Fields marked * are required.</p>
        <div class="cnt-form-divider"></div>

        <form class="cnt-form" id="wa-inquiry-form" novalidate>

          <div class="cnt-field-wrap">
            <label class="cnt-label" for="cnt_name">Full Name *</label>
            <input class="cnt-field" type="text" id="cnt_name" name="name" placeholder="Your name" required>
          </div>

          <div class="cnt-field-wrap">
            <label class="cnt-label" for="cnt_phone">Phone Number *</label>
            <input class="cnt-field" type="tel" id="cnt_phone" name="phone" placeholder="+880 ..." required>
          </div>

          <div class="cnt-field-wrap">
            <label class="cnt-label" for="cnt_product">Product / Service of Interest</label>
            <select class="cnt-field" id="cnt_product" name="product">
              <option value="">Select a product category (optional)</option>
              <option value="Gold &amp; Jewellery Testing Machine">Gold &amp; Jewellery Testing Machine</option>
              <option value="Coating Thickness – DFT">Coating Thickness – DFT</option>
              <option value="Coating Thickness – EDXRF">Coating Thickness – EDXRF</option>
              <option value="Coating Thickness – Coulometric">Coating Thickness – Coulometric</option>
              <option value="Material Analysis">Material Analysis</option>
              <option value="Micro Hardness">Micro Hardness</option>
              <option value="Porosity Testing">Porosity Testing</option>
              <option value="Calibration &amp; After-Sales Service">Calibration &amp; After-Sales Service</option>
              <option value="General Inquiry">General Inquiry</option>
            </select>
          </div>

          <div class="cnt-field-wrap">
            <label class="cnt-label" for="cnt_message">Your Message *</label>
            <textarea class="cnt-field" id="cnt_message" name="message" placeholder="Describe your requirements, lab setup, or questions..." required></textarea>
          </div>

          <div class="cnt-submit-row">
            <button type="submit" class="cnt-submit-btn">
              <svg width="16" height="16" viewBox="0 0 24 24" fill="white"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
              Send via WhatsApp
            </button>
            <p class="cnt-submit-note">
              <svg width="11" height="11" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
              Opens WhatsApp with your message pre-filled.
            </p>
          </div>

        </form>
      </div><!-- /form-wrap -->

      <!-- Quick contact strip -->
      <div style="margin-top:16px;display:flex;gap:10px;" class="rg-reveal rg-d2">
        <a href="tel:+8801716469866" style="flex:1;display:flex;align-items:center;justify-content:center;gap:8px;padding:14px 12px;background:var(--rg-dark);color:#FDFAF4;font-size:0.76rem;font-weight:600;letter-spacing:0.1em;text-transform:uppercase;transition:background 0.3s;" onmouseover="this.style.background='var(--rg-gold)'" onmouseout="this.style.background='var(--rg-dark)'">
          <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"><path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07A19.5 19.5 0 013.07 9.8a19.79 19.79 0 01-3.07-8.67A2 2 0 012 .91h3a2 2 0 012 1.72c.127.96.361 1.903.7 2.81a2 2 0 01-.45 2.11L6.09 8.91a16 16 0 006 6l1.27-1.27a2 2 0 012.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0122 16.92z"/></svg>
          Call Now
        </a>
        <a href="https://wa.me/8801716469866?text=Hello%2C+I+would+like+to+know+more+about+your+products." target="_blank" rel="noopener" style="flex:1;display:flex;align-items:center;justify-content:center;gap:8px;padding:14px 12px;background:#25D366;color:#fff;font-size:0.76rem;font-weight:600;letter-spacing:0.1em;text-transform:uppercase;transition:background 0.3s;" onmouseover="this.style.background='#128C7E'" onmouseout="this.style.background='#25D366'">
          <svg width="14" height="14" viewBox="0 0 24 24" fill="white"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
          WhatsApp
        </a>
      </div>

    </div><!-- /right -->
  </div><!-- /grid -->
</div><!-- /body -->

<!-- ══ MAP ════════════════════════════════════════ -->
<div class="cnt-map-section">
  <div class="cnt-map-header rg-reveal">
    <div class="cnt-map-eyebrow">Find Us</div>
    <h2 class="cnt-map-title">Our <em>Location</em> in Chittagong</h2>
  </div>
  <div class="cnt-map-frame rg-reveal rg-d1">
    <iframe
      src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14761.482892067597!2d91.81729316711423!3d22.33962664130348!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30ad2759615a1a91%3A0xc536ffd9b88afada!2sRajaiswari%20Gold%20Testing%20Center!5e0!3m2!1sen!2sbd!4v1773204381328!5m2!1sen!2sbd"
      allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"
      title="Raj Aiswari — Chittagong Location">
    </iframe>
  </div>
</div>

<?php include 'footer.php'; ?>

<script>
(function () {

  /* ── WhatsApp form handler ── */
  var waForm = document.getElementById('wa-inquiry-form');
  if (waForm) {
    waForm.addEventListener('submit', function (e) {
      e.preventDefault();

      var name    = document.getElementById('cnt_name').value.trim();
      var phone   = document.getElementById('cnt_phone').value.trim();
      var product = document.getElementById('cnt_product').value.trim();
      var message = document.getElementById('cnt_message').value.trim();

      /* Basic validation */
      if (!name || !phone || !message) {
        alert('Please fill in your Name, Phone Number, and Message.');
        return;
      }

      /* Build the pre-filled WhatsApp message */
      var text = 'Hello, I would like to make an inquiry.\n\n'
               + '*Name:* ' + name + '\n'
               + '*Phone:* ' + phone + '\n';

      if (product) {
        text += '*Product / Service:* ' + product + '\n';
      }

      text += '\n*Message:*\n' + message;

      /* Open WhatsApp */
      var waUrl = 'https://wa.me/8801716469866?text=' + encodeURIComponent(text);
      window.open(waUrl, '_blank', 'noopener,noreferrer');
    });
  }

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