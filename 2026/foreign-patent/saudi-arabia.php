<?php
$baseHref = '../';
$pageTitle = '沙烏地阿拉伯專利 | 國外專利 | 聯律國際專利商標事務所';
$pageDescription = '沙烏地阿拉伯專利種類、申請要點及專利爭議侵權資訊。';
$pageStyles = array('assets/css/page.css', 'assets/css/foreign-patent.css', 'assets/css/country-article.css');
$activePage = 'items';
$activeItem = 'patent';
include dirname(__FILE__) . '/../include/header.php';
?>

<main class="country-patent-page">
  <section class="page-banner" aria-hidden="true"><div class="page-banner__image"></div></section>
  <div class="container">
    <div class="page-content">
      <header class="page-header" aria-labelledby="saudi-arabia-patent-title">
        <h1 id="saudi-arabia-patent-title">國外專利 <small>Foreign Patent</small></h1>
        <nav class="page-breadcrumb" aria-label="麵包屑">
          <a href="index.php">首頁</a><span aria-hidden="true">/</span>
          <a href="foreign-patent.php">國外專利</a><span aria-hidden="true">/</span>
          <span aria-current="page">國外專利制度</span>
        </nav>
      </header>

      <article class="country-article saudi-arabia-article article-content article-panel reveal">
        <div class="country-article-heading">
          <div><p class="country-article-kicker">Saudi Arabia Patent</p><h2>沙烏地阿拉伯專利</h2></div>
          <a class="country-article-back" href="foreign-patent.php">回國外專利制度列表</a>
        </div>

        <div class="article-sheet">
          <header class="article-sheet-header">
            <p>SAIP 網址：<a href="https://www.saip.gov.sa/" target="_blank" rel="noopener noreferrer">https://www.saip.gov.sa/</a></p>
          </header>

          <section class="article-row">
            <h3 class="article-section-title">專利種類</h3>
            <div class="article-body">
              <div class="data-table-wrap">
                <table class="data-table china-patent-table brazil-patent-table">
                  <thead><tr><th scope="col">專利/保護種類</th><th scope="col">保護年限（自申請日起算）</th><th scope="col">審查制度</th><th scope="col">核心保護標的</th></tr></thead>
                  <tbody>
                    <tr><th scope="row">發明專利</th><td>20 年</td><td>全面實體審查制（形式核准後強制提審）</td><td>具備新穎性、進步性與產業利用性的全新技術產品或方法。</td></tr>
                    <tr><th scope="row">新型專利</th><td>—</td><td>—</td><td>沙烏地不設新型專利制度，小型技術改良多直接申請發明專利。</td></tr>
                    <tr><th scope="row">工業設計<br>(即設計專利)</th><td>10 年</td><td>登記制 / 形式審查（不經實體審查直接發證）</td><td>產品全部或部分由形狀、圖案、線條或色彩組成的創新視覺外觀。</td></tr>
                  </tbody>
                </table>
              </div>
            </div>
          </section>

          <section class="article-row">
            <h3 class="article-section-title">申請要點</h3>
            <div class="article-body">
              <ul class="content-list">
                <li><strong>海合會（GCC）與沙國國家案之轉變：</strong>過去跨國企業多透過「海灣阿拉伯國家合作委員會（GCC）專利局」進行一案多國保護，但 GCC 專利局自前幾年停止受理新申請案。現在外國人若要在沙烏地卡位，必須直接向沙烏地 SAIP 提交國家專利案，或透過 PCT（專利合作條約）進入沙烏地國家階段。</li>
                <li><strong>強制提實體審查時限：</strong>沙烏地專利在通過基本的形式審查（Formal Examination）後，申請人必須在收到官方通知的特定法定期限內（或於法規時限內）主動繳費提出實體審查請求（Substantive Examination）。否則，該申請案將直接被系統視為撤回。</li>
                <li><strong>嚴格的伊斯蘭律法（Sharia）紅線：</strong>沙烏地的專利法與宗教、道德規範緊密相連。如果發明技術的商業實施或內容違反伊斯蘭教義、公共秩序、國家安全或公共道德（例如涉及特定賭博器具、不符教義的生物製品等），該發明將被絕對禁止授予專利。</li>
                <li><strong>排除診斷與治療方法：</strong>與歐美多數國家相同，沙烏地專利法明確規定「針對人類或動物身體的外科手術、治療方法以及疾病診斷方法」屬於不可專利標的。但用於此類方法的儀器、設備或化學物質/醫藥品本身仍可獲得專利。</li>
                <li><strong>全面採用阿拉伯文翻譯：</strong>沙烏地 SAIP 擁有高度數位化的線上 filing 系統。然而，外國申請人在遞交申請時，所有的技術說明書、專利範圍（Claims）及圖式說明，必須強制翻譯為精確的「阿拉伯文」。翻譯若有瑕疵，在後續答辯或侵權訴訟中常成為致命弱點。</li>
                <li><strong>強制委託本地合法代理：</strong>外國個人或機構若在沙烏地境內沒有固定住所或主要營業場所，辦理所有專利、商標及設計業務時，必須強制指定並委託具有沙烏地合法執照的智慧財產權代理機構。</li>
              </ul>
            </div>
          </section>

          <section class="article-row">
            <h3 class="article-section-title">專利爭議侵權</h3>
            <div class="article-body">
              <ul class="content-list">
                <li><strong>SAIP 專責委員會（Committee）一審管轄：</strong>沙烏地阿拉伯的專利侵權訴訟與商標、著作權不同。專利侵權的行政與民事一審，統一由沙烏地智財局（SAIP）內設的專責「專利爭議審議委員會」進行審理，而非直接交由一般的民事法院。該委員會由法學與多位技術專家組成，對技術比對有較高的專業能力。對委員會裁決不服者，二審方可上訴至沙烏地行政法院（Commercial/Administrative Courts）。</li>
              </ul>
              <h4>判定原則（權利要求字面與全要件）：</h4>
              <ul class="content-list content-sublist">
                <li>沙烏地委員會在審理侵權時，首要遵循文義侵權（Literal Infringement）與全要件原則，逐字比對被告產品是否完全落入專利 Claims 所界定的邊界。</li>
                <li>雖然沙烏地法理上逐漸引進西方的等同原則，但在實務上委員會的態度非常保守。若被告產品更改了非核心元件且使用了不同的手段，沙烏地審查官通常較不傾向判決等同侵權，撰寫權利要求時應極力避免字面限縮。</li>
              </ul>
              <ul class="content-list">
                <li><strong>SAIP 官方主導的突擊搜查與扣押：</strong>因應沙烏地推動智財現代化，SAIP 設有極為強大的智慧財產執法部門（IP Enforcement Division）。權利人若發現市場上存在侵權行為並提交初步證據，可向 SAIP 申請發動行政突擊检查。執法人員有權直接查封、扣押仿冒或侵權的商品，並強行令涉案企業暫停營業，執法速度在近年顯著加快。</li>
                <li><strong>救濟措施與懲罰性賠償之缺乏：</strong>若被判定構成侵權，委員會與法院可判處侵權人立即停止實施（禁令）、銷毀侵權物品、沒收違法所得，並對侵權人處以高額的行政罰鍰。在民事賠償上，主要賠償權利人的實際損失。但沙烏地法律目前不適用英美法系的懲罰性損害賠償（Punitive Damages）。</li>
                <li><strong>與海關聯動的邊境保護（Customs Enforcement）：</strong>沙烏地海關建立了線上智慧財產權備案資料庫。專利權人在獲證後，可以將專利資訊在海關備案。當海關在沙烏地各大港口、機場攔截到涉嫌侵權的進出口貨物時，會主動通知權利人配合鑑定並暫時扣留貨品，從邊境截斷侵權品。</li>
                <li><strong>消滅時效：</strong>專利侵權損害賠償的民事請求權時效，通常為自權利人「知悉侵權行為及侵權人」之日起算 3 年；或自侵權行為發生之日起算 5 年。</li>
              </ul>
            </div>
          </section>
        </div>
      </article>
    </div>
  </div>
</main>

<?php include dirname(__FILE__) . '/../include/footer.php'; ?>
