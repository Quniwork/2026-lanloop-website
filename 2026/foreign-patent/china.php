<?php
$baseHref = '../';
$pageTitle = '國外專利 | 聯律國際專利商標事務所';
$pageDescription = '中國專利種類、申請要點及專利爭議侵權資訊。';
$pageStyles = array('assets/css/page.css', 'assets/css/foreign-patent.css', 'assets/css/country-article.css');
$activePage = 'services';
include dirname(__FILE__) . '/../include/header.php';
?>

<main class="country-patent-page">
  <section class="page-banner" aria-hidden="true"><div class="page-banner__image"></div></section>
  <div class="container">
    <div class="page-content">
      <header class="page-header" aria-labelledby="china-patent-title">
        <h1 id="china-patent-title">國外專利 <small>Foreign Patent</small></h1>
        <nav class="page-breadcrumb" aria-label="麵包屑">
          <a href="index.php">首頁</a><span aria-hidden="true">/</span>
          <a href="foreign-patent.php">國外專利</a><span aria-hidden="true">/</span>
          <span aria-current="page">國外專利制度</span>
        </nav>
      </header>

      <article class="country-article article-content article-panel reveal">
        <div class="country-article-heading">
          <div>
            <p class="country-article-kicker">China Patent</p>
            <h2>中國專利</h2>
          </div>
          <a class="country-article-back" href="foreign-patent.php">回國外專利制度列表</a>
        </div>

        <div class="article-sheet">
          <header class="article-sheet-header">
            <p>CNIPA網址：<a href="https://www.lib.nthu.edu.tw/research/patent.html" target="_blank" rel="noopener noreferrer">https://www.lib.nthu.edu.tw/research/patent.html</a></p>
          </header>

          <section class="article-row">
            <h3 class="article-section-title">專利種類</h3>
            <div class="article-body">
              <div class="data-table-wrap">
                <table class="data-table china-patent-table">
                  <thead><tr><th scope="col">專利種類</th><th scope="col">保護核心</th><th scope="col">審查方式</th><th scope="col">審查時程</th><th scope="col">保護期限</th></tr></thead>
                  <tbody>
                    <tr><th scope="row">發明專利</th><td>產品、方法或改良</td><td>實質審查</td><td>約 18-24 個月</td><td>20 年</td></tr>
                    <tr><th scope="row">實用新型專利</th><td>物品形狀、構造</td><td>初步審查</td><td>約 6-12 個月</td><td>10 年</td></tr>
                    <tr><th scope="row">外觀設計專利</th><td>視覺美感、工業外觀</td><td>初步審查</td><td>約 6-12 個月</td><td>15 年</td></tr>
                  </tbody>
                </table>
              </div>
            </div>
          </section>

          <section class="article-row">
            <h3 class="article-section-title">申請要點</h3>
            <div class="article-body">
              <h4>針對發明專利與實用新型專利，法律規定必須同時具備以下「三性」：</h4>
              <ul class="content-list">
                <li style="text-indent: -60px;padding-left: 60px;"><strong>新穎性：</strong>該技術方案不屬於「現有技術」。在申請日以前，沒有任何同樣的發明或實用新型在國內外出版物上發表過、被公開使用過，或以其他方式為公眾所知。同時，也沒有其他人向專利局提出過相同的申請並記載在申請日後公布的專利文件中。</li>
                <li><strong>創造性：</strong>與現有技術相比，該專利必須具有實質性的特點和進步；發明專利要求具有「突出的」實質性特點和「顯著的」進步，實用新型專利則要求具有實質性特點和進步。</li>
                <li><strong>實用性：</strong>該發明或實用新型必須能夠製造或者使用，並且能夠產生積極、有益的效果。</li>
              </ul>
              <h4>針對外觀設計專利，其實質要件為：</h4>
              <ul class="content-list">
                <li><strong>不屬於現有設計：</strong>在申請日以前沒有相同的設計在國內外為公眾所知。</li>
                <li><strong>具有明顯區別：</strong>與現有設計或者現有設計特徵的組合相比，應當具有明顯區別。</li>
                <li><strong>不得與在先權利衝突：</strong>不得與他人在先取得的合法權利（如商標權、著作權）相衝突。</li>
              </ul>
            </div>
          </section>

          <section class="article-row">
            <h3 class="article-section-title">專利爭議侵權</h3>
            <div class="article-body">
              <p>在中國大陸的專利制度中，沒有「舉發」這個詞，其對應的正式法定程序稱為「專利權無效宣告」。這是一項透過公眾協助來檢視專利是否具備實質有效性的公眾輔助審查制度。</p>
              <h4>提出無效宣告時，必須提出具體理由與證據，常見的法定理由包括：</h4>
              <ul class="content-list">
                <li><strong>缺乏三性：</strong>專利不具備新穎性、創造性（進步性）或實用性。</li>
                <li><strong>說明書公開不充分。</strong></li>
                <li><strong>修改超範圍。</strong></li>
                <li><strong>不符合專利保護客體：</strong>屬於違反法律、妨害公共利益或不屬於專利保護的範疇。</li>
              </ul>
              <p>未經專利權人許可，以營利為目的製造、使用或銷售專利產品即構成侵權。權利人可透過民事訴訟要求賠償或停止侵權，也可請求行政部門快速查處。</p>
              <p>法院在審理時會比對涉案產品與專利範圍。若被控產品包含專利範圍中的每一個技術特徵（字面侵權），或是包含「基本相同的手段，實現基本相同的功能，達到基本相同的效果」（均等侵權），即認定侵權。</p>
              <ul class="content-list">
                <li><strong>行政查處：</strong>由國家知識產權局或地方管理專利工作部門處理。</li>
                <li><strong>司法訴訟：</strong>向法院提起民事訴訟。</li>
              </ul>
            </div>
          </section>
        </div>
      </article>
    </div>
  </div>
</main>

<?php include dirname(__FILE__) . '/../include/footer.php'; ?>
