<?php

// load database
$db = new SQLite3("villa.sqlite");

// get first 10 villas
$villas = $db->query("SELECT * FROM villas LIMIT 10;");