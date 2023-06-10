<?php
    require("utils/authenticate.php");
    require("utils/database.php");

    if(isset($_GET['villa'])) {
        $villa = get_villa($_GET['villa']);
    } else {
        echo "bruh";
        return;
    }
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/headerfooter.css">
    <link rel="shortcut icon" href="logo.png" type="image/x-icon">
    <link rel="stylesheet" href="css/villalist.css">
    <link rel="stylesheet" href="css/villa.css">
    <title>Villa4u</title>
</head>
<body>
    <!-- load header -->
    <?php
        require("utils/header.php")
    ?>

    <main>
        <div class="flexbox">
            <div class="img">
                <img src="<?=$villa['photopath']?>" alt="">
            </div>
            <div class="text">
                <h1><?=$villa['name']?></h1>
                <p><?=$villa['description']?></p>         
            </div>
        </div>
        <div class="flexbox">
            <div class="info">
                    <p><img src="image/info/bedroom.png" alt="Kamer"> Kamers: <?=$villa['rooms']?></p>
                    <p><img src="image/info/bathroom.png" alt="Badkamer"> Badkamers: <?=$villa['bathrooms']?></p>
                    <p><img src="image/info/heat.png" alt="Verwarming"> Verwarming: <?=$villa['temp']?></p>
                    <p><img src="image/info/price.png" alt="Prijs"> Prijs: <?=$villa['price']?></p>
                    <p><img src="image/info/location.png" alt="Adres"> Adres: <?=$villa['adres']?></p>
                    <p><img src="image/info/m3.png" alt="Opp.vlakte huis"> Oppervlakte huis<?=$villa['size']?></p>
                </div>   
        </div>
    </main>

    <!-- load footer -->
    <?php
        require("utils/footer.php")
    ?>
</body>
</html>