<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>XATEC Projects</title>
  <link href="https://fonts.googleapis.com/css2?family=Anton&family=Roboto:wght@400;700&display=swap" rel="stylesheet" />
  <style>
    * { box-sizing: border-box; margin: 0; padding: 0; }
    body {
      font-family: 'Roboto', sans-serif;
      background-color: #0e0e0e;
      color: white;
      overflow-x: hidden;
    }
    header {
      background-color: #111;
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 1rem 2rem;
    }
    .logo {
      font-family: 'Anton', sans-serif;
      font-size: 2rem;
      color: #fff;
    }
    .logo span { color: red; }
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
    nav a:hover::after { width: 100%; }

    .section {
      padding: 4rem 2rem;
      max-width: 1200px;
      margin: auto;
    }

    .section h1 {
      font-family: 'Anton', sans-serif;
      font-size: 3rem;
      margin-bottom: 2rem;
      color: red;
    }

    .projects-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
      gap: 2rem;
    }

    .project-card {
      background-color: #1a1a1a;
      border-radius: 8px;
      overflow: hidden;
      box-shadow: 0 0 15px rgba(255, 0, 0, 0.2);
      transition: transform 0.3s ease;
    }

    .project-card:hover {
      transform: scale(1.03);
    }

    .project-card {
  background-color: #1a1a1a;
  border-radius: 10px;
  overflow: hidden;
  box-shadow: 0 4px 12px rgba(0,0,0,0.5);
  transition: transform 0.3s;
  width: 400px;
  height: 500px;
}
.project-card img {
  width: 100%;
  height: 300px;
  object-fit: cover;
}

.project-card h3 {
  font-size: 1.8rem;
  margin: 1rem;
}

.project-card p {
  font-size: 1.1rem;
  margin: 0 1rem 1rem;
}



    .project-content {
      padding: 1rem;
    }

    .project-content h3 {
      font-size: 1.5rem;
      color: white;
      margin-bottom: 0.5rem;
    }

    .project-content p {
      font-size: 1rem;
      color: #bbb;
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

  <section class="section">
    <h1>Our Latest Builds</h1>
    <div class="projects-grid">
      <div class="project-card">
        <img src="images/carbon.jpg" alt="Carbon Fiber Monster">


        <div class="project-content">
          <h3>Carbon Fiber Monster</h3>
          <p>Full-body carbon wrap, turbo upgrade and custom lighting system for street racing.</p>
        </div>
      </div>

      <div class="project-card">
        <img src="images/luxury.jpg" alt="Luxury Meets Speed">

        <div class="project-content">
          <h3>Luxury Meets Speed</h3>
          <p>High-end comfort with performance parts — luxury meets raw horsepower.</p>
        </div>
      </div>

      <div class="project-card">
        <img src="images/drift.jpg" alt="Project 3">
        <div class="project-content">
          <h3>Neo Tokyo Drift</h3>
          <p>Inspired by JDM culture: wide-body kit, LED underglow and aggressive suspension setup.</p>
        </div>
      </div>
    </div>
  </section>

  <footer>
    &copy; 2025 XATEC Customs. All rights reserved.
  </footer>
</body>
</html>
