<?php
$baseHref = '../';
$pageTitle = '韓國商標 | 國外商標 | 聯律國際專利商標事務所';
$pageDescription = '韓國商標申請要件、申請程序、商標權期限及爭議救濟資訊。';
$pageStyles = array('assets/css/page.css', 'assets/css/foreign-patent.css', 'assets/css/country-article.css');
$activePage = 'items';
$activeItem = 'trademark';
include dirname(__FILE__) . '/../include/header.php';
?>

<main class="country-patent-page">
  <section class="page-banner" aria-hidden="true"><div class="page-banner__image"></div></section>
  <div class="container">
    <div class="page-content">
      <header class="page-header" aria-labelledby="korea-trademark-title">
        <h1 id="korea-trademark-title">國外商標 <small>Foreign Trademark</small></h1>
        <nav class="page-breadcrumb" aria-label="麵包屑">
          <a href="index.php">首頁</a><span aria-hidden="true">/</span>
          <a href="foreign-trademark.php">國外商標</a><span aria-hidden="true">/</span>
          <span aria-current="page">國外商標制度</span>
        </nav>
      </header>

      <article class="country-article korea-article article-content article-panel reveal">
        <div class="country-article-heading">
          <div><p class="country-article-kicker">Korea Trademark</p><h2>韓國商標</h2></div>
          <a class="country-article-back" href="foreign-trademark.php">回國外商標制度列表</a>
        </div>

        <div class="article-sheet">
          <header class="article-sheet-header">
            <p>主管機關：韓國智慧財產局（Ministry of Intellectual Property， MOIP)</p>
          </header>

          <section class="article-row">
            <h3 class="article-section-title">申請要件</h3>
            <div class="article-body">
              <h4>具備商標識別性</h4>
              <ul class="content-list">
                <li>不能直接描述產品的品質、原材料、效能、用途、價格或產地</li>
                <li>不能用顯著的地理名稱或地圖、大眾熟知的地名、行政區劃或地圖圖樣</li>
                <li>不得僅由韓國或國際上常見姓氏、法人種類名稱或其他缺乏識別性的標誌所構成</li>
                <li>不能由極其簡單的幾何圖形、單個字母或單個數字組成的圖樣</li>
              </ul>
              <ul class="content-list">
                <li><strong>排除在先權利衝突：</strong>商標不能與他人已經在韓國註冊或申請中的商標相同或高度近似，以避免消費者產生混淆。</li>
                <li><strong>禁止惡意搶註與欺騙性：</strong>申請人明知該商標是他人(不論在韓國國內或國外)已經具有一定知名度的品牌，而意圖以不正當競爭、索取高額轉讓費為目的進行搶註</li>
              </ul>
              <h4>違反公共秩序與特定限制</h4>
              <ul class="content-list">
                <li>不得使用國旗、國章等官方標誌、政府機關或公益組織標誌、國際組織標誌、與他人姓名、肖像等相關權利衝突</li>
                <li>未經同意使用知名人士的姓名、肖像、藝名等</li>
                <li>不得使用含有不雅、粗俗、或令人反感或不適當文字及圖樣。</li>
              </ul>
              <p><strong>優先權：</strong>若該商標已在巴黎公約或WTO會員國第一次提出申請，可在6個月內向韓國主張優先權。</p>
            </div>
          </section>

          <section class="article-row">
            <h3 class="article-section-title">申請程序</h3>
            <div class="article-body">
              <ol class="content-list">
                <li><strong>商標檢索：</strong>在提交前先於韓國智慧財產權資訊服務網 (KIPRIS)資料庫進行檢索，確認是否有相同或近似商標已存在，以降低被駁回風險。</li>
                <li><strong>提交申請：</strong>準備商標圖樣、指定商品/服務類別(採用尼斯分類)，並載明申請人名稱、申請人地址、申請人國籍、商標圖樣、指定商品及服務，由當地代理人向KIPO遞交。</li>
                <li><strong>官方審查：</strong>包含形式審查(文件格式)與實質審查(是否具備顯著性、是否與他案衝突)。</li>
                <li><strong>公告：</strong>審核通過會進入官方公告期，公告期為2個月，在此期間內任何人皆可提出異議。</li>
                <li><strong>核准發證：</strong>公告期滿無人異議，或異議不成立，並核發商標註冊證。</li>
                <li><strong>審查期間：</strong>商標審查時間:大約8 至 14 個月。</li>
              </ol>
            </div>
          </section>

          <section class="article-row">
            <h3 class="article-section-title">商標權</h3>
            <div class="article-body">
              <ul class="content-list">
                <li><strong>權利期間：</strong>註冊日起10年屆滿。</li>
                <li><strong>延展：</strong>屆滿後每次可延展10年，延展應於屆滿前1年內提出，得無限次延展。</li>
                <li><strong>延展寬限期：</strong>10年期間屆滿後6個月內為延展寬限期，須繳納滯納金。</li>
                <li><strong>使用證明：</strong>延展不須提供使用證據。</li>
              </ul>
            </div>
          </section>

          <section class="article-row">
            <h3 class="article-section-title">商標爭議救濟</h3>
            <div class="article-body">
              <h4>異議</h4>
              <ul class="content-list">
                <li>任何第三方對已經通過審查並公告的商標提出反對的法定程序，申請期限為商標公告日起2個月內。</li>
                <li>異議人可以基於以下幾項法定理由向韓國智慧財產局提出異議:</li>
                <li>在先權利衝突: 異議人證明自己才是該商標的真正擁有者、在韓國或國際上有更早的使用事實，或者該商標與異議人已註冊/申請中的商標構成相同或近似，易造成大眾混淆。</li>
                <li>侵害他人在先權利：與他人的姓名、肖像、著作權、設計權或其他依法受保護之權利相衝突</li>
                <li>惡意搶註: 申請人明知該商標是異議人在海外或特定管道已在使用且具知名度的商標，卻基於不正當競爭意圖惡意搶註。</li>
                <li>缺乏識別性: 僅為通用名稱、慣用名稱、描述商品品質、用途、產地、原料、數量、形狀等，無法識別商品或服務來源。</li>
                <li>違反禁止註冊條款: 商標內容違反公共秩序、善良風俗，或有害公共利益</li>
                <li>法律禁止註冊之標誌:國旗、國徽、政府徽章、國際組織標誌等依法不得註冊之標誌。</li>
              </ul>
              <h4>評定</h4>
              <ul class="content-list">
                <li>在韓國商標制度中是透過向韓國智慧財產審判院（IPTAB）提起無效審判。</li>
                <li>利害關係人可以在商標註冊日起的 5年內，請求官方宣告該註冊商標無效</li>
                <li>若涉及惡意申請、著名商標或部分重大法定事由，依法可能不受5年期間限制</li>
                <li>韓國商標爭議評定常用事由:</li>
                <li>商標不具識別性</li>
                <li>惡意申請</li>
                <li>與先申請/先註冊商標近似：該註冊商標與他人在先申請或註冊的商標，在圖樣上構成相同或近似，且指定使用的商品/服務也構成相同或類似，導致市場消費者產生混淆誤認</li>
                <li>著名商標之保護衝突：與他人著名商標相同或近似，可能導致混淆、減損著名商標識別性或聲譽。</li>
                <li>侵害人格權或姓名權： 未經同意，將知名人士的姓名、肖像、署名、藝名、筆名註冊為商標</li>
              </ul>
              <p><strong>廢止：</strong>註冊商標若連續3年以上未實際使用，任何人皆可針對未使用商標向韓國智慧財產局提出廢止申請。</p>
            </div>
          </section>
        </div>
      </article>
    </div>
  </div>
</main>

<?php include dirname(__FILE__) . '/../include/footer.php'; ?>
