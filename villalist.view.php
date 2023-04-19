<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./css/headerfooter.css">
    <link rel="stylesheet" href="./css/villalist.css">
    <title>Villa4u</title>
</head>
<body>
    <header>
        <img src="image/lightlogosmall.png">
        <nav>
            <a>Villa's</a>
            <a>Contact</a>
        </nav>
    </header>
    <main>
        <div id="villas">
            <div class="villa">
                <div class="villa-title">
                    <h1>Villa</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto consequuntur doloremque, dolores eius illum ipsum minima officiis quo voluptatibus. Harum possimus reiciendis repellendus suscipit tempora.</p>
                </div>
                <div class="villa-thumbnail">
                    <img src="image/unnamed.png" alt="villa">
                </div>
            </div>
        </div>
        <?php while($res = $villas->fetchArray()) { ?>
            <div id="villas">
                <div class="villa">
                    <div class="villa-title">
                        <h1><?= $res['name'] ?></h1>
                        <p><?= $res['description'] ?></p>
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