<?php
$isHome = true;
$zhPage = 'index.php';
$pageTitle = 'Lan Loop International Patent & Trademark Office | Taiwan';
$pageDescription = 'Lan Loop provides patent and trademark filing, search, analysis, prosecution and intellectual property services in Taiwan and abroad.';
$countryRows = array(
  array(
    'class' => '',
    'countries' => array(
      array('🇺🇸', 'United States'), array('🇨🇳', 'China'), array('🇯🇵', 'Japan'),
      array('🇩🇪', 'Germany'), array('🇬🇧', 'United Kingdom'), array('🇫🇷', 'France'),
      array('🇰🇷', 'South Korea'), array('🇦🇺', 'Australia'), array('🇮🇳', 'India'),
      array('🇨🇦', 'Canada'), array('🇪🇸', 'Spain')
    )
  ),
  array(
    'class' => ' rtl',
    'countries' => array(
      array('🇮🇹', 'Italy'), array('🇧🇷', 'Brazil'), array('🇷🇺', 'Russia'),
      array('🇲🇾', 'Malaysia'), array('🇹🇭', 'Thailand'), array('🇻🇳', 'Vietnam'),
      array('🇸🇬', 'Singapore'), array('🇵🇭', 'Philippines'), array('🇮🇩', 'Indonesia'),
      array('🇸🇦', 'Saudi Arabia'), array('🇿🇦', 'South Africa')
    )
  ),
  array(
    'class' => ' ltr-slow',
    'countries' => array(
      array('🇦🇪', 'United Arab Emirates'), array('🇮🇱', 'Israel'), array('🇦🇷', 'Argentina'),
      array('🇭🇰', 'Hong Kong'), array('🇨🇴', 'Colombia'), array('🇨🇱', 'Chile'),
      array('🇳🇿', 'New Zealand'), array('🇲🇴', 'Macao'), array('🇨🇿', 'Czech Republic'),
      array('🇦🇺', 'Australia'), array('🇺🇸', 'United States')
    )
  )
);
include dirname(__FILE__) . '/include/header.php';
?>

<main>
  <section class="hero-wrapper" aria-labelledby="home-title">
    <div class="container">
      <div class="hero">
        <div class="hero-copy">
          <h1 id="home-title">Protecting ideas.<br><span class="blue">Advancing business.</span></h1>
          <p>Lan Loop provides patent and trademark services in Taiwan and abroad, helping businesses protect innovation and compete with confidence.</p>
          <div class="hero-actions">
            <a class="btn btn-primary" href="en/contact.php">Contact us <span class="btn-arrow" aria-hidden="true">&rarr;</span></a>
            <a class="btn btn-ghost" href="en/services.php">View services <span class="btn-arrow" aria-hidden="true">&rarr;</span></a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="countries en-countries" id="countries" aria-labelledby="countries-title">
    <div class="container en-countries-heading">
      <div class="section-kicker reveal">International Coverage</div>
      <h2 class="section-title reveal reveal-delay-1" id="countries-title">Patents and Trademarks in Major Countries Worldwide</h2>
      <div class="countries-count" aria-label="Coverage across 30 countries">
        <strong>30</strong>
        <span>Countries</span>
      </div>
    </div>
    <div class="flags-marquee" role="list" aria-label="Countries served; focus to pause animation" tabindex="0">
