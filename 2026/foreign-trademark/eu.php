<?php
$baseHref = '../';
$pageTitle = '歐盟商標 | 國外商標 | 聯律國際專利商標事務所';
$pageDescription = '歐盟商標申請要件、申請程序、商標權期限及爭議救濟資訊。';
$pageStyles = array('assets/css/page.css', 'assets/css/foreign-patent.css', 'assets/css/country-article.css');
$activePage = 'items';
$activeItem = 'trademark';
include dirname(__FILE__) . '/../include/header.php';
?>

<main class="country-patent-page">
  <section class="page-banner" aria-hidden="true"><div class="page-banner__image"></div></section>
  <div class="container">
    <div class="page-content">
      <header class="page-header" aria-labelledby="eu-trademark-title">
        <h1 id="eu-trademark-title">國外商標 <small>Foreign Trademark</small></h1>
        <nav class="page-breadcrumb" aria-label="麵包屑">
          <a href="index.php">首頁</a><span aria-hidden="true">/</span>
          <a href="foreign-trademark.php">國外商標</a><span aria-hidden="true">/</span>
          <span aria-current="page">國外商標制度</span>
        </nav>
      </header>

      <article class="country-article eu-article article-content article-panel reveal">
        <div class="country-article-heading">
          <div><p class="country-article-kicker">European Union Trademark</p><h2>歐盟(EUTM)商標</h2></div>
          <a class="country-article-back" href="foreign-trademark.php">回國外商標制度列表</a>
        </div>

        <div class="article-sheet">
          <header class="article-sheet-header">
            <p>主管機關：<a href="https://www.euipo.europa.eu/en" target="_blank" rel="noopener noreferrer">歐盟智慧財產局(European Union Intellectual Property Office, EUIPO)</a></p>
          </header>

          <section class="article-row">
            <h3 class="article-section-title">申請要件</h3>
            <div class="article-body">
              <ul class="content-list">
                <li><strong>具顯著性：</strong>其必須具有區別性，足以將某一事業的商品或服務與其他事業的商品或服務區別開來。</li>
                <li><strong>非單純描述性：</strong>若一標識所具有之含義,能為相關公眾立即認知為在提供所申請商品或服務之相關資訊(例如成分、用途、品質、產地等),該標識即應以具描述性為由而拒絕。</li>
              </ul>
            </div>
          </section>

          <section class="article-row">
            <h3 class="article-section-title">優先權</h3>
            <div class="article-body">
              <p>若該商標已在台灣或其他WTO會員國第一次提出申請，可在6個月內向歐盟智慧財產局主張優先權。</p>
            </div>
          </section>

          <section class="article-row">
            <h3 class="article-section-title">申請程序</h3>
            <div class="article-body">
              <ol class="content-list">
                <li><strong>商標檢索：</strong>在提交前先於EUIPO資料庫進行檢索，確認是否有相同或近似商標已存在。</li>
                <li><strong>提交申請：</strong>準備商標圖樣、指定商品/服務類別(採用尼斯分類)，並載明申請人名稱、申請人地址、申請人國籍、商標圖樣、指定商品及服務，由當地代理人向EUIPO遞交。</li>
                <li><strong>官方審查：</strong>包含形式審查(文件格式)與實質審查(是否具備顯著性、是否違反絕對理由等)。</li>
                <li><strong>公告：</strong>審核通過會進入官方公告期，為期3個月，在此期間內任何人皆可提出異議。</li>
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
                <li><strong>E.涵蓋範圍：</strong>歐盟27國。</li>
              </ul>
            </div>
          </section>

          <section class="article-row">
            <h3 class="article-section-title">商標爭議救濟</h3>
            <div class="article-body">
              <h4>異議(opposition)</h4>
              <ul class="content-list">
                <li>指第三方請求歐盟智慧財產局駁回歐盟商標申請，理由是其擁有在先權利時，向歐盟智慧財產局提出的程序。</li>
                <li>異議理由如下:</li>
                <li>存在混淆的可能性</li>
                <li>未經所有人同意或授權，以自己的名義申請註冊該商標</li>
                <li>與在先馳名商標相同或相似，並且未經正當理由使用申請註冊商標將不公平地利用或損害在先商標的顯著性或聲譽</li>
              </ul>
              <h4>宣告無效(declarations of invalidity)</h4>
              <p>無效理由分為絕對無效理由及相對無效理由:</p>
              <ul class="content-list">
                <li>絕對無效理由</li>
                <li>欠缺識別性</li>
                <li>已成為通用名稱或商業上慣常使用的標誌</li>
                <li>申請人提交商標申請時有惡意行為</li>
                <li>違反公序良俗之商標</li>
                <li>足以誤導公眾之商標，例如就商品或服務之性質、品質或地理來源造成誤認者</li>
                <li>相對無效理由</li>
                <li>與在先商標相同或相似</li>
                <li>其他商業標誌之在先權利</li>
                <li>不公平利用或損害著名商標</li>
              </ul>
              <p><strong>撤銷(revocation)：</strong>連續五年未於歐盟境內真實使用，且無正當理由。</p>
            </div>
          </section>
        </div>
      </article>
    </div>
  </div>
</main>

<?php include dirname(__FILE__) . '/../include/footer.php'; ?>
