<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Our Clients – Raj Aiswari | Trusted Gold Testing Partners</title>
  <link rel="icon" type="image/png" href="favicon.png">
  <link rel="apple-touch-icon" href="favicon.png">
  <meta name="theme-color" content="#B8881E">
  <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,600;1,300;1,400&family=Outfit:wght@300;400;500;600&display=swap" rel="stylesheet">
</head>
<body>

<?php include 'header.php'; ?>

<?php
/* ══════════════════════════════════════════════════════════════════
   CLIENT / LAB DATA ARRAY
   ══════════════════════════════════════════════════════════════════ */
 $clients = [
  [
    'logo'    => 'client-habiganj.png',
    'name'    => 'BSTI Dhaka',
    'address' => 'Dhaka',
    'phone'   => '',
    'website' => '',
    'website_url' => '',
  ],
  [
    'logo'    => 'client-habiganj.png',
    'name'    => 'Hazrat Shahjalal International Airport',
    'address' => 'Hazrat Shahjalal International Airport, Dhaka',
    'phone'   => '',
    'website' => '',
    'website_url' => '',
  ],
  [
    'logo'    => 'client-habiganj.png',
    'name'    => 'Dhaka Gold Pvt. Ltd.',
    'address' => 'Dhaka',
    'phone'   => '',
    'website' => '',
    'website_url' => '',
  ],
  [
    'logo'    => 'client-habiganj.png',
    'name'    => 'Ruposhi Gold Pvt. Ltd.',
    'address' => 'Dhaka',
    'phone'   => '',
    'website' => '',
    'website_url' => '',
  ],
  [
    'logo'    => 'client-habiganj.png',
    'name'    => 'Bangla Gold Pvt. Ltd.',
    'address' => 'Dhaka',
    'phone'   => '',
    'website' => '',
    'website_url' => '',
  ],
  [
    'logo'    => 'client-habiganj.png',
    'name'    => 'Habiganj Gold',
    'address' => 'Safiya Mansion(1st floor) Bogla Bazar',
    'phone'   => '01779053607, 01854142915',
    'website' => '',
    'website_url' => '',
  ],
  [
    'logo'    => 'client-savar.png',
    'name'    => 'Savar Gold',
    'address' => 'Janata Gold Plaza, Savar',
    'phone'   => '01811492909, 01830017385',
    'website' => '',
    'website_url' => '',
  ],
  [
    'logo'    => 'client-german.png',
    'name'    => 'MA GOLD TESTING CENTER',
    'address' => '18, Helatola road, 2nd Floor',
    'phone'   => '01319-592829, 024-78845382',
    'website' => '',
    'website_url' => '',
  ],
  [
    'logo'    => 'client-german.png',
    'name'    => 'German Gold Testing',
    'address' => 'Polok Tower (2nd floor), Swanakar Potti, Manikgonj',
    'phone'   => '01617335880',
    'website' => '',
    'website_url' => '',
  ],
  [
    'logo'    => 'client-joypara.png',
    'name'    => 'Joy Para Gold Lab',
    'address' => 'Joypara Bazar, (puraton swarnakar potti), Dohar, Dhaka-1330',
    'phone'   => '01324930998',
    'website' => '',
    'website_url' => '',
  ],
  [
    'logo'    => 'client-makka.png',
    'name'    => 'Makka Gold',
    'address' => 'Shahajada Complex (1st Floor)',
    'phone'   => '+880 1712650088',
    'website' => '',
    'website_url' => '',
  ],
  [
    'logo'    => 'client-radhesheree.png',
    'name'    => 'Radhesheree Gold Hallmark Center',
    'address' => 'Tekerhat Swarnakar Potti Rajoir, Madaripur',
    'phone'   => '+880 1750449455',
    'website' => '',
    'website_url' => '',
  ],
  [
    'logo'    => 'client-rpm.png',
    'name'    => 'RPM Gold Testing Center',
    'address' => 'Babur bari road (Dudh potty) Madhabdi',
    'phone'   => '+880 1871357531',
    'website' => '',
    'website_url' => '',
  ],
  [
    'logo'    => 'client-rpm.png',
    'name'    => ' JAMALPUR GOLD',
    'address' => 'Mirja Complex Medical Road',
    'phone'   => '+880 1323536765',
    'website' => '',
    'website_url' => '',
  ],
  [
    'logo'    => 'client-annya.png',
    'name'    => 'Annya Gold',
    'address' => 'Chandina Bazar, Comilla, Bangladesh',
    'phone'   => '+880 1834997299',
    'website' => '',
    'website_url' => '',
  ],
  [
    'logo'    => 'client-madhupur.png',
    'name'    => 'Madhupur Gold Testing Center',
    'address' => 'Kudrat market, Sathi Cinema Hall Road, Madhupur',
    'phone'   => '+880 1797261563',
    'website' => '',
    'website_url' => '',
  ],
  [
    'logo'    => 'client-naha.png',
    'name'    => 'Naha Gold',
    'address' => '159/A ,Hajari market(5th floor),Hajari lane',
    'phone'   => '+880 1618992982',
    'website' => '',
    'website_url' => '',
  ],
  [
    'logo'    => 'client-netrokona.png',
    'name'    => 'Netrokona Gold Lab',
    'address' => 'Choto Bazar, Netrokona',
    'phone'   => '+880 1712613060',
    'website' => '',
    'website_url' => '',
  ],
  [
    'logo'    => 'client-valuka.png',
    'name'    => 'Valuka Gold Lab',
    'address' => 'Gafargaon Road, Sarkar tower(1st floor), Valuka',
    'phone'   => '01716-830700, 01732-141862',
    'website' => '',
    'website_url' => '',
  ],
  [
    'logo'    => 'client-ss.png',
    'name'    => 'SS Gold Testing Hallmark Center',
    'address' => 'Beanibazar, National Market(1st floor), Sylhet',
    'phone'   => '01777-203698',
    'website' => '',
    'website_url' => '',
  ],
  [
    'logo'    => 'client-yadab.png',
    'name'    => 'Yadab Gold Testing Lab',
    'address' => 'Hajari market(1st floor),Hajari lane, Chattagram-4000',
    'phone'   => '+880 1890-649561',
    'website' => '',
    'website_url' => '',
  ],
  [
    'logo'    => 'client-ajmeri.png',
    'name'    => 'Ajmeri Gold Testing & Hallmark Center',
    'address' => '170,Alhera Jame Mosid Market (BGB gate no-3), Azimpur, Lalbagh, Dhaka-1205',
    'phone'   => '+880 1829-351600',
    'website' => '',
    'website_url' => '',
  ],
  [
    'logo'    => 'client-bismillah.png',
    'name'    => 'Bismillah Gold Testing Center',
    'address' => 'Modern Market, Chatipotti, Cumilla',
    'phone'   => '01833-355779, 01638-855508',
    'website' => '',
    'website_url' => '',
  ],
  [
    'logo'    => 'client-sonargoan.png',
    'name'    => 'Sonargoan Gold Lab',
    'address' => 'M. Rahman Plaza(2nd floor), Thana road, Sonargoan',
    'phone'   => '+880 1775511644',
    'website' => '',
    'website_url' => '',
  ],
  [
    'logo'    => 'client-hossainpur.png',
    'name'    => 'Hossainpur Hallmark Center',
    'address' => 'Ground Floor Shop No. 2, Hashem Complex, Hossainpur North Bazar Shahrasti, Chandpur',
    'phone'   => '01712-187207, 01774-887488, 01329-957117',
    'website' => '',
    'website_url' => '',
  ],
  [
    'logo'    => 'client-naha-hallmark.png',
    'name'    => 'Naha Chain & Dice House',
    'address' => 'Morshed Alam Complex (5th Floor), Chaumuhani, Noakhali.',
    'phone'   => '01603-089632, 01761-88343',
    'website' => '',
    'website_url' => '',
  ],
  [
    'logo'    => 'client-narsingdi.png',
    'name'    => 'Narsingdi Gold Hallmark',
    'address' => 'Ayesha plaza 2nd floor, kali bari road, Narsingdi',
    'phone'   => '+880 1323710515',
    'website' => '',
    'website_url' => '',
  ],
  [
    'logo'    => 'client-tangail.png',
    'name'    => 'Tangail Gold House',
    'address' => 'Monika Market, Choyani Bazar, Tangail.',
    'phone'   => '01787-442895, 01323-807293',
    'website' => '',
    'website_url' => '',
  ],
  [
    'logo'    => 'client-kalihati.png',
    'name'    => 'Kalihati Gold Testing',
    'address' => 'Paulpara Road, Hamidpur Bazar, Kalihati,Tangail',
    'phone'   => '+880 1837419912',
    'website' => '',
    'website_url' => '',
  ],
];
?>

