<?php
require_once __DIR__ . '/navbar.php'; // must run before any output (starts the session)
$active = 'search';
?>
<!DOCTYPE html>
<html lang="<?php echo $lang; ?>" translate="no" class="notranslate">
<head>
<meta charset="UTF-8">
<meta name="google" content="notranslate">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no, viewport-fit=cover">
<title><?php echo htmlspecialchars($L['search_title'] . ' | ' . $L['brand']); ?></title>
<link rel="icon" type="image/png" href="../favicon.png">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700&family=Cormorant+Garamond:ital,wght@0,300;0,400;0,600;1,300;1,400&display=swap" rel="stylesheet">
<style>
<?php rg_navbar_css(); ?>

/* ---------- Search page ---------- */
.rg-page{ padding:16px 16px 8px; max-width:560px; margin:0 auto; }

.rg-search-title{
  font-family:'Cormorant Garamond',serif; font-size:1.4rem; font-weight:700;
  color:var(--rg-gold); text-align:center; margin-bottom:12px;
}
.rg-search-card{
  background:#fff; border:none; border-radius:14px;
  padding:14px; margin-bottom:14px; box-shadow:var(--rg-elev-1);
}
.rg-huid-label{
  display:none; flex-shrink:0; font-weight:700; font-size:.8rem;
  letter-spacing:.04em; color:var(--rg-gold);
}
.rg-search-row{ display:flex; gap:8px; align-items:center; }
.rg-search-input{
  flex:1; min-width:0; height:44px; padding:0 12px; border:1.5px solid var(--rg-gold-border);
  border-radius:10px; font-family:'Outfit',sans-serif; font-size:.9rem; letter-spacing:.04em;
  outline:none; transition:border-color .15s; background:#fff; color:var(--rg-text);
}
.rg-search-input:focus{ border-color:var(--rg-gold); }
.rg-search-btn, .rg-scan-btn{
  height:44px; padding:0 16px; border:none; border-radius:10px; font-weight:700; font-size:.85rem;
  cursor:pointer; white-space:nowrap; flex-shrink:0; display:flex; align-items:center; justify-content:center; gap:6px;
  box-shadow:var(--rg-elev-1); transition:box-shadow .15s ease, transform .1s ease, background .15s ease;
}
.rg-search-btn:active, .rg-scan-btn:active{ box-shadow:var(--rg-elev-1); transform:scale(.96); }
.rg-search-btn{ background:var(--rg-gold); color:#fff; }
.rg-search-btn:disabled{ background:#c9b98a; cursor:not-allowed; }
.rg-scan-btn{ background:#25D366; color:#fff; }
.rg-scan-btn:disabled{ background:#a9d9bd; cursor:not-allowed; }
.rg-search-hint{
  margin-top:10px; text-align:center; font-size:.72rem; color:var(--rg-muted);
}
.rg-loading{ text-align:center; color:var(--rg-muted); font-size:.85rem; margin-top:6px; }

@media (max-width:380px){
  .rg-huid-label{ display:inline-block; }
  .rg-search-btn .rg-btn-text, .rg-scan-btn .rg-btn-text{ display:none; }
  .rg-search-btn, .rg-scan-btn{ width:44px; padding:0; }
}

/* ---------- Initial info placeholder ---------- */
.rg-info-placeholder{
  display:flex; flex-direction:column; align-items:center; gap:10px;
  text-align:center; padding:26px 20px; opacity:.7;
}
.rg-info-placeholder svg{ color:var(--rg-gold); flex-shrink:0; }
.rg-info-placeholder p{ font-size:.82rem; line-height:1.65; color:var(--rg-muted); max-width:340px; }
.rg-info-placeholder p strong{ color:var(--rg-text); font-weight:600; }

/* ---------- Error card ---------- */
.rg-error-card{ text-align:center; padding:30px 20px; }
.rg-error-icon{ font-size:48px; margin-bottom:14px; }
.rg-error-card h2{ color:#dc2626; font-size:1.05rem; margin-bottom:8px; }
.rg-error-card p{ color:var(--rg-muted); font-size:.82rem; line-height:1.65; }

/* ---------- QR Scanner Modal ---------- */
.rg-scan-modal-overlay{
  display:none; position:fixed; inset:0; z-index:10000;
  background:rgba(10,10,10,0.88); align-items:center; justify-content:center; padding:16px;
}
.rg-scan-modal-overlay.rg-open{ display:flex; }
.rg-scan-modal-box{
  width:100%; max-width:360px; background:#fff; border-radius:14px; overflow:hidden;
  box-shadow:var(--rg-elev-8);
}
.rg-scan-modal-head{
  padding:14px 18px; display:flex; align-items:center; justify-content:space-between; background:var(--rg-dark);
}
.rg-scan-modal-title{ color:#fff; font-weight:600; font-size:.88rem; letter-spacing:.02em; }
.rg-scan-modal-close{
  background:none; border:none; color:#fff; font-size:1.4rem; line-height:1;
  cursor:pointer; padding:2px 6px; border-radius:6px; transition:background .15s;
}
.rg-scan-modal-close:active{ background:rgba(255,255,255,0.18); }
#rgQrReaderBox{ width:100%; background:#000; min-height:240px; }
#rgQrReaderBox video{ width:100%!important; }
.rg-scan-modal-msg{ padding:10px 18px; font-size:.78rem; text-align:center; min-height:20px; }
.rg-scan-modal-msg.rg-error{ color:#dc2626; }
.rg-scan-modal-msg.rg-info{ color:var(--rg-muted); }
.rg-scan-modal-hint{ padding:0 18px 16px; font-size:.7rem; color:var(--rg-muted); text-align:center; }

/* ---------- Report card ---------- */
.rg-report-wrapper{ width:100%; display:flex; justify-content:center; }
#rgResultArea{ width:100%; display:flex; align-items:flex-start; justify-content:center; }
.rg-scale-wrapper{ width:100%; max-width:100%; display:flex; justify-content:center; align-items:flex-start; overflow:hidden; }
.rg-scale-inner{ transform-origin:top left; }

.rg-report-card{
  width:680px; background:transparent; border:none; box-shadow:none;
  border-radius:10px; overflow:hidden; position:relative;
}
.rg-report-card.rg-hallmark{ width:750px; }
.rg-report-pad-bg{ position:absolute; inset:0; width:100%; height:100%; object-fit:fill; z-index:0; pointer-events:none; display:block; }
.rg-report-card-content{ position:relative; z-index:1; padding-top:90px; padding-bottom:70px; }

.rg-tunch-container{ padding:16px 28px 14px; background:#fff; position:relative; }
.rg-tunch-container::before{
  content:''; position:absolute; top:50%; left:50%; transform:translate(-50%,-50%) rotate(-25deg);
  width:200px; height:200px; background-size:contain; background-repeat:no-repeat; background-position:center;
  opacity:0.2; z-index:1; pointer-events:none;
}
.rg-tunch-container > *{ position:relative; z-index:2; }

.rg-report-header{ display:flex; justify-content:space-between; align-items:flex-start; }
.rg-customer-info{ flex:1; }
.rg-customer-info-line{ display:flex; font-size:15px; line-height:1.8; color:#000; font-weight:600; }
.rg-customer-info-line.rg-customer-name{ font-size:20px; font-weight:bold; margin-bottom:3px; }
.rg-info-label{ display:inline-block; min-width:120px; font-weight:600; }
.rg-info-colon{ display:inline-block; width:15px; text-align:center; }
.rg-info-value{ flex:1; font-weight:600; }
.rg-weight-conversion{ font-size:13px; color:#333; font-weight:600; margin-left:10px; }

.rg-qr-section{ width:100px; text-align:center; padding:5px; margin-left:15px; flex-shrink:0; }
.rg-qr-date{ font-size:11px; color:#000; font-weight:700; line-height:1.4; margin-top:5px; white-space:nowrap; font-family:'Times New Roman',Times,serif; }

.rg-dotted-line{ border-top:3px dotted #000; margin:6px 0; }

.rg-quality-info{
  font-size:22px; font-weight:bold; margin:5px 0; line-height:1.5;
  display:flex; justify-content:space-around; flex-wrap:wrap; gap:20px; color:#000;
}
.rg-quality-info span{ white-space:nowrap; }

.rg-composition-table{ width:100%; margin:2px 0 0; font-size:11px; line-height:1.1; border-collapse:collapse; }
.rg-composition-table td{ padding:1px 5px; font-weight:600; vertical-align:top; }
.rg-composition-table td.rg-element-name{ text-align:left; padding-right:3px; }
.rg-composition-table td.rg-element-colon{ text-align:center; padding:1px 2px; }
.rg-composition-table td.rg-element-value{ text-align:left; padding-left:3px; padding-right:15px; }

.rg-report-note{ font-size:11px; line-height:1.4; margin:4px 0 0; font-weight:600; color:#000; font-family:'Times New Roman',Times,serif; }

.rg-hallmark-info-section{ display:flex; justify-content:space-between; align-items:flex-start; padding:3px 8px; }
.rg-hallmark-left-info{ flex:1; line-height:1.2; }
.rg-hallmark-left-info .rg-customer-info-line{ font-size:15px; line-height:1.4; display:block; }
.rg-hallmark-left-info .rg-customer-info-line.rg-customer-name{ font-size:20px; font-weight:bold; margin-bottom:2px; }
.rg-hallmark-left-info .rg-info-label{ display:inline-block; min-width:110px; font-weight:600; }
.rg-hallmark-left-info .rg-info-colon{ margin:0 3px; }
.rg-hallmark-left-info .rg-info-value{ font-weight:600; }

.rg-main-box{ border:2.5px solid #000; display:flex; margin:0 8px 0; min-height:100px; }
.rg-checkbox-section{ flex:1; padding:8px 12px; display:grid; grid-template-columns:repeat(4,1fr); gap:5px 10px; align-content:center; }
.rg-checkbox-item{ display:flex; align-items:center; font-size:12px; line-height:1; font-weight:600; color:#000; }
.rg-checkbox-box{ width:14px; height:14px; border:2px solid #000; margin-right:4px; flex-shrink:0; display:flex; align-items:center; justify-content:center; font-size:12px; font-weight:bold; line-height:1; }
.rg-hallmark-section{ width:220px; border-left:2.5px solid #000; display:flex; flex-direction:column; }
.rg-hallmark-value-container{ flex:1; display:flex; align-items:center; justify-content:center; border-bottom:2.5px solid #000; padding:8px 12px; overflow:hidden; }
.rg-hallmark-value{ font-size:38px; font-weight:bold; line-height:1; color:#000; text-align:center; word-wrap:break-word; word-break:break-word; font-family:'Times New Roman',Times,serif; }
.rg-hallmark-label{ font-size:15px; font-weight:700; text-align:center; padding:4px; color:#000; line-height:1; font-family:'Times New Roman',Times,serif; }

*, *::before, *::after{ -webkit-user-select:none; -moz-user-select:none; -ms-user-select:none; }
.rg-report-card img{ pointer-events:none; -webkit-user-drag:none; }
</style>
</head>
<body oncontextmenu="return false;" oncopy="return false;" oncut="return false;" onpaste="return false;">

<?php rg_navbar_render(); ?>

<div class="rg-page">
    <div class="rg-search-title"><?php echo htmlspecialchars($L['search_title']); ?></div>

    <div class="rg-search-card">
        <div class="rg-search-row">
            <span class="rg-huid-label">HUID</span>
            <input type="text" id="rgHuidInput" class="rg-search-input" placeholder="<?php echo htmlspecialchars($L['search_placeholder']); ?>" maxlength="6">
            <button id="rgSearchBtn" class="rg-search-btn rg-ripple" title="<?php echo htmlspecialchars($L['search_btn']); ?>">
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="11" cy="11" r="8"/><path d="m21 21-4.3-4.3"/></svg>
                <span class="rg-btn-text"><?php echo htmlspecialchars($L['search_btn']); ?></span>
            </button>
            <button id="rgScanBtn" class="rg-scan-btn rg-ripple" title="<?php echo htmlspecialchars($L['scan_btn']); ?>">
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 7V5a2 2 0 0 1 2-2h2"/><path d="M17 3h2a2 2 0 0 1 2 2v2"/><path d="M21 17v2a2 2 0 0 1-2 2h-2"/><path d="M7 21H5a2 2 0 0 1-2-2v-2"/><rect x="7" y="7" width="10" height="10" rx="1"/></svg>
                <span class="rg-btn-text"><?php echo htmlspecialchars($L['scan_btn']); ?></span>
            </button>
        </div>
        <div class="rg-search-hint"><?php echo htmlspecialchars($L['search_hint']); ?></div>
    </div>

    <div id="rgResultArea"></div>
</div>

<!-- ══ QR SCANNER MODAL ══ -->
<div class="rg-scan-modal-overlay" id="rgScanModal">
    <div class="rg-scan-modal-box">
        <div class="rg-scan-modal-head">
            <span class="rg-scan-modal-title"><?php echo htmlspecialchars($L['scan_btn']); ?></span>
            <button class="rg-scan-modal-close" id="rgScanCloseBtn" aria-label="Close scanner">&times;</button>
        </div>
        <div id="rgQrReaderBox"></div>
        <div class="rg-scan-modal-msg rg-info" id="rgScanMsg"><?php echo htmlspecialchars($L['search_hint']); ?></div>
        <div class="rg-scan-modal-hint">Only valid Rajaiswari report QR codes will be accepted.</div>
    </div>
</div>

<?php rg_bottomnav_render(); ?>

<!-- ══ SCRIPTS ══ -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/qrcodejs/1.0.0/qrcode.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/html5-qrcode/2.3.8/html5-qrcode.min.js"></script>
<script>
<?php rg_navbar_js(); ?>
</script>
<script>
(function () {
    'use strict';

    // ═══ CONFIG: point these at your main domain / asset path ═══
    var API_URL    = 'https://app.rajaiswari.com/api_report_lookup.php';
    var ASSET_BASE = '../'; // report pad.png / Varifiedstamp.png live one level up (same as favicon.png)

    var input      = document.getElementById('rgHuidInput');
    var btn        = document.getElementById('rgSearchBtn');
    var resultArea = document.getElementById('rgResultArea');

    // Note: intentionally NOT forcing uppercase — HUID codes are case-sensitive
    // (charset includes both e.g. 'P' and 'p' as distinct symbols).
    var HUID_ALLOWED_CHARS = new Set('23456789ABCDEFGHJKLMNPQRSTUVWXYZabcdefghijkmnopqrstuvwxyz');

    input.addEventListener('keydown', function (e) { if (e.key === 'Enter') doSearch(); });
    input.addEventListener('input', function () {
        var cleaned = [...this.value].filter(function (ch) { return HUID_ALLOWED_CHARS.has(ch); }).join('');
        if (cleaned !== this.value) this.value = cleaned;
    });
    input.addEventListener('paste', function (e) {
        e.preventDefault();
        var pasted = (e.clipboardData || window.clipboardData).getData('text');
        var cleaned = [...pasted].filter(function (ch) { return HUID_ALLOWED_CHARS.has(ch); }).join('').slice(0, 6);
        var start = this.selectionStart, end = this.selectionEnd;
        this.value = this.value.slice(0, start) + cleaned + this.value.slice(end);
        this.dispatchEvent(new Event('input'));
    });
    btn.addEventListener('click', function () { doSearch(); });

    function escapeHtml(str) {
        var d = document.createElement('div');
        d.textContent = str == null ? '' : str;
        return d.innerHTML;
    }

    function convertGramToVoriAna(gram) {
        gram = parseFloat(gram);
        if (!gram || gram <= 0) return '';
        var tp = Math.round((gram / 11.664) * 16 * 6 * 10);
        var b = Math.floor(tp / 960), r1 = tp % 960;
        var a = Math.floor(r1 / 60), r2 = r1 % 60;
        var ro = Math.floor(r2 / 10), p = r2 % 10;
        return ' [V:' + b + ' A:' + a + ' R:' + ro + ' P:' + p + ']';
    }

    function doSearch(huidFromUrl) {
        var huid = (huidFromUrl || input.value).trim();
        input.value = huid;

        if (huid.length !== 6) {
            renderError('Please enter a valid 6-character HUID.');
            return;
        }

        btn.disabled = true;
        resultArea.innerHTML = '<div class="rg-loading"><?php echo htmlspecialchars($L['search_loading']); ?></div>';

        fetch(API_URL + '?huid=' + encodeURIComponent(huid))
            .then(function (res) { return res.json(); })
            .then(function (data) {
                if (!data.success) {
                    renderError(data.message || '<?php echo htmlspecialchars($L['search_not_found']); ?>');
                } else {
                    renderReport(data);
                    var newUrl = location.origin + location.pathname + '?huid=' + huid;
                    history.replaceState(null, '', newUrl);
                }
            })
            .catch(function () {
                renderError('Could not reach the verification server. Please try again.');
            })
            .finally(function () {
                btn.disabled = false;
            });
    }

    function renderInitialInfo() {
        resultArea.innerHTML =
            '<div class="rg-search-card rg-info-placeholder">' +
                '<svg width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">' +
                    '<path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10Z"/><path d="M9.5 12.5l1.8 1.8L15 10.5"/>' +
                '</svg>' +
                '<p><?php echo htmlspecialchars($L['search_initial_info']); ?></p>' +
            '</div>';
    }

    function renderError(msg) {
        resultArea.innerHTML =
            '<div class="rg-report-wrapper">' +
                '<div class="rg-search-card rg-error-card">' +
                    '<div class="rg-error-icon">❌</div>' +
                    '<h2><?php echo htmlspecialchars($L['search_not_found']); ?></h2>' +
                    '<p>' + escapeHtml(msg) + '</p>' +
                    '<p style="margin-top:10px;"><?php echo htmlspecialchars($L['search_try_again']); ?></p>' +
                '</div>' +
            '</div>';
    }

    function renderReport(d) {
        var verifyUrl = location.origin + location.pathname + '?huid=' + d.huid;
        var cardWidth = d.report_type === 'hallmark' ? 750 : 680;
        var innerHtml;

        if (d.report_type === 'hallmark') {
            var checkboxItems = ['anklet','bangle','bracelet','chain','ear chain','earrings','mantasha','necklace','nose pin','others','pendant','ring','shakha path','taira','tikli','watch'];
            var itemLower = (d.item_name || '').toLowerCase();
            var boxesHtml = checkboxItems.map(function (t) {
                var match = itemLower === t || itemLower.includes(' ' + t + ' ') || itemLower.startsWith(t + ' ') || itemLower.endsWith(' ' + t);
                var label = t.replace(/\b\w/g, function (c) { return c.toUpperCase(); });
                return '<div class="rg-checkbox-item" data-item="' + t + '"><div class="rg-checkbox-box">' + (match ? '✓' : '') + '</div><span>' + label + '</span></div>';
            }).join('');

            var photoBlock = d.images[0]
                ? '<div style="display:flex;gap:0;margin:6px 8px 4px;align-items:stretch;min-height:90px;">' +
                      '<div style="flex:0 0 58.333%;max-width:58.333%;display:flex;align-items:flex-end;padding-right:8px;">' +
                          '<img src="' + escapeHtml(d.images[0]) + '" alt="Sample photo" style="width:auto;height:105px;object-fit:contain;border-radius:4px;border:1px solid #ddd;">' +
                      '</div>' +
                      '<div style="flex:0 0 41.667%;max-width:41.667%;display:flex;flex-direction:column;justify-content:flex-end;">' +
                          '<div style="text-align:center;font-size:11px;font-weight:bold;color:#000;padding-bottom:2px;">Authorized Signature</div>' +
                      '</div>' +
                  '</div>'
                : '<div style="text-align:center;font-size:11px;font-weight:bold;color:#000;margin:6px 8px 4px;padding-bottom:2px;">Authorized Signature</div>';

            innerHtml =
                '<div style="background:transparent;position:relative;">' +
                    '<div style="position:absolute;top:50%;left:50%;transform:translate(-50%,-50%) rotate(-25deg);width:250px;height:250px;' +
                        'background-image:url(\'' + ASSET_BASE + 'Varifiedstamp.png\');background-size:contain;background-repeat:no-repeat;' +
                        'background-position:center;opacity:0.25;z-index:1;pointer-events:none;"></div>' +
                    '<div style="position:relative;z-index:2;">' +
                        '<div class="rg-hallmark-info-section">' +
                            '<div class="rg-hallmark-left-info">' +
                                '<div class="rg-customer-info-line rg-customer-name"><span>Customer Name</span><span class="rg-info-colon">:</span><span class="rg-info-value">' + escapeHtml(d.customer_name) + '</span></div>' +
                                '<div class="rg-customer-info-line"><span class="rg-info-label">Bill No</span><span class="rg-info-colon">:</span><span class="rg-info-value">' + escapeHtml(d.order_id) + '</span></div>' +
                                '<div class="rg-customer-info-line"><span class="rg-info-label">HUID</span><span class="rg-info-colon">:</span><span class="rg-info-value">' + escapeHtml(d.huid) + '</span></div>' +
                                '<div class="rg-customer-info-line"><span class="rg-info-label">Quantity</span><span class="rg-info-colon">:</span><span class="rg-info-value">' + escapeHtml(d.quantity || '1') + '</span></div>' +
                                '<div class="rg-customer-info-line"><span class="rg-info-label">Weight</span><span class="rg-info-colon">:</span><span class="rg-info-value">' + escapeHtml(d.weight) + ' Gm<span class="rg-weight-conversion">' + convertGramToVoriAna(d.weight) + '</span></span></div>' +
                                '<div class="rg-customer-info-line"><span class="rg-info-label">Made by</span><span class="rg-info-colon">:</span><span class="rg-info-value">' + escapeHtml(d.manufacturer || 'N/A') + '</span></div>' +
                                '<div class="rg-customer-info-line"><span class="rg-info-label">Address</span><span class="rg-info-colon">:</span><span class="rg-info-value">' + escapeHtml(d.address || 'N/A') + '</span></div>' +
                            '</div>' +
                            '<div class="rg-qr-section">' +
                                '<div id="rgQrcode"></div>' +
                                '<div class="rg-qr-date">' + new Date(d.created_at).toLocaleDateString('en-GB', { day: '2-digit', month: 'short', year: '2-digit' }) + '<br>' + new Date(d.created_at).toLocaleTimeString('en-US', { hour: 'numeric', minute: '2-digit' }) + '</div>' +
                            '</div>' +
                        '</div>' +
                        '<div class="rg-main-box">' +
                            '<div class="rg-checkbox-section" id="rgCheckboxSection">' + boxesHtml + '</div>' +
                            '<div class="rg-hallmark-section">' +
                                '<div class="rg-hallmark-value-container"><div class="rg-hallmark-value">' + escapeHtml(d.hallmark) + '</div></div>' +
                                '<div class="rg-hallmark-label">HallMark</div>' +
                            '</div>' +
                        '</div>' +
                        photoBlock +
                    '</div>' +
                '</div>';
        } else {
            var elementRows = [];
            for (var i = 0; i < d.elements.length; i += 3) elementRows.push(d.elements.slice(i, i + 3));
            var compHtml = elementRows.map(function (row) {
                var cells = row.map(function (el) {
                    return '<td class="rg-element-name">' + escapeHtml(el.name) + '</td><td class="rg-element-colon">:</td><td class="rg-element-value">' + (el.value === null ? '--------%' : el.value.toFixed(3) + '%') + '</td>';
                }).join('');
                for (var j = row.length; j < 3; j++) cells += '<td class="rg-element-name"></td><td class="rg-element-colon"></td><td class="rg-element-value"></td>';
                return '<tr>' + cells + '</tr>';
            }).join('');

            var photosHtml = d.images.map(function (img) {
                return '<img src="' + escapeHtml(img) + '" alt="Sample photo" style="width:auto;height:95px;object-fit:contain;border-radius:4px;border:1px solid #ddd;">';
            }).join('');

            innerHtml =
                '<div class="rg-tunch-container" style="background-image:none;">' +
                    '<style>.rg-tunch-container::before{background-image:url(\'' + ASSET_BASE + 'Varifiedstamp.png\') !important;}</style>' +
                    '<div class="rg-report-header">' +
                        '<div class="rg-customer-info">' +
                            '<div class="rg-customer-info-line rg-customer-name">Customer Name : ' + escapeHtml(d.customer_name) + '</div>' +
                            '<div class="rg-customer-info-line"><span class="rg-info-label">Sample Item</span><span class="rg-info-colon">:</span><span class="rg-info-value">' + escapeHtml(d.item_name) + '</span></div>' +
                            '<div class="rg-customer-info-line"><span class="rg-info-label">Sample Weight</span><span class="rg-info-colon">:</span><span class="rg-info-value">' + escapeHtml(d.weight) + ' Gm<span class="rg-weight-conversion">' + convertGramToVoriAna(d.weight) + '</span></span></div>' +
                            '<div class="rg-customer-info-line"><span class="rg-info-label">Bill No</span><span class="rg-info-colon">:</span><span class="rg-info-value">' + escapeHtml(d.order_id) + '</span></div>' +
                            '<div class="rg-customer-info-line"><span class="rg-info-label">HUID</span><span class="rg-info-colon">:</span><span class="rg-info-value">' + escapeHtml(d.huid) + '</span></div>' +
                        '</div>' +
                        '<div class="rg-qr-section">' +
                            '<div id="rgQrcode"></div>' +
                            '<div class="rg-qr-date">' + new Date(d.created_at).toLocaleDateString('en-GB', { day: '2-digit', month: 'short', year: '2-digit' }) + '<br>' + new Date(d.created_at).toLocaleTimeString('en-US', { hour: 'numeric', minute: '2-digit' }) + '</div>' +
                        '</div>' +
                    '</div>' +
                    '<div class="rg-dotted-line"></div>' +
                    '<div class="rg-quality-info">' +
                        '<span>' + escapeHtml(d.purity_label) + ' : ' + (d.purity_value !== null ? parseFloat(d.purity_value).toFixed(2) : 'N/A') + '%</span>' +
                        '<span>Karat : ' + escapeHtml(d.karat != null ? d.karat : 'N/A') + 'K</span>' +
                    '</div>' +
                    '<div class="rg-dotted-line"></div>' +
                    '<table class="rg-composition-table">' + compHtml + '</table>' +
                    '<div class="rg-report-note">NB:- The report pertains to specific point and not responsible for other point or melting issues.</div>' +
                    '<div style="display:flex;gap:0;margin-top:6px;align-items:stretch;min-height:90px;">' +
                        '<div style="flex:0 0 58.333%;max-width:58.333%;display:flex;align-items:flex-end;gap:8px;flex-wrap:wrap;padding-right:8px;">' + photosHtml + '</div>' +
                        '<div style="flex:0 0 41.667%;max-width:41.667%;display:flex;flex-direction:column;justify-content:space-between;">' +
                            '<div style="display:flex;justify-content:flex-end;gap:18px;font-size:11px;font-weight:bold;color:#000;">' +
                                (d.gold !== null ? '<span>Gold : ' + parseFloat(d.gold).toFixed(3) + '</span>' : '') +
                                (d.joint !== null ? '<span>Joint : ' + parseFloat(d.joint).toFixed(3) + '</span>' : '') +
                            '</div>' +
                            '<div style="text-align:center;font-size:11px;font-weight:bold;color:#000;padding-bottom:2px;">Authorized Signature</div>' +
                        '</div>' +
                    '</div>' +
                '</div>';
        }

        resultArea.innerHTML =
            '<div class="rg-report-wrapper">' +
                '<div class="rg-scale-wrapper">' +
                    '<div class="rg-scale-inner" id="rgScaleInner">' +
                        '<div class="rg-report-card ' + (d.report_type === 'hallmark' ? 'rg-hallmark' : '') + '" id="rgReportCard">' +
                            '<img src="' + ASSET_BASE + 'report pad.png" alt="" class="rg-report-pad-bg" aria-hidden="true">' +
                            '<div class="rg-report-card-content">' + innerHtml + '</div>' +
                        '</div>' +
                    '</div>' +
                '</div>' +
            '</div>';

        new QRCode(document.getElementById('rgQrcode'), { text: verifyUrl, width: 90, height: 90 });

        // Scale card to fill the available width (no leftover blank space) while staying centered.
        function scaleCard() {
            var inner = document.getElementById('rgScaleInner');
            var card = document.getElementById('rgReportCard');
            if (!inner || !card) return;

            var vw = document.documentElement.clientWidth;
            var sidePad = vw <= 600 ? 16 : 32;
            var padded = vw - (sidePad * 2);

            if (padded >= cardWidth) {
                inner.style.transform = 'none';
                inner.style.width = '';
                inner.style.height = '';
                return;
            }

            var scale = padded / cardWidth;
            var cardH = card.offsetHeight;

            inner.style.transform = 'scale(' + scale + ')';
            inner.style.transformOrigin = 'top left';
            inner.style.width = padded + 'px';
            inner.style.height = Math.round(cardH * scale) + 'px';
        }

        scaleCard();
        window.addEventListener('load', scaleCard);
        setTimeout(scaleCard, 300);
        window.addEventListener('resize', scaleCard);
    }

    // ══ QR CAMERA SCANNER ══
    var HUID_CHARSET = '23456789ABCDEFGHJKLMNPQRSTUVWXYZabcdefghijkmnopqrstuvwxyz';
    var HUID_URL_REGEX = new RegExp('^https:\\/\\/rajaiswari\\.com\\/search_report\\.php\\?huid=([' + HUID_CHARSET + ']{6})$');

    var scanBtn = document.getElementById('rgScanBtn');
    var scanModal = document.getElementById('rgScanModal');
    var scanCloseBtn = document.getElementById('rgScanCloseBtn');
    var scanMsg = document.getElementById('rgScanMsg');
    var html5QrCode = null;
    var scannerRunning = false;

    function setScanMsg(text, type) {
        scanMsg.textContent = text;
        scanMsg.className = 'rg-scan-modal-msg ' + (type === 'error' ? 'rg-error' : 'rg-info');
    }

    function extractValidHuid(scannedText) {
        if (!scannedText) return null;
        var match = scannedText.trim().match(HUID_URL_REGEX);
        return match ? match[1] : null;
    }

    function openScanner() {
        if (!navigator.mediaDevices || !navigator.mediaDevices.getUserMedia) {
            alert('Camera scanning is not supported on this browser/device. Please enter the HUID manually.');
            return;
        }
        scanModal.classList.add('rg-open');
        setScanMsg('<?php echo htmlspecialchars($L['search_hint']); ?>', 'info');

        html5QrCode = new Html5Qrcode('rgQrReaderBox');
        html5QrCode.start(
            { facingMode: 'environment' },
            { fps: 10, qrbox: { width: 220, height: 220 } },
            onScanFrame,
            function () { /* per-frame decode miss — ignore, keep scanning */ }
        ).then(function () {
            scannerRunning = true;
        }).catch(function () {
            setScanMsg('Camera access denied or unavailable. Please allow camera permission and try again.', 'error');
        });
    }

    function closeScanner() {
        scanModal.classList.remove('rg-open');
        if (html5QrCode && scannerRunning) {
            html5QrCode.stop().then(function () { html5QrCode.clear(); }).catch(function () {});
        }
        scannerRunning = false;
        html5QrCode = null;
    }

    function onScanFrame(decodedText) {
        var huid = extractValidHuid(decodedText);
        if (!huid) {
            setScanMsg('This QR code is not a valid Rajaiswari report code.', 'error');
            return;
        }
        setScanMsg('Report code recognized — loading...', 'info');
        closeScanner();
        doSearch(huid);
    }

    scanBtn.addEventListener('click', openScanner);
    scanCloseBtn.addEventListener('click', closeScanner);
    scanModal.addEventListener('click', function (e) { if (e.target === scanModal) closeScanner(); });

    // Auto-run search if ?huid= is present in the URL (for QR code scans); otherwise show a placeholder.
    (function initFromUrl() {
        var params = new URLSearchParams(location.search);
        var huid = params.get('huid');
        if (huid) {
            doSearch(huid);
        } else {
            renderInitialInfo();
        }
    })();

    /* ── Anti-copy ── */
    document.addEventListener('keydown', function (e) {
        if (
            (e.ctrlKey && ['c', 'x', 's', 'a', 'p', 'u'].includes(e.key.toLowerCase())) ||
            (e.ctrlKey && e.shiftKey && ['i', 'j', 'c'].includes(e.key.toLowerCase())) ||
            e.key === 'F12' || e.key === 'PrintScreen'
        ) { e.preventDefault(); return false; }
    });
    document.addEventListener('keyup', function (e) {
        if (e.key === 'PrintScreen') navigator.clipboard.writeText('').catch(function () {});
    });
    document.addEventListener('selectstart', function (e) { e.preventDefault(); });
    document.addEventListener('dragstart', function (e) { e.preventDefault(); });
    document.addEventListener('copy', function (e) { e.preventDefault(); });
    document.addEventListener('cut', function (e) { e.preventDefault(); });
})();
</script>
</body>
</html>