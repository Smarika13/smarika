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

  <!-- ── MAIN LAYOUT — 3 PARTITION LAYOUT ── -->
  <main class="dash-main-three-partition">

    <!-- ════ LEFT PARTITION — Image + Description + Table ════ -->
    <section class="partition-left">
      <div class="dash-card partition-card">
        <h4 class="card-title">Featured Content</h4>
        
        <!-- Image Block -->
        <div class="partition-img-block">
          <img
            src="images/image1.jpg"
            alt="Featured Image"
            class="partition-img"
            onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';"
          />
          <div class="partition-img-fallback">📷 Add your image here</div>
        </div>

        <!-- Image Description -->
        <div class="partition-img-desc">
          <strong>Mountain Paradise</strong>
          <p>A breathtaking view of nature's beauty captured at sunrise. Experience the serenity and majesty of mountain landscapes.</p>
          <span class="partition-meta">📅 June 2026</span>
        </div>

        <!-- Data Table -->
        <div class="table-wrap">
          <h5 class="table-title">Activity Summary</h5>
          <table class="partition-table">
            <thead>
              <tr>
                <th>Activity</th>
                <th>Count</th>
                <th>Status</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Posts</td>
                <td>128</td>
                <td><span class="badge badge-green">Active</span></td>
              </tr>
              <tr>
                <td>Comments</td>
                <td>45</td>
                <td><span class="badge badge-green">Active</span></td>
              </tr>
              <tr>
                <td>Likes Received</td>
                <td>340</td>
                <td><span class="badge badge-green">Active</span></td>
              </tr>
              <tr>
                <td>Friends</td>
                <td>87</td>
                <td><span class="badge badge-green">Active</span></td>
              </tr>
              <tr>
                <td>Groups Joined</td>
                <td>12</td>
                <td><span class="badge badge-orange">Pending</span></td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </section>

    <!-- ════ RIGHT PARTITION — Divided Horizontally ════ -->
    <section class="partition-right">
      
      <!-- Top Right Panel — Image + Description -->
      <div class="dash-card partition-card partition-card-top">
        <h4 class="card-title">Top Highlight</h4>
        
        <div class="partition-img-block">
          <img
            src="images/image2.jpg"
            alt="Top Highlight Image"
            class="partition-img"
            onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';"
          />
          <div class="partition-img-fallback">📷 Add your image here</div>
        </div>

        <div class="partition-img-desc">
          <strong>Urban Exploration</strong>
          <p>Discover the vibrant energy of city streets and modern architecture. A journey through contemporary design and urban culture.</p>
          <span class="partition-meta">📅 June 2026</span>
        </div>
      </div>

      <!-- Bottom Right Panel — Image + Description -->
      <div class="dash-card partition-card partition-card-bottom">
        <h4 class="card-title">Bottom Highlight</h4>
        
        <div class="partition-img-block">
          <img
            src="images/image3.jpg"
            alt="Bottom Highlight Image"
            class="partition-img"
            onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';"
          />
          <div class="partition-img-fallback">📷 Add your image here</div>
        </div>

        <div class="partition-img-desc">
          <strong>Nature's Tranquility</strong>
          <p>Immerse yourself in peaceful landscapes and serene natural environments. Find inspiration in the beauty of the great outdoors.</p>
          <span class="partition-meta">📅 June 2026</span>
        </div>
      </div>

    </section>

  </main>

</body>
</html>