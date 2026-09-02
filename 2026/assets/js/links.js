(function () {
  var root = document.querySelector('[data-link-tabs]');
  if (!root) return;

  var tabs = root.querySelectorAll('[data-tab]');
  var panels = root.querySelectorAll('.links-panel');

  function activateTab(selectedTab) {
    var targetId = selectedTab.getAttribute('data-tab');
    var i;

    for (i = 0; i < tabs.length; i += 1) {
      var isSelected = tabs[i] === selectedTab;
      tabs[i].className = isSelected ? 'links-tab is-active' : 'links-tab';
      tabs[i].setAttribute('aria-selected', isSelected ? 'true' : 'false');
    }

    for (i = 0; i < panels.length; i += 1) {
      var isTarget = panels[i].id === targetId;
      var panelClass = panels[i].className.replace(/\s*is-active/g, '');
      panels[i].className = isTarget ? panelClass + ' is-active' : panelClass;
      panels[i].hidden = !isTarget;
    }
  }

  for (var i = 0; i < tabs.length; i += 1) {
    tabs[i].onclick = function () { activateTab(this); };
  }
}());
