<?php
// load database
$db = new SQLite3("villa.sqlite");

// get first 10 villas
$villas = $db->querySingle("SELECT * FROM villa LIMIT 10;");