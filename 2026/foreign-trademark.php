<?php
$pageTitle = '國外商標 | 聯律國際專利商標事務所';
$pageDescription = '國外商標制度：申請要件、申請程序、商標權期限與爭議救濟。';
$pageStyles = array('assets/css/page.css', 'assets/css/links.css', 'assets/css/foreign-patent.css');
$pageScripts = array('assets/js/links.js');
$activePage = 'items';
$activeItem = 'trademark';
include dirname(__FILE__) . '/include/header.php';
?>

<main class="foreign-patent-page">
  <section class="page-banner" aria-hidden="true">
    <div class="page-banner__image"></div>
  </section>

  <div class="container">
    <div class="page-content">
      <header class="page-header" aria-labelledby="foreign-trademark-title">
        <h1 id="foreign-trademark-title">國外商標 <small>Foreign Trademark</small></h1>
        <nav class="page-breadcrumb" aria-label="麵包屑">
          <a href="index.php">首頁</a>
          <span aria-hidden="true">/</span>
          <span aria-current="page">國外商標</span>
        </nav>
      </header>

      <div class="page-main">
        <section class="foreign-patent-content reveal" aria-label="國外商標資訊" data-link-tabs>
          <div class="links-tabs foreign-patent-tabs" role="tablist" aria-label="國外商標主題">
            <button class="links-tab is-active" type="button" role="tab" aria-selected="true" aria-controls="foreign-trademark-overview" data-tab="foreign-trademark-overview">國外商標制度</button>
            <button class="links-tab" type="button" role="tab" aria-selected="false" aria-controls="foreign-trademark-eutm" data-tab="foreign-trademark-eutm">EUTM歐盟商標</button>
            <button class="links-tab" type="button" role="tab" aria-selected="false" aria-controls="foreign-trademark-search" data-tab="foreign-trademark-search">商標檢索</button>
          </div>

          <div class="links-panels">
            <section class="links-panel foreign-patent-panel is-active" id="foreign-trademark-overview" role="tabpanel">
              <div class="country-regions">
                          <section class="country-region" aria-labelledby="tm-region-asia">
                            <div class="country-region-title" id="tm-region-asia"><small>Asia</small><strong>亞洲地區</strong></div>
                            <div class="country-buttons">
                              <a class="country-button" href="foreign-trademark/china.php" target="_blank" rel="noopener noreferrer" data-country="中國" data-flag="🇨🇳" data-info="中國國家知識產權局(China National Intellectual Property Administration，CNIPA)"><i>🇨🇳</i>中國</a>
                              <a class="country-button" href="foreign-trademark/hong-kong.php" target="_blank" rel="noopener noreferrer" data-country="香港" data-flag="🇭🇰" data-info="香港知識產權署( Intellectual Property Department，IPD)"><i>🇭🇰</i>香港</a>
                              <a class="country-button" href="foreign-trademark/macao.php" target="_blank" rel="noopener noreferrer" data-country="澳門" data-flag="🇲🇴" data-info="經濟及科技發展局(DSEDT)"><i>🇲🇴</i>澳門</a>
                              <a class="country-button" href="foreign-trademark/japan.php" target="_blank" rel="noopener noreferrer" data-country="日本" data-flag="🇯🇵" data-info="日本特許廳(Japan Patent Office，JPO)"><i>🇯🇵</i>日本</a>
                              <a class="country-button" href="foreign-trademark/korea.php" target="_blank" rel="noopener noreferrer" data-country="韓國" data-flag="🇰🇷" data-info="韓國智慧財產局（Ministry of Intellectual Property， MOIP)"><i>🇰🇷</i>韓國</a>
                              <a class="country-button" href="foreign-trademark/singapore.php" target="_blank" rel="noopener noreferrer" data-country="新加坡" data-flag="🇸🇬" data-info="新加坡智慧財產局（Intellectual Property Office of Singapore，IPOS）"><i>🇸🇬</i>新加坡</a>
                              <a class="country-button" href="foreign-trademark/malaysia.php" target="_blank" rel="noopener noreferrer" data-country="馬來西亞" data-flag="🇲🇾" data-info="馬來西亞智慧財產局（Intellectual Property Corporation of Malaysia，MyIPO）"><i>🇲🇾</i>馬來西亞</a>
                              <a class="country-button" href="foreign-trademark/india.php" target="_blank" rel="noopener noreferrer" data-country="印度" data-flag="🇮🇳" data-info="印度商標局（Trade Marks Registry）"><i>🇮🇳</i>印度</a>
                              <a class="country-button" href="foreign-trademark/philippines.php" target="_blank" rel="noopener noreferrer" data-country="菲律賓" data-flag="🇵🇭" data-info="菲律賓智慧財產局（Intellectual Property Office of the PhilippinesI，POPHL）"><i>🇵🇭</i>菲律賓</a>
                              <a class="country-button" href="foreign-trademark/vietnam.php" target="_blank" rel="noopener noreferrer" data-country="越南" data-flag="🇻🇳" data-info="越南國家智慧財產局（National Office of Intellectual Property of Vietnam，IP Vietnam）"><i>🇻🇳</i>越南</a>
                              <a class="country-button" href="foreign-trademark/thailand.php" target="_blank" rel="noopener noreferrer" data-country="泰國" data-flag="🇹🇭" data-info="泰國智慧財產局（Department of Intellectual Property，DIP )"><i>🇹🇭</i>泰國</a>
                              <a class="country-button" href="foreign-trademark/indonesia.php" target="_blank" rel="noopener noreferrer" data-country="印尼" data-flag="🇮🇩" data-info="印尼智慧財產局（Directorate General of Intellectual Property，DGIP  )"><i>🇮🇩</i>印尼</a>
                              <a class="country-button" href="foreign-trademark/russia.php" target="_blank" rel="noopener noreferrer" data-country="俄羅斯" data-flag="🇷🇺" data-info="俄羅斯聯邦智慧財產局(Rospatent )"><i>🇷🇺</i>俄羅斯</a>
                        </div>
                      </section>

                      <section class="country-region" aria-labelledby="tm-region-europe">
                        <div class="country-region-title" id="tm-region-europe"><small>Europe</small><strong>歐洲地區</strong></div>
                        <div class="country-buttons">
                          <a class="country-button" href="foreign-trademark/eu.php" target="_blank" rel="noopener noreferrer" data-country="歐盟" data-flag="🇪🇺" data-info="歐盟智慧財產局(European Union Intellectual Property Office, EUIPO)"><i>🇪🇺</i>歐盟</a>
                          <a class="country-button" href="foreign-trademark/germany.php" target="_blank" rel="noopener noreferrer" data-country="德國" data-flag="🇩🇪" data-info="德國專利商標局（Deutsches Patent- und Markenamt, DPMA）"><i>🇩🇪</i>德國</a>
                          <a class="country-button" href="foreign-trademark/uk.php" target="_blank" rel="noopener noreferrer" data-country="英國" data-flag="🇬🇧" data-info="英國智慧財產局（UK Intellectual Property Office, UKIPO）"><i>🇬🇧</i>英國</a>
                          <a class="country-button" href="foreign-trademark/france.php" target="_blank" rel="noopener noreferrer" data-country="法國" data-flag="🇫🇷" data-info="法國國家工業產權局（Institut National de la Propriété Industrielle, INPI）"><i>🇫🇷</i>法國</a>
                          <a class="country-button" href="foreign-trademark/italy.php" target="_blank" rel="noopener noreferrer" data-country="義大利" data-flag="🇮🇹" data-info="義大利專利商標局（Ufficio Italiano Brevetti e Marchi, UIBM）"><i>🇮🇹</i>義大利</a>
                          <a class="country-button" href="foreign-trademark/spain.php" target="_blank" rel="noopener noreferrer" data-country="西班牙" data-flag="🇪🇸" data-info="西班牙專利商標局(Oficina Española de Patentes y Marcas,OEPM)"><i>🇪🇸</i>西班牙</a>
                        </div>
                      </section>

                      <section class="country-region" aria-labelledby="tm-region-americas">
                        <div class="country-region-title" id="tm-region-americas"><small>Americas</small><strong>美洲地區</strong></div>
                        <div class="country-buttons">
                          <a class="country-button" href="foreign-trademark/usa.php" target="_blank" rel="noopener noreferrer" data-country="美國" data-flag="🇺🇸" data-info="美國專利商標局(United States Patent and Trademark Office, USPTO)"><i>🇺🇸</i>美國</a>
                          <a class="country-button" href="foreign-trademark/canada.php" target="_blank" rel="noopener noreferrer" data-country="加拿大" data-flag="🇨🇦" data-info="加拿大智慧財產局(Canadian Intellectual Property Office, CIPO)"><i>🇨🇦</i>加拿大</a>
                          <a class="country-button" href="foreign-trademark/brazil.php" target="_blank" rel="noopener noreferrer" data-country="巴西" data-flag="🇧🇷" data-info="國家工業財產局（Instituto Nacional da Propriedade Industrial, INPI）"><i>🇧🇷</i>巴西</a>
                          <a class="country-button" href="foreign-trademark/chile.php" target="_blank" rel="noopener noreferrer" data-country="智利" data-flag="🇨🇱" data-info="智利國家工業財產局（Instituto Nacional de Propiedad Industrial, INAPI）"><i>🇨🇱</i>智利</a>
                          <a class="country-button" href="foreign-trademark/argentina.php" target="_blank" rel="noopener noreferrer" data-country="阿根廷" data-flag="🇦🇷" data-info="阿根廷國家工業產權局(Instituto Nacional de la Propiedad Industrial, INPI)"><i>🇦🇷</i>阿根廷</a>
                          <a class="country-button" href="foreign-trademark/colombia.php" target="_blank" rel="noopener noreferrer" data-country="哥倫比亞" data-flag="🇨🇴" data-info="哥倫比亞工商監督局（Superintendencia de Industria y Comercio, SIC）"><i>🇨🇴</i>哥倫比亞</a>
                        </div>
                      </section>

                      <section class="country-region" aria-labelledby="tm-region-oceania">
                        <div class="country-region-title" id="tm-region-oceania"><small>Oceania</small><strong>大洋洲地區</strong></div>
                        <div class="country-buttons">
                          <a class="country-button" href="foreign-trademark/australia.php" target="_blank" rel="noopener noreferrer" data-country="澳洲" data-flag="🇦🇺" data-info="澳洲智慧財產局（IP Australia）"><i>🇦🇺</i>澳洲</a>
                          <a class="country-button" href="foreign-trademark/new-zealand.php" target="_blank" rel="noopener noreferrer" data-country="紐西蘭" data-flag="🇳🇿" data-info="紐西蘭智慧財產局(Intellectual Property Office of New Zealand, IPONZ)"><i>🇳🇿</i>紐西蘭</a>
                        </div>
                      </section>

                      <section class="country-region" aria-labelledby="tm-region-middle-east">
                        <div class="country-region-title" id="tm-region-middle-east"><small>Middle East</small><strong>中東地區</strong></div>
                        <div class="country-buttons">
                          <a class="country-button" href="foreign-trademark/israel.php" target="_blank" rel="noopener noreferrer" data-country="以色列" data-flag="🇮🇱" data-info="以色列專利局商標處（Israel Patent Office / Israel Trademarks Department, ILPO）"><i>🇮🇱</i>以色列</a>
                          <a class="country-button" href="foreign-trademark/saudi-arabia.php" target="_blank" rel="noopener noreferrer" data-country="沙烏地阿拉伯" data-flag="🇸🇦" data-info="沙烏地阿拉伯智慧財產局（Saudi Authority for Intellectual Property, SAIP）"><i>🇸🇦</i>沙烏地阿拉伯</a>
                          <a class="country-button" href="foreign-trademark/uae.php" target="_blank" rel="noopener noreferrer" data-country="阿拉伯聯合大公國" data-flag="🇦🇪" data-info="阿聯酋經濟與旅遊部商標局（Ministry of Economy and Tourism, MoET）"><i>🇦🇪</i>阿拉伯聯合大公國</a>
                        </div>
                      </section>

                      <section class="country-region" aria-labelledby="tm-region-africa">
                        <div class="country-region-title" id="tm-region-africa"><small>Africa</small><strong>非洲地區</strong></div>
                        <div class="country-buttons">
                          <a class="country-button" href="foreign-trademark/south-africa.php" target="_blank" rel="noopener noreferrer" data-country="南非" data-flag="🇿🇦" data-info="南非公司暨智慧財產委員會（Companies and Intellectual Property Commission, CIPC）"><i>🇿🇦</i>南非</a>
                        </div>
                      </section>

            </section>

            <section class="links-panel foreign-patent-panel article-panel" id="foreign-trademark-eutm" role="tabpanel" hidden>
              <h2>EUTM歐盟商標</h2>
              <div class="article-content">
                <p>歐盟商標簡稱為 EUTM，全名為 European Union Trade Mark。是以歐洲聯盟為基礎的歐洲聯盟商標註冊，註冊後保護範圍遍及其全部會員國。歐洲聯盟的商標申請係由總部設於西班牙亞利肯特的歐盟智慧財產局 EUIPO 負責審查事宜。</p>
                <hr>
                <p><strong>目前歐洲商標聯盟組織共有 27 個會員國，包括：</strong></p>
                <p>德國、法國、義大利、荷蘭、西班牙、比利時、盧森堡、奧地利、希臘、瑞典、愛爾蘭、芬蘭、葡萄牙、丹麥、捷克、匈牙利、波蘭、塞浦路斯、愛沙尼亞、立陶宛、馬爾它、拉托維亞、斯洛伐克、斯洛維尼亞、羅馬尼亞、克羅埃西亞以及保加利亞。</p>
                <p>申請人只需提出一案申請，不需另外指定即可同時申請 27 國，如獲准申請註冊，其商標專用權為 10 年且商標權效力遍及全部 27 個會員國。</p>
                <h3 class="article-section-title">申請程序</h3>
                <p>申請時需提供類別及該指定商品項目，其申請的程序如下：</p>
                <img class="article-image" src="assets/images/ForeignTrademark.png" alt="">
                <p>由於歐洲商標聯盟的註冊制度係以一案涵蓋全部會員國，且在其中任一國使用註冊商標均可視為在歐洲聯盟境內的使用，十分方便商標權人維護其商標註冊效力，為一頗受歡迎的商標註冊制度。</p>
              </div>
            </section>

            <section class="links-panel foreign-patent-panel" id="foreign-trademark-search" role="tabpanel" hidden>
              <ul class="links-list patent-search-list">
                <li><a target="_blank" rel="noopener noreferrer" href="http://www.uspto.gov/trademark">美國商標檢索</a></li>
                <li><a target="_blank" rel="noopener noreferrer" href="https://cas.sbj.cnipa.gov.cn/cas/login?service=https://wcjs.sbj.cnipa.gov.cn/cas/login">中國商標檢索</a></li>
                <li><a target="_blank" rel="noopener noreferrer" href="https://www.j-platpat.inpit.go.jp/web/all/top/BTmTopPage">日本商標檢索</a></li>
                <li><a target="_blank" rel="noopener noreferrer" href="https://euipo.europa.eu/eSearch/#advanced/trademarks">歐盟商標檢索</a></li>
                <li><a target="_blank" rel="noopener noreferrer" href="https://trademarks.ipo.gov.uk/ipo-tmcase">英國商標檢索</a></li>
                <li><a target="_blank" rel="noopener noreferrer" href="https://www.kipris.or.kr/khome/search/searchResult.do?tab=trademark">韓國商標檢索</a></li>
              </ul>
            </section>
          </div>
        </section>
      </div>
    </div>
  </div>
</main>

<?php include dirname(__FILE__) . '/include/footer.php'; ?>
