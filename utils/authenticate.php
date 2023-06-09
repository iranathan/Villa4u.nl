<?php
// get db
$db = new SQLite3("villa.sqlite");

// to be set if authenticated
$id = null;
$name = null;
$email = null;
$authenticated = false;

// check if session exists and is valid.
if(isset($_COOKIE["VillaToken"])) {
    $token = $_COOKIE["VillaToken"];

    // get session from database
    $sql = $db->prepare("SELECT * FROM session WHERE session.token = :token");
    $sql->bindValue("token", $token);
    $res = $sql->execute()->fetchArray();

    // check if cookie exists and is not expired
    if($res) {
        if(isset($res['expire_timestamp']) and time() < $res["expire_timestamp"]) {
            // get user information
            $info = $db->prepare("SELECT * FROM accounts WHERE accounts.id = :id");
            $info->bindValue(":id", $res['account_id']);
            $info_res = $info->execute()->fetchArray();

            // assign user information
            if($info_res) {
                $authenticated = true;
                $name = $info_res["name"];
                $email = $info_res["email"];
                $id = $info_res['id'];
            }
        } else {
            // delete expired cookie from database
            $del = $db->prepare("DELETE FROM session WHERE session.token = :token");
            $del->bindValue(":token", $token);
            $del->execute();
        }
    }
}
