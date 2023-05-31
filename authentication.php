<?php
// load database
$db = new SQLite3("villa.sqlite");

function check_parameters($arr) {
    foreach($arr as $required_field) {
        if(!isset($_POST[$required_field])) {
            echo "Not all parameters were filled";
            return;
        }
    }
}

if($_POST["auth-type"] == "signup") {
    check_parameters(["name", "email", "password", "re-password"]);

    // check if the password check and password match
    if($_POST['password'] != $_POST['re-password']) {
        echo "Passwords do not match";
        return;
    }

    // check if email is already in use
    $sql = $db->prepare("SELECT * FROM accounts WHERE accounts.email = :email");
    $sql->bindValue("email", $_POST['email']);
    $res = $db->querySingle($sql);
    if(!isset($res)) {
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

if($_POST["auth-type"] == "login") {
    check_parameters(["email", "password"]);


}