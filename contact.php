

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/headerfooter.css" rel="stylesheet">
    <link href="css/index.css" rel="stylesheet">
    <link rel="shortcut icon" href="logo.png" type="image/x-icon">
    <title>Document</title>
</head>
<body>
    <header>
        <a href="index.php"><img src="image/lightlogosmall.png" alt="logo"></a>
        <nav>
            <a href="villalist.php"><strong>Villa's</strong></a>
            <a href=""><strong>Contact</strong></a>
            <?php if($authenticated) : ?>
                <a href="#"><strong><?= $name ?></strong></a>
            <?php else :?>
                <a href="login.php"><strong>Login</strong></a>
            <?php endif;?>
        </nav>
    </header>
    <main>
        <div class="contact">
            <form action="">
                <label for="voornaam">Voornaam:</label>
                <input type="text" id="voornaam" name="voornaam">
                <label for="achternaam">Achternaam:</label>
                <input type="text" id="achternaam" name="achternaam">
                <label for="e-mail">E-Mail:</label>
                <input type="email" id="e-mail" name="e-mail">
                <label for="tel">Telefoon nummer:</label>
                <input type="tel" id="tel" name="tel">
                <label for="bericht">Uw bericht:</label>
                <input type="text" id="bericht" name="bericht">
            </form>
        </div>
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