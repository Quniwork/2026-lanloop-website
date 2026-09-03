<?php
$pageTitle = isset($pageTitle) ? $pageTitle : '聯律國際專利商標事務所 | 全球智慧財產權服務';
$pageDescription = isset($pageDescription) ? $pageDescription : '聯律國際專利商標事務所，提供專業、迅速、國際化的商標與專利服務。';
$pageStyles = isset($pageStyles) ? $pageStyles : array();
$activePage = isset($activePage) ? $activePage : '';
$activeItem = isset($activeItem) ? $activeItem : '';
$isHome = isset($isHome) ? $isHome : false;
$sectionBase = $isHome ? '' : 'index.php';
$baseHref = isset($baseHref) ? $baseHref : '';

/* 上線網域。若日後搬到別的網域，只需改這一行。 */
$siteUrl = 'https://www.lanloop.com.tw';

/* 目前頁面的正式網址：以本檔所在的站台根目錄推算，
   本機放在哪個子目錄都不影響結果。 */
$siteRoot = dirname(dirname(__FILE__));
$scriptFile = realpath($_SERVER['SCRIPT_FILENAME']);
$pagePath = $scriptFile ? ltrim(str_replace('\\', '/', substr($scriptFile, strlen($siteRoot))), '/') : '';
$canonicalUrl = $siteUrl . '/' . ($pagePath === 'index.php' ? '' : $pagePath);
$englishPages = array(
  'index.php' => 'en/index.php',
  'about.php' => 'en/about.php',
  'services.php' => 'en/services.php',
  'contact.php' => 'en/contact.php'
);
$englishPage = isset($englishPages[$pagePath]) ? $englishPages[$pagePath] : 'en/services.php';
$shareImage = $siteUrl . '/assets/images/og-share.jpg';   /* 1200x630 JPEG：社群爬蟲相容性最佳 */
?>
<!DOCTYPE html>
<html lang="zh-Hant">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
<?php if ($baseHref !== '') { ?>
  <base href="<?php echo htmlspecialchars($baseHref, ENT_QUOTES, 'UTF-8'); ?>" />
<?php } ?>
  <title><?php echo htmlspecialchars($pageTitle, ENT_QUOTES, 'UTF-8'); ?></title>
  <meta name="description" content="<?php echo htmlspecialchars($pageDescription, ENT_QUOTES, 'UTF-8'); ?>" />
  <link rel="icon" href="assets/images/favicon.ico" sizes="any" />
  <link rel="canonical" href="<?php echo htmlspecialchars($canonicalUrl, ENT_QUOTES, 'UTF-8'); ?>" />
  <link rel="alternate" hreflang="zh-Hant" href="<?php echo htmlspecialchars($canonicalUrl, ENT_QUOTES, 'UTF-8'); ?>" />
  <link rel="alternate" hreflang="en" href="<?php echo htmlspecialchars($siteUrl . '/' . $englishPage, ENT_QUOTES, 'UTF-8'); ?>" />

  <meta property="og:type" content="website" />
  <meta property="og:site_name" content="聯律國際專利商標事務所" />
  <meta property="og:locale" content="zh_TW" />
  <meta property="og:title" content="<?php echo htmlspecialchars($pageTitle, ENT_QUOTES, 'UTF-8'); ?>" />
  <meta property="og:description" content="<?php echo htmlspecialchars($pageDescription, ENT_QUOTES, 'UTF-8'); ?>" />
  <meta property="og:url" content="<?php echo htmlspecialchars($canonicalUrl, ENT_QUOTES, 'UTF-8'); ?>" />
  <meta property="og:image" content="<?php echo htmlspecialchars($shareImage, ENT_QUOTES, 'UTF-8'); ?>" />
  <meta name="twitter:card" content="summary_large_image" />
  <meta name="twitter:title" content="<?php echo htmlspecialchars($pageTitle, ENT_QUOTES, 'UTF-8'); ?>" />
  <meta name="twitter:description" content="<?php echo htmlspecialchars($pageDescription, ENT_QUOTES, 'UTF-8'); ?>" />
  <meta name="twitter:image" content="<?php echo htmlspecialchars($shareImage, ENT_QUOTES, 'UTF-8'); ?>" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700;800&amp;family=Noto+Sans+TC:wght@300;400;500;700;900&amp;display=swap"
    rel="stylesheet">
  <link rel="stylesheet" href="assets/css/main.css">
  <link rel="stylesheet" href="assets/css/header.css">
  <link rel="stylesheet" href="assets/css/language-switch.css">
  <link rel="stylesheet" href="assets/css/footer.css">
