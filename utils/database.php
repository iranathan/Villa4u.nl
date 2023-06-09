<?php
// load database
$db = new SQLite3("villa.sqlite");

function get_villa($id) {
    global $db;
    $villas = $db->prepare("SELECT * FROM villas WHERE villas.id = :id");
    $villas->bindValue(":id", $id);
    return $villas->execute()->fetchArray();
}