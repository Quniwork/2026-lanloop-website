<?php
session_start();

function en_contact_clean($value)
{
  return trim(stripslashes($value));
}

function en_contact_redirect($type, $message, $formData)
{
  $_SESSION['en_contact_status'] = array('type' => $type, 'message' => $message);
  if (!empty($formData)) {
    $_SESSION['en_contact_form'] = $formData;
  }
  header('Location: contact.php');
  exit;
}

if (isset($_SERVER['REQUEST_METHOD']) && $_SERVER['REQUEST_METHOD'] === 'POST') {
  $formData = array(
    'name' => en_contact_clean(isset($_POST['name']) ? $_POST['name'] : ''),
    'email' => en_contact_clean(isset($_POST['email']) ? $_POST['email'] : ''),
    'phone' => en_contact_clean(isset($_POST['phone']) ? $_POST['phone'] : ''),
    'content' => en_contact_clean(isset($_POST['content']) ? $_POST['content'] : '')
  );
  $postedToken = isset($_POST['csrf_token']) ? $_POST['csrf_token'] : '';
  $sessionToken = isset($_SESSION['en_csrf_token']) ? $_SESSION['en_csrf_token'] : '';

  if ($sessionToken === '' || $postedToken !== $sessionToken) {
    en_contact_redirect('error', 'This page has expired. Review your message and send it again.', $formData);
  }
  if (!empty($_POST['website'])) {
    en_contact_redirect('error', 'The form could not be verified. Review your message and send it again.', $formData);
  }

  $name = $formData['name'];
  $email = $formData['email'];
  $phone = $formData['phone'];
  $content = $formData['content'];

  if ($name === '' || $email === '' || $phone === '' || $content === '') {
    en_contact_redirect('error', 'Name, email, telephone and enquiry details are required. Complete every field and send again.', $formData);
  }
  if (!filter_var($email, FILTER_VALIDATE_EMAIL) || preg_match('/[\r\n]/', $email)) {
    en_contact_redirect('error', 'The email address is not valid. Use a format such as name@example.com.', $formData);
  }

  $recipient = 'lanloop.lucky@msa.hinet.net';
  $subject = '=?UTF-8?B?' . base64_encode('English website enquiry') . '?=';
  $safeName = htmlspecialchars($name, ENT_QUOTES, 'UTF-8');
  $safeEmail = htmlspecialchars($email, ENT_QUOTES, 'UTF-8');
  $safePhone = htmlspecialchars($phone, ENT_QUOTES, 'UTF-8');
  $safeContent = nl2br(htmlspecialchars($content, ENT_QUOTES, 'UTF-8'));
  $message = '<p>A new enquiry was submitted through the English website.</p>'
    . '<p>Name or company: ' . $safeName . '<br>'
    . 'Email: ' . $safeEmail . '<br>'
    . 'Telephone: ' . $safePhone . '</p>'
    . '<p>Enquiry:<br>' . $safeContent . '</p>';
  $headers = 'MIME-Version: 1.0' . "\r\n"
    . 'Content-Type: text/html; charset=UTF-8' . "\r\n"
    . 'From: Lan Loop Website <' . $recipient . '>' . "\r\n"
    . 'Reply-To: ' . $email . "\r\n";

  unset($_SESSION['en_csrf_token']);
  $sent = @mail($recipient, $subject, $message, $headers);
  if ($sent) {
    unset($_SESSION['en_contact_form']);
    en_contact_redirect('success', 'Your enquiry has been sent. Our office will respond as soon as possible.', array());
  }
  en_contact_redirect('error', 'The message could not be sent. Try again later or contact our office by telephone.', $formData);
}

if (empty($_SESSION['en_csrf_token'])) {
  $_SESSION['en_csrf_token'] = sha1(uniqid(mt_rand(), true));
}

$contactStatus = isset($_SESSION['en_contact_status']) ? $_SESSION['en_contact_status'] : null;
unset($_SESSION['en_contact_status']);
$contactForm = isset($_SESSION['en_contact_form']) ? $_SESSION['en_contact_form'] : array();
unset($_SESSION['en_contact_form']);

$zhPage = 'contact.php';
$pageTitle = 'Contact Us | Lan Loop International Patent & Trademark Office';
$pageDescription = 'Contact Lan Loop in Tainan, Taiwan about patent, trademark and intellectual property matters.';
$pageStyles = array('assets/css/page.css', 'assets/css/contact.css');
$activePage = 'contact';
include dirname(__FILE__) . '/include/header.php';
?>