<?php foreach ($pageStyles as $pageStyle) { ?>
  <link rel="stylesheet" href="<?php echo htmlspecialchars($pageStyle, ENT_QUOTES, 'UTF-8'); ?>">
<?php } ?>
</head>

<body>
  <div class="page">

    <!-- ======================================================
       MOBILE MENU
  ====================================================== -->
    <div class="mobile-menu" id="mobileMenu" role="dialog" aria-label="行動版選單">
      <button class="mobile-menu-close" id="mobileMenuClose" aria-label="關閉選單">✕</button>
      <a href="about.php" class="mobile-nav-link" onclick="closeMobileMenu()">關於聯律</a>
      <a href="services.php" class="mobile-nav-link" onclick="closeMobileMenu()">服務範圍</a>
      <a href="foreign-patent.php" class="mobile-nav-link<?php if ($activeItem === 'patent') { ?> is-active<?php } ?>" onclick="closeMobileMenu()">國外專利</a>
      <a href="domestic-patent.php" class="mobile-nav-link<?php if ($activeItem === 'domestic-patent') { ?> is-active<?php } ?>" onclick="closeMobileMenu()">國內專利</a>
      <a href="foreign-trademark.php" class="mobile-nav-link<?php if ($activeItem === 'trademark') { ?> is-active<?php } ?>" onclick="closeMobileMenu()">國外商標</a>
      <a href="domestic-trademark.php" class="mobile-nav-link<?php if ($activeItem === 'domestic-trademark') { ?> is-active<?php } ?>" onclick="closeMobileMenu()">國內商標</a>
      <a href="links.php" class="mobile-nav-link" onclick="closeMobileMenu()">相關網站</a>
      <a href="contact.php" class="mobile-nav-link" onclick="closeMobileMenu()">聯絡我們</a>
      <div class="mobile-menu-actions">
        <a href="tel:063137562" class="mobile-menu-btn primary" aria-label="撥打電話 (06) 313-7562">
          <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
          (06) 313-7562
        </a>
        <a href="https://line.me/ti/p/vR8-kFuiI_" target="_blank" rel="noopener noreferrer" class="mobile-menu-btn" aria-label="LINE 線上諮詢">
          LINE 諮詢
        </a>
      </div>
    </div>

    <!-- ======================================================
       HEADER
  ====================================================== -->
    <div class="header-wrap" id="headerWrap">
      <div class="container">
        <header class="header">
          <a href="<?php echo $sectionBase; ?>" class="brand" aria-label="聯律國際專利商標事務所首頁">
            <div class="logo" aria-label="聯律Logo"></div>
            <div>
              <div class="brand-title"><span>聯律</span>國際專利商標事務所</div>
              <div class="brand-sub">Lan Loop International Patent &amp; Trademark Office</div>
            </div>
          </a>

          <nav class="nav" aria-label="主選單">
            <a href="about.php"<?php if ($activePage === 'about') { ?> class="is-active"<?php } ?>>關於聯律</a>
            <a href="services.php"<?php if ($activePage === 'services') { ?> class="is-active"<?php } ?>>服務範圍</a>
            <div class="nav-item has-dropdown">
              <a href="<?php echo $sectionBase; ?>#quick-links" class="dropdown-trigger<?php if ($activePage === 'items') { ?> is-active<?php } ?>">
                服務項目 <span class="dropdown-arrow">▾</span>
              </a>
              <div class="dropdown-menu">
                <a href="foreign-patent.php" class="dropdown-link">
                  <div>
                    <span class="dropdown-title">國外專利</span>
                    <span class="dropdown-desc">Foreign Patent</span>
                  </div>
                </a>
                <a href="domestic-patent.php" class="dropdown-link">
                  <div>
                    <span class="dropdown-title">國內專利</span>
                    <span class="dropdown-desc">Domestic Patent</span>
                  </div>
                </a>
                <a href="foreign-trademark.php" class="dropdown-link">
                  <div>
                    <span class="dropdown-title">國外商標</span>
                    <span class="dropdown-desc">Foreign Trademark</span>
                  </div>
                </a>
                <a href="domestic-trademark.php" class="dropdown-link">
                  <div>
                    <span class="dropdown-title">國內商標</span>
                    <span class="dropdown-desc">Domestic Trademark</span>
                  </div>
                </a>
              </div>
            </div>
            <a href="links.php"<?php if ($activePage === 'links') { ?> class="is-active"<?php } ?>>相關網站</a>
            <a href="contact.php"<?php if ($activePage === 'contact') { ?> class="is-active"<?php } ?>>聯絡我們</a>
            <a href="tel:063137562" class="nav-phone" title="點擊撥打專線 (06) 313-7562" aria-label="撥打電話 (06) 313-7562">
              <svg viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M2 3a1 1 0 011-1h2.5a1 1 0 011 1v1.5a1 1 0 01-.5.87l-1 .58a9 9 0 004 4l.58-1a1 1 0 01.87-.5H14a1 1 0 011 1V12a1 1 0 01-1 1h-1C6.27 13 2 8.73 2 4V3z"
                  fill="currentColor" />
              </svg>
              （06）313-7562
            </a>
            <div class="nav-lang-wrap nav-lang-wrap--desktop" data-language-switch>
              <button class="nav-lang" type="button" aria-label="切換語系" aria-expanded="false" aria-haspopup="true">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><circle cx="12" cy="12" r="9"></circle><path d="M3 12h18M12 3c2.4 2.5 3.7 5.5 3.7 9s-1.3 6.5-3.7 9c-2.4-2.5-3.7-5.5-3.7-9S9.6 5.5 12 3z"></path></svg>
              </button>
              <div class="lang-dropdown" aria-label="語言選單">
                <span class="lang-opt is-current" lang="zh-Hant" aria-current="page">繁體中文</span>
                <a class="lang-opt" href="<?php echo htmlspecialchars($englishPage, ENT_QUOTES, 'UTF-8'); ?>" lang="en" hreflang="en">English</a>
              </div>
            </div>

          </nav>

          <div class="header-mobile-actions">
            <div class="nav-lang-wrap nav-lang-wrap--mobile" data-language-switch>
              <button class="nav-lang" type="button" aria-label="切換語系" aria-expanded="false" aria-haspopup="true">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><circle cx="12" cy="12" r="9"></circle><path d="M3 12h18M12 3c2.4 2.5 3.7 5.5 3.7 9s-1.3 6.5-3.7 9c-2.4-2.5-3.7-5.5-3.7-9S9.6 5.5 12 3z"></path></svg>
              </button>
              <div class="lang-dropdown" aria-label="語言選單">
                <span class="lang-opt is-current" lang="zh-Hant" aria-current="page">繁體中文</span>
                <a class="lang-opt" href="<?php echo htmlspecialchars($englishPage, ENT_QUOTES, 'UTF-8'); ?>" lang="en" hreflang="en">English</a>
              </div>
            </div>
            <button class="hamburger" id="hamburger" aria-label="開啟選單" aria-expanded="false" aria-controls="mobileMenu">
              <span aria-hidden="true"></span><span aria-hidden="true"></span><span aria-hidden="true"></span>
            </button>
          </div>
        </header>
      </div>
    </div>
