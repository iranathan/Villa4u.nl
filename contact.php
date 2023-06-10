<?php
// import functions and authenticate
require("utils/functions.php");
require("utils/authenticate.php");

// load database
$db = new SQLite3("villa.sqlite");
$success_message = null;
$error_message = null;

// check if user is authenticated.
if(!$authenticated) {
    $error_message = "You are not logged in";
    require("contactform.php");
    return; 
}

if(check_parameters(["voornaam", "achternaam", "e-mail", "tel"])) {
    // add message to database
    $sql = $db->prepare("INSERT INTO messages(account_id, first_name, last_name, email, phone_number) VALUES (:aid, :fn, :ln, :email, :pn)");
    $sql->bindValue(":aid", $id);
    $sql->bindValue(":fn", $_POST['voornaam']);
    $sql->bindValue(":ln", $_POST['achternaam']);
    $sql->bindValue(":email", $_POST['e-mail']);
    $sql->bindValue(":pn", $_POST['tel']);
    $sql->execute();

    // redirect to contact page with message
    $success_message = "Message sent";
    require("contactform.php");
    return;
}
