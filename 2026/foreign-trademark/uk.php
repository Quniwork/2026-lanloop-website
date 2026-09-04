<?php
$baseHref = '../';
$pageTitle = '英國商標 | 國外商標 | 聯律國際專利商標事務所';
$pageDescription = '英國商標申請要件、申請程序、商標權期限及爭議救濟資訊。';
$pageStyles = array('assets/css/page.css', 'assets/css/foreign-patent.css', 'assets/css/country-article.css');
$activePage = 'items';
$activeItem = 'trademark';
include dirname(__FILE__) . '/../include/header.php';
?>

<main class="country-patent-page">
  <section class="page-banner" aria-hidden="true"><div class="page-banner__image"></div></section>
  <div class="container">
    <div class="page-content">
      <header class="page-header" aria-labelledby="uk-trademark-title">
        <h1 id="uk-trademark-title">國外商標 <small>Foreign Trademark</small></h1>
        <nav class="page-breadcrumb" aria-label="麵包屑">
          <a href="index.php">首頁</a><span aria-hidden="true">/</span>
          <a href="foreign-trademark.php">國外商標</a><span aria-hidden="true">/</span>
          <span aria-current="page">國外商標制度</span>
        </nav>
      </header>

      <article class="country-article uk-article article-content article-panel reveal">
        <div class="country-article-heading">
          <div><p class="country-article-kicker">United Kingdom Trademark</p><h2>英國商標</h2></div>
          <a class="country-article-back" href="foreign-trademark.php">回國外商標制度列表</a>
        </div>

        <div class="article-sheet">
          <header class="article-sheet-header">
            <p>主管機關：<a href="https://www.gov.uk/government/organisations/intellectual-property-office" target="_blank" rel="noopener noreferrer">英國智慧財產局（UK Intellectual Property Office, UKIPO）</a></p>
          </header>

          <section class="article-row">
            <h3 class="article-section-title">申請要件</h3>
            <div class="article-body">
              <p>商標可以包括: 字、聲音、標誌、顏色、這些任意組合</p>
              <h4>無法註冊的內容</h4>
              <ul class="content-list">
                <li>單純描述涉及的商品或服務</li>
                <li>過於普通且缺乏特色</li>
                <li>可能具有冒犯性</li>
                <li>使用未經授權的國旗</li>
                <li>使用官方徽章或標誌</li>
              </ul>
            </div>
          </section>

          <section class="article-row">
            <h3 class="article-section-title">優先權</h3>
            <div class="article-body">
              <p>若該商標已在台灣或其他WTO會員國第一次提出申請，可在6個月內向英國智慧財產局主張優先權。</p>
            </div>
          </section>

          <section class="article-row">
            <h3 class="article-section-title">申請程序</h3>
            <div class="article-body">
              <ol class="content-list">
                <li><strong>商標檢索：</strong>在提交前先於UKIPO資料庫進行檢索，確認是否有相同或近似商標已存在，以降低被異議風險。</li>
                <li><strong>提交申請：</strong>準備商標圖樣、指定商品/服務類別(採用尼斯分類)，並載明申請人名稱、申請人地址、申請人國籍、商標圖樣、指定商品及服務，由當地代理人向UKIPO遞交。</li>
                <li><strong>官方審查：</strong>包含形式審查(文件格式)與實質審查(是否具備顯著性等)。</li>
                <li><strong>公告：</strong>審核通過會進入官方公告期，為期2個月，在此期間內任何人皆可提出異議。</li>
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
              <h4>異議(opposition)</h4>
              <ul class="content-list">
                <li>異議是指阻止已公佈商標註冊的法律程序。您可以對整個申請提出異議，也可以僅對申請涵蓋的部分商品或服務提出異議。</li>
                <li>絕對理由涵蓋商標本身的缺陷。反對商標申請最常見的理由是：</li>
                <li>該商標是對商品和/或服務的描述。</li>
                <li>它對這些商品/服務具有通用性</li>
                <li>它並不獨特，而且應該允許該行業的所有從業者免費使用。</li>
                <li>相對理由是指存在對方擁有的在先商標或在先權利，如果申請人的商標使用，將會與之發生衝突。</li>
                <li>任何人都可以基於絕對理由反對申請，但只有在先商標或在先權利的所有人才能基於相對理由反對。</li>
              </ul>
              <h4>宣告無效(invalidity)</h4>
              <ul class="content-list">
                <li>申請人可以基於絕對理由或相對理由主張已註冊商標無效。</li>
                <li>最常見的絕對無效理由是，該商標對註冊商品和/或服務具有描述性，或者該商標是這些商品/服務的通用名稱，或者該商標缺乏顯著性，因此該行業中的任何人都可以自由使用。</li>
                <li>相對理由是指申請人擁有較早的商標或較早的權利，如果註冊商標與該商標或權利發生衝突，則註冊商標將與該商標或權利發生衝突。</li>
              </ul>
              <p><strong>撤銷(revocation)：</strong>商標自註冊之日起五年內未使用，或連續五年未使用且無正當理由。任何人可以申請撤銷全部註冊，也可以僅撤銷商標在部分商品和/或服務上的註冊。</p>
            </div>
          </section>
        </div>
      </article>
    </div>
  </div>
</main>

<?php include dirname(__FILE__) . '/../include/footer.php'; ?>
