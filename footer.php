<!-- ========== FOOTER ========== -->
<footer class="rg-footer">
  <div class="rg-footer-inner">
    <div class="rg-footer-brand">
      <img src="logo.jpg" alt="Raj Aiswari Gold" width="80" height="40" onerror="this.style.display='none'">
      <span class="rg-footer-brand-text">Raj Aiswari Gold</span>
    </div>
    <ul class="rg-footer-links">
      <li><a href="#home">Home</a></li>
      <li><a href="#about">About</a></li>
      <li><a href="#products">Products</a></li>
      <li><a href="#gallery">Gallery</a></li>
      <li><a href="#clients">Clients</a></li>
      <li><a href="#contact">Contact</a></li>
      <li><a href="https://www.fischerindia.co.in/" target="_blank">Fischer</a></li>
      <li><a href="employees.php">Employees</a></li>
      <li><a href="software.php">Software Services</a></li>
    </ul>
  </div>
  <div class="rg-footer-bottom">
    <span class="rg-footer-copy">&copy; <?php echo date('Y'); ?> Raj Aiswari Gold. All rights reserved.</span>
    <span class="rg-footer-credit">Fischer Measurement Technologies — Bangladesh</span>
  </div>
</footer>

<!-- ========== FOOTER SCOPED CSS ========== -->
<style>
.rg-footer { background: var(--rg-dark); padding: 44px clamp(20px, 6vw, 60px); }
.rg-footer-inner { display: flex; justify-content: space-between; align-items: center; flex-wrap: wrap; gap: 24px; margin-bottom: 28px; padding-bottom: 28px; border-bottom: 1px solid rgba(253,250,244,0.08); }
.rg-footer-brand { display: flex; align-items: center; gap: 10px; }
.rg-footer-brand img { width: 80px; height: 40px; object-fit: contain; }
.rg-footer-brand-text { font-family: 'Cormorant Garamond', serif; font-size: 1.2rem; color: var(--rg-gold-light); letter-spacing: 0.05em; }
.rg-footer-links { display: flex; gap: 20px; list-style: none; flex-wrap: wrap; }
.rg-footer-links a { color: rgba(253,250,244,0.4); font-size: 0.75rem; letter-spacing: 0.08em; transition: color 0.3s; }
.rg-footer-links a:hover { color: var(--rg-gold-light); }
.rg-footer-bottom { display: flex; justify-content: space-between; flex-wrap: wrap; gap: 8px; }
.rg-footer-copy   { font-size: 0.68rem; color: rgba(253,250,244,0.2); }
.rg-footer-credit { font-size: 0.68rem; color: rgba(253,250,244,0.2); }

@media (max-width: 900px) {
  .rg-footer-inner  { flex-direction: column; align-items: flex-start; }
  .rg-footer-bottom { flex-direction: column; }
}
@media (max-width: 600px) {
  .rg-footer-links { gap: 14px; }
}
</style>

<!-- ========== FOOTER JS ========== -->
<script>
(function () {

  /* ── Banner Slider ── */
  var slides = document.querySelectorAll('.rg-slide');
  var sdots  = document.querySelectorAll('.rg-sdot');
  var cur = 0, autoT;

  function slideTo(idx) {
    slides[cur].classList.remove('rg-active');
    sdots[cur].classList.remove('rg-active');
    cur = (idx + slides.length) % slides.length;
    slides[cur].classList.add('rg-active');
    sdots[cur].classList.add('rg-active');
  }
  function startAuto() { autoT = setInterval(function () { slideTo(cur + 1); }, 5000); }
  function resetAuto() { clearInterval(autoT); startAuto(); }

  var sliderNext = document.getElementById('rgSliderNext');
  var sliderPrev = document.getElementById('rgSliderPrev');
  if (sliderNext) sliderNext.addEventListener('click', function () { slideTo(cur + 1); resetAuto(); });
  if (sliderPrev) sliderPrev.addEventListener('click', function () { slideTo(cur - 1); resetAuto(); });
  sdots.forEach(function (d) {
    d.addEventListener('click', function () { slideTo(+d.getAttribute('data-i')); resetAuto(); });
  });
  if (slides.length) startAuto();

  /* ── Scroll Reveal ── */
  var revEls = document.querySelectorAll('.rg-reveal');
  var revObs = new IntersectionObserver(function (entries) {
    entries.forEach(function (e) {
      if (e.isIntersecting) {
        e.target.classList.add('rg-visible');
        e.target.classList.remove('rg-animate');
        revObs.unobserve(e.target);
      }
    });
  }, { threshold: 0, rootMargin: '0px 0px -30px 0px' });

  setTimeout(function () {
    revEls.forEach(function (el) {
      if (el.getBoundingClientRect().top > window.innerHeight) {
        el.classList.add('rg-animate');
        revObs.observe(el);
      }
    });
  }, 100);

  /* ── Counter animation ── */
  var cntObs = new IntersectionObserver(function (entries) {
    entries.forEach(function (e) {
      if (!e.isIntersecting) return;
      var el  = e.target;
      var suf = el.textContent.replace(/[0-9]/g, '');
      var num = parseInt(el.textContent);
      if (isNaN(num)) return;
      var t0 = null;
      (function tick(ts) {
        if (!t0) t0 = ts;
        var p = Math.min((ts - t0) / 1500, 1);
        el.textContent = Math.floor(p * num) + suf;
        if (p < 1) requestAnimationFrame(tick);
      })(performance.now());
      cntObs.unobserve(el);
    });
  }, { threshold: 0.5 });
  document.querySelectorAll('.rg-stat-num').forEach(function (s) { cntObs.observe(s); });

})();
</script>

</body>
</html>