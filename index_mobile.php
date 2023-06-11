<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/mobile.css">
    <link rel="stylesheet" href="../css/headerfooter.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
    <script src="../js/mobile.js" defer></script>
    <link rel="shortcut icon" href="logo.png" type="image/x-icon">
</head>
<body>
    <?php
        require("utils/authenticate.php");
    ?>

    <header id="header">
        <a href="index.php"><img alt="logo" src="image/lightlogosmall.png"></a>
        <nav>
            
            <div id="nav-icon3" onclick="open1()">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </div>
        </nav>
        
    </header>
    <div id="navscreen">
            <a href="villalist.php"><strong>Villa's</strong></a><br><br>
            <a href="contact.php"><strong>Contact</strong></a><br><br>
            <?php if($authenticated) : ?>
                <a href="#"><strong><?= $name ?></strong></a><br><br>
            <?php else :?>
                <a href="login.php"><strong>Login</strong></a><br><br>
            <?php endif;?>
    </div>
    <div id="content">
        <img src="image/voorbeeldvilla.png" alt="villa">
    </div>
</body>
</html>