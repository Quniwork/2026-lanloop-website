<?php
$pageTitle = '中國專利 | 聯律國際專利商標事務所';
$pageDescription = '中國專利種類、申請要點及專利爭議侵權資訊。';
$pageStyles = array('assets/css/page.css', 'assets/css/foreign-patent.css', 'assets/css/country-article.css');
$activePage = 'services';
include dirname(__FILE__) . '/include/header.php';
?>

<main class="country-patent-page">
  <section class="page-banner" aria-hidden="true"><div class="page-banner__image"></div></section>
  <div class="container">
    <div class="page-content">
      <header class="page-header" aria-labelledby="china-patent-title">
        <h1 id="china-patent-title">中國專利 <small>China Patent</small></h1>
        <nav class="page-breadcrumb" aria-label="麵包屑">
          <a href="index.php">首頁</a><span aria-hidden="true">/</span>
          <a href="foreign-patent.php">國外專利</a><span aria-hidden="true">/</span>
          <span aria-current="page">中國專利</span>
        </nav>
      </header>

      <article class="country-article article-panel reveal">
        <p class="article-lead">中國專利申請及權利維護，應依中國國家知識產權局（CNIPA）的最新規定辦理。</p>
        <p class="country-source">CNIPA 參考網址：<a href="https://www.cnipa.gov.cn/" target="_blank" rel="noopener noreferrer">https://www.cnipa.gov.cn/</a></p>

        <h2>專利種類</h2>
        <div class="data-table-wrap">
          <table class="data-table">
            <thead><tr><th scope="col">專利種類</th><th scope="col">保護核心</th><th scope="col">審查方式</th><th scope="col">審查時程</th><th scope="col">保護期限</th></tr></thead>
            <tbody>
              <tr><th scope="row">發明專利</th><td>產品、方法或改良</td><td>實質審查</td><td>約18–24個月</td><td>20年</td></tr>
              <tr><th scope="row">實用新型專利</th><td>物品形狀、構造</td><td>初步審查</td><td>約6–12個月</td><td>10年</td></tr>
              <tr><th scope="row">外觀設計專利</th><td>視覺美感、工業外觀</td><td>初步審查</td><td>約6–12個月</td><td>15年</td></tr>
            </tbody>
          </table>
        </div>

        <h2>申請要點</h2>
        <h3>發明與實用新型的三性</h3>
        <ul class="content-list"><li><strong>新穎性：</strong>申請日前未在國內外出版物、公開使用或其他方式為公眾所知。</li><li><strong>創造性：</strong>與現有技術相比，具有實質性特點和進步。</li><li><strong>實用性：</strong>能夠製造或使用，並產生積極、有益的效果。</li></ul>
        <h3>外觀設計的實質要件</h3>
        <ul class="content-list"><li>不屬於申請日前已為公眾所知的現有設計。</li><li>與現有設計或現有設計特徵的組合相比，具有明顯區別。</li><li>不得與他人在先取得的商標權、著作權等合法權利衝突。</li></ul>

        <h2>專利爭議與侵權</h2>
        <p>在中國大陸專利制度中，對應台灣「舉發」的正式程序稱為「專利權無效宣告」。提出無效宣告時，應提出具體理由與證據，常見理由包括缺乏新穎性、創造性或實用性、說明書公開不充分、修改超出原申請範圍，以及不符合專利保護客體。</p>
        <p>未經專利權人許可，以營利為目的製造、使用或銷售專利產品，可能構成侵權。權利人可透過民事訴訟請求損害賠償或停止侵權，也可請求行政部門查處。</p>
        <h3>侵權判定</h3>
        <p>法院會比對涉案產品與專利權利要求。若被控產品包含專利範圍中的每一項技術特徵，或以基本相同的手段實現基本相同的功能並達到基本相同的效果，可能被認定構成侵權。</p>
        <ul class="content-list"><li><strong>行政查處：</strong>由國家知識產權局或地方管理專利工作的部門處理。</li><li><strong>司法訴訟：</strong>向有管轄權的人民法院提起民事訴訟。</li></ul>
      </article>
    </div>
  </div>
</main>

<?php include dirname(__FILE__) . '/include/footer.php'; ?>
