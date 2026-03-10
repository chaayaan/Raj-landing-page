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

<?php
/* ══════════════════════════════════════════════════════════
   EMPLOYEE DATA
   Add/edit employees here.
   photo → filename inside "employee-id/" folder (e.g. emp001.jpg)
   Supported extensions: jpg, jpeg, png, webp
══════════════════════════════════════════════════════════ */
$employees = [
  [
    'id'         => 'RAJ-001',
    'name'       => 'Mohammad Rafiqul Islam',
    'title'      => 'Managing Director',
    'department' => 'Management',
    'photo'      => 'emp001.jpg',
  ],
  [
    'id'         => 'RAJ-002',
    'name'       => 'Nusrat Jahan',
    'title'      => 'Senior Sales Executive',
    'department' => 'Sales',
    'photo'      => 'emp002.jpg',
  ],
  [
    'id'         => 'RAJ-003',
    'name'       => 'Kamal Hossain',
    'title'      => 'Lead Technician',
    'department' => 'Service & Maintenance',
    'photo'      => 'emp003.jpg',
  ],
  [
    'id'         => 'RAJ-004',
    'name'       => 'Fatema Begum',
    'title'      => 'Accounts Officer',
    'department' => 'Finance',
    'photo'      => 'emp004.jpg',
  ],
  [
    'id'         => 'RAJ-005',
    'name'       => 'Ariful Islam',
    'title'      => 'Field Service Engineer',
    'department' => 'Service & Maintenance',
    'photo'      => 'emp005.jpg',
  ],
  [
    'id'         => 'RAJ-006',
    'name'       => 'Shahinur Rahman',
    'title'      => 'Sales Representative',
    'department' => 'Sales',
    'photo'      => 'emp006.jpg',
  ],
  [
    'id'         => 'RAJ-007',
    'name'       => 'Rezaul Karim',
    'title'      => 'Software Developer',
    'department' => 'IT & Software',
    'photo'      => 'emp007.jpg',
  ],
  [
    'id'         => 'RAJ-008',
    'name'       => 'Sumaiya Akter',
    'title'      => 'HR Officer',
    'department' => 'Human Resources',
    'photo'      => 'emp008.jpg',
  ],
];

/* Department colour pairs [dark-bg, gold-accent] */
$dept_colors = [
  'Management'            => ['#1C1A16', '#D4A83A'],
  'Sales'                 => ['#0f2340', '#4A90D9'],
  'Service & Maintenance' => ['#0f2318', '#3DAF72'],
  'Finance'               => ['#1f1030', '#9B6FD4'],
  'IT & Software'         => ['#0d1f2d', '#38BDF8'],
  'Human Resources'       => ['#2a1018', '#E87C6A'],
];
$default_colors = ['#1C1A16', '#B8881E'];

function get_dept_colors($dept, $map, $default) {
  return isset($map[$dept]) ? $map[$dept] : $default;
}

/* Get unique departments for filter */
$departments = array_values(array_unique(array_column($employees, 'department')));
?>

<!-- ══ PAGE HERO ══════════════════════════════ -->
<section class="rg-page-hero">
  <div class="rg-page-hero-content">
    <div class="rg-eyebrow rg-reveal" style="justify-content:center;">Raj Aiswari Group</div>
    <h1 class="rg-section-title rg-reveal" style="color:#FDFAF4;text-align:center;">Our <em>Team</em></h1>
    <p class="rg-page-hero-sub rg-reveal">The dedicated people behind Bangladesh's most trusted gold testing and measurement company.</p>
  </div>
</section>

<!-- ══ DEPARTMENT FILTER ══════════════════════ -->
<div class="rg-emp-filterwrap rg-reveal">
  <div class="rg-emp-container">
    <div class="rg-emp-filterbar">
      <button class="rg-emp-filter rg-emp-filter-active" data-dept="all">
        All Staff
        <span class="rg-emp-filter-count"><?php echo count($employees); ?></span>
      </button>
      <?php foreach ($departments as $d):
        $cnt = count(array_filter($employees, fn($e) => $e['department'] === $d));
      ?>
      <button class="rg-emp-filter" data-dept="<?php echo htmlspecialchars($d); ?>">
        <?php echo htmlspecialchars($d); ?>
        <span class="rg-emp-filter-count"><?php echo $cnt; ?></span>
      </button>
      <?php endforeach; ?>
    </div>
  </div>
</div>

