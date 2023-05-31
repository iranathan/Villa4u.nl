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
    <title>Villa4u</title>
    <link rel="shortcut icon" href="logo.png" type="image/x-icon">
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
            <input type="hidden" name="auth-type" value="signup">
            <div id="parent" class="parent">
                <div id="title">
                    <h2  class="animation">Signup</h2>
                </div>
                <label for="name" id="label">Name: </label class="animation">
                <input type="text" id="name" name="name" class="input" class="animation">
                <label for="email" id="label" class="animation">Email: </label>
                <input type="text" name="email" id="email" class="input" class="animation">
                <label for="password" id="label" class="animation">Password: </label>
                <input type="password" name="password" id="password" class="input" class="animation">
                <label for="re-password" id="label" class="animation">Re-enter password: </label>
                <input type="password" name="re-password" id="re-password" class="input" class="animation">
                <button type="submit" id="submit" class="button" class="animation">Sign up</button>
                <img src="image/or_2.png" class="animation">
                <button type="submit" class="button" onclick="login(); return false;" class="animation">Login</button>

            </div>
        </form>
    </main>
    
</body>
</html>