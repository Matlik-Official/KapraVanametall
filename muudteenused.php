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
                <a class="navbtn" href="#teenused">Teenused</a>
            </li>
            <div class="x-spacer"></div>
            <img class="logo" src="/files/logo.png" alt="">
            <h1 class="title ">
                HINNAKIRI
            </h1>
        </nav>
    </header>

    <a href="#top" class="toTop"><i class="material-icons">expand_less</i></a>

    <div class="content" id="teenused">
        <div class="price-header">

        
        
        
            <?php
            $a = 0;
            // $a < 10
            $qry = mysqli_query($con, "SELECT * FROM muudteenused");
            while ($result = mysqli_fetch_array($qry)) { 
                    ?>
                
                <div class="card">
                    <img src="<?php echo $result["image"]; ?>" alt="<?php echo $result["title"]; ?> pilt">
                    <div>
                        <h1><?php echo $result["title"]; ?></h1>
                        <p><?php echo $result["content"]; ?></p>
                        <p><?php echo $result["additional"]; ?></p>
                    </div>
                </div>
            
            <?php } ?>

        
        
        </div>
    </div>
    
    <script src="app.js"></script>
</body>
</html>