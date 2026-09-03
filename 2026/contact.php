<?php
session_start();

function contact_clean($value)
{
  return trim(stripslashes($value));
}

function contact_redirect($type, $message, $formData = array())
{
  $_SESSION['contact_status'] = array('type' => $type, 'message' => $message);
  if (!empty($formData)) {
    $_SESSION['contact_form'] = $formData;
  }
  header('Location: contact.php');
  exit;
}

if (isset($_SERVER['REQUEST_METHOD']) && $_SERVER['REQUEST_METHOD'] === 'POST') {
  $formData = array(
    'name' => contact_clean(isset($_POST['name']) ? $_POST['name'] : ''),
    'email' => contact_clean(isset($_POST['email']) ? $_POST['email'] : ''),
    'phone' => contact_clean(isset($_POST['phone']) ? $_POST['phone'] : ''),
    'content' => contact_clean(isset($_POST['content']) ? $_POST['content'] : '')
  );
  $postedToken = isset($_POST['csrf_token']) ? $_POST['csrf_token'] : '';
  $sessionToken = isset($_SESSION['csrf_token']) ? $_SESSION['csrf_token'] : '';

  if ($sessionToken === '' || $postedToken !== $sessionToken) {
    contact_redirect('error', '頁面已逾時，請確認表單內容後重新送出。', $formData);
  }

  if (!empty($_POST['website'])) {
    contact_redirect('error', '表單驗證失敗，請確認內容後重新送出。', $formData);
  }

  $name = $formData['name'];
  $email = $formData['email'];
  $phone = $formData['phone'];
  $content = $formData['content'];

  if ($name === '' || $email === '' || $phone === '' || $content === '') {
    contact_redirect('error', '姓名、信箱、電話與詢問內容尚未完整填寫，請補齊後再送出。', $formData);
  }

  if (!filter_var($email, FILTER_VALIDATE_EMAIL) || preg_match('/[\r\n]/', $email)) {
    contact_redirect('error', '信箱格式無效，請輸入例如 name@example.com 的信箱。', $formData);
  }

  $recipient = 'lanloop.lucky@msa.hinet.net';
  $subject = '=?UTF-8?B?' . base64_encode('客戶來信') . '?=';
  $safeName = htmlspecialchars($name, ENT_QUOTES, 'UTF-8');
  $safeEmail = htmlspecialchars($email, ENT_QUOTES, 'UTF-8');
  $safePhone = htmlspecialchars($phone, ENT_QUOTES, 'UTF-8');
  $safeContent = nl2br(htmlspecialchars($content, ENT_QUOTES, 'UTF-8'));
  $message = '<p>客戶來信，提醒您盡快回復詢問！</p>'
    . '<p>聯繫人：' . $safeName . '<br>'
    . '聯繫信箱：' . $safeEmail . '<br>'
    . '聯絡電話：' . $safePhone . '</p>'
    . '<p>內容：<br>' . $safeContent . '</p>';
  $headers = 'MIME-Version: 1.0' . "\r\n"
    . 'Content-Type: text/html; charset=UTF-8' . "\r\n"
    . 'From: Lan Loop Website <' . $recipient . '>' . "\r\n"
    . 'Reply-To: ' . $email . "\r\n";

  unset($_SESSION['csrf_token']);
  $sent = @mail($recipient, $subject, $message, $headers);

  if ($sent) {
    unset($_SESSION['contact_form']);
    contact_redirect('success', '感謝您的來信！我們將盡快為您處理。');
  }

  contact_redirect('error', '郵件目前無法寄出，請稍後再試或直接來電聯繫。', $formData);
}

if (empty($_SESSION['csrf_token'])) {
  $_SESSION['csrf_token'] = sha1(uniqid(mt_rand(), true));
}

$contactStatus = isset($_SESSION['contact_status']) ? $_SESSION['contact_status'] : null;
unset($_SESSION['contact_status']);
$contactForm = isset($_SESSION['contact_form']) ? $_SESSION['contact_form'] : array();
unset($_SESSION['contact_form']);

$pageTitle = '聯絡我們 | 聯律國際專利商標事務所';
$pageDescription = '聯絡聯律國際專利商標事務所，洽詢國內外專利、商標及智慧財產權服務。';
$pageStyles = array('assets/css/page.css', 'assets/css/contact.css');
$activePage = 'contact';
include dirname(__FILE__) . '/include/header.php';
?>

