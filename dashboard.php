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
  <title>Dashboard — ConnectHub</title>
  <link rel="stylesheet" href="style.css">
</head>
<body class="page-dashboard">

  <!-- ── TOP NAVBAR ── -->
  <header class="dash-header">
    <div class="dash-header-inner">
      <div class="nav-brand">Connect<span>Hub</span></div>

      <nav class="dash-nav">
        <a href="#home" class="dash-nav-link active">Home</a>
        <a href="#about" class="dash-nav-link">About</a>
        <a href="#contact" class="dash-nav-link">Contact</a>
      </nav>

      <div class="dash-header-right">
        <span class="dash-user">👤 <?php echo htmlspecialchars($username); ?></span>
        <a href="logout.php" class="btn-outline btn-sm">Log Out</a>
      </div>
    </div>
  </header>

  <!-- ── MAIN LAYOUT ── -->
  <main class="dash-main">

    <!-- ════ LEFT COLUMN ════ -->
    <aside class="dash-left">

      <!-- Profile Card -->
      <div class="dash-card profile-card">
        <div class="profile-avatar">
          <?php echo strtoupper(substr($username, 0, 1)); ?>
        </div>
        <h3 class="profile-name"><?php echo htmlspecialchars($username); ?></h3>
        <p class="profile-tag">@<?php echo strtolower(htmlspecialchars($username)); ?></p>
        <div class="profile-stats">
          <div class="stat"><strong>128</strong><span>Posts</span></div>
          <div class="stat"><strong>340</strong><span>Friends</span></div>
          <div class="stat"><strong>12</strong><span>Groups</span></div>
        </div>
      </div>

      <!-- Quick Links -->
      <div class="dash-card">
        <h4 class="card-title">Quick Links</h4>
        <ul class="quick-links">
          <li><a href="#home">🏠 Home Feed</a></li>
          <li><a href="#about">📄 About Me</a></li>
          <li><a href="#contact">📬 Contact</a></li>
          <li><a href="#">👥 Friends</a></li>
          <li><a href="#">📸 Photos</a></li>
          <li><a href="#">🔔 Notifications</a></li>
        </ul>
      </div>

      <!-- Activity Table -->
      <div class="dash-card">
        <h4 class="card-title">Recent Activity</h4>
        <div class="table-wrap">
          <table class="activity-table">
            <thead>
              <tr>
                <th>Activity</th>
                <th>Date</th>
                <th>Status</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Posted a photo</td>
                <td>Jun 1</td>
                <td><span class="badge badge-green">Done</span></td>
              </tr>
              <tr>
                <td>Added a friend</td>
                <td>May 30</td>
                <td><span class="badge badge-green">Done</span></td>
              </tr>
              <tr>
                <td>Updated profile</td>
                <td>May 28</td>
                <td><span class="badge badge-orange">Pending</span></td>
              </tr>
              <tr>
                <td>Joined group</td>
                <td>May 25</td>
                <td><span class="badge badge-green">Done</span></td>
              </tr>
              <tr>
                <td>Sent message</td>
                <td>May 22</td>
                <td><span class="badge badge-green">Done</span></td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>

    </aside>

    <!-- ════ CENTER FEED ════ -->
    <section class="dash-center">

      <!-- HOME Section -->
      <div id="home" class="section-block">
        <h2 class="section-heading">Home Feed</h2>

        <!-- Post Box -->
        <div class="dash-card post-box">
          <div class="post-box-top">
            <div class="post-avatar"><?php echo strtoupper(substr($username, 0, 1)); ?></div>
            <input type="text" placeholder="What's on your mind, <?php echo htmlspecialchars($username); ?>?" class="post-input" readonly/>
          </div>
          <div class="post-box-actions">
            <button class="post-action-btn">📸 Photo</button>
            <button class="post-action-btn">🎥 Video</button>
            <button class="post-action-btn">😊 Feeling</button>
          </div>
        </div>

        <!-- Feed Posts -->
        <div class="dash-card feed-post">
          <div class="post-header">
            <div class="post-avatar">A</div>
            <div>
              <strong>Alice Johnson</strong>
              <p class="post-time">2 hours ago</p>
            </div>
          </div>
          <p class="post-body">Just finished my project! So happy with how it turned out 🎉 Hard work really does pay off.</p>
          <div class="post-footer">
            <button class="react-btn">👍 Like</button>
            <button class="react-btn">💬 Comment</button>
            <button class="react-btn">↗ Share</button>
          </div>
        </div>

        <div class="dash-card feed-post">
          <div class="post-header">
            <div class="post-avatar" style="background:#4a90d9;">B</div>
            <div>
              <strong>Bob Martinez</strong>
              <p class="post-time">Yesterday</p>
            </div>
          </div>
          <p class="post-body">Beautiful morning in Kathmandu today. The mountains are absolutely stunning from here 🏔️</p>
          <div class="post-footer">
            <button class="react-btn">👍 Like</button>
            <button class="react-btn">💬 Comment</button>
            <button class="react-btn">↗ Share</button>
          </div>
        </div>

      </div>

      <!-- ABOUT Section -->
      <div id="about" class="section-block">
        <h2 class="section-heading">About</h2>
        <div class="dash-card">
          <p class="about-intro">ConnectHub is a social platform built for real connections. Share your life, discover others, and build a community that matters to you.</p>
          <div class="about-grid">
            <div class="about-item">
              <span class="about-icon">🌍</span>
              <div>
                <strong>Global Community</strong>
                <p>Connect with people from every corner of the world.</p>
              </div>
            </div>
            <div class="about-item">
              <span class="about-icon">🔒</span>
              <div>
                <strong>Private & Secure</strong>
                <p>Your data is protected with encrypted passwords and secure sessions.</p>
              </div>
            </div>
            <div class="about-item">
              <span class="about-icon">⚡</span>
              <div>
                <strong>Built with PHP</strong>
                <p>Powered by PHP, MySQL, and Apache via XAMPP.</p>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- CONTACT Section -->
      <div id="contact" class="section-block">
        <h2 class="section-heading">Contact</h2>
        <div class="dash-card">
          <div class="contact-grid">
            <div class="contact-item">
              <span class="contact-icon">📧</span>
              <div>
                <strong>Email</strong>
                <p>support@connecthub.com</p>
              </div>
            </div>
            <div class="contact-item">
              <span class="contact-icon">📍</span>
              <div>
                <strong>Location</strong>
                <p>Kathmandu, Nepal</p>
              </div>
            </div>
            <div class="contact-item">
              <span class="contact-icon">🕐</span>
              <div>
                <strong>Support Hours</strong>
                <p>Sun–Fri, 9am – 6pm NPT</p>
              </div>
            </div>
          </div>
        </div>
      </div>

    </section>

    <!-- ════ RIGHT COLUMN ════ -->
    <aside class="dash-right">

      <!-- Upper panel — swap image1.jpg with your own file -->
      <div class="dash-card right-panel">
        <h4 class="card-title">Featured</h4>
        <div class="right-img-block">
          <img
            src="images/image1.jpg"
            alt="Featured Image 1"
            class="right-img"
            onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';"
          />
          <div class="right-img-fallback">📷 Add your image here</div>
          <div class="right-img-desc">
            <strong>Your Image Title</strong>
            <p class="right-img-caption">Add a short description about this image. You can write anything you like here.</p>
            <span class="right-img-meta">📅 June 2026</span>
          </div>
        </div>
      </div>

      <!-- Horizontal divider between panels -->
      <div class="right-divider"></div>

      <!-- Lower panel — swap image2.jpg with your own file -->
      <div class="dash-card right-panel">
        <h4 class="card-title">Highlight</h4>
        <div class="right-img-block">
          <img
            src="images/image2.jpg"
            alt="Featured Image 2"
            class="right-img"
            onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';"
          />
          <div class="right-img-fallback">📷 Add your image here</div>
          <div class="right-img-desc">
            <strong>Your Image Title</strong>
            <p class="right-img-caption">Add a short description about this image. You can write anything you like here.</p>
            <span class="right-img-meta">📅 June 2026</span>
          </div>
        </div>
      </div>

      <!-- Online Friends -->
      <div class="dash-card">
        <h4 class="card-title">Online Now</h4>
        <ul class="online-list">
          <li><span class="online-dot"></span> Alice Johnson</li>
          <li><span class="online-dot"></span> Bob Martinez</li>
          <li><span class="online-dot"></span> Priya Sharma</li>
          <li><span class="online-dot"></span> Rajan Thapa</li>
        </ul>
      </div>

    </aside>

  </main>

</body>
</html>