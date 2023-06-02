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
                <input type="text" id="name" name="name" class="input animation">
                <label for="email" id="label" class="animation">Email: </label>
                <input type="email" name="email" id="email" class="input animation">
                <label for="password" id="label" class="animation">Password: </label>
                <input type="password" name="password" id="password" class="input animation" class="animation">
                <label for="re-password" id="label" class="animation">Re-enter password: </label>
                <input type="password" name="re-password" id="re-password" class="input animation">
                <button type="submit" id="submit" class="button animation">Sign up</button>
                <img src="image/or_2.png" alt="or" class="animation">
                <button type="submit" class="button animation" onclick="login(); return false;">Login</button>
                <?php if(isset($error_message)) : ?>
                    <span style="color:red"><?= $error_message ?></span>
                <?php elseif(isset($success_message)) : ?>
                    <span style="color:green"><?= $success_message ?></span>
                <?php endif; ?>
            </div>
        </form>
    </main>
    
</body>
</html>