<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Software Services – Raj Aiswari | Gold Business Software Bangladesh</title>
<meta name="description" content="Simple, reliable software for gold businesses. Manage gold trading, jewellery shops, and testing labs with FineBullion Desk, JewelryKhata, and TunchMark — built by Raj Aiswari, Bangladesh.">
<link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,600;1,300;1,400&family=Outfit:wght@300;400;500;600&display=swap" rel="stylesheet">
<style>
:root{
  --sw-gold:#B8881E;--sw-gold-l:#D4A83A;--sw-gold-p:#F5EDD6;
  --sw-dark:#1C1A16;--sw-dark2:#252118;--sw-text:#2E2A22;
  --sw-muted:#7A7060;--sw-bg:#FDFAF4;--sw-bg2:#F7F2E8;
  --sw-white:#fff;
  --sw-tunch:#1a6b3a;--sw-tunch-l:#3DAF72;--sw-tunch-bg:#0d1f16;
  --sw-jwl:#7c3a00;--sw-jwl-l:#D4903A;--sw-jwl-bg:#2a1a08;
  --sw-brand:#6C3FA0;--sw-brand-l:#9B6FD0;--sw-brand-bg:#1a1230;
}
*{margin:0;padding:0;box-sizing:border-box;}
body{font-family:'Outfit',sans-serif;background:var(--sw-bg);color:var(--sw-text);line-height:1.5;-webkit-font-smoothing:antialiased;}
h1,h2,h3,h4{font-family:'Cormorant Garamond',serif;}
a{text-decoration:none;color:inherit;}
img{max-width:100%;display:block;}

/* ── Hero ─────────────────────────────────── */
.sw-hero{min-height:78vh;position:relative;display:flex;align-items:center;justify-content:center;text-align:center;overflow:hidden;padding:100px 24px 70px;background:var(--sw-dark);}
.sw-hero-grid{position:absolute;inset:0;z-index:1;background-image:linear-gradient(rgba(184,136,30,.04) 1px,transparent 1px),linear-gradient(90deg,rgba(184,136,30,.04) 1px,transparent 1px);background-size:60px 60px;}
.sw-hero-glow{position:absolute;inset:0;z-index:2;background:radial-gradient(ellipse 70% 50% at 50% 40%,rgba(184,136,30,.14) 0%,transparent 70%);}
.sw-hero-inner{position:relative;z-index:3;max-width:720px;}
.sw-hero-badge{display:inline-flex;align-items:center;gap:8px;font-size:.62rem;font-weight:600;letter-spacing:.2em;text-transform:uppercase;color:var(--sw-gold-l);padding:6px 16px;border:1px solid rgba(184,136,30,.28);border-radius:100px;background:rgba(184,136,30,.09);margin-bottom:24px;}
.sw-hero-title{font-size:clamp(2.2rem,6.5vw,4rem);font-weight:300;line-height:1.12;color:var(--sw-white);margin-bottom:20px;letter-spacing:-.01em;}
.sw-hero-title em{font-style:italic;color:var(--sw-gold-l);}
.sw-hero-sub{color:rgba(253,250,244,.5);font-size:.98rem;font-weight:300;line-height:1.8;max-width:540px;margin:0 auto 36px;}
.sw-hero-actions{display:flex;gap:14px;justify-content:center;flex-wrap:wrap;margin-bottom:48px;}
.sw-hero-metrics{display:flex;align-items:center;justify-content:center;gap:32px;flex-wrap:wrap;}
.sw-metric{text-align:center;}
.sw-metric strong{display:block;font-size:2rem;font-weight:600;color:var(--sw-white);line-height:1;}
.sw-metric span{display:block;font-size:.65rem;letter-spacing:.1em;text-transform:uppercase;color:rgba(253,250,244,.4);margin-top:4px;}
.sw-metric-divider{width:1px;height:40px;background:rgba(253,250,244,.12);}

