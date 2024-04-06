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

createCliente($db, $ubm_code, $ensayo, $barcode, $npaciente, $dni, $edad, $facultativo, $centro, $telefono, $email, $procedencia, $observaciones, $frecepcion,
);




/*$con = mysqli_connect($host, $username, $password, $dbname);
if (mysqli_connect_errno()) {
    echo "Error al conectar a MySQL: " . mysqli_connect_error();
    exit();
}

$requete = "INSERT INTO cliente(ubm_code, ensayo, barcode, npaciente, dni, edad, facultativo, centro, telefono, email, procedencia, observaciones, frecepcion) VALUES ('$ubm_code', '$ensayo', '$barcode', '$npaciente', '$dni', '$edad', '$facultativo', '$centro', '$telefono', '$email', '$procedencia', '$observaciones', '$frecepcion')";

if (mysqli_query($con, $requete)) {
    echo "<h1>INSERCIÓN EXITOSA</h1>";
} else {
    echo "<h1>Error al ejecutar la consulta: " . mysqli_error($con) . "</h1>";
}

mysqli_close($con);*/
?>