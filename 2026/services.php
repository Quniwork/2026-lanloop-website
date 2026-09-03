<?php
$pageTitle = '服務項目 | 聯律國際專利商標事務所';
$pageDescription = '聯律提供專利、商標、國外申請及智慧財產權相關專業服務。';
$pageStyles = array('assets/css/page.css', 'assets/css/services.css');
$activePage = 'services';
include dirname(__FILE__) . '/include/header.php';
?>

<main class="services-page">
  <section class="page-banner" aria-hidden="true">
    <div class="page-banner__image"></div>
  </section>

  <div class="container">
    <div class="page-content">
      <header class="page-header" aria-labelledby="services-title">
      <h1 id="services-title">服務項目 <small>Services</small></h1>
      <nav class="page-breadcrumb" aria-label="麵包屑">
        <a href="index">首頁</a>
        <span aria-hidden="true">/</span>
        <span aria-current="page">服務項目</span>
      </nav>
      </header>

      <div class="page-main">
        <section class="services-grid" aria-label="服務項目列表">
          <article class="service-group reveal reveal-delay-1">
            <h2>專利業務</h2>
            <ul>
              <li>發明、新型、設計專利申請</li>
              <li>訴願、行政訴訟、行政救濟程序</li>
              <li>舉發、答辯爭議案</li>
              <li>專利前案調查</li>
              <li>專利比對鑑定、分析建議</li>
              <li>專利顧問、侵權排除保護</li>
              <li>授權、讓與、變更、修正相關程序</li>
            </ul>
          </article>

          <article class="service-group reveal reveal-delay-2">
            <h2>商標業務</h2>
            <ul>
              <li>商標申請</li>
              <li>商標檢索、比對、分析</li>
              <li>訴願、行政訴訟、行政救濟程序</li>
              <li>異議、評定、答辯爭議案</li>
              <li>延展、移轉、授權、補證、變更、相關程序</li>
              <li>商標顧問、侵權排除保護</li>
            </ul>
          </article>

          <article class="service-group reveal reveal-delay-3">
            <h2>國外業務</h2>
            <ul>
              <li>國外專利、商標查詢</li>
              <li>國外專利、商標申請</li>
              <li>國外專利、商標保護</li>
            </ul>
          </article>

          <article class="service-group reveal reveal-delay-4">
            <h2>其他業務</h2>
            <ul>
              <li>繪圖（包含立體圖、組立圖、使用狀態圖）</li>
              <li>翻譯</li>
            </ul>
          </article>
        </section>
      </div>

    </div>
  </div>
</main>

<?php include dirname(__FILE__) . '/include/footer.php'; ?>
