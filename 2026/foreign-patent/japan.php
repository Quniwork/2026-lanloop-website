<?php
$baseHref = '../';
$pageTitle = '日本專利 | 國外專利 | 聯律國際專利商標事務所';
$pageDescription = '日本專利種類、申請要點及專利爭議侵權資訊。';
$pageStyles = array('assets/css/page.css', 'assets/css/foreign-patent.css', 'assets/css/country-article.css');
$activePage = 'items';
$activeItem = 'patent';
include dirname(__FILE__) . '/../include/header.php';
?>

<main class="country-patent-page">
  <section class="page-banner" aria-hidden="true"><div class="page-banner__image"></div></section>
  <div class="container">
    <div class="page-content">
      <header class="page-header" aria-labelledby="japan-patent-title">
        <h1 id="japan-patent-title">國外專利 <small>Foreign Patent</small></h1>
        <nav class="page-breadcrumb" aria-label="麵包屑">
          <a href="index">首頁</a><span aria-hidden="true">/</span>
          <a href="foreign-patent">國外專利</a><span aria-hidden="true">/</span>
          <span aria-current="page">國外專利制度</span>
        </nav>
      </header>

      <article class="country-article japan-article article-content article-panel reveal">
        <div class="country-article-heading">
          <div><p class="country-article-kicker">Japan Patent</p><h2>日本專利</h2></div>
          <a class="country-article-back" href="foreign-patent">回國外專利制度列表</a>
        </div>

        <div class="article-sheet">
          <header class="article-sheet-header">
            <p>J-PlatPat 日本專利資訊平台 網址：<a href="https://www.j-platpat.inpit.go.jp/" target="_blank" rel="noopener noreferrer">https://www.j-platpat.inpit.go.jp/</a></p>
          </header>

          <section class="article-row">
            <h3 class="article-section-title">專利種類</h3>
            <div class="article-body">
              <div class="data-table-wrap">
                <table class="data-table china-patent-table">
                  <thead><tr><th scope="col">專利類型</th><th scope="col">保護對象</th><th scope="col">審查制度</th><th scope="col">保護期限（自申請日起算）</th><th scope="col">早期公開</th></tr></thead>
                  <tbody>
                    <tr><th scope="row">特許（發明）</th><td>高高度的技術創作（如方法、配方、系統、軟體演算法）</td><td>實體審查制（須於申請日起3年內主動提出實審）</td><td>20年（醫藥品等特定領域最多可延長5年）</td><td>申請日（或優先權日）起18個月後公開</td></tr>
                    <tr><th scope="row">實用新案（新型）</th><td>物品形狀、構造或組合之技術創作（不含方法與材料）</td><td>形式審查制（免實體審查，符合基本程序即登記）</td><td>10年</td><td>無（直接進行登錄公報）</td></tr>
                    <tr><th scope="row">意匠（設計）</th><td>物品、建築物、圖像 (UI) 等視覺美感上的外觀設計</td><td>實體審查制（特許廳自動進行審查，不需另提實審）</td><td>25年</td><td>無（核准後直接進行意匠公報）</td></tr>
                  </tbody>
                </table>
              </div>
            </div>
          </section>

          <section class="article-row">
            <h3 class="article-section-title">申請要點</h3>
            <div class="article-body">
              <ul class="content-list">
                <li><strong>新穎性優惠期 (Grace Period)：</strong>若發明人在申請日前因實驗、發表或參展而導致技術內容被公開，在公開事實發生後 12 個月內仍可提出申請，但必須在申請時同步聲明主張。</li>
                <li><strong>不予受理的 Shift 修正（偏移修正）：</strong>在答覆特許廳的「拒絕理由通知書」時，修正案所限定的技術特徵，不能偏離原先已經過審查的主題。如果大幅變更審查方向，該修正將會被官方拒絕。</li>
                <li><strong>異議提出制度：</strong>任何人在專利公報發行之日起 6 個月內，皆可基於新穎性或進步性不足等理由，向特許廳提起專利異議，這是一項公眾監督機制。</li>
                <li><strong>加速審查通道：</strong>為了縮短特許（發明）專利的等待時間，JPO 提供了加速審查 (Accelerated Examination) 以及與台灣等各國合作的專利審查高速公路 (PPH)，符合條件者可免費申請以大幅縮短審查時程。</li>
              </ul>
            </div>
          </section>

          <section class="article-row">
            <h3 class="article-section-title">專利爭議侵權</h3>
            <div class="article-body">
              <h4>專利異議 (Opposition)：</h4>
              <ul class="content-list content-sublist">
                <li><strong>時效：</strong>專利公告日起 6 個月內。</li>
                <li><strong>適格人：</strong>任何人（任何人皆可提出，不限利害關係人）。</li>
                <li><strong>目的：</strong>使專利局能快速重新審視專利核准是否適當。</li>
              </ul>
              <h4>專利無效審判 (Invalidation Trial)：</h4>
              <ul class="content-list content-sublist">
                <li><strong>時效：</strong>專利權有效期間內甚至專利權消滅後皆可提出。</li>
                <li><strong>適格人：</strong>僅限利害關係人（例如：面臨侵權訴訟或可能受專利權影響的廠商）。</li>
                <li><strong>目的：</strong>解決專利權有效性爭議，由特許廳審判官（通常為 3 至 5 人合議）進行審理。</li>
              </ul>
              <p>在日本，專利侵權的法律救濟主要透過民事訴訟進行，專利權人可向東京地方法院或大阪地方法院提起專利侵權訴訟。</p>
              <h4>日本專利侵權訴訟的審理採取遞進式，主要分為三個階段：</h4>
              <ol class="content-list content-sublist">
                <li><strong>判斷專利是否有效：</strong>確認原告的專利權是否存在無效事由。</li>
                <li><strong>判斷被告是否侵權：</strong>檢視被告的技術或產品是否落入專利權的保護範圍。</li>
                <li><strong>判斷侵權損失額度：</strong>若確定侵權，則進一步估算應賠償的金額。</li>
              </ol>
              <h4>主要的法律救濟手段</h4>
              <h4>專利權人若遭遇侵權，通常會向法院申請以下兩種形式的民事救濟：</h4>
              <ul class="content-list">
                <li><strong>禁止請求（申請禁令）：</strong>要求被告停止製造、販售或使用該侵權產品。</li>
                <li><strong>損害賠償：</strong>要求被告補償因侵權行為所造成的經濟損失。</li>
              </ul>
            </div>
          </section>
        </div>
      </article>
    </div>
  </div>
</main>

<?php include dirname(__FILE__) . '/../include/footer.php'; ?>
