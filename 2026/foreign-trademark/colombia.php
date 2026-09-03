<?php
$baseHref = '../';
$pageTitle = '哥倫比亞商標 | 國外商標 | 聯律國際專利商標事務所';
$pageDescription = '哥倫比亞商標申請要件、申請程序、商標權期限及爭議救濟資訊。';
$pageStyles = array('assets/css/page.css', 'assets/css/foreign-patent.css', 'assets/css/country-article.css');
$activePage = 'items';
$activeItem = 'trademark';
include dirname(__FILE__) . '/../include/header.php';
?>

<main class="country-patent-page">
  <section class="page-banner" aria-hidden="true"><div class="page-banner__image"></div></section>
  <div class="container">
    <div class="page-content">
      <header class="page-header" aria-labelledby="colombia-trademark-title">
        <h1 id="colombia-trademark-title">國外商標 <small>Foreign Trademark</small></h1>
        <nav class="page-breadcrumb" aria-label="麵包屑">
          <a href="index">首頁</a><span aria-hidden="true">/</span>
          <a href="foreign-trademark">國外商標</a><span aria-hidden="true">/</span>
          <span aria-current="page">國外商標制度</span>
        </nav>
      </header>

      <article class="country-article colombia-article article-content article-panel reveal">
        <div class="country-article-heading">
          <div><p class="country-article-kicker">Colombia Trademark</p><h2>哥倫比亞商標</h2></div>
          <a class="country-article-back" href="foreign-trademark">回國外商標制度列表</a>
        </div>

        <div class="article-sheet">
          <header class="article-sheet-header">
            <p>主管機關：<a href="https://sedeelectronica.sic.gov.co/" target="_blank" rel="noopener noreferrer">哥倫比亞工商監督局（Superintendencia de Industria y Comercio, SIC）</a></p>
          </header>

          <section class="article-row">
            <h3 class="article-section-title">申請要件</h3>
            <div class="article-body">
              <p>讓消費者能夠識別個人或公司的產品或服務，以使將其與競爭對手的產品或服務區分開來。</p>
              <h4>不得註冊理由</h4>
              <ul class="content-list">
                <li>- 缺乏顯著性之通用名稱、說明性文字或標誌</li>
                <li>- 與先前註冊或申請中之商標相同或近似</li>
                <li>- 違反道德、公共秩序之文字圖樣</li>
                <li>- 未經同意使用他人姓名、肖像，或侵害他人商號、國家標誌等權利</li>
              </ul>
            </div>
          </section>

          <section class="article-row">
            <h3 class="article-section-title">優先權</h3>
            <div class="article-body">
              <p>若該商標已在台灣或其他巴黎公約會員國第一次提出申請，可在6個月內向SIC主張優先權。</p>
            </div>
          </section>

          <section class="article-row">
            <h3 class="article-section-title">申請程序</h3>
            <div class="article-body">
              <ol class="content-list">
                <li><strong>商標檢索：</strong>於SIC商標資料庫進行檢索，確認是否有相同或近似之商標已存在。</li>
                <li><strong>提交申請：</strong>準備商標圖樣、指定商品/服務類別（採用尼斯分類），並載明申請人名稱、地址、國籍等資料，由當地代理人向SIC遞交申請。</li>
                <li><strong>官方審查：</strong>先進行形式審查；形式審查通過後公告。</li>
                <li><strong>公告：</strong>形式審查通過後於工業財產公報公告，公告期間為30個工作天，任何人得於此期間提出異議，公告期滿後始進行實質審查（顯著性及是否與他案商標衝突）。</li>
                <li><strong>核准發證：</strong>公告期滿無人異議，或異議經審定不成立，核發商標註冊證。</li>
              </ol>
            </div>
          </section>

          <section class="article-row">
            <h3 class="article-section-title">審查期間</h3>
            <div class="article-body">
              <p>約8至12個月（若無異議、核駁）。</p>
            </div>
          </section>

          <section class="article-row">
            <h3 class="article-section-title">商標權</h3>
            <div class="article-body">
              <ul class="content-list">
                <li><strong>權利期間：</strong>自註冊日起10年有效。</li>
                <li><strong>延展：</strong>屆滿後每次可延展10年，得無限次延展。</li>
                <li><strong>延展寬限期：</strong>屆滿後6個月內為延展寬限期（須加繳附加費）。</li>
                <li><strong>使用證明：</strong>哥倫比亞無強制申報使用證明之規定；惟商標自註冊日起連續3年未使用，得由第三人申請撤銷。</li>
              </ul>
            </div>
          </section>
        </div>
      </article>
    </div>
  </div>
</main>

<?php include dirname(__FILE__) . '/../include/footer.php'; ?>
