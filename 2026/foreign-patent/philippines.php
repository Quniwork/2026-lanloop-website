<?php
$baseHref = '../';
$pageTitle = '菲律賓專利 | 國外專利 | 聯律國際專利商標事務所';
$pageDescription = '菲律賓專利種類、申請要點及專利爭議侵權資訊。';
$pageStyles = array('assets/css/page.css', 'assets/css/foreign-patent.css', 'assets/css/country-article.css');
$activePage = 'items';
$activeItem = 'patent';
include dirname(__FILE__) . '/../include/header.php';
?>

<main class="country-patent-page">
  <section class="page-banner" aria-hidden="true"><div class="page-banner__image"></div></section>
  <div class="container">
    <div class="page-content">
      <header class="page-header" aria-labelledby="philippines-patent-title">
        <h1 id="philippines-patent-title">國外專利 <small>Foreign Patent</small></h1>
        <nav class="page-breadcrumb" aria-label="麵包屑">
          <a href="index.php">首頁</a><span aria-hidden="true">/</span>
          <a href="foreign-patent.php">國外專利</a><span aria-hidden="true">/</span>
          <span aria-current="page">國外專利制度</span>
        </nav>
      </header>

      <article class="country-article philippines-article article-content article-panel reveal">
        <div class="country-article-heading">
          <div><p class="country-article-kicker">Philippines Patent</p><h2>菲律賓專利</h2></div>
          <a class="country-article-back" href="foreign-patent.php">回國外專利制度列表</a>
        </div>

        <div class="article-sheet">
          <header class="article-sheet-header">
            <p>IPOPHL 網址：<a href="https://www.ipophil.gov.ph/" target="_blank" rel="noopener noreferrer">https://www.ipophil.gov.ph/</a></p>
          </header>

          <section class="article-row">
            <h3 class="article-section-title">專利種類</h3>
            <div class="article-body">
              <div class="data-table-wrap">
                <table class="data-table china-patent-table brazil-patent-table">
                  <thead><tr><th scope="col">專利/保護種類</th><th scope="col">保護年限（自申請日起算）</th><th scope="col">審查制度</th><th scope="col">核心保護標的</th></tr></thead>
                  <tbody>
                    <tr><th scope="row">發明專利</th><td>20 年（不可延期）</td><td>實體審查制（含新穎性、進步性與產業利用性）</td><td>解決任何人類活動領域中特定技術問題的全新產品、方法或改良。</td></tr>
                    <tr><th scope="row">實用模型<br>(即新型專利)</th><td>7 年（不可延期）</td><td>登記制 / 形式審查（不審查進步性，免實體審查）</td><td>具備新穎性與產業利用性，針對實體物品、構造或組成的實用技術改良。</td></tr>
                    <tr><th scope="row">工業設計<br>(即設計專利)</th><td>5 年（可展延 2 次，最長 15 年）</td><td>登記制 / 形式審查（可請求加速登記）</td><td>應用於工業產品上，由線條、色彩、形狀或圖案組成的創新外觀特徵。</td></tr>
                  </tbody>
                </table>
              </div>
            </div>
          </section>

          <section class="article-row">
            <h3 class="article-section-title">申請要點</h3>
            <div class="article-body">
              <ul class="content-list">
                <li><strong>發明採取嚴格實體審查：</strong>菲律賓發明專利必須在申請日（或優先權日）起 36 個月內主動提出實體審查請求。審查標準極度向美國與歐盟看齊，強烈依賴國際檢索報告（ISR）。</li>
                <li><strong>實用模型與設計採取快速登記制：</strong>實用模型與工業設計不進行新穎性與進步性的實體審查。申請案在形式審查合格後會直接公告獲證，通常在幾個月內即可快速卡位。</li>
                <li><strong>發明與實用模型互換（Conversion）：</strong>申請人在發明專利遭到 IPOPHL 核駁前，如果發現技術不具備進步性，可以在法定期限內申請將發明專利「轉換」為實用模型申請，以保留其原始優先權日。</li>
                <li><strong>明確排除電腦程式與軟體：</strong>菲律賓法律明確規定，「電腦程式（Computer Programs）與軟體本身」絕對無法申請專利。在菲律賓，軟體主要透過「著作權法」進行保護，除非軟體與特定實體硬體架構緊密結合、用以解決硬體控制的技術問題，才可能以發明專利受理。</li>
                <li><strong>新穎性優惠期（Grace Period）：</strong>提供 12 個月 的新穎性優惠期。但其適用條件非常嚴格，僅限於「發明人自己（或其前手）公開」、「因第三方濫用或惡意洩密」所導致的技術公開。</li>
                <li><strong>強制本地居民代理：</strong>外國申請人若在菲律賓境內沒有固定住所或主要營業場所，必須強制指定並委託居住在菲律賓當地的註冊專利代理人辦理所有 IPOPHL 流程。</li>
              </ul>
            </div>
          </section>

          <section class="article-row">
            <h3 class="article-section-title">專利爭議侵權</h3>
            <div class="article-body">
              <h4>行政執法與法院訴訟雙軌制：</h4>
              <p>這是菲律賓的一大特色，權利人有兩條維權路徑：</p>
              <ul class="content-list content-sublist">
                <li><strong>法律訴訟：</strong>向指定的區域審判法院（Regional Trial Court, RTC）智慧財產專責庭提起民事侵權訴訟，以請求損害賠償。</li>
                <li><strong>行政查處：</strong>如果涉案金額較低，可直接向 IPOPHL 的法律事務局（BLA）提起行政訴訟，BLA 有權對侵權人發出停止令、沒收產品並處以行政罰鍰。</li>
              </ul>
              <h4>判定原則（文義侵權與等同原則）：</h4>
              <ul class="content-list content-sublist">
                <li>菲律賓法院在審理技術侵權時，首先採用全要件原則（All Elements Rule）進行字面文義比對。</li>
                <li>若字面不完全相符，法院亦承認等同原則（Doctrine of Equivalents）。判定標準為：如果被控侵權物是以「實質相同的手段（Means）」，執行「實質相同的功能（Function）」，並達到「實質相同的結果（Result）」，即使元件文字不同，仍構成侵權。</li>
              </ul>
              <ul class="content-list">
                <li><strong>高額懲罰性損害賠償（Judicial Discretion）：</strong>如果原告能證明被告的侵權行為屬於「惡意」或「明知故犯（Willful Intention）」，法院有權行使自由裁量權，將判決的實際損害賠償金額直接拉高至最高 3 倍。</li>
                <li><strong>臨時禁令（Preliminary Injunction）核准率偏低：</strong>雖然法律允許權利人在訴訟初期申請臨時停止令（TRO）或臨時禁令，但在菲律賓專利訴訟實務中，法官對發放禁令極為謹慎，通常要求原告必須提出牢不可破的侵權證據，否則難以在判決前叫停對手的生產線。</li>
                <li><strong>海關備案保護（Customs Border Protection）：</strong>菲律賓海關（BOC）擁有高效率的智慧財產權備案系統。發明、實用模型與設計在獲證後可以向海關註冊。一旦海關在邊境查獲涉嫌侵權的進出口貨物，將直接對貨物進行扣押，並限期通知權利人進行技術鑑定與提起法律程序。</li>
                <li><strong>消滅時效：</strong>專利侵權民事損害賠償的追訴時效，為自侵權行為發生之日起算 4 年。超過4年的部分將無法請求賠償。</li>
              </ul>
            </div>
          </section>
        </div>
      </article>
    </div>
  </div>
</main>

<?php include dirname(__FILE__) . '/../include/footer.php'; ?>
