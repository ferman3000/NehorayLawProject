(function () {
  var grid = document.getElementById('teamFilterGrid');
  if (!grid) return;

  var cards = grid.querySelectorAll('.attorney-card');
  var countEl = document.getElementById('teamResultsCount');
  var activeDept = 'all';
  var activeOffice = 'all';

  /* ── Slider ── */
  function moveSlider(group, btn) {
    var slider = group.querySelector('.filter-slider');
    if (!slider || !btn) return;
    slider.style.width = btn.offsetWidth + 'px';
    slider.style.left = btn.offsetLeft + 'px';
  }

  function initSliders() {
    document.querySelectorAll('.filter-group').forEach(function (group) {
      var active = group.querySelector('.filter-btn.active');
      if (active) moveSlider(group, active);
    });
  }

  /* ── Filter ── */
  function applyFilter() {
    var visibleCount = 0;

    cards.forEach(function (card) {
      var matchDept = activeDept === 'all' || card.getAttribute('data-dept').split(' ').indexOf(activeDept) !== -1;
      var matchOffice = activeOffice === 'all' || card.getAttribute('data-office') === activeOffice || card.getAttribute('data-office') === 'all';

      if (matchDept && matchOffice) {
        visibleCount++;
        card.classList.remove('filter-hidden');
      } else {
        card.classList.add('filter-hidden');
      }
    });

    if (countEl) {
      countEl.innerHTML = 'Showing <span>' + visibleCount + '</span> of ' + cards.length + ' team members';
    }
  }

  /* ── Department clicks ── */
  var deptGroup = document.getElementById('deptFilters');
  if (deptGroup) {
    deptGroup.addEventListener('click', function (e) {
      var btn = e.target.closest('.filter-btn');
      if (!btn || btn.classList.contains('active')) return;
      deptGroup.querySelector('.filter-btn.active').classList.remove('active');
      btn.classList.add('active');
      moveSlider(deptGroup, btn);
      activeDept = btn.getAttribute('data-filter');
      applyFilter();
    });
  }

  /* ── Office clicks ── */
  var officeGroup = document.getElementById('officeFilters');
  if (officeGroup) {
    officeGroup.addEventListener('click', function (e) {
      var btn = e.target.closest('.filter-btn');
      if (!btn || btn.classList.contains('active')) return;
      officeGroup.querySelector('.filter-btn.active').classList.remove('active');
      btn.classList.add('active');
      moveSlider(officeGroup, btn);
      activeOffice = btn.getAttribute('data-office');
      applyFilter();
    });
  }

  /* ── Mobile Selects ── */
  var deptSelect = document.getElementById('deptSelect');
  if (deptSelect) {
    deptSelect.addEventListener('change', function () {
      activeDept = deptSelect.value;
      applyFilter();
    });
  }

  var officeSelect = document.getElementById('officeSelect');
  if (officeSelect) {
    officeSelect.addEventListener('change', function () {
      activeOffice = officeSelect.value;
      applyFilter();
    });
  }

  /* ── Init ── */
  initSliders();
  applyFilter();
  window.addEventListener('load', initSliders);
  if (document.fonts && document.fonts.ready) {
    document.fonts.ready.then(initSliders);
  }
  window.addEventListener('resize', initSliders);
})();
