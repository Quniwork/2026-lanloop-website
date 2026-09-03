<?php
$baseHref = '../';
$pageTitle = '以色列商標 | 國外商標 | 聯律國際專利商標事務所';
$pageDescription = '以色列商標申請要件、申請程序、商標權期限及爭議救濟資訊。';
$pageStyles = array('assets/css/page.css', 'assets/css/foreign-patent.css', 'assets/css/country-article.css');
$activePage = 'items';
$activeItem = 'trademark';
include dirname(__FILE__) . '/../include/header.php';
?>

<main class="country-patent-page">
  <section class="page-banner" aria-hidden="true"><div class="page-banner__image"></div></section>
  <div class="container">
    <div class="page-content">
      <header class="page-header" aria-labelledby="israel-trademark-title">
        <h1 id="israel-trademark-title">國外商標 <small>Foreign Trademark</small></h1>
        <nav class="page-breadcrumb" aria-label="麵包屑">
          <a href="index.php">首頁</a><span aria-hidden="true">/</span>
          <a href="foreign-trademark.php">國外商標</a><span aria-hidden="true">/</span>
          <span aria-current="page">國外商標制度</span>
        </nav>
      </header>

      <article class="country-article israel-article article-content article-panel reveal">
        <div class="country-article-heading">
          <div><p class="country-article-kicker">Israel Trademark</p><h2>以色列商標</h2></div>
          <a class="country-article-back" href="foreign-trademark.php">回國外商標制度列表</a>
        </div>

        <div class="article-sheet">
          <header class="article-sheet-header">
            <p>主管機關：以色列專利局商標處（Israel Patent Office / Israel Trademarks Department, ILPO）</p>
          </header>

          <section class="article-row">
            <h3 class="article-section-title">申請要件</h3>
            <div class="article-body">
              <p><strong>具備識別性：</strong>標誌能夠將標誌所有人的商品與他人的商品區分開來。</p>
              <h4>不得註冊事由</h4>
              <ul class="content-list">
                <li>違反或可能違反公共政策或道德的標誌。</li>
                <li>可能誤導公眾的商標、含有虛假原產地資訊的商標以及鼓勵不正當競爭的商標。</li>
                <li>與他人或其企業的名稱相同或相似。</li>
              </ul>
            </div>
          </section>

          <section class="article-row">
            <h3 class="article-section-title">優先權</h3>
            <div class="article-body">
              <p>若該商標已在台灣或其他WTO會員國第一次提出申請，可在6個月內向ILPO主張優先權。</p>
            </div>
          </section>

          <section class="article-row">
            <h3 class="article-section-title">申請程序</h3>
            <div class="article-body">
              <ol class="content-list">
                <li><strong>商標檢索：</strong>於ILPO線上資料庫進行檢索，確認是否有相同或近似之商標已存在。</li>
                <li><strong>提交申請：</strong>準備商標圖樣、指定商品/服務類別（採用尼斯分類），並載明申請人名稱、地址、國籍等資料，向ILPO遞交申請。</li>
                <li><strong>官方審查：</strong>包含形式審查與實質審查（顯著性、是否與他案商標衝突等）。</li>
                <li><strong>公告：</strong>審查通過後於商標公報公告，公告期間為3個月且不得延展，任何人得於此期間提出異議。</li>
                <li><strong>核准發證：</strong>公告期滿無人異議，或異議程序終結後有利於申請人，核發商標註冊證。</li>
              </ol>
            </div>
          </section>

          <section class="article-row">
            <h3 class="article-section-title">審查期間</h3>
            <div class="article-body">
              <p>約9至12個月（若無核駁）。</p>
            </div>
          </section>

          <section class="article-row">
            <h3 class="article-section-title">商標權</h3>
            <div class="article-body">
              <ul class="content-list">
                <li><strong>權利期間：</strong>自申請日起10年有效。</li>
                <li><strong>延展：</strong>屆滿後每次可延展10年，得無限次延展；應於屆滿前3個月內申請延展。</li>
                <li><strong>延展寬限期：</strong>屆滿後6個月內為延展寬限期。</li>
                <li><strong>使用證明：</strong>以色列無強制申報使用證明之規定；惟商標自註冊日起連續3年未使用，得由第三人申請廢止。</li>
              </ul>
            </div>
          </section>
        </div>
      </article>
    </div>
  </div>
</main>

<?php include dirname(__FILE__) . '/../include/footer.php'; ?>
