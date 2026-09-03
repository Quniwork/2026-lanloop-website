<?php
$baseHref = '../';
$pageTitle = '新加坡專利 | 國外專利 | 聯律國際專利商標事務所';
$pageDescription = '新加坡專利種類、申請要點及專利爭議侵權資訊。';
$pageStyles = array('assets/css/page.css', 'assets/css/foreign-patent.css', 'assets/css/country-article.css');
$activePage = 'items';
$activeItem = 'patent';
include dirname(__FILE__) . '/../include/header.php';
?>

<main class="country-patent-page">
  <section class="page-banner" aria-hidden="true"><div class="page-banner__image"></div></section>
  <div class="container">
    <div class="page-content">
      <header class="page-header" aria-labelledby="singapore-patent-title">
        <h1 id="singapore-patent-title">國外專利 <small>Foreign Patent</small></h1>
        <nav class="page-breadcrumb" aria-label="麵包屑">
          <a href="index">首頁</a><span aria-hidden="true">/</span>
          <a href="foreign-patent">國外專利</a><span aria-hidden="true">/</span>
          <span aria-current="page">國外專利制度</span>
        </nav>
      </header>

      <article class="country-article singapore-article article-content article-panel reveal">
        <div class="country-article-heading">
          <div><p class="country-article-kicker">Singapore Patent</p><h2>新加坡專利</h2></div>
          <a class="country-article-back" href="foreign-patent">回國外專利制度列表</a>
        </div>

        <div class="article-sheet">
          <header class="article-sheet-header">
            <p>IPOS 網址：<a href="https://digitalhub.ipos.gov.sg/" target="_blank" rel="noopener noreferrer">https://digitalhub.ipos.gov.sg/</a></p>
          </header>

          <section class="article-row">
            <h3 class="article-section-title">專利種類</h3>
            <div class="article-body">
              <div class="data-table-wrap">
                <table class="data-table china-patent-table brazil-patent-table">
                  <thead><tr><th scope="col">專利/保護種類</th><th scope="col">保護年限（自申請日起算）</th><th scope="col">審查制度</th><th scope="col">核心保護標的</th></tr></thead>
                  <tbody>
                    <tr><th scope="row">發明專利</th><td>20 年</td><td>全面實體審查制（含新穎性、進步性與產業利用性）</td><td>具備新穎性、進步性與產業利用性的技術產品或方法。</td></tr>
                    <tr><th scope="row">新型專利</th><td>—</td><td>—</td><td>新加坡不設新型專利制度，小型技術改良多直接申請發明專利。</td></tr>
                    <tr><th scope="row">註冊設計<br>(即設計專利)</th><td>5 年（可展延 4 次，最長 25 年）</td><td>登記制 / 形式審查</td><td>應用於物品上，由外形、配置、圖案或裝飾組成的創新視覺特徵（含數位產品外觀）。</td></tr>
                  </tbody>
                </table>
              </div>
            </div>
          </section>

          <section class="article-row">
            <h3 class="article-section-title">申請要點</h3>
            <div class="article-body">
              <h4>多元化的實體審查路徑（Tracks）：</h4>
              <ul class="content-list content-sublist">
                <li><strong>國內審查：</strong>由 IPOS 的審查員直接進行檢索與實體審查。</li>
                <li><strong>國外委外審查：</strong>利用對應外國申請案（如美、日、中、歐等國已獲證之結果）直接作為新加坡核准的依據，可大幅降低審查成本。</li>
              </ul>
              <ul class="content-list">
                <li><strong>強大的加速審查計畫（SGIP）：</strong>新加坡推出「智慧財產權加速計畫（SG Fast）」，針對符合特定資格的科技發明（特別是人工智慧 AI、數位科技、綠色環保技術等），最快可在 6 個月內直接公告獲證，速度領先全球。</li>
                <li><strong>排除純商業方法與軟體本身：</strong>新加坡不保護「單純的商業方法」或「純數學演算法」。但如果電腦軟體/程式能與實體硬體相結合，並產生具體的「技術效果」（Technical Effect）（例如優化特定通訊製程、提升影像處理效率），則在新加坡具備高度的可專利性。</li>
                <li><strong>新穎性優惠期（Grace Period）：</strong>提供 12 個月 的新穎性優惠期，適用於發明人自行公開、在特定國際展覽會展出，或第三方惡意洩密等情況。</li>
                <li><strong>強制委託本地代理人：</strong>外國申請人若在新加坡沒有固定住所或主要營業場所，必須強制委託在新加坡當地註冊的專利代理人辦理所有 IPOS 相關程序。</li>
              </ul>
            </div>
          </section>

          <section class="article-row">
            <h3 class="article-section-title">專利爭議侵權</h3>
            <div class="article-body">
              <ul class="content-list">
                <li><strong>高效率的智慧財產司法系統：</strong>新加坡的專利侵權民事訴訟一審統一由新加坡高等法院（High Court of Singapore）審理。法官具備極高的國際商事與法律素養，且訴訟程序嚴謹、透明、速度快，判決結果在國際上享有極高聲譽。</li>
              </ul>
              <h4>判定原則（特別強調字面文義與本質特徵）：</h4>
              <ul class="content-list">
                <li><strong>文義侵權：</strong>首要審查涉嫌侵權物是否完全符合專利權利要求（Claims）的字面文字。</li>
                <li><strong>等同原則（Purposive Construction）：</strong>新加坡法院採用「目的性解釋原則」來處理等同侵權。法官會檢視該領域的技術人員，在閱讀專利時是否會認為該「微小差異」會影響發明的實質運作。如果該置換不影響功能且非發明核心，仍會判定侵權成立。</li>
                <li><strong>高額賠償與禁令（Injunctions）：</strong>法院有權判處侵權人立即停工（禁令）、銷毀侵權產品、賠償權利人所受損失、或將侵權所得之利益返還給專利權人。若屬於惡意侵權，原告可以主張更高的實質損害賠償。</li>
                <li><strong>新制：引入簡易專利訴訟程序（SCIP）：</strong>為協助中小企業，新加坡近年推出了簡易智慧財產訴訟程序（Simplified Process for Intellectual Property Claims）。若專利侵權損害賠償金額在 50 萬新元以內，可向新加坡國家法院（State Courts）或高等法院申請適用此程序，能大幅縮短訴訟時間並限縮律師費成本。</li>
                <li><strong>地緣防禦：國際仲裁與調解中心：</strong>新加坡是全球領先的智慧財產權仲裁中心（如 WIPO 仲裁與調解新加坡辦事處）。跨國企業在面臨複雜的跨國專利糾紛時，經常選擇在新加坡透過秘密仲裁（Arbitration）解決，避免商譽受損並確保判決在多國具備執行力。</li>
                <li><strong>消滅時效：</strong>專利侵權訴訟的請求權時效，為自侵權行為發生之日起算 6 年。</li>
              </ul>
            </div>
          </section>
        </div>
      </article>
    </div>
  </div>
</main>

<?php include dirname(__FILE__) . '/../include/footer.php'; ?>
