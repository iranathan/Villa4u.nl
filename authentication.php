<?php
// import functions
require("utils/functions.php");

// load database
$db = new SQLite3("villa.sqlite");
$error_message = null;
$success_message = null;

// signup
if(check_parameters(["name", "email", "password", "re-password", "auth-type"]) and $_POST['auth-type'] == "signup") {
    // check if the password check and password match
    if($_POST['password'] != $_POST['re-password']) {
        $error_message = "Passwords do not match.";
        require "signup.php";
        return;
    }

    // check if email is already in use
    $sql = $db->prepare("SELECT * FROM accounts WHERE accounts.email = :email");
    $sql->bindValue("email", $_POST['email']);
    $res = $sql->execute()->fetchArray();
    if($res) {
        $error_message = "Email already in use.";
        require "signup.php";
        return;
    }

    // insert account into database
    $sql = $db->prepare("INSERT INTO accounts (name, email, password) VALUES (:name, :email, :password)");
    $sql->bindValue(":name", $_POST["name"]);
    $sql->bindValue(":email", $_POST['email']);
    $sql->bindValue(":password", md5($_POST['password']));
    $sql->execute();

    // notify user their account has been created.
    $success_message = "Account created successfully. Please login.";
    require "signup.php";
    return;
}

// login
if(check_parameters(["email", "password", "auth-type"]) and $_POST['auth-type'] == "login") {
    // check if email password correct
    $sql = $db->prepare("SELECT * FROM accounts WHERE accounts.email = :email and accounts.password = :password");
    $sql->bindValue(":email", $_POST['email']);
    $sql->bindValue(":password", md5($_POST['password']));
    $res = $sql->execute()->fetchArray();

    if(!$res) {
        $error_message = "Email or password incorrect.";
        require "login.php";
        return;
    }

    // make session.
    $sql = $db->prepare("INSERT INTO session (account_id, token, expire_timestamp) VALUES (:id, :token, :time)");
    $sql->bindValue(":id", $res["id"]);

    $session = str_rand(32);
    $timestamp = time() + 60 * 21600;

    $sql->bindValue(":token", $session);
    $sql->bindValue(":time", $timestamp);
    $sql->execute();

    // save cookie in browser.
    setcookie("VillaToken", $session, $timestamp);

    // redirect to home page
    header("location: index.php");
    return;
}