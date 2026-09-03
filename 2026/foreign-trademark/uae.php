<?php
$baseHref = '../';
$pageTitle = '阿拉伯聯合大公國商標 | 國外商標 | 聯律國際專利商標事務所';
$pageDescription = '阿拉伯聯合大公國商標申請要件、申請程序、商標權期限及爭議救濟資訊。';
$pageStyles = array('assets/css/page.css', 'assets/css/foreign-patent.css', 'assets/css/country-article.css');
$activePage = 'items';
$activeItem = 'trademark';
include dirname(__FILE__) . '/../include/header.php';
?>

<main class="country-patent-page">
  <section class="page-banner" aria-hidden="true"><div class="page-banner__image"></div></section>
  <div class="container">
    <div class="page-content">
      <header class="page-header" aria-labelledby="uae-trademark-title">
        <h1 id="uae-trademark-title">國外商標 <small>Foreign Trademark</small></h1>
        <nav class="page-breadcrumb" aria-label="麵包屑">
          <a href="index.php">首頁</a><span aria-hidden="true">/</span>
          <a href="foreign-trademark.php">國外商標</a><span aria-hidden="true">/</span>
          <span aria-current="page">國外商標制度</span>
        </nav>
      </header>

      <article class="country-article uae-article article-content article-panel reveal">
        <div class="country-article-heading">
          <div><p class="country-article-kicker">UAE Trademark</p><h2>阿拉伯聯合大公國商標</h2></div>
          <a class="country-article-back" href="foreign-trademark.php">回國外商標制度列表</a>
        </div>

        <div class="article-sheet">
          <header class="article-sheet-header">
            <p>主管機關：阿聯酋經濟與旅遊部商標局（Ministry of Economy and Tourism, MoET）</p>
          </header>

          <section class="article-row">
            <h3 class="article-section-title">申請要件</h3>
            <div class="article-body">
              <p><strong>具備識別性：</strong>商標必須能夠區別申請人商品或服務與他人商品或服務。</p>
              <h4>不得註冊事由</h4>
              <ul class="content-list">
                <li>第29類之豬肉、第41類之夜總會、第43類之酒吧服務、第33類酒精飲料。</li>
                <li>違反公共道德和信仰。</li>
                <li>與在先商標近似。</li>
                <li>紅新月會或紅十字會的標誌及其他類似標誌及仿製品。</li>
              </ul>
            </div>
          </section>

          <section class="article-row">
            <h3 class="article-section-title">優先權</h3>
            <div class="article-body">
              <p>若該商標已在台灣或其他WTO會員國第一次提出申請，可在6個月內向MoET主張優先權。</p>
            </div>
          </section>

          <section class="article-row">
            <h3 class="article-section-title">申請程序</h3>
            <div class="article-body">
              <ol class="content-list">
                <li><strong>商標檢索：</strong>於阿聯酋經濟部商標資料庫進行檢索，確認是否有相同或近似之商標已存在。</li>
                <li><strong>提交申請：</strong>準備商標圖樣、指定商品/服務類別，並載明申請人名稱、地址、國籍等資料，檢附經公證及認證之委任代理人授權書，由當地代理人向MoET遞交；申請文件須以阿拉伯文提出，非阿拉伯文商標須檢附阿拉伯文翻譯。</li>
                <li><strong>官方審查：</strong>審查是否符合法定要件、是否具備顯著性、是否與他案商標近似。</li>
                <li><strong>公告：</strong>審查通過後於阿拉伯文報紙及官方商標公報公告，公告期間為30天，任何人得於此期間提出異議。</li>
                <li><strong>核准發證：</strong>公告期滿無人異議，核發商標註冊證。</li>
              </ol>
            </div>
          </section>

          <section class="article-row">
            <h3 class="article-section-title">審查期間</h3>
            <div class="article-body">
              <p>約3-6個月（若無異議、核駁）。</p>
            </div>
          </section>

          <section class="article-row">
            <h3 class="article-section-title">商標權</h3>
            <div class="article-body">
              <ul class="content-list">
                <li><strong>權利期間：</strong>自申請日起10年有效。</li>
                <li><strong>延展：</strong>屆滿後每次可延展10年，得無限次延展。</li>
                <li><strong>延展寬限期：</strong>屆滿後另有寬限期可申請延展（逾期加收滯納金）。</li>
                <li><strong>使用證明：</strong>阿聯酋無強制申報使用宣誓書之規定；惟商標自註冊日起連續5年未使用，得由第三人申請撤銷。</li>
              </ul>
            </div>
          </section>
        </div>
      </article>
    </div>
  </div>
</main>

<?php include dirname(__FILE__) . '/../include/footer.php'; ?>