<!-- ══ ID CARDS ════════════════════════════════ -->
<section class="rg-section rg-emp-section" style="padding-top:44px; padding-bottom:80px;">
  <div class="rg-emp-container">
    <div class="rg-emp-grid">

    <?php foreach ($employees as $idx => $emp):
      [$bg, $accent] = get_dept_colors($emp['department'], $dept_colors, $default_colors);
      $photo_path = 'employee-id/' . $emp['photo'];
      $has_photo  = file_exists($photo_path);

      /* Initials fallback */
      $words    = preg_split('/\s+/', trim($emp['name']));
      $initials = '';
      foreach ($words as $w) $initials .= strtoupper(mb_substr($w, 0, 1));
      $initials = mb_substr($initials, 0, 2);

      /* Stagger delay */
      $delay = ($idx % 5) * 0.07;

      /* Barcode bars — deterministic from ID */
      $bars = [];
      $seed = $emp['id'];
      for ($b = 0; $b < 32; $b++) {
        $c  = ord($seed[$b % strlen($seed)]);
        $c2 = ord($seed[($b + 3) % strlen($seed)]);
        $bars[] = [
          'w' => ($c % 2) + 1,
          'h' => (($c + $c2 * $b) % 14) + 8,
          'dark' => $b % 3 !== 2,
        ];
      }
    ?>

    <div class="rg-id-card rg-reveal"
         style="--delay:<?php echo $delay ?>s;"
         data-dept="<?php echo htmlspecialchars($emp['department']); ?>">

      <div class="rg-id-shell">

        <!-- ▸ TOP BAR ─ logo + company name -->
        <div class="rg-id-topbar" style="background:<?php echo $bg; ?>;">
          <div class="rg-id-brand">
            <img src="logo.jpg" alt="Raj Aiswari"
              onerror="this.style.display='none';document.getElementById('rg-brand-text-<?php echo $idx; ?>').style.display='block'">
            <span id="rg-brand-text-<?php echo $idx; ?>" class="rg-id-brand-text" style="display:none;">Raj Aiswari</span>
          </div>
          <span class="rg-id-company-tag" style="color:<?php echo $accent; ?>;">EMPLOYEE ID</span>
        </div>

        <!-- ▸ ACCENT LINE -->
        <div class="rg-id-accentline" style="background:linear-gradient(90deg,<?php echo $accent; ?> 0%,<?php echo $accent; ?>44 100%);"></div>

        <!-- ▸ MAIN BODY -->
        <div class="rg-id-main">

          <!-- Photo column -->
          <div class="rg-id-photo-col">
            <div class="rg-id-photo-frame" style="--accent:<?php echo $accent; ?>; --bg:<?php echo $bg; ?>;">
              <?php if ($has_photo): ?>
                <img src="<?php echo htmlspecialchars($photo_path); ?>"
                     alt="<?php echo htmlspecialchars($emp['name']); ?>"
                     class="rg-id-photo"
                     onerror="this.style.display='none';this.nextElementSibling.style.display='flex'">
                <div class="rg-id-initials-fb" style="background:<?php echo $bg; ?>;color:<?php echo $accent; ?>;display:none;">
                  <?php echo $initials; ?>
                </div>
              <?php else: ?>
                <div class="rg-id-initials-fb" style="background:<?php echo $bg; ?>;color:<?php echo $accent; ?>;">
                  <?php echo $initials; ?>
                </div>
              <?php endif; ?>
            </div>

            <!-- Dept chip below photo -->
            <div class="rg-id-dept" style="background:<?php echo $bg; ?>1a;color:<?php echo $bg; ?>;border-color:<?php echo $bg; ?>33;">
              <?php echo htmlspecialchars($emp['department']); ?>
            </div>
          </div>

          <!-- Info column -->
          <div class="rg-id-info-col">
            <div class="rg-id-id-num" style="color:<?php echo $accent; ?>;">
              <?php echo htmlspecialchars($emp['id']); ?>
            </div>
            <h3 class="rg-id-name"><?php echo htmlspecialchars($emp['name']); ?></h3>
            <div class="rg-id-divider" style="background:<?php echo $accent; ?>55;"></div>
            <div class="rg-id-role"><?php echo htmlspecialchars($emp['title']); ?></div>
          </div>

        </div>

        <!-- ▸ BARCODE FOOTER -->
        <div class="rg-id-footer" style="background:<?php echo $bg; ?>;">
          <div class="rg-id-barcode">
            <?php foreach ($bars as $bar): ?>
              <div style="width:<?php echo $bar['w']; ?>px;height:<?php echo $bar['h']; ?>px;background:<?php echo $bar['dark'] ? $accent : 'rgba(255,255,255,0.12)'; ?>;border-radius:0.5px;"></div>
            <?php endforeach; ?>
          </div>
          <div class="rg-id-footer-right">
            <span class="rg-id-footer-label" style="color:<?php echo $accent; ?>88;">RAJ AISWARI GROUP · BANGLADESH</span>
          </div>
        </div>

      </div><!-- .rg-id-shell -->
    </div><!-- .rg-id-card -->

    <?php endforeach; ?>

    </div><!-- .rg-emp-grid -->
  </div><!-- .rg-emp-container -->
