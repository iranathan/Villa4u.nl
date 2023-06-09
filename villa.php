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
        <h1><?=$villa['name']?></h1>
        <div class="img">
            <img src="<?=$villa['photopath']?>" alt="">
        </div>
    </main>

    <!-- load footer -->
    <?php
        require("utils/footer.php")
    ?>
</body>
</html>