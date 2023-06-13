<?php
    require("authenticate.php");
?>

<header>
    <a href="index.php"><img alt="logo" src="image/lightlogosmall.png"></a>
    <nav>
        <a href="villalist.php"><strong>Villa's</strong></a>
        <a href="contactform.php"><strong>Contact</strong></a>
        <?php if($authenticated) : ?>
            <a href="#"><strong><?= $name ?></strong></a>
        <?php else :?>
            <a href="login.php"><strong>Login</strong></a>
        <?php endif;?>
    </nav>
</header>