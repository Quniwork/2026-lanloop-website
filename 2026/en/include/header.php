<?php
$pageTitle = isset($pageTitle) ? $pageTitle : 'Lan Loop International Patent & Trademark Office';
$pageDescription = isset($pageDescription) ? $pageDescription : 'Patent and trademark services in Taiwan and abroad from Lan Loop International Patent & Trademark Office.';
$pageStyles = isset($pageStyles) ? $pageStyles : array();
$activePage = isset($activePage) ? $activePage : '';
$isHome = isset($isHome) ? $isHome : false;
$zhPage = isset($zhPage) ? $zhPage : 'index.php';
$siteUrl = 'https://www.lanloop.com.tw';
$siteRoot = dirname(dirname(dirname(__FILE__)));
$scriptFile = realpath($_SERVER['SCRIPT_FILENAME']);
$pagePath = $scriptFile ? ltrim(str_replace('\\', '/', substr($scriptFile, strlen($siteRoot))), '/') : 'en/index.php';
$canonicalUrl = $siteUrl . '/' . $pagePath;
$shareImage = $siteUrl . '/assets/images/og-share.jpg';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">
  <base href="../">
  <title><?php echo htmlspecialchars($pageTitle, ENT_QUOTES, 'UTF-8'); ?></title>
  <meta name="description" content="<?php echo htmlspecialchars($pageDescription, ENT_QUOTES, 'UTF-8'); ?>">
  <link rel="icon" href="assets/images/favicon.ico" sizes="any">
  <link rel="canonical" href="<?php echo htmlspecialchars($canonicalUrl, ENT_QUOTES, 'UTF-8'); ?>">
  <link rel="alternate" hreflang="zh-Hant" href="<?php echo htmlspecialchars($siteUrl . '/' . $zhPage, ENT_QUOTES, 'UTF-8'); ?>">
  <link rel="alternate" hreflang="en" href="<?php echo htmlspecialchars($canonicalUrl, ENT_QUOTES, 'UTF-8'); ?>">
  <meta property="og:type" content="website">
  <meta property="og:site_name" content="Lan Loop International Patent & Trademark Office">
  <meta property="og:locale" content="en_US">
  <meta property="og:title" content="<?php echo htmlspecialchars($pageTitle, ENT_QUOTES, 'UTF-8'); ?>">
  <meta property="og:description" content="<?php echo htmlspecialchars($pageDescription, ENT_QUOTES, 'UTF-8'); ?>">
  <meta property="og:url" content="<?php echo htmlspecialchars($canonicalUrl, ENT_QUOTES, 'UTF-8'); ?>">
  <meta property="og:image" content="<?php echo htmlspecialchars($shareImage, ENT_QUOTES, 'UTF-8'); ?>">
  <meta name="twitter:card" content="summary_large_image">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&amp;display=swap" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/main.css">
  <link rel="stylesheet" href="assets/css/header.css">
  <link rel="stylesheet" href="assets/css/footer.css">
<?php foreach ($pageStyles as $pageStyle) { ?>
  <link rel="stylesheet" href="<?php echo htmlspecialchars($pageStyle, ENT_QUOTES, 'UTF-8'); ?>">
<?php } ?>
  <link rel="stylesheet" href="en/tokens.css">
  <link rel="stylesheet" href="en/assets/css/english.css">
  <link rel="stylesheet" href="assets/css/language-switch.css">
</head>
<body class="en-site">
  <div class="page">
    <div class="mobile-menu" id="mobileMenu" role="dialog" aria-modal="true" aria-label="Mobile navigation">
      <button class="mobile-menu-close" id="mobileMenuClose" type="button" aria-label="Close menu">&#10005;</button>
      <a href="en/index.php" class="mobile-nav-link" onclick="closeMobileMenu()">Home</a>
      <a href="en/about.php" class="mobile-nav-link<?php if ($activePage === 'about') { ?> is-active<?php } ?>" onclick="closeMobileMenu()">About Us</a>
      <a href="en/services.php" class="mobile-nav-link<?php if ($activePage === 'services') { ?> is-active<?php } ?>" onclick="closeMobileMenu()">Services</a>
      <a href="en/contact.php" class="mobile-nav-link<?php if ($activePage === 'contact') { ?> is-active<?php } ?>" onclick="closeMobileMenu()">Contact Us</a>
      <div class="mobile-menu-actions">
        <a href="tel:+88663137562" class="mobile-menu-btn primary">+886 6 313 7562</a>
      </div>
    </div>

    <div class="header-wrap" id="headerWrap">
      <div class="container">
        <header class="header">
          <a href="en/index.php" class="brand" aria-label="Lan Loop home">
            <div class="logo" aria-hidden="true"></div>
            <div>
              <div class="brand-title"><span>LAN LOOP</span></div>
              <div class="brand-sub">International Patent &amp; Trademark Office</div>
            </div>
          </a>
          <nav class="nav" aria-label="Primary navigation">
            <a href="en/about.php"<?php if ($activePage === 'about') { ?> class="is-active"<?php } ?>>About Us</a>
            <a href="en/services.php"<?php if ($activePage === 'services') { ?> class="is-active"<?php } ?>>Services</a>
            <a href="en/contact.php"<?php if ($activePage === 'contact') { ?> class="is-active"<?php } ?>>Contact Us</a>
            <a href="tel:+88663137562" class="nav-phone" aria-label="Call +886 6 313 7562">+886 6 313 7562</a>
            <div class="nav-lang-wrap nav-lang-wrap--desktop" data-language-switch>
              <button class="nav-lang" type="button" aria-label="Change language" aria-expanded="false" aria-haspopup="true">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><circle cx="12" cy="12" r="9"></circle><path d="M3 12h18M12 3c2.4 2.5 3.7 5.5 3.7 9s-1.3 6.5-3.7 9c-2.4-2.5-3.7-5.5-3.7-9S9.6 5.5 12 3z"></path></svg>
              </button>
              <div class="lang-dropdown" aria-label="Language menu">
                <a class="lang-opt" href="<?php echo htmlspecialchars($zhPage, ENT_QUOTES, 'UTF-8'); ?>" lang="zh-Hant" hreflang="zh-Hant">繁體中文</a>
                <span class="lang-opt is-current" lang="en" aria-current="page">English</span>
              </div>
            </div>
          </nav>
          <div class="header-mobile-actions">
            <div class="nav-lang-wrap nav-lang-wrap--mobile" data-language-switch>
              <button class="nav-lang" type="button" aria-label="Change language" aria-expanded="false" aria-haspopup="true">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><circle cx="12" cy="12" r="9"></circle><path d="M3 12h18M12 3c2.4 2.5 3.7 5.5 3.7 9s-1.3 6.5-3.7 9c-2.4-2.5-3.7-5.5-3.7-9S9.6 5.5 12 3z"></path></svg>
              </button>
              <div class="lang-dropdown" aria-label="Language menu">
                <a class="lang-opt" href="<?php echo htmlspecialchars($zhPage, ENT_QUOTES, 'UTF-8'); ?>" lang="zh-Hant" hreflang="zh-Hant">繁體中文</a>
                <span class="lang-opt is-current" lang="en" aria-current="page">English</span>
              </div>
            </div>
            <button class="hamburger" id="hamburger" type="button" aria-label="Open menu" aria-expanded="false" aria-controls="mobileMenu">
              <span aria-hidden="true"></span><span aria-hidden="true"></span><span aria-hidden="true"></span>
            </button>
          </div>
        </header>
      </div>
    </div>
