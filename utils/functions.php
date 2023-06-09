<?php
// check if an array of parameters is set
function check_parameters($arr): bool
{
    foreach($arr as $required_field) {
        if(!isset($_POST[$required_field])) {
            return false;
        }
    }
    return true;
}

// generate a random string with a given length
function str_rand(int $length = 64){ // 64 = 32
    $length = ($length < 4) ? 4 : $length;
    return bin2hex(random_bytes(($length-($length%2))/2));
}
