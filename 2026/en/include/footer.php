    <div class="footer-wrap" id="contact">
      <div class="container">
        <footer class="footer">
          <div class="footer-grid">
            <div class="footer-brand-block">
              <img class="footer-brand-mark" src="assets/images/logo.webp" alt="" width="47" height="45" loading="lazy" decoding="async">
              <p class="footer-tagline">Professionalism, integrity, innovation and efficiency guide every matter we handle.</p>
              <div class="footer-socials">
                <a class="footer-social" href="https://line.me/ti/p/vR8-kFuiI_" target="_blank" rel="noopener noreferrer" aria-label="Contact Lan Loop on LINE"><img src="assets/images/footer_line.webp" alt="LINE" width="76" height="76" loading="lazy" decoding="async"></a>
                <a class="footer-social" href="<?php echo htmlspecialchars('https://www.facebook.com/sharer/sharer.php?u=' . rawurlencode($canonicalUrl), ENT_QUOTES, 'UTF-8'); ?>" target="_blank" rel="noopener noreferrer" aria-label="Share this page on Facebook"><img src="assets/images/footer_facebook.webp" alt="Facebook" width="76" height="76" loading="lazy" decoding="async"></a>
              </div>
            </div>
            <div class="footer-contact">
              <h2>Contact us</h2>
              <div class="contact-item"><div class="contact-item-label">Telephone</div><div class="contact-item-val"><a href="tel:+88663137562">+886 6 313 7562</a></div></div>
              <div class="contact-item"><div class="contact-item-label">Fax</div><div class="contact-item-val">+886 6 312 9556</div></div>
              <div class="contact-item"><div class="contact-item-label">Email</div><div class="contact-item-val email-val"><a href="mailto:lanloop.lucky@msa.hinet.net">lanloop.lucky@msa.hinet.net</a></div></div>
            </div>
            <div class="footer-locations">
              <h2>Office</h2>
              <p class="location-address"><a href="https://maps.google.com/?q=Rm.%20A5%2C%207F.%2C%20No.%20689-28%2C%20Xiaodong%20Rd.%2C%20Yongkang%20Dist.%2C%20Tainan%20City%20710%2C%20Taiwan" target="_blank" rel="noopener noreferrer">Rm. A5, 7F., No. 689-28, Xiaodong Rd., Yongkang Dist., Tainan City 710, Taiwan</a></p>
              <div class="footer-page-links" aria-label="English pages">
                <a href="en/about.php">About Us</a>
                <a href="en/services.php">Services</a>
                <a href="en/contact.php">Contact Us</a>
              </div>
            </div>
          </div>
          <div class="footer-bottom">
            <span>Copyright &copy; 2026 Lan Loop International Patent &amp; Trademark Office.</span>
            <a href="<?php echo htmlspecialchars($zhPage, ENT_QUOTES, 'UTF-8'); ?>" lang="zh-Hant">繁體中文版</a>
          </div>
        </footer>
      </div>
    </div>
  </div>
  <script>
    (function () {
      var switches = document.querySelectorAll('[data-language-switch]');

      function closeLanguageMenus(except) {
        for (var i = 0; i < switches.length; i += 1) {
          if (switches[i] !== except) {
            switches[i].classList.remove('is-open');
            switches[i].querySelector('.nav-lang').setAttribute('aria-expanded', 'false');
          }
        }
      }

      for (var i = 0; i < switches.length; i += 1) {
        (function (wrap) {
          var button = wrap.querySelector('.nav-lang');
          button.addEventListener('click', function () {
            var willOpen = !wrap.classList.contains('is-open');
            closeLanguageMenus(wrap);
            wrap.classList.toggle('is-open', willOpen);
            button.setAttribute('aria-expanded', willOpen ? 'true' : 'false');
          });
        }(switches[i]));
      }

      document.addEventListener('click', function (event) {
        if (!event.target.closest('[data-language-switch]')) { closeLanguageMenus(); }
      });

      document.addEventListener('keydown', function (event) {
        if (event.key === 'Escape') {
          for (var i = 0; i < switches.length; i += 1) {
            if (switches[i].classList.contains('is-open')) {
              switches[i].classList.remove('is-open');
              switches[i].querySelector('.nav-lang').setAttribute('aria-expanded', 'false');
              switches[i].querySelector('.nav-lang').focus();
            }
          }
        }
      });
    }());
  </script>
  <script>
    (function () {
      var headerWrap = document.getElementById('headerWrap');
      var hamburger = document.getElementById('hamburger');
      var mobileMenu = document.getElementById('mobileMenu');
      var mobileMenuClose = document.getElementById('mobileMenuClose');

      function setHeaderState() {
        if (headerWrap) {
          if (window.pageYOffset > 40) { headerWrap.classList.add('scrolled'); }
          else { headerWrap.classList.remove('scrolled'); }
        }
      }

      window.closeMobileMenu = function () {
        if (!mobileMenu || !hamburger) { return; }
        mobileMenu.classList.remove('open');
        mobileMenu.style.display = '';
        hamburger.classList.remove('open');
        hamburger.setAttribute('aria-expanded', 'false');
        document.body.style.overflow = '';
      };

      function openMobileMenu() {
        mobileMenu.classList.add('open');
        mobileMenu.style.display = 'flex';
        hamburger.classList.add('open');
        hamburger.setAttribute('aria-expanded', 'true');
        document.body.style.overflow = 'hidden';
        mobileMenuClose.focus();
      }

      if (hamburger && mobileMenu && mobileMenuClose) {
        hamburger.onclick = function () {
          if (mobileMenu.classList.contains('open')) { window.closeMobileMenu(); }
          else { openMobileMenu(); }
        };
        mobileMenuClose.onclick = window.closeMobileMenu;
        document.onkeydown = function (event) {
          if (event.key === 'Escape' && mobileMenu.classList.contains('open')) {
            window.closeMobileMenu();
            hamburger.focus();
          }
        };
      }

      setHeaderState();
      window.addEventListener('scroll', setHeaderState, { passive: true });

      var reveals = document.querySelectorAll('.reveal');
      if ('IntersectionObserver' in window) {
        var observer = new IntersectionObserver(function (entries) {
          for (var i = 0; i < entries.length; i += 1) {
            if (entries[i].isIntersecting) {
              entries[i].target.classList.add('in-view');
              observer.unobserve(entries[i].target);
            }
          }
        }, { threshold: 0.12 });
        for (var j = 0; j < reveals.length; j += 1) { observer.observe(reveals[j]); }
      } else {
        for (var k = 0; k < reveals.length; k += 1) { reveals[k].classList.add('in-view'); }
      }
    }());
  </script>
</body>
</html>
