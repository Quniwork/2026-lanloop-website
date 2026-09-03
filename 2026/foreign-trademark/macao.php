<?php
$baseHref = '../';
$pageTitle = '澳門商標 | 國外商標 | 聯律國際專利商標事務所';
$pageDescription = '澳門商標申請要件、申請程序、商標權期限及爭議救濟資訊。';
$pageStyles = array('assets/css/page.css', 'assets/css/foreign-patent.css', 'assets/css/country-article.css');
$activePage = 'items';
$activeItem = 'trademark';
include dirname(__FILE__) . '/../include/header.php';
?>

<main class="country-patent-page">
  <section class="page-banner" aria-hidden="true"><div class="page-banner__image"></div></section>
  <div class="container">
    <div class="page-content">
      <header class="page-header" aria-labelledby="macao-trademark-title">
        <h1 id="macao-trademark-title">國外商標 <small>Foreign Trademark</small></h1>
        <nav class="page-breadcrumb" aria-label="麵包屑">
          <a href="index">首頁</a><span aria-hidden="true">/</span>
          <a href="foreign-trademark">國外商標</a><span aria-hidden="true">/</span>
          <span aria-current="page">國外商標制度</span>
        </nav>
      </header>

      <article class="country-article macao-article article-content article-panel reveal">
        <div class="country-article-heading">
          <div><p class="country-article-kicker">Macao Trademark</p><h2>澳門商標</h2></div>
          <a class="country-article-back" href="foreign-trademark">回國外商標制度列表</a>
        </div>

        <div class="article-sheet">
          <header class="article-sheet-header">
            <p>主管機關：經濟及科技發展局(DSEDT)</p>
          </header>

          <section class="article-row">
            <h3 class="article-section-title">申請要件</h3>
            <div class="article-body">
              <h4>具備商標識別性</h4>
              <ul class="content-list">
                <li>不能僅由商品/服務的通用名稱、描述性標誌或缺乏顯著性的標誌組成</li>
                <li>不能僅直接表示商品或服務的種類、品質、用途、價值、地理來源、製造時間等特徵</li>
                <li>不得僅由過於簡單、一般裝飾性或缺乏識別性的圖形所構成</li>
              </ul>
              <ul class="content-list">
                <li><strong>排除在先權利衝突：</strong>商標不能與他人已經在澳門註冊或申請中的商標相同或高度近似，且指定商品/服務相同或類似，以避免消費者產生混淆。</li>
                <li><strong>禁止惡意搶註與欺騙性：</strong>若與澳門的馳名商標或享有聲譽的在先商標構成複製、仿製或翻譯，即使使用在不相同或不類似的商品/服務上，若會導致產生關聯或不正當利用其聲譽，亦會被禁止註冊。</li>
              </ul>
              <h4>違反公共秩序與特定限制</h4>
              <ul class="content-list">
                <li>不得違反法律、公共秩序或善良風俗</li>
                <li>不得含有本地區、市或其他國內外公共或私人實體的旗幟、徽章、印信、紅十字會專用標誌等而未獲合法授權</li>
                <li>不得含有對產品性質、功能、用途或產地（生產國、地區、廠房等）的虛假說明。</li>
              </ul>
              <p><strong>優先權：</strong>若該商標已在巴黎公約或WTO會員國第一次提出申請，可在6個月內向澳門主張優先權。</p>
            </div>
          </section>

          <section class="article-row">
            <h3 class="article-section-title">申請程序</h3>
            <div class="article-body">
              <ol class="content-list">
                <li><strong>商標檢索：</strong>在提交前先於澳門經濟及科技發展局（DSEDT）資料庫進行檢索，確認是否有相同或近似商標已存在，以降低被駁回風險。</li>
                <li><strong>提交申請：</strong>準備商標圖樣、指定商品/服務類別(採用尼斯分類)，並載明申請人名稱、申請人地址、申請人國籍、商標圖樣、指定商品及服務，由當地代理人向DSEDT遞交。</li>
                <li><strong>官方審查：</strong>包含形式審查(文件格式)與實質審查(是否具備顯著性、是否與他案衝突)。</li>
                <li><strong>公告：</strong>審核通過會進入官方公告期，公告期為2個月，在此期間內任何人皆可提出異議。</li>
                <li><strong>核准發證：</strong>公告期滿無人異議，或異議不成立，並核發商標註冊證。</li>
                <li><strong>審查期間：</strong>商標審查時間:大約6至9 個月。</li>
              </ol>
            </div>
          </section>

          <section class="article-row">
            <h3 class="article-section-title">商標權</h3>
            <div class="article-body">
              <ul class="content-list">
                <li><strong>權利期間：</strong>註冊日起7年屆滿。</li>
                <li><strong>延展：</strong>屆滿後每次可延展7年，延展應於屆滿前6個月內提出，得無限次延展。</li>
                <li><strong>延展寬限期：</strong>7年期間屆滿後6個月內為延展寬限期，須繳納滯納金。</li>
                <li><strong>使用證明：</strong>延展不須提供使用證據。</li>
              </ul>
            </div>
          </section>

          <section class="article-row">
            <h3 class="article-section-title">商標爭議救濟</h3>
            <div class="article-body">
              <h4>異議</h4>
              <ul class="content-list">
                <li>任何第三方對已經通過審查並公告的商標提出反對的法定程序，自商標公告日起2個月內。</li>
                <li>異議人可以基於以下幾項法定理由向經濟及科技發展局（DSEDT）提出異議:</li>
                <li>在先商標權衝突：商標與他人在先註冊或申請商標相同或近似或商品/服務相同或類似可能造成消費者混淆</li>
                <li>缺乏識別性：商標僅描述商品或服務特徵、通用名稱或業界慣用標誌</li>
                <li>惡意申請：申請人並非基於正常商業使用目的，而係為搶註、阻礙他人使用或牟利</li>
                <li>侵害在先權利：姓名權、著作權、企業名稱權等</li>
                <li>違反禁止註冊規定：包含欺騙性內容或違反公共政策或法律限制。</li>
              </ul>
              <h4>評定</h4>
              <ul class="content-list">
                <li>在澳門商標制度中是透過向澳門法院申請宣告商標失效。</li>
                <li>利害關係人可以在商標註冊日起的 5年內，請求官方宣告該註冊商標無效</li>
                <li>惡意註冊商標不受5年限制</li>
                <li>澳門商標爭議評定常用事由:</li>
                <li>商標不具識別性：不具顯著性，或僅為商品/服務的通用名稱、描述性標誌</li>
                <li>違反絕對不得註冊事由：違反公共秩序或善良風俗、具有欺騙性、使用法律禁止註冊的標誌。</li>
                <li>與先申請/先註冊商標近似：該註冊商標與他人在先申請或註冊的商標，在圖樣上構成相同或近似，且指定使用的商品/服務也構成相同或類似，導致市場消費者產生混淆誤認</li>
                <li>侵害他人在先權利：包括商號、姓名權、著作權或其他依法受保護之權利</li>
                <li>惡意申請：明知他人在先使用該商標，仍基於不正當目的申請註冊</li>
              </ul>
              <p><strong>廢止：</strong>註冊商標連續3年以上無正當理由未於澳門實際使用，任何利害關係人均得向澳門法院請求宣告商標失效。</p>
            </div>
          </section>
        </div>
      </article>
    </div>
  </div>
</main>

<?php include dirname(__FILE__) . '/../include/footer.php'; ?>
