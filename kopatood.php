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
                <a class="navbtn" href="#lisad">Lisad</a>
            </li>
            <div class="x-spacer"></div>
            <img class="logo" src="/files/logo.png" alt="">
            <h1 class="title ">
                HINNAKIRI
            </h1>
        </nav>
    </header>

    <a href="#top" class="toTop"><i class="material-icons">expand_less</i></a>

    <div class="content" id="lisad">
        <div class="price-header">

            
            <h2 class="anounce"><strong class="red">NB!</strong> Hinnad sisaldavad laadimist. </strong></h2>
            <?php
                $qry_kl1 = mysqli_query($con, "SELECT * FROM kopalisainfo");
                while ($klisa1 = mysqli_fetch_array($qry_kl1)) { 
                ?>
            <div class="aditionalinfo" id="aditInfo">
                <h1 class="space"><?php echo $klisa1["title"]; ?>:</h1>
                
                    <h3 class="space"><?php echo $klisa1["content"]; ?></h3>
        <?php } ?>
            </div>
            
            <div class="aditionalinfo" id="aditInfo">
                <h1 class="space">Lisad:</h1>
                <?php
                $qry_kl2 = mysqli_query($con, "SELECT * FROM kopalisad");
                while ($klisa2 = mysqli_fetch_array($qry_kl2)) { 
                ?>
                    <h3 class="space"><?php echo $klisa2["content"]; ?></h3>
        <?php } ?>
            </div>
            

            <div id="hinnad"></div>
        <table>
        <tr class="example">
                <th>Illustreeriv pilt</th>
                <th>Kirjeldus | Hind (€ / tonn)</th>
                <th>Hind km-ta<br></th>
            </tr> 
        <?php
        $a = 0;
        // $a < 10
        $qry = mysqli_query($con, "SELECT * FROM tmhinnakiri");
        while ($result = mysqli_fetch_array($qry)) { 
                ?>
            
                <tr class="responsible">
                    <td><img src="<?php echo $result["image"] ?>" alt="<?php echo $result["name"] ?> pilt"></td>
                    <td class="description">
                        <h2><strong><?php echo $result["name"] ?></strong></h2> <br>
                        <p><?php echo $result["pricekm"] ?>€/tonn</p>
                    </td>
                    <td><strong>(<?php echo $result["price"] ?>€/t km-ta)</strong></td>
                </tr>
            
        
        <?php } ?>
        </table> 
        
        </div>
    </div>
    
    <script src="app.js"></script>
</body>
</html>