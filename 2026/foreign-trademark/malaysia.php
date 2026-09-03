<?php
$baseHref = '../';
$pageTitle = '馬來西亞商標 | 國外商標 | 聯律國際專利商標事務所';
$pageDescription = '馬來西亞商標申請要件、申請程序、商標權期限及爭議救濟資訊。';
$pageStyles = array('assets/css/page.css', 'assets/css/foreign-patent.css', 'assets/css/country-article.css');
$activePage = 'items';
$activeItem = 'trademark';
include dirname(__FILE__) . '/../include/header.php';
?>

<main class="country-patent-page">
  <section class="page-banner" aria-hidden="true"><div class="page-banner__image"></div></section>
  <div class="container">
    <div class="page-content">
      <header class="page-header" aria-labelledby="malaysia-trademark-title">
        <h1 id="malaysia-trademark-title">國外商標 <small>Foreign Trademark</small></h1>
        <nav class="page-breadcrumb" aria-label="麵包屑">
          <a href="index.php">首頁</a><span aria-hidden="true">/</span>
          <a href="foreign-trademark.php">國外商標</a><span aria-hidden="true">/</span>
          <span aria-current="page">國外商標制度</span>
        </nav>
      </header>

      <article class="country-article malaysia-article article-content article-panel reveal">
        <div class="country-article-heading">
          <div><p class="country-article-kicker">Malaysia Trademark</p><h2>馬來西亞商標</h2></div>
          <a class="country-article-back" href="foreign-trademark.php">回國外商標制度列表</a>
        </div>

        <div class="article-sheet">
          <header class="article-sheet-header">
            <p>主管機關：馬來西亞智慧財產局（Intellectual Property Corporation of Malaysia，MyIPO）</p>
          </header>

          <section class="article-row">
            <h3 class="article-section-title">申請要件</h3>
            <div class="article-body">
              <ul class="content-list">
                <li><strong>必須具備識別性：</strong>商標的首要目的在於作為商品或服務的「來源標誌」。必須能夠讓消費者在市場上將品牌與競爭對手區分開來。如果只是單純描述產品成分、品質或產地字詞，通常會因為缺乏識別性被拒絕註冊。</li>
                <li><strong>可透過圖形化呈現：</strong>商標必須能夠在申請文件中以圖形、文字或視覺方式清楚且明確呈現。</li>
                <li><strong>優先權：</strong>若該商標已在台灣或其他WTO會員國第一次提出申請，可在6個月內向馬來西亞主張優先權。</li>
              </ul>
            </div>
          </section>

          <section class="article-row">
            <h3 class="article-section-title">申請程序</h3>
            <div class="article-body">
              <ol class="content-list">
                <li><strong>商標檢索：</strong>在提交前先於MyIPO資料庫進行檢索，確認是否有相同或近似商標已存在，以降低被駁回風險。</li>
                <li><strong>提交申請：</strong>準備商標圖樣、指定商品/服務類別(採用尼斯分類)，並載明申請人名稱、申請人地址、申請人國籍、商標圖樣、指定商品及服務，由當地代理人向MyIPO遞交。</li>
                <li><strong>官方審查：</strong>包含形式審查(文件格式)與實質審查(是否具備顯著性、是否與他案衝突)。</li>
                <li><strong>公告：</strong>審核通過會進入官方公告期，為期2個月，在此期間內任何人皆可提出異議。</li>
                <li><strong>核准發證：</strong>公告期滿無人異議，或異議不成立，並核發商標註冊證。</li>
                <li><strong>審查期間：</strong>商標審查時間:大約8-24個月。</li>
              </ol>
            </div>
          </section>

          <section class="article-row">
            <h3 class="article-section-title">商標權</h3>
            <div class="article-body">
              <ul class="content-list">
                <li><strong>權利期間：</strong>申請日起10年屆滿。</li>
                <li><strong>延展：</strong>屆滿後每次可延展10年，延展應於屆滿前6 個月提出，得無限次延展。</li>
                <li><strong>延展寬限期：</strong>10年期間屆滿後6月內為延展寬限期，需增加規費。</li>
                <li><strong>使用證明：</strong>延展不須提供使用證據。</li>
              </ul>
            </div>
          </section>

          <section class="article-row">
            <h3 class="article-section-title">商標爭議救濟</h3>
            <div class="article-body">
              <h4>異議</h4>
              <ul class="content-list">
                <li>商標經MyIPO實體審查核准並進入公告期，任何人可在公告後2個月內提出異議。</li>
                <li>提出期限:自商標公告日起2個月內必須提出，此期限通常無法延長。</li>
                <li>常見異議理由</li>
                <li>在先商標衝突:與已註冊或先申請的商標相同或高度近似，容易造成消費者混淆。</li>
                <li>惡意搶註:申請人明知該商標屬於他人，卻惡意在馬來西亞搶先登記。</li>
                <li>缺乏顯著性:商標僅由行業通用名稱、說明性詞彙(如直接描述產品功能、品質)組成。</li>
                <li>侵害他在先權利:侵害他人商號權(公司名稱)、著作權、外觀設計或知名人士姓名權。</li>
                <li>不良影響:商標內容違反公共秩序、道德倫理，或帶有欺騙性、宗教敏感性。</li>
              </ul>
              <h4>評定</h4>
              <ul class="content-list">
                <li>商標評定是指受侵害之人或利害關係人，在商標註冊後依法向官方或法院提出申請，請求宣告該註冊商標無效的法律程序。</li>
                <li>評定理由主要分為「絕對不得註冊事由」與「相對不得註冊事由」兩大類:</li>
                <li>絕對不得註冊事由</li>
                <li>缺乏顯著性</li>
                <li>違反公序良俗</li>
                <li>誤導大眾</li>
                <li>法定禁用標誌</li>
                <li>禁止使用的字眼</li>
                <li>相對不得註冊事由(與他人在先權利衝突)</li>
                <li>與在先商標衝突:商標與他人在馬來西亞已註冊或申請中商標相同或高度近似，使用在相同或類似商品上，容易導致消費者混淆誤認。</li>
                <li>侵犯其他在先權利:商標侵犯第三人著作權、外觀設計專利權；姓名權或商號(公司)名稱。</li>
                <li>惡意搶註:代理人或代表人未經商標真正所有人的授權，擅以自己的名義註冊該商標。</li>
                <li>馳名商標保護:即使商標或服務類別不同，若該商標與馬來西亞或國際馳名商標高度近似，可能減損馳名商標識別性或聲譽，則不得註冊。</li>
              </ul>
              <p><strong>廢止：</strong>註冊商標若連續3年不使用，任何利害關係人均可提出廢止申請。</p>
            </div>
          </section>
        </div>
      </article>
    </div>
  </div>
</main>

<?php include dirname(__FILE__) . '/../include/footer.php'; ?>
