(function () {
  var root = document.querySelector('[data-country-regions]');
  if (!root) return;

  var regionTabs = root.querySelectorAll('[data-region-tab]');
  var regionPanels = root.querySelectorAll('[data-region-panel]');

  var pages = {
    '中國': 'foreign-patent/china.php',
    '巴西': 'foreign-patent/brazil.php'
  };

  function activateRegion(tab) {
    var target = tab.getAttribute('data-region-tab');
    var i;

    for (i = 0; i < regionTabs.length; i += 1) {
      regionTabs[i].className = regionTabs[i] === tab ? 'country-region-tab is-active' : 'country-region-tab';
      regionTabs[i].setAttribute('aria-selected', regionTabs[i] === tab ? 'true' : 'false');
    }

    for (i = 0; i < regionPanels.length; i += 1) {
      regionPanels[i].hidden = regionPanels[i].getAttribute('data-region-panel') !== target;
    }

  }

  var i;
  for (i = 0; i < regionTabs.length; i += 1) {
    regionTabs[i].onclick = function () { activateRegion(this); };
  }

  var countryButtons = root.querySelectorAll('.country-button');
  for (i = 0; i < countryButtons.length; i += 1) {
    countryButtons[i].onclick = function () {
      if (this.tagName && this.tagName.toLowerCase() === 'a') return true;
      var page = pages[this.getAttribute('data-country')];
      if (page) window.open(page, '_blank');
    };
  }
}());
