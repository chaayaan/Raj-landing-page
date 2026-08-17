<?php
// ── Load products from JSON ──────────────────────────────────────────────────
$products_json = file_get_contents(__DIR__ . '/products.json');
$products      = json_decode($products_json, true);

// ── Group products by category ───────────────────────────────────────────────
$categories = [];
foreach ($products as $product) {
    $cat = $product['category'];
    if (!isset($categories[$cat])) {
        $categories[$cat] = [];
    }
    $categories[$cat][] = $product;
}

// ── Category display meta (label, heading, subheading, description) ──────────
$category_meta = [
    'coating' => [
        'label'   => 'Coating Thickness',
        'heading' => 'Measure Every <em>Layer</em> with Precision',
        'desc'    => "From dry film to X-ray fluorescence — Fischer's coating thickness instruments cover every method, every substrate, every application.",
    ],
    'gold' => [
        'label'   => 'Gold &amp; Jewellery Testing',
        'heading' => 'Certified <em>Gold</em> Purity Testing',
        'desc'    => "Trusted by Bangladesh's leading jewellers and gold testing centres — Fischer's gold testing solutions deliver unmatched accuracy and speed.",
    ],
    'material' => [
        'label'   => 'Material Analysis',
        'heading' => 'Advanced <em>Material</em> Testing',
        'desc'    => 'Comprehensive material characterization for R&amp;D, quality control, and manufacturing — from hardness to elemental composition.',
    ],
    'other' => [
        'label'   => 'Other Products',
        'heading' => 'More <em>Precision</em> Instruments',
        'desc'    => 'Additional high-quality measurement instruments for specialised applications.',
    ],
];

