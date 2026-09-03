<?php
$baseHref = '../';
$pageTitle = '韓國專利 | 國外專利 | 聯律國際專利商標事務所';
$pageDescription = '韓國專利種類、申請要點及專利爭議侵權資訊。';
$pageStyles = array('assets/css/page.css', 'assets/css/foreign-patent.css', 'assets/css/country-article.css');
$activePage = 'items';
$activeItem = 'patent';
include dirname(__FILE__) . '/../include/header.php';
?>

<main class="country-patent-page">
  <section class="page-banner" aria-hidden="true"><div class="page-banner__image"></div></section>
  <div class="container">
    <div class="page-content">
      <header class="page-header" aria-labelledby="korea-patent-title">
        <h1 id="korea-patent-title">國外專利 <small>Foreign Patent</small></h1>
        <nav class="page-breadcrumb" aria-label="麵包屑">
          <a href="index">首頁</a><span aria-hidden="true">/</span>
          <a href="foreign-patent">國外專利</a><span aria-hidden="true">/</span>
          <span aria-current="page">國外專利制度</span>
        </nav>
      </header>

      <article class="country-article korea-article article-content article-panel reveal">
        <div class="country-article-heading">
          <div><p class="country-article-kicker">Korea Patent</p><h2>韓國專利</h2></div>
          <a class="country-article-back" href="foreign-patent">回國外專利制度列表</a>
        </div>

        <div class="article-sheet">
          <header class="article-sheet-header">
            <p>KIPRIS 網址：<a href="http://www.kipris.or.kr/" target="_blank" rel="noopener noreferrer">http://www.kipris.or.kr/</a></p>
          </header>

          <section class="article-row">
            <h3 class="article-section-title">專利種類</h3>
            <div class="article-body">
              <div class="data-table-wrap">
                <table class="data-table china-patent-table brazil-patent-table">
                  <thead><tr><th scope="col">專利/保護種類</th><th scope="col">保護年限（自申請日起算）</th><th scope="col">審查制度</th><th scope="col">核心保護標的</th></tr></thead>
                  <tbody>
                    <tr><th scope="row">發明專利</th><td>20 年</td><td>實體審查制（須主動提審查請求）</td><td>利用自然法則之技術思想的高度創作（包含產品與方法）。</td></tr>
                    <tr><th scope="row">新型專利</th><td>10 年</td><td>實體審查制（審查新穎性，不審進步性）</td><td>針對物品之形狀、構造或組合之技術創作（排除「方法/製程」）。</td></tr>
                    <tr><th scope="row">設計專利</th><td>20 年</td><td>雙軌制（一般全審查 / 特定品項部分審查）</td><td>物品全部或部分在外形、圖案、色彩上，透過視覺引起美感的創作。</td></tr>
                  </tbody>
                </table>
              </div>
            </div>
          </section>

          <section class="article-row">
            <h3 class="article-section-title">申請要點</h3>
            <div class="article-body">
              <ul class="content-list">
                <li><strong>答辯期限放寬（最新制）：</strong>根據實施的新規，實體審查階段官方審查意見書（Office Action）的答辯期，由原先的 2 個月直接延長為 4 個月。申請人最多仍可再申請 4 次、每次 1 個月的延期，使總答辯時間最長可達 8 個月，大幅減輕跨國申請人的時效壓力。</li>
                <li><strong>分割案亦可申請延緩審查：</strong>過去只有「原始申請案」可以申請延緩審查（Deferred Examination）或延緩決定。新制全面開放分割案（Divisional Applications）亦可比照辦理，提供企業更靈活的商業防禦策略。</li>
                <li><strong>新型專利並非登記制：</strong>韓國的新型專利（實用新案）自多年前修法後已取消快速登記制，目前一律強制進行實體新穎性審查才能獲證（但免除進步性要求）。</li>
                <li><strong>設計專利的部分審查（Partial Examination）加嚴：</strong>韓國對汰換週期快的產品（如服飾、包裝、電子產品等）採取免審新穎性的「部分審查」以求快速發證。但最新法令堵住了漏洞，若審查委員直接發現部分審查案明顯缺乏新穎性或與先前權利衝突，可以直接予以核駁。</li>
                <li><strong>醫藥品專利期延長（PTE） hard cap 設限：</strong>最新法規與美、日、中接軌，明定因政府藥品審查（監管延誤）而申請的專利權期間延長（PTE），上限嚴格鎖定在 14 年內（自主管機關核准藥品上市日起算），且每一次藥品核准僅限延長一項專利。</li>
                <li><strong>寬限期與提出期限：</strong>韓國擁有 12 個月 的新穎性寬限期（Grace Period）。</li>
              </ul>
            </div>
          </section>

          <section class="article-row">
            <h3 class="article-section-title">專利爭議侵權</h3>
            <div class="article-body">
              <ul class="content-list">
                <li><strong>新增「出口」為侵權實施行為：</strong>這是近年修法最重大的突破。過去韓國《專利法》的實施定義僅限於生產、使用、轉讓、出租或進口。新法正式將「出口（Exporting）」列為合法的專利實施與侵權類型。專利權人現在可以直接針對單純將侵權品「裝船出口海外」的行為申請禁令，並將其計入損害賠償額。</li>
                <li><strong>專責法院與技術審查官：</strong>韓國的專利侵權民事訴訟一審由各地方特許專責法院審理，二審統一由專利法院（Patent Court of Korea）集中管轄。法院內部配有具備高科技背景的「技術審查官（Technical Advisors）」，在半導體、生技等複雜官司中扮演技術把關角色。</li>
                <li><strong>高額懲罰性損害賠償：</strong>為嚴懲惡意抄襲，韓國法律規定，若判定為「故意侵權」，法院可判處高達實際損害金額 3 倍至 5 倍的懲罰性損害賠償（Punitive Damages）（商標與設計已全面拉高至5倍）。</li>
              </ul>
              <h4>判定原則（等同原則與特許廳鑑定）：</h4>
              <ul class="content-list content-sublist">
                <li><strong>等同原則（Doctrine of Equivalents）：</strong>韓國法院高度承認等同原則，若涉嫌侵權物與專利權利要求解決的技術問題相同、具備相同的作用效果，且該置換對該領域技術人員而言是顯而易見的，即構成侵權。</li>
                <li><strong>專利對比與鑑定：</strong>在訴訟進行中，原告或被告經常會向智慧財產審判和訴訟委員會（IPTAB）申請「權利範圍確認審判（Scope Confirmation Proceedings）」，由官方專家先就涉嫌侵權物是否落入專利範圍出具正式裁決，作為法院判決的重要依據。</li>
              </ul>
              <ul class="content-list">
                <li><strong>違反保密命令刑責大幅提高：</strong>配合 MOIP 的成立，針對涉及國防、核心戰略技術之發明，若違反政府的保密命令（Secrecy Orders）擅自前往海外申請專利或洩密，個人將面臨最高 5 年有期徒刑或 5,000 萬韓元罰金，企業亦面臨雙罰制，執法力度極強。</li>
                <li><strong>消滅時效：</strong>專利侵權損害賠償請求權時效，為自權利人「知悉侵權行為及侵權人」之日起算 3 年；或自侵權行為發生之日起算 10 年。</li>
              </ul>
            </div>
          </section>
        </div>
      </article>
    </div>
  </div>
</main>

<?php include dirname(__FILE__) . '/../include/footer.php'; ?>
