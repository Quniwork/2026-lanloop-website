<?php
$baseHref = '../';
$pageTitle = '智利專利 | 國外專利 | 聯律國際專利商標事務所';
$pageDescription = '智利專利種類、申請要點及專利爭議侵權資訊。';
$pageStyles = array('assets/css/page.css', 'assets/css/foreign-patent.css', 'assets/css/country-article.css');
$activePage = 'items';
$activeItem = 'patent';
include dirname(__FILE__) . '/../include/header.php';
?>

<main class="country-patent-page">
  <section class="page-banner" aria-hidden="true"><div class="page-banner__image"></div></section>
  <div class="container">
    <div class="page-content">
      <header class="page-header" aria-labelledby="chile-patent-title">
        <h1 id="chile-patent-title">國外專利 <small>Foreign Patent</small></h1>
        <nav class="page-breadcrumb" aria-label="麵包屑">
          <a href="index.php">首頁</a><span aria-hidden="true">/</span>
          <a href="foreign-patent.php">國外專利</a><span aria-hidden="true">/</span>
          <span aria-current="page">國外專利制度</span>
        </nav>
      </header>

      <article class="country-article chile-article article-content article-panel reveal">
        <div class="country-article-heading">
          <div><p class="country-article-kicker">Chile Patent</p><h2>智利專利</h2></div>
          <a class="country-article-back" href="foreign-patent.php">回國外專利制度列表</a>
        </div>

        <div class="article-sheet">
          <header class="article-sheet-header">
            <p>INAPI 網址：<a href="https://www.inapi.cl/" target="_blank" rel="noopener noreferrer">https://www.inapi.cl/</a></p>
          </header>

          <section class="article-row">
            <h3 class="article-section-title">專利種類</h3>
            <div class="article-body">
              <div class="data-table-wrap">
                <table class="data-table china-patent-table brazil-patent-table">
                  <thead><tr><th scope="col">專利/保護種類</th><th scope="col">保護年限（自申請日起算）</th><th scope="col">審查制度</th><th scope="col">核心保護標的</th></tr></thead>
                  <tbody>
                    <tr><th scope="row">發明專利</th><td>20 年（2026新制開放特定延期）</td><td>全面實體審查制（須繳費提審）</td><td>具備新穎性、進步性與產業利用性的全新技術產品或方法。</td></tr>
                    <tr><th scope="row">新型專利</th><td>10 年</td><td>全面實體審查制（不審查進步性）</td><td>針對工具、器具、機械等實體物品的形狀、結構進行的實用改良（排除方法/製程）。</td></tr>
                    <tr><th scope="row">工業設計<br>(即設計專利)</th><td>10 年（2026新制由5年延長為 10年）</td><td>全面實體審查制（審查新穎性）</td><td>產品全部或部分由線條、色彩、形狀組成的創新外觀特徵。</td></tr>
                  </tbody>
                </table>
              </div>
            </div>
          </section>

          <section class="article-row">
            <h3 class="article-section-title">申請要點</h3>
            <div class="article-body">
              <ul class="content-list">
                <li><strong>首度引入專利期延長（PTE）補償：</strong>根據 2026 年最新修正案，如果 INAPI 在審查發明專利時發生「不合理的行政延誤」（如自申請日起算超過 5 年，或提審後超過 3 年未結案），專利權人可在獲證後申請「專利權期間延長（PTE）」，以補償損失的保護年限，這對跨國醫藥與科技公司是重大歷史利多。</li>
                <li><strong>設計專利保護年限直接翻倍：</strong>新制將工業設計與工業繪圖（Industrial Drawings）的保護期限，由原本的 5 年直接拉長至 10 年（自申請日起算），且維持一次到位不需中途展延。</li>
                <li><strong>新型專利需實體審查但免進步性：</strong>智利的新型專利（Utility Model）並非登記制。它在形式審查後，必須強制繳費並由 INAPI 指派外部專家進行新穎性與實用性的實體審查，但審查標準中不包含進步性門檻。</li>
                <li><strong>12個月新穎性寬限期（Grace Period）：</strong>智利提供 12 個月 的新穎性優惠期，包含「發明人自己（或其授權者）在世界任何地方主動發表、展出或銷售」該技術的行為，只要在 1 年內向 INAPI 遞交申請，皆不會喪失新穎性。</li>
                <li><strong>排除治療方法與天然物質：</strong>智利專利法明確將「針對人類或動物身體的手術、治療或診斷方法」排除在專利保護之外。此外，自然界中既存的物質、生物體或基因組，在智利亦屬於不可專利之標的。</li>
                <li><strong>強制委託本地代理人與翻譯：</strong>外國申請人若在智利沒有固定住所，必須強制委託智利當地的註冊專利代理人辦理所有 INAPI 流程，且所有技術文件與權利要求書皆必須翻譯為西班牙文。</li>
              </ul>
            </div>
          </section>

          <section class="article-row">
            <h3 class="article-section-title">專利爭議侵權</h3>
            <div class="article-body">
              <ul class="content-list">
                <li><strong>智利工業產權法院（TDPI）集中管轄：</strong>智利設有專門的中央級工業產權法院（Tribunal de Propiedad Industrial）。所有涉及 INAPI 行政決定的上訴、專利無效宣告（Nullity）訴訟，皆統一由該專責法院審理。</li>
              </ul>
              <h4>民事侵權與刑事犯罪雙軌並行：</h4>
              <p>在智利，專利侵權在法律上被定性為刑事犯罪行為：</p>
              <ul class="content-list content-sublist">
                <li><strong>刑事路徑：</strong>權利人可向刑事檢察官報案，由警方對涉嫌侵權的工廠、倉庫發動刑事突擊搜查、當場查封沒收侵權產品與生產機具，侵權負責人將面臨刑事罰金。</li>
                <li><strong>民事路徑：</strong>若欲請求實際的損害賠償與所失利益，權利人則須另向地方民事法院提起民事侵權訴訟。</li>
              </ul>
              <h4>判定原則（字面文義與專家鑑定）：</h4>
              <ul class="content-list content-sublist">
                <li>智利法院在審理技術侵權時，首要遵循文義侵權（Literal Infringement）與全要件原則。</li>
                <li>由於法官通常缺乏科技背景，不論是 TDPI 還是民事法院，在審理過程中100% 會指派一位由官方認證的第三方獨立技術專家（Perito）撰寫技術比對報告。專家的鑑定意見在智利訴訟中具有超過 80% 的決定性影響力。</li>
              </ul>
              <ul class="content-list">
                <li><strong>臨時禁令（Prejudiciary Measures）取證：</strong>原告在提起民事訴訟前，若有足夠理由懷疑他人侵權，可向法院申請假處分，要求在不通知被告的情況下，先行由執達吏前往現場扣押涉嫌侵權的樣品或發票帳冊，作為後續官司的呈堂證供。</li>
                <li><strong>消滅時效：</strong>專利侵權訴訟的追訴與損害賠償請求權時效，為自侵權行為發生之日起算 5 年。超過5年的部分將無法追討賠償。</li>
              </ul>
            </div>
          </section>
        </div>
      </article>
    </div>
  </div>
</main>

<?php include dirname(__FILE__) . '/../include/footer.php'; ?>
