<?php
$baseHref = '../';
$pageTitle = '德國商標 | 國外商標 | 聯律國際專利商標事務所';
$pageDescription = '德國商標申請要件、申請程序、商標權期限及爭議救濟資訊。';
$pageStyles = array('assets/css/page.css', 'assets/css/foreign-patent.css', 'assets/css/country-article.css');
$activePage = 'items';
$activeItem = 'trademark';
include dirname(__FILE__) . '/../include/header.php';
?>

<main class="country-patent-page">
  <section class="page-banner" aria-hidden="true"><div class="page-banner__image"></div></section>
  <div class="container">
    <div class="page-content">
      <header class="page-header" aria-labelledby="germany-trademark-title">
        <h1 id="germany-trademark-title">國外商標 <small>Foreign Trademark</small></h1>
        <nav class="page-breadcrumb" aria-label="麵包屑">
          <a href="index">首頁</a><span aria-hidden="true">/</span>
          <a href="foreign-trademark">國外商標</a><span aria-hidden="true">/</span>
          <span aria-current="page">國外商標制度</span>
        </nav>
      </header>

      <article class="country-article germany-article article-content article-panel reveal">
        <div class="country-article-heading">
          <div><p class="country-article-kicker">Germany Trademark</p><h2>德國商標</h2></div>
          <a class="country-article-back" href="foreign-trademark">回國外商標制度列表</a>
        </div>

        <div class="article-sheet">
          <header class="article-sheet-header">
            <p>主管機關： 德國專利商標局（Deutsches Patent- und Markenamt, DPMA）</p>
          </header>

          <section class="article-row">
            <h3 class="article-section-title">申請要件</h3>
            <div class="article-body">
              <ul class="content-list">
                <li><strong>具顯著性：</strong>如果標誌不能明確、準確地確定受保護的主題，則該標誌將不予註冊</li>
                <li><strong>非單純描述性：</strong>僅是對相關商品和服務進行描述，則該標誌將不予註冊。</li>
              </ul>
            </div>
          </section>

          <section class="article-row">
            <h3 class="article-section-title">優先權</h3>
            <div class="article-body">
              <p>若該商標已在台灣或其他WTO會員國第一次提出申請，可在6個月內向德國專利商標局主張優先權。</p>
            </div>
          </section>

          <section class="article-row">
            <h3 class="article-section-title">申請程序</h3>
            <div class="article-body">
              <ol class="content-list">
                <li><strong>商標檢索：</strong>在提交前先於DPMA資料庫進行檢索，確認是否有相同或近似商標已存在，以降低被異議風險。</li>
                <li><strong>提交申請：</strong>準備商標圖樣、指定商品/服務類別(採用尼斯分類)，並載明申請人名稱、申請人地址、申請人國籍、商標圖樣、指定商品及服務，由當地代理人向DPMA遞交。</li>
                <li><strong>官方審查：</strong>包含形式審查(文件格式)與實質審查(是否具備顯著性等)。</li>
                <li><strong>公告：</strong>審核通過會進入官方公告期，為期三個月，在此期間內任何人皆可提出異議。</li>
                <li><strong>核准發證：</strong>公告期滿無人異議，或異議不成立，並核發商標註冊證。</li>
              </ol>
            </div>
          </section>

          <section class="article-row">
            <h3 class="article-section-title">審查期間</h3>
            <div class="article-body">
              <p>約6-12個月。(若無核駁)</p>
            </div>
          </section>

          <section class="article-row">
            <h3 class="article-section-title">商標權</h3>
            <div class="article-body">
              <ul class="content-list">
                <li><strong>權利期間：</strong>自申請日起10年有效。</li>
                <li><strong>延展：</strong>屆滿後每次可延展10年，延展於屆滿前6個月可提出，得無限次延展。</li>
                <li><strong>延展寬限期：</strong>10年期間屆滿後6個月內為延展寬限期。</li>
                <li><strong>使用證明：</strong>延展不須提供使用證據。</li>
              </ul>
            </div>
          </section>

          <section class="article-row">
            <h3 class="article-section-title">商標爭議救濟</h3>
            <div class="article-body">
              <p><strong>異議(opposition)：</strong>商標公佈後，所有人擔心新註冊商標與其已申請或已註冊的商標有混淆風險，通常可以提出異議。</p>
              <h4>宣告無效(invalidity)</h4>
              <p>無效理由如下:</p>
              <ul class="content-list">
                <li>商品或服務不具備任何顯著特徵</li>
                <li>完全由在現行語言中或在行業中已形成的善意和既定慣例中已成為習慣的標誌或指示組成</li>
                <li>違反公共政策或公認的道德原則</li>
                <li>包含州徽、州旗或其他國家象徵物，或國內地方政府或其他地方當局協會的徽章</li>
                <li>其他為保護原產地名稱、地理標誌、葡萄酒傳統術語而排除在註冊範圍之外的術語</li>
                <li>惡意申請</li>
                <li>因侵害在先權利</li>
              </ul>
              <p><strong>撤銷(revocation)：</strong>連續五年無正當理由不使用，任何人可提出撤銷。</p>
            </div>
          </section>
        </div>
      </article>
    </div>
  </div>
</main>

<?php include dirname(__FILE__) . '/../include/footer.php'; ?>
