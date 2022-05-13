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
    <header id="top">
        <nav>
            <li>
                <a class="navbtn" href="index.php"><i class="material-icons">arrow_back_ios_new</i></a>
                <a class="navbtn" href="#asukoht">Asukoht</a>
                <a class="navbtn" href="#kontakt">Kontakt</a> <br>
            </li>
            <div class="x-spacer"></div>
            <img class="logo" src="/files/logo.png" alt="">
            <h1 class="title ">
                HINNAKIRI
            </h1>
        </nav>
    </header>

    <a href="#top" class="toTop"><i class="material-icons">expand_less</i></a>

    <div class="content" id="asukoht">
        <div class="price-header">

        <div class="aditionalinfo" id="aditInfo">
            <h1 class="space">Asukoht</h1>
            <h3 class="space"><strong>GPS koordinaadid:</strong></h3>
            <h3 class="space">X 6482425,8 Y 443050,9</h3>
        </div>
        
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4992.162128835611!2d23.024379000000003!3d58.478472000000004!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x142c0716d4118ad3!2sKapra%20Vanametall%20O%C3%9C!5e1!3m2!1set!2see!4v1652366803408!5m2!1set!2see" 
        width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        
            

        <div id="kontakt"></div>
        
        <div class="kontakt">
            <form action="contact.php" method="post">
                <input type="text" name="name" id="name" placeholder="Teie nimi">
                <input type="email" name="email" id="email" placeholder="Teie email">
                <textarea name="content" id="content" cols="30" rows="10"></textarea>
                <input type="submit" value="Saada">
            </form>
        </div>
        
        </div>
    </div>
    
    <script src="app.js"></script>
</body>
</html>