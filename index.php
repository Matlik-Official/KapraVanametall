<?php
require ('connect_db.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="style.css">
    <title>Kapra Vanametall</title>
</head>
<body>

    
    
    <a href="#top" class="toTop"><i class="material-icons">expand_less</i></a>

    <div id="fullpage">
        <section class="vertical-scrolling kapra">
            <div>
                <img class="logo" src="/files/logo.png" alt="">
                <li>
                    <a class="navbtn" href="#vanametall">Vanametall</a>
                    <a class="navbtn" href="#ohtlikud-jaatmed">Ohtlikud Jäätmed</a>
                    <a class="navbtn" href="#jaatmed">Jäätmed</a> <br>
                    <a class="navbtn" href="#kopatood">Kopatööd</a> <br>
                    <a class="navbtn" href="#transpordi_teenused">Muud Teenused</a> <br>
                    <a class="navbtn" href="kontakt.php">Kontakt</a> <br>
                </li>
            </div>
        </section>
        <section class="vertical-scrolling vmetall dot">
            <div>
                <div>
                    <h1 class="title-1">Vanametall</h1>
                    <li>
                        <a class="navbtn-1" href="hinnakiri.php">Vanametall</a>
                    </li>
                </div>
            </div>
        </section>
        <section class="vertical-scrolling ojaatmed dot">
            <div>
                <h1 class="title-1">Ohtlikud Jäätmed</h1>
                <li>
                    <a class="navbtn-1" href="ohtlikud-jaatmed.php">Ohtlikud Jäätmed</a>
                </li>
            </div>
        </section>
        <section class="vertical-scrolling jaatmed dot">
            <div>
                <h1 class="title-1">Jäätmed</h1>
                <li>
                    <a class="navbtn-1" href="jaatmed.php">Jäätmed</a>
                </li>
            </div>
        </section>
        <section class="vertical-scrolling kopatood dot">
            <div>
                <h1 class="title-1">Kopatööd</h1>
                <li>
                    <a class="navbtn-1" href="kopatood.php">Kopatööd</a>
                </li>
            </div>
        </section>
        <section class="vertical-scrolling tteenused dot">
            <div>
                <h1 class="title-1">Muud Teenused</h1>
                <li>
                    <a class="navbtn-1" href="muudteenused.php">Muud Teenused</a>
                </li>
            </div>
        </section>
    </div>
    
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/2.6.6/jquery.fullPage.min.js'></script>
    <script  src="function.js"></script>
    <script src="app.js"></script>
</body>
</html>