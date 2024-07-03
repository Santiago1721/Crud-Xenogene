<?php

$username = "you have to put here a valid username in the pgadmin db that you want to access";
$password = "you have to put here the password of the pgadmin db available user";

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