<main class="contact-page">
  <section class="page-banner contact-map" aria-label="聯律事務所位置">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3672.679639199235!2d120.239753!3d22.998805099999995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x346e76c8a9fc9069%3A0xb54889c2d10322ff!2zNzEw5Y-w5Y2X5biC5rC45bq35Y2A5bCP5p2x6LevNjg56Jmf!5e0!3m2!1szh-TW!2stw!4v1440423159214" title="聯律國際專利商標事務所位置地圖" loading="lazy"></iframe>
  </section>

  <div class="container">
    <div class="page-content">
      <header class="page-header" aria-labelledby="contact-title">
        <h1 id="contact-title">聯絡我們 <small>Contact Us</small></h1>
        <nav class="page-breadcrumb" aria-label="麵包屑">
          <a href="index.php">首頁</a>
          <span aria-hidden="true">/</span>
          <span aria-current="page">聯絡我們</span>
        </nav>
      </header>

      <section class="contact-content reveal" aria-label="聯絡與諮詢專區">
        <div class="contact-layout">
          <!-- 諮詢表單卡片 -->
          <div class="contact-form-card">

          <?php if ($contactStatus) { ?>
            <div class="contact-alert contact-alert--<?php echo $contactStatus['type']; ?>" role="status" tabindex="-1">
              <span class="contact-alert__icon" aria-hidden="true">
                <?php if ($contactStatus['type'] === 'success') { ?>
                  <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>
                <?php } else { ?>
                  <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><line x1="12" y1="8" x2="12" y2="12"/><line x1="12" y1="16" x2="12.01" y2="16"/></svg>
                <?php } ?>
              </span>
              <div class="contact-alert__content">
                <?php echo htmlspecialchars($contactStatus['message'], ENT_QUOTES, 'UTF-8'); ?>
              </div>
            </div>
<?php } ?>

            <form class="contact-form" method="post" action="contact.php" novalidate>
              <div class="contact-form-grid">
                <div class="contact-field-group">
                  <label for="contact-name" class="contact-label">
                    <span>聯絡姓名</span>
                    <span class="contact-badge-req">必填</span>
                  </label>
                  <div class="contact-input-wrap">
                    <span class="contact-input-icon" aria-hidden="true">
                      <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/></svg>
                    </span>
                    <input id="contact-name" class="contact-input" type="text" name="name" required aria-required="true" autocomplete="name" maxlength="80" placeholder="請輸入您的稱呼或公司寶號" value="<?php echo isset($contactForm['name']) ? htmlspecialchars($contactForm['name'], ENT_QUOTES, 'UTF-8') : ''; ?>">
                  </div>
                </div>

                <div class="contact-field-group">
                  <label for="contact-phone" class="contact-label">
                    <span>聯絡電話</span>
                    <span class="contact-badge-req">必填</span>
                  </label>
                  <div class="contact-input-wrap">
                    <span class="contact-input-icon" aria-hidden="true">
                      <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
                    </span>
                    <input id="contact-phone" class="contact-input" type="tel" name="phone" required aria-required="true" autocomplete="tel" maxlength="40" placeholder="例：0912-345-678 或 (06) 123-4567" value="<?php echo isset($contactForm['phone']) ? htmlspecialchars($contactForm['phone'], ENT_QUOTES, 'UTF-8') : ''; ?>">
                  </div>
                </div>
              </div>

              <div class="contact-field-group contact-field-group--full">
                <label for="contact-email" class="contact-label">
                  <span>電子信箱</span>
                  <span class="contact-badge-req">必填</span>
                </label>
                <div class="contact-input-wrap">
                  <span class="contact-input-icon" aria-hidden="true">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="4" width="20" height="16" rx="2"/><path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"/></svg>
                  </span>
                  <input id="contact-email" class="contact-input" type="email" name="email" required aria-required="true" autocomplete="email" maxlength="160" placeholder="例如：yourname@example.com" value="<?php echo isset($contactForm['email']) ? htmlspecialchars($contactForm['email'], ENT_QUOTES, 'UTF-8') : ''; ?>">
                </div>
              </div>

              <div class="contact-field-group contact-field-group--full">
                <label for="contact-content" class="contact-label">
                  <span>詢問內容與案件說明</span>
                  <span class="contact-badge-req">必填</span>
                </label>
                <div class="contact-textarea-wrap">
                  <textarea id="contact-content" class="contact-textarea" name="content" required aria-required="true" maxlength="5000" rows="6" placeholder="請簡述您的需求（例如：國內外專利申請評估、商標類別註冊、智財權侵權防範或合約諮詢等），以利我們指派專責代理人精確答覆。"><?php echo isset($contactForm['content']) ? htmlspecialchars($contactForm['content'], ENT_QUOTES, 'UTF-8') : ''; ?></textarea>
                </div>
              </div>

              <div class="contact-honeypot" aria-hidden="true">
                <label>網站<input type="text" name="website" tabindex="-1" autocomplete="off"></label>
              </div>

              <input type="hidden" name="csrf_token" value="<?php echo htmlspecialchars($_SESSION['csrf_token'], ENT_QUOTES, 'UTF-8'); ?>">

              <div class="contact-form-footer">
                <div class="contact-form-note">
                  <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><circle cx="12" cy="12" r="10"/><line x1="12" y1="16" x2="12" y2="12"/><line x1="12" y1="8" x2="12.01" y2="8"/></svg>
                  <span>資料傳輸經加密防護，絕不向未授權第三方透露。</span>
                </div>
                <div class="contact-actions">
                  <button class="contact-btn contact-btn--reset" type="reset">
                    清除內容
                  </button>
                  <button class="contact-btn contact-btn--submit" type="submit">
                    <span>送出諮詢內容</span>
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
                  </button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </section>
    </div>
  </div>
</main>

<?php include dirname(__FILE__) . '/include/footer.php'; ?>
