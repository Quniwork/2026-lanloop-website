<?php
$baseHref = '../';
$pageTitle = '日本商標 | 國外商標 | 聯律國際專利商標事務所';
$pageDescription = '日本商標申請要件、申請程序、商標權期限及爭議救濟資訊。';
$pageStyles = array('assets/css/page.css', 'assets/css/foreign-patent.css', 'assets/css/country-article.css');
$activePage = 'items';
$activeItem = 'trademark';
include dirname(__FILE__) . '/../include/header.php';
?>

<main class="country-patent-page">
  <section class="page-banner" aria-hidden="true"><div class="page-banner__image"></div></section>
  <div class="container">
    <div class="page-content">
      <header class="page-header" aria-labelledby="japan-trademark-title">
        <h1 id="japan-trademark-title">國外商標 <small>Foreign Trademark</small></h1>
        <nav class="page-breadcrumb" aria-label="麵包屑">
          <a href="index.php">首頁</a><span aria-hidden="true">/</span>
          <a href="foreign-trademark.php">國外商標</a><span aria-hidden="true">/</span>
          <span aria-current="page">國外商標制度</span>
        </nav>
      </header>

      <article class="country-article japan-article article-content article-panel reveal">
        <div class="country-article-heading">
          <div><p class="country-article-kicker">Japan Trademark</p><h2>日本商標</h2></div>
          <a class="country-article-back" href="foreign-trademark.php">回國外商標制度列表</a>
        </div>

        <div class="article-sheet">
          <header class="article-sheet-header">
            <p>主管機關：日本特許廳(Japan Patent Office，JPO)</p>
          </header>

          <section class="article-row">
            <h3 class="article-section-title">申請要件</h3>
            <div class="article-body">
              <h4>具備商標識別性</h4>
              <ul class="content-list">
                <li>須能識別商品或服務來源，不得僅為普通名稱、慣用名稱、商品品質、產地、用途、數量、形狀、價格、製造方法、提供方式等描述性標示</li>
                <li>不得僅由極其簡單且常見的標誌構成</li>
                <li>不得僅由商品或服務本身所產生的立體形狀構成</li>
              </ul>
              <ul class="content-list">
                <li><strong>排除在先權利衝突：</strong>商標不能與他人已經在日本註冊或申請中的商標相同或高度近似，以避免消費者產生混淆。</li>
                <li><strong>禁止惡意搶註與欺騙性：</strong>以不正當目的申請他人著名商標或具有一定知名度商標者，不得註冊</li>
              </ul>
              <h4>違反公共秩序與特定限制</h4>
              <ul class="content-list">
                <li>不得包含國旗、國徽、政府標章、國際組織標誌等依法禁止註冊之標誌</li>
                <li>不得有害公共利益、善良風俗或社會道德</li>
              </ul>
              <p><strong>優先權：</strong>若該商標已在巴黎公約或WTO會員國第一次提出申請，可在6個月內向日本主張優先權。</p>
            </div>
          </section>

          <section class="article-row">
            <h3 class="article-section-title">申請程序</h3>
            <div class="article-body">
              <ol class="content-list">
                <li><strong>商標檢索：</strong>在提交前先於J-PlatPat資料庫進行檢索，確認是否有相同或近似商標已存在，以降低被駁回風險。</li>
                <li><strong>提交申請：</strong>準備商標圖樣、指定商品/服務類別(採用尼斯分類)，並載明申請人名稱、申請人地址、申請人 國籍、商標圖樣、指定商品及服務，由當地代理人向JPO遞交。</li>
                <li><strong>官方審查：</strong>包含形式審查(文件格式)與實質審查(是否具備顯著性、是否與他案衝突)。</li>
                <li><strong>公告：</strong>完成註冊後，於商標公報刊登註冊公告，自公告日起2個月內，任何人均得提出異議</li>
                <li><strong>核准發證：</strong>審查通過後會繳納註冊費，完成註冊發行商標公報，並核發商標註冊證。</li>
                <li><strong>審查期間：</strong>商標審查時間:大約6 至 8 個月。</li>
              </ol>
            </div>
          </section>

          <section class="article-row">
            <h3 class="article-section-title">商標權</h3>
            <div class="article-body">
              <ul class="content-list">
                <li><strong>權利期間：</strong>註冊日起10年屆滿。</li>
                <li><strong>延展：</strong>屆滿後每次可延展10年，延展應於屆滿前6個月內提出，得無限次延展。</li>
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
                <li>任何人得於商標註冊公告日起2個月內，向日本特許廳提出異議</li>
                <li>異議人可以基於以下幾項法定理由向日本特許廳提出異議:</li>
                <li>缺乏顯著性(識別性)：商標屬於通用名稱、說明性文字或過於簡單的圖形</li>
                <li>侵害在先權利：與他人已註冊或先申請的相同/近似商標構成混淆</li>
                <li>著名商標搶註或搶搭便車：意圖搭順風車，複製或模仿他人著名/高知名度商標</li>
                <li>違反公序良俗：有損公共秩序或社會道德規範</li>
              </ul>
              <h4>評定</h4>
              <ul class="content-list">
                <li>在日本商標制度中是透過向日本特許廳（JPO）之審判部提起無效審判。</li>
                <li>利害關係人可以在商標註冊日起的 5年內，請求官方宣告該註冊商標無效</li>
                <li>涉及惡意申請、著名商標、公序良俗等部分法定事由者，不受5年除斥期間限制</li>
                <li>日本商標爭議評定常用事由:</li>
                <li>缺乏識別性：商標僅表示商品或服務的普通名稱、品質、用途、產地等</li>
                <li>違反公序良俗或公益標章</li>
                <li>與先申請/先註冊商標近似：該註冊商標與他人在先申請或註冊的商標，在圖樣上構成相同或近似，且指定使用的商品/服務也構成相同或類似，導致市場消費者產生混淆誤認</li>
                <li>著名商標之保護衝突：與他人著名商標相同或近似，可能導致混淆、減損著名商標識別性或聲譽。</li>
                <li>惡意搶註</li>
              </ul>
              <p><strong>廢止：</strong>註冊商標連續3年以上未於日本就指定商品或服務實際使用者，任何人均得向日本特許廳提起不使用取消審判。</p>
            </div>
          </section>
        </div>
      </article>
    </div>
  </div>
</main>

<?php include dirname(__FILE__) . '/../include/footer.php'; ?>
