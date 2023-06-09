<?php
    // authenticate current webpage.
    require("utils/authenticate.php");

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
    <title>Villa4u</title>
</head>
<body>
    <!-- load header -->
    <?php
        require("utils/header.php");
    ?>

    <main>
        <div class="banner">
            <img src="image/voorbeeldvilla.png" alt="villa">
        </div>
        <div class="showcase">
            <div class="description">
                <h1>Title</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias at commodi consequuntur expedita laudantium optio quas quia ratione! Aut, expedita.</p>
            </div>
            <div class="photos">
                <div class="frame">
                    <img src="image/unnamed.png" alt="villa preview">
                </div>
            </div>
        </div>
    </main>

    <!-- load footer -->
    <?php
        require("utils/footer.php")
    ?>
</body>
</html>