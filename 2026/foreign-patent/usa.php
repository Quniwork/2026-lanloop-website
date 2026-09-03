<?php
$baseHref = '../';
$pageTitle = '美國專利 | 國外專利 | 聯律國際專利商標事務所';
$pageDescription = '美國專利種類、申請要點及專利爭議侵權資訊。';
$pageStyles = array('assets/css/page.css', 'assets/css/foreign-patent.css', 'assets/css/country-article.css');
$activePage = 'items';
$activeItem = 'patent';
include dirname(__FILE__) . '/../include/header.php';
?>

<main class="country-patent-page">
  <section class="page-banner" aria-hidden="true"><div class="page-banner__image"></div></section>
  <div class="container">
    <div class="page-content">
      <header class="page-header" aria-labelledby="usa-patent-title">
        <h1 id="usa-patent-title">國外專利 <small>Foreign Patent</small></h1>
        <nav class="page-breadcrumb" aria-label="麵包屑">
          <a href="index">首頁</a><span aria-hidden="true">/</span>
          <a href="foreign-patent">國外專利</a><span aria-hidden="true">/</span>
          <span aria-current="page">國外專利制度</span>
        </nav>
      </header>

      <article class="country-article usa-article article-content article-panel reveal">
        <div class="country-article-heading">
          <div><p class="country-article-kicker">United States Patent</p><h2>美國專利</h2></div>
          <a class="country-article-back" href="foreign-patent">回國外專利制度列表</a>
        </div>

        <div class="article-sheet">
          <header class="article-sheet-header">
            <p>USPTO Patent Center網址：<a href="https://patentcenter.uspto.gov/" target="_blank" rel="noopener noreferrer">https://patentcenter.uspto.gov/</a></p>
          </header>

          <section class="article-row">
            <h3 class="article-section-title">專利種類</h3>
            <div class="article-body">
              <div class="data-table-wrap">
                <table class="data-table china-patent-table">
                  <thead><tr><th scope="col">專利類型</th><th scope="col">保護對象</th><th scope="col">保護期限</th><th scope="col">維持費</th></tr></thead>
                  <tbody>
                    <tr><th scope="row">發明專利 (Utility Patent)</th><td>具實用性的方法、機器、製造物品或物的組合。</td><td>自申請日起 20 年。</td><td>需繳交三次維持費（採階梯式調漲）。</td></tr>
                    <tr><th scope="row">設計專利 (Design Patent)</th><td>物品新穎、具原創性及裝飾性的外觀設計。</td><td>自公告日起 15 年。</td><td>免繳維持費。</td></tr>
                    <tr><th scope="row">植物專利 (Plant Patent)</th><td>經無性繁殖且獨特、新穎的植物品種。</td><td>自申請日起 20 年。</td><td>免繳維持費。</td></tr>
                  </tbody>
                </table>
              </div>
            </div>
          </section>

          <section class="article-row">
            <h3 class="article-section-title">申請要點</h3>
            <div class="article-body">
              <h4>申請案必須滿足以下三項核心實體要件，才可獲准專利：</h4>
              <ul class="content-list">
                <li><strong>新穎性 (Novelty)：</strong>發明在申請日前未曾公開或被他人發表。</li>
                <li><strong>實用性 (Utility)：</strong>發明必須具有實際、明確且可執行的用途。</li>
                <li><strong>非顯而易見性 (Non-obviousness)：</strong>對該技術領域具備通常知識的人而言，該發明不是輕易能想到的。</li>
              </ul>
              <h4>獨特的程序與制度</h4>
              <ul class="content-list">
                <li><strong>臨時申請案 (Provisional Application)：</strong>允許申請人以較低的費用與簡化的文件先提交申請，以鎖定「最早申請日」（優先權日），並有一年的緩衝期來補正正式申請案。</li>
                <li><strong>早期公開與實體審查：</strong>發明專利自申請日起 18 個月後會自動公開。美國採取直接進行實體審查制，不需像部分國家需另外提出實體審查請求。</li>
                <li><strong>接續案與分割案 (Continuation / Divisional)：</strong>美國擁有非常靈活的連續案制度，申請人可以在母案審查期間，透過提交接續案或分割案來調整專利範圍，在商業布局上極具策略價值。</li>
                <li><strong>申請人規費減免優惠：</strong>USPTO 依申請人規模分為大個體、小個體及微個體三類，小個體（如個人、員工小於 500 人企業）與微個體可享有大幅度的官方規費減免。</li>
                <li><strong>加速審查路徑：</strong>針對有急切需求的申請人，USPTO 提供加速審查 (AE)、優先審查 (PE) 及專利審查高速公路 (PPH) 等多元快速通道，能將原本平均需 22 個月的審查時間大幅縮短。</li>
              </ul>
            </div>
          </section>

          <section class="article-row">
            <h3 class="article-section-title">專利爭議侵權</h3>
            <div class="article-body">
              <h4>核准後複審 (Post-Grant Review, PGR)：</h4>
              <ul class="content-list content-sublist">
                <li><strong>時機：</strong>專利核准或重新公告後 9 個月內。</li>
                <li><strong>理由：</strong>理由廣泛，可基於任何法定無效事由（如新穎性、進步性、說明書不充分等）。</li>
                <li><strong>條件：</strong>申請人不得為專利權人，且該案未先向法院提起確認之訴。</li>
              </ul>
              <h4>多方複審 (Inter Partes Review, IPR)：</h4>
              <ul class="content-list content-sublist">
                <li><strong>時機：</strong>專利核准 9 個月後，或 PGR 程序終結後。</li>
                <li><strong>理由：</strong>僅限基於專利案或公開文獻主張無效（新穎性、進步性問題）。</li>
                <li><strong>限制：</strong>若遭專利侵權起訴，被控侵權人須於訴狀送達 1 年內提出申請。</li>
              </ul>
              <p>美國專利侵權通常由專利權人在美國聯邦法院或美國國際貿易委員會 (ITC) 提出訴訟。美國專利法對侵權行為採取極為嚴格的民事救濟手段，特別是針對「故意侵權」設有高達三倍的懲罰性損害賠償機制。</p>
              <h4>美國法院在判斷產品或技術是否侵權時，遵循以下核心法律原則：</h4>
              <ul class="content-list">
                <li><strong>全要件原則 (All Elements Rule)：</strong>被控侵權的產品或方法，必須具備專利請求項 (Claims) 中的每一個構成要件。若缺少其中任何一個技術特徵，便不構成字面侵權。</li>
                <li><strong>文義讀取 (Literal Infringement)：</strong>被控產品的技術特徵，完全符合專利請求項文字所界定的範圍。</li>
                <li><strong>均等論 (Doctrine of Equivalents)：</strong>若被控產品未完全符合字面文義，但其技術以「實質相同的手段、執行實質相同的運作、達到實質相同的結果」(Function-Way-Result)，仍可能被判定構成均等侵權。</li>
              </ul>
            </div>
          </section>
        </div>
      </article>
    </div>
  </div>
</main>

<?php include dirname(__FILE__) . '/../include/footer.php'; ?>
