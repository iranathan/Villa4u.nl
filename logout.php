<?php
if (isset($_COOKIE['VillaToken'])) {
    unset($_COOKIE['VillaToken']);
    setcookie('VillaToken', '', -1, '/');
}

require("login.php");