</section>

<?php include 'footer.php'; ?>

<!-- ═══════════════════════════════════════════
     EMPLOYEES PAGE CSS
═══════════════════════════════════════════ -->
<style>

/* ── Page Hero ──────────────────────────────── */
.rg-page-hero {
  min-height: 280px;
  padding: calc(var(--rg-nav-h) + 52px) clamp(20px,6vw,80px) 60px;
  background: linear-gradient(135deg, var(--rg-dark) 0%, #2e2820 100%);
  display: flex; align-items: center; justify-content: center; text-align: center;
  position: relative; overflow: hidden;
}
.rg-page-hero::before {
  content:''; position:absolute; inset:0;
  background: radial-gradient(ellipse at center, rgba(184,136,30,.18) 0%, transparent 68%);
}
.rg-page-hero-content { position:relative; z-index:1; max-width:600px; }
.rg-page-hero-sub {
  color:rgba(253,250,244,.6); font-size:.95rem;
  font-weight:300; line-height:1.75; margin-top:12px;
}

/* ── Filter bar ─────────────────────────────── */
.rg-emp-filterwrap {
  background: var(--rg-bg);
  padding: 28px 0 0;
}
.rg-emp-filterbar {
  display:flex; flex-wrap:wrap; gap:8px;
}
.rg-emp-filter {
  display:inline-flex; align-items:center; gap:7px;
  padding:7px 16px; border:1.5px solid var(--rg-gold-border);
  background:var(--rg-white); color:var(--rg-muted);
  font-family:'Outfit',sans-serif; font-size:.72rem; font-weight:500;
  letter-spacing:.08em; text-transform:uppercase; cursor:pointer;
  border-radius:2px; transition:all .22s;
}
.rg-emp-filter:hover { border-color:var(--rg-gold); color:var(--rg-gold); background:var(--rg-gold-pale); }
.rg-emp-filter.rg-emp-filter-active { background:var(--rg-gold); color:#fff; border-color:var(--rg-gold); }
.rg-emp-filter-count {
  display:inline-flex; align-items:center; justify-content:center;
  width:18px; height:18px; border-radius:50%;
  font-size:.58rem; font-weight:700; background:rgba(0,0,0,.1);
}
.rg-emp-filter-active .rg-emp-filter-count { background:rgba(255,255,255,.25); }

/* ── Container ──────────────────────────────── */
.rg-emp-container {
  max-width: 1200px;
  margin: 0 auto;
  padding: 0 clamp(24px, 5vw, 60px);
}

/* ── Cards grid ─────────────────────────────── */
.rg-emp-grid {
  display:grid;
  grid-template-columns: repeat(4, 1fr);
  gap:24px;
}
.rg-id-card {
  /* CR80 landscape ratio: 85.6 ÷ 53.98 = 1.5857 ≈ 1.586 */
  aspect-ratio: 1.586 / 1;
  transition-delay: var(--delay, 0s);
}
.rg-id-card.rg-hidden { display:none; }

/* Shell — holds everything, the "card" surface */
.rg-id-shell {
  width:100%; height:100%;
  display:flex; flex-direction:column;
  background:#fff;
  border-radius:10px;
  overflow:hidden;
  box-shadow:
    0 1px 2px rgba(0,0,0,.06),
    0 6px 20px rgba(0,0,0,.1),
    0 0 0 1px rgba(0,0,0,.05);
  transition: transform .32s cubic-bezier(.22,.68,0,1.2), box-shadow .32s ease;
}
.rg-id-card:hover .rg-id-shell {
  transform: translateY(-7px) scale(1.012);
  box-shadow:
    0 2px 4px rgba(0,0,0,.07),
    0 18px 44px rgba(0,0,0,.16),
    0 0 0 1px rgba(0,0,0,.06);
}

/* Top bar */
.rg-id-topbar {
  display:flex; align-items:center; justify-content:space-between;
  padding:6px 11px; flex-shrink:0;
}
.rg-id-brand {
  display:flex; align-items:center; height:20px;
}
.rg-id-brand img {
  height:20px; width:auto; object-fit:contain;
  filter:brightness(0) invert(1); opacity:.88;
}
.rg-id-brand-text {
  font-family:'Cormorant Garamond',serif;
  font-size:.72rem; font-weight:600; letter-spacing:.06em;
  color:rgba(255,255,255,.88);
}
.rg-id-company-tag {
  font-size:.52rem; font-weight:700;
  letter-spacing:.2em; text-transform:uppercase;
}

/* Accent line */
.rg-id-accentline { height:2.5px; flex-shrink:0; }

/* Main body */
.rg-id-main {
  display:flex; align-items:center;
  gap:12px; padding:10px 12px 8px;
  flex:1; min-height:0; overflow:hidden;
}

/* Photo column */
.rg-id-photo-col {
  display:flex; flex-direction:column;
  align-items:center; gap:6px; flex-shrink:0;
}
.rg-id-photo-frame {
  position:relative;
  width:56px; height:56px;
  border-radius:6px;
  overflow:hidden;
  box-shadow:
    0 0 0 2px var(--accent),
    0 3px 10px rgba(0,0,0,.18);
}
.rg-id-photo {
  width:100%; height:100%; object-fit:cover; display:block;
}
.rg-id-initials-fb {
  width:100%; height:100%;
  display:flex; align-items:center; justify-content:center;
  font-family:'Cormorant Garamond',serif;
  font-size:1.3rem; font-weight:600; letter-spacing:.03em;
}

/* Department chip */
.rg-id-dept {
  font-size:.48rem; font-weight:700;
  letter-spacing:.1em; text-transform:uppercase;
  padding:2px 6px; border-radius:2px; border:1px solid;
  text-align:center; white-space:nowrap;
  max-width:64px; overflow:hidden; text-overflow:ellipsis;
}

/* Info column */
.rg-id-info-col {
  flex:1; min-width:0;
  display:flex; flex-direction:column; justify-content:center;
}
.rg-id-id-num {
  font-family:'Outfit',sans-serif;
  font-size:.55rem; font-weight:700;
  letter-spacing:.2em; text-transform:uppercase;
  margin-bottom:4px;
}
.rg-id-name {
  font-family:'Cormorant Garamond',serif;
  font-size:1rem; font-weight:600; line-height:1.2;
  color:var(--rg-dark); margin-bottom:6px;
  /* allow 2 lines, then ellipsis */
  display:-webkit-box; -webkit-line-clamp:2;
  -webkit-box-orient:vertical; overflow:hidden;
}
.rg-id-divider {
  height:1.5px; width:32px; border-radius:2px;
  margin-bottom:6px;
}
.rg-id-role {
  font-size:.68rem; font-weight:500; letter-spacing:.04em;
  color:var(--rg-muted); line-height:1.35;
  display:-webkit-box; -webkit-line-clamp:2;
  -webkit-box-orient:vertical; overflow:hidden;
}

/* Barcode footer */
.rg-id-footer {
  display:flex; align-items:center; justify-content:space-between;
  padding:4px 11px; flex-shrink:0;
}
.rg-id-barcode {
  display:flex; align-items:flex-end; gap:1.5px; height:18px;
}
.rg-id-footer-right { display:flex; flex-direction:column; align-items:flex-end; }
.rg-id-footer-label {
  font-size:.44rem; font-weight:700; letter-spacing:.14em; text-transform:uppercase;
}

/* ── Responsive ─────────────────────────────── */
@media (max-width: 1100px) {
  .rg-emp-grid { grid-template-columns: repeat(3, 1fr); gap:20px; }
}
@media (max-width: 700px) {
  .rg-emp-grid { grid-template-columns: repeat(2, 1fr); gap:14px; }
  .rg-id-photo-frame { width:48px; height:48px; }
  .rg-id-initials-fb { font-size:1.1rem; }
  .rg-id-name { font-size:.9rem; }
  .rg-id-role { font-size:.62rem; }
}
@media (max-width: 480px) {
  .rg-emp-grid { grid-template-columns: repeat(2, 1fr); gap:10px; }
  .rg-emp-container { padding: 0 16px; }
  .rg-emp-filterbar { gap:6px; }
  .rg-emp-filter { font-size:.65rem; padding:6px 10px; }
}
</style>

<!-- ═══════════════════════════════════════════
     FILTER JS
═══════════════════════════════════════════ -->
<script>
(function () {
  var btns  = document.querySelectorAll('.rg-emp-filter');
  var cards = document.querySelectorAll('.rg-id-card');

  btns.forEach(function (btn) {
    btn.addEventListener('click', function () {
      btns.forEach(function (b) { b.classList.remove('rg-emp-filter-active'); });
      btn.classList.add('rg-emp-filter-active');
      var dept = btn.getAttribute('data-dept');
      cards.forEach(function (card) {
        if (dept === 'all' || card.getAttribute('data-dept') === dept) {
          card.classList.remove('rg-hidden');
        } else {
          card.classList.add('rg-hidden');
        }
      });
    });
  });
})();
</script>

</body>
</html>