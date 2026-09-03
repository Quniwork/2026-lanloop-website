<?php
$baseHref = '../';
$pageTitle = '法國專利 | 國外專利 | 聯律國際專利商標事務所';
$pageDescription = '法國專利種類、申請要點及專利爭議侵權資訊。';
$pageStyles = array('assets/css/page.css', 'assets/css/foreign-patent.css', 'assets/css/country-article.css');
$activePage = 'items';
$activeItem = 'patent';
include dirname(__FILE__) . '/../include/header.php';
?>

<main class="country-patent-page">
  <section class="page-banner" aria-hidden="true"><div class="page-banner__image"></div></section>
  <div class="container">
    <div class="page-content">
      <header class="page-header" aria-labelledby="france-patent-title">
        <h1 id="france-patent-title">國外專利 <small>Foreign Patent</small></h1>
        <nav class="page-breadcrumb" aria-label="麵包屑">
          <a href="index">首頁</a><span aria-hidden="true">/</span>
          <a href="foreign-patent">國外專利</a><span aria-hidden="true">/</span>
          <span aria-current="page">國外專利制度</span>
        </nav>
      </header>

      <article class="country-article france-article article-content article-panel reveal">
        <div class="country-article-heading">
          <div><p class="country-article-kicker">France Patent</p><h2>法國專利</h2></div>
          <a class="country-article-back" href="foreign-patent">回國外專利制度列表</a>
        </div>

        <div class="article-sheet">
          <header class="article-sheet-header">
            <p>INPI 網址：<a href="https://data.inpi.fr/" target="_blank" rel="noopener noreferrer">https://data.inpi.fr/</a></p>
          </header>

          <section class="article-row">
            <h3 class="article-section-title">專利種類</h3>
            <div class="article-body">
              <div class="data-table-wrap">
                <table class="data-table china-patent-table brazil-patent-table">
                  <thead><tr><th scope="col">專利/保護種類</th><th scope="col">保護年限（自申請日起算）</th><th scope="col">審查制度</th><th scope="col">核心保護標的</th></tr></thead>
                  <tbody>
                    <tr><th scope="row">發明專利</th><td>20 年</td><td>實體審查制（含新穎性與進步性）</td><td>具新穎性、進步性與產業利用性的技術發明。</td></tr>
                    <tr><th scope="row">新型專利</th><td>10 年（舊制為6年）</td><td>形式審查制（不進行實體審查）</td><td>技術發明（與發明專利標的相同，包含方法）。</td></tr>
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
                <li><strong>引入進步性審查：</strong>修法後，法國 INPI 不再只針對「明顯無新穎性」的案件進行核駁，亦會依據歐洲專利局（EPO）的檢索報告，對發明專利進行嚴格的進步性（Inventive Step）審查。</li>
                <li><strong>臨時申請案機制：</strong>申請人可先提交臨時申請案（Provisional Application）以快速取得優先權日，但必須在 12 個月內轉為正式的發明或新型專利。</li>
              </ul>
              <h4>新型與發明可互轉：</h4>
              <ul class="content-list content-sublist">
                <li>發明專利若未在申請時或 18 個月內提請新穎性調查，會自動被轉換為新型專利。</li>
                <li>新型專利在法定期限內，亦可申請轉換為發明專利（但須補做實體審查）。</li>
              </ul>
              <ul class="content-list">
                <li><strong>新型專利發證快：</strong>新型專利因免除檢索與實體審查費用，通常在申請後 6 個月內即可形式核准並公告發證。</li>
                <li><strong>引入核准後異議制度：</strong>公眾可在發明專利核准公告後的特定期限內向 INPI 提出異議（Opposition），提供第三方成本更低的撤銷管道。</li>
                <li><strong>國防安全審查：</strong>所有在法國提出的專利申請案，皆須於初期（約1至5個月內）移交國防部進行安全審查，通過後才可繼續審查或對外公開。</li>
              </ul>
            </div>
          </section>

          <section class="article-row">
            <h3 class="article-section-title">專利爭議侵權</h3>
            <div class="article-body">
              <ul class="content-list">
                <li><strong>一元化司法管轄：</strong>法國實行特殊的專利爭訟一元制，專利侵權訴訟與專利無效宣告（抗辯），皆統一由巴黎高等法院（Tribunal de Judiciaire de Paris）專管審理，避免了行政與民事程序雙軌脫鉤的問題。</li>
                <li><strong>扣押搜索制度（Saisie-contrefaçon）：</strong>這是法國極具特色的侵權取證手段。權利人可在提起訴訟前，向法院申請專利扣押令，在執達吏與專家的陪同下，突擊前往涉嫌侵權者的營業場所進行現場搜查、拍照並扣押帳冊或樣品，侵權人不得拒絕。</li>
                <li><strong>新型專利訴訟限制：</strong>若欲基於「新型專利」提起侵權訴訟，原告必須先向 INPI 請求製作初步檢索報告（Preliminary Search Report），否則該訴訟將不被法院受理。</li>
              </ul>
              <h4>判定原則（全要件與等同原則）：</h4>
              <ul class="content-list content-sublist">
                <li><strong>文義侵權：</strong>被控侵權產品包含專利權利要求書中的全部技術特徵。</li>
                <li><strong>等同原則（Doctrine of Equivalents）：</strong>若被控侵權物是以「實質相同的手段」，實現「實質相同的功能」，並達到「實質相同的效果」，即使字面不完全相同，仍構成侵權。</li>
              </ul>
              <ul class="content-list">
                <li><strong>救濟與賠償：</strong>法院可判處侵權人立即停止侵權（禁令）、銷毀侵權產品、賠償權利人所受損失與所失利益，或沒收侵權所得。</li>
                <li><strong>消滅時效：</strong>專利侵權訴訟的追訴時效，通常為權利人「知悉或應知悉」侵權行為之日起算 5 年。</li>
              </ul>
            </div>
          </section>
        </div>
      </article>
    </div>
  </div>
</main>

<?php include dirname(__FILE__) . '/../include/footer.php'; ?>
