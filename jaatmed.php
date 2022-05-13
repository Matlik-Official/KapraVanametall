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
                <a class="navbtn" href="#1">Ehitus- ja lammutuspraht</a>
                <a class="navbtn" href="#2">Kodumajapidamisjäätmed</a>
                <a class="navbtn" href="#3">Elektroonika jäätmed</a>
            </li>
            <div class="x-spacer"></div>
            <img class="logo" src="/files/logo.png" alt="">
            <h1 class="title ">
                Jäätmed
            </h1>
        </nav>
    </header>

    <a href="#top" class="toTop"><i class="material-icons">expand_less</i></a>

    <div class="content" id="hinnad">
        <div class="price-header">
        <div id="1"></div>
        <div class="aditionalinfo" id="aditInfo">
            <h1 class="space">Lisa Info</h1>
            <h3 class="space">Pakume ka multilift konteineri renti ja transporti.</h3>
        </div>
        <h1>Ehitus- ja lammutuspraht</h1>
        <table>
        <tr class="example">
                <th>Nimetus</th>
                <th>Kood</th>
                <th>Hind (€/tonn)</th>
            </tr> 
        <?php
        $a = 0;
        // $a < 10
        $qry_1 = mysqli_query($con, "SELECT * FROM ehitusjalammutuspraht");
        while ($result_1 = mysqli_fetch_array($qry_1)) { 
                ?>
            
                <tr class="responsible">
                    <td><?php echo $result_1["name"] ?></td>
                    <td class="">
                        <?php echo $result_1["code"] ?>
                    </td>
                    <td><strong><?php echo $result_1["price"] ?>€</strong></td>
                </tr>
            
        
        <?php } ?>
        </table> 

        <div id="2"></div>
        <h1>Kodumajapidamisjäätmed</h1>
        <table>
        <tr class="example">
                <th>Nimetus</th>
                <th>Kood</th>
                <th>Hind (€/tonn)</th>
            </tr> 
        <?php
        $a = 0;
        // $a < 10
        $qry_1 = mysqli_query($con, "SELECT * FROM kodumajapidamisjäätmed");
        while ($result_1 = mysqli_fetch_array($qry_1)) { 
                ?>
            
                <tr class="responsible">
                    <td><?php echo $result_1["name"] ?></td>
                    <td class="">
                        <?php echo $result_1["code"] ?>
                    </td>
                    <td><strong><?php echo $result_1["price"] ?></strong></td>
                </tr>
            
        
        <?php } ?>
        </table> 

        <div id="3"></div>
        <h1>Elektroonika jäätmed</h1>
        <table>
        <?php
        $a = 0;
        // $a < 10
        $qry_1 = mysqli_query($con, "SELECT * FROM elektroonikajaatmed");
        while ($result_1 = mysqli_fetch_array($qry_1)) { 
                ?>
            
                <tr class="responsible">
                    <td><?php echo $result_1["name"] ?></td>
                </tr>
            
        
        <?php } ?>
        </table> 

        <div class="aditionalinfo" id="aditInfo">
            <h1 class="space">Lisa Info</h1>
            <h3 class="space">Hinnad sisaldavad käibemaksu.</h3>
            <h3 class="space">Materjali vastuvõtt kliendile <strong class="italic">TASULINE</strong>!</h3>
        </div>

        </div>
    </div>
    
    <script src="app.js"></script>
</body>
</html>