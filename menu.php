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
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Contact | Xatec</title>
  <style>
    body {
      margin: 0;
      font-family: Arial, sans-serif;
      background-color:rgb(0, 0, 0);
      color: #ffffff;
    }

    header {
      background-color: #111;
      padding: 20px;
      text-align: center;
    }

    header h1 {
      margin: 0;
      font-size: 32px;
      color:rgb(255, 0, 0);
    }

    .contact-container {
      max-width: 800px;
      margin: 40px auto;
      padding: 20px;
      background-color: #1a1a1a;
      border-radius: 12px;
      box-shadow: 0 0 10pxrgb(255, 0, 0);
    }

    .contact-info {
      margin-bottom: 30px;
    }

    .contact-info h2 {
      margin-top: 0;
      color:rgb(237, 2, 2);
    }

    .contact-info p {
      font-size: 16px;
      margin: 10px 0;
    }

    .contact-form label {
      display: block;
      margin-top: 15px;
      font-weight: bold;
    }

    .contact-form input,
    .contact-form textarea {
      width: 100%;
      padding: 10px;
      margin-top: 5px;
      border: none;
      border-radius: 6px;
      background-color: #2a2a2a;
      color: #fff;
    }

    .contact-form button {
      margin-top: 20px;
      padding: 12px 25px;
      background-color:rgb(255, 0, 0);
      color: #000;
      font-weight: bold;
      border: none;
      border-radius: 6px;
      cursor: pointer;
      transition: background 0.3s;
    }

    .contact-form button:hover {
      background-color:rgb(222, 222, 222);
    }

    footer {
      text-align: center;
      padding: 20px;
      background-color: #111;
      color: #777;
      margin-top: 40px;
    }

    @media (max-width: 600px) {
      .contact-container {
        margin: 20px;
      }
    }
  </style>
</head>
<body>

  <header>
    <h1>Contact Xatec</h1> 
    <p>Auto Customizing & Performance Upgrades</p>
  </header>

  <div class="contact-container">
    <div class="contact-info">
      <h2>Neem contact met ons op</h2>
      <p><strong>Email:</strong> <a href="mailto:xatec@gmail.nl" style="color:#00ff99;">xatec@gmail.nl</a></p>
      <p><strong>Telefoon / WhatsApp:</strong> <a href="tel:+31613535888" style="color:#00ff99;">+31 6 13535888</a></p>
      <p>Wil je een afspraak maken of heb je een vraag? Vul het formulier hieronder in en we nemen zo snel mogelijk contact met je op.</p>
    </div>

    <form class="contact-form">
      <label for="name">Naam</label>
      <input type="text" id="name" name="name" required>

      <label for="email">E-mailadres</label>
      <input type="email" id="email" name="email" required>

      <label for="message">Bericht / Vraag</label>
      <textarea id="message" name="message" rows="5" required></textarea>

      <button type="submit">Verstuur bericht</button>
    </form>
  </div>

  <footer>
    &copy; 2025 Xatec - Auto Customizing & Upgrades
  </footer>

</body>
</html>

        
</body>
</html>