<?php foreach ($countryRows as $countryRow) { ?>
      <div class="marquee-row" role="presentation">
<?php for ($countryCopy = 0; $countryCopy < 2; $countryCopy += 1) { ?>
        <div class="marquee-track<?php echo $countryRow['class']; ?>" aria-hidden="<?php echo $countryCopy === 0 ? 'false' : 'true'; ?>">
<?php foreach ($countryRow['countries'] as $country) { ?>
          <div class="flag"<?php if ($countryCopy === 0) { ?> role="listitem"<?php } ?>><i aria-hidden="true"><?php echo $country[0]; ?></i><?php echo htmlspecialchars($country[1], ENT_QUOTES, 'UTF-8'); ?></div>
<?php } ?>
        </div>
<?php } ?>
      </div>
<?php } ?>
    </div>
  </section>

  <section class="bridge en-global-partner" id="global-partner" aria-labelledby="global-partner-title">
    <div class="container">
      <div class="bridge-inner">
        <div class="bridge-copy reveal">
          <div class="section-kicker">From Taiwan to the World</div>
          <h2 class="section-title" id="global-partner-title">
            Innovation. Protection. Value.<br>
            <span class="accent">Your Global IP Partner.</span>
          </h2>
          <p>Practical IP support—from strategy and filing to enforcement—helping businesses protect innovation worldwide.</p>

          <div class="stats">
            <div class="stat">
              <div class="stat-icon" aria-hidden="true">
                <svg viewBox="0 0 24 24"><path d="M4 21V5a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v16"></path><path d="M9 7h2M9 11h2M9 15h2M16 9h3a1 1 0 0 1 1 1v11M3 21h18"></path></svg>
              </div>
              <div class="stat-num">30+</div>
              <div class="stat-label">Countries Served</div>
              <div class="stat-sub">Global coverage</div>
            </div>
            <div class="stat">
              <div class="stat-icon" aria-hidden="true">
                <svg viewBox="0 0 24 24"><path d="M7 2v3M17 2v3M3 9h18"></path><rect x="3" y="4" width="18" height="17" rx="3"></rect><path d="M8 13h3M13 13h3M8 17h3"></path></svg>
              </div>
              <div class="stat-num">20+</div>
              <div class="stat-label">Years of Experience</div>
              <div class="stat-sub">Focused IP expertise</div>
            </div>
            <div class="stat">
              <div class="stat-icon" aria-hidden="true">
                <svg viewBox="0 0 24 24"><path d="M12 22s8-3.5 8-10V5l-8-3-8 3v7c0 6.5 8 10 8 10Z"></path><path d="m9 12 2 2 4-4"></path></svg>
              </div>
              <div class="stat-num">99%</div>
              <div class="stat-label">Client Satisfaction</div>
              <div class="stat-sub">A trusted choice</div>
            </div>
          </div>
        </div>

        <div class="bridge-visual reveal reveal-delay-1" aria-hidden="true">
          <div class="bridge-glow"></div>
          <div class="orbit"></div>
          <div class="orbit o2"></div>
          <div class="bridge-globe"></div>
          <div class="svc-card sc1">
            <div class="svc-icon"><svg viewBox="0 0 24 24"><path d="M7 3h8l4 4v14H7z"></path><path d="M15 3v5h5M10 12h6M10 16h6"></path></svg></div>
            <div><span class="svc-card-text">Patent Filing</span><span class="svc-card-tag">International applications</span></div>
          </div>
          <div class="svc-card sc2">
            <div class="svc-icon"><svg viewBox="0 0 24 24"><circle cx="12" cy="12" r="9"></circle><path d="M8.5 8.5h4a3 3 0 0 1 0 6h-4zM13 14.5l3 3"></path></svg></div>
            <div><span class="svc-card-text">Trademark Registration</span><span class="svc-card-tag">Brand protection</span></div>
          </div>
          <div class="svc-card sc3">
            <div class="svc-icon"><svg viewBox="0 0 24 24"><path d="M12 22s8-3.5 8-10V5l-8-3-8 3v7c0 6.5 8 10 8 10Z"></path><path d="m9 12 2 2 4-4"></path></svg></div>
            <div><span class="svc-card-text">IP Strategy</span><span class="svc-card-tag">Portfolio planning</span></div>
          </div>
          <div class="svc-card sc4">
            <div class="svc-icon"><svg viewBox="0 0 24 24"><path d="m14 4 6 6M12.5 5.5l6 6M5 19l7-7M4 20h6"></path><path d="m9 7 8 8"></path></svg></div>
            <div><span class="svc-card-text">Patent Examination</span><span class="svc-card-tag">Prosecution support</span></div>
          </div>
          <div class="svc-card sc5">
            <div class="svc-icon"><svg viewBox="0 0 24 24"><circle cx="12" cy="12" r="9"></circle><path d="M3 12h18M12 3a15 15 0 0 1 0 18M12 3a15 15 0 0 0 0 18"></path></svg></div>
            <div><span class="svc-card-text">Global Network</span><span class="svc-card-tag">Cross-border coordination</span></div>
          </div>
        </div>
      </div>
    </div>
  </section>

</main>

<?php include dirname(__FILE__) . '/include/footer.php'; ?>
