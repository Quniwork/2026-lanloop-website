(function () {
  var root = document.querySelector('[data-link-tabs]');
  if (!root) return;

  var tabs = root.querySelectorAll('[data-tab]');
  var panels = root.querySelectorAll('.links-panel');

  function activateTab(selectedTab, updateUrl) {
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

    if (updateUrl && window.history && window.history.pushState) {
      var nextUrl = new URL(window.location.href);
      if (nextUrl.searchParams.get('tab') !== targetId) {
        nextUrl.searchParams.set('tab', targetId);
        window.history.pushState({ tab: targetId }, '', nextUrl);
      }
    }
  }

  for (var i = 0; i < tabs.length; i += 1) {
    tabs[i].onclick = function () { activateTab(this, true); };
  }

  function activateTabFromUrl() {
    var requestedTab = new URLSearchParams(window.location.search).get('tab');
    if (requestedTab) {
      for (var j = 0; j < tabs.length; j += 1) {
        if (tabs[j].getAttribute('data-tab') === requestedTab) {
          activateTab(tabs[j], false);
          return;
        }
      }
    }
  }

  activateTabFromUrl();
  window.addEventListener('popstate', activateTabFromUrl);
}());
