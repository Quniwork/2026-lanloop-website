<?php
$baseHref = '../';
$pageTitle = '越南專利 | 國外專利 | 聯律國際專利商標事務所';
$pageDescription = '越南專利種類、申請要點及專利爭議侵權資訊。';
$pageStyles = array('assets/css/page.css', 'assets/css/foreign-patent.css', 'assets/css/country-article.css');
$activePage = 'items';
$activeItem = 'patent';
include dirname(__FILE__) . '/../include/header.php';
?>

<main class="country-patent-page">
  <section class="page-banner" aria-hidden="true"><div class="page-banner__image"></div></section>
  <div class="container">
    <div class="page-content">
      <header class="page-header" aria-labelledby="vietnam-patent-title">
        <h1 id="vietnam-patent-title">國外專利 <small>Foreign Patent</small></h1>
        <nav class="page-breadcrumb" aria-label="麵包屑">
          <a href="index">首頁</a><span aria-hidden="true">/</span>
          <a href="foreign-patent">國外專利</a><span aria-hidden="true">/</span>
          <span aria-current="page">國外專利制度</span>
        </nav>
      </header>

      <article class="country-article vietnam-article article-content article-panel reveal">
        <div class="country-article-heading">
          <div><p class="country-article-kicker">Vietnam Patent</p><h2>越南專利</h2></div>
          <a class="country-article-back" href="foreign-patent">回國外專利制度列表</a>
        </div>

        <div class="article-sheet">
          <header class="article-sheet-header">
            <p>IP Vietnam 網址：<a href="https://ipvietnam.gov.vn/" target="_blank" rel="noopener noreferrer">https://ipvietnam.gov.vn/</a></p>
          </header>

          <section class="article-row">
            <h3 class="article-section-title">專利種類</h3>
            <div class="article-body">
              <div class="data-table-wrap">
                <table class="data-table china-patent-table brazil-patent-table">
                  <thead><tr><th scope="col">專利/保護種類</th><th scope="col">保護年限（自申請日起算）</th><th scope="col">審查制度</th><th scope="col">核心保護標的</th></tr></thead>
                  <tbody>
                    <tr><th scope="row">發明專利</th><td>20 年（不可延期）</td><td>實體審查制（含新穎性、進步性與產業利用性）</td><td>解決特定問題的技術產品或方法（如製程）。</td></tr>
                    <tr><th scope="row">新型專利</th><td>10 年（不可延期）</td><td>實體審查制（不審查進步性，僅審查新穎性與產業利用性）</td><td>創新程度稍低，但同樣包含技術產品或方法的解決方案。</td></tr>
                    <tr><th scope="row">設計專利</th><td>5 年（可展延 2 次，最長 15 年）</td><td>實體審查制（含新穎性、創造性與產業利用性）</td><td>產品全部或部分（新法已納入局部設計及非實體數位外觀）的線條、形狀、色彩等創新外觀。</td></tr>
                  </tbody>
                </table>
              </div>
            </div>
          </section>

          <section class="article-row">
            <h3 class="article-section-title">申請要點</h3>
            <div class="article-body">
              <ul class="content-list">
                <li><strong>新型專利亦須實體審查：</strong>不同於許多國家（如台、中、法）的新型專利採取形式審查，越南的新型專利（實用解決方案）必須強制提出實體審查請求。雖然免除進步性要求，但審查仍需耗費數年，此點在佈局時需特別注意。</li>
                <li><strong>新法納入部分設計與數位設計：</strong>最新修法大幅擴大了工業設計的保護範圍，正式允許對「產品的局部/零件」以及非物理形態的「數位外觀/圖形使用者介面（GUI）」申請設計保護。</li>
                <li><strong>新增 AI 發明專利規範：</strong>2026 年新修智慧財產權法中，越南前瞻性地增設了利用人工智慧（AI）系統協助創作之發明的權利歸屬與保護機制，為數位資產提供更清晰的合規依據。</li>
                <li><strong>新穎性優惠期（Grace Period）：</strong>發明與新型專利享有 12 個月 的新穎性優惠期，但僅限於「發明人自行發表」、「在越南官方認可的全國或國際展覽會上展出」或「因第三方惡意洩密」等特定公開情形。</li>
                <li><strong>強制翻譯與代理：</strong>外國申請人若在越南沒有營業場所或住所，必須強制委託越南當地的合法專利代理人辦理，且所有提交給 IPVN 的技術文件與權利要求書皆必須翻譯為越南文。</li>
              </ul>
            </div>
          </section>

          <section class="article-row">
            <h3 class="article-section-title">專利爭議侵權</h3>
            <div class="article-body">
              <h4>行政、民事雙軌並行執法：</h4>
              <p>越南是極少數仍允許透過行政手段處理專利侵權的國家。</p>
              <ul class="content-list content-sublist">
                <li><strong>行政查處：</strong>權利人可向科學技術督察（Inspectorate of Science and Technology）或海關舉報，由官方直接進行行政突擊檢查、罰款並沒收侵權產品。這種方式速度快、成本低，但無法取得民事賠償。</li>
                <li><strong>民事訴訟：</strong>若要請求損害賠償，則須向地方人民法院提起民事訴訟。</li>
              </ul>
              <ul class="content-list">
                <li><strong>等同原則（Doctrine of Equivalents）的限縮：</strong>越南法院在判定侵權時，傳統上極度依賴字面含義（文義侵權）。雖然法律概念上存在等同原則，但在實務上，如果被控侵權物與專利權利要求書有任何微小的結構或參數差異，法院和技術鑑定機構往往傾向判定不構成侵權。</li>
                <li><strong>官方鑑定意見（VIPRI）的決定性地位：</strong>在專利侵權訴訟或行政查處中，法官與督察人員通常缺乏技術背景，因此兩者高度依賴越南智慧財產研究所（VIPRI）出具的「侵權專家鑑定意見書」。雖然 VIPRI 的意見在法律上僅供參考，但實務上幾乎 90% 以上的判決皆會直接照抄 VIPRI 的鑑定結論。</li>
                <li><strong>網路服務提供商（ISP）的避風港與聯帶責任：</strong>因應新法實施，越南加強了電商與網路平台的侵權管控。ISP 平台若在收到專利權人通知後，未在法定期限內下架涉嫌侵權的網路產品，將須承擔連帶賠償責任。</li>
                <li><strong>消滅時效：</strong>專利侵權訴訟的民事賠償請求權時效，通常為權利人「知悉或應知悉」侵權行為之日起算 3 年。</li>
              </ul>
            </div>
          </section>
        </div>
      </article>
    </div>
  </div>
</main>

<?php include dirname(__FILE__) . '/../include/footer.php'; ?>