<!-- ══ PAGE HERO ══════════════════════════════ -->
<section class="rg-page-hero">
  <div class="rg-page-hero-content">
    <div class="rg-eyebrow rg-reveal" style="justify-content:center;">Honoured to Serve</div>
    <h1 class="rg-section-title rg-reveal" style="color:#FDFAF4;text-align:center;">Our Respected <em>Clients</em></h1>
    <p class="rg-page-hero-sub rg-reveal">Distinguished gold testing and hallmark laboratories across Bangladesh who have entrusted Raj Aiswari as their lab solution provider.</p>
  </div>
</section>

<!-- ══ INTRO + STATS + PROVIDE ════════════════════════════ -->
<section class="rg-section" style="padding-bottom:0;">

  <!-- Stats Row -->
  <div class="rg-cl-stats-row rg-reveal">
    <div class="rg-cl-stat">
      <span class="rg-cl-stat-num"><?php echo count($clients); ?>+</span>
      <span class="rg-cl-stat-lbl">Labs Served Nationwide</span>
    </div>
    <div class="rg-cl-stat">
      <span class="rg-cl-stat-num">30+</span>
      <span class="rg-cl-stat-lbl">Districts Covered</span>
    </div>
    <div class="rg-cl-stat">
      <span class="rg-cl-stat-num">2018</span>
      <span class="rg-cl-stat-lbl">Serving Since</span>
    </div>
  </div>

  <!-- Intro Text -->
  <p class="rg-cl-intro-text rg-reveal">
    Each of these respected laboratories operates independently in their community — and they chose Raj Aiswari to equip them with world-class gold testing solutions. We supply the technology, they deliver the trust.
  </p>

  <!-- Region Pills -->
  <div class="rg-cl-pills rg-reveal">
    <span class="rg-cl-pill">
      <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg>
      Dhaka
    </span>
    <span class="rg-cl-pill">
      <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg>
      Chattogram
    </span>
    <span class="rg-cl-pill">
      <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg>
      Sylhet
    </span>
    <span class="rg-cl-pill">
      <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg>
      Mymensingh
    </span>
    <span class="rg-cl-pill">
      <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg>
      Tangail
    </span>
    <span class="rg-cl-pill">
      <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg>
      Khulna
    </span>
    <span class="rg-cl-pill">
      <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg>
      Cox's Bazar
    </span>
    <span class="rg-cl-pill">
      <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg>
      Jhenaidah
    </span>
    <span class="rg-cl-pill rg-cl-pill--more">+ More Regions</span>
  </div>

  <!-- Provide Cards -->
  <!-- <div class="rg-cl-provide-strip rg-reveal">
    <div class="rg-cl-provide-item">
      <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg>
      <h4>Precision Equipment</h4>
      <p>Fischer XRF machines — the global standard in non-destructive precious metal analysis.</p>
    </div>
    <div class="rg-cl-provide-item">
      <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M14.7 6.3a1 1 0 000 1.4l1.6 1.6a1 1 0 001.4 0l3.77-3.77a6 6 0 01-7.94 7.94l-6.91 6.91a2.12 2.12 0 01-3-3l6.91-6.91a6 6 0 017.94-7.94l-3.76 3.76z"/></svg>
      <h4>Lab Setup & Calibration</h4>
      <p>Complete installation and calibration tailored to each lab's workflow and environment.</p>
    </div>
    <div class="rg-cl-provide-item">
      <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
      <h4>Ongoing Support</h4>
      <p>Maintenance, updates, and guidance — our relationship doesn't end at delivery.</p>
    </div>
  </div> -->

