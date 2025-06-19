
<style>
  body {
    margin: 0;
    font-family: Arial, sans-serif;
    background-color: #0d0d0d;
    color: white;
  }

  .navbar {
    display: flex;
    justify-content: space-between;
    align-items: center;
    background-color: #0d0d0d;
    padding: 20px 60px;
    font-weight: bold;
  }

  .navbar .logo {
    color: white;
    font-size: 24px;
  }

  .navbar .logo span {
    color: red;
  }

  .navbar ul {
    list-style: none;
    display: flex;
    gap: 30px;
    margin: 0;
    padding: 0;
  }

  .navbar a {
    text-decoration: none;
    color: white;
    transition: color 0.2s;
  }

  .navbar a:hover {
    color: red;
  }

  .navbar .contact {
    background-color: red;
    padding: 8px 16px;
    color: white;
    border-radius: 5px;
    font-size: 14px;
  }

  main {
    padding: 40px 60px;
  }

  h1, h2 {
    font-size: 28px;
    margin-bottom: 20px;
    color: white;
  }

  p {
    color: #ccc;
    font-size: 16px;
    max-width: 800px;
  }

  .hero {
    background: linear-gradient(to right, #1e1e1e, #0d0d0d);
    padding: 80px 60px;
    text-align: left;
  }

  .hero h1 {
    font-size: 48px;
    margin-bottom: 20px;
  }

  .hero p {
    font-size: 20px;
    color: #bbb;
  }

  .btn {
    margin-top: 30px;
    display: inline-block;
    padding: 12px 24px;
    background-color: red;
    color: white;
    text-decoration: none;
    font-weight: bold;
    border-radius: 4px;
  }

</style>

<header>
  <div class="navbar">
    <div class="logo"><span>X</span>ATEC</div>
    <ul>
      <li><a href="index.php">HOME</a></li>
      <li><a href="projects.php">PROJECTS</a></li>
      <li><a href="services.php">SERVICES</a></li>
      <li><a href="shop.php">SHOP</a></li>
    </ul>
    <div class="contact">+31 6 13535888</div>
  </div>
</header>
