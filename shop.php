<!DOCTYPE html>
<html lang="en">
<head>
        <?php require_once("includes/head.inc.php"); ?>
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
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Xatec Shop | Auto Upgrades</title>
  <style>
    :root {
      --rood:rgb(100, 29, 29);
      --zwart: #000;
      --wit: #fff;
    }

    body {
      margin: 0;
      font-family: 'Arial', sans-serif;
      background-color: var(--zwart);
      color: var(--wit);
    }

    header {
      background-color: var(--rood);
      padding: 20px;
      text-align: center;
    }

    header h1 {
      margin: 0;
      color: var(--wit);
      font-size: 36px;
    }

    .shop-container {
      max-width: 1200px;
      margin: 40px auto;
      padding: 0 20px;
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
      gap: 30px;
    }

    .product-card {
      background-color: #111;
      border: 2px solid var(--rood);
      border-radius: 10px;
      overflow: hidden;
      transition: transform 0.3s ease;
    }

    .product-card:hover {
      transform: scale(1.03);
    }

    .product-image {
      height: 180px;
      background-color: #333;
      display: flex;
      align-items: center;
      justify-content: center;
      color: var(--wit);
      font-size: 18px;
    }

    .product-content {
      padding: 15px;
    }

    .product-title {
      font-size: 20px;
      color: var(--rood);
      margin: 0 0 10px;
    }

    .product-description {
      font-size: 14px;
      color: #ccc;
      margin-bottom: 15px;
    }

    .product-price {
      font-size: 18px;
      color: var(--wit);
      margin-bottom: 10px;
    }

    .buy-button {
      display: inline-block;
      padding: 10px 20px;
      background-color: var(--rood);
      color: var(--wit);
      border: none;
      border-radius: 5px;
      text-decoration: none;
      font-weight: bold;
      transition: background 0.3s;
    }

    .buy-button:hover {
      background-color:rgb(0, 0, 0);
    }

    footer {
      text-align: center;
      padding: 20px;
      background-color: #111;
      color: #888;
      margin-top: 50px;
    }
  </style>
</head>
<body>

  <header>
    <h1>Xatec Shop</h1>
    <p>Auto Upgrades & Custom Parts</p>
  </header>

  <section class="shop-container">

    <!-- PRODUCT 1 -->
    <div class="product-card">
        <img src='./images/stage1.jpg' height='270px' wide='200px'>
      
      <div class="product-content">
        <h3 class="product-title">Chiptuning Stage 1</h3>
        <p class="product-description"span style="color: red;">Meer pk en koppel voor jouw auto. Professioneel geoptimaliseerd.</span>
</p>
        <p class="product-price">€399,-</p>
        <a href="#" class="buy-button">Bestel nu</a>
      </div>
    </div>

    <!-- PRODUCT 2 -->
    <div class="product-card">
        <img src='./images/roode.jpg' height='250px' wide='100px'>
      <div class="product-content">
        <h3 class="product-title">Matte Wrap (Rood)</h3>
        <p class="product-description">Unieke uitstraling met hoogwaardige wrapfolie in rood mat.</p>
        <p class="product-price">€899,-</p>
        <a href="#" class="buy-button">Bestel nu</a>
      </div>
    </div>

    <!-- PRODUCT 3 -->
    <div class="product-card">
      <div class="product-image">Carbon Spoiler</div>
      <div class="product-content">
        <h3 class="product-title">Carbon Achterspoiler</h3>
        <p class="product-description">Sportieve look + betere downforce. Echt carbon, geen imitatie.</p>
        <p class="product-price">€349,-</p>
        <a href="#" class="buy-button">Bestel nu</a>
      </div>
    </div>

    <!-- PRODUCT 4 -->
    <div class="product-card">
      <div class="product-image">LED Koplamp Upgrade</div>
      <div class="product-content">
        <h3 class="product-title">LED Koplamp Set</h3>
        <p class="product-description">Betere zichtbaarheid + moderne look. Plug & play installatie.</p>
        <p class="product-price">€249,-</p>
        <a href="#" class="buy-button">Bestel nu</a>
      </div>
    </div>

    <!-- PRODUCT 5 -->
    <div class="product-card">
      <div class="product-image">Sportuitlaat Systeem</div>
      <div class="product-content">
        <h3 class="product-title">Sportuitlaat Systeem</h3>
        <p class="product-description">Stoer geluid en betere doorstroming. RVS materiaal.</p>
        <p class="product-price">€599,-</p>
        <a href="#" class="buy-button">Bestel nu</a>
      </div>
    </div>

    <!-- PRODUCT 6 -->
    <div class="product-card">
      <div class="product-image">Custom Velgen 18"</div>
      <div class="product-content">
        <h3 class="product-title">Custom Velgen 18"</h3>
        <p class="product-description">Uniek design, lichtgewicht velgen in rood/zwart.</p>
        <p class="product-price">€799,-</p>
        <a href="#" class="buy-button">Bestel nu</a>
      </div>
    </div>

    <!-- PRODUCT 7 -->
    <div class="product-card">
      <div class="product-image">Interieur Ambient Light</div>
      <div class="product-content">
        <h3 class="product-title">Ambient Interieurverlichting</h3>
        <p class="product-description">RGB sfeerverlichting voor dashboard en deuren.</p>
        <p class="product-price">€149,-</p>
        <a href="#" class="buy-button">Bestel nu</a>
      </div>
    </div>

    <!-- PRODUCT 8 -->
    <div class="product-card">
      <div class="product-image">Xatec Cadeaubon</div>
      <div class="product-content">
        <h3 class="product-title">Xatec Cadeaubon</h3>
        <p class="product-description">Perfect cadeau voor auto-liefhebbers. Kies je eigen bedrag.</p>
        <p class="product-price">Vanaf €25,-</p>
        <a href="#" class="buy-button">Bestel nu</a>
      </div>
    </div>

  </section>

  <footer>
    &copy; 2025 Xatec | Auto Customizing & Upgrades
  </footer>

</body>
</html>


</body>
</html>