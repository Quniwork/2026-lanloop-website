<?php
$zhPage = 'services.php';
$pageTitle = 'Services | Lan Loop International Patent & Trademark Office';
$pageDescription = 'Patent, trademark and international intellectual property filing, search, analysis, dispute and protection services.';
$pageStyles = array('assets/css/page.css', 'assets/css/services.css');
$activePage = 'services';
include dirname(__FILE__) . '/include/header.php';
?>

<main class="services-page">
  <section class="page-banner" aria-hidden="true"><div class="page-banner__image"></div></section>
  <div class="container">
    <div class="page-content">
      <header class="page-header" aria-labelledby="services-page-title">
        <h1 id="services-page-title">Services</h1>
        <nav class="page-breadcrumb" aria-label="Breadcrumb">
          <a href="en/index.php">Home</a><span aria-hidden="true">/</span><span aria-current="page">Services</span>
        </nav>
      </header>
      <div class="page-main">
        <section class="services-grid" aria-label="Intellectual property services">
          <article class="service-group reveal" id="patent-affairs">
            <h2>Patent Affairs</h2>
            <ul>
              <li>Applications for invention patents, utility models and designs</li>
              <li>Appeals, administrative proceedings and administrative remedies</li>
              <li>Patent prosecution, invalidation and dispute matters</li>
              <li>Licensing, assignment, record changes and amendments</li>
              <li>Prior-art searches</li>
              <li>Patent comparison, appraisal, analysis and opinions</li>
              <li>Advice on patent infringement prevention and enforcement</li>
            </ul>
          </article>
          <article class="service-group reveal reveal-delay-1" id="trademark-affairs">
            <h2>Trademark Affairs</h2>
            <ul>
              <li>Applications for trademark registration</li>
              <li>Trademark searches, comparison and analysis</li>
              <li>Appeals, administrative proceedings and administrative remedies</li>
              <li>Trademark opposition, invalidation and dispute matters</li>
              <li>Renewal, assignment, licensing, reissuance and record changes</li>
              <li>Advice on trademark infringement prevention and enforcement</li>
            </ul>
          </article>
          <article class="service-group reveal reveal-delay-2" id="foreign-affairs">
            <h2>Foreign Affairs</h2>
            <ul>
              <li>Patent and trademark searches abroad</li>
              <li>Patent and trademark applications abroad</li>
              <li>Protection of foreign patent and trademark rights</li>
            </ul>
          </article>
          <article class="service-group reveal reveal-delay-3">
            <h2>Supporting Services</h2>
            <ul>
              <li>Technical drawings, including perspective, assembly and in-use views</li>
              <li>Translation services</li>
            </ul>
          </article>
        </section>
      </div>
    </div>
  </div>
</main>

<?php include dirname(__FILE__) . '/include/footer.php'; ?>