</section>

<!-- ══ CLIENT GRID ════════════════════════════ -->
<section class="rg-section" id="clients" style="padding-top:60px;">

  <div class="rg-cl-grid">
    <?php foreach ($clients as $index => $client): ?>
    <div class="rg-cl-card rg-reveal" style="animation-delay: <?php echo ($index % 4) * 0.08; ?>s;">

      <!-- Left: Logo circle -->
      <div class="rg-cl-logo-wrap">
        <?php if (!empty($client['logo']) && file_exists($client['logo'])): ?>
          <img
            src="<?php echo htmlspecialchars($client['logo']); ?>"
            alt="<?php echo htmlspecialchars($client['name']); ?> logo"
            class="rg-cl-logo-img"
            loading="lazy"
          >
        <?php else: ?>
          <div class="rg-cl-logo-fallback">
            <?php
              $words = explode(' ', $client['name']);
              $initials = '';
              foreach (array_slice($words, 0, 2) as $w) {
                $initials .= strtoupper(mb_substr($w, 0, 1));
              }
              echo htmlspecialchars($initials);
            ?>
          </div>
        <?php endif; ?>
      </div>

      <!-- Right: Name + Meta -->
      <div class="rg-cl-info">
        <h3 class="rg-cl-name"><?php echo htmlspecialchars($client['name']); ?></h3>

        <!-- Address -->
        <div class="rg-cl-meta-row">
          <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg>
          <?php if (!empty($client['address'])): ?>
            <span><?php echo htmlspecialchars($client['address']); ?></span>
          <?php else: ?>
            <span class="rg-cl-na">Not available</span>
          <?php endif; ?>
        </div>

        <!-- Phone -->
        <div class="rg-cl-meta-row">
          <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07A19.5 19.5 0 013.07 10.8 19.79 19.79 0 01.22 2.18 2 2 0 012.18 0h3a2 2 0 012 1.72c.127.96.361 1.903.7 2.81a2 2 0 01-.45 2.11L6.91 7.91a16 16 0 006.06 6.06l1.27-1.27a2 2 0 012.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0122 16.92z"/></svg>
          <?php if (!empty($client['phone'])): ?>
            <a href="tel:<?php echo preg_replace('/\s+/', '', $client['phone']); ?>" class="rg-cl-link-plain"><?php echo htmlspecialchars($client['phone']); ?></a>
          <?php else: ?>
            <span class="rg-cl-na">Not set yet</span>
          <?php endif; ?>
        </div>

        <!-- Website -->
        <div class="rg-cl-meta-row">
          <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><line x1="2" y1="12" x2="22" y2="12"/><path d="M12 2a15.3 15.3 0 014 10 15.3 15.3 0 01-4 10 15.3 15.3 0 01-4-10 15.3 15.3 0 014-10z"/></svg>
          <?php if (!empty($client['website'])): ?>
            <a href="<?php echo htmlspecialchars($client['website_url'] ?: 'https://'.$client['website']); ?>" target="_blank" rel="noopener" class="rg-cl-link-web"><?php echo htmlspecialchars($client['website']); ?></a>
          <?php else: ?>
            <span class="rg-cl-na">Not set yet</span>
          <?php endif; ?>
        </div>
      </div>

    </div>
    <?php endforeach; ?>
  </div>

