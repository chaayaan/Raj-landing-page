<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Our Team – Raj Aiswari | Fischer Measurement Technologies Bangladesh</title>
  <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,600;1,300;1,400&family=Outfit:wght@300;400;500;600&display=swap" rel="stylesheet">
  <link rel="icon" type="image/png" href="favicon.png">
  <link rel="apple-touch-icon" href="favicon.png">
  <meta name="theme-color" content="#B8881E">
</head>
<body>

<?php include 'header.php'; ?>

<!-- ══ PAGE HERO ══════════════════════════════ -->
<section class="rg-page-hero">
  <div class="rg-page-hero-content">
    <div class="rg-eyebrow rg-reveal" style="justify-content:center;">Raj Aiswari Group</div>
    <h1 class="rg-section-title rg-reveal" style="color:#FDFAF4;text-align:center;">Our <em>Team</em></h1>
    <p class="rg-page-hero-sub rg-reveal">The dedicated people behind Bangladesh's most trusted gold testing and measurement company.</p>
  </div>
</section>

<!-- ══ ID CARDS ════════════════════════════════ -->
<section class="rg-emp-section">
  <div class="rg-emp-container">
    <div class="rg-emp-grid">

      <?php
        $dir   = 'uploads/employees/';
        $exts  = ['png', 'jpg', 'jpeg', 'webp'];
        $files = [];

        if (is_dir($dir)) {
          foreach (scandir($dir) as $file) {
            $ext = strtolower(pathinfo($file, PATHINFO_EXTENSION));
            if (in_array($ext, $exts)) $files[] = $file;
          }
          natsort($files);
        }

        foreach ($files as $i => $file):
          $delay = ($i % 4) * 0.07;
      ?>
        <div class="rg-id-card rg-reveal" style="--delay:<?php echo $delay; ?>s;">
          <img src="<?php echo htmlspecialchars($dir . $file); ?>"
               alt="Employee ID Card"
               class="rg-id-img">
        </div>
      <?php endforeach; ?>

      <?php if (empty($files)): ?>
        <p style="color:var(--rg-muted);font-size:.9rem;grid-column:span 4;">
          No ID cards found. Add images to the <code>employee-id/</code> folder.
        </p>
      <?php endif; ?>

    </div>
  </div>
</section>

<?php include 'footer.php'; ?>

<style>
/* ── Page Hero ──────────────────────────────── */
.rg-page-hero {
  min-height: 280px;
  padding: calc(var(--rg-nav-h) + 52px) clamp(20px,6vw,80px) 60px;
  background: linear-gradient(135deg, var(--rg-dark) 0%, #2e2820 100%);
  display: flex; align-items: center; justify-content: center;
  position: relative; overflow: hidden;
}
.rg-page-hero::before {
  content:''; position:absolute; inset:0;
  background: radial-gradient(ellipse at center, rgba(184,136,30,.18) 0%, transparent 68%);
}
.rg-page-hero-content { position:relative; z-index:1; max-width:600px; text-align:center; }
.rg-page-hero-sub {
  color:rgba(253,250,244,.6); font-size:.95rem;
  font-weight:300; line-height:1.75; margin-top:12px;
}

/* ── Section & Container ────────────────────── */
.rg-emp-section {
  padding: 48px 0 80px;
  background: var(--rg-bg);
}
.rg-emp-container {
  max-width: 1200px;
  margin: 0 auto;
  padding: 0 clamp(24px, 5vw, 60px);
}

/* ── Grid — 4 per row ───────────────────────── */
.rg-emp-grid {
  display: grid;
  grid-template-columns: repeat(4, 1fr);
  gap: 24px;
}

/* ── ID Card — portrait 590×1004 (≈ 0.5876 : 1) ── */
.rg-id-card {
  aspect-ratio: 590 / 1004;   /* exact pixel ratio from design */
  border-radius: 10px;
  overflow: hidden;
  transition-delay: var(--delay, 0s);
  box-shadow:
    0 2px 6px rgba(0,0,0,.08),
    0 8px 24px rgba(0,0,0,.12);
  transition: transform .32s cubic-bezier(.22,.68,0,1.2),
              box-shadow .32s ease;
}
.rg-id-card:hover {
  transform: translateY(-6px) scale(1.015);
  box-shadow:
    0 4px 10px rgba(0,0,0,.1),
    0 20px 48px rgba(0,0,0,.18);
}
.rg-id-img {
  width: 100%; height: 100%;
  object-fit: cover; display: block;
}

/* ── Responsive ─────────────────────────────── */
@media (max-width: 1100px) {
  .rg-emp-grid { grid-template-columns: repeat(3, 1fr); gap: 20px; }
}
@media (max-width: 700px) {
  .rg-emp-grid { grid-template-columns: repeat(2, 1fr); gap: 14px; }
}
@media (max-width: 480px) {
  .rg-emp-grid { grid-template-columns: repeat(2, 1fr); gap: 10px; }
  .rg-emp-container { padding: 0 16px; }
}
</style>

</body>
</html>