<?php
$baseHref = '../';
$pageTitle = '加拿大專利 | 國外專利 | 聯律國際專利商標事務所';
$pageDescription = '加拿大專利種類、申請要點及專利爭議侵權資訊。';
$pageStyles = array('assets/css/page.css', 'assets/css/foreign-patent.css', 'assets/css/country-article.css');
$activePage = 'items';
$activeItem = 'patent';
include dirname(__FILE__) . '/../include/header.php';
?>

<main class="country-patent-page">
  <section class="page-banner" aria-hidden="true"><div class="page-banner__image"></div></section>
  <div class="container">
    <div class="page-content">
      <header class="page-header" aria-labelledby="canada-patent-title">
        <h1 id="canada-patent-title">國外專利 <small>Foreign Patent</small></h1>
        <nav class="page-breadcrumb" aria-label="麵包屑">
          <a href="index">首頁</a><span aria-hidden="true">/</span>
          <a href="foreign-patent">國外專利</a><span aria-hidden="true">/</span>
          <span aria-current="page">國外專利制度</span>
        </nav>
      </header>

      <article class="country-article canada-article article-content article-panel reveal">
        <div class="country-article-heading">
          <div><p class="country-article-kicker">Canada Patent</p><h2>加拿大專利</h2></div>
          <a class="country-article-back" href="foreign-patent">回國外專利制度列表</a>
        </div>

        <div class="article-sheet">
          <header class="article-sheet-header">
            <p>CIPO網址：<a href="https://www.canada.ca/en.html" target="_blank" rel="noopener noreferrer">https://www.canada.ca/en.html</a></p>
          </header>

          <section class="article-row">
            <h3 class="article-section-title">專利種類</h3>
            <div class="article-body">
              <div class="data-table-wrap">
                <table class="data-table china-patent-table brazil-patent-table">
                  <thead><tr><th scope="col">專利/保護種類</th><th scope="col">保護年限（自申請日起算）</th><th scope="col">審查制度</th><th scope="col">核心保護標的</th></tr></thead>
                  <tbody>
                    <tr><th scope="row">發明專利</th><td>20 年</td><td>全面實體審查制（須主動提審查請求）</td><td>具備新穎性、進步性與產業利用性的全新且實用的藝術、工藝、機器、製造品或物質組成。</td></tr>
                    <tr><th scope="row">新型專利</th><td>—</td><td>—</td><td>加拿大不設新型專利制度。</td></tr>
                    <tr><th scope="row">工業設計<br>(即設計專利)</th><td>10 年（若於核准後續繳年費，最長為自申請日起算 15 年）</td><td>實體審查制（審查新穎性）</td><td>應用於成品上，由形狀、配置、圖案或裝飾組成的創新視覺特徵（含數位產品 GUI）。</td></tr>
                  </tbody>
                </table>
              </div>
            </div>
          </section>

          <section class="article-row">
            <h3 class="article-section-title">申請要點</h3>
            <div class="article-body">
              <ul class="content-list">
                <li><strong>超額權利要求費與限縮（最新規範）：</strong>加拿大已全面實施超額權利要求費（Excess Claim Fees）機制。凡是超過 20 項的權利要求，在提出實體審查以及最後核准發證時，皆會被按件加收高額官方規費。這促使跨國申請人必須在提審前大幅精簡 Claim 數量。</li>
                <li><strong>縮短主動提審時限：</strong>為加快整體審查進度，加拿大將主動提交「實體審查請求（Examination Request）」的法定期限，由原先的申請日起算 5 年大幅縮短為 3 年（PCT 案件則自國際申請日起算 3 年）。若未在 3 年內提審且未繳費，案件將直接被視為撤回。</li>
                <li><strong>12個月新穎性寬限期（Grace Period）：</strong>加拿大擁有 12 個月 的新穎性優惠期。與歐洲、中國極度嚴格的限制不同，加拿大的寬限期相對寬鬆，包含「發明人自己（或其前手）主動公開或銷售」該技術的行為，只要在公開日起算 1 年內向加拿大遞交申請，皆不會喪失新穎性。</li>
                <li><strong>排除純商業方法與純演算法：</strong>加拿大最高法院與 CIPO 審查指南明確規定，單純的商業方法、博弈遊戲或純數學演算法無法獲得專利。但如果軟體發明能夠與實體硬體元素相結合，並解決了實體電腦運作中的技術問題（Technical Problem），則具備可專利性。</li>
                <li><strong>強制委託加拿大本地代理人：</strong>外國申請人若在加拿大境內沒有常住地址或主要營業場所，必須強制委託居住於加拿大當地的註冊專利代理人辦理所有 CIPO 流程。</li>
              </ul>
            </div>
          </section>

          <section class="article-row">
            <h3 class="article-section-title">專利爭議侵權</h3>
            <div class="article-body">
              <ul class="content-list">
                <li><strong>聯邦法院集中管轄：</strong>雖然各省的高等法院（Superior Courts）在法律上有權受理專利訴訟，但實務上 99% 的加拿大專利侵權訴訟與無效宣告反訴，皆統一由加拿大聯邦法院（Federal Court of Canada）審理。聯邦法院的判決直接在全國具備法律效力，且法官具備高度的智財審判專業。</li>
              </ul>
              <h4>判定原則（目的性解釋原則與等同）：</h4>
              <ul class="content-list content-sublist">
                <li>加拿大法院在技術侵權判定上，嚴格遵循最高法院確立的「目的性解釋原則（Purposive Construction）」。</li>
                <li>法官會站在該領域普通技術人員（PHOSITA）的角度，去判斷權利要求書中的某些技術特徵是「本質特徵（Essential）」還是「非本質特徵（Non-essential）」。</li>
                <li>如果被告產品僅是替換了「非本質特徵」，且該替換在專利公開時對該技術人員是顯而易見的、亦未改變發明的運作方式，法院即會判定等同侵權成立。</li>
              </ul>
              <ul class="content-list">
                <li><strong>引進「申請歷史檔案」作為抗辯依據（Prosecution History Estoppel）：</strong>加拿大專利法特別規定，在侵權訴訟中，允許引入申請人在 CIPO 審查階段與審查委員之間的書信往返紀錄（File Wrapper）。若發明人過去為了獲證而主動限縮了權利範圍，在訴訟中就不能再透過等同原則主張要回。</li>
                <li><strong>醫藥專利連結制度（PMNOC）：</strong>針對生技醫藥產業，加拿大設有極為嚴格的《專利藥品（合格通知）條例》（PMNOC Regulations）。原廠藥企可將專利登記在清單上，當學名藥廠（Generic）欲申請上市時，必須先向原廠發出通知，雙方將在聯邦法院直接展開速審，以決定是否在藥品上市前發出禁令。</li>
                <li><strong>救濟方式（損害賠償與利潤返還二選一）：</strong>原告勝訴後，除了可獲得永久禁令外，在金錢賠償上可選擇「權利人所受的實際損害與所失利益（Damages）」，或是要求被告「交出並返還因侵權所賺取的全部利潤（Accounting of Profits）」，這為權利人提供了極大的商業求償彈性。</li>
                <li><strong>消滅時效：</strong>加拿大專利侵權訴訟的追訴與損害賠償請求權時效，為自侵權行為發生之日起算 6 年。</li>
              </ul>
            </div>
          </section>
        </div>
      </article>
    </div>
  </div>
</main>

<?php include dirname(__FILE__) . '/../include/footer.php'; ?>
