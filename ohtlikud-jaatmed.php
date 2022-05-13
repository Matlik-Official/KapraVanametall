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
                <a class="navbtn" href="#hinnad">Jäätmed</a>
            </li>
            <div class="x-spacer"></div>
            <img class="logo" src="/files/logo.png" alt="">
            <h1 class="title ">
                Ohtlikud Jäätmed
            </h1>
        </nav>
    </header>

    <a href="#top" class="toTop"><i class="material-icons">expand_less</i></a>

    <div class="content" id="hinnad">
        <div class="price-header">

        <div class="aditionalinfo" id="aditInfo">
            <h1 class="space">Lisa Info</h1>
            <h3 class="space"><strong class="">Hinnad sisaldavad käibemaksu!</strong></h3>
        </div>

        <h2 class="anounce"><strong class="red">NB!</strong> Saaremaa valla elanikelt piiratud koguses <strong><span class="italic black">TASUTA</span>!</strong></h2>
        <table>
        <tr class="example">
                <th>Nimetus</th>
                <th>Kood</th>
                <th>Hind (€/kg)</th>
            </tr> 
        <?php
        $a = 0;
        // $a < 10
        $qry = mysqli_query($con, "SELECT * FROM ojaatmed");
        while ($result = mysqli_fetch_array($qry)) { 
                ?>
            
                <tr class="responsible">
                    <td><?php echo $result["name"] ?></td>
                    <td class="">
                        <?php echo $result["code"] ?>
                    </td>
                    <td><strong><?php echo $result["price"] ?>€</strong></td>
                </tr>
            
        
        <?php } ?>
        </table> 

        </div>
    </div>
    
    <script src="app.js"></script>
</body>
</html>