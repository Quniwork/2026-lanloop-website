<?php
$pageTitle = '國外專利 | 聯律國際專利商標事務所';
$pageDescription = '了解世界主要國家專利制度、PCT、EPC、歐盟外觀設計及國外專利檢索。';
$pageStyles = array('assets/css/page.css', 'assets/css/links.css', 'assets/css/foreign-patent.css');
$pageScripts = array('assets/js/links.js', 'assets/js/foreign-patent.js');
$activePage = 'services';
include dirname(__FILE__) . '/include/header.php';
?>

<main class="foreign-patent-page">
  <section class="page-banner" aria-hidden="true">
    <div class="page-banner__image"></div>
  </section>

  <div class="container">
    <div class="page-content">
      <header class="page-header" aria-labelledby="foreign-patent-title">
        <h1 id="foreign-patent-title">國外專利 <small>Foreign Patent</small></h1>
        <nav class="page-breadcrumb" aria-label="麵包屑">
          <a href="index.php">首頁</a>
          <span aria-hidden="true">/</span>
          <span aria-current="page">國外專利</span>
        </nav>
      </header>

      <div class="page-main">
        <section class="foreign-patent-content reveal" aria-label="國外專利資訊" data-link-tabs>
          <div class="links-tabs foreign-patent-tabs" role="tablist" aria-label="國外專利主題">
            <button class="links-tab is-active" type="button" role="tab" aria-selected="true" aria-controls="foreign-patent-overview" data-tab="foreign-patent-overview">國外專利制度</button>
            <button class="links-tab" type="button" role="tab" aria-selected="false" aria-controls="foreign-patent-pct" data-tab="foreign-patent-pct">PCT專利合作條約</button>
            <button class="links-tab" type="button" role="tab" aria-selected="false" aria-controls="foreign-patent-epc" data-tab="foreign-patent-epc">EPC歐洲專利條約</button>
            <button class="links-tab" type="button" role="tab" aria-selected="false" aria-controls="foreign-patent-eu" data-tab="foreign-patent-eu">REUD歐盟專利條約</button>
            <button class="links-tab" type="button" role="tab" aria-selected="false" aria-controls="foreign-patent-search" data-tab="foreign-patent-search">專利檢索</button>
          </div>

          <div class="links-panels">
            <section class="links-panel foreign-patent-panel is-active" id="foreign-patent-overview" role="tabpanel">
              <div class="country-regions" data-country-regions>
                <section class="country-region" aria-labelledby="region-asia">
                  <div class="country-region-title" id="region-asia"><small>Asia</small><strong>亞洲地區</strong></div>
                  <div class="country-buttons">
                    <a class="country-button" href="foreign-patent/china.php" target="_blank" rel="noopener noreferrer" data-country="中國" data-flag="🇨🇳" data-info="發明20年／新型10年／設計15年。大陸專利權之授予不同時授予香港及澳門。"><i>🇨🇳</i>中國</a>
                    <button class="country-button" type="button" data-country="印尼" data-flag="🇮🇩" data-info="印尼專利制度依申請類型及當地法規辦理，實際申請與維護期限應由專業人員確認。"><i>🇮🇩</i>印尼</button>
                    <button class="country-button" type="button" data-country="日本" data-flag="🇯🇵" data-info="發明20年／新型10年／設計25年。發明與設計採審查制，申請公開後可主張臨時保護。"><i>🇯🇵</i>日本</button>
                    <button class="country-button" type="button" data-country="泰國" data-flag="🇹🇭" data-info="泰國專利申請、審查及權利維護依當地專利法規辦理。"><i>🇹🇭</i>泰國</button>
                    <button class="country-button" type="button" data-country="韓國" data-flag="🇰🇷" data-info="發明20年／新型10年／設計20年。發明須於申請日起5年內提出實審，新型為3年。"><i>🇰🇷</i>韓國</button>
                    <button class="country-button" type="button" data-country="越南" data-flag="🇻🇳" data-info="越南專利申請、審查及權利維護依當地專利法規辦理。"><i>🇻🇳</i>越南</button>
                    <button class="country-button" type="button" data-country="新加坡" data-flag="🇸🇬" data-info="新加坡專利申請、審查及權利維護依當地專利法規辦理。"><i>🇸🇬</i>新加坡</button>
                    <button class="country-button" type="button" data-country="菲律賓" data-flag="🇵🇭" data-info="菲律賓專利申請、審查及權利維護依當地專利法規辦理。"><i>🇵🇭</i>菲律賓</button>
                    <button class="country-button" type="button" data-country="馬來西亞" data-flag="🇲🇾" data-info="馬來西亞專利申請、審查及權利維護依當地專利法規辦理。"><i>🇲🇾</i>馬來西亞</button>
                    <button class="country-button" type="button" data-country="印度" data-flag="🇮🇳" data-info="印度專利申請、審查及權利維護依當地專利法規辦理。"><i>🇮🇳</i>印度</button>
                  </div>
                </section>

                <section class="country-region" aria-labelledby="region-europe">
                  <div class="country-region-title" id="region-europe"><small>Europe</small><strong>歐洲地區</strong></div>
                  <div class="country-buttons">
                    <button class="country-button" type="button" data-country="德國" data-flag="🇩🇪" data-info="發明20年／新型10年／設計25年。新型專利雖無實體審查，仍可請求新穎性調查。"><i>🇩🇪</i>德國</button>
                    <button class="country-button" type="button" data-country="英國" data-flag="🇬🇧" data-info="發明20年／設計25年。專利保護範圍可能延伸至部分大英國協國家。"><i>🇬🇧</i>英國</button>
                    <button class="country-button" type="button" data-country="法國" data-flag="🇫🇷" data-info="發明20年／新型10年／設計25年。設計專利自申請日起每5年延長一次，最多4次。"><i>🇫🇷</i>法國</button>
                    <button class="country-button" type="button" data-country="義大利" data-flag="🇮🇹" data-info="義大利專利申請、審查及權利維護依當地專利法規辦理。"><i>🇮🇹</i>義大利</button>
                    <button class="country-button" type="button" data-country="西班牙" data-flag="🇪🇸" data-info="西班牙專利申請、審查及權利維護依當地專利法規辦理。"><i>🇪🇸</i>西班牙</button>
                  </div>
                </section>

                <section class="country-region" aria-labelledby="region-americas">
                  <div class="country-region-title" id="region-americas"><small>Americas</small><strong>美洲地區</strong></div>
                  <div class="country-buttons">
                    <button class="country-button" type="button" data-country="美國" data-flag="🇺🇸" data-info="發明20年／設計15年。發明專利須依規定繳納維持費，設計專利毋需繳納年費。"><i>🇺🇸</i>美國</button>
                    <button class="country-button" type="button" data-country="加拿大" data-flag="🇨🇦" data-info="發明20年／設計10年。純屬功能性或無法單獨使用之外觀設計，無法取得設計專利權。"><i>🇨🇦</i>加拿大</button>
                    <a class="country-button" href="foreign-patent/brazil.php" target="_blank" rel="noopener noreferrer" data-country="巴西" data-flag="🇧🇷" data-info="巴西專利申請、審查及權利維護依當地專利法規辦理。"><i>🇧🇷</i>巴西</a>
                    <button class="country-button" type="button" data-country="智利" data-flag="🇨🇱" data-info="智利專利申請、審查及權利維護依當地專利法規辦理。"><i>🇨🇱</i>智利</button>
                    <button class="country-button" type="button" data-country="阿根廷" data-flag="🇦🇷" data-info="阿根廷專利申請、審查及權利維護依當地專利法規辦理。"><i>🇦🇷</i>阿根廷</button>
                    <button class="country-button" type="button" data-country="哥倫比亞" data-flag="🇨🇴" data-info="哥倫比亞專利申請、審查及權利維護依當地專利法規辦理。"><i>🇨🇴</i>哥倫比亞</button>
                  </div>
                </section>

                <section class="country-region" aria-labelledby="region-oceania">
                  <div class="country-region-title" id="region-oceania"><small>Oceania</small><strong>大洋洲地區</strong></div>
                  <div class="country-buttons">
                    <button class="country-button" type="button" data-country="澳洲" data-flag="🇦🇺" data-info="發明20年／設計10年。2021年起不再接受新型專利申請。"><i>🇦🇺</i>澳洲</button>
                    <button class="country-button" type="button" data-country="紐西蘭" data-flag="🇳🇿" data-info="紐西蘭專利申請、審查及權利維護依當地專利法規辦理。"><i>🇳🇿</i>紐西蘭</button>
                  </div>
                </section>

                <section class="country-region" aria-labelledby="region-middle-east">
                  <div class="country-region-title" id="region-middle-east"><small>Middle East</small><strong>中東地區</strong></div>
                  <div class="country-buttons">
                    <button class="country-button" type="button" data-country="沙烏地阿拉伯" data-flag="🇸🇦" data-info="沙烏地阿拉伯專利申請、審查及權利維護依當地專利法規辦理。"><i>🇸🇦</i>沙烏地阿拉伯</button>
                    <button class="country-button" type="button" data-country="阿拉伯聯合大公國" data-flag="🇦🇪" data-info="阿拉伯聯合大公國專利申請、審查及權利維護依當地專利法規辦理。"><i>🇦🇪</i>阿拉伯聯合大公國</button>
                  </div>
                </section>
              </div>
            </section>

            <section class="links-panel foreign-patent-panel article-panel" id="foreign-patent-pct" role="tabpanel" hidden>
              <h2>PCT專利合作條約</h2>
              <div class="article-content">
                <p>簡稱為PCT，全名為Patent Cooperation Treaty，為世界智慧財產權組織 World Intellectual Property Organization (WIPO) 內的一個國際間的專利保護協定。</p>
                <hr>
                <h3 class="article-section-title">申請資格</h3>
                <p>申請人必須為PCT締約國之公民或居民，自然人或法人身份皆可。</p>
                <p>註：台灣並非 PCT 會員國，故台灣智慧財產局無法受理 PCT 申請案。目前台灣申請人最常見為透過中國國家知識產權局（SIPO）提出 PCT 案申請。然而，由於各會員國的主管機關只能受理其國民或居民之申請案，因此台灣申請人之國籍需敘明 為「中國台灣」，方得申請。</p>
                <h3 class="article-section-title">申請程序</h3>
                <h4 class="article-stage-title">一、國際階段</h4>
                <p>將規定之申請文件送交受理申請單位，受理申請單位收到申請後，先進行形式審查，視其是否符合條約及細則規定。</p>
                <ul class="article-card-list">
                  <li><b>優先權</b><p>依巴黎公約規定，申請人可在提出其他國家／組織專利申請後的１２個月內，提出PCT申請並主張優先權。</p></li>
                  <li><b>國際查詢報告</b><p>提出國際階段申請後，申請人會收到國際查詢報告，該報告中列出與申請人相關之先前技術，以便申請人決定是否進入國家階段之申請，以及是否對於國際階段之申請案提出修正。</p></li>
                  <li><b>自動公開</b><p>自優先權日起的１８個月將與國際查詢報告一併公開。</p></li>
                  <li><b>請求國際初步審查 (International Preliminary Examination)</b><p>除了國際查詢報告外，申請人亦可付費主動請求進行國際初步審查。國際初步審查係依據國際查詢報告之結果進行審查，申請人可藉此程序提出修正及答辯。國際初步審查報告中會針對國際查詢報告作出說明，以使申請人更加確認申請國家階段的成功性，但各個國家之最後決定並不受限於國際初步審查報告。</p></li>
                </ul>
                <h4 class="article-stage-title">二、國家階段</h4>
                  <p>自申請日（優先權日）起３０個月內，向指定國家各別提出申請。</p>
                  <section class="article-card article-benefits" aria-labelledby="pct-benefits-title">
                    <h3 id="pct-benefits-title">PCT 申請的優點</h3>
                    <ol class="article-numbered-list">
                      <li>申請人使用中文便可提出申請，待決定欲進入國家階段之國家再各別翻譯成所需語言即可。</li>
                      <li>以往一件申請案向多國申請，造成各國檢索上之工作負荷，以此方式提出，將可解決此一缺陷。</li>
                      <li>申請人將享有比優先權更長的緩衝時間，可以充分考慮指定申請的國家。</li>
                    </ol>
                    <aside class="article-note" aria-label="PCT 國家階段重要提醒">
                      <strong>重要提醒</strong>
                      <p>重要資訊特別要注意的是申請人需於PCT案件申請日或優先權日起３０個月內進入國家階段，中國的國家階段是可以PCT的申請日及申請號指定中國為審查單位，此時如提出中國發明申請案可引用PCT的申請日及申請號及檢索並可省下發明申請費（公告費及代理人服務費除外）。</p>
                    </aside>
                </section>
              </div>
            </section>

            <section class="links-panel foreign-patent-panel article-panel" id="foreign-patent-epc" role="tabpanel" hidden>
              <h2>EPC歐洲專利條約</h2>
              <div class="article-content">
                <p>EPC全名為European Patent Convention（歐洲專利條約），為一地域性的專利保護制度，其保護範圍為發明專利（歐洲現在並無組織或條約可以保護新型專利，如欲取得新型專利保護，須向可接受新型專利的國家各別提出申請。）。歐洲專利亦為PCT條約下的地域性專利，因此可藉由PCT申請而取得歐洲專利的權利。</p>
                <hr>
                <h3 class="article-section-title">EPC成員國</h3>
                <p>截至目前，歐洲專利條約締約國38個國家以及2個延伸國。延伸國不是歐洲專利條約的正式簽約國，但是通過與歐洲專利局（EPO）達成的協議，一項歐洲專利申請事實上可以包括延伸國。歐洲專利局所接受的專利申請語言包括英文、法文和德文，但是在專利獲得授權時，需要提交請求項的德文及法文翻譯。</p>
                <p>成員國：阿爾巴尼亞、奧地利、比利時、保加利亞、瑞士、塞浦路斯、捷克、德國、丹麥、愛沙尼亞、西班牙、芬蘭、法國、英國、希臘、克羅埃西亞、匈牙利、愛爾蘭、冰島、義大利、列支敦斯登、立陶宛、盧森堡、拉脫維亞、摩納哥、馬其頓、馬爾他、荷蘭、挪威、波蘭、葡萄牙、羅馬尼亞、塞爾維亞、瑞典、斯洛維尼亞、斯洛伐克、聖馬利諾、土耳其。</p>
                <p>延伸國：波士尼亞赫塞歌維納、蒙特內哥羅共和國。</p>
                <aside class="article-lead" aria-label="EPC 延伸國說明"><strong>注：</strong><p>延伸國本身不能在歐洲專利申請中被指定，但是每個國家的國內法規定，一個授權的歐洲專利可以“延伸”至該國。</p></aside>
                <h3 class="article-section-title">申請資格</h3>
                <p>任何地區的自然人或法人皆可申請，亦可有兩個或以上的共同申請人。</p>
                <h3 class="article-section-title">專利期限</h3>
                <p>歐洲專利自申請至核准期間約須3到5年核准後之有效期限為自申請日算起２０年。</p>
                <h3 class="article-section-title">重要資訊</h3>
                <p>申請案通過形式審查要求後，將進行官方檢索，該檢索報告的公開日起6個月內須請求實質審查，並繳納指定國費用（單一費用）。</p>
                <p>自申請日起第三年，每年皆須繳納維持費（維持費之繳交期限為該案申請月份的最後一天）。支付給歐洲專利局的維持費依法需持續繳納至該專利取得核准，之後專利權人便須向每個所指定的國家繳交年費。</p>
                <p>核准公告日起3個月內須進入指定國家（繳納指定國生效費），方可獲得該國保護。</p>
                <p>歐洲專利異議期間為自專利公告日起９個月，一經刊登於公告內，任何人均可於異議期間內提出異議。</p>
              </div>
            </section>

            <section class="links-panel foreign-patent-panel article-panel" id="foreign-patent-eu" role="tabpanel" hidden>
              <h2>REUD歐盟專利條約</h2>
              <div class="article-content">
                <p>歐盟外觀設計，又稱歐盟共同體設計專利，提供統整一致之權利保護（保護範圍涵蓋歐盟全部27個會員國，同EUTM會員國）且同一申請案中可包含數個設計（許多雷同的設計可申請為近似一案多重設計similar multiple designs，例如紡織品），歐盟外觀設計的定義為：一件產品的全部或部分的外在樣式，尤其是以產品本身和／或其裝飾的線條、輪廓、顏色、形狀、表面結構和/或材料的特徵反映出來的樣式。歐盟外觀設計所保護的範圍包括衣服、紡織物、鞋子、汽車、珠寶、室內陳設品、餐具、陶瓷器及其他等。</p>
                <hr>
                <p><strong>歐盟外觀設計專利的會員國與EUTM歐洲商標聯盟相同，共有 27 個會員國包括：</strong></p>
                <p>德國、法國、義大利、荷蘭、西班牙、比利時、盧森堡、奧地利、希臘、瑞典、愛爾蘭、芬蘭、葡萄牙、丹麥、捷克、匈牙利、波蘭、塞浦路斯、愛沙尼亞、立陶宛、馬爾它、拉托維亞、斯洛伐克、斯洛維尼亞、羅馬尼亞、克羅埃西亞以及保加利亞。</p>
                <h3 class="article-section-title">保護範圍</h3>
                <p><strong>包括：</strong></p>
                <ul class="content-list">
                  <li>一組合系統。（具可以數個方式組合之設計的數個品項；例如：積木）</li>
                  <li>一複雜產品於使用中可看見之部分。（有限保護）</li>
                </ul>
                <p><strong>不包括：</strong></p>
                <ul class="content-list">
                  <li>產品材質。（例如：木材或金屬）</li>
                  <li>一複雜產品於使用中不可看見之部分。</li>
                  <li>相互連結部分：供一產品與另一產品組合之連結部分。（例如：排氣管連結部分，需具特定型式與規格以供與車輛組合)</li>
                </ul>
                <h3 class="article-section-title">優點</h3>
                <section class="article-card article-benefits">
                  <ol class="article-numbered-list">
                  <li>申請人只需提出一件申請案，核准後保護範圍立即涵蓋歐盟全部２７個會員國。</li>
                  <li>申請人可於申請日前之１２個月內，行銷具該設計之產品，而仍保有其新穎性 。</li>
                  <li>允許設計權人評估取得該設計註冊之時間與金錢成本效益。</li>
                  </ol>
                </section>
                <h3 class="article-section-title">重要資訊</h3>
                <p>歐盟外觀設計分為非註冊式外觀設計和註冊式外觀設計：</p>
                <section class="article-card">
                  <b>非註冊式外觀設計 UEUD (Unregistered EU Design)</b>
                  <p>非註冊式外觀設計權利的形成僅通過在歐盟境內的公開，不需要遞交任何申請，該保護期限僅三年，到期後不得延長。</p>
                </section>
                <section class="article-card">
                  <b>註冊式外觀設計 REUD (Registered EU Design)</b>
                  <p>註冊式外觀設計的最長保護期限為25年（從申請日起算），註冊後可保護5年（其後繳納費用即可延展，共4次，每次各5年）。申請人如有需要可要求EUIPO延遲公告（需另外繳納延遲公告費用），最多可30個月；因此申請人可於設計完成後即提出申請，待產品上市時再要求公告，方不致令競爭對方先得到此訊息。</p>
                </section>
                <h3 class="article-section-title">非註冊式外觀設計和註冊式外觀設計之差異</h3>
                <div class="data-table-wrap">
                  <table class="data-table" aria-label="非註冊式外觀設計（UEUD）與註冊式外觀設計（REUD）比較表">
                    <thead>
                      <tr>
                        <th scope="col">項目</th>
                        <th scope="col">非註冊式外觀設計（UEUD）</th>
                        <th scope="col">註冊式外觀設計（REUD）</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row">期限</th>
                        <td>保護期限為三年，從該外觀設計首次被歐盟境內的公眾可以知曉開始計算，到期後不可延長。</td>
                        <td>最長保護期限為 25 年。從申請日起，每五年需繳納維持費。</td>
                      </tr>
                      <tr>
                        <th scope="row">保護效力</th>
                        <td>只能阻止故意複製侵權的行為，即需要證明對方已知曉本外觀設計、惡意複製。在實際操作中，UCD 相對而言不便於維權，因為要證明對方惡意複製會比較困難。</td>
                        <td>可以充分保護自己的外觀設計；即使對方是在不知情的情況下無意侵權，也可以有效阻止。</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </section>

            <section class="links-panel foreign-patent-panel" id="foreign-patent-search" role="tabpanel" hidden>
              <ul class="links-list patent-search-list">
                <li><a target="_blank" rel="noopener noreferrer" href="https://www.uspto.gov/patents/search">美國專利檢索</a></li>
                <li><a target="_blank" rel="noopener noreferrer" href="https://pss-system.cponline.cnipa.gov.cn/conventionalSearch">中國專利檢索</a></li>
                <li><a target="_blank" rel="noopener noreferrer" href="https://www.j-platpat.inpit.go.jp/web/all/top/BTmTopPage">日本專利檢索</a></li>
                <li><a target="_blank" rel="noopener noreferrer" href="https://euipo.europa.eu/eSearch/">歐盟外觀設計檢索</a></li>
                <li><a target="_blank" rel="noopener noreferrer" href="https://worldwide.espacenet.com/">歐洲專利檢索</a></li>
                <li><a target="_blank" rel="noopener noreferrer" href="https://www.search-for-intellectual-property.service.gov.uk/">英國專利檢索</a></li>
                <li><a target="_blank" rel="noopener noreferrer" href="http://engpat.kipris.or.kr/engpat/searchLogina.do?next=MainSearch">韓國專利檢索</a></li>
              </ul>
            </section>
          </div>
        </section>
      </div>
    </div>
  </div>
</main>

<?php include dirname(__FILE__) . '/include/footer.php'; ?>
