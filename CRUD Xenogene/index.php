<?php

$username = "usr_xclinic";
$password = "xclin##2024";

try
{
    $db= new PDO ('pgsql:host=192.168.1.10;dbname=db_xclinic;user=usr_xclinic;password=xclin##2024');
    foreach ($db->query('SELECT * FROM cliente;')as $row) {
        print_r($row);
    }
}
catch (PDOException $e)
{
    print "Error :" .$e->getMessage() . "<br/>";
    die;
}