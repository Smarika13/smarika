<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}
$username = $_SESSION['username'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact — ConnectHub</title>
  <link rel="stylesheet" href="style.css">
</head>
<body class="page-dashboard">

  <!-- ── TOP NAVBAR ── -->
  <header class="dash-header">
    <div class="dash-header-inner">
      <div class="nav-brand">Connect<span>Hub</span></div>

      <nav class="dash-nav">
        <a href="dashboard.php" class="dash-nav-link">Home</a>
        <a href="about.php" class="dash-nav-link">About</a>
        <a href="contact.php" class="dash-nav-link active">Contact</a>
      </nav>

      <div class="dash-header-right">
        <span class="dash-user">👤 <?php echo htmlspecialchars($username); ?></span>
        <a href="logout.php" class="btn-outline btn-sm">Log Out</a>
      </div>
    </div>
  </header>

  <!-- ── MAIN CONTENT ── -->
  <main class="contact-main">
    <div class="contact-container">
      <h1 class="contact-heading">Get In Touch</h1>
      <p class="contact-intro">Have questions or want to learn more about Nepal's beautiful regions? We'd love to hear from you.</p>

      <div class="contact-grid">
        <!-- EMAIL -->
        <div class="contact-box">
          <div class="contact-icon">✉️</div>
          <h3>Email</h3>
          <p>support@connecthub.com</p>
          <a href="mailto:support@connecthub.com" class="contact-link">Send Email</a>
        </div>

        <!-- PHONE -->
        <div class="contact-box">
          <div class="contact-icon">📞</div>
          <h3>Phone</h3>
          <p>+977 1 4123456</p>
          <p class="contact-hours">Mon-Fri, 9am-6pm NPT</p>
        </div>

        <!-- LOCATION -->
        <div class="contact-box">
          <div class="contact-icon">📍</div>
          <h3>Location</h3>
          <p>Kathmandu, Nepal</p>
          <p class="contact-address">ConnectHub Headquarters</p>
        </div>

        <!-- OFFICE HOURS -->
        <div class="contact-box">
          <div class="contact-icon">🕐</div>
          <h3>Office Hours</h3>
          <p>Monday - Friday: 9:00 AM - 6:00 PM</p>
          <p>Saturday - Sunday: Closed</p>
        </div>
      </div>

      <!-- CONTACT FORM -->
      <section class="contact-form-section">
        <h2 class="form-heading">Send us a Message</h2>
        <form class="contact-form" method="POST" action="#">
          <div class="form-group">
            <label for="name">Name</label>
            <input type="text" id="name" name="name" required>
          </div>

          <div class="form-group">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" required>
          </div>

          <div class="form-group">
            <label for="subject">Subject</label>
            <input type="text" id="subject" name="subject" required>
          </div>

          <div class="form-group">
            <label for="message">Message</label>
            <textarea id="message" name="message" rows="5" required></textarea>
          </div>

          <button type="submit" class="btn-solid">Send Message</button>
        </form>
      </section>
    </div>
  </main>

</body>
</html>