// ── Delay classes for card stagger animation ─────────────────────────────────
$delay_classes = ['', 'rg-d1', 'rg-d2', 'rg-d3', 'rg-d4'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Products – Raj Aiswari | Fischer Measurement Technologies Bangladesh</title>
  <link rel="icon" type="image/png" href="favicon.png">
  <link rel="apple-touch-icon" href="favicon.png">
  <meta name="theme-color" content="#B8881E">
  <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,600;1,300;1,400&family=Outfit:wght@300;400;500;600&display=swap" rel="stylesheet">
</head>
<body>

<?php include 'header.php'; ?>

<!-- ══ PAGE HERO ══════════════════════════════ -->
<section class="rg-page-hero">
  <div class="rg-page-hero-content">
    <div class="rg-eyebrow rg-reveal" style="justify-content:center;">Fischer Measurement Technologies</div>
    <h1 class="rg-section-title rg-reveal" style="color:#FDFAF4;text-align:center;">Our <em>Products</em></h1>
    <p class="rg-page-hero-sub rg-reveal">World-class precision instruments for gold testing, coating measurement, and material analysis — brought to Bangladesh since 1998.</p>
  </div>
</section>

<!-- ══ CATEGORY FILTER ════════════════════════ -->
<div class="rg-filter-bar rg-reveal">
  <button class="rg-filter-btn rg-filter-active" data-filter="all">All Products</button>
  <?php foreach (array_keys($category_meta) as $cat_key): ?>
    <?php if (isset($categories[$cat_key])): // only show button if category has products ?>
    <button class="rg-filter-btn" data-filter="<?= htmlspecialchars($cat_key) ?>">
      <?= $category_meta[$cat_key]['label'] ?>
    </button>
    <?php endif; ?>
  <?php endforeach; ?>
</div>

<!-- ══ PRODUCTS ═══════════════════════════════ -->
<main class="rg-section" style="padding-top:36px;">

<?php foreach ($category_meta as $cat_key => $meta): ?>
  <?php if (empty($categories[$cat_key])) continue; // skip empty categories ?>

  <div class="rg-cat-block rg-reveal" data-cat="<?= htmlspecialchars($cat_key) ?>">

    <!-- Category Header -->
    <div class="rg-cat-header rg-reveal">
      <div class="rg-eyebrow"><?= $meta['label'] ?></div>
      <h2 class="rg-section-title"><?= $meta['heading'] ?></h2>
      <div class="rg-gold-rule"></div>
      <p class="rg-cat-desc"><?= $meta['desc'] ?></p>
    </div>

    <!-- Product Cards Grid -->
    <div class="rg-pg-grid">
      <?php foreach ($categories[$cat_key] as $i => $p): ?>
        <?php $delay = $delay_classes[min($i, count($delay_classes) - 1)]; ?>

        <div class="rg-pg-card rg-reveal <?= $delay ?>"
             data-id="<?= (int)$p['id'] ?>"
             data-name="<?= htmlspecialchars($p['name']) ?>"
             data-cat-label="<?= htmlspecialchars($p['category_label']) ?>"
             data-desc="<?= htmlspecialchars($p['description']) ?>"
             data-img="<?= htmlspecialchars($p['image']) ?>">

          <div class="rg-pg-img-wrap">
            <img src="<?= htmlspecialchars($p['image']) ?>"
                 alt="<?= htmlspecialchars($p['name']) ?>"
                 width="300" height="300">
            <div class="rg-pg-hover-actions">
              <button class="rg-pg-quick-view" aria-label="Quick view">
                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                  <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"/>
                  <circle cx="12" cy="12" r="3"/>
                </svg>
                Quick View
              </button>
              <a href="index.php#contact" class="rg-pg-inquire">Inquire</a>
            </div>
          </div>

          <div class="rg-pg-body">
            <span class="rg-pg-cat-tag"><?= htmlspecialchars($p['category_label']) ?></span>
            <h3 class="rg-pg-name"><?= htmlspecialchars($p['name']) ?></h3>
            <p class="rg-pg-short-desc"><?= htmlspecialchars($p['short_desc']) ?></p>
          </div>

        </div>
      <?php endforeach; ?>
    </div><!-- /.rg-pg-grid -->

  </div><!-- /.rg-cat-block -->

<?php endforeach; ?>

</main>

<!-- ══ CTA BANNER ══════════════════════════════ -->
<section class="rg-cta-banner rg-reveal">
  <div class="rg-cta-inner">
    <h2 class="rg-cta-title">Can't find what you're looking for?</h2>
    <p class="rg-cta-sub">Contact us — we represent 8+ global technology brands and can source the right instrument for your specific application.</p>
    <a href="index.php#contact" class="rg-btn-gold">Get in Touch →</a>
  </div>
</section>

<!-- ══ QUICK VIEW MODAL ════════════════════════ -->
<div class="rg-modal-backdrop" id="rgModalBackdrop">
  <div class="rg-modal" id="rgModal" role="dialog" aria-modal="true">
    <button class="rg-modal-close" id="rgModalClose" aria-label="Close">
      <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round">
        <line x1="18" y1="6" x2="6" y2="18"/><line x1="6" y1="6" x2="18" y2="18"/>
      </svg>
    </button>
    <div class="rg-modal-inner">
      <div class="rg-modal-img-wrap">
        <img id="rgModalImg" src="" alt="" width="400" height="400">
      </div>
      <div class="rg-modal-content">
        <span class="rg-modal-tag" id="rgModalTag"></span>
        <h2 class="rg-modal-title" id="rgModalTitle"></h2>
        <div class="rg-gold-rule"></div>
        <p class="rg-modal-desc" id="rgModalDesc"></p>
        <div class="rg-modal-actions">
          <a href="https://wa.me/8801716469866" target="_blank" rel="noopener" class="rg-modal-btn-wa">
            <svg width="15" height="15" viewBox="0 0 24 24" fill="white">
              <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/>
            </svg>
            Ask on WhatsApp
          </a>
        </div>
      </div>
    </div>
  </div>
</div>

<?php include 'footer.php'; ?>

<!-- ========== PRODUCTS PAGE CSS ========== -->
<style>
/* ── Page Hero ───────────────────────────────── */
.rg-page-hero {
  min-height: 280px;
  padding: calc(var(--rg-nav-h) + 48px) clamp(20px,6vw,80px) 56px;
  background: linear-gradient(135deg, var(--rg-dark) 0%, #2e2820 100%);
  display: flex; align-items: center; justify-content: center; text-align: center;
  position: relative; overflow: hidden;
}
.rg-page-hero::before {
  content: ''; position: absolute; inset: 0;
  background: radial-gradient(ellipse at center, rgba(184,136,30,0.15) 0%, transparent 70%);
}
.rg-page-hero-content { position: relative; z-index: 1; max-width: 700px; }
.rg-page-hero-sub { color: rgba(253,250,244,0.6); font-size: 0.95rem; font-weight: 300; line-height: 1.75; margin-top: 12px; }

/* ── Filter Bar ──────────────────────────────── */
.rg-filter-bar {
  display: flex; flex-wrap: wrap; gap: 8px; justify-content: center;
  padding: 28px clamp(20px,6vw,80px) 0;
  background: var(--rg-bg);
}
.rg-filter-btn {
  padding: 7px 18px; border: 1.5px solid var(--rg-gold-border);
  background: var(--rg-white); color: var(--rg-muted);
  font-family: 'Outfit', sans-serif; font-size: 0.72rem; font-weight: 500;
  letter-spacing: 0.08em; text-transform: uppercase; cursor: pointer;
  border-radius: 2px; transition: all 0.22s;
}
.rg-filter-btn:hover { border-color: var(--rg-gold); color: var(--rg-gold); background: var(--rg-gold-pale); }
.rg-filter-btn.rg-filter-active { background: var(--rg-gold); color: #fff; border-color: var(--rg-gold); }

/* ── Category Block ──────────────────────────── */
.rg-cat-block { margin-bottom: 64px; }
.rg-cat-block.rg-hidden { display: none; }
.rg-cat-header { margin-bottom: 28px; max-width: 640px; }
.rg-cat-desc { color: var(--rg-muted); font-size: 0.9rem; font-weight: 300; line-height: 1.75; margin-top: 14px; }

/* ── Product Grid ────────────────────────────── */
.rg-pg-grid {
  display: grid;
  grid-template-columns: repeat(5, 1fr);
  gap: 16px;
}

/* ── Product Card ────────────────────────────── */
.rg-pg-card {
  background: var(--rg-white);
  border: 1px solid var(--rg-gold-border);
  border-radius: 8px; overflow: hidden;
  cursor: pointer; transition: box-shadow 0.25s, transform 0.25s;
}
.rg-pg-card:hover { box-shadow: 0 8px 32px rgba(184,136,30,0.13); transform: translateY(-3px); }

.rg-pg-img-wrap { position: relative; aspect-ratio: 1/1; overflow: hidden; background: var(--rg-bg2); }
.rg-pg-img-wrap img { width: 100%; height: 100%; object-fit: cover; transition: transform 0.4s; }
.rg-pg-card:hover .rg-pg-img-wrap img { transform: scale(1.05); }

.rg-pg-hover-actions {
  position: absolute; inset: 0;
  background: rgba(26,22,15,0.55);
  display: flex; flex-direction: column; align-items: center; justify-content: center;
  gap: 8px; opacity: 0; transition: opacity 0.25s;
}
.rg-pg-card:hover .rg-pg-hover-actions { opacity: 1; }

.rg-pg-quick-view {
  display: inline-flex; align-items: center; gap: 5px;
  background: rgba(255,255,255,0.95); color: var(--rg-dark);
  padding: 7px 14px; font-size: 0.68rem; font-weight: 600;
  letter-spacing: 0.07em; text-transform: uppercase;
  border: none; border-radius: 2px; cursor: pointer;
  transition: background 0.2s;
}
.rg-pg-quick-view:hover { background: var(--rg-gold); color: #fff; }

.rg-pg-inquire {
  display: inline-block; background: var(--rg-gold); color: #fff;
  padding: 7px 14px; font-size: 0.68rem; font-weight: 600;
  letter-spacing: 0.07em; text-transform: uppercase;
  border-radius: 2px; transition: background 0.2s;
}
.rg-pg-inquire:hover { background: #9A7218; }

.rg-pg-body { padding: 12px 13px 14px; }
.rg-pg-cat-tag {
  display: inline-block; font-size: 0.58rem; font-weight: 700;
  letter-spacing: 0.16em; text-transform: uppercase;
  color: var(--rg-gold); padding: 2px 7px;
  background: var(--rg-gold-pale); border: 1px solid var(--rg-gold-border);
  border-radius: 2px; margin-bottom: 6px;
}
.rg-pg-name {
  font-family: 'Cormorant Garamond', serif;
  font-size: clamp(0.9rem, 1.5vw, 1.05rem); font-weight: 600;
  color: var(--rg-dark); line-height: 1.3; margin-bottom: 4px;
}
.rg-pg-short-desc { color: var(--rg-muted); font-size: 0.75rem; font-weight: 300; line-height: 1.6; }

/* ── Stagger delay helpers ───────────────────── */
.rg-d1 { transition-delay: 0.07s; }
.rg-d2 { transition-delay: 0.14s; }
.rg-d3 { transition-delay: 0.21s; }
.rg-d4 { transition-delay: 0.28s; }

/* ── Modal ───────────────────────────────────── */
.rg-modal-backdrop {
  position: fixed; inset: 0; z-index: 9000;
  background: rgba(26,22,15,0.72); backdrop-filter: blur(4px);
  display: flex; align-items: center; justify-content: center;
  opacity: 0; pointer-events: none; transition: opacity 0.3s;
}
.rg-modal-backdrop.rg-modal-open { opacity: 1; pointer-events: all; }

.rg-modal {
  background: var(--rg-white); border-radius: 14px;
  max-width: 680px; width: calc(100% - 32px);
  box-shadow: 0 24px 80px rgba(0,0,0,0.3);
  position: relative; overflow: hidden;
  transform: translateY(20px); transition: transform 0.3s;
}
.rg-modal-backdrop.rg-modal-open .rg-modal { transform: translateY(0); }

.rg-modal-close {
  position: absolute; top: 14px; right: 14px; z-index: 1;
  width: 32px; height: 32px; border-radius: 50%;
  border: 1.5px solid var(--rg-gold-border); background: var(--rg-white);
  display: flex; align-items: center; justify-content: center;
  cursor: pointer; color: var(--rg-muted); transition: all 0.2s;
}
.rg-modal-close:hover { background: var(--rg-gold); color: #fff; border-color: var(--rg-gold); }

.rg-modal-inner { display: grid; grid-template-columns: 240px 1fr; gap: 0; }
.rg-modal-img-wrap {
  width: 100%; aspect-ratio: 1/1; overflow: hidden;
  border-radius: 12px 0 0 12px; background: var(--rg-bg2); flex-shrink: 0;
}
.rg-modal-img-wrap img { width: 100%; height: 100%; object-fit: cover; }
.rg-modal-content { padding: 32px 28px; display: flex; flex-direction: column; justify-content: center; }

.rg-modal-tag {
  display: inline-block; font-size: 0.6rem; font-weight: 700;
  letter-spacing: 0.18em; text-transform: uppercase;
  color: var(--rg-gold); padding: 3px 9px;
  background: var(--rg-gold-pale); border: 1px solid var(--rg-gold-border);
  border-radius: 2px; margin-bottom: 12px;
}
.rg-modal-title {
  font-family: 'Cormorant Garamond', serif;
  font-size: clamp(1.3rem, 3vw, 1.8rem); font-weight: 600;
  color: var(--rg-dark); line-height: 1.2; margin-bottom: 4px;
}
.rg-modal-desc {
  color: var(--rg-muted); font-size: 0.88rem;
  font-weight: 300; line-height: 1.85; margin-bottom: 24px;
}
.rg-modal-actions { display: flex; gap: 10px; flex-wrap: wrap; }
.rg-modal-btn-wa {
  display: inline-flex; align-items: center; gap: 7px;
  background: #25D366; color: #fff;
  padding: 11px 22px; font-size: 0.76rem; font-weight: 600;
  letter-spacing: 0.08em; text-transform: uppercase;
  border-radius: 3px; transition: background 0.2s, transform 0.2s;
}
.rg-modal-btn-wa:hover { background: #128C7E; transform: translateY(-1px); }

/* ── CTA Banner ──────────────────────────────── */
.rg-cta-banner {
  background: linear-gradient(135deg, var(--rg-gold) 0%, #9A7218 100%);
  padding: 60px clamp(20px,6vw,80px); text-align: center;
}
.rg-cta-inner { max-width: 600px; margin: 0 auto; }
.rg-cta-title { font-family: 'Cormorant Garamond', serif; font-size: clamp(1.6rem, 3.5vw, 2.4rem); font-weight: 300; color: #fff; margin-bottom: 12px; }
.rg-cta-sub { color: rgba(255,255,255,0.75); font-size: 0.92rem; font-weight: 300; line-height: 1.7; margin-bottom: 28px; }
.rg-cta-banner .rg-btn-gold { background: #fff; color: var(--rg-gold); }
.rg-cta-banner .rg-btn-gold:hover { background: var(--rg-gold-pale); }

/* ── Responsive ──────────────────────────────── */
@media (max-width: 1100px) { .rg-pg-grid { grid-template-columns: repeat(4, 1fr); gap: 12px; } }
@media (max-width: 900px) {
  .rg-pg-grid { grid-template-columns: repeat(3, 1fr); gap: 12px; }
  .rg-modal-inner { grid-template-columns: 1fr; }
  .rg-modal-img-wrap { border-radius: 12px 12px 0 0; aspect-ratio: 16/9; }
  .rg-modal-content { padding: 20px; }
}
@media (max-width: 600px) {
  .rg-pg-grid { grid-template-columns: repeat(2, 1fr); gap: 10px; }
  .rg-filter-bar { padding: 20px 16px 0; gap: 6px; }
  .rg-filter-btn { padding: 6px 12px; font-size: 0.66rem; }
  .rg-pg-body { padding: 9px 10px 11px; }
  .rg-pg-name { font-size: 0.82rem; }
  .rg-pg-short-desc { display: none; }
}
</style>

<!-- ========== PAGE JS ========== -->
<script>
(function () {

  /* ── Category filter ── */
  var btns   = document.querySelectorAll('.rg-filter-btn');
  var blocks = document.querySelectorAll('.rg-cat-block');

  btns.forEach(function (btn) {
    btn.addEventListener('click', function () {
      btns.forEach(function (b) { b.classList.remove('rg-filter-active'); });
      btn.classList.add('rg-filter-active');
      var filter = btn.getAttribute('data-filter');
      blocks.forEach(function (block) {
        if (filter === 'all' || block.getAttribute('data-cat') === filter) {
          block.classList.remove('rg-hidden');
        } else {
          block.classList.add('rg-hidden');
        }
      });
    });
  });

  /* ── Quick View Modal ── */
  var backdrop   = document.getElementById('rgModalBackdrop');
  var modalImg   = document.getElementById('rgModalImg');
  var modalTag   = document.getElementById('rgModalTag');
  var modalTitle = document.getElementById('rgModalTitle');
  var modalDesc  = document.getElementById('rgModalDesc');
  var closeBtn   = document.getElementById('rgModalClose');

  function openModal(card) {
    modalImg.src            = card.getAttribute('data-img') || '';
    modalImg.alt            = card.getAttribute('data-name') || '';
    modalTag.textContent    = card.getAttribute('data-cat-label') || '';
    modalTitle.textContent  = card.getAttribute('data-name') || '';
    modalDesc.textContent   = card.getAttribute('data-desc') || '';
    backdrop.classList.add('rg-modal-open');
    document.body.style.overflow = 'hidden';
  }
  function closeModal() {
    backdrop.classList.remove('rg-modal-open');
    document.body.style.overflow = '';
  }

  document.querySelectorAll('.rg-pg-quick-view').forEach(function (btn) {
    btn.addEventListener('click', function (e) {
      e.stopPropagation();
      openModal(btn.closest('.rg-pg-card'));
    });
  });

  document.querySelectorAll('.rg-pg-card').forEach(function (card) {
    card.addEventListener('click', function (e) {
      if (e.target.closest('.rg-pg-inquire')) return;
      openModal(card);
    });
  });

  if (closeBtn) closeBtn.addEventListener('click', closeModal);
  backdrop.addEventListener('click', function (e) {
    if (e.target === backdrop) closeModal();
  });
  document.addEventListener('keydown', function (e) {
    if (e.key === 'Escape') closeModal();
  });

})();
</script>
</body>
</html>