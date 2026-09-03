<?php
$baseHref = '../';
$pageTitle = '南非商標 | 國外商標 | 聯律國際專利商標事務所';
$pageDescription = '南非商標申請要件、申請程序、商標權期限及爭議救濟資訊。';
$pageStyles = array('assets/css/page.css', 'assets/css/foreign-patent.css', 'assets/css/country-article.css');
$activePage = 'items';
$activeItem = 'trademark';
include dirname(__FILE__) . '/../include/header.php';
?>

<main class="country-patent-page">
  <section class="page-banner" aria-hidden="true"><div class="page-banner__image"></div></section>
  <div class="container">
    <div class="page-content">
      <header class="page-header" aria-labelledby="south-africa-trademark-title">
        <h1 id="south-africa-trademark-title">國外商標 <small>Foreign Trademark</small></h1>
        <nav class="page-breadcrumb" aria-label="麵包屑">
          <a href="index.php">首頁</a><span aria-hidden="true">/</span>
          <a href="foreign-trademark.php">國外商標</a><span aria-hidden="true">/</span>
          <span aria-current="page">國外商標制度</span>
        </nav>
      </header>

      <article class="country-article south-africa-article article-content article-panel reveal">
        <div class="country-article-heading">
          <div><p class="country-article-kicker">South Africa Trademark</p><h2>南非商標</h2></div>
          <a class="country-article-back" href="foreign-trademark.php">回國外商標制度列表</a>
        </div>

        <div class="article-sheet">
          <header class="article-sheet-header">
            <p>主管機關：南非公司暨智慧財產委員會（Companies and Intellectual Property Commission, CIPC）</p>
          </header>

          <section class="article-row">
            <h3 class="article-section-title">申請要件</h3>
            <div class="article-body">
              <p>如果商標能夠用於區分一個經營者的商品和/或服務與另一個經營者的商品和/或服務，則可以註冊該商標，並且必須符合以下條件：</p>
              <ul class="content-list">
                <li>它並非僅指在貿易中可以用來標明商品或服務的種類、品質、數量、預期用途、價值、地理來源或其他特徵，或標明商品或服務的生產方式或提供服務的時間或方式的標誌或指示；</li>
                <li>在該行業中尚未成為慣例；</li>
                <li>它不代表受保護的標誌， 例如國旗，也不代表國家紀念碑；</li>
                <li>它不具冒犯性，也不違反法律、良好道德或性質或使用方式上的欺騙性；</li>
                <li>不存在先前的衝突權利。</li>
              </ul>
            </div>
          </section>

          <section class="article-row">
            <h3 class="article-section-title">優先權</h3>
            <div class="article-body">
              <p>若該商標已在台灣或其他WTO會員國第一次提出申請，可在6個月內向CIPC主張優先權。</p>
            </div>
          </section>

          <section class="article-row">
            <h3 class="article-section-title">申請程序</h3>
            <div class="article-body">
              <ol class="content-list">
                <li><strong>商標檢索：</strong>透過CIPC電子服務平台於資料庫進行檢索，確認是否有相同或近似之商標已存在。</li>
                <li><strong>提交申請：</strong>準備商標圖樣、指定商品/服務類別，並載明申請人名稱、地址、國籍等資料，由當地代理人向CIPC遞交申請。</li>
                <li><strong>官方審查：</strong>先進行形式審查，確認符合法定要件，再分派審查官進行實質審查（是否具備顯著性、是否與他案商標衝突等）。</li>
                <li><strong>公告：</strong>審查核准後公告，公告期間為3個月，任何利害關係人得於此期間提出異議。</li>
                <li><strong>核准發證：</strong>公告期滿無人異議，或異議不成立，核發商標註冊證。</li>
              </ol>
            </div>
          </section>

          <section class="article-row">
            <h3 class="article-section-title">審查期間</h3>
            <div class="article-body">
              <p>約18至24個月（若無異議、核駁）。</p>
            </div>
          </section>

          <section class="article-row">
            <h3 class="article-section-title">商標權</h3>
            <div class="article-body">
              <ul class="content-list">
                <li><strong>權利期間：</strong>自申請日起10年有效。</li>
                <li><strong>延展：</strong>屆滿後每次可延展10年，得無限次延展。</li>
                <li><strong>延展寬限期：</strong>應於屆滿前6個月內申請延展，或於屆滿後6個月之寬限期內申請（須加繳附加費）。</li>
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
