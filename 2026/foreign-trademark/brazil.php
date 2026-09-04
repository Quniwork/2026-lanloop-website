<?php
$baseHref = '../';
$pageTitle = '巴西商標 | 國外商標 | 聯律國際專利商標事務所';
$pageDescription = '巴西商標申請要件、申請程序、商標權期限及爭議救濟資訊。';
$pageStyles = array('assets/css/page.css', 'assets/css/foreign-patent.css', 'assets/css/country-article.css');
$activePage = 'items';
$activeItem = 'trademark';
include dirname(__FILE__) . '/../include/header.php';
?>

<main class="country-patent-page">
  <section class="page-banner" aria-hidden="true"><div class="page-banner__image"></div></section>
  <div class="container">
    <div class="page-content">
      <header class="page-header" aria-labelledby="brazil-trademark-title">
        <h1 id="brazil-trademark-title">國外商標 <small>Foreign Trademark</small></h1>
        <nav class="page-breadcrumb" aria-label="麵包屑">
          <a href="index.php">首頁</a><span aria-hidden="true">/</span>
          <a href="foreign-trademark.php">國外商標</a><span aria-hidden="true">/</span>
          <span aria-current="page">國外商標制度</span>
        </nav>
      </header>

      <article class="country-article brazil-article article-content article-panel reveal">
        <div class="country-article-heading">
          <div><p class="country-article-kicker">Brazil Trademark</p><h2>巴西商標</h2></div>
          <a class="country-article-back" href="foreign-trademark.php">回國外商標制度列表</a>
        </div>

        <div class="article-sheet">
          <header class="article-sheet-header">
            <p>主管機關：<a href="https://www.gov.br/inpi/pt-br" target="_blank" rel="noopener noreferrer">國家工業財產局（Instituto Nacional da Propriedade Industrial, INPI）</a></p>
          </header>

          <section class="article-row">
            <h3 class="article-section-title">申請要件</h3>
            <div class="article-body">
              <p>凡具識別性且非屬法律禁止規定之視覺可感知標誌。</p>
              <h4>不能註冊事由</h4>
              <ul class="content-list">
                <li>違反善良風俗或道德之文字、圖形、設計或任何其他標誌。</li>
                <li>摹仿或仿製他人商號名稱或公司名稱之具特徵性或區別性之要素，且足以導致與該等識別標誌產生混淆或誤認之虞者。</li>
                <li>屬通用性、必要性、共通性、通俗性或僅具描述性之標誌。</li>
                <li>單獨之字母、數字及日期，但具有足夠之識別性顯著特徵者不在此限。</li>
              </ul>
            </div>
          </section>

          <section class="article-row">
            <h3 class="article-section-title">優先權</h3>
            <div class="article-body">
              <p>若該商標已在台灣或其他WTO會員國第一次提出申請，可在6個月內向巴西國家工業財產局主張優先權。</p>
            </div>
          </section>

          <section class="article-row">
            <h3 class="article-section-title">申請程序</h3>
            <div class="article-body">
              <ol class="content-list">
                <li><strong>商標檢索：</strong>在提交前先於INPI資料庫進行檢索，確認是否有相同或近似商標已存在，以降低被駁回風險。</li>
                <li><strong>提交申請：</strong>準備商標圖樣、指定商品/服務類別(採用尼斯分類)，並載明申請人名稱、申請人地址、申請人國籍、商標圖樣、指定商品及服務，由當地代理人向INPI遞交。</li>
                <li><strong>官方審查：</strong>包含形式審查(文件格式)與實質審查(是否具備顯著性、是否與他案衝突等)。</li>
                <li><strong>公告：</strong>審核通過會進入官方公告期，為期2個月，在此期間內利害關係人可提出異議。</li>
                <li><strong>核准發證：</strong>公告期滿無人異議，或異議不成立，並核發商標註冊證。</li>
              </ol>
            </div>
          </section>

          <section class="article-row">
            <h3 class="article-section-title">審查期間</h3>
            <div class="article-body">
              <p>約12-20個月。(若無核駁)</p>
            </div>
          </section>

          <section class="article-row">
            <h3 class="article-section-title">商標權</h3>
            <div class="article-body">
              <ul class="content-list">
                <li><strong>權利期間：</strong>自註冊日起10年有效。</li>
                <li><strong>延展：</strong>屆滿後每次可延展10年，延展於屆滿前6個月可提出，得無限次延展。</li>
                <li><strong>延展寬限期：</strong>10年期間屆滿後6個月內為延展寬限期。</li>
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
