<?php


require 'config.php';
require 'crud.php';

$username = "usr_xclinic";
$password = "xclin##2024";
$host = "192.168.1.10";
$dbname = "db_xclinic";


$ubm_code = $_POST['ubm_code'];
$ensayo = $_POST['ensayo'];
$barcode = $_POST['barcode'];
$npaciente = $_POST['npaciente'];
$dni = $_POST['dni'];
$edad = $_POST['edad'];
$facultativo = $_POST['facultativo'];
$centro = $_POST['centro'];
$telefono = $_POST['telefono'];
$email = $_POST['email'];
$procedencia = $_POST['procedencia'];
$observaciones = $_POST['observaciones'];
$frecepcion = $_POST['frecepcion'];


updateCliente($db, $ubm_code, $ensayo, $barcode, $npaciente, $dni, $edad, $facultativo, $centro, $telefono, $email, $procedencia, $observaciones, $frecepcion,
);

?>

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


<!--

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">

</head>
<body>
    

<input class="dato_a_actualizar">
<h2>Seleccione el dato a actualizar:</h2>

<form action = "crud.php" method = "post">

<input type = "text" name = "ubm_code" value="<?= $datos['ubm_code']?>">ubm_code</input>
<input type = "text" name = "ensayo" value="<?= $datos['ensayo']?>">ensayo</input>
<input type = "text" name = "barcode" value="<?= $datos['barcode']?>">barcode</input>
<input type = "text" name = "npaciente" value="<?= $datos['npaciente']?>">npaciente</input>
<input type = "text" name = "dni" value="<?= $datos['dni']?>">dni</input>
<input type = "text" name = "edad" value="<?= $datos['edad']?>">edad</input>
<input type = "text" name = "facultativo" value="<?= $datos['facultativo']?>">facultativo</input>
<input type = "text" name = "centro" value="<?= $datos['centro']?>">centro</input>
<input type = "text" name = "telefono" value="<?= $datos['telefono']?>">telefono</input>
<input type = "text" name = "email" value="<?= $datos['email']?>">email</input>
<input type = "text" name = "procedencia" value="<?= $datos['procedencia']?>">procedencia</input>
<input type = "text" name = "observaciones" value="<?= $datos['observaciones']?>">observaciones</input>
<input type = "text" name = "frecepcion" value=" <?= $datos['frecepcion']?>">recepcion</input>

</form>

</div>

-->



