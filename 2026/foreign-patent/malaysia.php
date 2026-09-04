<?php
$baseHref = '../';
$pageTitle = '馬來西亞專利 | 國外專利 | 聯律國際專利商標事務所';
$pageDescription = '馬來西亞專利種類、申請要點及專利爭議侵權資訊。';
$pageStyles = array('assets/css/page.css', 'assets/css/foreign-patent.css', 'assets/css/country-article.css');
$activePage = 'items';
$activeItem = 'patent';
include dirname(__FILE__) . '/../include/header.php';
?>

<main class="country-patent-page">
  <section class="page-banner" aria-hidden="true"><div class="page-banner__image"></div></section>
  <div class="container">
    <div class="page-content">
      <header class="page-header" aria-labelledby="malaysia-patent-title">
        <h1 id="malaysia-patent-title">國外專利 <small>Foreign Patent</small></h1>
        <nav class="page-breadcrumb" aria-label="麵包屑">
          <a href="index.php">首頁</a><span aria-hidden="true">/</span>
          <a href="foreign-patent.php">國外專利</a><span aria-hidden="true">/</span>
          <span aria-current="page">國外專利制度</span>
        </nav>
      </header>

      <article class="country-article malaysia-article article-content article-panel reveal">
        <div class="country-article-heading">
          <div><p class="country-article-kicker">Malaysia Patent</p><h2>馬來西亞專利</h2></div>
          <a class="country-article-back" href="foreign-patent.php">回國外專利制度列表</a>
        </div>

        <div class="article-sheet">
          <header class="article-sheet-header">
            <p>MyIPO 網址：<a href="https://iponline2u.myipo.gov.my/" target="_blank" rel="noopener noreferrer">https://iponline2u.myipo.gov.my/</a></p>
          </header>

          <section class="article-row">
            <h3 class="article-section-title">專利種類</h3>
            <div class="article-body">
              <div class="data-table-wrap">
                <table class="data-table china-patent-table brazil-patent-table">
                  <thead><tr><th scope="col">專利/保護種類</th><th scope="col">保護年限（自申請日起算）</th><th scope="col">審查制度</th><th scope="col">核心保護標的</th></tr></thead>
                  <tbody>
                    <tr><th scope="row">發明專利</th><td>20 年</td><td>實體審查制（含新穎性、進步性與產業利用性）</td><td>具備新穎性、進步性與產業利用性的技術產品或方法（製程）。</td></tr>
                    <tr><th scope="row">實用創新<br>(即新型專利)</th><td>10 年（期滿可分兩次展延，每次5年，最長 20 年）</td><td>形式與個別實體審查（不審查進步性，僅審查新穎性與產業利用性）</td><td>任何能用於產業的全新物品、改良或產品（排除「方法/製程」）。</td></tr>
                    <tr><th scope="row">工業設計<br>(即設計專利)</th><td>5 年（可展延4次，最長 25 年）</td><td>形式審查制</td><td>透過工業程序應用於物品上的形狀、構造、圖案或裝飾等外觀特徵。</td></tr>
                  </tbody>
                </table>
              </div>
            </div>
          </section>

          <section class="article-row">
            <h3 class="article-section-title">申請要點</h3>
            <div class="article-body">
              <ul class="content-list">
                <li><strong>新制：全面引入核准後異議（2025年底啟用）：</strong>根據最新生效的修正案，任何利害關係人可在專利獲證公告後的 6 個月內，向 MyIPO 註冊官提出「核准後異議（Post-Grant Opposition）」。這是重大的制度升級，讓第三方在進入法院前，有更低成本的管道直接行政撤銷瑕疵專利。</li>
              </ul>
              <h4>實用創新（新型）期限長、限制多：</h4>
              <ul class="content-list">
                <li>與多數國家不同，馬來西亞的實用創新若持續有商業使用並繳納年費，最長可展延至 20 年，年限與發明專利相同。</li>
                <li><strong>特別注意：</strong>實用創新只能保護實體「產品/物品」，絕對不保護「方法或製程」，且每件申請案只能包含「一項權利要求（Single Claim）」。</li>
                <li><strong>發明與實用創新的互換機制：</strong>申請人在審查過程中或收到檢索報告後，若發現發明專利的進步性不足，可在規定期限內申請將發明專利「轉換」為實用創新申請（反之亦然）。</li>
                <li><strong>放寬公眾審查與第三方意見：</strong>新修法擴大了專利申請案公開後的透明度，允許公眾更早查閱檢索與審查文件，並在專利核准前向 MyIPO 提交第三方意見（Observations）以阻擋其獲證。</li>
                <li><strong>新穎性優惠期（Grace Period）：</strong>提供 12 個月 的新穎性優惠期，但僅限於「因申請人或其前手的公開行為（如發表、展出）」或「因第三方濫用、惡意洩密」所導致的公開。</li>
                <li><strong>強制委體本地代理人：</strong>外國申請人若在馬來西亞沒有常住地址或主要營業場所，必須強制委託馬來西亞當地的註冊專利代理人辦理所有 MyIPO 事務。</li>
              </ul>
            </div>
          </section>

          <section class="article-row">
            <h3 class="article-section-title">專利爭議侵權</h3>
            <div class="article-body">
              <ul class="content-list">
                <li><strong>智慧財產權專責法庭：</strong>馬來西亞設有專門的智慧財產權高等法院（Specialised IP High Court），負責審理一審的專利侵權與民事無效訴訟，法官在處理複雜的技術比對與國際專利法律上具有高度專業。</li>
              </ul>
              <h4>判定原則（特別重視字面文義與全要件）：</h4>
              <ul class="content-list content-sublist">
                <li>馬來西亞法院在判定侵權時，首要依據文義侵權（Literal Infringement），檢視涉嫌侵權產品是否完全落入專利權利要求（Claims）的邊界。</li>
                <li>雖然馬來西亞司法判例承認等同原則（Doctrine of Equivalents / Pith and Marrow），但法院的態度相對嚴謹，通常只有在被控侵權物對非本質特徵（Non-essential features）進行了微小替代、且未改變發明實質運作方式時，才會判定等同侵權。</li>
              </ul>
              <ul class="content-list">
                <li><strong>異議程序與民事訴訟的競合：</strong>在新制下，若第三人欲向 MyIPO 提出行政異議，前提必須是該專利尚未在高等法院展開任何相關訴訟。一旦侵權官司已經開打，無效宣告就必須在法院以反訴（Counterclaim）形式提出。</li>
                <li><strong>行政執法分工（KPDN 突擊檢查）：</strong>雖然專利損害賠償必須透過民事法院，但馬來西亞國內貿易及生活消費部（KPDN）的執法局（Enforcement Division）擁有刑事查緝權。在商標或工業設計侵權中，KPDN 的執法相當迅速；但對於複雜的「專利技術侵權」，KPDN 通常較為被動，仍會要求權利人先取得高等法院的禁令或聲明。</li>
                <li><strong>非居民提起訴訟的擔保要求：</strong>在外國專利權人打官司時，馬來西亞法院為了防止濫訴，經常會要求非本國居民的原告提供訴訟費用擔保（Security for costs），以確保若原告敗訴時，有能力支付被告的法律費用。</li>
                <li><strong>消滅時效：</strong>專利侵權訴訟的追訴時效為自侵權行為發生之日起算 6 年。若超過6年，權利人將喪失提起訴訟或請求損害賠償的權利。</li>
              </ul>
            </div>
          </section>
        </div>
      </article>
    </div>
  </div>
</main>

<?php include dirname(__FILE__) . '/../include/footer.php'; ?>
