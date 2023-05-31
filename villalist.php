<?php
// load database
$db = new SQLite3("villa.sqlite");

// get first 10 villas
$villas = $db->query("SELECT * FROM villas LIMIT 10;");

if(isset($villas)) {
    require("villalist.view.php");
} else {
    echo "No villas";
}
include("villalist.view.php");