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
        <?php require_once("includes/head.inc.php"); ?>
    </head>
    

    <body>
        <header>
            <div class="logo"><span class="red">X</span>ATEC</div>
                <?php require_once("includes/mainmenu.inc.php"); ?>
            <div class="contact">+31 6 13535888</div>
        </header>

        <section class="hero">
            <div class="breadcrumb">
                HOME <span class="dot">•</span> <span class="red">PROJECTS</span>
            </div>
            <h1>PROJECTS</h1>
        

            <div class="card">
                <img src="./images/61yYCS1YiYL._AC_UF1000,1000_QL80_.jpg" alt="audi e-tron Sportback" />
                <div class="card-title">Skoda</div>
            </div>

            <div class="card">
                <img src="./images/audi-e-tron-sportback-update.jpg" alt="audi e-tron Sportback" />
                <div class="card-title">Audi e-tron Sportback</div>
            </div>
        </section>
        <link rel="stylesheet" href="furniture/styles.css"> 
    </body>
    </html>