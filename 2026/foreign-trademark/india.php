<?php
$baseHref = '../';
$pageTitle = '印度商標 | 國外商標 | 聯律國際專利商標事務所';
$pageDescription = '印度商標申請要件、申請程序、商標權期限及爭議救濟資訊。';
$pageStyles = array('assets/css/page.css', 'assets/css/foreign-patent.css', 'assets/css/country-article.css');
$activePage = 'items';
$activeItem = 'trademark';
include dirname(__FILE__) . '/../include/header.php';
?>

<main class="country-patent-page">
  <section class="page-banner" aria-hidden="true"><div class="page-banner__image"></div></section>
  <div class="container">
    <div class="page-content">
      <header class="page-header" aria-labelledby="india-trademark-title">
        <h1 id="india-trademark-title">國外商標 <small>Foreign Trademark</small></h1>
        <nav class="page-breadcrumb" aria-label="麵包屑">
          <a href="index">首頁</a><span aria-hidden="true">/</span>
          <a href="foreign-trademark">國外商標</a><span aria-hidden="true">/</span>
          <span aria-current="page">國外商標制度</span>
        </nav>
      </header>

      <article class="country-article india-article article-content article-panel reveal">
        <div class="country-article-heading">
          <div><p class="country-article-kicker">India Trademark</p><h2>印度商標</h2></div>
          <a class="country-article-back" href="foreign-trademark">回國外商標制度列表</a>
        </div>

        <div class="article-sheet">
          <header class="article-sheet-header">
            <p>主管機關：<a href="https://ipindia.gov.in/" target="_blank" rel="noopener noreferrer">印度商標局（Trade Marks Registry）</a></p>
          </header>

          <section class="article-row">
            <h3 class="article-section-title">申請要件</h3>
            <div class="article-body">
              <h4>具備商標識別性</h4>
              <ul class="content-list">
                <li>不能直接描述商品的品質、功能、用途或地理名稱</li>
                <li>不得為商品或服務的通用名稱。</li>
                <li>不得僅由描述商品或服務品質、用途、數量、價值、地理來源等標誌所構成。</li>
              </ul>
              <p><strong>排除在先權利衝突：</strong>商標不能與他人已經在印度註冊或申請中的商標相同或高度近似，以避免消費者產生混淆。</p>
              <h4>違反公共秩序與特定限制</h4>
              <ul class="content-list">
                <li>不得違反法律。</li>
                <li>不得違反公共秩序或善良風俗。</li>
                <li>不得具有欺騙性。</li>
                <li>不得傷害宗教情感。</li>
                <li>不得使用《Emblems and Names (Prevention of Improper Use) Act, 1950》保護之國徽、國旗、官方標誌等</li>
              </ul>
              <p><strong>優先權：</strong>若該商標已在巴黎公約或WTO會員國第一次提出申請，可在6個月內向印度主張優先權。</p>
            </div>
          </section>

          <section class="article-row">
            <h3 class="article-section-title">申請程序</h3>
            <div class="article-body">
              <ol class="content-list">
                <li><strong>商標檢索：</strong>在申請前可於IP India官網進行檢索，確認您的文字、讀音、圖樣沒有與印度在先申請或已註冊的商標構成衝突</li>
                <li><strong>提交申請：</strong>準備商標圖樣、指定商品/服務類別(採用尼斯分類)，並載明申請人名稱、申請人地址、申請人國籍、商標圖樣、指定商品及服務，由當地代理人向印度商標局遞交。</li>
                <li><strong>官方審查：</strong>包含形式審查(文件格式)與實質審查(是否具備顯著性、是否與他案衝突)。</li>
                <li><strong>公告：</strong>審核通過會進入官方公告期，公告期為4個月，在此期間內任何人皆可提出異議。</li>
                <li><strong>核准發證：</strong>公告期滿無人異議，或異議不成立，並核發商標註冊證。</li>
                <li><strong>審查期間：</strong>商標審查時間:大約8 至 18 個月。</li>
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
