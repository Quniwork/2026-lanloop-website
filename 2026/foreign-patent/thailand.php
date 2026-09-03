<?php
$baseHref = '../';
$pageTitle = '泰國專利 | 國外專利 | 聯律國際專利商標事務所';
$pageDescription = '泰國專利種類、申請要點及專利爭議侵權資訊。';
$pageStyles = array('assets/css/page.css', 'assets/css/foreign-patent.css', 'assets/css/country-article.css');
$activePage = 'items';
$activeItem = 'patent';
include dirname(__FILE__) . '/../include/header.php';
?>

<main class="country-patent-page">
  <section class="page-banner" aria-hidden="true"><div class="page-banner__image"></div></section>
  <div class="container">
    <div class="page-content">
      <header class="page-header" aria-labelledby="thailand-patent-title">
        <h1 id="thailand-patent-title">國外專利 <small>Foreign Patent</small></h1>
        <nav class="page-breadcrumb" aria-label="麵包屑">
          <a href="index">首頁</a><span aria-hidden="true">/</span>
          <a href="foreign-patent">國外專利</a><span aria-hidden="true">/</span>
          <span aria-current="page">國外專利制度</span>
        </nav>
      </header>

      <article class="country-article thailand-article article-content article-panel reveal">
        <div class="country-article-heading">
          <div><p class="country-article-kicker">Thailand Patent</p><h2>泰國專利</h2></div>
          <a class="country-article-back" href="foreign-patent">回國外專利制度列表</a>
        </div>

        <div class="article-sheet">
          <header class="article-sheet-header">
            <p>DIP 網址：<a href="http://www.ipthailand.org/" target="_blank" rel="noopener noreferrer">http://www.ipthailand.org/</a></p>
          </header>

          <section class="article-row">
            <h3 class="article-section-title">專利種類</h3>
            <div class="article-body">
              <div class="data-table-wrap">
                <table class="data-table china-patent-table brazil-patent-table">
                  <thead><tr><th scope="col">專利/保護種類</th><th scope="col">保護年限（自申請日起算）</th><th scope="col">審查制度</th><th scope="col">核心保護標的</th></tr></thead>
                  <tbody>
                    <tr><th scope="row">發明專利</th><td>20 年（不可延期）</td><td>實體審查制（含新穎性、進步性與產業利用性）</td><td>新的技術產品或方法（製程）。</td></tr>
                    <tr><th scope="row">小專利<br>(即新型專利)</th><td>6 年（期滿可分兩次展延，每次2年，最長 10 年）</td><td>登記制 / 形式審查（不審查進步性，免去實體審查）</td><td>創新程度較低、著重實用改良的全新產品結構或技術（亦可保護方法）。</td></tr>
                    <tr><th scope="row">設計專利</th><td>10 年（修正案朝向《海牙協定》國際標準最長 15年邁進）</td><td>實體審查制</td><td>產品在外形、結構、構型、圖案或裝飾等不重複的創新外觀特徵。</td></tr>
                  </tbody>
                </table>
              </div>
            </div>
          </section>

          <section class="article-row">
            <h3 class="article-section-title">申請要點</h3>
            <div class="article-body">
              <ul class="content-list">
                <li><strong>發明審查極其冗長（但正逐步推行 PPH 機制）：</strong>泰國發明專利的實體審查在過去以緩慢聞名，從提出申請到獲證往往需耗時 5 至 8 年。為此，DIP 正大力推廣「專利審查高速路（PPH）」機制，若該案已在美、日、中、歐等國獲證，可大幅縮短在泰國的排隊時間。</li>
                <li><strong>絕對新穎性標準（File Before You Disclose）：</strong>泰國採取非常嚴格的絕對新穎性（Absolute Novelty）原則。任何在泰國國內或國外被大眾知悉、銷售、公開發表的技術，都會直接導致專利被拒絕。</li>
                <li><strong>排除電腦軟體專利：</strong>泰國專利法明確規定，「電腦程式（Computer Programs）本身」無法被授予專利保護。軟體開發商在泰國通常必須改以「著作權法」或將軟體與實體硬體裝置相結合，作為整套技術方案來申請發明專利。</li>
                <li><strong>草案新制：全面調高超額費用（即將實施）：</strong>在最新提請立法的專利法修正案中，泰國官方大幅提高了審查門檻。發明專利提出實體審查的官方規費顯著調高，且針對超過 10 項以上的權利要求（Claims），將強制按件收取高額超額費用。</li>
                <li><strong>小專利（新型）發證迅速但有後置異議：</strong>小專利由於不進行進步性的實體審查，通常在申請後 1 年內即可快速獲證。但在獲證公告後的 1 年內，任何第三方皆可向 DIP 註冊官提出無效異議（Opposition），此時官方將會重新啟動實體新穎性檢索。</li>
              </ul>
            </div>
          </section>

          <section class="article-row">
            <h3 class="article-section-title">專利爭議侵權</h3>
            <div class="article-body">
              <ul class="content-list">
                <li><strong>專責法院集中管轄：</strong>泰國所有的專利侵權訴訟與無效宣告，統一由位於曼谷的中央智慧財產權與國際貿易法院（CIPITC）專管審理。該法院配有法律法官與技術專家組成的雙軌審判制，比起一般地方法院更具備處理國際跨國技術官司的能力。</li>
              </ul>
              <h4>民事與刑事雙軌執法：</h4>
              <p>泰國專利侵權在法律上同時具備民事責任與刑事責任（包含有期徒刑與罰金）。</p>
              <ul class="content-list content-sublist">
                <li><strong>刑事路徑：</strong>權利人可向經濟犯罪查緝局（ECD）報案，由警方發動刑事突擊搜查、沒收侵權產品與機具，這在商標與設計仿冒中非常普遍。</li>
                <li><strong>民事路徑：</strong>若涉及複雜的發明技術比對，通常仍須走 CIPITC 的民事訴訟以請求損害賠償。</li>
              </ul>
              <ul class="content-list">
                <li><strong>侵權判定（等同原則適用範圍狹窄）：</strong>泰國法院在審理技術侵權時，實務上高度傾向「文義侵權（Literal Infringement）」與「全要件原則」。雖然法律承認等同原則，但在實務判例中，如果被告的產品在結構上有一項核心特徵與專利 Claims 的文字描述不符，泰國法官往往不太願意輕易判決等同侵權成立。</li>
                <li><strong>邊境海關扣押（Customs Recordation）：</strong>泰國擁有相當強大的海關智慧財產權保護機制。專利或設計權利人可以向海關進行備案登記，一旦海關在邊境查獲涉嫌侵權的進出口貨物，有權進行現場查扣並通知權利人配合鑑定，能從源頭阻斷海外侵權品流入泰國市場。</li>
                <li><strong>缺乏暫時禁令（Preliminary Injunction）的實務操作：</strong>雖然泰國法律允許原告在起訴前申請「臨時禁令（PI）」，但在專利侵權實務中，法院核准臨時禁令的門檻極高。法院通常要求原告必須證明若不發禁令將造成「不可逆轉且無法以金錢賠償的巨大損害」，因此權利人很難在開庭前就叫對手停工。</li>
                <li><strong>消滅時效：</strong>專利民事侵權訴訟的損害賠償請求權時效，為自權利人「知悉侵權行為及侵權人」之日起算 1 年；或自侵權行為發生之日起算 10 年（以先到期者為準）。</li>
              </ul>
            </div>
          </section>
        </div>
      </article>
    </div>
  </div>
</main>

<?php include dirname(__FILE__) . '/../include/footer.php'; ?>
