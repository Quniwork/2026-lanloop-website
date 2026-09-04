<?php
$baseHref = '../';
$pageTitle = '義大利專利 | 國外專利 | 聯律國際專利商標事務所';
$pageDescription = '義大利專利種類、申請要點及專利爭議侵權資訊。';
$pageStyles = array('assets/css/page.css', 'assets/css/foreign-patent.css', 'assets/css/country-article.css');
$activePage = 'items';
$activeItem = 'patent';
include dirname(__FILE__) . '/../include/header.php';
?>

<main class="country-patent-page">
  <section class="page-banner" aria-hidden="true"><div class="page-banner__image"></div></section>
  <div class="container">
    <div class="page-content">
      <header class="page-header" aria-labelledby="italy-patent-title">
        <h1 id="italy-patent-title">國外專利 <small>Foreign Patent</small></h1>
        <nav class="page-breadcrumb" aria-label="麵包屑">
          <a href="index.php">首頁</a><span aria-hidden="true">/</span>
          <a href="foreign-patent.php">國外專利</a><span aria-hidden="true">/</span>
          <span aria-current="page">國外專利制度</span>
        </nav>
      </header>

      <article class="country-article italy-article article-content article-panel reveal">
        <div class="country-article-heading">
          <div><p class="country-article-kicker">Italy Patent</p><h2>義大利專利</h2></div>
          <a class="country-article-back" href="foreign-patent.php">回國外專利制度列表</a>
        </div>

        <div class="article-sheet">
          <header class="article-sheet-header">
            <p>UIBM網址：<a href="https://uibm.mise.gov.it/index.php/it/banche-dati" target="_blank" rel="noopener noreferrer">https://uibm.mise.gov.it/index.php/it/banche-dati</a></p>
          </header>

          <section class="article-row">
            <h3 class="article-section-title">專利種類</h3>
            <div class="article-body">
              <div class="data-table-wrap">
                <table class="data-table china-patent-table brazil-patent-table">
                  <thead><tr><th scope="col">專利/保護種類</th><th scope="col">保護年限（自申請日起算）</th><th scope="col">審查制度</th><th scope="col">核心保護標的</th></tr></thead>
                  <tbody>
                    <tr><th scope="row">發明專利</th><td>20 年</td><td>實體審查制（結合歐洲專利局 EPO 檢索）</td><td>具備新穎性、進步性與產業利用性的技術或方法發明。</td></tr>
                    <tr><th scope="row">新型專利</th><td>10 年</td><td>形式審查制（通常無實體檢索報告）</td><td>僅限具備「新外形/結構」能提升機器、工具或物品易用性與效能的技術改進。</td></tr>
                    <tr><th scope="row">設計專利</th><td>5 年（可展延4次，最長 25 年）</td><td>形式審查制</td><td>產品全部或部分的創新外觀、線條、色彩或形狀。</td></tr>
                  </tbody>
                </table>
              </div>
            </div>
          </section>

          <section class="article-row">
            <h3 class="article-section-title">申請要點</h3>
            <div class="article-body">
              <ul class="content-list">
                <li><strong>發明與歐洲專利局（EPO）聯檢：</strong>義大利 UIBM 在審查國家發明專利時，會直接委託 EPO 進行新穎性與進步性的檢索並出具報告，審查標準完全與歐洲標準對齊。</li>
                <li><strong>新型專利僅保護「形狀改進」：</strong>義大利新型專利定義狹窄，「生產方法/製程」、「化學物質/醫藥品」及「電子電路」等絕對無法申請新型專利，這與法國或台灣可保護方法新型的制度顯著不同。</li>
              </ul>
              <h4>雙重申請（Alternative Filing）與轉化：</h4>
              <ul class="content-list content-sublist">
                <li>申請人可將同一個技術同時提交「發明」與「新型」申請。若發明專利因進步性不足被拒絕，申請人可選擇保留新型專利繼續獲證（互補策略）。</li>
                <li>法院在訴訟中若宣告發明專利無效，在符合條件下，亦可將其「轉換」為有效的新型專利。</li>
              </ul>
              <ul class="content-list">
                <li><strong>新制：允許國家與歐洲專利雙重並存：</strong>自近年 CPI 修正案實施後，義大利廢除了過去的排他限制。同一個發明可以同時擁有「義大利國家專利」與「歐洲/單一專利（EP/UP）」，兩者可雙軌並存，提供專利權人極高的佈局彈性。</li>
                <li><strong>學術發明專利權歸屬變革：</strong>修法後，義大利大學、公立研究機構的研究人員所研發的成果，專利申請權重新歸屬於「所屬機構」，而非研究員個人，這有利於機構進行統一的海外商業授權。</li>
              </ul>
            </div>
          </section>

          <section class="article-row">
            <h3 class="article-section-title">專利爭議侵權</h3>
            <div class="article-body">
              <ul class="content-list">
                <li><strong>高度專業的專利專責法庭：</strong>義大利專利侵權與無效訴訟統一由設有「企業專責法庭」（Sezioni Specializzate in Materia de Impresa）的特定地方法院審理，其中巴黎高等法院與米蘭地方法院是歐洲最著名的兩大智慧財產權訴訟重鎮。</li>
                <li><strong>獨特的「描述/取證」程序（Descrizione）：</strong>這是義大利最具威力的民事侵權取證武器。專利權人在起訴前或訴訟中，若有合理懷疑，可向法院申請假處分，由執達吏在技術專家陪同下，突擊涉嫌侵權者的工廠或辦公室，強制對涉嫌侵權的機器設備、製程或帳冊進行詳細的「拍照、錄影與文字描述記載」。這比法國的扣押更側重於技術運作細節的留存。</li>
                <li><strong>法院指定技術專家制度（CTU）：</strong>由於法官多為法律背景，義大利法院在審理專利訴訟時，100% 會指定一位獨立的第三方技術專家（Consulente Tecnico d'Ufficio）主持技術辯論並撰寫專家報告。CTU 的意見通常在 80% 以上的案件中直接決定了法官對侵權與否的判決。</li>
              </ul>
              <h4>判定原則（等同原則的廣泛應用）：</h4>
              <ul class="content-list content-sublist">
                <li>義大利法院非常重視等同原則（Doctrine of Equivalents）。在判定侵權時，專家和法官通常會檢視涉嫌侵權物是否「替代了專利中的某一元件，但以實質相同的手段、達成相同的功能並獲得相同的結果」。</li>
              </ul>
              <ul class="content-list">
                <li><strong>超快速的臨時禁令（Preliminary Injunctions）：</strong>義大利法院以能夠在數天之內（甚至在不經聽證的 ex parte 情況下）快速發出臨時禁令或扣押令而聞名，是專利權人壓制市場競爭者的強大武器。</li>
                <li><strong>新型專利的訴訟風險：</strong>由於義大利新型專利在核准時完全沒有經過實體檢索報告，一旦用新型專利打侵權訴訟，被告几乎必提「無效宣告反訴」，原告需面臨較高的權利不確定性風險。</li>
              </ul>
            </div>
          </section>
        </div>
      </article>
    </div>
  </div>
</main>

<?php include dirname(__FILE__) . '/../include/footer.php'; ?>
