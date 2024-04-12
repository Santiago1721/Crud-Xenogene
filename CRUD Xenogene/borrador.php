<?php


require 'config.php';
require 'crud.php';

$username = "usr_xclinic";
$password = "xclin##2024";
$host = "192.168.1.10";
$dbname = "db_xclinic";


$ubm_code = $_POST['ubm_code'];



deleteCliente($db, $ubm_code);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuario Creado Exitosamente</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
</body>
</html>

<a href="creacion.html" class = "boton_return">Volver</a>

