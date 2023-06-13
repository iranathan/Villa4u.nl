<?php
    // authenticate current webpage.
    require("utils/authenticate.php");
    // load villas.
    require("utils/loadvillas.php");

    // to load mobile page
    $android = strpos($_SERVER['HTTP_USER_AGENT'],"Android");
    $bberry = strpos($_SERVER['HTTP_USER_AGENT'],"BlackBerry");
    $iphone = strpos($_SERVER['HTTP_USER_AGENT'],"iPhone");
    $ipod = strpos($_SERVER['HTTP_USER_AGENT'],"iPod");
    $webos = strpos($_SERVER['HTTP_USER_AGENT'],"webOS");
    if ($android || $bberry || $iphone || $ipod || $webos) 
    { 
        header('Location: index_mobile.php');
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/headerfooter.css" rel="stylesheet">
    <link href="css/index.css" rel="stylesheet">
    <link rel="shortcut icon" href="logo.png" type="image/x-icon">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
    <script src="js/index.js"></script>
    <title>Villas4u</title>
</head>
<body>
    <!-- load header -->
    <?php
        require("utils/header.php");
    ?>

    <main>
        <?php while($res = $villas->fetchArray()) { ?>
            <div class="hidden villa">
                <div class="banner">
                    <img src="<?=$res['banner']?>" alt="villa">
                </div>
                <div class="showcase">
                    <div class="description">
                        <h1><?=$res['name']?></h1>
                        <p><?=$res['description']?></p>
                    </div>
                    <div class="photos">
                        <div class="frame">
                            <img src="<?=$res['photopath']?>" alt="villa preview">
                        </div>
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