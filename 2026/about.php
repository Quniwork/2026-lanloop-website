<?php
$pageTitle = '關於聯律 | 聯律國際專利商標事務所';
$pageDescription = '認識聯律國際專利商標事務所，以及我們在國內外專利、商標申請、檢索、分析與侵權鑑定方面的專業經驗。';
$pageStyles = array('assets/css/page.css', 'assets/css/about.css');
$activePage = 'about';
include dirname(__FILE__) . '/include/header.php';
?>

<main class="about-page">
  <section class="page-banner" aria-hidden="true">
    <div class="page-banner__image"></div>
  </section>

  <div class="container">
    <div class="page-content">
      <header class="page-header" aria-labelledby="about-title">
        <h1 id="about-title">關於我們 <small>About Lan Loop</small></h1>
        <nav class="page-breadcrumb" aria-label="麵包屑">
          <a href="index.php">首頁</a>
          <span aria-hidden="true">/</span>
          <span aria-current="page">關於我們</span>
        </nav>
      </header>

      <div class="page-main">
        <section class="about-intro" aria-label="聯律介紹">
          <div class="about-intro__image reveal reveal-left">
            <img src="assets/images/page2_img1.webp" alt="聯律國際專利商標事務所" width="338" height="250" loading="lazy" decoding="async">
          </div>
          <div class="about-intro__content reveal reveal-right reveal-delay-1">
            <p>　　聯律國際專利商標事務所位於台灣台南市，成立於一九九三年，主要提供國內外專利、商標等智慧財產權相關專業服務。</p>
            <p>　　在知識經濟的時代，提供最完整的資訊及申請時的最佳權利為我們的主要理念，並使我方客戶可以知己知彼且更具領導性競爭力。</p>
            <p>　　本所具多年國內外專利商標申請、檢索、分析及侵權鑑定實務，申請前我們將提供詳盡的國內外相關資料以迴避他人設計，進而減少重覆研發之損失及申請經費，並經由分析他人設計再加以討論改進以提升核准率，必能對貴公司市場經營開拓有所助益。</p>
          </div>
        </section>
      </div>
    </div>
  </div>
</main>

<?php include dirname(__FILE__) . '/include/footer.php'; ?>
