<?php
$baseHref = '../';
$pageTitle = '俄羅斯商標 | 國外商標 | 聯律國際專利商標事務所';
$pageDescription = '俄羅斯商標申請要件、申請程序、商標權期限及爭議救濟資訊。';
$pageStyles = array('assets/css/page.css', 'assets/css/foreign-patent.css', 'assets/css/country-article.css');
$activePage = 'items';
$activeItem = 'trademark';
include dirname(__FILE__) . '/../include/header.php';
?>

<main class="country-patent-page">
  <section class="page-banner" aria-hidden="true"><div class="page-banner__image"></div></section>
  <div class="container">
    <div class="page-content">
      <header class="page-header" aria-labelledby="russia-trademark-title">
        <h1 id="russia-trademark-title">國外商標 <small>Foreign Trademark</small></h1>
        <nav class="page-breadcrumb" aria-label="麵包屑">
          <a href="index">首頁</a><span aria-hidden="true">/</span>
          <a href="foreign-trademark">國外商標</a><span aria-hidden="true">/</span>
          <span aria-current="page">國外商標制度</span>
        </nav>
      </header>

      <article class="country-article russia-article article-content article-panel reveal">
        <div class="country-article-heading">
          <div><p class="country-article-kicker">Russia Trademark</p><h2>俄羅斯商標</h2></div>
          <a class="country-article-back" href="foreign-trademark">回國外商標制度列表</a>
        </div>

        <div class="article-sheet">
          <header class="article-sheet-header">
            <p>主管機關：俄羅斯聯邦智慧財產局(Rospatent )</p>
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
                <li><strong>排除在先權利衝突：</strong>商標不能與他人已經在俄羅斯註冊或申請中的商標相同或高度近似，且指定商品/服務相同或類似，以避免消費者產生混淆。</li>
                <li><strong>禁止惡意搶註與欺騙性：</strong>不得以惡意申請商標，或搶先註冊他人具有一定知名度之商標，以獲取不正當利益</li>
              </ul>
              <h4>違反公共秩序與特定限制</h4>
              <ul class="content-list">
                <li>不得違反法律、公共秩序或善良風俗、猥褻或侮辱性內容</li>
                <li>不得含有國旗、國徽、官方印章、國際組織徽章、官方檢驗標誌</li>
              </ul>
              <p><strong>優先權：</strong>若商標已在巴黎公約或WTO會員國第一次提出申請，可在6個月內向俄羅斯主張優先權。</p>
            </div>
          </section>

          <section class="article-row">
            <h3 class="article-section-title">申請程序</h3>
            <div class="article-body">
              <ol class="content-list">
                <li><strong>商標檢索：</strong>在提交前先於俄羅斯聯邦智慧財產局（Rospatent）資料庫進行檢索，確認是否有相同或近似商標已存在，以降低被駁回風險。</li>
                <li><strong>提交申請：</strong>準備商標圖樣、指定商品/服務類別(採用尼斯分類)，並載明申請人名稱、申請人地址、申請人國籍、商標圖樣、指定商品及服務，由當地代理人向Rospatent遞交。</li>
                <li><strong>官方審查：</strong>包含形式審查(文件格式)與實質審查(是否具備顯著性、是否與他案衝突)。</li>
                <li><strong>公告：</strong>審查核准並繳納註冊費後，完成商標註冊，並於官方商標公報刊登註冊資訊。</li>
                <li><strong>核准發證：</strong>審查核准後繳納註冊費，Rospatent完成商標註冊、刊登官方公報並核發商標註冊證</li>
                <li><strong>審查期間：</strong>商標審查時間:大約8至 12 個月。</li>
              </ol>
            </div>
          </section>

          <section class="article-row">
            <h3 class="article-section-title">商標權</h3>
            <div class="article-body">
              <ul class="content-list">
                <li><strong>權利期間：</strong>申請日起10年屆滿。</li>
                <li><strong>延展：</strong>屆滿後每次可延展10年，延展應於屆滿前1年內提出，得無限次延展。</li>
                <li><strong>延展寬限期：</strong>10年期間屆滿後6個月內為延展寬限期，須繳納滯納金。</li>
                <li><strong>使用證明：</strong>延展不須提供使用證據。</li>
              </ul>
            </div>
          </section>
        </div>
      </article>
    </div>
  </div>
</main>

<?php include dirname(__FILE__) . '/../include/footer.php'; ?>
