<?php
$baseHref = '../';
$pageTitle = '印尼專利 | 國外專利 | 聯律國際專利商標事務所';
$pageDescription = '印尼專利種類、申請要點及專利爭議侵權資訊。';
$pageStyles = array('assets/css/page.css', 'assets/css/foreign-patent.css', 'assets/css/country-article.css');
$activePage = 'items';
$activeItem = 'patent';
include dirname(__FILE__) . '/../include/header.php';
?>

<main class="country-patent-page">
  <section class="page-banner" aria-hidden="true"><div class="page-banner__image"></div></section>
  <div class="container">
    <div class="page-content">
      <header class="page-header" aria-labelledby="indonesia-patent-title">
        <h1 id="indonesia-patent-title">國外專利 <small>Foreign Patent</small></h1>
        <nav class="page-breadcrumb" aria-label="麵包屑">
          <a href="index.php">首頁</a><span aria-hidden="true">/</span>
          <a href="foreign-patent.php">國外專利</a><span aria-hidden="true">/</span>
          <span aria-current="page">國外專利制度</span>
        </nav>
      </header>

      <article class="country-article indonesia-article article-content article-panel reveal">
        <div class="country-article-heading">
          <div><p class="country-article-kicker">Indonesia Patent</p><h2>印尼專利</h2></div>
          <a class="country-article-back" href="foreign-patent.php">回國外專利制度列表</a>
        </div>

        <div class="article-sheet">
          <header class="article-sheet-header">
            <p>DJKI 網址：<a href="https://dgip.go.id/" target="_blank" rel="noopener noreferrer">https://dgip.go.id/</a></p>
          </header>

          <section class="article-row">
            <h3 class="article-section-title">專利種類</h3>
            <div class="article-body">
              <div class="data-table-wrap">
                <table class="data-table china-patent-table brazil-patent-table">
                  <thead><tr><th scope="col">專利/保護種類</th><th scope="col">保護年限（自申請日起算）</th><th scope="col">審查制度</th><th scope="col">核心保護標的</th></tr></thead>
                  <tbody>
                    <tr><th scope="row">一般專利<br>(即發明專利)</th><td>20 年（不可延期）</td><td>實體審查制（含新穎性、進步性與產業利用性）</td><td>具備新穎性與進步性的技術產品、方法。2026新制擴大納入「系統、電腦軟體方法與特殊用途」。</td></tr>
                    <tr><th scope="row">簡易專利<br>(即新型專利)</th><td>10 年（不可延期）</td><td>實體審查制（不審查進步性，僅審查新穎性與實用效益）</td><td>針對實體產品在外形、結構或構造上的全新改良（排除「方法/製程」）。</td></tr>
                    <tr><th scope="row">工業設計<br>(即設計專利)</th><td>5 年（可展延 2 次，最長 15 年）</td><td>形式審查制</td><td>產品全部或部分在外觀、線條、色彩、形狀上具備美感並可供工業應用的創新設計。</td></tr>
                  </tbody>
                </table>
              </div>
            </div>
          </section>

          <section class="article-row">
            <h3 class="article-section-title">申請要點</h3>
            <div class="article-body">
              <ul class="content-list">
                <li><strong>擴大可專利標的（納入軟體與用途）：</strong>2026 年最新修正案大幅放寬了發明定義，正式將「系統（Systems）」、「方法（Methods）」與「特定用途/使用（Uses）」列入保護範圍，這為跨國科技公司在印尼佈局軟體、數位科技與生技藥品用途時提供了更有力的法源支持。</li>
                <li><strong>強制全面電子化 filing：</strong>新制實施後，印尼徹底廢除紙本收件，所有專利申請必須強制透過 DGIP 的線上系統進行電子提交。</li>
                <li><strong>超額權利要求費改為「申請時繳納」：</strong>過去印尼允許申請人將超過 10 項的超額權利要求費（Excess Claim Fees），拖延至提實體審查時（最長36個月）再行補繳。2026年新制改為「申請當天必須立即繳清」，否則該案將直接被視為撤回，無法取得申請日。</li>
                <li><strong>簡易專利（新型）亦須實體審查：</strong>印尼的簡易專利並非登記制，它強制要求進行新穎性實體審查，雖然免除進步性要求，但仍需耗費時間。不過，新法引入了加速公開（Accelerated Publication）機制，申請人可在 3 個月內請求公開以加快進度。</li>
                <li><strong>新增核准後再審查機制（Re-examination）：</strong>2026年新規中，如果專利不幸遭到核駁、或在公告授權後有特定爭議，申請人與利害關係人有了全新的官方再審查行政救濟管道，提供除法院訴訟外更彈性的爭端解決機制。</li>
                <li><strong>遺傳資源與傳統知識強制聲明：</strong>如果技術發明涉及印尼當地的遺傳資源（Genetic Resources）或傳統知識，申請時必須強制提交來源國與原產地的正式聲明書，否則不予受理。</li>
              </ul>
            </div>
          </section>

          <section class="article-row">
            <h3 class="article-section-title">專利爭議侵權</h3>
            <div class="article-body">
              <ul class="content-list">
                <li><strong>商業法院集中管轄：</strong>印尼的專利侵權民事訴訟與無效宣告反訴，統一由特定的商業法院（Commercial Court / Pengadilan Niaga）管轄（例如雅加達商業法院），不歸一般地方民事法院審理。</li>
                <li><strong>判定原則（高度依賴字面文義）：</strong>印尼商業法院在判定侵權時，實務上極度重視文義侵權（Literal Infringement）與全要件原則。雖然理論上承認等同原則，但法官在比對技術特徵時通常非常機械化，若被告產品與專利權利要求字面有微小差異，權利人往往面臨很高的敗訴風險。</li>
                <li><strong>當地實施（Local Working Requirement）義務的防禦：</strong>印尼專利法規定，專利權人必須在印尼境內「實施」該專利（如在當地設廠生產）。若無法在當地製造，權利人必須向 DGIP 提交「延期實施聲明」或改以進口、授權他人製造代替。否則，競爭對手可以以此為由向法院申請「強制授權」，或直接主張撤銷該專利。</li>
                <li><strong>刑事與民事併行：</strong>印尼法律將專利侵權定性為「告訴乃論罪」，權利人除了打民事官司請求損害賠償外，亦可直接向印尼警方國家調查局（Bareskrim Polri）檢舉，發動刑事突擊搜查與扣押，侵權負責人可能面臨有期徒刑或高額刑事罰金。</li>
                <li><strong>海關邊境保護措施（Customs Recordation）：</strong>專利權人可以將其獲證的印尼專利在海關進行備案。一旦海關查獲涉嫌侵權的進出口貨物，可根據法院的臨時命令直接在邊境扣押該批走私或仿冒產品，對防堵進口侵權品非常有效。</li>
                <li><strong>消滅時效：</strong>印尼專利民事侵權訴訟的請求權時效，通常為自權利人「知悉侵權行為及侵權人」之日起算 3 年。</li>
              </ul>
            </div>
          </section>
        </div>
      </article>
    </div>
  </div>
</main>

<?php include dirname(__FILE__) . '/../include/footer.php'; ?>
