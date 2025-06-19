<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Our Services - XATEC Customs</title>
  <link href="https://fonts.googleapis.com/css2?family=Anton&family=Roboto:wght@400;700&display=swap" rel="stylesheet"/>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: 'Roboto', sans-serif;
      background: #0d0d0d;
      color: #fff;
      overflow-x: hidden;
    }

    header {
      background-color: #111;
      padding: 1rem 2rem;
      display: flex;
      justify-content: space-between;
      align-items: center;
    }

    .logo {
      font-family: 'Anton', sans-serif;
      font-size: 2rem;
      color: #fff;
    }

    .logo span {
      color: red;
    }

    nav a {
      color: white;
      margin-left: 2rem;
      text-decoration: none;
      font-weight: bold;
      position: relative;
    }

    nav a::after {
      content: '';
      position: absolute;
      width: 0%;
      height: 2px;
      bottom: -4px;
      left: 0;
      background-color: red;
      transition: 0.3s ease;
    }

    nav a:hover::after {
      width: 100%;
    }

    .services-section {
      padding: 4rem 2rem;
      text-align: center;
    }

    .services-section h1 {
      font-family: 'Anton', sans-serif;
      font-size: 3rem;
      color: red;
      margin-bottom: 2rem;
    }

    .services-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
      gap: 2rem;
      max-width: 1200px;
      margin: auto;
    }

    .service-card {
      background: #1a1a1a;
      border-radius: 12px;
      padding: 2rem;
      transition: 0.3s ease;
      box-shadow: 0 0 15px rgba(255,0,0,0.2);
    }

    .service-card:hover {
      transform: translateY(-5px);
      box-shadow: 0 0 20px rgba(255,0,0,0.4);
    }

    .service-icon {
      font-size: 3rem;
      margin-bottom: 1rem;
      color: red;
    }

    .service-title {
      font-size: 1.4rem;
      font-weight: bold;
      margin-bottom: 1rem;
    }

    .service-description {
      font-size: 1rem;
      color: #ccc;
    }

    footer {
      text-align: center;
      padding: 2rem;
      background-color: #111;
      font-size: 0.9rem;
      color: #aaa;
    }
  </style>
</head>
<body>

  <header>
    <div class="logo"><span>X</span>ATEC</div>
    <nav>
      <a href="home.php">Home</a>
      <a href="projects.php">Projects</a>
      <a href="services.php">Services</a>
      <a href="shop.php">Shop</a>
      <a href="contact.php">Contact</a>
    </nav>
  </header>

  <section class="services-section">
    <h1>Our Services</h1>
    <div class="services-grid">
      <div class="service-card">
        <div class="service-icon">🛠️</div>
        <div class="service-title">Performance Tuning</div>
        <div class="service-description">We boost your engine with ECU remaps and custom turbo upgrades.</div>
      </div>

      <div class="service-card">
        <div class="service-icon">🎨</div>
        <div class="service-title">Custom Wraps</div>
        <div class="service-description">Stand out with full-body vinyl wraps and matte finishes.</div>
      </div>

      <div class="service-card">
        <div class="service-icon">💨</div>
        <div class="service-title">Exhaust Upgrades</div>
        <div class="service-description">From deep rumbles to loud pops, upgrade your sound and power.</div>
      </div>

      <div class="service-card">
        <div class="service-icon">🔧</div>
        <div class="service-title">Suspension Mods</div>
        <div class="service-description">Lower your ride or lift it — get your perfect stance and control.</div>
      </div>

      <div class="service-card">
        <div class="service-icon">⚙️</div>
        <div class="service-title">Wheel & Tire Kits</div>
        <div class="service-description">Premium wheels with performance tires — stylish and fast.</div>
      </div>

      <div class="service-card">
        <div class="service-icon">🧼</div>
        <div class="service-title">Detailing & Coating</div>
        <div class="service-description">Ceramic coating and deep-clean interior packages available.</div>
      </div>
    </div>
  </section>

  <footer>
    &copy; 2025 XATEC Customs. All rights reserved.
  </footer>

</body>
</html>
