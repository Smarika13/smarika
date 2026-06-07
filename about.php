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
  <title>About — ConnectHub</title>
  <link rel="stylesheet" href="style.css">
</head>
<body class="page-dashboard">

  <!-- ── TOP NAVBAR ── -->
  <header class="dash-header">
    <div class="dash-header-inner">
      <div class="nav-brand">Connect<span>Hub</span></div>

      <nav class="dash-nav">
        <a href="dashboard.php" class="dash-nav-link">Home</a>
        <a href="about.php" class="dash-nav-link active">About</a>
        <a href="contact.php" class="dash-nav-link">Contact</a>
      </nav>

      <div class="dash-header-right">
        <span class="dash-user">👤 <?php echo htmlspecialchars($username); ?></span>
        <a href="logout.php" class="btn-outline btn-sm">Log Out</a>
      </div>
    </div>
  </header>

  <!-- ── MAIN CONTENT ── -->
  <main class="about-main">
    <div class="about-container">
      <h1 class="about-heading">Discover Nepal's Three Regions</h1>
      <p class="about-intro">Explore the diverse landscapes and unique places that make Nepal a destination like no other.</p>

      <!-- MOUNTAINS SECTION -->
      <section class="about-section">
        <h2 class="section-title">The Himalayas - Mountains</h2>
        <div class="places-grid">
          <div class="place-card">
            <h3>Mount Everest</h3>
            <p>The world's highest peak standing at 8,849m. A dream destination for mountaineers and adventurers seeking the ultimate climbing challenge.</p>
          </div>
          <div class="place-card">
            <h3>Sagarmatha National Park</h3>
            <p>UNESCO World Heritage site protecting pristine alpine ecosystems and serving as the gateway to Everest trekking adventures.</p>
          </div>
          <div class="place-card">
            <h3>Khumbu Valley</h3>
            <p>Home to the Sherpa people, this valley offers stunning mountain vistas, ancient monasteries, and world-class trekking routes.</p>
          </div>
          <div class="place-card">
            <h3>Langtang Valley</h3>
            <p>A spectacular trekking destination featuring Tibetan culture, rhododendron forests, and panoramic Himalayan views.</p>
          </div>
        </div>
      </section>

      <!-- HILLS SECTION -->
      <section class="about-section">
        <h2 class="section-title">The Hills - Forests & Culture</h2>
        <div class="places-grid">
          <div class="place-card">
            <h3>Kathmandu Valley</h3>
            <p>Nepal's cultural heart featuring ancient temples, vibrant markets, and a blend of Hindu and Buddhist heritage spanning centuries.</p>
          </div>
          <div class="place-card">
            <h3>Pokhara</h3>
            <p>A serene lakeside city surrounded by forest-clad hills, offering stunning views of the Annapurna range and gateway to trekking adventures.</p>
          </div>
          <div class="place-card">
            <h3>Nagarkot</h3>
            <p>A picturesque hill station known for its sunrise views, dense pine forests, and authentic Nepali village atmosphere.</p>
          </div>
          <div class="place-card">
            <h3>Bandipur</h3>
            <p>A preserved 18th-century trading town on the hill slopes, featuring traditional Newari architecture and charming local culture.</p>
          </div>
        </div>
      </section>

      <!-- TERAI SECTION -->
      <section class="about-section">
        <h2 class="section-title">The Terai - Plains & Wildlife</h2>
        <div class="places-grid">
          <div class="place-card">
            <h3>Chitwan National Park</h3>
            <p>A UNESCO site and prime wildlife destination home to Bengal tigers, Indian rhinos, and diverse bird species in the sal forests.</p>
          </div>
          <div class="place-card">
            <h3>Koshi Tappu Wildlife Reserve</h3>
            <p>A critical wetland ecosystem attracting migratory birds and supporting endangered species in its pristine natural habitat.</p>
          </div>
          <div class="place-card">
            <h3>Janakpur</h3>
            <p>An ancient city of cultural significance famous for the Janaki Mandir temple and traditional Mithila art traditions.</p>
          </div>
          <div class="place-card">
            <h3>Birgunj</h3>
            <p>A major trade hub in the Terai plains, serving as Nepal's gateway to India and an important industrial and commercial center.</p>
          </div>
        </div>
      </section>
    </div>
  </main>

</body>
</html>
