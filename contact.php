<?php
    // authenticate current webpage.
    require("utils/authenticate.php")
?>

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
    <?php
        require("utils/header.php");
    ?>
    <main>
        <div class="contact-border">
            <div class="contact">
                <h3>Heeft u nog vragen? Vul dit formulier in. Wij beantwoorden zo snel mogelijk!</h3>
                <form action="post">
                    <table>
                        <tr>
                            <td> <label for="voornaam" class="voornaam">Voornaam:</label></td>
                            <td> <label for="achternaam" class="achternaam">Achternaam:</label> </td>
                        </tr>
                        <tr>
                            <td><input type="text" id="voornaam" name="voornaam" class="voornaam"> </td>
                            <td><input type="text" id="achternaam" name="achternaam" class="achternaam"></td>
                        </tr>
                        <tr>
                            <td><label for="e-mail" class="email">E-Mail:</label> </td>
                            <td><label for="tel" class="tel">Telefoon nummer:</label> </td>
                        </tr>
                        <tr>
                            <td><input type="email" id="e-mail" name="e-mail" class="email"> </td>
                            <td><input type="tel" id="tel" name="tel" class="tel"> </td>
                        </tr>
                        <tr>
                            <td><label for="bericht" class="bericht">Uw bericht:</label> </td>
                        </tr>
                        </table>
                        <input type="text" id="bericht" name="bericht" class="bericht"> <br>
                    <input type="submit" value="Verstuur">
                </form>
            </div>
        </div>
    </main>
    <?php
        require("utils/footer.php")
    ?>
</body>
</html>