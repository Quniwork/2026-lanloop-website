<?php
$baseHref = '../';
$pageTitle = '法國商標 | 國外商標 | 聯律國際專利商標事務所';
$pageDescription = '法國商標申請要件、申請程序、商標權期限及爭議救濟資訊。';
$pageStyles = array('assets/css/page.css', 'assets/css/foreign-patent.css', 'assets/css/country-article.css');
$activePage = 'items';
$activeItem = 'trademark';
include dirname(__FILE__) . '/../include/header.php';
?>

<main class="country-patent-page">
  <section class="page-banner" aria-hidden="true"><div class="page-banner__image"></div></section>
  <div class="container">
    <div class="page-content">
      <header class="page-header" aria-labelledby="france-trademark-title">
        <h1 id="france-trademark-title">國外商標 <small>Foreign Trademark</small></h1>
        <nav class="page-breadcrumb" aria-label="麵包屑">
          <a href="index.php">首頁</a><span aria-hidden="true">/</span>
          <a href="foreign-trademark.php">國外商標</a><span aria-hidden="true">/</span>
          <span aria-current="page">國外商標制度</span>
        </nav>
      </header>

      <article class="country-article france-article article-content article-panel reveal">
        <div class="country-article-heading">
          <div><p class="country-article-kicker">France Trademark</p><h2>法國商標</h2></div>
          <a class="country-article-back" href="foreign-trademark.php">回國外商標制度列表</a>
        </div>

        <div class="article-sheet">
          <header class="article-sheet-header">
            <p>主管機關： 法國國家工業產權局（Institut National de la Propriété Industrielle, INPI）</p>
          </header>

          <section class="article-row">
            <h3 class="article-section-title">申請要件</h3>
            <div class="article-body">
              <p>商標可以包括: 字、聲音、標誌、顏色等這些任意組合。</p>
              <p><strong>商標須具顯著性：</strong>必須能夠將一家公司的產品或服務與其他公司的產品或服務區分開來。商標不得是通用名稱、描述性名稱或與相關商品或服務相關的慣用名稱。</p>
              <h4>無法註冊的內容</h4>
              <ul class="content-list">
                <li>用於標識、描述您的產品或服務的標誌</li>
                <li>單獨使用的讚揚性詞語</li>
                <li>違反公共秩序的標誌</li>
                <li>其他受保護的公共徽章、旗幟或其他官方標誌</li>
              </ul>
            </div>
          </section>

          <section class="article-row">
            <h3 class="article-section-title">優先權</h3>
            <div class="article-body">
              <p>若該商標已在台灣或其他WTO會員國第一次提出申請，可在6個月內向法國國家工業產權局主張優先權。</p>
            </div>
          </section>

          <section class="article-row">
            <h3 class="article-section-title">申請程序</h3>
            <div class="article-body">
              <ol class="content-list">
                <li><strong>商標檢索：</strong>在提交前先於INPI資料庫進行檢索，確認是否有相同或近似商標已存在，以降低被異議風險。</li>
                <li><strong>提交申請：</strong>準備商標圖樣、指定商品/服務類別(採用尼斯分類)，並載明申請人名稱、申請人地址、申請人國籍、商標圖樣、指定商品及服務，由當地代理人向INPI遞交。</li>
                <li><strong>官方審查：</strong>包含形式審查(文件格式)與實質審查(是否具備顯著性等)。</li>
                <li><strong>公告：</strong>審核通過會進入官方公告期，為期2個月，在此期間內任何人皆可提出異議。</li>
                <li><strong>核准發證：</strong>公告期滿無人異議，或異議不成立，並核發商標註冊證。</li>
              </ol>
            </div>
          </section>

          <section class="article-row">
            <h3 class="article-section-title">審查期間</h3>
            <div class="article-body">
              <p>約6-12個月。(若無核駁)</p>
            </div>
          </section>

          <section class="article-row">
            <h3 class="article-section-title">商標權</h3>
            <div class="article-body">
              <ul class="content-list">
                <li><strong>權利期間：</strong>自申請日起10年有效。</li>
                <li><strong>延展：</strong>屆滿後每次可延展10年，延展於屆滿前6個月可提出，得無限次延展。</li>
                <li><strong>延展寬限期：</strong>10年期間屆滿後6個月內為延展寬限期。</li>
                <li><strong>使用證明：</strong>延展不須提供使用證據。</li>
              </ul>
            </div>
          </section>

          <section class="article-row">
            <h3 class="article-section-title">商標爭議救濟</h3>
            <div class="article-body">
              <p><strong>異議：</strong>與在先商標權利衝突，例如相同或近似商標指定相同或類似商品/服務，任何人可提出異議。</p>
              <h4>宣告無效</h4>
              <ul class="content-list">
                <li>商標之註冊，如有以下理由，得由法院判決或法國國家工業產權局局長宣告無效</li>
                <li>商標缺乏顯著性</li>
                <li>已成為慣用語、通用語</li>
                <li>違反公共秩序或法律禁止使用的商標</li>
                <li>申請人惡意提交商標申請的商標</li>
                <li>侵犯在法國有效的在先權利的商標</li>
                <li>引起公眾混淆的風險</li>
              </ul>
              <p><strong>撤銷：</strong>商標權人如無正當理由，連續五年未將註冊商標用於其註冊的商品或服務，任何人可提出撤銷。</p>
            </div>
          </section>
        </div>
      </article>
    </div>
  </div>
</main>

<?php include dirname(__FILE__) . '/../include/footer.php'; ?>
