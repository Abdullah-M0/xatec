<?php
require_once("includes/head.inc.php");
    $producten = array();

    $i = 1;
    $producten[$i]['naam'] = "auto 1";
    $producten[$i]['prijs'] = "10,00";
    $producten[$i]['image'] = "bmw.jpg";
    $producten[$i]['id'] = $i;

    $producten[++$i]['naam'] = "auto 2";
    $producten[$i]['prijs'] = "12,00";
     $producten[$i]['image'] = "gas.jpg";
    $producten[$i]['id'] = $i;

    $producten[++$i]['naam'] = "auto 3";
    $producten[$i]['prijs'] = "100,00";
     $producten[$i]['image'] = "roode.jpg";
    $producten[$i]['id'] = $i;

     $producten[++$i]['naam'] = "auto 4";
    $producten[$i]['prijs'] = "10000,00";
     $producten[$i]['image'] = "lamp.jpg";
    $producten[$i]['id'] = $i;

    foreach($producten as $key => $value) {
        print "<h1>". $value['naam'] . "</h1>";
        print "<br />";
        print $value['id'];
        print "<br />";
        print $value['prijs'];
        print "<br />";
        print "<img src='images/". $value['image'] . "' style='width: 100px' />";
        print "<br />";

$html = '
         <div class="product-card">
        <img src="./images/lamp.jpg" height="250px" wide="100px">
      <div class="product-content">
        <h3 class="product-title">' . $value['naam'] . '</h3>
        <p class="product-description"span style="color: red;">Betere zichtbaarheid + moderne look. Plug & play installatie.<span></p>
        <p class="product-price">€249,-</p>
        <a href="#" class="buy-button">Bestel nu</a>
      </div>
    </div>';

    }

    print $html;