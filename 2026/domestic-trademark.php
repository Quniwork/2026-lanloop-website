<?php
$pageTitle = '國內商標 | 聯律國際專利商標事務所';
$pageDescription = '台灣商標法規制度、商標審查及行政救濟流程與商標檢索。';
$pageStyles = array('assets/css/page.css', 'assets/css/links.css', 'assets/css/foreign-patent.css');
$pageScripts = array('assets/js/links.js');
$activePage = 'items';
$activeItem = 'domestic-trademark';
include dirname(__FILE__) . '/include/header.php';
?>

<main class="foreign-patent-page">
  <section class="page-banner" aria-hidden="true">
    <div class="page-banner__image"></div>
  </section>

  <div class="container">
    <div class="page-content">
      <header class="page-header" aria-labelledby="domestic-trademark-title">
        <h1 id="domestic-trademark-title">國內商標 <small>Domestic Trademark</small></h1>
        <nav class="page-breadcrumb" aria-label="麵包屑">
          <a href="index">首頁</a>
          <span aria-hidden="true">/</span>
          <span aria-current="page">國內商標</span>
        </nav>
      </header>

      <div class="page-main">
        <section class="foreign-patent-content reveal" aria-label="國內商標資訊" data-link-tabs>
          <div class="links-tabs foreign-patent-tabs" role="tablist" aria-label="國內商標主題">
            <button class="links-tab is-active" type="button" role="tab" aria-selected="true" aria-controls="domestic-trademark-regulation" data-tab="domestic-trademark-regulation">商標法規制度</button>
            <button class="links-tab" type="button" role="tab" aria-selected="false" aria-controls="domestic-trademark-flow" data-tab="domestic-trademark-flow">商標審查及行政救濟流程</button>
            <a class="links-tab" href="https://twtmsearch.tipo.gov.tw/OS0/OS0101.jsp" target="_blank" rel="noopener noreferrer">商標檢索<span aria-hidden="true"> ↗</span></a>
          </div>

          <div class="links-panels">
            <section class="links-panel foreign-patent-panel article-panel is-active" id="domestic-trademark-regulation" role="tabpanel">
              <h2>台灣商標法規制度</h2>
              <div class="article-content">
                <h3 class="article-section-title">一、何謂商標</h3>
                <p>商標，指任何具有識別性之標識，得以文字、圖形、記號、顏色、立體形狀、動態、全像圖、聲音等，或其聯合式所組成。<br>
                前項所稱識別性，指足以使商品或服務之相關消費者認識為指示商品或服務來源，並得與他人之商品或服務相區別者。</p>

                <h3 class="article-section-title">二、國際優先權</h3>
                <p>在與中華民國有相互承認優先權之國家或世界貿易組織會員，依法申請註冊之商標，其申請人於第一次申請日後六個月內，向中華民國就該申請同一之部分或全部商品或服務，以相同商標申請註冊者，得主張優先權。</p>

                <h3 class="article-section-title">三、常見商標核駁之法條</h3>
                <ul class="content-list">
                  <li><strong>第三十條第一項第十款：</strong>相同或近似於他人同一或類似商品或服務之註冊商標或申請在先之商標，有致相關消費者混淆誤認之虞者。但經該註冊商標或申請在先之商標所有人同意申請，且非顯屬不當者，不在此限。</li>
                  <li><strong>第三十條第一項第十一款：</strong>相同或近似於他人著名商標或標章，有致相關公眾混淆誤認之虞，或有減損著名商標或標章之識別性或信譽之虞者。但得該商標或標章之所有人同意申請註冊者，不在此限。</li>
                </ul>

                <h3 class="article-section-title">四、商標期限</h3>
                <p>自註冊公告當日起，由權利人取得商標權，商標權期間為十年。</p>

                <h3 class="article-section-title">五、商標延展</h3>
                <p>商標權之延展，應於商標權期間屆滿前六個月內提出申請，並繳納延展註冊費；其於商標權期間屆滿後六個月內提出申請者，應繳納二倍延展註冊費。</p>

                <h3 class="article-section-title">六、商標異議</h3>
                <p>商標之註冊違反第二十九條第一項、第三十條第一項或第六十五條第三項規定之情形者，任何人得自商標註冊公告日後三個月內，向商標專責機關提出異議。</p>

                <h3 class="article-section-title">七、商標評定</h3>
                <p>商標之註冊違反第二十九條第一項、第三十條第一項或第六十五條第三項規定之情形者，利害關係人或審查人員得申請或提請商標專責機關評定其註冊。</p>
                <p>以商標之註冊違反第三十條第一項第十款規定，向商標專責機關申請評定，其據以評定商標之註冊已滿三年者，應檢附於申請評定前三年有使用於據以主張商品或服務之證據，或其未使用有正當事由之事證。依前項規定提出之使用證據，應足以證明商標之真實使用，並符合一般商業交易習慣。</p>
                <p>商標之註冊違反第二十九條第一項第一款、第三款、第三十條第一項第九款至第十五款或第六十五條第三項規定之情形，自註冊公告日後滿五年者，不得申請或提請評定。商標之註冊違反第三十條第一項第九款、第十一款規定之情形，係屬惡意者，不受前項期間之限制。</p>

                <h3 class="article-section-title">八、商標廢止</h3>
                <ul class="content-list">
                  <li>自行變換商標或加附記，致與他人使用於同一或類似之商品或服務之註冊商標構成相同或近似，而有使相關消費者混淆誤認之虞者。</li>
                  <li>無正當事由迄未使用或繼續停止使用已滿三年者。但被授權人有使用者，不在此限。</li>
                  <li>未依第四十三條規定附加適當區別標示者。但於商標專責機關處分前已附加區別標示並無產生混淆誤認之虞者，不在此限。</li>
                  <li>商標已成為所指定商品或服務之通用標章、名稱或形狀者。</li>
                  <li>商標實際使用時有致公眾誤認誤信其商品或服務之性質、品質或產地之虞者。</li>
                </ul>

                <h3 class="article-section-title">九、損害賠償</h3>
                <p>商標權人對於侵害其商標權者，得請求除去之；有侵害之虞者，得請求防止之。<br>
                商標權人依前項規定為請求時，得請求銷毀侵害商標權之物品及從事侵害行為之原料或器具。但法院審酌侵害之程度及第三人利益後，得為其他必要之處置。<br>
                商標權人對於因故意或過失侵害其商標權者，得請求損害賠償。前項之損害賠償請求權，自請求權人知有損害及賠償義務人時起，二年間不行使而消滅；自有侵權行為時起，逾十年者亦同。</p>

                <h3 class="article-section-title">十、賠償金計算，以下擇一</h3>
                <ol class="article-numbered-list">
                  <li>依民法第二百十六條規定。但不能提供證據方法以證明其損害時，商標權人得就其使用註冊商標通常所可獲得之利益，減除受侵害後使用同一商標所得之利益，以其差額為所受損害。</li>
                  <li>依侵害商標權行為所得之利益；於侵害商標權者不能就其成本或必要費用舉證時，以銷售該項商品全部收入為所得利益。</li>
                  <li>就查獲侵害商標權商品之零售單價一千五百倍以下之金額。但所查獲商品超過一千五百件時，以其總價定賠償金額。</li>
                </ol>

                <h3 class="article-section-title">十一、商標刑責</h3>
                <p>未得商標權人或團體商標權人同意，為行銷目的而有下列情形之一，處三年以下有期徒刑、拘役或科或併科新臺幣二十萬元以下罰金：</p>
                <ul class="content-list">
                  <li>於同一商品或服務，使用相同於註冊商標或團體商標之商標者。</li>
                  <li>於類似之商品或服務，使用相同於註冊商標或團體商標之商標，有致相關消費者混淆誤認之虞者。</li>
                  <li>於同一或類似之商品或服務，使用近似於註冊商標或團體商標之商標，有致相關消費者混淆誤認之虞者。</li>
                </ul>
                <p>未得證明標章權人同意，為行銷目的而於同一或類似之商品或服務，使用相同或近似於註冊證明標章之標章，有致相關消費者誤認誤信之虞者，處三年以下有期徒刑、拘役或科或併科新臺幣二十萬元以下罰金。明知有前項侵害證明標章權之虞，販賣或意圖販賣而製造、持有、陳列附有相同或近似於他人註冊證明標章標識之標籤、包裝容器或其他物品者，亦同。</p>
                <p>明知他人所為之前二條商品而販賣，或意圖販賣而持有、陳列、輸出或輸入者，處一年以下有期徒刑、拘役或科或併科新臺幣五萬元以下罰金；透過電子媒體或網路方式為之者，亦同。</p>
              </div>
            </section>

            <section class="links-panel foreign-patent-panel article-panel" id="domestic-trademark-flow" role="tabpanel" hidden>
              <h2>台灣商標審查及行政救濟流程</h2>
              <div class="article-content">
                <figure class="article-image">
                  <a href="assets/images/8-2.webp" target="_blank" rel="noopener noreferrer">
                    <img src="assets/images/8-2.webp" alt="台灣商標審查及行政救濟流程圖" loading="lazy" decoding="async" width="2339" height="1654">
                  </a>
                  <figcaption>圖片較小或模糊請點擊放大瀏覽，或<a href="download/8-2.pdf" target="_blank" rel="noopener noreferrer">下載 PDF 檔案</a>。</figcaption>
                </figure>
              </div>
            </section>

          </div>
        </section>
      </div>
    </div>
  </div>
</main>

<?php include dirname(__FILE__) . '/include/footer.php'; ?>