</section>

<!-- ══ CTA BANNER ════════════════════════════ -->
<section class="rg-cta-banner" style="margin-top:80px;">
  <div class="rg-cta-inner">
    <h2 class="rg-cta-title">Looking for a Reliable Lab Solution Provider?</h2>
    <p class="rg-cta-sub">Whether you're setting up a new gold testing lab or upgrading your existing one, Raj Aiswari provides the equipment, expertise, and ongoing support you need to serve your customers with confidence.</p>
    <a href="contact.php" class="rg-btn-gold">Contact Us →</a>
  </div>
</section>

<!-- ══ PAGE STYLES ═══════════════════════════ -->
<style>
/* ── CSS Variables ───────────────────────────────────────────────── */
:root {
  --rg-gold:        #B8881E;
  --rg-gold-light:  #D4A62A;
  --rg-gold-pale:   #FAF6ED;
  --rg-gold-border: rgba(184,136,30,0.22);
  --rg-dark:        #0E0C09;
  --rg-text:        #1A1612;
  --rg-muted:       #5C5549;
  --rg-bg:          #FDFAF4;
  --rg-surface:     #FFFFFF;
}

*, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }

body {
  font-family: 'Outfit', sans-serif;
  background: var(--rg-bg);
  color: var(--rg-text);
  -webkit-font-smoothing: antialiased;
}

