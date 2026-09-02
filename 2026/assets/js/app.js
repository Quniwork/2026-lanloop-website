document.addEventListener('DOMContentLoaded', () => {
  const menu = document.querySelector('[data-mobile-menu]');
  const open = document.querySelector('[data-menu-open]');
  const close = document.querySelector('[data-menu-close]');

  const setMenu = (visible) => {
    if (!menu || !open) return;
    menu.classList.toggle('hidden', !visible);
    open.setAttribute('aria-expanded', String(visible));
    document.body.classList.toggle('overflow-hidden', visible);
  };
  open?.addEventListener('click', () => setMenu(true));
  close?.addEventListener('click', () => setMenu(false));
  document.addEventListener('keydown', (event) => { if (event.key === 'Escape') setMenu(false); });

  document.querySelectorAll('[data-tabs]').forEach((tabs) => {
    const buttons = [...tabs.querySelectorAll('[role="tab"]')];
    const panels = [...tabs.querySelectorAll('[role="tabpanel"]')];
    const activate = (button, updateHash = true) => {
      const target = button.getAttribute('aria-controls');
      buttons.forEach((item) => item.setAttribute('aria-selected', String(item === button)));
      panels.forEach((panel) => panel.classList.toggle('hidden', panel.id !== target));
      if (updateHash) history.replaceState(null, '', `#${target}`);
    };
    buttons.forEach((button) => button.addEventListener('click', () => activate(button)));
    const initial = buttons.find((button) => `#${button.getAttribute('aria-controls')}` === location.hash) || buttons[0];
    if (initial) activate(initial, false);
  });

  document.querySelectorAll('.nav-tabs').forEach((tabList) => {
    const buttons = [...tabList.querySelectorAll('a[href^="#tab"]')];
    const scope = tabList.closest('[role="tab"]') || tabList.parentElement?.parentElement;
    const panels = [...(scope?.querySelectorAll('.tab-pane') || [])];
    const activate = (button) => {
      const id = button.getAttribute('href')?.slice(1);
      buttons.forEach((item) => item.parentElement?.classList.toggle('active', item === button));
      panels.forEach((panel) => panel.classList.toggle('active', panel.id === id));
      if (id) history.replaceState(null, '', `#${id}`);
    };
    buttons.forEach((button) => button.addEventListener('click', (event) => { event.preventDefault(); activate(button); }));
    const initial = buttons.find((button) => button.getAttribute('href') === location.hash) || buttons.find((button) => button.parentElement?.classList.contains('active')) || buttons[0];
    if (initial) activate(initial);
  });

  const observer = new IntersectionObserver((entries) => {
    entries.forEach((entry) => { if (entry.isIntersecting) entry.target.classList.add('is-visible'); });
  }, { threshold: .12 });
  document.querySelectorAll('[data-reveal]').forEach((element) => observer.observe(element));
});
