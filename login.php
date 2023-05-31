<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="css/headerfooter.css" rel="stylesheet">
    <link href="css/login.css" rel="stylesheet">
    <script src="js/login.js" defer></script>
    <link rel="shortcut icon" href="logo.png" type="image/x-icon">
    <title>Villa4u</title>
</head>
<body>
    <header>
        <a href="index.php"><img src="image/lightlogosmall.png"></a>
        <nav>
            <a href="villalist.view.php"><strong>Villa's</strong></a>
            <a href=""><strong>Contact</strong></a>
            <a href="login.php"><strong>Login</strong></a>
        </nav>
    </header>
    <main>
        <form id="login" method="post" action="authentication.php">
            <div id="parent">
                <div id="title">
                    <h2 class="animation">Login</h2>
                </div>
                <input type="hidden" name="auth-type" value="login" class="animation">
                <input type="hidden" name="auth-type" value="login" class="animation">
                <label for="email" class="animation">Email: </label>
                <input type="text" name="email" id="email" class="input" required class="animation">
                <label for="password" class="animation">Password: </label>
                <input type="password" name="password" id="password" class="input" required class="animation">
                <button type="submit" id="submit" class="button" class="animation">Login</button>
                <img src="image/or_2.png" class="animation">
                <button type="submit" class="button" onclick="signup(); return false" class="animation">Signup</button>

            </div>
        </form>
    </main>

</body>
</html>