/* ── Page Hero (matches product page) ────────────────────────────── */
.rg-page-hero {
  min-height: 280px;
  padding: calc(var(--rg-nav-h, 72px) + 48px) clamp(20px,6vw,80px) 56px;
  background: linear-gradient(135deg, var(--rg-dark) 0%, #2e2820 100%);
  display: flex; align-items: center; justify-content: center; text-align: center;
  position: relative; overflow: hidden;
}
.rg-page-hero::before {
  content: ''; position: absolute; inset: 0;
  background: radial-gradient(ellipse at center, rgba(184,136,30,0.15) 0%, transparent 70%);
}
.rg-page-hero-content { position: relative; z-index: 1; max-width: 700px; }
.rg-page-hero-sub {
  color: rgba(253,250,244,0.6);
  font-size: 0.95rem; font-weight: 300; line-height: 1.75; margin-top: 12px;
}

/* ── Eyebrow ─────────────────────────────────────────────────────── */
.rg-eyebrow {
  display: flex; align-items: center; gap: 10px;
  font-size: 0.65rem; letter-spacing: 0.22em; text-transform: uppercase;
  color: var(--rg-gold); font-weight: 500;
  margin-bottom: 16px;
}
.rg-eyebrow::before, .rg-eyebrow::after {
  content: ''; flex: 1; max-width: 40px; height: 1px;
  background: var(--rg-gold); opacity: 0.5;
}

/* ── Section ─────────────────────────────────────────────────────── */
.rg-section {
  max-width: 1300px; margin: 0 auto;
  padding: 80px clamp(20px,5vw,60px);
}
.rg-section-title {
  font-family: 'Cormorant Garamond', serif;
  font-size: clamp(2rem, 4vw, 3rem);
  font-weight: 300; line-height: 1.15; margin-bottom: 20px;
  color: var(--rg-text);
}
.rg-section-title em { font-style: italic; color: var(--rg-gold); }

/* ── Stats Row ───────────────────────────────────────────────────── */
.rg-cl-stats-row {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: 14px;
  margin-bottom: 40px;
}
.rg-cl-stat {
  background: var(--rg-gold-pale, #F5EDD6);
  border: 1px solid rgba(184,136,30,0.22);
  border-radius: 4px;
  padding: 24px 20px;
  text-align: center;
  display: flex;
  flex-direction: column;
  gap: 6px;
}
.rg-cl-stat-num {
  font-family: 'Cormorant Garamond', serif;
  font-size: 2.2rem;
  font-weight: 600;
  color: var(--rg-gold, #B8881E);
  line-height: 1;
}
.rg-cl-stat-lbl {
  font-size: 0.7rem;
  letter-spacing: 0.12em;
  text-transform: uppercase;
  color: var(--rg-muted, #7A7060);
  font-weight: 500;
}

/* ── Intro Text ──────────────────────────────────────────────────── */
.rg-cl-intro-text {
  max-width: 620px;
  margin: 0 auto 32px;
  text-align: center;
  color: var(--rg-muted, #7A7060);
  font-size: 0.92rem;
  font-weight: 300;
  line-height: 1.9;
}

/* ── Region Pills ────────────────────────────────────────────────── */
.rg-cl-pills {
  display: flex;
  flex-wrap: wrap;
  gap: 8px;
  justify-content: center;
  margin-bottom: 48px;
}
.rg-cl-pill {
  display: inline-flex;
  align-items: center;
  gap: 5px;
  font-size: 0.72rem;
  font-weight: 500;
  padding: 5px 12px;
  border-radius: 99px;
  border: 1px solid rgba(184,136,30,0.3);
  color: var(--rg-muted, #7A7060);
  background: var(--rg-bg, #FDFAF4);
}
.rg-cl-pill svg { color: var(--rg-gold, #B8881E); flex-shrink: 0; }
.rg-cl-pill--more {
  background: var(--rg-gold, #B8881E);
  border-color: var(--rg-gold, #B8881E);
  color: #fff;
}

/* ── Provide Strip ───────────────────────────────────────────────── */
.rg-cl-provide-strip {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: 16px;
}
.rg-cl-provide-item {
  text-align: center;
  padding: 28px 20px 24px;
  border: 1px solid rgba(184,136,30,0.22);
  border-radius: 4px;
  background: var(--rg-bg, #FDFAF4);
  transition: border-color 0.3s, box-shadow 0.3s;
}
.rg-cl-provide-item:hover {
  border-color: var(--rg-gold, #B8881E);
  box-shadow: 0 4px 16px rgba(184,136,30,0.08);
}
.rg-cl-provide-item svg {
  color: var(--rg-gold, #B8881E);
  margin-bottom: 14px;
}
.rg-cl-provide-item h4 {
  font-family: 'Cormorant Garamond', serif;
  font-size: 1.1rem;
  font-weight: 600;
  color: var(--rg-dark, #1C1A16);
  margin-bottom: 8px;
}
.rg-cl-provide-item p {
  font-size: 0.82rem;
  color: var(--rg-muted, #7A7060);
  font-weight: 300;
  line-height: 1.7;
}

/* ── Responsive ──────────────────────────────────────────────────── */
@media (max-width: 768px) {
  .rg-cl-stats-row { grid-template-columns: repeat(3, 1fr); }
  .rg-cl-provide-strip { grid-template-columns: 1fr; gap: 12px; }
}
@media (max-width: 480px) {
  .rg-cl-stats-row { grid-template-columns: 1fr; }
}

/* ── Client Grid ─────────────────────────────────────────────────── */
.rg-cl-grid {
  display: grid;
  grid-template-columns: repeat(auto-fill, minmax(320px, 1fr));
  gap: 18px;
}

/* ── Client Card — horizontal layout ─────────────────────────────── */
.rg-cl-card {
  display: flex;
  flex-direction: row;
  align-items: flex-start;
  gap: 16px;

  background: var(--rg-bg, #FDFAF4);
  border: 1px solid rgba(184,136,30,0.22);
  border-radius: 4px;
  padding: 22px 20px;

  transition: border-color 0.3s ease, box-shadow 0.3s ease, transform 0.3s ease;
  position: relative;
  overflow: hidden;
}
.rg-cl-card:hover {
  border-color: var(--rg-gold, #B8881E);
  box-shadow: 0 4px 16px rgba(184,136,30,0.08);
  transform: translateY(-2px);
}

/* ── Logo circle — left side ─────────────────────────────────────── */
.rg-cl-logo-wrap {
  width: 44px; height: 44px;
  min-width: 44px;
  border-radius: 50%;
  background: var(--rg-gold-pale, #F5EDD6);
  border: 1px solid rgba(184,136,30,0.22);
  display: flex; align-items: center; justify-content: center;
  overflow: hidden;
  flex-shrink: 0;
}
.rg-cl-logo-img {
  width: 100%; height: 100%;
  object-fit: cover;
  display: block;
}
.rg-cl-logo-fallback {
  font-family: 'Cormorant Garamond', serif;
  font-size: 1rem; font-weight: 600;
  color: var(--rg-gold, #B8881E);
  letter-spacing: 0.02em;
  user-select: none;
}

/* ── Right side info ─────────────────────────────────────────────── */
.rg-cl-info {
  flex: 1;
  min-width: 0;
  display: flex;
  flex-direction: column;
  gap: 5px;
}
.rg-cl-name {
  font-family: 'Cormorant Garamond', serif;
  font-size: 1.08rem; font-weight: 600;
  color: var(--rg-text, #2E2A22); line-height: 1.25;
  margin-bottom: 6px;
}

/* ── Meta rows ───────────────────────────────────────────────────── */
.rg-cl-meta-row {
  display: flex;
  align-items: center;
  gap: 7px;
  font-size: 0.76rem;
  color: var(--rg-muted);
  font-weight: 400;
  line-height: 1.55;
}
.rg-cl-meta-row {
  display: flex;
  align-items: center;
  gap: 7px;
  font-size: 0.78rem;
  color: var(--rg-muted, #7A7060);
  font-weight: 400;
  line-height: 1.5;
}
.rg-cl-meta-row span {
  white-space: nowrap;
  overflow: hidden;
  text-overflow: ellipsis;
}
.rg-cl-link-plain {
  color: var(--rg-muted); text-decoration: none;
  white-space: nowrap; overflow: hidden; text-overflow: ellipsis;
  transition: color 0.2s;
}
.rg-cl-link-plain:hover { color: var(--rg-gold); }
.rg-cl-link-web {
  color: var(--rg-gold); text-decoration: none;
  font-weight: 500;
  white-space: nowrap; overflow: hidden; text-overflow: ellipsis;
  transition: opacity 0.2s;
}
.rg-cl-link-web:hover { opacity: 0.75; }
.rg-cl-na {
  font-style: italic;
  opacity: 0.5;
}

/* ── Gold rule ───────────────────────────────────────────────────── */
.rg-gold-rule {
  width: 36px; height: 1.5px;
  background: var(--rg-gold); margin: 16px 0;
}

/* ── CTA Banner ──────────────────────────────────────────────────── */
.rg-cta-banner {
  background: linear-gradient(135deg, var(--rg-gold) 0%, #9A7218 100%);
  padding: 64px clamp(20px,6vw,80px); text-align: center;
}
.rg-cta-inner { max-width: 600px; margin: 0 auto; }
.rg-cta-title {
  font-family: 'Cormorant Garamond', serif;
  font-size: clamp(1.6rem,3.5vw,2.4rem); font-weight: 300;
  color: #fff; margin-bottom: 14px;
}
.rg-cta-sub {
  color: rgba(255,255,255,0.78); font-size: 0.92rem;
  font-weight: 300; line-height: 1.75; margin-bottom: 28px;
}
.rg-btn-gold {
  display: inline-flex; align-items: center; gap: 6px;
  background: #fff; color: var(--rg-gold);
  padding: 14px 34px; font-size: 0.78rem; font-weight: 600;
  letter-spacing: 0.1em; text-transform: uppercase;
  border-radius: 2px; text-decoration: none;
  transition: background 0.3s, transform 0.2s;
}
.rg-btn-gold:hover { background: var(--rg-gold-pale); transform: translateY(-2px); }

/* ── Reveal animation ────────────────────────────────────────────── */
.rg-reveal {
  opacity: 0;
  transform: translateY(28px);
  transition: opacity 0.7s ease, transform 0.7s ease;
}
.rg-reveal.rg-visible {
  opacity: 1;
  transform: translateY(0);
}

/* ── Responsive ──────────────────────────────────────────────────── */
@media (max-width: 900px) {
  .rg-cl-provide-strip {
    grid-template-columns: 1fr;
    gap: 16px;
  }
}
@media (max-width: 768px) {
  .rg-cl-grid {
    grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
    gap: 14px;
  }
}
@media (max-width: 480px) {
  .rg-cl-grid {
    grid-template-columns: 1fr;
    gap: 12px;
  }
  .rg-cl-card {
    padding: 16px 18px;
    gap: 14px;
  }
  .rg-cl-logo-wrap {
    width: 52px; height: 52px; min-width: 52px;
  }
  .rg-cl-name { font-size: 1.02rem; }
  .rg-cl-meta-row { font-size: 0.72rem; }
}
</style>

<!-- ══ REVEAL SCRIPT ══════════════════════════ -->
<script>
(function() {
  var els = document.querySelectorAll('.rg-reveal');
  if (!('IntersectionObserver' in window)) {
    els.forEach(function(el) { el.classList.add('rg-visible'); });
    return;
  }
  var obs = new IntersectionObserver(function(entries) {
    entries.forEach(function(entry) {
      if (entry.isIntersecting) {
        entry.target.classList.add('rg-visible');
        obs.unobserve(entry.target);
      }
    });
  }, { threshold: 0.08, rootMargin: '0px 0px -40px 0px' });
  els.forEach(function(el) { obs.observe(el); });
})();
</script>
<?php include 'footer.php'; ?>
</body>
</html>

