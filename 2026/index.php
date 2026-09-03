<?php
$isHome = true;
$pageTitle = '聯律國際專利商標事務所 | 全球智慧財產權服務';
$pageDescription = '聯律國際專利商標事務所，提供專業、迅速、國際化的商標與專利服務，深耕智慧財產領域，協助您的創新與品牌走向世界。';
include dirname(__FILE__) . '/include/header.php';
?>

    <!-- ======================================================
       MAIN
  ====================================================== -->
    <main>

      <!-- HERO -->
      <section class="hero-wrapper" id="home" aria-label="主視覺 Banner">
        <div class="container">
          <div class="hero">
            <div class="hero-copy">
              <div class="eyebrow reveal">GLOBAL INTELLECTUAL PROPERTY</div>
              <h1 class="reveal reveal-delay-1">
                全球布局・專業守護<br>
                <span class="blue">商標 × 專利一站式服務</span>
              </h1>
              <p class="reveal reveal-delay-2">
                深耕智慧財產領域多年，提供專業、迅速、國際化的智慧財產權解決方案，<br>協助您的創新與品牌走向世界。
              </p>
              <div class="hero-actions reveal reveal-delay-3">
                <a class="btn btn-primary" href="#contact" id="btn-consult">
                  立即諮詢 <span class="btn-arrow">→</span>
                </a>
                <a class="btn btn-ghost" href="#quick-links" id="btn-services">
                  了解服務項目 <span class="btn-arrow">→</span>
                </a>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- COUNTRIES -->
      <section class="countries" id="countries" aria-labelledby="countries-title">
        <div class="container" style="position: relative;">
          <div class="section-kicker reveal">Patents and Trademarks in Major Countries Worldwide</div>
          <h2 class="section-title reveal reveal-delay-1" id="countries-title">世界主要國家專利與商標</h2>
          <div class="countries-count" aria-label="服務30個國家">
            <strong id="country-count">0</strong>
            <span>Country</span>
          </div>
        </div>
        <!-- 國旗跑馬燈：3 排交替方向滾動（依專利＋商標服務國家） -->
        <div class="flags-marquee" role="list" aria-label="服務國家列表">

          <!-- Row 1：向左滾動 -->
          <div class="marquee-row">
            <div class="marquee-track" aria-hidden="false">
              <a class="flag" href="foreign-patent/usa" target="_blank" rel="noopener noreferrer" aria-label="美國專利"><i>🇺🇸</i>美國專利</a>
              <a class="flag" href="foreign-patent/china" target="_blank" rel="noopener noreferrer" aria-label="中國專利"><i>🇨🇳</i>中國專利</a>
              <a class="flag" href="foreign-patent/japan" target="_blank" rel="noopener noreferrer" aria-label="日本專利"><i>🇯🇵</i>日本專利</a>
              <a class="flag" href="foreign-patent/germany" target="_blank" rel="noopener noreferrer" aria-label="德國專利"><i>🇩🇪</i>德國專利</a>
              <a class="flag" href="foreign-patent/uk" target="_blank" rel="noopener noreferrer" aria-label="英國專利"><i>🇬🇧</i>英國專利</a>
              <a class="flag" href="foreign-patent/france" target="_blank" rel="noopener noreferrer" aria-label="法國專利"><i>🇫🇷</i>法國專利</a>
              <a class="flag" href="foreign-patent/korea" target="_blank" rel="noopener noreferrer" aria-label="韓國專利"><i>🇰🇷</i>韓國專利</a>
              <a class="flag" href="foreign-patent/australia" target="_blank" rel="noopener noreferrer" aria-label="澳洲專利"><i>🇦🇺</i>澳洲專利</a>
              <a class="flag" href="foreign-patent/india" target="_blank" rel="noopener noreferrer" aria-label="印度專利"><i>🇮🇳</i>印度專利</a>
              <a class="flag" href="foreign-patent/canada" target="_blank" rel="noopener noreferrer" aria-label="加拿大專利"><i>🇨🇦</i>加拿大專利</a>
              <a class="flag" href="foreign-patent/spain" target="_blank" rel="noopener noreferrer" aria-label="西班牙專利"><i>🇪🇸</i>西班牙專利</a>
            </div>
            <div class="marquee-track" aria-hidden="true">
              <a class="flag" href="foreign-patent/usa" target="_blank" rel="noopener noreferrer" aria-label="美國專利" tabindex="-1"><i>🇺🇸</i>美國專利</a>
              <a class="flag" href="foreign-patent/china" target="_blank" rel="noopener noreferrer" aria-label="中國專利" tabindex="-1"><i>🇨🇳</i>中國專利</a>
              <a class="flag" href="foreign-patent/japan" target="_blank" rel="noopener noreferrer" aria-label="日本專利" tabindex="-1"><i>🇯🇵</i>日本專利</a>
              <a class="flag" href="foreign-patent/germany" target="_blank" rel="noopener noreferrer" aria-label="德國專利" tabindex="-1"><i>🇩🇪</i>德國專利</a>
              <a class="flag" href="foreign-patent/uk" target="_blank" rel="noopener noreferrer" aria-label="英國專利" tabindex="-1"><i>🇬🇧</i>英國專利</a>
              <a class="flag" href="foreign-patent/france" target="_blank" rel="noopener noreferrer" aria-label="法國專利" tabindex="-1"><i>🇫🇷</i>法國專利</a>
              <a class="flag" href="foreign-patent/korea" target="_blank" rel="noopener noreferrer" aria-label="韓國專利" tabindex="-1"><i>🇰🇷</i>韓國專利</a>
              <a class="flag" href="foreign-patent/australia" target="_blank" rel="noopener noreferrer" aria-label="澳洲專利" tabindex="-1"><i>🇦🇺</i>澳洲專利</a>
              <a class="flag" href="foreign-patent/india" target="_blank" rel="noopener noreferrer" aria-label="印度專利" tabindex="-1"><i>🇮🇳</i>印度專利</a>
              <a class="flag" href="foreign-patent/canada" target="_blank" rel="noopener noreferrer" aria-label="加拿大專利" tabindex="-1"><i>🇨🇦</i>加拿大專利</a>
              <a class="flag" href="foreign-patent/spain" target="_blank" rel="noopener noreferrer" aria-label="西班牙專利" tabindex="-1"><i>🇪🇸</i>西班牙專利</a>
            </div>
          </div>

          <!-- Row 2：向右滾動 -->
          <div class="marquee-row">
            <div class="marquee-track rtl" aria-hidden="false">
              <a class="flag" href="foreign-patent/italy" target="_blank" rel="noopener noreferrer" aria-label="義大利專利"><i>🇮🇹</i>義大利專利</a>
              <a class="flag" href="foreign-patent/brazil" target="_blank" rel="noopener noreferrer" aria-label="巴西專利"><i>🇧🇷</i>巴西專利</a>
              <div class="flag"><i>🇷🇺</i>俄羅斯專利</div>
              <a class="flag" href="foreign-patent/malaysia" target="_blank" rel="noopener noreferrer" aria-label="馬來西亞專利"><i>🇲🇾</i>馬來西亞專利</a>
              <a class="flag" href="foreign-patent/thailand" target="_blank" rel="noopener noreferrer" aria-label="泰國專利"><i>🇹🇭</i>泰國專利</a>
              <a class="flag" href="foreign-patent/vietnam" target="_blank" rel="noopener noreferrer" aria-label="越南專利"><i>🇻🇳</i>越南專利</a>
              <a class="flag" href="foreign-patent/singapore" target="_blank" rel="noopener noreferrer" aria-label="新加坡專利"><i>🇸🇬</i>新加坡專利</a>
              <a class="flag" href="foreign-patent/philippines" target="_blank" rel="noopener noreferrer" aria-label="菲律賓專利"><i>🇵🇭</i>菲律賓專利</a>
              <a class="flag" href="foreign-patent/indonesia" target="_blank" rel="noopener noreferrer" aria-label="印尼專利"><i>🇮🇩</i>印尼專利</a>
              <a class="flag" href="foreign-patent/saudi-arabia" target="_blank" rel="noopener noreferrer" aria-label="沙烏地阿拉伯專利"><i>🇸🇦</i>沙烏地阿拉伯專利</a>
              <div class="flag"><i>🇿🇦</i>南非專利</div>
            </div>
            <div class="marquee-track rtl" aria-hidden="true">
              <a class="flag" href="foreign-patent/italy" target="_blank" rel="noopener noreferrer" aria-label="義大利專利" tabindex="-1"><i>🇮🇹</i>義大利專利</a>
              <a class="flag" href="foreign-patent/brazil" target="_blank" rel="noopener noreferrer" aria-label="巴西專利" tabindex="-1"><i>🇧🇷</i>巴西專利</a>
              <div class="flag"><i>🇷🇺</i>俄羅斯專利</div>
              <a class="flag" href="foreign-patent/malaysia" target="_blank" rel="noopener noreferrer" aria-label="馬來西亞專利" tabindex="-1"><i>🇲🇾</i>馬來西亞專利</a>
              <a class="flag" href="foreign-patent/thailand" target="_blank" rel="noopener noreferrer" aria-label="泰國專利" tabindex="-1"><i>🇹🇭</i>泰國專利</a>
              <a class="flag" href="foreign-patent/vietnam" target="_blank" rel="noopener noreferrer" aria-label="越南專利" tabindex="-1"><i>🇻🇳</i>越南專利</a>
              <a class="flag" href="foreign-patent/singapore" target="_blank" rel="noopener noreferrer" aria-label="新加坡專利" tabindex="-1"><i>🇸🇬</i>新加坡專利</a>
              <a class="flag" href="foreign-patent/philippines" target="_blank" rel="noopener noreferrer" aria-label="菲律賓專利" tabindex="-1"><i>🇵🇭</i>菲律賓專利</a>
              <a class="flag" href="foreign-patent/indonesia" target="_blank" rel="noopener noreferrer" aria-label="印尼專利" tabindex="-1"><i>🇮🇩</i>印尼專利</a>
              <a class="flag" href="foreign-patent/saudi-arabia" target="_blank" rel="noopener noreferrer" aria-label="沙烏地阿拉伯專利" tabindex="-1"><i>🇸🇦</i>沙烏地阿拉伯專利</a>
              <div class="flag"><i>🇿🇦</i>南非專利</div>
            </div>
          </div>

          <!-- Row 3：向左滾動（較慢） -->
          <div class="marquee-row">
            <div class="marquee-track ltr-slow" aria-hidden="false">
              <a class="flag" href="foreign-trademark/uae" target="_blank" rel="noopener noreferrer" aria-label="阿拉伯聯合大公國商標"><i>🇦🇪</i>阿拉伯聯合大公國商標</a>
              <a class="flag" href="foreign-trademark/israel" target="_blank" rel="noopener noreferrer" aria-label="以色列商標"><i>🇮🇱</i>以色列商標</a>
              <a class="flag" href="foreign-trademark/argentina" target="_blank" rel="noopener noreferrer" aria-label="阿根廷商標"><i>🇦🇷</i>阿根廷商標</a>
              <a class="flag" href="foreign-trademark/hong-kong" target="_blank" rel="noopener noreferrer" aria-label="香港商標"><i>🇭🇰</i>香港商標</a>
              <a class="flag" href="foreign-trademark/colombia" target="_blank" rel="noopener noreferrer" aria-label="哥倫比亞商標"><i>🇨🇴</i>哥倫比亞商標</a>
              <a class="flag" href="foreign-trademark/chile" target="_blank" rel="noopener noreferrer" aria-label="智利商標"><i>🇨🇱</i>智利商標</a>
              <a class="flag" href="foreign-trademark/new-zealand" target="_blank" rel="noopener noreferrer" aria-label="紐西蘭商標"><i>🇳🇿</i>紐西蘭商標</a>
              <a class="flag" href="foreign-trademark/macao" target="_blank" rel="noopener noreferrer" aria-label="澳門商標"><i>🇲🇴</i>澳門商標</a>
              <div class="flag"><i>🇨🇿</i>捷克商標</div>
              <a class="flag" href="foreign-trademark/australia" target="_blank" rel="noopener noreferrer" aria-label="澳洲商標"><i>🇦🇺</i>澳洲商標</a>
              <a class="flag" href="foreign-trademark/usa" target="_blank" rel="noopener noreferrer" aria-label="美國商標"><i>🇺🇸</i>美國商標</a>
            </div>
            <div class="marquee-track ltr-slow" aria-hidden="true">
              <a class="flag" href="foreign-trademark/uae" target="_blank" rel="noopener noreferrer" aria-label="阿拉伯聯合大公國商標" tabindex="-1"><i>🇦🇪</i>阿拉伯聯合大公國商標</a>
              <a class="flag" href="foreign-trademark/israel" target="_blank" rel="noopener noreferrer" aria-label="以色列商標" tabindex="-1"><i>🇮🇱</i>以色列商標</a>
              <a class="flag" href="foreign-trademark/argentina" target="_blank" rel="noopener noreferrer" aria-label="阿根廷商標" tabindex="-1"><i>🇦🇷</i>阿根廷商標</a>
              <a class="flag" href="foreign-trademark/hong-kong" target="_blank" rel="noopener noreferrer" aria-label="香港商標" tabindex="-1"><i>🇭🇰</i>香港商標</a>
              <a class="flag" href="foreign-trademark/colombia" target="_blank" rel="noopener noreferrer" aria-label="哥倫比亞商標" tabindex="-1"><i>🇨🇴</i>哥倫比亞商標</a>
              <a class="flag" href="foreign-trademark/chile" target="_blank" rel="noopener noreferrer" aria-label="智利商標" tabindex="-1"><i>🇨🇱</i>智利商標</a>
              <a class="flag" href="foreign-trademark/new-zealand" target="_blank" rel="noopener noreferrer" aria-label="紐西蘭商標" tabindex="-1"><i>🇳🇿</i>紐西蘭商標</a>
              <a class="flag" href="foreign-trademark/macao" target="_blank" rel="noopener noreferrer" aria-label="澳門商標" tabindex="-1"><i>🇲🇴</i>澳門商標</a>
              <div class="flag"><i>🇨🇿</i>捷克商標</div>
              <a class="flag" href="foreign-trademark/australia" target="_blank" rel="noopener noreferrer" aria-label="澳洲商標" tabindex="-1"><i>🇦🇺</i>澳洲商標</a>
              <a class="flag" href="foreign-trademark/usa" target="_blank" rel="noopener noreferrer" aria-label="美國商標" tabindex="-1"><i>🇺🇸</i>美國商標</a>
            </div>
          </div>

        </div>
      </section>

      <!-- QUICK LINKS -->
      <section class="quick" id="quick-links" aria-labelledby="quick-title">
        <div class="container">
          <div class="section-kicker reveal">Quick Links to Domestic and International Patents &amp; Trademarks</div>
          <h2 class="section-title reveal reveal-delay-1" id="quick-title">國內外專利與商標快速連結</h2>
          <div class="quick-list">

            <div class="quick-row reveal" id="foreign-patent">
              <div class="quick-label">
                <small>Foreign Patent</small>
                <strong>國外專利</strong>
              </div>
              <div class="pills">
                <a class="pill" href="foreign-patent?tab=foreign-patent-overview" id="pill-fp-1">國外專利制度<span class="pill-arrow">→</span></a>
                <a class="pill" href="foreign-patent?tab=foreign-patent-pct" id="pill-fp-2">PCT專利合作條約<span class="pill-arrow">→</span></a>
                <a class="pill" href="foreign-patent?tab=foreign-patent-epc" id="pill-fp-3">EPC歐洲專利條約<span class="pill-arrow">→</span></a>
                <a class="pill" href="foreign-patent?tab=foreign-patent-eu" id="pill-fp-4">REUD歐盟註冊設計<span class="pill-arrow">→</span></a>
                <a class="pill" href="foreign-patent?tab=foreign-patent-search" id="pill-fp-5">專利檢索<span class="pill-arrow">→</span></a>
              </div>
            </div>

            <div class="quick-row reveal reveal-delay-1" id="domestic-patent">
              <div class="quick-label">
                <small>Domestic Patent</small>
                <strong>國內專利</strong>
              </div>
              <div class="pills">
                <a class="pill" href="domestic-patent?tab=domestic-patent-regulation" target="_blank" rel="noopener noreferrer" id="pill-dp-1">專利法規制度<span class="pill-arrow">→</span></a>
                <a class="pill" href="domestic-patent?tab=domestic-patent-invention" target="_blank" rel="noopener noreferrer" id="pill-dp-2">發明專利案審查及行政救濟流程<span class="pill-arrow">→</span></a>
                <a class="pill" href="domestic-patent?tab=domestic-patent-utility" target="_blank" rel="noopener noreferrer" id="pill-dp-3">新型專利案審查及行政救濟流程<span class="pill-arrow">→</span></a>
                <a class="pill" href="domestic-patent?tab=domestic-patent-design" target="_blank" rel="noopener noreferrer" id="pill-dp-4">設計專利案審查及行政救濟流程<span class="pill-arrow">→</span></a>
                <a class="pill" href="https://twpat.tipo.gov.tw/" target="_blank" rel="noopener noreferrer" id="pill-dp-5">專利檢索<span class="pill-arrow">→</span></a>
              </div>
            </div>

            <div class="quick-row reveal reveal-delay-2" id="foreign-trademark">
              <div class="quick-label">
                <small>Foreign Trademark</small>
                <strong>國外商標</strong>
              </div>
              <div class="pills">
                <a class="pill" href="foreign-trademark?tab=foreign-trademark-overview" id="pill-ft-1">國外商標制度<span class="pill-arrow">→</span></a>
                <a class="pill" href="foreign-trademark?tab=foreign-trademark-eutm" id="pill-ft-2">EUTM歐盟商標<span class="pill-arrow">→</span></a>
                <a class="pill" href="foreign-trademark?tab=foreign-trademark-search" id="pill-ft-3">商標檢索<span class="pill-arrow">→</span></a>
              </div>
            </div>

            <div class="quick-row reveal reveal-delay-3" id="domestic-trademark">
              <div class="quick-label">
                <small>Domestic Trademark</small>
                <strong>國內商標</strong>
              </div>
              <div class="pills">
                <a class="pill" href="domestic-trademark?tab=domestic-trademark-regulation" target="_blank" rel="noopener noreferrer" id="pill-dt-1">商標法規制度<span class="pill-arrow">→</span></a>
                <a class="pill" href="domestic-trademark?tab=domestic-trademark-flow" target="_blank" rel="noopener noreferrer" id="pill-dt-2">商標審查及行政救濟流程<span class="pill-arrow">→</span></a>
                <a class="pill" href="https://twtmsearch.tipo.gov.tw/OS0/OS0101.jsp" target="_blank" rel="noopener noreferrer" id="pill-dt-3">商標檢索<span class="pill-arrow">→</span></a>
              </div>
            </div>

          </div>
        </div>
      </section>

      <!-- BRIDGE / ABOUT -->
      <section class="bridge" id="about" aria-labelledby="bridge-title">
        <div class="container">
          <div class="bridge-inner">
            <div class="bridge-copy reveal">
              <div class="section-kicker reveal">From Taiwan to the World</div>
              <h2 class="section-title reveal reveal-delay-1" id="bridge-title">
                創新・保護・價值<br>
                <span class="accent">全球智慧財產的最佳夥伴</span>
              </h2>
              <p class="reveal reveal-delay-2">
                聯律國際專利商標事務所，提供專業、迅速、國際化的智慧財產權服務，從策略規劃、申請到訴訟應對，協助企業建立長期且完整的智財優勢。
              </p>

              <div class="stats reveal reveal-delay-3">
                <div class="stat">
                  <div class="stat-icon" aria-hidden="true">
                    <svg viewBox="0 0 24 24">
                      <path d="M4 21V5a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v16" />
                      <path d="M9 7h2M9 11h2M9 15h2M16 9h3a1 1 0 0 1 1 1v11M3 21h18" />
                    </svg>
                  </div>
                  <div class="stat-num"><span class="counter" data-target="30" data-suffix="+">0</span></div>
                  <div class="stat-label">服務國家</div>
                  <div class="stat-sub">全球布局</div>
                </div>

                <div class="stat">
                  <div class="stat-icon" aria-hidden="true">
                    <svg viewBox="0 0 24 24">
                      <path d="M7 2v3M17 2v3M3 9h18" />
                      <rect x="3" y="4" width="18" height="17" rx="3" />
                      <path d="M8 13h3M13 13h3M8 17h3" />
                    </svg>
                  </div>
                  <div class="stat-num"><span class="counter" data-target="20" data-suffix="+">0</span><span
                      style="font-size:18px;margin-left:2px">年</span></div>
                  <div class="stat-label">專業經驗</div>
                  <div class="stat-sub">深耕智財領域</div>
                </div>

                <div class="stat">
                  <div class="stat-icon" aria-hidden="true">
                    <svg viewBox="0 0 24 24">
                      <path d="M12 22s8-3.5 8-10V5l-8-3-8 3v7c0 6.5 8 10 8 10Z" />
                      <path d="m9 12 2 2 4-4" />
                    </svg>
                  </div>
                  <div class="stat-num"><span class="counter" data-target="99" data-suffix="%">0</span></div>
                  <div class="stat-label">客戶滿意度</div>
                  <div class="stat-sub">值得信賴的選擇</div>
                </div>
              </div>
            </div>

            <div class="bridge-visual reveal reveal-delay-2" aria-hidden="true">
              <div class="bridge-glow"></div>
              <div class="orbit"></div>
              <div class="orbit o2"></div>
              <div class="bridge-globe"></div>

              <div class="svc-card sc1">
                <div class="svc-icon"><svg viewBox="0 0 24 24">
                    <path d="M7 3h8l4 4v14H7z" />
                    <path d="M15 3v5h5M10 12h6M10 16h6" />
                  </svg></div>
                <div><span class="svc-card-text">專利申請</span><span class="svc-card-tag">Patent Filing</span></div>
              </div>

              <div class="svc-card sc2">
                <div class="svc-icon"><svg viewBox="0 0 24 24">
                    <circle cx="12" cy="12" r="9" />
                    <path d="M8.5 8.5h4a3 3 0 0 1 0 6h-4zM13 14.5l3 3" />
                  </svg></div>
                <div><span class="svc-card-text">商標註冊</span><span class="svc-card-tag">Trademark Registration</span>
                </div>
              </div>

              <div class="svc-card sc3">
                <div class="svc-icon"><svg viewBox="0 0 24 24">
                    <path d="M12 22s8-3.5 8-10V5l-8-3-8 3v7c0 6.5 8 10 8 10Z" />
                    <path d="m9 12 2 2 4-4" />
                  </svg></div>
                <div><span class="svc-card-text">智財策略</span><span class="svc-card-tag">IP Strategy</span></div>
              </div>

              <div class="svc-card sc4">
                <div class="svc-icon"><svg viewBox="0 0 24 24">
                    <path d="m14 4 6 6M12.5 5.5l6 6M5 19l7-7M4 20h6" />
                    <path d="m9 7 8 8" />
                  </svg></div>
                <div><span class="svc-card-text">專利審查</span><span class="svc-card-tag">Patent Examination</span></div>
              </div>

              <div class="svc-card sc5">
                <div class="svc-icon"><svg viewBox="0 0 24 24">
                    <circle cx="12" cy="12" r="9" />
                    <path d="M3 12h18M12 3a15 15 0 0 1 0 18M12 3a15 15 0 0 0 0 18" />
                  </svg></div>
                <div><span class="svc-card-text">全球代理網</span><span class="svc-card-tag">Global Network</span></div>
              </div>
            </div>
          </div>

          <div class="bridge-services reveal reveal-delay-3">
            <a class="bridge-service" href="#contact">
              <div class="bridge-service-icon"><svg viewBox="0 0 24 24">
                  <circle cx="11" cy="11" r="6" />
                  <path d="m15.5 15.5 4 4M11 8v6M8 11h6" />
                </svg></div>
              <div><strong>專利申請</strong><span>全球專利布局策略</span></div>
            </a>
            <a class="bridge-service" href="#contact">
              <div class="bridge-service-icon"><svg viewBox="0 0 24 24">
                  <circle cx="12" cy="12" r="9" />
                  <path d="M8.5 8.5h4a3 3 0 0 1 0 6h-4zM13 14.5l3 3" />
                </svg></div>
              <div><strong>商標保護</strong><span>品牌國際註冊服務</span></div>
            </a>
            <a class="bridge-service" href="#contact">
              <div class="bridge-service-icon"><svg viewBox="0 0 24 24">
                  <path d="m14 4 6 6M12.5 5.5l6 6M5 19l7-7M4 20h6" />
                  <path d="m9 7 8 8" />
                </svg></div>
              <div><strong>專利審查</strong><span>侵權與訴訟應對</span></div>
            </a>
            <a class="bridge-service" href="#contact">
              <div class="bridge-service-icon"><svg viewBox="0 0 24 24">
                  <circle cx="12" cy="12" r="9" />
                  <path d="M3 12h18M12 3a15 15 0 0 1 0 18M12 3a15 15 0 0 0 0 18" />
                </svg></div>
              <div><strong>全球布局</strong><span>多國代理合作網絡</span></div>
            </a>
            <a class="bridge-service" href="#contact">
              <div class="bridge-service-icon"><svg viewBox="0 0 24 24">
                  <path d="M16 21v-2a4 4 0 0 0-4-4H7a4 4 0 0 0-4 4v2" />
                  <circle cx="9.5" cy="7" r="4" />
                  <path d="M17 11h4M19 9v4" />
                </svg></div>
              <div><strong>客製諮詢</strong><span>量身打造智財策略</span></div>
            </a>
          </div>
        </div>
      </section>

    </main>

<?php include dirname(__FILE__) . "/include/footer.php"; ?>
