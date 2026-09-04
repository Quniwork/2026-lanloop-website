<?php
$baseHref = '../';
$pageTitle = '阿聯酋專利 | 國外專利 | 聯律國際專利商標事務所';
$pageDescription = '阿聯酋專利種類、申請要點及專利爭議侵權資訊。';
$pageStyles = array('assets/css/page.css', 'assets/css/foreign-patent.css', 'assets/css/country-article.css');
$activePage = 'items';
$activeItem = 'patent';
include dirname(__FILE__) . '/../include/header.php';
?>

<main class="country-patent-page">
  <section class="page-banner" aria-hidden="true"><div class="page-banner__image"></div></section>
  <div class="container">
    <div class="page-content">
      <header class="page-header" aria-labelledby="uae-patent-title">
        <h1 id="uae-patent-title">國外專利 <small>Foreign Patent</small></h1>
        <nav class="page-breadcrumb" aria-label="麵包屑">
          <a href="index.php">首頁</a><span aria-hidden="true">/</span>
          <a href="foreign-patent.php">國外專利</a><span aria-hidden="true">/</span>
          <span aria-current="page">國外專利制度</span>
        </nav>
      </header>

      <article class="country-article uae-article article-content article-panel reveal">
        <div class="country-article-heading">
          <div><p class="country-article-kicker">UAE Patent</p><h2>阿聯酋(UAE)專利</h2></div>
          <a class="country-article-back" href="foreign-patent.php">回國外專利制度列表</a>
        </div>

        <div class="article-sheet">
          <header class="article-sheet-header">
            <p>UAE網址：<a href="https://services.economy.ae/" target="_blank" rel="noopener noreferrer">https://services.economy.ae/</a></p>
          </header>

          <section class="article-row">
            <h3 class="article-section-title">專利種類</h3>
            <div class="article-body">
              <div class="data-table-wrap">
                <table class="data-table china-patent-table brazil-patent-table">
                  <thead><tr><th scope="col">專利/保護種類</th><th scope="col">保護年限（自申請日起算）</th><th scope="col">審查制度</th><th scope="col">核心保護標的</th></tr></thead>
                  <tbody>
                    <tr><th scope="row">發明專利</th><td>20 年（不可延期）</td><td>全面實體審查制（委託國際機構聯檢）</td><td>具備新穎性、進步性與產業利用性的全新技術產品或方法。</td></tr>
                    <tr><th scope="row">新型專利</th><td>10 年（不可延期）</td><td>形式審查制（免去實體進步性審查）</td><td>創新程度稍低、未達發明高度，但具備實用性改良的實體產品或構造。</td></tr>
                    <tr><th scope="row">工業設計<br>(即設計專利)</th><td>20 年（修法後保護年限由10年拉長至20年）</td><td>登記制 / 形式審查</td><td>產品全部或部分由外形、圖案、線條、色彩組成的創新視覺特徵（含數位介面）。</td></tr>
                  </tbody>
                </table>
              </div>
            </div>
          </section>

          <section class="article-row">
            <h3 class="article-section-title">申請要點</h3>
            <div class="article-body">
              <ul class="content-list">
                <li><strong>委外實體審查機制（與韓國/中國等國合作）：</strong>阿聯酋經濟部為了克服內部技術審查人員不足的問題，與韓國專利廳（KIPO）、中國國家知識產權局（CNIPA）以及歐洲專利局（EPO）簽有密切的審查合作協議。阿聯酋國家案的檢索與實體審查，實務上多直接由這些國際一流專利局的審查員代為執行並出具報告，審查標準完全與國際對齊。</li>
                <li><strong>工業設計保護期大幅拉長至 20 年：</strong>根據新法實施的新規，阿聯酋對工業設計的保護力度躍居全球前列，保護期限由過往的 10 年直接拉長一倍至 20 年，並引進了快速登記公告機制，大幅利於時尚、消費性電子與汽車外觀在當地的保護。</li>
                <li><strong>發明與新型可互相轉換：</strong>申請案在形式或實體審查階段，如果申請人預見發明專利可能因進步性不足而遭到拒絕，可以在官方發出最終決定前，申請將發明專利「轉換（Conversion）」為新型專利（Utility Certificate），以保留其原始優先權日。</li>
                <li><strong>12個月新穎性寬限期（Grace Period）：</strong>阿聯酋提供 12 個月 的新穎性優惠期，包含「發明人自己或其授權者」主動公開、展出或發表該技術的行為。只要在首次公開之日起算 1 年內向阿聯酋經濟部提交申請，皆不會破壞其新穎性。</li>
                <li><strong>雙語提交與雙重翻譯：</strong>外國申請人在阿聯酋提交專利時，必須強制同時提交「英文」與「阿拉伯文」兩種語言的說明書與權利要求書（Claims）。由於阿聯酋官方主要以英文審查文件，而當地法院訴訟則強制使用阿拉伯文，兩者翻譯的精確度與一致性極其重要。</li>
                <li><strong>強制委託本地合法代理與領事認證：</strong>外國人必須強制委託具有阿聯酋阿布達比或杜拜合法執照的註冊智財代理機構辦理。此外，提交的法人委任書（POA）等文件，必須強制經過阿聯酋駐外大使館的「領事認證（Legalization）」，這項行政手續較為繁瑣且規費高昂。</li>
              </ul>
            </div>
          </section>

          <section class="article-row">
            <h3 class="article-section-title">專利爭議侵權</h3>
            <div class="article-body">
              <h4>法院訴訟與經濟部（MoE）行政雙軌維權：</h4>
              <p>阿聯酋在打擊侵權上提供靈活的雙軌管道：</p>
              <ul class="content-list content-sublist">
                <li><strong>行政申訴：</strong>權利人可直接向阿聯酋經濟部（MoE）內設的專責委員會提起行政投訴，委員會可在幾週內迅速調查，並發出停止侵權命令、沒收產品並處以行政罰鍰。</li>
                <li><strong>民事訴訟：</strong>若要請求鉅額損害賠償，則須向阿聯酋聯邦法院（Federal Courts）或杜拜、阿布達比的當地民事法院提起訴訟。</li>
              </ul>
              <h4>判定原則（特別重視字面文義與全要件）：</h4>
              <ul class="content-list content-sublist">
                <li>阿聯酋法院在判定技術侵權時，極度遵循文義侵權（Literal Infringement）與全要件原則，逐一比對被告產品是否具備專利 Claims 中的每一個字面特徵。</li>
                <li>對於等同原則（Doctrine of Equivalents），由於阿聯酋屬於大陸法系體系，法官在沒有明確條文規定下，對「等同侵權」的判定持非常謹慎、甚至機械化的態度。若被告產品更改了非核心結構或使用了替代手段，原告面臨的技術比對舉證壓力非常高。</li>
              </ul>
              <ul class="content-list">
                <li><strong>高效率的刑事與民事突擊扣押（Preservation Case）：</strong>雖然等同判定保守，但阿聯酋法院在保全證據（先行取證）上效率極高。原告在正式提起民事訴訟前，可以向法院申請假處分，由法官指派獨立技術專家，在警察與執達吏的陪同下，突擊前往被告位於杜拜自由貿易區或當地的倉庫、工廠，直接「現場錄影、清點並查封扣押」涉嫌侵權的產品與銷售帳冊，防止被告隱匿證據。</li>
                <li><strong>懲罰性損害賠償之缺乏與損害估算：</strong>被判定侵權成立時，法院會判處永久禁令與實際損害賠償。損害賠償的計算多以「權利人所受的實質營業損失」或「侵權人的非法利潤」為準。但阿聯酋法律目前不適用英美法系的懲罰性三倍賠償（Punitive Damages）。</li>
                <li><strong>海關邊境備案高強度攔截（以杜拜最為發達）：</strong>阿聯酋各大海關（尤其是中東最大的杜拜港與自由貿易區海關）擁有非常成熟的智慧財產權海關備案系統。專利與設計在獲證後可直接向海關登記。一旦海關在邊境查獲涉嫌侵權、過境或轉口的仿冒貨物，會主動通知權利人配合鑑定並就地扣留，是防堵海外侵權品流入中東的樞紐防線。</li>
                <li><strong>消滅時效：</strong>專利侵權損害賠償的民事請求權時效，通常為自權利人「知悉侵權行為及侵權人」之日起算 3 年。</li>
              </ul>
            </div>
          </section>
        </div>
      </article>
    </div>
  </div>
</main>

<?php include dirname(__FILE__) . '/../include/footer.php'; ?>
