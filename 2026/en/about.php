<?php
$zhPage = 'about.php';
$pageTitle = 'About Lan Loop | International Patent & Trademark Office';
$pageDescription = 'Learn about Lan Loop and our experience in patent and trademark filing, searches, analysis and infringement appraisal.';
$pageStyles = array('assets/css/page.css', 'assets/css/about.css');
$activePage = 'about';
include dirname(__FILE__) . '/include/header.php';
?>

<main class="about-page">
  <section class="page-banner" aria-hidden="true"><div class="page-banner__image"></div></section>
  <div class="container">
    <div class="page-content">
      <header class="page-header" aria-labelledby="about-page-title">
        <h1 id="about-page-title">About Lan Loop</h1>
        <nav class="page-breadcrumb" aria-label="Breadcrumb">
          <a href="en/index.php">Home</a><span aria-hidden="true">/</span><span aria-current="page">About Us</span>
        </nav>
      </header>
      <div class="page-main">
        <section class="about-intro" aria-label="About Lan Loop">
          <div class="about-intro__image reveal reveal-left">
            <img src="assets/images/page2_img1.webp" alt="Lan Loop International Patent and Trademark Office" width="338" height="250" loading="lazy" decoding="async">
          </div>
          <div class="about-intro__content reveal reveal-right reveal-delay-1">
            <p>Lan Loop International Patent and Trademark Office was established in 1993 in Tainan City, Taiwan. We provide professional services relating to domestic and foreign patents, trademarks and other intellectual property rights.</p>
            <p>In a knowledge-based economy, our guiding principle is to give clients comprehensive information and secure appropriate protection when filing applications. This helps clients understand both their own position and that of their competitors, strengthening their ability to compete.</p>
            <p>Our team has extensive practical experience in patent and trademark filing, searching, analysis and infringement appraisal in Taiwan and abroad. Before filing, we provide relevant domestic and international information to help clients avoid conflicts with existing designs, reduce duplicated research and filing costs, and improve their applications through informed analysis and discussion.</p>
            <p>We aim to support each client’s business operations and market development with clear, practical intellectual property advice.</p>
          </div>
        </section>
      </div>
    </div>
  </div>
</main>

<?php include dirname(__FILE__) . '/include/footer.php'; ?>
