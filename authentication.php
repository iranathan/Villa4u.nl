<?php
// load database
$db = new SQLite3("villa.sqlite");

function check_parameters($arr) {
    foreach($arr as $required_field) {
        if(!isset($_POST[$required_field])) {
            return false;
        }
    }
    return true;
}

// signup
if(check_parameters(["name", "email", "password", "re-password", "auth-type"]) and $_POST['auth-type'] == "signup") {
    // check if the password check and password match
    if($_POST['password'] != $_POST['re-password']) {
        echo "Passwords do not match";
        return;
    }

    // check if email is already in use
    $sql = $db->prepare("SELECT * FROM accounts WHERE accounts.email = :email");
    $sql->bindValue("email", $_POST['email']);
    $res = $sql->execute()->fetchArray();
    if(!$res) {
        echo "Email already in use";
        return;
    }

    $sql = $db->prepare("INSERT INTO accounts (name, email, password) VALUES (:nane, :email, :password)");
    $sql->bindValue(":name", $_POST["name"]);
    $sql->bindValue(":email", $_POST['email']);
    $sql->bindValue(":password", md5($_POST['password']));
    $sql->execute();

    echo "account created";
    return;
}

// login
if(check_parameters(["email", "password", "auth-type"]) and $_POST['auth-type'] == "login") {
    // check if email password correct
    $sql = $db->prepare("SELECT * FROM accounts WHERE accounts.email = :email and accounts.password = :password");
    $sql->bindValue(":email", $_POST['email']);
    $sql->bindValue(":password", $_POST['password']);
    $res = $sql->execute()->fetchArray();

    if(!$res) {
        echo "Account or email incorrect.";
        return;
    }

    echo "Logged in as ".$res["name"];
}