/* ── Buttons ──────────────────────────────── */
.sw-btn-solid{display:inline-flex;align-items:center;gap:8px;background:var(--sw-gold);color:#fff;padding:14px 32px;font-size:.78rem;font-weight:600;letter-spacing:.1em;text-transform:uppercase;border:none;border-radius:3px;cursor:pointer;transition:all .3s;}
.sw-btn-solid:hover{background:var(--sw-gold-l);transform:translateY(-2px);box-shadow:0 8px 28px rgba(184,136,30,.35);}
.sw-btn-whatsapp{background:#25D366;}
.sw-btn-whatsapp:hover{background:#128C7E;box-shadow:0 8px 28px rgba(37,211,102,.35);}
.sw-btn-brand{background:var(--sw-brand);}
.sw-btn-brand:hover{background:var(--sw-brand-l);box-shadow:0 8px 28px rgba(108,63,160,.35);}
.sw-btn-outline{display:inline-flex;align-items:center;padding:14px 32px;background:transparent;color:rgba(253,250,244,.55);font-size:.78rem;font-weight:500;letter-spacing:.06em;border:1.5px solid rgba(253,250,244,.14);border-radius:3px;cursor:pointer;transition:all .3s;}
.sw-btn-outline:hover{border-color:var(--sw-gold);color:var(--sw-gold-l);}
.sw-btn-outline-light{display:inline-flex;align-items:center;padding:14px 32px;background:transparent;color:rgba(253,250,244,.72);font-size:.78rem;font-weight:500;letter-spacing:.06em;border:1.5px solid rgba(253,250,244,.22);border-radius:3px;cursor:pointer;transition:all .3s;}
.sw-btn-outline-light:hover{border-color:var(--sw-gold-l);color:var(--sw-gold-l);}

/* ── Intro ────────────────────────────────── */
.sw-intro{padding:76px clamp(20px,6vw,80px) 40px;background:var(--sw-bg);}
.sw-intro-inner{max-width:760px;margin:0 auto;text-align:center;}
.sw-eyebrow{display:inline-flex;align-items:center;gap:8px;font-size:.62rem;font-weight:600;letter-spacing:.14em;text-transform:uppercase;color:var(--sw-gold);margin-bottom:10px;}
.sw-eyebrow::before{content:'';width:16px;height:1px;background:var(--sw-gold);}
.sw-intro-title{font-size:clamp(1.9rem,4.2vw,2.7rem);font-weight:300;color:var(--sw-dark);line-height:1.15;margin-bottom:14px;}
.sw-intro-title em{font-style:italic;color:var(--sw-gold);}
.sw-intro-text{color:var(--sw-muted);font-size:.96rem;font-weight:300;line-height:1.8;}

/* ── Product Section ──────────────────────── */
.sw-product-section{padding:80px 0;background:var(--sw-bg);}
.sw-section-alt{background:var(--sw-bg2);}
.sw-prod-inner{max-width:1200px;margin:0 auto;padding:0 clamp(24px,5vw,60px);}
.sw-prod-header{display:flex;align-items:flex-start;gap:16px;margin-bottom:12px;}
.sw-prod-tag{display:inline-block;font-size:.6rem;font-weight:700;letter-spacing:.16em;text-transform:uppercase;padding:5px 13px;border-radius:20px;background:var(--sw-gold-p);color:var(--sw-gold);border:1px solid rgba(184,136,30,.2);margin-bottom:12px;}
.sw-tag-machine{background:var(--sw-gold-p);color:var(--sw-gold);border-color:rgba(184,136,30,.2);}
.sw-tag-tunch{background:#e8f5ee;color:var(--sw-tunch);border-color:rgba(26,107,58,.2);}
.sw-tag-jwl{background:#fdf0e6;color:var(--sw-jwl);border-color:rgba(124,58,0,.2);}
.sw-tag-brand{background:#ede5f7;color:var(--sw-brand);border-color:rgba(108,63,160,.2);}
.sw-prod-title{font-size:clamp(1.9rem,4.2vw,2.7rem);font-weight:600;color:var(--sw-dark);line-height:1.15;}
.sw-prod-title em{font-style:italic;color:var(--sw-gold);}
.sw-prod-subtitle{color:var(--sw-muted);font-size:.92rem;font-weight:300;line-height:1.75;max-width:640px;margin-top:10px;}

.sw-prod-grid{display:grid;grid-template-columns:1fr 1fr;gap:52px;align-items:start;margin-top:44px;}
.sw-prod-grid-reverse .sw-prod-visual{order:2;}
.sw-prod-grid-reverse .sw-prod-content{order:1;}

.sw-prod-features{display:flex;flex-direction:column;gap:16px;margin-bottom:32px;}
.sw-feat{display:flex;gap:14px;align-items:flex-start;}
.sw-feat-icon{width:38px;height:38px;border-radius:8px;flex-shrink:0;display:flex;align-items:center;justify-content:center;background:var(--sw-gold-p);border:1px solid rgba(184,136,30,.15);color:var(--sw-gold);}
.sw-feat-tunch .sw-feat-icon{background:#e8f5ee;border-color:rgba(26,107,58,.15);color:var(--sw-tunch);}
.sw-feat-jwl .sw-feat-icon{background:#fdf0e6;border-color:rgba(124,58,0,.15);color:var(--sw-jwl);}
.sw-feat div:last-child strong{font-size:.85rem;color:var(--sw-text);display:block;margin-bottom:3px;font-weight:600;}
.sw-feat div:last-child span{font-size:.8rem;color:var(--sw-muted);font-weight:300;line-height:1.55;display:block;}

.sw-cta-link{display:inline-flex;align-items:center;gap:8px;font-size:.8rem;font-weight:600;letter-spacing:.06em;text-transform:uppercase;color:var(--sw-gold);padding:14px 0;border-bottom:1.5px solid var(--sw-gold);transition:gap .2s,color .2s,border-color .2s;}
.sw-cta-link:hover{gap:12px;color:var(--sw-gold-l);border-color:var(--sw-gold-l);}
.sw-cta-tunch{color:var(--sw-tunch);border-color:var(--sw-tunch);}
.sw-cta-tunch:hover{color:var(--sw-tunch-l);border-color:var(--sw-tunch-l);}
.sw-cta-jwl{color:var(--sw-jwl);border-color:var(--sw-jwl);}
.sw-cta-jwl:hover{color:var(--sw-jwl-l);border-color:var(--sw-jwl-l);}

/* ── Real app-screenshot style preview (dashboard / billing UI) ── */
.sw-preview{background:#fff;border-radius:10px;overflow:hidden;border:1px solid rgba(0,0,0,.08);box-shadow:0 20px 60px rgba(28,26,22,.16);}
.sw-app{display:grid;grid-template-columns:120px 1fr;font-size:9px;}

/* app sidebar (mini) */
.sw-app-side{background:#1e2433;padding:12px 8px;display:flex;flex-direction:column;gap:2px;}
.sw-app-brand{display:flex;align-items:center;gap:6px;color:#fff;font-weight:700;font-size:9px;padding:4px 4px 10px;letter-spacing:.02em;}
.sw-app-brand .mark{width:16px;height:16px;border-radius:4px;background:var(--sw-gold);flex-shrink:0;display:flex;align-items:center;justify-content:center;color:#1e2433;font-size:9px;font-weight:800;}
.sw-app-nav-item{display:flex;align-items:center;gap:6px;padding:6px 7px;border-radius:5px;color:rgba(255,255,255,.5);font-size:8.5px;}
.sw-app-nav-item .ic{width:10px;height:10px;border-radius:2px;background:rgba(255,255,255,.18);flex-shrink:0;}
.sw-app-nav-item.on{background:rgba(184,136,30,.18);color:var(--sw-gold-l);}
.sw-app-nav-item.on .ic{background:var(--sw-gold-l);}

/* app main */
.sw-app-main{background:#f4f5f7;padding:12px;}
.sw-app-top{display:flex;align-items:center;justify-content:space-between;margin-bottom:10px;}
.sw-app-top h5{font-size:11px;font-weight:700;color:#1c1a16;margin:0;}
.sw-app-top span{font-size:7.5px;color:#8a8a8a;display:block;margin-top:1px;}
.sw-app-pill{font-size:7px;font-weight:600;padding:3px 7px;border-radius:20px;background:#e7e9ee;color:#666;}

.sw-app-stats{display:grid;grid-template-columns:repeat(4,1fr);gap:6px;margin-bottom:8px;}
.sw-app-stat{background:#fff;border:1px solid #e6e6e6;border-radius:6px;padding:7px 8px;border-top:2px solid var(--sw-gold);}
.sw-app-stat.c-green{border-top-color:#1a6b3a;}
.sw-app-stat.c-blue{border-top-color:#3a6ea8;}
.sw-app-stat.c-purple{border-top-color:#6C3FA0;}
.sw-app-stat b{display:block;font-size:11px;color:#1c1a16;line-height:1.2;}
.sw-app-stat span{display:block;font-size:6.5px;color:#8a8a8a;text-transform:uppercase;letter-spacing:.03em;margin-top:2px;}

.sw-app-panel{background:#fff;border:1px solid #e6e6e6;border-radius:6px;overflow:hidden;margin-bottom:6px;}
.sw-app-panel-head{padding:6px 9px;background:#f9f6ee;border-bottom:1px solid #eee;font-size:7.5px;font-weight:700;color:#7A6A2E;display:flex;align-items:center;gap:5px;}
.sw-app-row{display:flex;align-items:center;justify-content:space-between;padding:6px 9px;border-bottom:1px solid #f0f0f0;font-size:8px;color:#333;}
.sw-app-row:last-child{border-bottom:none;}
.sw-app-tag{font-size:6.5px;font-weight:700;padding:2px 6px;border-radius:10px;}
.sw-app-tag.paid{background:#e8f5ee;color:#1a6b3a;}
.sw-app-tag.pending{background:#fdf0e0;color:#a5690b;}
.sw-app-tag.unpaid{background:#fdeceb;color:#c0392b;}
.sw-app-bars{display:flex;align-items:flex-end;gap:4px;height:38px;padding:0 2px;}
.sw-app-bar{flex:1;border-radius:2px 2px 0 0;background:linear-gradient(to top,var(--sw-gold),rgba(184,136,30,.35));}

/* Billing form style preview */
.sw-app-form-field{margin-bottom:6px;}
.sw-app-form-field label{display:block;font-size:6.5px;font-weight:700;letter-spacing:.03em;text-transform:uppercase;color:#8a8a8a;margin-bottom:2px;}
.sw-app-form-field .box{border:1px solid #ddd;border-radius:4px;padding:5px 7px;font-size:8px;color:#aaa;background:#fff;}
.sw-app-form-row{display:grid;grid-template-columns:1fr 1fr;gap:8px;}
.sw-app-form-row3{display:grid;grid-template-columns:1fr 1fr 1fr;gap:8px;}
.sw-app-table-mini{border:1px solid #eee;border-radius:5px;overflow:hidden;margin-top:2px;}
.sw-app-table-mini .thd{display:grid;grid-template-columns:2fr 1.4fr 1fr 1fr;background:#f9f6ee;padding:5px 8px;font-size:6px;font-weight:700;color:#8a7a4a;text-transform:uppercase;}
.sw-app-table-mini .trow{display:grid;grid-template-columns:2fr 1.4fr 1fr 1fr;padding:6px 8px;font-size:7.5px;color:#333;border-top:1px solid #f2f2f2;align-items:center;}
.sw-app-total{display:flex;justify-content:flex-end;align-items:center;gap:6px;padding:6px 2px 2px;font-size:7.5px;color:#8a8a8a;}
.sw-app-total b{font-size:11px;color:#1a6b3a;}
.sw-app-btn{display:inline-block;font-size:7.5px;font-weight:700;padding:5px 10px;border-radius:4px;background:var(--sw-gold);color:#fff;}
.sw-app-btn.outline{background:#fff;border:1px solid #ddd;color:#555;}

/* Fade-in on reveal — one orchestrated entrance per section */
.sw-reveal{opacity:0;transform:translateY(20px);transition:opacity .7s ease, transform .7s ease;}
.sw-reveal.sw-in{opacity:1;transform:translateY(0);}

/* ── Brand / Website section ─────────────────────── */
.sw-brand-section{padding:80px 0;}
.sw-brand-inner{max-width:1200px;margin:0 auto;padding:0 clamp(24px,5vw,60px);}
.sw-brand-header{text-align:center;max-width:640px;margin:0 auto 44px;}
.sw-brand-features{display:grid;grid-template-columns:repeat(3,1fr);gap:20px;margin-bottom:40px;}
.sw-brand-feat{background:var(--sw-white);border:1px solid rgba(108,63,160,.16);border-radius:8px;padding:24px 22px;transition:box-shadow .3s, transform .3s, border-color .3s;}
.sw-brand-feat:hover{box-shadow:0 12px 32px rgba(108,63,160,.1);transform:translateY(-4px);border-color:rgba(108,63,160,.35);}
.sw-brand-feat-num{font-family:'Cormorant Garamond',serif;font-size:1.8rem;font-weight:300;color:var(--sw-brand);opacity:.3;margin-bottom:8px;}
.sw-brand-feat h4{font-size:1.05rem;font-weight:600;color:var(--sw-dark);margin-bottom:6px;}
.sw-brand-feat p{font-size:.82rem;color:var(--sw-muted);font-weight:300;line-height:1.65;}
.sw-brand-cta{text-align:center;}

/* ── Final CTA ─────────────────────────────────── */
.sw-final-cta{background:var(--sw-dark);padding:90px 24px;position:relative;overflow:hidden;text-align:center;}
.sw-final-inner{position:relative;z-index:2;max-width:640px;margin:0 auto;}
.sw-final-pattern{position:absolute;inset:0;background:radial-gradient(ellipse 60% 50% at 50% 30%,rgba(184,136,30,.14) 0%,transparent 70%);z-index:1;}
.sw-final-eyebrow{display:block;font-size:.62rem;font-weight:600;letter-spacing:.18em;text-transform:uppercase;color:var(--sw-gold-l);margin-bottom:14px;}
.sw-final-title{font-size:clamp(1.9rem,4.5vw,2.8rem);font-weight:300;color:#fff;margin-bottom:16px;}
.sw-final-title em{font-style:italic;color:var(--sw-gold-l);}
.sw-final-text{color:rgba(253,250,244,.5);font-size:.94rem;font-weight:300;line-height:1.8;margin-bottom:36px;}
.sw-final-btns{display:flex;gap:14px;justify-content:center;flex-wrap:wrap;}

/* ── Responsive ───────────────────────────────── */
@media (max-width:900px){
  .sw-prod-grid{grid-template-columns:1fr;gap:32px;}
  .sw-prod-grid-reverse .sw-prod-visual,.sw-prod-grid-reverse .sw-prod-content{order:initial;}
  .sw-brand-features{grid-template-columns:1fr 1fr;}
}
@media (max-width:560px){
  .sw-hero{padding:80px 20px 56px;}
  .sw-brand-features{grid-template-columns:1fr;}
  .sw-preview-stats{flex-direction:column;}
  .sw-verify-grid{grid-template-columns:1fr;}
}
</style>
</head>
<body>

<!-- ═══════════════════════════════════════════════
     HERO
════════════════════════════════════════════════ -->
<section class="sw-hero">
  <div class="sw-hero-grid"></div>
  <div class="sw-hero-glow"></div>
  <div class="sw-hero-inner">
    <div class="sw-hero-badge">Software Division</div>
    <h1 class="sw-hero-title">Simple Software for<br>Your <em>Gold Business</em></h1>
    <p class="sw-hero-sub">
      Easy-to-use tools for gold trading, jewellery shops, and testing labs.
      Manage your daily sales, stock, and customers in one place — without any hassle.
    </p>
    <div class="sw-hero-actions">
      <a href="#sw-products" class="sw-btn-solid">
        <span>See Our Software</span>
        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
      </a>
      <a href="#sw-final-cta" class="sw-btn-outline">Contact Us ↓</a>
    </div>
    <div class="sw-hero-metrics">
      <div class="sw-metric"><strong>3</strong><span>Software Products</span></div>
      <div class="sw-metric-divider"></div>
      <div class="sw-metric"><strong>25+</strong><span>Labs &amp; Shops Using Them</span></div>
      <div class="sw-metric-divider"></div>
      <div class="sw-metric"><strong>1</strong><span>Website Building Service</span></div>
    </div>
  </div>
</section>

<!-- ═══════════════════════════════════════════════
     INTRO
════════════════════════════════════════════════ -->
<section class="sw-intro" id="sw-products">
  <div class="sw-intro-inner sw-reveal">
    <div class="sw-eyebrow">What We Build</div>
    <h2 class="sw-intro-title">Made For How Gold <em>Businesses</em> Actually Work</h2>
    <p class="sw-intro-text">
      We build software for three kinds of gold businesses — gold traders, jewellery shops, and testing labs.
      Each tool is made around how these businesses already work day to day, so your team can start using it
      without needing any special training.
    </p>
  </div>
</section>

<!-- ═══════════════════════════════════════════════
     01 — FINEBULLION DESK
════════════════════════════════════════════════ -->
<section class="sw-product-section" id="sw-tunchmark">
  <div class="sw-prod-inner">
    <div class="sw-prod-header sw-reveal">
      <div>
        <span class="sw-prod-tag sw-tag-jwl">For Gold Testing Labs</span>
        <h2 class="sw-prod-title">Tunch<em>Mark</em></h2>
        <p class="sw-prod-subtitle">A trusted system already used by 25+ gold testing labs to bill customers and let them verify their reports online.</p>
      </div>
    </div>

    <div class="sw-prod-grid">
      <div class="sw-prod-visual sw-reveal">
        <div class="sw-preview">
          <div class="sw-app">
            <div class="sw-app-side" style="background:#171614;">
              <div class="sw-app-brand"><span class="mark">T</span>TunchMark</div>
              <div class="sw-app-nav-item on"><span class="ic"></span>Dashboard</div>
              <div class="sw-app-nav-item"><span class="ic"></span>Lab Billing</div>
              <div class="sw-app-nav-item"><span class="ic"></span>HUID Verify</div>
              <div class="sw-app-nav-item"><span class="ic"></span>Machinery</div>
              <div class="sw-app-nav-item"><span class="ic"></span>Finance</div>
              <div class="sw-app-nav-item"><span class="ic"></span>Reports</div>
            </div>
            <div class="sw-app-main">
              <div class="sw-app-top">
                <div><h5>Dashboard</h5><span>Lab overview — All-Time</span></div>
                <span class="sw-app-pill">25+ Labs</span>
              </div>
              <div class="sw-app-stats">
                <div class="sw-app-stat c-green"><b>184</b><span>Reports Billed</span></div>
                <div class="sw-app-stat"><b>৳1.2L</b><span>Income (Month)</span></div>
                <div class="sw-app-stat c-blue"><b>6</b><span>Pending Bills</span></div>
                <div class="sw-app-stat c-purple"><b>Sent</b><span>Daily Email</span></div>
              </div>
              <div class="sw-app-panel">
                <div class="sw-app-panel-head">Report Verification</div>
                <div class="sw-app-row"><span>ID TN-A1B2C3 · Abdul Karim</span><span class="sw-app-tag paid">Verified</span></div>
                <div class="sw-app-row"><span>Purity 91.60% · 22K</span><span class="sw-app-tag pending">Hallmark</span></div>
              </div>
              <div class="sw-app-panel">
                <div class="sw-app-panel-head">Billing Summary</div>
                <div style="padding:8px 9px;">
                  <div class="sw-app-bars">
                    <div class="sw-app-bar" style="height:35%"></div>
                    <div class="sw-app-bar" style="height:60%"></div>
                    <div class="sw-app-bar" style="height:45%"></div>
                    <div class="sw-app-bar" style="height:80%"></div>
                    <div class="sw-app-bar" style="height:52%"></div>
                    <div class="sw-app-bar" style="height:95%"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="sw-prod-content sw-reveal">
        <p class="sw-prod-lead" style="font-size:.92rem;color:var(--sw-muted);font-weight:300;line-height:1.75;margin-bottom:28px;">
          TunchMark is a management tool built for gold testing labs. It handles billing for testing services,
          gives every customer a way to check their report online, and keeps track of the lab's income and
          equipment — currently trusted by more than 25 labs.
        </p>
        <div class="sw-prod-features">
          <div class="sw-feat sw-feat-jwl">
            <div class="sw-feat-icon"><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><polyline points="14 2 14 8 20 8"/><line x1="16" y1="13" x2="8" y2="13"/><line x1="16" y1="17" x2="8" y2="17"/></svg></div>
            <div><strong>Easy Billing for Every Service</strong><span>Bill customers for testing, hallmarking, or welding — all from the same simple screen.</span></div>
          </div>
          <div class="sw-feat sw-feat-jwl">
            <div class="sw-feat-icon"><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"><path d="M22 11.08V12a10 10 0 11-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg></div>
            <div><strong>Reports Customers Can Verify Online</strong><span>Every report gets a unique 6-character code, so customers can check it's genuine anytime, online.</span></div>
          </div>
          <div class="sw-feat sw-feat-jwl">
            <div class="sw-feat-icon"><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"><line x1="18" y1="20" x2="18" y2="10"/><line x1="12" y1="20" x2="12" y2="4"/><line x1="6" y1="20" x2="6" y2="14"/></svg></div>
            <div><strong>Track Income &amp; Expenses</strong><span>A clear finance view of what's coming in and going out, with monthly and yearly reports.</span></div>
          </div>
          <div class="sw-feat sw-feat-jwl">
            <div class="sw-feat-icon"><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"><path d="M12 2L2 7l10 5 10-5-10-5z"/><path d="M2 17l10 5 10-5"/><path d="M2 12l10 5 10-5"/></svg></div>
            <div><strong>Equipment Movement, Tracked</strong><span>Keep a record of lab machinery going in and out, so nothing goes missing.</span></div>
          </div>
          <div class="sw-feat sw-feat-jwl">
            <div class="sw-feat-icon"><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"><rect x="3" y="3" width="18" height="18" rx="2"/><path d="M3 9h18"/></svg></div>
            <div><strong>One Dashboard for the Whole Lab</strong><span>See billing, reports, pending bills, and finances at a glance, without digging through files.</span></div>
          </div>
          <div class="sw-feat sw-feat-jwl">
            <div class="sw-feat-icon"><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg></div>
            <div><strong>Daily Report, Sent Automatically</strong><span>The lab owner gets a billing summary emailed to them automatically, every single day.</span></div>
          </div>
        </div>
        <a href="#sw-final-cta" class="sw-cta-link sw-cta-jwl">Ask About TunchMark<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg></a>
      </div>
    </div>
  </div>
</section>
<section class="sw-product-section sw-section-alt" id="sw-jewelrykhata">
  <div class="sw-prod-inner">
    <div class="sw-prod-header sw-reveal">
      <div>
        <span class="sw-prod-tag sw-tag-tunch">For Jewellery Shops</span>
        <h2 class="sw-prod-title">Jewelry<em>Khata</em></h2>
        <p class="sw-prod-subtitle">A complete day-to-day management tool for jewellery shops — from billing customers to managing pawns and orders.</p>
      </div>
    </div>

    <div class="sw-prod-grid sw-prod-grid-reverse">
      <div class="sw-prod-visual sw-reveal">
        <div class="sw-preview">
          <div class="sw-app">
            <div class="sw-app-side">
              <div class="sw-app-brand"><span class="mark">J</span>JewelryKhata</div>
              <div class="sw-app-nav-item"><span class="ic"></span>Dashboard</div>
              <div class="sw-app-nav-item on"><span class="ic"></span>New Order</div>
              <div class="sw-app-nav-item"><span class="ic"></span>Customers</div>
              <div class="sw-app-nav-item"><span class="ic"></span>Bills</div>
              <div class="sw-app-nav-item"><span class="ic"></span>Bondok</div>
              <div class="sw-app-nav-item"><span class="ic"></span>Inventory</div>
              <div class="sw-app-nav-item"><span class="ic"></span>Reports</div>
            </div>
            <div class="sw-app-main">
              <div class="sw-app-top">
                <div><h5>New Order</h5><span>Create a billing order</span></div>
                <span class="sw-app-pill">#28153</span>
              </div>
              <div class="sw-app-panel">
                <div class="sw-app-panel-head">Customer Information</div>
                <div style="padding:8px 9px;">
                  <div class="sw-app-form-row3" style="margin-bottom:6px;">
                    <div class="sw-app-form-field"><label>Name</label><div class="box">Search or enter name</div></div>
                    <div class="sw-app-form-field"><label>Phone</label><div class="box">Search or enter phone</div></div>
                    <div class="sw-app-form-field"><label>Address</label><div class="box">Optional</div></div>
                  </div>
                </div>
              </div>
              <div class="sw-app-panel">
                <div class="sw-app-panel-head">Order Items</div>
                <div class="sw-app-table-mini">
                  <div class="thd"><span>Item</span><span>Weight</span><span>Karat</span><span>Price</span></div>
                  <div class="trow"><span>Gold Chain</span><span>18.4g</span><span>22K</span><span>৳2,17,114</span></div>
                </div>
                <div class="sw-app-total">GRAND TOTAL <b>৳2,17,114</b></div>
              </div>
              <div style="display:flex;justify-content:flex-end;gap:6px;">
                <span class="sw-app-btn outline">Reset</span>
                <span class="sw-app-btn">Submit Order</span>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="sw-prod-content sw-reveal">
        <p class="sw-prod-lead" style="font-size:.92rem;color:var(--sw-muted);font-weight:300;line-height:1.75;margin-bottom:28px;">
          JewelryKhata brings every part of running a jewellery shop into one system — billing, orders, pawns,
          old gold purchases, artisans, dues, and stock — so nothing has to be tracked separately on paper.
        </p>
        <div class="sw-prod-features">
          <div class="sw-feat sw-feat-tunch">
            <div class="sw-feat-icon"><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><polyline points="14 2 14 8 20 8"/><line x1="16" y1="13" x2="8" y2="13"/><line x1="16" y1="17" x2="8" y2="17"/></svg></div>
            <div><strong>Billing at the Counter</strong><span>Create and print a proper invoice for every ornament sold, right at the point of sale.</span></div>
          </div>
          <div class="sw-feat sw-feat-tunch">
            <div class="sw-feat-icon"><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"><path d="M6 2L3 6v14a2 2 0 002 2h14a2 2 0 002-2V6l-3-4z"/><line x1="3" y1="6" x2="21" y2="6"/><path d="M16 10a4 4 0 01-8 0"/></svg></div>
            <div><strong>Customer Orders, Tracked</strong><span>See every customer's order history in one place, with a proper invoice attached to each one.</span></div>
          </div>
          <div class="sw-feat sw-feat-tunch">
            <div class="sw-feat-icon"><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"><path d="M22 11.08V12a10 10 0 11-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg></div>
            <div><strong>Bondok (Pawn) Management</strong><span>Handles pawned jewellery using the same calculations your shop already follows.</span></div>
          </div>
          <div class="sw-feat sw-feat-tunch">
            <div class="sw-feat-icon"><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"><line x1="12" y1="1" x2="12" y2="23"/><path d="M17 5H9.5a3.5 3.5 0 000 7h5a3.5 3.5 0 010 7H6"/></svg></div>
            <div><strong>Buying &amp; Reselling Old Gold</strong><span>Manages the buying of old gold from customers and reselling it to retail or dealer markets.</span></div>
          </div>
          <div class="sw-feat sw-feat-tunch">
            <div class="sw-feat-icon"><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"><path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/><circle cx="9" cy="7" r="4"/></svg></div>
            <div><strong>Artisan Assignment</strong><span>Assign customer orders to the right artisan and keep track of the gold weight given for each job.</span></div>
          </div>
          <div class="sw-feat sw-feat-tunch">
            <div class="sw-feat-icon"><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg></div>
            <div><strong>Halkhata Due Reminders</strong><span>Generates a customer-wise card showing outstanding dues — ready to send out during Halkhata season.</span></div>
          </div>
          <div class="sw-feat sw-feat-tunch">
            <div class="sw-feat-icon"><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"><rect x="3" y="3" width="18" height="18" rx="2"/><path d="M3 9h18"/></svg></div>
            <div><strong>Barcode Labels for Stock</strong><span>Generates barcodes for your inventory, with labels you can print directly onto ornament tags.</span></div>
          </div>
          <div class="sw-feat sw-feat-tunch">
            <div class="sw-feat-icon"><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"><line x1="18" y1="20" x2="18" y2="10"/><line x1="12" y1="20" x2="12" y2="4"/><line x1="6" y1="20" x2="6" y2="14"/></svg></div>
            <div><strong>One Place for All Transactions</strong><span>Every payment in, payment out, and expense lands in a single, organised transactions list.</span></div>
          </div>
        </div>
        <a href="#sw-final-cta" class="sw-cta-link sw-cta-tunch">Ask About JewelryKhata<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg></a>
      </div>
    </div>
  </div>
</section>

<!-- ═══════════════════════════════════════════════
     03 — TUNCHMARK
════════════════════════════════════════════════ -->
<section class="sw-product-section" id="sw-finebullion">
  <div class="sw-prod-inner">
    <div class="sw-prod-header sw-reveal">
      <div>
        <span class="sw-prod-tag sw-tag-machine">For Gold Traders</span>
        <h2 class="sw-prod-title">FineBullion <em>Desk</em></h2>
        <p class="sw-prod-subtitle">A tool for buying, selling, and exchanging gold — while keeping an accurate record of everything in your vault.</p>
      </div>
    </div>

    <div class="sw-prod-grid">
      <div class="sw-prod-visual sw-reveal">
        <div class="sw-preview">
          <div class="sw-app">
            <div class="sw-app-side">
              <div class="sw-app-brand"><span class="mark">F</span>FineBullion</div>
              <div class="sw-app-nav-item on"><span class="ic"></span>Dashboard</div>
              <div class="sw-app-nav-item"><span class="ic"></span>Inventory</div>
              <div class="sw-app-nav-item"><span class="ic"></span>Customers</div>
              <div class="sw-app-nav-item"><span class="ic"></span>Exchange</div>
              <div class="sw-app-nav-item"><span class="ic"></span>Sales</div>
              <div class="sw-app-nav-item"><span class="ic"></span>Purchase</div>
              <div class="sw-app-nav-item"><span class="ic"></span>Expenses</div>
            </div>
            <div class="sw-app-main">
              <div class="sw-app-top">
                <div><h5>Dashboard</h5><span>Business activity overview</span></div>
                <span class="sw-app-pill">This Month</span>
              </div>
              <div class="sw-app-stats">
                <div class="sw-app-stat"><b>25v 7a</b><span>Total Stock</span></div>
                <div class="sw-app-stat c-green"><b>14v 7a</b><span>Pure Gold 24K</span></div>
                <div class="sw-app-stat c-blue"><b>2 Low</b><span>Stock Alert</span></div>
                <div class="sw-app-stat c-purple"><b>14</b><span>Artisans</span></div>
              </div>
              <div class="sw-app-panel">
                <div class="sw-app-panel-head">Stock by Karat</div>
                <div style="padding:8px 9px;">
                  <div class="sw-app-bars">
                    <div class="sw-app-bar" style="height:18%"></div>
                    <div class="sw-app-bar" style="height:55%"></div>
                    <div class="sw-app-bar" style="height:22%"></div>
                    <div class="sw-app-bar" style="height:12%"></div>
                    <div class="sw-app-bar" style="height:95%"></div>
                  </div>
                </div>
              </div>
              <div class="sw-app-panel">
                <div class="sw-app-panel-head">Recent Gold Sale</div>
                <div class="sw-app-row"><span>Ranka Jewellers · 22K</span><span class="sw-app-tag paid">Paid</span></div>
                <div class="sw-app-row"><span>Qlik Gold · 24K</span><span class="sw-app-tag pending">Pending</span></div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="sw-prod-content sw-reveal">
        <p class="sw-prod-lead" style="font-size:.92rem;color:var(--sw-muted);font-weight:300;line-height:1.75;margin-bottom:28px;">
          FineBullion Desk is a simple tool for gold traders. It helps you buy, sell, and exchange gold, keep track of
          how much pure gold is in your vault, and manage your customers and artisans — all from one place.
        </p>
        <div class="sw-prod-features">
          <div class="sw-feat">
            <div class="sw-feat-icon"><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"><line x1="12" y1="1" x2="12" y2="23"/><path d="M17 5H9.5a3.5 3.5 0 000 7h5a3.5 3.5 0 010 7H6"/></svg></div>
            <div><strong>Buy, Sell &amp; Exchange Gold</strong><span>Handles gold trades and works out the right value based on purity, automatically.</span></div>
          </div>
          <div class="sw-feat">
            <div class="sw-feat-icon"><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"><rect x="2" y="3" width="20" height="14" rx="2"/><line x1="8" y1="21" x2="16" y2="21"/><line x1="12" y1="17" x2="12" y2="21"/></svg></div>
            <div><strong>Vault &amp; Stock Tracking</strong><span>Keeps a running count of pure gold in your vault, and tracks stock separately for 18K, 20K, 21K, 22K, and 24K gold.</span></div>
          </div>
          <div class="sw-feat">
            <div class="sw-feat-icon"><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"><path d="M9 12l2 2 4-4"/><path d="M21 12c0 4.97-4.03 9-9 9s-9-4.03-9-9 4.03-9 9-9 9 4.03 9 9z"/></svg></div>
            <div><strong>Stops Mistakes Before They Happen</strong><span>Checks your stock automatically before a sale, and blocks the transaction if there isn't enough gold in hand.</span></div>
          </div>
          <div class="sw-feat">
            <div class="sw-feat-icon"><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"><path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 00-3-3.87"/></svg></div>
            <div><strong>Customer &amp; Artisan Records</strong><span>Keeps a full history for every customer and artisan, including gold handed over and gold returned.</span></div>
          </div>
          <div class="sw-feat">
            <div class="sw-feat-icon"><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"><path d="M12 2L2 7l10 5 10-5-10-5z"/><path d="M2 17l10 5 10-5"/></svg></div>
            <div><strong>Weights Shown the Traditional Way</strong><span>Stores every weight accurately, but shows it to you in Vori, Ana, Roti, and Point — the way you already work.</span></div>
          </div>
          <div class="sw-feat">
            <div class="sw-feat-icon"><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"><line x1="18" y1="20" x2="18" y2="10"/><line x1="12" y1="20" x2="12" y2="4"/><line x1="6" y1="20" x2="6" y2="14"/></svg></div>
            <div><strong>Expenses &amp; Simple Reports</strong><span>Tracks day-to-day business expenses and gives you a clear dashboard of how the business is doing.</span></div>
          </div>
        </div>
        <a href="#sw-final-cta" class="sw-cta-link">Ask About FineBullion Desk<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg></a>
      </div>
    </div>
  </div>
</section>

<!-- ═══════════════════════════════════════════════
     02 — JEWELRYKHATA
════════════════════════════════════════════════ -->

<!-- ═══════════════════════════════════════════════
     04 — WEBSITE BUILDING
════════════════════════════════════════════════ -->
<section class="sw-brand-section sw-section-alt" id="sw-brand">
  <div class="sw-brand-inner">
    <div class="sw-brand-header sw-reveal">
      <span class="sw-prod-tag sw-tag-brand">Digital Identity</span>
      <h2 class="sw-prod-title">Your Brand <em>Website</em></h2>
      <p class="sw-prod-subtitle" style="margin:12px auto 0;">
        Along with software, we also build websites for gold labs and jewellery shops — so customers can find you,
        see your services, verify their reports, and reach out to you easily, on any device.
      </p>
    </div>

    <div class="sw-brand-features sw-reveal">
      <div class="sw-brand-feat"><div class="sw-brand-feat-num">01</div><h4>Made to Match Your Brand</h4><p>A website designed around your business — your colours, your style, your own photos.</p></div>
      <div class="sw-brand-feat"><div class="sw-brand-feat-num">02</div><h4>Report Verification Page</h4><p>Customers can check their testing or hallmark report online by entering their ID.</p></div>
      <div class="sw-brand-feat"><div class="sw-brand-feat-num">03</div><h4>Easy to Find on Google</h4><p>Set up so people searching for a gold lab or shop near them can actually find you.</p></div>
      <div class="sw-brand-feat"><div class="sw-brand-feat-num">04</div><h4>Works Well on Phones</h4><p>Looks and works properly on mobile — where most customers will actually visit from.</p></div>
      <div class="sw-brand-feat"><div class="sw-brand-feat-num">05</div><h4>WhatsApp Button Built In</h4><p>A direct chat button so customers can reach you instantly, without leaving the page.</p></div>
      <div class="sw-brand-feat"><div class="sw-brand-feat-num">06</div><h4>We Keep It Running</h4><p>We handle hosting, updates, and maintenance — you just focus on your business.</p></div>
    </div>

    <div class="sw-brand-cta sw-reveal">
      <a href="#sw-final-cta" class="sw-btn-solid sw-btn-brand"><span>Get Your Own Website</span><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg></a>
    </div>
  </div>
</section>

<!-- ═══════════════════════════════════════════════
     FINAL CTA
════════════════════════════════════════════════ -->
<section class="sw-final-cta" id="sw-final-cta">
  <div class="sw-final-pattern"></div>
  <div class="sw-final-inner">
    <span class="sw-final-eyebrow">Ready to Go Digital?</span>
    <h2 class="sw-final-title">Let's Build Something <em>Great</em></h2>
    <p class="sw-final-text">
      Whether you need software for gold trading, a jewellery shop, a testing lab, or a website of your own —
      we're ready to help you set up the right system for your business.
    </p>
    <div class="sw-final-btns">
      <a href="https://wa.me/8801716469866?text=Hello%2C%20I%20am%20interested%20in%20your%20software%20services." target="_blank" rel="noopener" class="sw-btn-solid sw-btn-whatsapp">
        <svg width="16" height="16" viewBox="0 0 24 24" fill="white"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
        Chat on WhatsApp
      </a>
      <a href="mailto:contact@rajaiswari.com" class="sw-btn-outline-light">Email Us →</a>
    </div>
  </div>
</section>

<script>
/* One simple, gentle reveal-on-scroll — matches the index page's approach */
(function(){
  var items = document.querySelectorAll('.sw-reveal');
  var io = new IntersectionObserver(function(entries){
    entries.forEach(function(e){
      if (e.isIntersecting) { e.target.classList.add('sw-in'); io.unobserve(e.target); }
    });
  }, { threshold: 0.15 });
  items.forEach(function(el){ io.observe(el); });
})();
</script>

</body>
</html>