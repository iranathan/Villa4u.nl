<!-- load modules -->
<?php
    require("utils/loadvillas.php");
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
    <title>Villa4u</title>
</head>
<body>

    <!-- load header -->
    <?php
        require("utils/header.php")
    ?>

    <!-- main html -->
    <main>
        <?php while($res = $villas->fetchArray()) { ?>
            <div id="villas">
                <div class="villa">
                    <div class="villa-title">
                        <a href="/#"><h1><?= $res['name'] ?></h1></a>
                        <p><?= $res['description'] ?></p>
                        <button id="button">Contact</button>
                    </div>
                    <div class="villa-thumbnail">
                        <img src="image/unnamed.png" alt="villa">
                    </div>
                </div>
            </div>
        <?php } ?>
    </main>

    <!-- load footer -->
    <?php
        require("utils/footer.php")
    ?>

</body>
</html>