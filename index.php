<?php

    /*
    require_once("includes/database.php");
    $sql = "SELECT * FROM tb_users";
    $result = Database::getData($aql);
    print_r($result);
    */

    $thisPage = "index";
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>XATEC Customs</title>
  <link href="https://fonts.googleapis.com/css2?family=Anton&family=Roboto:wght@400;700&display=swap" rel="stylesheet" />
  <style>
    * {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
    }
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
    .hero {
      background: url('https://images.unsplash.com/photo-1542362567-b07e54358753') no-repeat center center/cover;
      height: 100vh;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: flex-start;
      padding: 2rem;
      animation: fadeIn 2s ease-in-out;
    }
    .hero h1 {
      font-size: 4rem;
      font-family: 'Anton', sans-serif;
      color: #fff;
      text-shadow: 2px 2px 10px rgba(0, 0, 0, 0.8);
    }
    .hero p {
      font-size: 1.2rem;
      margin-top: 1rem;
      max-width: 600px;
      color: #ddd;
    }
    .btn {
      margin-top: 2rem;
      background: red;
      color: white;
      padding: 0.8rem 1.5rem;
      font-size: 1rem;
      border: none;
      border-radius: 4px;
      cursor: pointer;
      transition: 0.3s;
    }
    .btn:hover {
      background: darkred;
    }
    footer {
      text-align: center;
      padding: 2rem;
      background-color: #111;
      font-size: 0.9rem;
      color: #aaa;
    }
    @keyframes fadeIn {
      from { opacity: 0; transform: translateY(20px); }
      to { opacity: 1; transform: translateY(0); }
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
      <a href="menu.php">Contact</a>
    </nav>
  </header>

  <section class="hero" id="home">
    <h1>Custom Cars. Redefined.</h1>
    <p>From chassis upgrades to performance tuning – Xatec Customs builds next-level automotive experiences with unmatched style and power.</p>
    <button class="btn">Discover Our Builds</button>
  </section>

  <footer>
    &copy; 2025 XATEC Customs. All rights reserved.
  </footer>
</body>
</html>
