

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/headerfooter.css" rel="stylesheet">
    <link href="css/index.css" rel="stylesheet">
    <link rel="stylesheet" href="css/contact.css">
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
            <form action="post">
                <label for="voornaam" class="voornaam">Voornaam:</label> <br>
                <input type="text" id="voornaam" name="voornaam" class="voornaam"> 
                <label for="achternaam" class="achternaam">Achternaam:</label> 
                <input type="text" id="achternaam" name="achternaam" class="achternaam"> 
                <label for="e-mail" class="email">E-Mail:</label> <br>
                <input type="email" id="e-mail" name="e-mail" class="email"> 
                <label for="tel" class="tel">Telefoon nummer:</label> <br>
                <input type="tel" id="tel" name="tel" class="tel"> 
                <label for="bericht" class="bericht">Uw bericht:</label> <br>
                <input type="text" id="bericht" name="bericht" lass="bericht"> 
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