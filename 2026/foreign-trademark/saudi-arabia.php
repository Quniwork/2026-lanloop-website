<?php
$baseHref = '../';
$pageTitle = '沙烏地阿拉伯商標 | 國外商標 | 聯律國際專利商標事務所';
$pageDescription = '沙烏地阿拉伯商標申請要件、申請程序、商標權期限及爭議救濟資訊。';
$pageStyles = array('assets/css/page.css', 'assets/css/foreign-patent.css', 'assets/css/country-article.css');
$activePage = 'items';
$activeItem = 'trademark';
include dirname(__FILE__) . '/../include/header.php';
?>

<main class="country-patent-page">
  <section class="page-banner" aria-hidden="true"><div class="page-banner__image"></div></section>
  <div class="container">
    <div class="page-content">
      <header class="page-header" aria-labelledby="saudi-arabia-trademark-title">
        <h1 id="saudi-arabia-trademark-title">國外商標 <small>Foreign Trademark</small></h1>
        <nav class="page-breadcrumb" aria-label="麵包屑">
          <a href="index.php">首頁</a><span aria-hidden="true">/</span>
          <a href="foreign-trademark.php">國外商標</a><span aria-hidden="true">/</span>
          <span aria-current="page">國外商標制度</span>
        </nav>
      </header>

      <article class="country-article saudi-arabia-article article-content article-panel reveal">
        <div class="country-article-heading">
          <div><p class="country-article-kicker">Saudi Arabia Trademark</p><h2>沙烏地阿拉伯商標</h2></div>
          <a class="country-article-back" href="foreign-trademark.php">回國外商標制度列表</a>
        </div>

        <div class="article-sheet">
          <header class="article-sheet-header">
            <p>主管機關：沙烏地阿拉伯智慧財產局（Saudi Authority for Intellectual Property, SAIP）</p>
          </header>

          <section class="article-row">
            <h3 class="article-section-title">申請要件</h3>
            <div class="article-body">
              <ul class="content-list">
                <li>讓消費者能夠識別個人或公司的產品或服務，以使將其與競爭對手的產品或服務區分開來。</li>
                <li>- 缺乏顯著性之通用名稱、說明性文字或標誌。
                  <ul class="content-list content-sublist">
                    <li>- 與先前註冊或申請中之商標相同或近似。</li>
                    <li>- 違反公共道德、伊斯蘭教義，或含有宗教、皇室、國家等標誌。</li>
                    <li>- 指定於禁止註冊之商品，如酒類（第32、33類）、豬肉製品（第29類）等。</li>
                  </ul>
                </li>
              </ul>
            </div>
          </section>

          <section class="article-row">
            <h3 class="article-section-title">優先權</h3>
            <div class="article-body">
              <p>若該商標已在台灣或其他WTO會員國第一次提出申請，可在6個月內向SAIP主張優先權。</p>
            </div>
          </section>

          <section class="article-row">
            <h3 class="article-section-title">申請程序</h3>
            <div class="article-body">
              <ol class="content-list">
                <li><strong>商標檢索：</strong>透過SAIP線上系統於資料庫進行檢索，確認是否有相同或近似之商標已存在。</li>
                <li><strong>提交申請：</strong>透過SAIP線上平台準備商標圖樣、指定商品/服務類別（採尼斯分類），並載明申請人資料，由當地代理人遞交申請。</li>
                <li><strong>官方審查：</strong>包含形式審查與實質審查（是否具顯著性、是否與他案商標衝突、是否屬禁止註冊商品等）。</li>
                <li><strong>公告：</strong>審查通過後於官方公報公告，公告期間為60天，任何人得於此期間提出異議。</li>
                <li><strong>核准發證：</strong>公告期滿無人異議，或異議不成立，繳納規費後核發商標註冊證。</li>
              </ol>
            </div>
          </section>

          <section class="article-row">
            <h3 class="article-section-title">審查期間</h3>
            <div class="article-body">
              <p>約6-12個月（若無異議、核駁）。</p>
            </div>
          </section>

          <section class="article-row">
            <h3 class="article-section-title">商標權</h3>
            <div class="article-body">
              <ul class="content-list">
                <li><strong>權利期間：</strong>依伊斯蘭曆計算為10年，自申請日起有效。</li>
                <li><strong>延展：</strong>屆滿後每次可延展10年，得無限次延展；應於保護期間最後一年內提出申請。</li>
                <li><strong>延展寬限期：</strong>屆滿後6個月內為延展寬限期，逾期加收罰款。</li>
                <li><strong>使用證明：</strong>延展不須提供使用證據。</li>
              </ul>
            </div>
          </section>
        </div>
      </article>
    </div>
  </div>
</main>

<?php include dirname(__FILE__) . '/../include/footer.php'; ?>
