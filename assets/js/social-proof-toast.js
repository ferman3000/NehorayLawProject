(function () {
    /*
     * Social Proof Toast Notification
     *
     * MODE OPTIONS (change spMode to switch behavior):
     *   'rotate'   — Option A: auto-rotate through all messages, loop continuously
     *   'single'   — Option B: show one random message, stays until user closes
     *   'once'     — Option C: show one random message, auto-dismiss after duration
     */
    var spMode = 'rotate';

    /* ── Config ── */
    var DISPLAY_DURATION = 8000;   // ms each toast is visible
    var PAUSE_BETWEEN   = 3000;   // ms gap between toasts (rotate mode)
    var MAX_MESSAGES    = 5;       // max messages to show

    /* ── Globals ── */
    var container, toastEl, messageEl, closeBtn;
    var messages = [];
    var currentIndex = 0;
    var timers = [];
    var dismissed = false;

    /* ── Init ── */
    function init() {
        if (typeof socialProofData === 'undefined' || !socialProofData.sheetId) return;
        buildDOM();
        fetchSheet(socialProofData.sheetId);
    }

    /* ── Build DOM ── */
    function buildDOM() {
        container = document.createElement('div');
        container.className = 'sp-toast-container';

        toastEl = document.createElement('div');
        toastEl.className = 'sp-toast';

        closeBtn = document.createElement('button');
        closeBtn.className = 'sp-toast-close';
        closeBtn.innerHTML = '&times;';
        closeBtn.setAttribute('aria-label', 'Close');
        closeBtn.addEventListener('click', function () {
            dismissed = true;
            hideToast();
            clearAllTimers();
        });

        messageEl = document.createElement('p');
        messageEl.className = 'sp-toast-message';

        var disclaimer = document.createElement('p');
        disclaimer.className = 'sp-toast-disclaimer';
        disclaimer.textContent = '* Disclaimer: Past results do not guarantee, warranty, or predict future case outcomes.';

        toastEl.appendChild(closeBtn);
        toastEl.appendChild(messageEl);
        toastEl.appendChild(disclaimer);
        container.appendChild(toastEl);
        document.body.appendChild(container);
    }

    /* ── Fetch Google Sheet (published as CSV) ── */
    function fetchSheet(sheetId) {
        var url = 'https://docs.google.com/spreadsheets/d/' + sheetId + '/gviz/tq?tqx=out:csv';

        fetch(url)
            .then(function (res) { return res.text(); })
            .then(function (csv) {
                messages = parseCSV(csv);
                if (messages.length > 0) startShow();
            })
            .catch(function () {
                // Silent fail — no toast shown
            });
    }

    /* ── Parse CSV ── */
    function parseCSV(csv) {
        var lines = csv.trim().split('\n');
        if (lines.length < 2) return [];

        var result = [];
        for (var i = 1; i < lines.length && result.length < MAX_MESSAGES; i++) {
            var cols = parseCSVLine(lines[i]);
            if (cols.length >= 4 && cols[0].trim()) {
                result.push({
                    attorney: cols[0].trim(),
                    location: cols[1].trim(),
                    amount:   cols[2].trim(),
                    caseType: cols[3].trim()
                });
            }
        }
        return result;
    }

    /* ── Parse a single CSV line (handles quoted fields) ── */
    function parseCSVLine(line) {
        var result = [];
        var current = '';
        var inQuotes = false;

        for (var i = 0; i < line.length; i++) {
            var ch = line[i];
            if (ch === '"') {
                if (inQuotes && line[i + 1] === '"') {
                    current += '"';
                    i++;
                } else {
                    inQuotes = !inQuotes;
                }
            } else if (ch === ',' && !inQuotes) {
                result.push(current);
                current = '';
            } else {
                current += ch;
            }
        }
        result.push(current);
        return result;
    }

    /* ── Format message ── */
    function formatMessage(data) {
        return '<span class="sp-toast-title">\uD83D\uDD14 Recent Settlement \uD83D\uDD14</span>' +
               'Attorney <strong>' + data.attorney + '</strong> in ' + data.location +
               ' obtained a <strong>' + data.amount + '</strong> settlement on behalf of a ' +
               data.caseType + ' client.';
    }

    /* ── Show / Hide ── */
    function showToast(index) {
        if (dismissed) return;
        messageEl.innerHTML = formatMessage(messages[index]);
        toastEl.classList.remove('hiding');
        toastEl.classList.add('visible');
    }

    function hideToast(callback) {
        toastEl.classList.remove('visible');
        toastEl.classList.add('hiding');
        if (callback) {
            timers.push(setTimeout(callback, 500));
        }
    }

    function clearAllTimers() {
        timers.forEach(function (t) { clearTimeout(t); });
        timers = [];
    }

    /* ── Start based on mode ── */
    function startShow() {
        if (spMode === 'rotate') {
            startRotate();
        } else if (spMode === 'single') {
            showToast(Math.floor(Math.random() * messages.length));
        } else if (spMode === 'once') {
            showToast(Math.floor(Math.random() * messages.length));
            timers.push(setTimeout(function () { hideToast(); }, DISPLAY_DURATION));
        }
    }

    /* ── Rotate mode ── */
    function startRotate() {
        showToast(currentIndex);

        timers.push(setTimeout(function nextCycle() {
            hideToast(function () {
                currentIndex = (currentIndex + 1) % messages.length;
                timers.push(setTimeout(function () {
                    showToast(currentIndex);
                    timers.push(setTimeout(nextCycle, DISPLAY_DURATION));
                }, PAUSE_BETWEEN));
            });
        }, DISPLAY_DURATION));
    }

    /* ── Go ── */
    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', init);
    } else {
        init();
    }
})();
