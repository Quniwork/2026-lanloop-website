<?php
$baseHref = '../';
$pageTitle = '澳洲專利 | 國外專利 | 聯律國際專利商標事務所';
$pageDescription = '澳洲專利種類、申請要點及專利爭議侵權資訊。';
$pageStyles = array('assets/css/page.css', 'assets/css/foreign-patent.css', 'assets/css/country-article.css');
$activePage = 'items';
$activeItem = 'patent';
include dirname(__FILE__) . '/../include/header.php';
?>

<main class="country-patent-page">
  <section class="page-banner" aria-hidden="true"><div class="page-banner__image"></div></section>
  <div class="container">
    <div class="page-content">
      <header class="page-header" aria-labelledby="australia-patent-title">
        <h1 id="australia-patent-title">國外專利 <small>Foreign Patent</small></h1>
        <nav class="page-breadcrumb" aria-label="麵包屑">
          <a href="index">首頁</a><span aria-hidden="true">/</span>
          <a href="foreign-patent">國外專利</a><span aria-hidden="true">/</span>
          <span aria-current="page">國外專利制度</span>
        </nav>
      </header>

      <article class="country-article australia-article article-content article-panel reveal">
        <div class="country-article-heading">
          <div><p class="country-article-kicker">Australia Patent</p><h2>澳洲專利</h2></div>
          <a class="country-article-back" href="foreign-patent">回國外專利制度列表</a>
        </div>

        <div class="article-sheet">
          <header class="article-sheet-header">
            <p>IP Australia 網址：<a href="https://www.ipaustralia.gov.au/" target="_blank" rel="noopener noreferrer">https://www.ipaustralia.gov.au/</a></p>
          </header>

          <section class="article-row">
            <h3 class="article-section-title">專利種類</h3>
            <div class="article-body">
              <div class="data-table-wrap">
                <table class="data-table china-patent-table brazil-patent-table">
                  <thead><tr><th scope="col">專利/保護種類</th><th scope="col">保護年限（自申請日起算）</th><th scope="col">審查制度</th><th scope="col">核心保護標的</th></tr></thead>
                  <tbody>
                    <tr><th scope="row">標準專利<br>(即發明專利)</th><td>20 年（醫藥專利特定情況下最長可延至 25 年）</td><td>全面實體審查制（須主動提審查請求）</td><td>具備新穎性、進步性（Inventive Step）與產業利用性的全新技術產品或方法。</td></tr>
                    <tr><th scope="row">新型專利</th><td>—</td><td>—</td><td>澳洲已於 2021 年全面廢除新型專利（創新專利）制度 [✍️]。</td></tr>
                    <tr><th scope="row">註冊設計<br>(即設計專利)</th><td>5 年（可展延 1 次 5 年，最長 10 年）</td><td>雙軌制（形式審查直接登記 / 訴訟前須強制實體審查）</td><td>應用於產品上，由形狀、配置、圖案或裝飾組成的創新視覺特徵。</td></tr>
                  </tbody>
                </table>
              </div>
            </div>
          </section>

          <section class="article-row">
            <h3 class="article-section-title">申請要點</h3>
            <div class="article-body">
              <ul class="content-list">
                <li><strong>單軌制時代全面來臨：</strong>澳洲過去廣受中小企業歡迎的「創新專利（新型專利）」已在 2021 年 8 月 26 日後停止受理新案申請 [✍️]。現在所有的技術改良，不論規模大小，在澳洲一律只能申請「標準專利」。</li>
                <li><strong>提出實體審查的法定期限：</strong>申請人必須在收到 IP Australia 的實體審查通知書（Examination Notice）起 2 個月內，或是自申請日起算 5 年內（以先到期者為準），主動提出實體審查請求並繳費，否則案件將被視為撤回。</li>
                <li><strong>軟體與商業方法的可專利性限縮：</strong>澳洲聯邦法院在歷經多起指標性判例後（如 Aristocrat 案），建立了嚴格的軟體審查標準。在澳洲，單純將「商業方法」以一般電腦軟體來實施，是無法獲得專利的。軟體發明必須證明該軟體解決了「電腦內部運作的技術問題」，或是產生了具體的「技術改進與實質效果」才可獲證。</li>
                <li><strong>12個月新穎性寬限期（Grace Period）：</strong>澳洲擁有非常寬鬆的 12 個月 新穎性優惠期。包含「發明人自己（或其前手）在世界任何地方主動發表、公開或進行商業銷售」的行為。只要在首次公開行為起算 1 年內向澳洲遞交「標準專利完整申請案」，該公開行為就不會破壞其新穎性。</li>
                <li><strong>外國人強制代理與英文翻譯：</strong>外國申請人若在澳洲境內沒有主要營業場所，必須強制委託澳洲當地的註冊專利代理人辦理所有 IPO 流程。此外，所有提交的技術文件必須為英文。</li>
              </ul>
            </div>
          </section>

          <section class="article-row">
            <h3 class="article-section-title">專利爭議侵權</h3>
            <div class="article-body">
              <ul class="content-list">
                <li><strong>聯邦法院集中管轄：</strong>澳洲的專利侵權訴訟與專利無效宣告（Revocation）反訴，統一由澳洲聯邦法院（Federal Court of Australia）管轄。聯邦法院的法官在審理高科技、生技醫藥等跨國專利案件上，具備極高的專業度與全球公信力。</li>
                <li><strong>設計專利訴訟的「強制審查」門檻：</strong>在澳洲，工業設計採取形式審查通過後即直接給予「登記（Registered）」。但如果您欲基於該註冊設計對他人提起侵權訴訟，必須在起訴前向 IP Australia 申請並通過「實體審查」取得認證證書（Certified Design），否則該設計權無法在法院行使。</li>
              </ul>
              <h4>判定原則（目的性解釋與實質特徵）：</h4>
              <ul class="content-list">
                <li>澳洲法院在判定侵權時，採用全要件原則（All Elements Rule）進行字面文義比對。</li>
                <li>若字面不完全相符，法院亦適用等同原則，在澳洲司法實務中稱為「目的性解釋（Purposive Construction）」。法官會檢視被告產品雖然替換了部分元件，但對於該領域普通技術人員而言，該置換是否屬於「非本質特徵（Non-essential element）」。若是，則仍會判定侵權成立。</li>
                <li><strong>威脅濫訴的反制機制（Unjustifiable Threats）：</strong>澳洲法律為防止大企業利用專利實力霸凌中小企業，設有嚴格的「不當威脅警告」條款。如果專利權人在未經充分調查的情況下，向競爭對手或其客戶發出語氣過於強硬的侵權警告信（Cease and Desist Letter），被告可以反過來向法院起訴專利權人「不當威脅」，要求專利權人賠償其因此遭受的商業損失。</li>
                <li><strong>高額懲罰性損害賠償：</strong>若原告能證明被告的侵權行為屬於「故意侵權（Willful Infringement）」或「惡意抄襲」，澳洲法院有權依據自由裁量權，在實際損害金額之外，加判高額的懲罰性附加損害賠償（Additional Damages）。</li>
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
