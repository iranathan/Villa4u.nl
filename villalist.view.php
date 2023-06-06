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
    <header>
    <a href="index.php"><img alt="logo" src="image/lightlogosmall.png"></a>
        <nav>
            <a href="villalist.view.php"><strong>Villa's</strong></a>
            <a href=""><strong>Contact</strong></a>
            <a href="login.php"><strong>Login</strong></a>
        </nav>
    </header>
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
    <footer>
        <h2>Contact</h2>
        <div id="footer-info">
            <p>Telefoon: <br>06-12345678</p>
            <p>E-Mail: <br>Villa4U@gmail.com</p>
            <p>Adres: Rotterdam  <br>Heer Bokelweg 255 2414 AB </p>
            <p>Sociale Media: <br>@Villa4U</p>
        </div>
    </footer>
</body>
</html>