<?php
$baseHref = '../';
$pageTitle = '印度專利 | 國外專利 | 聯律國際專利商標事務所';
$pageDescription = '印度專利種類、申請要點及專利爭議侵權資訊。';
$pageStyles = array('assets/css/page.css', 'assets/css/foreign-patent.css', 'assets/css/country-article.css');
$activePage = 'items';
$activeItem = 'patent';
include dirname(__FILE__) . '/../include/header.php';
?>

<main class="country-patent-page">
  <section class="page-banner" aria-hidden="true"><div class="page-banner__image"></div></section>
  <div class="container">
    <div class="page-content">
      <header class="page-header" aria-labelledby="india-patent-title">
        <h1 id="india-patent-title">國外專利 <small>Foreign Patent</small></h1>
        <nav class="page-breadcrumb" aria-label="麵包屑">
          <a href="index.php">首頁</a><span aria-hidden="true">/</span>
          <a href="foreign-patent.php">國外專利</a><span aria-hidden="true">/</span>
          <span aria-current="page">國外專利制度</span>
        </nav>
      </header>

      <article class="country-article india-article article-content article-panel reveal">
        <div class="country-article-heading">
          <div><p class="country-article-kicker">India Patent</p><h2>印度專利</h2></div>
          <a class="country-article-back" href="foreign-patent.php">回國外專利制度列表</a>
        </div>

        <div class="article-sheet">
          <header class="article-sheet-header">
            <p>InPASS 網址：<a href="http://www.ipindia.nic.in/" target="_blank" rel="noopener noreferrer">http://www.ipindia.nic.in/</a></p>
          </header>

          <section class="article-row">
            <h3 class="article-section-title">專利種類</h3>
            <div class="article-body">
              <div class="data-table-wrap">
                <table class="data-table china-patent-table brazil-patent-table">
                  <thead><tr><th scope="col">專利/保護種類</th><th scope="col">保護年限（自申請日起算）</th><th scope="col">審查制度</th><th scope="col">核心保護標的</th></tr></thead>
                  <tbody>
                    <tr><th scope="row">發明專利</th><td>20 年</td><td>全面實體審查制（須主動提審查請求）</td><td>具備新穎性、進步性（Inventive Step）與產業利用性的技術產品或方法。</td></tr>
                    <tr><th scope="row">新型專利</th><td>—</td><td>—</td><td>印度不設新型專利制度。</td></tr>
                    <tr><th scope="row">設計專利</th><td>10 年（可展延 1 次 5 年，最長 15 年）</td><td>形式審查與形式檢索</td><td>應用於物品上，由線條、形狀、圖案、色彩組成的創新外觀特徵（排除軟體 GUI）。</td></tr>
                  </tbody>
                </table>
              </div>
            </div>
          </section>

          <section class="article-row">
            <h3 class="article-section-title">申請要點</h3>
            <div class="article-body">
              <ul class="content-list">
                <li><strong>第 3(d) 條：極其嚴格的醫藥與化學審查：</strong>這是印度專利法最著名的條款。單純針對「已知物質的全新形式或全新用途」，除非能證明其帶來「顯著提高的治療功效（Enhanced Efficacy）」，否則一律被視為「不可專利之標的」。這項條款旨在防止國際大藥廠進行專利常青化（Evergreening）。</li>
                <li><strong>第 3(k) 條：排除軟體與演算法：</strong>印度明確將「電腦程式本身（Per Se）」與「數學或商業方法」排除在專利保護之外。軟體發明在印度若想獲證，必須證明該軟體與實體硬體架構產生了緊密的結合，並帶來了明確的技術效果（Technical Effect）。</li>
              </ul>
              <h4>大幅放寬 Form 27「實施聲明」義務（2024新制核心）：</h4>
              <ul class="content-list content-sublist">
                <li>過去印度強制專利權人每年都必須提交 Form 27，詳細申報該專利在印度境內的製造、進口與銷售數據，否則面臨鉅額罰款。</li>
                <li><strong>2024 年最新修正案全面鬆綁：</strong>改為「每 3 個財政年度」僅需提交一次，且大幅簡化了申報內容，專利權人不再需要公開敏感的商業銷售與進口金額數據。</li>
              </ul>
              <h4>第 8 條「外國對應案申報」流程簡化（2024新制核心）：</h4>
              <ul class="content-list content-sublist">
                <li>過去申請人必須在對應外國案有任何進展（如收到檢索報告、核准）時，主動在 6 個月內向印度 IPO 申報更新。</li>
                <li><strong>2024 新制大幅放寬：</strong>申請人現在只需在收到印度第一期審查報告（FER）後的 3 個月內，一次性提交更新即可，大幅降低了跨國申請人的行政代理成本。</li>
              </ul>
              <ul class="content-list">
                <li><strong>答辯期限可花規費展延：</strong>印度發明專利收到 FER 後的答辯期為 6 個月。2024年修正案放寬，申請人若有需要，可在原期限屆滿前，透過繳納規費申請展延最多 3 個月。</li>
                <li><strong>外國人強制委託本地代理人：</strong>外國申請人在印度沒有營業場所者，必須強制委託印度當地的註冊專利代理人辦理所有 IPO 程序。</li>
              </ul>
            </div>
          </section>

          <section class="article-row">
            <h3 class="article-section-title">專利爭議侵權</h3>
            <div class="article-body">
              <ul class="content-list">
                <li><strong>廢除 IPAB，回歸商業法院管轄：</strong>印度政府於前幾年正式廢除了原有的智慧財產權上訴委員會（IPAB）。目前，專利侵權訴訟與專利無效宣告（Revocation）反訴，統一由各省高等法院設有的專責商業法庭（Commercial Courts / Commercial Division of High Courts）審理（如德里高等法院、孟買高等法院），審理效率與專業度較過去有顯著提升。</li>
              </ul>
              <h4>核准前與核准後雙軌異議制度：</h4>
              <p>印度的專利面臨極大的第三方阻擊風險。</p>
              <ul class="content-list content-sublist">
                <li><strong>核准前異議（Pre-grant Opposition）：</strong>專利公開後至核准前的任何時間，任何人都可提出異議。</li>
                <li><strong>核准後異議（Post-grant Opposition）：</strong>專利獲證公告日起 1 年內，任何利害關係人皆可向 IPO 註冊官提出行政撤銷。</li>
              </ul>
              <h4>判定原則（字面文義與精髓原則）：</h4>
              <ul class="content-list content-sublist">
                <li>印度法院在技術侵權判定上主要遵循文義侵權（Literal Infringement）。</li>
                <li>若字面不完全相符，法院亦適用等同原則，在印度司法判例中被稱為「精髓原則（Pith and Marrow / Substance of the Invention）」。法官會剝離非本質特徵，檢視被告產品是否抄襲了該發明的核心技術精髓。</li>
              </ul>
              <ul class="content-list">
                <li><strong>強制授權（Compulsory Licensing）風險：</strong>如果專利獲證滿 3 年後，專利權人未在印度境內合理實施（如未在當地平價銷售或滿足市場對該藥品/技術的需求），任何第三方皆可向 IPO 申請強制授權，強制專利權人讓渡製造權。</li>
                <li><strong>侵權救濟與高額律師費追償：</strong>印度法院近年在專利訴訟中展現了對權利人的強大保護，除可判處臨時與永久禁令、損害賠償或侵權所得利益外，德里高等法院等著名法庭近年頻繁判決由敗訴方「全額全數承擔原告高昂的律師與訴訟費用」，這對惡意侵權者產生了巨大的震懾力。</li>
                <li><strong>消滅時效：</strong>專利侵權民事訴訟的追訴與損害賠償請求權時效，為自侵權行為發生之日起算 3 年。</li>
              </ul>
            </div>
          </section>
        </div>
      </article>
    </div>
  </div>
</main>

<?php include dirname(__FILE__) . '/../include/footer.php'; ?>
