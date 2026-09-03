<?php
$baseHref = '../';
$pageTitle = '印尼商標 | 國外商標 | 聯律國際專利商標事務所';
$pageDescription = '印尼商標申請要件、申請程序、商標權期限及爭議救濟資訊。';
$pageStyles = array('assets/css/page.css', 'assets/css/foreign-patent.css', 'assets/css/country-article.css');
$activePage = 'items';
$activeItem = 'trademark';
include dirname(__FILE__) . '/../include/header.php';
?>

<main class="country-patent-page">
  <section class="page-banner" aria-hidden="true"><div class="page-banner__image"></div></section>
  <div class="container">
    <div class="page-content">
      <header class="page-header" aria-labelledby="indonesia-trademark-title">
        <h1 id="indonesia-trademark-title">國外商標 <small>Foreign Trademark</small></h1>
        <nav class="page-breadcrumb" aria-label="麵包屑">
          <a href="index">首頁</a><span aria-hidden="true">/</span>
          <a href="foreign-trademark">國外商標</a><span aria-hidden="true">/</span>
          <span aria-current="page">國外商標制度</span>
        </nav>
      </header>

      <article class="country-article indonesia-article article-content article-panel reveal">
        <div class="country-article-heading">
          <div><p class="country-article-kicker">Indonesia Trademark</p><h2>印尼商標</h2></div>
          <a class="country-article-back" href="foreign-trademark">回國外商標制度列表</a>
        </div>

        <div class="article-sheet">
          <header class="article-sheet-header">
            <p>主管機關：印尼智慧財產局（Directorate General of Intellectual Property，DGIP  )</p>
          </header>

          <section class="article-row">
            <h3 class="article-section-title">申請要件</h3>
            <div class="article-body">
              <h4>具備商標識別性</h4>
              <ul class="content-list">
                <li>不得為商品或服務的通用名稱</li>
                <li>不得為商品或服務的慣用標示</li>
                <li>不得缺乏顯著性</li>
                <li>不得為單純描述商品或服務品質、用途、數量、產地等事項</li>
              </ul>
              <h4>排除在先權利衝突</h4>
              <ul class="content-list">
                <li>商標不能與他人已經在印尼註冊或申請中的商標相同或高度近似，以避免消費者產生混淆。</li>
                <li>與馳名商標相同或近似</li>
                <li>未經同意使用他人姓名、肖像、法人名稱、旗幟、徽章、官方標誌等</li>
              </ul>
              <h4>違反公共秩序與特定限制</h4>
              <ul class="content-list">
                <li>不得違反法律、宗教、道德或公共秩序</li>
                <li>不得欺騙消費者有關商品或服務的品質、來源等</li>
                <li>不得缺乏識別性</li>
                <li>不得已成為公共領域的通用標誌</li>
                <li>不得僅為商品形狀且屬功能性所必要</li>
              </ul>
              <p><strong>優先權：</strong>依巴黎公約主張優先權，可在首次申請日起6個月內向印尼主張優先權。</p>
            </div>
          </section>

          <section class="article-row">
            <h3 class="article-section-title">申請程序</h3>
            <div class="article-body">
              <ol class="content-list">
                <li><strong>商標檢索：</strong>在提交前先於DGIP資料庫進行檢索，確認是否有相同或近似商標已存在，以降低被駁回風險。</li>
                <li><strong>提交申請：</strong>準備商標圖樣、指定商品/服務類別(採用尼斯分類)，並載明申請人名稱、申請人地址、申請人國籍、商標圖樣、指定商品及服務，由當地代理人向DGIP遞交。</li>
                <li><strong>官方審查：</strong>包含形式審查(文件格式)與實質審查(是否具備顯著性、是否與他案衝突)。</li>
                <li><strong>公告：</strong>審核通過會進入官方公告期，公告期為2個月，在此期間內任何人皆可提出異議。</li>
                <li><strong>核准發證：</strong>公告期滿無人異議，或異議不成立，並核發商標註冊證。</li>
                <li><strong>審查期間：</strong>商標審查時間:大約12 至 18 個月。</li>
              </ol>
            </div>
          </section>

          <section class="article-row">
            <h3 class="article-section-title">商標權</h3>
            <div class="article-body">
              <ul class="content-list">
                <li><strong>權利期間：</strong>申請日起10年屆滿。</li>
                <li><strong>延展：</strong>屆滿後每次可延展10年，延展應於屆滿前6個月提出，得無限次延展。</li>
                <li><strong>延展寬限期：</strong>10年期間屆滿後6個月內為延展寬限期，須繳納額外費用。</li>
                <li><strong>使用證明：</strong>延展不須提供使用證據。</li>
              </ul>
            </div>
          </section>

          <section class="article-row">
            <h3 class="article-section-title">商標爭議救濟</h3>
            <div class="article-body">
              <h4>異議</h4>
              <ul class="content-list">
                <li>任何第三方對已經通過審查並公告的商標提出反對的法定程序，申請期限為商標公告日起60天內。</li>
                <li>異議人可以基於以下幾項法定理由向印尼智慧財產局提出異議:</li>
                <li>在先權利衝突: 異議人證明自己才是該商標的真正擁有者、在印尼或國際上有更早的使用事實，或者該商標與異議人已註冊/申請中的商標構成相同或近似，易造成大眾混淆。</li>
                <li>惡意搶註:證明申請人與異議人之間存在代理、經銷或商業合作關係，明知該品牌屬於異議人卻惡意在印尼搶先註冊。</li>
                <li>違反公序良俗或法律禁用條款： 商標內容涉及宗教、道德、欺騙大眾或僅為商品的通用名稱。。</li>
              </ul>
              <h4>評定</h4>
              <ul class="content-list">
                <li>在印尼商標制度中向商業法院提起民事訴訟申請註冊商標撤銷/無效。</li>
                <li>利害關係人可以在商標註冊日起的 5年內，請求官方評定撤銷該註冊商標</li>
                <li>若涉及惡意申請或違反公共秩序、宗教、道德等絕對事由，則不受5年限制。</li>
                <li>印尼商標爭議評定無效事由:</li>
                <li>與他人在先商標相同或近似。</li>
                <li>與馳名商標衝突</li>
                <li>惡意搶註： 申請人明知該商標屬於他人在先使用的知名商標</li>
                <li>與在先商標近似： 與利害關係人在先註冊或申請的商標，在相同或類似商品上構成相同或近似。</li>
                <li>未經授權使用他人姓名、法人名稱、官方徽章等</li>
              </ul>
              <p><strong>廢止：</strong>註冊商標若連續5年未使用，任何人皆可向商業法院提起廢止申請。</p>
            </div>
          </section>
        </div>
      </article>
    </div>
  </div>
</main>

<?php include dirname(__FILE__) . '/../include/footer.php'; ?>
