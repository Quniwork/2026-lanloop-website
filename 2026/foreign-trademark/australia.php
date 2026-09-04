<?php
$baseHref = '../';
$pageTitle = '澳洲商標 | 國外商標 | 聯律國際專利商標事務所';
$pageDescription = '澳洲商標申請要件、申請程序、商標權期限及爭議救濟資訊。';
$pageStyles = array('assets/css/page.css', 'assets/css/foreign-patent.css', 'assets/css/country-article.css');
$activePage = 'items';
$activeItem = 'trademark';
include dirname(__FILE__) . '/../include/header.php';
?>

<main class="country-patent-page">
  <section class="page-banner" aria-hidden="true"><div class="page-banner__image"></div></section>
  <div class="container">
    <div class="page-content">
      <header class="page-header" aria-labelledby="australia-trademark-title">
        <h1 id="australia-trademark-title">國外商標 <small>Foreign Trademark</small></h1>
        <nav class="page-breadcrumb" aria-label="麵包屑">
          <a href="index.php">首頁</a><span aria-hidden="true">/</span>
          <a href="foreign-trademark.php">國外商標</a><span aria-hidden="true">/</span>
          <span aria-current="page">國外商標制度</span>
        </nav>
      </header>

      <article class="country-article australia-article article-content article-panel reveal">
        <div class="country-article-heading">
          <div><p class="country-article-kicker">Australia Trademark</p><h2>澳洲商標</h2></div>
          <a class="country-article-back" href="foreign-trademark.php">回國外商標制度列表</a>
        </div>

        <div class="article-sheet">
          <header class="article-sheet-header">
            <p>主管機關：<a href="https://www.ipaustralia.gov.au/" target="_blank" rel="noopener noreferrer">澳洲智慧財產局（IP Australia）</a></p>
          </header>

          <section class="article-row">
            <h3 class="article-section-title">申請要件</h3>
            <div class="article-body">
              <h4>具備商標識別性</h4>
              <ul class="content-list">
                <li>商標不能只是產品或服務的直接描述。</li>
                <li>不能是業界通用名詞、行業術語或常見特殊主題標籤。</li>
                <li>不能單純使用普遍姓氏名稱或普遍地理名稱。</li>
              </ul>
              <p><strong>排除在先權利衝突：</strong>商標不能與他人已經在澳洲註冊或申請中的商標相同或高度近似，以避免消費者產生混淆。</p>
              <h4>禁止惡意搶註與欺騙性</h4>
              <ul class="content-list">
                <li>商標不得具有誤導性、欺騙性(例如:誤導產品成分來源)。</li>
                <li>嚴格禁止惡意搶註他人的知名商標。</li>
              </ul>
              <h4>違反公共秩序與特定限制</h4>
              <ul class="content-list">
                <li>不得違反公序良俗或包含粗俗、誹謗字眼。</li>
                <li>未經官方授權，不得與國家、政府、國際組織名稱、旗幟或金融機構相關名詞相同或近似。</li>
              </ul>
              <p><strong>優先權：</strong>若該商標已在台灣或其他WTO會員國第一次提出申請，可在6個月內向澳洲主張優先權。</p>
            </div>
          </section>

          <section class="article-row">
            <h3 class="article-section-title">申請程序</h3>
            <div class="article-body">
              <ol class="content-list">
                <li><strong>商標檢索：</strong>在提交前先於IP Australia 資料庫進行檢索，確認是否有相同或近似商標已存在，以降低被駁回風險。</li>
                <li><strong>提交申請：</strong>準備商標圖樣、指定商品/服務類別(採用尼斯分類)，並載明申請人名稱、申請人地址、申請人國籍、商標圖樣、指定商品及服務，由當地代理人向IP Australia遞交。</li>
                <li><strong>官方審查：</strong>包含形式審查(文件格式)與實質審查(是否具備顯著性、是否與他案衝突)。</li>
                <li><strong>公告：</strong>審核通過會進入官方公告期，為期2個月內，在此期間內任何人皆可提出異議。</li>
                <li><strong>核准發證：</strong>公告期滿無人異議，或異議不成立，核發商標註冊證。</li>
                <li><strong>審查期間：</strong>商標審查時間:大約6-12個月。</li>
              </ol>
            </div>
          </section>

          <section class="article-row">
            <h3 class="article-section-title">商標權</h3>
            <div class="article-body">
              <ul class="content-list">
                <li><strong>權利期間：</strong>申請日起10年屆滿。</li>
                <li><strong>延展：</strong>屆滿後每次可延展10年，延展應於屆滿前12個月提出，得無限次延展。</li>
                <li><strong>延展寬限期：</strong>10年期間屆滿後6個月內為延展寬限期。</li>
                <li><strong>使用證明：</strong>延展不須提供使用證據。</li>
              </ul>
            </div>
          </section>

          <section class="article-row">
            <h3 class="article-section-title">商標爭議救濟</h3>
            <div class="article-body">
              <h4>異議</h4>
              <ul class="content-list">
                <li>任何第三方對已經通過審查並公告的商標提出反對的法定程序，申請期限為商標註冊公告的2個月內。</li>
                <li>異議人可以基於以下幾項法定理由向澳洲智慧財產局提出異議:</li>
                <li>在先權利衝突:該商標與異議人已在澳洲註冊或申請中商標極為相似，易造成公眾混淆。</li>
                <li>惡意搶註:申請人並非商標真實所有人，或存在惡意抄襲、惡意搶註行為。</li>
                <li>缺乏識別性:該商標僅為行業內的通用名稱、描述性詞彙，不具商標應有的顯著特徵。</li>
                <li>海外馳名商標:該商標在澳洲境外已具有極高知名度，申請人的註冊行為帶有欺騙性或易導致誤導。</li>
              </ul>
              <h4>評定</h4>
              <ul class="content-list">
                <li>在澳洲商標制度中，台灣所稱的「商標評定(以違反法律規定為由主張商標無效)」，對應的是澳洲商標的無效程序。</li>
                <li>澳洲商標無效的期限與判定途徑密切相關，一般情況下沒有特定「5年除斥期間」限制。</li>
                <li>澳洲商標爭議評定常用理由:</li>
                <li>不具識別性:商標僅是單純的行業描述性詞彙，不應被獨佔。</li>
                <li>構成混淆或誤認:與在先註冊或在先申請的商標高度近似，且指定使用商品類似。</li>
                <li>惡意搶註或非真正所有人:申請人並非該商標在澳洲最初創用或所有人。</li>
                <li>商標具知名度:據以評定的在先商標在澳洲已享有高知名度，他人註冊會造成消費者誤認來源。</li>
              </ul>
              <p><strong>廢止：</strong>註冊商標若連續3年不使用，任何人皆可向澳洲智慧財產局申請廢止。</p>
            </div>
          </section>
        </div>
      </article>
    </div>
  </div>
</main>

<?php include dirname(__FILE__) . '/../include/footer.php'; ?>
