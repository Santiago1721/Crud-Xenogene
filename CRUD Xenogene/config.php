<?php

$username = "usr_xclinic";
$password = "xclin##2024";
$host = "192.168.1.10";
$dbname = "db_xclinic";

try {
    $db = new PDO("pgsql:host=$host;dbname=$dbname", $username, $password);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
    die();
}

?>