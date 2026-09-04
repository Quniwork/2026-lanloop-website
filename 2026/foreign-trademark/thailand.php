<?php
$baseHref = '../';
$pageTitle = '泰國商標 | 國外商標 | 聯律國際專利商標事務所';
$pageDescription = '泰國商標申請要件、申請程序、商標權期限及爭議救濟資訊。';
$pageStyles = array('assets/css/page.css', 'assets/css/foreign-patent.css', 'assets/css/country-article.css');
$activePage = 'items';
$activeItem = 'trademark';
include dirname(__FILE__) . '/../include/header.php';
?>

<main class="country-patent-page">
  <section class="page-banner" aria-hidden="true"><div class="page-banner__image"></div></section>
  <div class="container">
    <div class="page-content">
      <header class="page-header" aria-labelledby="thailand-trademark-title">
        <h1 id="thailand-trademark-title">國外商標 <small>Foreign Trademark</small></h1>
        <nav class="page-breadcrumb" aria-label="麵包屑">
          <a href="index.php">首頁</a><span aria-hidden="true">/</span>
          <a href="foreign-trademark.php">國外商標</a><span aria-hidden="true">/</span>
          <span aria-current="page">國外商標制度</span>
        </nav>
      </header>

      <article class="country-article thailand-article article-content article-panel reveal">
        <div class="country-article-heading">
          <div><p class="country-article-kicker">Thailand Trademark</p><h2>泰國商標</h2></div>
          <a class="country-article-back" href="foreign-trademark.php">回國外商標制度列表</a>
        </div>

        <div class="article-sheet">
          <header class="article-sheet-header">
            <p>主管機關：泰國智慧財產局（Department of Intellectual Property，DIP )</p>
          </header>

          <section class="article-row">
            <h3 class="article-section-title">申請要件</h3>
            <div class="article-body">
              <h4>具備商標識別性</h4>
              <ul class="content-list">
                <li>不能直接描述產品的原料、功用、品質。</li>
                <li>不能僅由商標不得僅由地理名稱、普遍姓氏。</li>
              </ul>
              <p><strong>排除在先權利衝突：</strong>商標不能與他人已經在泰國註冊或申請中的商標相同或高度近似，以避免消費者產生混淆。</p>
              <h4>違反公共秩序與特定限制</h4>
              <ul class="content-list">
                <li>不得使用國旗、國徽、皇家標誌、宗教象徵、公認的國際組織標誌，或有違泰國公共秩序與善良風俗的文字圖樣。</li>
                <li>不得使用含有不雅、粗俗、或可能引發宗教與社會衝突的文字或圖樣。</li>
                <li>不得註冊已被依法保護的地理標示。</li>
              </ul>
              <p><strong>優先權：</strong>若該商標已在台灣或其他WTO會員國第一次提出申請，可在6個月內向泰國主張優先權。</p>
            </div>
          </section>

          <section class="article-row">
            <h3 class="article-section-title">申請程序</h3>
            <div class="article-body">
              <ol class="content-list">
                <li><strong>商標檢索：</strong>在提交前先於DIP資料庫進行檢索，確認是否有相同或近似商標已存在，以降低被駁回風險。</li>
                <li><strong>提交申請：</strong>準備商標圖樣、指定商品/服務類別(採用尼斯分類)，並載明申請人名稱、申請人地址、申請人國籍、商標圖樣、指定商品及服務，由當地代理人向DIP遞交。
                  <ul class="content-list content-sublist">
                    <li>泰國不接受寬泛的行業大類描述，必須精準寫出商品項目，且商品項目超過 10 個者須項目加收規費。</li>
                  </ul>
                </li>
                <li><strong>官方審查：</strong>包含形式審查(文件格式)與實質審查(是否具備顯著性、是否與他案衝突)。</li>
                <li><strong>公告：</strong>審核通過會進入官方公告期，公告期為 60 天，在此期間內任何人皆可提出異議。</li>
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
                <li><strong>延展：</strong>屆滿後每次可延展10年，延展應於屆滿前3個月內提出，得無限次延展。</li>
                <li><strong>延展寬限期：</strong>10年期間屆滿後6個月內為延展寬限期，會增加20%的官方規費。</li>
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
                <li>異議人可以基於以下幾項法定理由向泰國智慧財產局提出異議:</li>
                <li>在先權利衝突: 異議人證明自己才是該商標的真正擁有者或者該商標與異議人已註冊/申請中的商標構成相同或近似，易造成大眾混淆。</li>
                <li>惡意搶註:證明申請人與異議人之間存在代理、經銷或商業合作關係，明知該品牌屬於異議人卻惡意在泰國搶先註冊。</li>
                <li>缺乏識別性: 主張該商標只是通用名稱、直接描述性詞彙。</li>
                <li>違反禁止註冊條款: 主張商標含有皇家標誌、國旗、地理標示(GI)，或違背泰國公共秩序與善良風俗。</li>
              </ul>
              <h4>評定</h4>
              <ul class="content-list">
                <li>在泰國商標制度中是透過向泰國商標委員會(Board of Trademarks)申請請求撤銷(Cancellation)或宣告註冊無效。</li>
                <li>利害關係人可以在商標註冊日起的 5年內，以與其在先權利衝突等理由，請求撤銷或宣告該商標註冊無效。</li>
                <li>若能證明申請具有惡意或申請人非真正權利人等情形，依案件性質可能不受5年期間限制</li>
                <li>泰國商標爭議評定無效事由:</li>
                <li>商標不具識別性：商標註冊時不符合識別性要件</li>
                <li>屬不得註冊之商標；商標含有法律禁止註冊的內容</li>
                <li>與他人先權利衝突：商標與他人在相同或類似商品／服務上的在先註冊商標或申請商標相同或近似，可能造成消費者混淆誤認</li>
                <li>惡意申請(Bad faith)：申請人明知他人已使用或擁有一定知名度的商標，仍意圖搶先註冊，以取得不正當利益(向中央智慧財產與國際貿易法院(IP&amp;IT Court)提出申請)</li>
                <li>申請人欠缺合法權利或資格：申請人並非真正權利人，或註冊目的違反商標法基本原則。</li>
                <li>著名商標之保護衝突：與他人著名商標相同或近似，可能導致混淆、減損著名商標識別性或聲譽。</li>
                <li>其他違反商標法註冊要件之情形：註冊程序或申請內容不符合商標法要求。</li>
              </ul>
              <p><strong>廢止：</strong>註冊商標若連續3年無正當理由未使用，任何人皆可針對未使用商標向泰國智慧財產局提出廢止申請。</p>
            </div>
          </section>
        </div>
      </article>
    </div>
  </div>
</main>

<?php include dirname(__FILE__) . '/../include/footer.php'; ?>