<main class="contact-page">
  <section class="page-banner contact-map" aria-label="Office location">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3672.679639199235!2d120.239753!3d22.998805099999995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x346e76c8a9fc9069%3A0xb54889c2d10322ff!2zNzEw5Y-w5Y2X5biC5rC45bq35Y2A5bCP5p2x6LevNjg56Jmf!5e0!3m2!1szh-TW!2stw!4v1440423159214" title="Lan Loop office location" loading="lazy"></iframe>
  </section>
  <div class="container">
    <div class="page-content">
      <header class="page-header" aria-labelledby="contact-page-title">
        <h1 id="contact-page-title">Contact Us</h1>
        <nav class="page-breadcrumb" aria-label="Breadcrumb">
          <a href="en/index.php">Home</a><span aria-hidden="true">/</span><span aria-current="page">Contact Us</span>
        </nav>
      </header>
      <section class="contact-content" aria-label="Enquiry form">
        <div class="contact-layout">
          <div class="contact-form-card">
<?php if ($contactStatus) { ?>
            <div class="contact-alert contact-alert--<?php echo htmlspecialchars($contactStatus['type'], ENT_QUOTES, 'UTF-8'); ?>" role="status" tabindex="-1">
              <div class="contact-alert__content"><?php echo htmlspecialchars($contactStatus['message'], ENT_QUOTES, 'UTF-8'); ?></div>
            </div>
<?php } ?>
            <form class="contact-form" id="contactForm" method="post" action="en/contact.php">
              <div class="contact-form-grid">
                <div class="contact-field-group">
                  <label for="contact-name" class="contact-label"><span>Name or company</span><span class="contact-badge-req">Required</span></label>
                  <div class="contact-input-wrap"><input id="contact-name" class="contact-input" type="text" name="name" required aria-required="true" autocomplete="name" maxlength="80" placeholder="Your name or company" value="<?php echo isset($contactForm['name']) ? htmlspecialchars($contactForm['name'], ENT_QUOTES, 'UTF-8') : ''; ?>"></div>
                </div>
                <div class="contact-field-group">
                  <label for="contact-phone" class="contact-label"><span>Telephone</span><span class="contact-badge-req">Required</span></label>
                  <div class="contact-input-wrap"><input id="contact-phone" class="contact-input" type="tel" name="phone" required aria-required="true" autocomplete="tel" maxlength="40" placeholder="+886 6 123 4567" value="<?php echo isset($contactForm['phone']) ? htmlspecialchars($contactForm['phone'], ENT_QUOTES, 'UTF-8') : ''; ?>"></div>
                </div>
              </div>
              <div class="contact-field-group contact-field-group--full">
                <label for="contact-email" class="contact-label"><span>Email address</span><span class="contact-badge-req">Required</span></label>
                <div class="contact-input-wrap"><input id="contact-email" class="contact-input" type="email" name="email" required aria-required="true" autocomplete="email" maxlength="160" placeholder="name@example.com" value="<?php echo isset($contactForm['email']) ? htmlspecialchars($contactForm['email'], ENT_QUOTES, 'UTF-8') : ''; ?>"></div>
              </div>
              <div class="contact-field-group contact-field-group--full">
                <label for="contact-content" class="contact-label"><span>Enquiry details</span><span class="contact-badge-req">Required</span></label>
                <div class="contact-textarea-wrap"><textarea id="contact-content" class="contact-textarea" name="content" required aria-required="true" maxlength="5000" rows="7" placeholder="Tell us which countries, patent or trademark matters, and deadlines are relevant."><?php echo isset($contactForm['content']) ? htmlspecialchars($contactForm['content'], ENT_QUOTES, 'UTF-8') : ''; ?></textarea></div>
              </div>
              <div class="contact-honeypot" aria-hidden="true"><label>Website<input type="text" name="website" tabindex="-1" autocomplete="off"></label></div>
              <input type="hidden" name="csrf_token" value="<?php echo htmlspecialchars($_SESSION['en_csrf_token'], ENT_QUOTES, 'UTF-8'); ?>">
              <div class="contact-form-footer">
                <div class="contact-form-note">Your information will be used only to respond to this enquiry.</div>
                <div class="contact-actions">
                  <button class="contact-btn contact-btn--reset" type="reset">Clear</button>
                  <button class="contact-btn contact-btn--submit" id="contactSubmit" type="submit"><span id="contactSubmitLabel">Send enquiry</span><span aria-hidden="true">&rarr;</span></button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </section>
    </div>
  </div>
</main>

<script>
  (function () {
    var form = document.getElementById('contactForm');
    var submit = document.getElementById('contactSubmit');
    var label = document.getElementById('contactSubmitLabel');
    if (!form || !submit || !label) { return; }

    var fields = form.querySelectorAll('input[required], textarea[required]');
    for (var i = 0; i < fields.length; i += 1) {
      fields[i].addEventListener('invalid', function () {
        this.setAttribute('aria-invalid', 'true');
      });
      fields[i].addEventListener('input', function () {
        if (this.validity.valid) { this.removeAttribute('aria-invalid'); }
      });
    }

    form.addEventListener('submit', function () {
      if (!form.checkValidity()) { return; }
      submit.setAttribute('data-state', 'loading');
      submit.setAttribute('aria-disabled', 'true');
      submit.disabled = true;
      label.innerHTML = 'Sending&hellip;';
    });
  }());
</script>

<?php include dirname(__FILE__) . '/include/footer.php'; ?>
