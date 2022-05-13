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
                <a class="navbtn" href="#hinnad">Hinnakiri</a>
                <a class="navbtn" href="#km">KM</a> <br>
            </li>
            <div class="x-spacer"></div>
            <img class="logo" src="/files/logo.png" alt="">
            <h1 class="title ">
                HINNAKIRI
            </h1>
        </nav>
    </header>

    <a href="#top" class="toTop"><i class="material-icons">expand_less</i></a>

    <div class="content" id="hinnad">
        <div class="price-header">

        <div class="aditionalinfo" id="aditInfo">
            <h1 class="space">Lisa Info</h1>
            <h3 class="space"><strong class="">Hinnalisa ( + ) kehtib neile, kes toovad ise vanametalli kapra vanametalli platsile</strong></h3>
            <h3 class="space"><strong class="">Suurtematele kogustele tasuta järgitulemine</strong></h3>
        </div>

        <h2 class="anounce"><strong class="red">NB!</strong> Hinnad kehtivad alates <strong><span class="italic black">11.11.2021</span></strong></h2>
        
        
        <table>
        <tr class="example">
                <th>Illustreeriv pilt</th>
                <th>Kirjeldus</th>
                <th>Hind <br> (€ / tonn)</th>
            </tr> 
        <?php
        $a = 0;
        // $a < 10
        $qry = mysqli_query($con, "SELECT * FROM hinnakiri");
        while ($result = mysqli_fetch_array($qry)) { 
                ?>
            
                <tr class="responsible">
                    <td><img src="<?php echo $result["image"] ?>" alt="<?php echo $result["name"] ?> pilt"></td>
                    <td class="description">
                        <h2><strong><?php echo $result["name"] ?></strong></h2> <br>
                        <?php echo $result["description"] ?>
                    </td>
                    <td><strong><?php echo $result["price"] ?>€</strong></td>
                </tr>
            
        
        <?php } ?>
        </table> 

        <div id="km"></div>
        
        <?php
        $a = 0;
        // $a < 10
        $qry_km = mysqli_query($con, "SELECT * FROM km WHERE id='1'");
        while ($result_km = mysqli_fetch_array($qry_km)) { 
                ?>
            
                <div class="km red-bg">
                    <h3><strong><?php echo $result_km["title"]; ?></strong></h3>
                    <p><?php echo $result_km["description"] ?></p>
                </div>
            
        
        <?php } ?>
        
        </div>
    </div>
    
    <script src="app.js"></script>
</body>
</html>