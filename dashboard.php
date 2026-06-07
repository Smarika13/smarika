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
        <a href="dashboard.php" class="dash-nav-link active">Home</a>
        <a href="about.php" class="dash-nav-link">About</a>
        <a href="contact.php" class="dash-nav-link">Contact</a>
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
            src="images/nature1.jpg"
            alt="Featured Image"
            class="partition-img"
            onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';"
          />
          <div class="partition-img-fallback">📷 Add your image here</div>
        </div>

        <!-- Image Description -->
        <div class="partition-img-desc">
          <p>The snow-capped majesty of Nepal's mighty Himalayas stand as eternal guardians of the land. These towering peaks touch the clouds, offering breathtaking vistas and spiritual tranquility to all who behold them. Home to Mount Everest and some of the world's highest peaks, the Himalayan region is a sacred destination for trekkers, mountaineers, and spiritual seekers. The pristine alpine environment showcases nature's raw power with its glaciers, pristine rivers, and unique ecosystem that has been shaped over millennia. In winter, these mountains become a blanket of white snow, while in spring they come alive with rhododendron blooms painting the slopes in vibrant colors.</p>
        </div>

        <!-- Data Table -->
        <div class="table-wrap">
          <h5 class="table-title">Nepal's Three Regions</h5>
          <table class="partition-table">
            <thead>
              <tr>
                <th>Aspects</th>
                <th>Mountains</th>
                <th>Hills</th>
                <th>Terai</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td><strong>Altitude</strong></td>
                <td>3,000m+</td>
                <td>1,000-3,000m</td>
                <td>Below 300m</td>
              </tr>
              <tr>
                <td><strong>Climate</strong></td>
                <td>Alpine & Cold</td>
                <td>Temperate</td>
                <td>Subtropical</td>
              </tr>
              <tr>
                <td><strong>Vegetation</strong></td>
                <td>Snow & Glaciers</td>
                <td>Forests & Trees</td>
                <td>Farmlands</td>
              </tr>
              <tr>
                <td><strong>Wildlife</strong></td>
                <td>Mountain Goats</td>
                <td>Red Panda</td>
                <td>Bengal Tiger</td>
              </tr>
              <tr>
                <td><strong>Economy</strong></td>
                <td>Tourism</td>
                <td>Agriculture</td>
                <td>Industry</td>
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
            src="images/nature2.jpg"
            alt="Top Highlight Image"
            class="partition-img"
            onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';"
          />
          <div class="partition-img-fallback">📷 Add your image here</div>
        </div>

        <div class="partition-img-desc">
          <p>Rolling hills draped in vibrant green forests create a picturesque landscape unique to Nepal. These verdant slopes are home to diverse flora and fauna, representing the untamed beauty of the Nepali countryside. The hills region forms a natural bridge between the towering Himalayas and the fertile plains below, creating a moderate climate that supports thriving communities and lush vegetation. Ancient forests cover much of this terrain, harboring endangered species like the red panda and Himalayan musk deer. Traditional villages perched on hillsides showcase authentic Nepali culture and architecture, while trekking routes wind through terraced farms, oak and rhododendron forests, and misty mountain vistas that have captivated travelers for generations.</p>
        </div>
      </div>

      <!-- Bottom Right Panel — Image + Description -->
      <div class="dash-card partition-card partition-card-bottom">
        <h4 class="card-title">Bottom Highlight</h4>
        
        <div class="partition-img-block">
          <img
            src="images/nature3.jpg"
            alt="Bottom Highlight Image"
            class="partition-img"
            onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';"
          />
          <div class="partition-img-fallback">📷 Add your image here</div>
        </div>

        <div class="partition-img-desc">
          <p>The Terai region spreads across southern Nepal with its rich agricultural lands and abundant biodiversity. This fertile belt is the lifeblood of Nepal, offering endless golden fields and natural treasures beneath the open sky. Blessed with abundant water resources from the Himalayan rivers, the Terai is Nepal's most agriculturally productive region, supplying rice, wheat, sugarcane, and other crops that feed the nation. The landscape features vast plains with scattered forests and national parks like Chitwan, home to endangered species such as Bengal tigers, Indian rhinos, and gharials. The region's subtropical climate and natural resources have made it a crucial center for commerce, industry, and settlement, while maintaining pockets of pristine wilderness that showcase the remarkable diversity of Nepal's ecological heritage.</p>
        </div>
      </div>

    </section>

  </main>

</body>
</html>