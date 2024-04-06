<?php


require 'config.php';
require 'crud.php';

$username = "usr_xclinic";
$password = "xclin##2024";
$host = "192.168.1.10";
$dbname = "db_xclinic";




foreach($clientes as $cliente):

?>

<tr>
    <td><?= $cliente['udb_code']?></td>
    <td><?= $cliente['ensayo']?></td>
    <td><?= $cliente['barcode']?></td>
    <td><?= $cliente['npaciente']?></td>
    <td><?= $cliente['dni']?></td>
    <td><?= $cliente['edad']?></td>
    <td><?= $cliente['facultativo']?></td>
    <td><?= $cliente['centro']?></td>
    <td><?= $cliente['telefono']?></td>
    <td><?= $cliente['email']?></td>
    <td><?= $cliente['procedencia']?></td>
    <td><?= $cliente['observaciones']?></td>
    <td><?= $cliente['recepcion']?></td>
   


</tr>

<?php endforeach;

?>
