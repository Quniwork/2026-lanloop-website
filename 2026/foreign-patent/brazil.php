<?php
$baseHref = '../';
$pageTitle = '巴西專利 | 國外專利 | 聯律國際專利商標事務所';
$pageDescription = '巴西專利種類、申請要點及專利爭議侵權資訊。';
$pageStyles = array('assets/css/page.css', 'assets/css/foreign-patent.css', 'assets/css/country-article.css');
$activePage = 'items';
$activeItem = 'patent';
include dirname(__FILE__) . '/../include/header.php';
?>

<main class="country-patent-page">
  <section class="page-banner" aria-hidden="true"><div class="page-banner__image"></div></section>
  <div class="container">
    <div class="page-content">
      <header class="page-header" aria-labelledby="brazil-patent-title">
        <h1 id="brazil-patent-title">國外專利 <small>Foreign Patent</small></h1>
        <nav class="page-breadcrumb" aria-label="麵包屑">
          <a href="index">首頁</a><span aria-hidden="true">/</span>
          <a href="foreign-patent">國外專利</a><span aria-hidden="true">/</span>
          <span aria-current="page">國外專利制度</span>
        </nav>
      </header>

      <article class="country-article brazil-article article-content article-panel reveal">
        <div class="country-article-heading">
          <div><p class="country-article-kicker">Brazil Patent</p><h2>巴西專利</h2></div>
          <a class="country-article-back" href="foreign-patent">回國外專利制度列表</a>
        </div>

        <div class="article-sheet">
          <header class="article-sheet-header">
            <p>Busca Web INPI 網址：<a href="https://busca.inpi.gov.br/" target="_blank" rel="noopener noreferrer">https://busca.inpi.gov.br/</a></p>
          </header>

          <section class="article-row">
            <h3 class="article-section-title">專利種類</h3>
            <div class="article-body">
              <div class="data-table-wrap">
                <table class="data-table china-patent-table brazil-patent-table">
                  <thead><tr><th scope="col">專利/保護種類</th><th scope="col">保護年限（自申請日起算）</th><th scope="col">審查制度</th><th scope="col">核心保護標的</th></tr></thead>
                  <tbody>
                    <tr><th scope="row">發明專利</th><td>20 年</td><td>全面實體審查制（須主動提審查請求）</td><td>具備新穎性、進步性與產業利用性的技術產品或方法。</td></tr>
                    <tr><th scope="row">新型專利</th><td>15 年（保護年限在全球屬於偏長者）</td><td>全面實體審查制（必須審查進步性）</td><td>針對實體物品（如工具、器具）在形狀、結構上，能提升其使用功能或製造效益的全新改良（排除方法/製程）。</td></tr>
                    <tr><th scope="row">工業設計<br>(即設計專利)</th><td>10 年（可展延 3 次，每次5年，最長 25 年）</td><td>登記制 / 形式審查（可後置申請實體審查）</td><td>產品全部或部分的創新外形、線條、色彩或圖案等具備可工業再現性的外觀特徵。</td></tr>
                  </tbody>
                </table>
              </div>
            </div>
          </section>

          <section class="article-row">
            <h3 class="article-section-title">申請要點</h3>
            <div class="article-body">
              <ul class="content-list">
                <li><strong>新型專利亦須審查「進步性」：</strong>與許多國家（如台、中、法、日）不同，巴西的新型專利（MU）並非登記制，而是強制實體審查，且審查標準中包含「進步性（Inventive Step）」要求。雖然其進步性門檻略低於發明專利，但仍需耗費數年審查，佈局時需特別注意。</li>
                <li><strong>徹底廢除「最低保護年限保障」：</strong>巴西過去為了補償 INPI 審查過慢，法律規定發明專利自「核准日起算」至少有 10 年、新型至少有 7 年的保證期（即使加上排隊時間超過20年也適用）。最高法院已正式宣告該條款違憲並廢除，現一律嚴格執行自「申請日起算」20年/15年。</li>
                <li><strong>提實體審查時限為 36 個月：</strong>發明與新型專利必須在申請日（或 PCT 國際申請日）起 36 個月內主動提出實體審查請求，並繳納審查費，逾期該申請案將直接被視為撤回。</li>
                <li><strong>排除治療/手術方法與部分生物科技：</strong>巴西專利法明確規定，針對人類或動物身體的「手術、治療或診斷方法」無法獲得專利。此外，天然存在的生物體、生物物質、基因組（即使是分離出來的）在巴西也屬於不可專利標的。</li>
                <li><strong>12個月新穎性寬限期（Grace Period）：</strong>巴西提供 12 個月 的新穎性寬限期，包含「發明人自己（或其授權者）主動公開或銷售」該技術的行為，在期限內向 INPI 遞交申請不會因此喪失新穎性。</li>
                <li><strong>強制委託本地代理人與翻譯：</strong>外國申請人若在巴西沒有固定住所或主要營業場所，必須強制委託居住於巴西當地的註冊專利代理人，且所有提交給 INPI 的技術文件與權利要求書皆必須翻譯為葡萄牙文。</li>
              </ul>
            </div>
          </section>

          <section class="article-row">
            <h3 class="article-section-title">專利爭議侵權</h3>
            <div class="article-body">
              <h4>州法院（侵權）與聯邦法院（無效）雙軌管轄：</h4>
              <p>這是打巴西專利官司最複雜的核心特點：</p>
              <ul class="content-list content-sublist">
                <li><strong>侵權訴訟：</strong>由各省的州法院（State Courts）民事庭管轄。</li>
                <li><strong>無效宣告訴訟：</strong>若被告反訴專利無效，該無效訴訟必須移交給聯邦法院（Federal Courts）審理（因為 INPI 是中央聯邦機構，必須作為被告參加訴訟）。這常導致侵權與無效在兩個截然不同的法院系統中雙軌並行、甚至互相等待。</li>
              </ul>
              <h4>判定原則（字面文義與等同原則）：</h4>
              <ul class="content-list content-sublist">
                <li>巴西法院在技術侵權判定上，首要採用文義侵權（Literal Infringement）與全要件原則。</li>
                <li>巴西法律亦承認等同原則（Doctrine of Equivalents）。如果被控侵權物是以「實質相同的手段」，實現「實質相同的功能」，並達到「實質相同的效果」，且該置換對該領域技術人員而言是顯而易見的，仍構成侵權。</li>
              </ul>
              <ul class="content-list">
                <li><strong>快速的臨時禁令（Preliminary Injunctions）：</strong>雖然最終判決可能因法院雙軌制而拖延數年，但巴西州法院的法官在訴訟初期，相當願意在原告提供初步證據或擔保的情況下，快速簽發「臨時禁令（PI）」，強制被告立即停工、停售或扣押侵權貨品，是權利人極佳的卡位武器。</li>
                <li><strong>刑事起訴與突擊搜查：</strong>在巴西，專利侵權亦屬於刑事犯罪（由 LPI 規範）。專利權人可以向警方報案，申請刑事搜查令和扣押令，直接前往涉嫌侵權者的工廠、倉庫進行突擊搜查並查封侵權商品與生產機具。</li>
                <li><strong>損害賠償與利潤損失的推定：</strong>原告在州法院打贏侵權官司後，損害賠償可以依據以下三者中「對權利人最有利」的方式計算：1. 權利人因侵權所受的實際損失；2. 侵權人因侵權所獲得的非法利潤；3. 侵權人若獲得合法授權原本應支付的權利金。</li>
                <li><strong>消滅時效：</strong>專利侵權民事訴訟的追訴與損害賠償請求權時效，為自侵權行為發生之日起算 5 年。</li>
              </ul>
            </div>
          </section>
        </div>
      </article>
    </div>
  </div>
</main>

<?php include dirname(__FILE__) . '/../include/footer.php'; ?>
