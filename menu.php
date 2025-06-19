<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
     <header>
            <div class="logo"><span class="red">X</span>ATEC</div>
                <?php require_once("includes/mainmenu.inc.php"); ?>
            <div class="contact">+31 6 13535888</div>
        </header>
        <link rel="stylesheet" href="furniture/styles.css"> 

<!DOCTYPE html>
<html lang="nl">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Xatec Menu</title>
  <style>
    /* Basis styling */
    body { font-family: Arial, sans-serif; margin: 0; }
    nav { background-color: #111; color: white; }
    .menu { display: flex; justify-content: space-between; align-items: center; padding: 10px 20px; }
    .menu ul { list-style: none; margin: 0; padding: 0; display: flex; gap: 20px; }
    .menu li { position: relative; }
    .menu a { color: white; text-decoration: none; padding: 8px 12px; display: block; }
    .menu li:hover > ul { display: block; }

    /* Dropdown */
    .menu ul ul {
      display: none;
      position: absolute;
      background-color: #222;
      top: 100%;
      left: 0;
      min-width: 200px;
      z-index: 1000;
    }
    .menu ul ul li { width: 100%; }

    /* Responsief toggle (optioneel later) */
  </style>
</head>
<body>

  <nav>
    <div class="menu">
      <div class="logo"><a href="#" style="font-weight: bold; font-size: 20px;">Xatec</a></div>
      <ul>
        <li><a href="#">Home</a></li>
        <li>
          <a href="#">Diensten</a>
          <ul>
            <li><a href="#">Customizing</a></li>
            <li><a href="#">Performance Upgrades</a></li>
            <li><a href="#">Velgen & Banden</a></li>
            <li><a href="#">Verlichting</a></li>
            <li><a href="#">Audio & Multimedia</a></li>
          </ul>
        </li>
        <li><a href="#">Projecten</a></li>
        <li><a href="#">Shop</a></li>
        <li><a href="#">Afspraak maken</a></li>
        <li><a href="#">Over Xatec</a></li>
        <li><a href="#">Contact</a></li>
      </ul>
    </div>
  </nav>

</body>
</html>


</body>
</html>