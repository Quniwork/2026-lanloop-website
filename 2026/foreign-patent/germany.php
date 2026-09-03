<?php
$baseHref = '../';
$pageTitle = '德國專利 | 國外專利 | 聯律國際專利商標事務所';
$pageDescription = '德國專利種類、申請要點及專利爭議侵權資訊。';
$pageStyles = array('assets/css/page.css', 'assets/css/foreign-patent.css', 'assets/css/country-article.css');
$activePage = 'items';
$activeItem = 'patent';
include dirname(__FILE__) . '/../include/header.php';
?>

<main class="country-patent-page">
  <section class="page-banner" aria-hidden="true"><div class="page-banner__image"></div></section>
  <div class="container">
    <div class="page-content">
      <header class="page-header" aria-labelledby="germany-patent-title">
        <h1 id="germany-patent-title">國外專利 <small>Foreign Patent</small></h1>
        <nav class="page-breadcrumb" aria-label="麵包屑">
          <a href="index">首頁</a><span aria-hidden="true">/</span>
          <a href="foreign-patent">國外專利</a><span aria-hidden="true">/</span>
          <span aria-current="page">國外專利制度</span>
        </nav>
      </header>

      <article class="country-article germany-article article-content article-panel reveal">
        <div class="country-article-heading">
          <div><p class="country-article-kicker">Germany Patent</p><h2>德國專利</h2></div>
          <a class="country-article-back" href="foreign-patent">回國外專利制度列表</a>
        </div>

        <div class="article-sheet">
          <header class="article-sheet-header">
            <p>EPO網址：<a href="https://lsl.sinica.edu.tw/EResources/db/patents.php" target="_blank" rel="noopener noreferrer">https://lsl.sinica.edu.tw/EResources/db/patents.php</a></p>
          </header>

          <section class="article-row">
            <h3 class="article-section-title">專利種類</h3>
            <div class="article-body">
              <div class="data-table-wrap">
                <table class="data-table china-patent-table brazil-patent-table">
                  <thead><tr><th scope="col">種類</th><th scope="col">保護年限</th><th scope="col">審查制度</th><th scope="col">保護客體與特點</th></tr></thead>
                  <tbody>
                    <tr><th scope="row">發明專利 (Patent)</th><td>自申請日起 20 年</td><td>實體審查制（需於 7 年內提請實審）</td><td>適用於高技術含量的產品或「方法」（製造方法、使用方法）。</td></tr>
                    <tr><th scope="row">新型專利 (Utility Model)</th><td>自申請日起 10 年</td><td>形式審查制（登記註冊制，不進行實審）</td><td>僅保護產品的技術結構，不保護「方法」。審查速度極快。</td></tr>
                    <tr><th scope="row">設計 (Design)</th><td>自申請日起 25 年</td><td>形式審查制（登記註冊制，不進行實審）</td><td>保護產品的外觀、形狀、色彩或圖案。</td></tr>
                  </tbody>
                </table>
              </div>
            </div>
          </section>

          <section class="article-row">
            <h3 class="article-section-title">申請要點</h3>
            <div class="article-body">
              <h4>發明、新型專利三要件</h4>
              <ul class="content-list">
                <li><strong>產業上利用性 (Industrial Applicability)：</strong>發明必須能在任何一種產業（包含製造業、農業等）中製造或使用。</li>
                <li><strong>新穎性 (Novelty)：</strong>發明必須是全新的。在申請日或優先權日之前，世界上尚未出現過任何公開的相同技術。</li>
                <li><strong>進步性 (Inventive Step)：</strong>發明必須具有技術突破。所屬技術領域的專業人士，不能僅憑現有的技術輕易組合或改變來完成您的發明。</li>
              </ul>
              <h4>設計 (Design)</h4>
              <ul class="content-list">
                <li><strong>純外觀保護：</strong>僅保護產品的視覺外觀（如線條、輪廓、色彩、形狀或材料裝飾），不涉及任何技術功能。</li>
                <li><strong>快速註冊：</strong>同樣採形式審查，只要文件符合法定格式且不違反善良風俗，即可核准註冊。</li>
              </ul>
            </div>
          </section>

          <section class="article-row">
            <h3 class="article-section-title">專利爭議侵權</h3>
            <div class="article-body">
              <p>德國採用「侵權與無效分離」的雙軌制。地方法院只管專利侵權，聯邦專利法院（FPC）管轄無效訴訟。無效訴訟是獨立的法律程序。</p>
              <h4>兩大主要途徑</h4>
              <h4>1. 異議程序 (Opposition)</h4>
              <ul class="content-list content-sublist">
                <li><strong>期限：</strong>專利公告後 9 個月內。</li>
                <li><strong>受理機關：</strong>德國專利商標局（DPMA）。</li>
                <li><strong>方式：</strong>taie.com.tw +1</li>
              </ul>
              <h4>2. 無效訴訟 (Nullity Action)</h4>
              <ul class="content-list content-sublist">
                <li><strong>時間點：</strong>異議期滿後，或專利有效期間隨時可提出。</li>
                <li><strong>受理機關：</strong>聯邦專利法院（FPC）。</li>
              </ul>
              <h4>雙軌制程序：</h4>
              <p>德國將「侵權訴訟」與「無效訴訟」完全分開。</p>
              <ul class="content-list content-sublist">
                <li><strong>侵權訴訟：</strong>由各民事地方法院管轄，專門審理被告是否有侵權事實。</li>
                <li><strong>無效訴訟：</strong>民事法院無權判定專利無效。被告若要抗辯專利無效，必須另向位於慕尼黑的聯邦專利法院（FPC）提起無效之訴。</li>
              </ul>
              <ul class="content-list">
                <li><strong>訴訟不同步：</strong>民事法院審理侵權的速度通常比專利法院審理無效的速度快。這意味著在專利被判定無效之前，民事法院可能就已經先判決侵權成立並核發禁制令。</li>
                <li><strong>快速禁制令：</strong>在證據明確且具急迫性的情況下（如國際商展上有侵權產品展出），德國法院可在 24 小時內核發暫時禁制令，禁止侵權產品進口或販售。</li>
                <li><strong>比例原則與寬限期：</strong>根據德國專利法第 139 條的修訂，若核發禁制令會對被告或第三人造成不成比例的嚴重經濟損害，法院在特殊情況下可以不核發禁制令，或給予被告短暫使用的「寬限期（Aufbrauchfrist）」。</li>
              </ul>
            </div>
          </section>
        </div>
      </article>
    </div>
  </div>
</main>

<?php include dirname(__FILE__) . '/../include/footer.php'; ?>
