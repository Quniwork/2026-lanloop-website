<?php
$pageTitle = '相關網站 | 聯律國際專利商標事務所';
$pageDescription = '台灣、亞太及歐美地區智慧財產局、專利局與商標檢索相關網站。';
$pageStyles = array('assets/css/page.css', 'assets/css/links.css');
$pageScripts = array('assets/js/links.js');
$activePage = 'links';
include dirname(__FILE__) . '/include/header.php';
?>

<main class="links-page">
  <section class="page-banner" aria-hidden="true">
    <div class="page-banner__image"></div>
  </section>

  <div class="container">
    <div class="page-content">
      <header class="page-header" aria-labelledby="links-title">
      <h1 id="links-title">相關網站 <small>Links</small></h1>
      <nav class="page-breadcrumb" aria-label="麵包屑">
        <a href="index.php">首頁</a>
        <span aria-hidden="true">/</span>
        <span aria-current="page">相關網站</span>
      </nav>
      </header>

      <div class="page-main">
        <section class="links-content reveal" aria-label="相關網站列表" data-link-tabs>
          <div class="links-tabs" role="tablist" aria-label="網站區域">
            <button class="links-tab is-active" type="button" role="tab" aria-selected="true" aria-controls="links-taiwan" data-tab="links-taiwan">台灣區域</button>
            <button class="links-tab" type="button" role="tab" aria-selected="false" aria-controls="links-asia" data-tab="links-asia">亞太區域</button>
            <button class="links-tab" type="button" role="tab" aria-selected="false" aria-controls="links-western" data-tab="links-western">歐美區域</button>
          </div>
          <div class="links-panels">
            <div class="links-panel is-active" id="links-taiwan" role="tabpanel">
              <ul class="links-list">
                <li><a target="_blank" rel="noopener noreferrer" href="https://www.tipo.gov.tw/">中華民國智慧財產局</a></li>
                <li><a target="_blank" rel="noopener noreferrer" href="https://cloud.tipo.gov.tw/S282/S282WV1/">台灣商標檢索</a></li>
                <li><a target="_blank" rel="noopener noreferrer" href="https://tiponet.tipo.gov.tw/twpat3/twpatc/twpatkm?@@0.9616150292864365">台灣專利檢索</a></li>
                <li><a target="_blank" rel="noopener noreferrer" href="https://tiponet.tipo.gov.tw/gpss4/gpsskmc/gpssbkm?@@0.7707143664512062">全球專利檢索</a></li>
                <li><a target="_blank" rel="noopener noreferrer" href="https://www.wipo.int/portal/index.html.en">世界智慧財產組織（WIPO）</a></li>
              </ul>
            </div>
  
            <div class="links-panel" id="links-asia" role="tabpanel" hidden>
              <ul class="links-list">
                <li><a target="_blank" rel="noopener noreferrer" href="https://www.cnipa.gov.cn/">中國知識產權局(SIPO)</a></li>
                <li><a target="_blank" rel="noopener noreferrer" href="http://www.jpo.go.jp/indexj.htm">日本特許廳（JPO）</a></li>
                <li><a target="_blank" rel="noopener noreferrer" href="http://www.ipos.gov.sg/">新加坡智慧局（IPOS）</a></li>
                <li><a target="_blank" rel="noopener noreferrer" href="http://www.ipaustralia.gov.au/">澳大利亞智慧局（IPA）</a></li>
                <li><a target="_blank" rel="noopener noreferrer" href="https://www.moip.go.kr/ko/MainApp.do">韓國智慧財產局（MOIP）</a></li>
                <li><a target="_blank" rel="noopener noreferrer" href="http://www.ipophil.gov.ph/">菲律賓智慧局（IPOPHL）</a></li>
                <li><a target="_blank" rel="noopener noreferrer" href="http://www.myipo.gov.my/">馬來西亞智慧局（MyIPO）</a></li>
                <li><a target="_blank" rel="noopener noreferrer" href="https://ipindia.gov.in/">印度專利局（CGPDTM）</a></li>
                <li><a target="_blank" rel="noopener noreferrer" href="http://www.cov.gov.vn/">越南專利局（NOIP）</a></li>
                <li><a target="_blank" rel="noopener noreferrer" href="http://www.ipthailand.go.th/en/">泰國專利局（THDIP）</a></li>
                <li><a target="_blank" rel="noopener noreferrer" href="http://www.dgip.go.id/">印尼專利局（DJHKI）</a></li>
              </ul>
            </div>
  
            <div class="links-panel" id="links-western" role="tabpanel" hidden>
              <ul class="links-list">
                <li><a target="_blank" rel="noopener noreferrer" href="http://www.uspto.gov/">美國專利商標局（USPTO）</a></li>
                <li><a target="_blank" rel="noopener noreferrer" href="http://www.cipo.ic.gc.ca/eic/site/cipointernet-internetopic.nsf/eng/Home">加拿大智慧局（CIPO）</a></li>
                <li><a target="_blank" rel="noopener noreferrer" href="http://www.epo.org/">歐洲專利局（EPO）</a></li>
                <li><a target="_blank" rel="noopener noreferrer" href="http://www.npi.int/">北歐專利局（NPI）</a></li>
                <li><a target="_blank" rel="noopener noreferrer" href="http://www.dpma.de/">德國專利局（DPMA）</a></li>
                <li><a target="_blank" rel="noopener noreferrer" href="http://www.oepm.es/es/index.html">西班牙專利和商標局（SPTO）</a></li>
                <li><a target="_blank" rel="noopener noreferrer" href="http://www.ipo.gov.uk/">英國智慧局（UKIPO）</a></li>
                <li><a target="_blank" rel="noopener noreferrer" href="http://www.government.nl/">荷蘭專利局（NLPO）</a></li>
                <li><a target="_blank" rel="noopener noreferrer" href="https://www.prv.se/en/">瑞典專利與註冊局（PRV）</a></li>
                <li><a target="_blank" rel="noopener noreferrer" href="https://www.ige.ch/en.html">瑞士聯邦智慧局（IGE）</a></li>
                <li><a target="_blank" rel="noopener noreferrer" href="https://uprp.gov.pl/pl">波蘭專利局（PPO）</a></li>
                <li><a target="_blank" rel="noopener noreferrer" href="http://www.patentstyret.no/en/?id=">挪威工業產權局（NIPO）</a></li>
                <li><a target="_blank" rel="noopener noreferrer" href="https://www.turkpatent.gov.tr/">土耳其專利局（TPI）</a></li>
                <li><a target="_blank" rel="noopener noreferrer" href="https://rospatent.gov.ru/">俄羅斯聯邦專利商標局（RUPTO）</a></li>
              </ul>
            </div>
          </div>
        </section>
      </div>
    </div>
  </div>
</main>

<?php include dirname(__FILE__) . '/include/footer.php'; ?>
