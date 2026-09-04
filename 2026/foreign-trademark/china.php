<?php
$baseHref = '../';
$pageTitle = '中國商標 | 國外商標 | 聯律國際專利商標事務所';
$pageDescription = '中國商標申請要件、申請程序、商標權期限及爭議救濟資訊。';
$pageStyles = array('assets/css/page.css', 'assets/css/foreign-patent.css', 'assets/css/country-article.css');
$activePage = 'items';
$activeItem = 'trademark';
include dirname(__FILE__) . '/../include/header.php';
?>

<main class="country-patent-page">
  <section class="page-banner" aria-hidden="true"><div class="page-banner__image"></div></section>
  <div class="container">
    <div class="page-content">
      <header class="page-header" aria-labelledby="china-trademark-title">
        <h1 id="china-trademark-title">國外商標 <small>Foreign Trademark</small></h1>
        <nav class="page-breadcrumb" aria-label="麵包屑">
          <a href="index.php">首頁</a><span aria-hidden="true">/</span>
          <a href="foreign-trademark.php">國外商標</a><span aria-hidden="true">/</span>
          <span aria-current="page">國外商標制度</span>
        </nav>
      </header>

      <article class="country-article china-article article-content article-panel reveal">
        <div class="country-article-heading">
          <div><p class="country-article-kicker">China Trademark</p><h2>中國商標</h2></div>
          <a class="country-article-back" href="foreign-trademark.php">回國外商標制度列表</a>
        </div>

        <div class="article-sheet">
          <header class="article-sheet-header">
            <p>主管機關：<a href="https://www.cnipa.gov.cn/" target="_blank" rel="noopener noreferrer">中國國家知識產權局(China National Intellectual Property Administration，CNIPA)</a></p>
          </header>

          <section class="article-row">
            <h3 class="article-section-title">申請要件</h3>
            <div class="article-body">
              <h4>具備商標識別性</h4>
              <ul class="content-list">
                <li>不得僅直接表示商品的品質、主要原料、功能、用途、重量、數量等特徵。</li>
                <li>不能用縣級以上行政區劃名稱或公眾熟知的外國地名</li>
                <li>不得僅由過於簡單的線條、普通幾何圖形、單一字母、單一數字或其他缺乏顯著特徵的標誌構成</li>
              </ul>
              <h4>排除在先權利衝突</h4>
              <ul class="content-list">
                <li>商標不能與他人已經在中國註冊或申請中的商標相同或高度近似，以避免消費者產生混淆。</li>
                <li>與馳名商標相同或近似，足以誤導公眾</li>
              </ul>
              <h4>禁止惡意搶註與欺騙性</h4>
              <ul class="content-list">
                <li>不以使用為目的的惡意商標註冊申請將被駁回，並禁止囤積、搶註他人具有一定影響力的商標</li>
                <li>未經授權，不得搶先申請他人已使用並具有一定影響力的商標</li>
              </ul>
              <h4>違反公共秩序與特定限制</h4>
              <ul class="content-list">
                <li>不得使用與國家名稱、國旗、國徽、軍旗、政府標誌、國際組織標誌等相同或近似的標誌。</li>
                <li>不得具有不良影響，不得違反社會主義核心價值觀或損害公共利益</li>
              </ul>
              <p><strong>優先權：</strong>若該商標已在巴黎公約或WTO會員國第一次提出申請，可在6個月內向中國主張優先權。</p>
            </div>
          </section>

          <section class="article-row">
            <h3 class="article-section-title">申請程序</h3>
            <div class="article-body">
              <ol class="content-list">
                <li><strong>商標檢索：</strong>在提交前先於CNIPA資料庫進行檢索，確認是否有相同或近似商標已存在，以降低被駁回風險。</li>
                <li><strong>提交申請：</strong>準備商標圖樣、指定商品/服務類別(採用尼斯分類)，並載明申請人名稱、申請人地址、申請人國籍、商標圖樣、指定商品及服務，由當地代理人向CNIPA遞交。</li>
                <li><strong>官方審查：</strong>包含形式審查(文件格式)與實質審查(是否具備顯著性、是否與他案衝突)。</li>
                <li><strong>公告：</strong>審核通過會進入官方公告期，公告期為3個月，在此期間內任何人皆可提出異議。</li>
                <li><strong>核准發證：</strong>公告期滿無人異議，或異議不成立，並核發商標註冊證。</li>
                <li><strong>審查期間：</strong>商標審查時間:大約7 至 9個月。</li>
              </ol>
            </div>
          </section>

          <section class="article-row">
            <h3 class="article-section-title">商標權</h3>
            <div class="article-body">
              <ul class="content-list">
                <li><strong>權利期間：</strong>核准註冊日起10年屆滿。</li>
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
                <li>任何第三方對已經通過審查並公告的商標提出反對的法定程序，申請期限為商標公告日起3個月內。</li>
                <li>異議人可以基於以下幾項法定理由向中國國家知識產權局提出異議:</li>
                <li>在先權利衝突:在中國或國際上具有在先權利、在先使用或其他依法受保護權利，或者該商標與異議人已註冊/申請中的商標構成相同或近似，易造成大眾混淆。</li>
                <li>侵害他人在先權利：與他人的姓名、肖像、著作權、設計權或其他依法受保護之權利相衝突</li>
                <li>惡意搶註: 申請人明知該商標是異議人在海外或特定管道已在使用且具知名度的商標，卻基於不正當競爭意圖惡意搶註，針對大量囤積商標、明知他人品牌仍大量申請等惡意行為。</li>
                <li>缺乏識別性: 僅為通用名稱、慣用名稱、描述商品品質、用途、產地、原料、數量、形狀等，無法識別商品或服務來源。</li>
                <li>違反禁止註冊條款: 商標內容違反公共秩序、善良風俗，或有害公共利益</li>
                <li>法律禁止註冊之標誌:國旗、國徽、政府徽章、國際組織標誌等依法不得註冊之標誌。</li>
              </ul>
              <h4>評定</h4>
              <ul class="content-list">
                <li>在中國商標制度中是透過向CNIPA國家知識產權局提起無效宣告。</li>
                <li>利害關係人可以在商標註冊日起的 5年內，請求官方宣告該註冊商標無效</li>
                <li>惡意註冊馳名商標不受5年限制</li>
                <li>中國商標爭議評定常用事由:</li>
                <li>與在先商標衝突、搶註他人具有一定影響力之商標</li>
                <li>惡意註冊</li>
                <li>侵害他人在先權利</li>
                <li>商標不具識別性</li>
                <li>違反禁止註冊規定：使用國家名稱、國旗、國徽等禁止標誌；具有不良影響；損害公共利益</li>
              </ul>
              <p><strong>撤銷：</strong>註冊商標若連續3年無正當理由未使用，任何人皆可針對未使用商標向中國國家知識產權局（CNIPA）提出撤銷連續三年不使用註冊商標申請。</p>
            </div>
          </section>
        </div>
      </article>
    </div>
  </div>
</main>

<?php include dirname(__FILE__) . '/../include/footer.php'; ?>
