<?php
$baseHref = '../';
$pageTitle = '紐西蘭專利 | 國外專利 | 聯律國際專利商標事務所';
$pageDescription = '紐西蘭專利種類、申請要點及專利爭議侵權資訊。';
$pageStyles = array('assets/css/page.css', 'assets/css/foreign-patent.css', 'assets/css/country-article.css');
$activePage = 'items';
$activeItem = 'patent';
include dirname(__FILE__) . '/../include/header.php';
?>

<main class="country-patent-page">
  <section class="page-banner" aria-hidden="true"><div class="page-banner__image"></div></section>
  <div class="container">
    <div class="page-content">
      <header class="page-header" aria-labelledby="new-zealand-patent-title">
        <h1 id="new-zealand-patent-title">國外專利 <small>Foreign Patent</small></h1>
        <nav class="page-breadcrumb" aria-label="麵包屑">
          <a href="index.php">首頁</a><span aria-hidden="true">/</span>
          <a href="foreign-patent.php">國外專利</a><span aria-hidden="true">/</span>
          <span aria-current="page">國外專利制度</span>
        </nav>
      </header>

      <article class="country-article new-zealand-article article-content article-panel reveal">
        <div class="country-article-heading">
          <div><p class="country-article-kicker">New Zealand Patent</p><h2>紐西蘭專利</h2></div>
          <a class="country-article-back" href="foreign-patent.php">回國外專利制度列表</a>
        </div>

        <div class="article-sheet">
          <header class="article-sheet-header">
            <p>IPONZ 網址：<a href="https://www.iponz.govt.nz/" target="_blank" rel="noopener noreferrer">https://www.iponz.govt.nz/</a></p>
          </header>

          <section class="article-row">
            <h3 class="article-section-title">專利種類</h3>
            <div class="article-body">
              <div class="data-table-wrap">
                <table class="data-table china-patent-table brazil-patent-table">
                  <thead><tr><th scope="col">專利/保護種類</th><th scope="col">保護年限（自申請日起算）</th><th scope="col">審查制度</th><th scope="col">核心保護標的</th></tr></thead>
                  <tbody>
                    <tr><th scope="row">發明專利</th><td>20 年</td><td>全面實體審查制（須主動提審查請求）</td><td>具備新穎性、進步性（Inventive Step）與產業利用性的全新技術產品或方法。</td></tr>
                    <tr><th scope="row">新型專利</th><td>—</td><td>—</td><td>紐西蘭不設新型專利制度。</td></tr>
                    <tr><th scope="row">註冊設計<br>(即設計專利)</th><td>5 年（可展延 2 次，每次 5 年，最長 15 年）</td><td>登記制 / 形式審查</td><td>應用於產品上，由形狀、配置、圖案或裝飾組成的創新視覺特徵（不保護純功能性外觀）。</td></tr>
                  </tbody>
                </table>
              </div>
            </div>
          </section>

          <section class="article-row">
            <h3 class="article-section-title">申請要點</h3>
            <div class="article-body">
              <ul class="content-list">
                <li><strong>法律明確排除「電腦程式/軟體本身」：</strong>紐西蘭《專利法》第 11 條設有極為嚴格的排他條款，明確規定「電腦程式本身（Computer Program Per Se）」不是可專利發明。軟體若想在紐西蘭獲證，其核心技術貢獻不能僅停留在資料處理或商業邏輯，必須證明該軟體與實體硬體結合，並改良了硬體本身的運作方式或解決了外部實體世界的技術問題。</li>
                <li><strong>毛利傳統文化審查（Māori Advisory Committee）：</strong>這是紐西蘭最獨一無二的特色。如果您的技術發明或工業設計涉及、應用或源自於毛利人（Māori）的傳統知識（Mātauranga Māori）或傳統原住民文化表現形式，申請案會強制移交毛利諮詢委員會審查。若被認定會對毛利文化或價值觀造成冒犯，專利將直接被拒絕授予。</li>
                <li><strong>絕對新穎性與 12 個月寬限期（最新修正）：</strong>紐西蘭採取嚴格的絕對新穎性標準。但近年修法後，紐西蘭正式引入了 12 個月 的新穎性寬限期（Grace Period），包含「發明人自己（或其前手）主動公開或發表」該技術的行為，只要在首次公開行為起算 1 年內向紐西蘭遞交專利完整申請案，新穎性即不受影響。</li>
                <li><strong>主動提審時限與答辯期嚴格：</strong>申請人必須在收到 IPONZ 發出的審查通知書（Examination Notice）起 2 個月內（或自申請日起算 5 年內）主動提出實體審查請求。此外，一旦收到審查意見書（Office Action），申請人必須在 12 個月內（含所有答辯與修正）讓專利達到可核准的狀態（Acceptance），否則該案將直接失效，時間管理非常嚴苛。</li>
                <li><strong>強制委託澳紐雙註冊代理人：</strong>外國申請人在紐西蘭沒有主要營業場所者，必須強制委託具備澳洲與紐西蘭雙重註冊資格的專利代理人（Trans-Tasman Patent Attorney）辦理所有 IPONZ 流程，且文件必須為英文。</li>
              </ul>
            </div>
          </section>

          <section class="article-row">
            <h3 class="article-section-title">專利爭議侵權</h3>
            <div class="article-body">
              <ul class="content-list">
                <li><strong>高等法院集中管轄：</strong>紐西蘭的專利侵權訴訟與專利無效宣告（Revocation）反訴，統一由紐西蘭高等法院（High Court of New Zealand）審理。其司法體系屬於普通法（判例法）系統，審判程序嚴謹，高度尊重專家證人的技術證詞。</li>
              </ul>
              <h4>判定原則（目的性解釋原則）：</h4>
              <ul class="content-list">
                <li>紐西蘭法院在技術侵權判定上，嚴格遵循普通法系經典的「目的性解釋（Purposive Construction）」。</li>
                <li>法官會檢視被告產品雖然更換了部分元件，但從該領域普通技術人員的角度來看，該變更是否屬於「非本質特徵（Non-essential element）」。如果被告只是以實質相同的手段替代了非核心元件、且達成了相同的技術效果，仍會被判定構成等同侵權。</li>
                <li><strong>不當威脅警告的反制（Unjustifiable Threats）：</strong>與澳洲相同，紐西蘭設有反濫訴條款。專利權人若在沒有確鑿證據的情況下，向市場競爭對手或其零售渠道發出不當的侵權警告信（Threats of infringement proceedings），被告可以直接向法院提起反訴，要求專利權人撤回警告、宣布該威脅無效，並賠償因此造成的全部商業營業損失。</li>
                <li><strong>無形實施與進口侵權：</strong>紐西蘭法律規定的侵權實施行為，除了在當地製造、銷售、使用之外，將未經授權的專利產品「進口（Importing）」至紐西蘭境內，或是在紐西蘭境內「持有（Keeping）」該產品以供商業銷售，皆直接構成侵權行為。</li>
                <li><strong>核准後撤銷程序（Revocation by Commissioner）：</strong>除了在法院打無效官司外，利害關係人也可以在專利核准公告後的任何時間，以行政成本較低的方式，直接向 IPONZ 註冊官申請撤銷（Revocation）該瑕疵專利，提供第三方極佳的防禦管道。</li>
                <li><strong>消滅時效：</strong>專利侵權訴訟的損害賠償請求權時效，為自侵權行為發生之日起算 6 年。</li>
              </ul>
            </div>
          </section>
        </div>
      </article>
    </div>
  </div>
</main>

<?php include dirname(__FILE__) . '/../include/footer.php'; ?>
