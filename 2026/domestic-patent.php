<?php
$pageTitle = '國內專利 | 聯律國際專利商標事務所';
$pageDescription = '台灣專利法規制度、發明／新型／設計專利案審查及行政救濟流程與專利檢索。';
$pageStyles = array('assets/css/page.css', 'assets/css/links.css', 'assets/css/foreign-patent.css');
$pageScripts = array('assets/js/links.js');
$activePage = 'items';
$activeItem = 'domestic-patent';
include dirname(__FILE__) . '/include/header.php';
?>

<main class="foreign-patent-page">
  <section class="page-banner" aria-hidden="true">
    <div class="page-banner__image"></div>
  </section>

  <div class="container">
    <div class="page-content">
      <header class="page-header" aria-labelledby="domestic-patent-title">
        <h1 id="domestic-patent-title">國內專利 <small>Domestic Patent</small></h1>
        <nav class="page-breadcrumb" aria-label="麵包屑">
          <a href="index">首頁</a>
          <span aria-hidden="true">/</span>
          <span aria-current="page">國內專利</span>
        </nav>
      </header>

      <div class="page-main">
        <section class="foreign-patent-content reveal" aria-label="國內專利資訊" data-link-tabs>
          <div class="links-tabs foreign-patent-tabs" role="tablist" aria-label="國內專利主題">
            <button class="links-tab is-active" type="button" role="tab" aria-selected="true" aria-controls="domestic-patent-regulation" data-tab="domestic-patent-regulation">專利法規制度</button>
            <button class="links-tab" type="button" role="tab" aria-selected="false" aria-controls="domestic-patent-invention" data-tab="domestic-patent-invention">發明專利案審查及行政救濟流程</button>
            <button class="links-tab" type="button" role="tab" aria-selected="false" aria-controls="domestic-patent-utility" data-tab="domestic-patent-utility">新型專利案審查及行政救濟流程</button>
            <button class="links-tab" type="button" role="tab" aria-selected="false" aria-controls="domestic-patent-design" data-tab="domestic-patent-design">設計專利案審查及行政救濟流程</button>
            <a class="links-tab" href="https://twpat.tipo.gov.tw/" target="_blank" rel="noopener noreferrer">專利檢索<span aria-hidden="true"> ↗</span></a>
          </div>

          <div class="links-panels">
            <section class="links-panel foreign-patent-panel article-panel is-active" id="domestic-patent-regulation" role="tabpanel">
              <h2>台灣專利法規制度</h2>
              <div class="article-content">
              <h3 class="article-section-title">一、專利種類</h3>
                <p>發明、新型、設計。</p>
              <h3 class="article-section-title">二、專利期限</h3>
                <p>發明：申請日起 20 年。<br>
                新型：申請日起 10 年。<br>
                設計：申請日期 15 年。</p>
              <h3 class="article-section-title">三、專利歸屬</h3>
              <ol class="article-numbered-list">
                <li>受雇人職務完成之發明、新型或設計：專利為雇用人，但契約有約定時從其約定。</li>
                <li>受雇人非於職務上完成之發明、新型或設計：專利為受雇人，但契約有約定時從其約定。</li>
                <li>一方出資聘請他人完成之發明、新型或設計：專利屬於發明人（委外人員），但契約有約定時從其約定。</li>
              </ol>
              <h3 class="article-section-title">四、發明定義</h3>
                <p>指利用自然法則之技術思想之創作。</p>
              <h3 class="article-section-title">五、發明、新型專利要件</h3>
                <p>產業利用性、新穎性、進步性。</p>
              <h3 class="article-section-title">六、不予發明、新型之規定</h3>
              <ol class="article-numbered-list">
                <li>申請前已見於刊物者。</li>
                <li>申請前已公開實施者。</li>
                <li>申請前已為公眾所知悉者。</li>
                <li>為其所屬技術領域中具有通常知識者，依申請前之先前技術所能輕易完成。</li>
              </ol>
              <h3 class="article-section-title">七、可適用新穎性優惠期六個月</h3>
              <ol class="article-numbered-list">
                <li>因實驗而公開者。</li>
                <li>因於刊物發表者。</li>
                <li>因陳列於政府主辦或認可之展覽會者。</li>
                <li>非出於其本意而洩漏者。</li>
              </ol>
              <h3 class="article-section-title">八、不能申請發明專利之規定</h3>
              <ol class="article-numbered-list">
                <li>動、植物及生產動、植物之主要生物學方法。但微生物學之生產方法，不在此限。</li>
                <li>人類或動物之診斷、治療或外科手術方法。</li>
                <li>妨害公共秩序或善良風俗者。</li>
              </ol>
              <h3 class="article-section-title">九、國際優先權規定</h3>
                <p>申請人就相同發明在與中華民國相互承認優先權之國家或世界貿易組織會員第一次依法申請專利，並於第一次申請專利之日後十二個月內，向中華民國申請專利者，得主張優先權。國際優先權發明、新型為十二個月內，設計為六個月內。</p>
              <h3 class="article-section-title">十、國內優先權規定</h3>
                <p>申請人基於其在中華民國先申請之發明或新型專利案再提出專利之申請者，得就先申請案申請時說明書、申請專利範圍或圖式所載之發明或新型，主張優先權。申請國內優先權時，之前之申請案於十五個月後視為撤回。</p>
              <h3 class="article-section-title">十一、一案一申請</h3>
                <p>相同發明有二以上之專利申請案時，僅得就其最先申請者准予發明專利。但後申請者所主張之優先權日早於先申請者之申請日者，不在此限。</p>
              <h3 class="article-section-title">十二、發明、新型可同日申請</h3>
                <p>同一人就相同創作，於同日分別申請發明專利及新型專利，其發明專利核准審定前，已取得新型專利權，專利專責機關應通知申請人限期擇一；屆期未擇一者，不予發明專利。<br>
                申請人依前項規定選擇發明專利者，其新型專利權，視為自始不存在。<br>
                發明專利審定前，新型專利權已當然消滅或撤銷確定者，不予專利。</p>
              <h3 class="article-section-title">十三、發明單一性</h3>
              <ol class="article-numbered-list">
                <li>申請發明專利，應就每一發明提出申請。</li>
                <li>二個以上發明，屬於一個廣義發明概念者，得於一申請案中提出申請。</li>
              </ol>
              <h3 class="article-section-title">十四、損害賠償</h3>
                <p>發明專利權人對於侵害其專利權者，得請求除去之；有侵害之虞者，得請求防止之。發明專利權人對於因故意或過失侵害其專利權者，得請求損害賠償，其賠償金額得依下列方式擇一計算：</p>
                <ol class="article-numbered-list">
                  <li>依民法第二百十六條之規定。但不能提供證據方法以證明其損害時，發明專利權人得就其實施專利權通常所可獲得之利益，減除受害後實施同一專利權所得之利益，以其差額為所受損害。</li>
                  <li>依侵害人因侵害行為所得之利益。</li>
                  <li>以相當於授權實施該發明專利所得收取之權利金數額為所受損害。</li>
                </ol>
              <h3 class="article-section-title">十五、新型定義</h3>
                <p>新型，指利用自然法則之技術思想，對物品之形狀、構造或組合之創作。</p>
              <h3 class="article-section-title">十六、新型技術報告</h3>
              <ol class="article-numbered-list">
                <li>申請專利之新型經公告後，任何人得向專利專責機關申請新型專利技術報告。</li>
                <li>新型專利權人行使新型專利權時，應提示新型專利技術報告進行警告。</li>
              </ol>
              <h3 class="article-section-title">十七、設計定義</h3>
                <p>設計，指對物品之全部或部分之形狀、花紋、色彩或其結合，透過視覺訴求之創作。</p>
              <h3 class="article-section-title">十八、衍生設計</h3>
                <p>同一人有二個以上近似之設計，得申請設計專利及其衍生設計專利。<br>
                衍生設計之申請日，不得早於原設計之申請日。<br>
                申請衍生設計專利，於原設計專利公告後，不得為之。<br>
                同一人不得就與原設計不近似，僅與衍生設計近似之設計申請為衍生設計專利。</p>
              <h3 class="article-section-title">十九、設計專利要件</h3>
                <p>產業利用性、新穎性、進步性。</p>
              </div>
            </section>

            <section class="links-panel foreign-patent-panel article-panel" id="domestic-patent-invention" role="tabpanel" hidden>
              <h2>發明專利案審查及行政救濟流程</h2>
              <div class="article-content">
                <figure class="article-image">
                  <a href="assets/images/7-1.webp" target="_blank" rel="noopener noreferrer">
                    <img src="assets/images/7-1.webp" alt="台灣發明專利案審查及行政救濟流程圖" loading="lazy" decoding="async" width="2339" height="1654">
                  </a>
                  <figcaption>圖片較小或模糊請點擊放大瀏覽，或<a href="download/7-1.pdf" target="_blank" rel="noopener noreferrer">下載 PDF 檔案</a>。</figcaption>
                </figure>
              </div>
            </section>

            <section class="links-panel foreign-patent-panel article-panel" id="domestic-patent-utility" role="tabpanel" hidden>
              <h2>新型專利案審查及行政救濟流程</h2>
              <div class="article-content">
                <figure class="article-image">
                  <a href="assets/images/7-2.webp" target="_blank" rel="noopener noreferrer">
                    <img src="assets/images/7-2.webp" alt="台灣新型專利案審查及行政救濟流程圖" loading="lazy" decoding="async" width="2339" height="1654">
                  </a>
                  <figcaption>圖片較小或模糊請點擊放大瀏覽，或<a href="download/7-2.pdf" target="_blank" rel="noopener noreferrer">下載 PDF 檔案</a>。</figcaption>
                </figure>
              </div>
            </section>

            <section class="links-panel foreign-patent-panel article-panel" id="domestic-patent-design" role="tabpanel" hidden>
              <h2>設計專利案審查及行政救濟流程</h2>
              <div class="article-content">
                <figure class="article-image">
                  <a href="assets/images/7-3.webp" target="_blank" rel="noopener noreferrer">
                    <img src="assets/images/7-3.webp" alt="台灣設計專利案審查及行政救濟流程圖" loading="lazy" decoding="async" width="2339" height="1654">
                  </a>
                  <figcaption>圖片較小或模糊請點擊放大瀏覽，或<a href="download/7-3.pdf" target="_blank" rel="noopener noreferrer">下載 PDF 檔案</a>。</figcaption>
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
