<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Clientes</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<table class="tabla_resultados_consulta">
    <thead>
        <tr class="resultados_consulta_clientes">
            <th>UBM Code</th>
            <th>Ensayo</th>
            <th>Barcode</th>
            <th>Nombre Paciente</th>
            <th>DNI</th>
            <th>Edad</th>
            <th>Facultativo</th>
            <th>Centro</th>
            <th>Telefono</th>
            <th>Email</th>
            <th>Procedencia</th>
            <th>Observaciones</th>
            <th>Frecepcion</th>
        </tr>
    </thead>
    <tbody>
        <?php
        require 'crud.php';
        require 'config.php';
        $clientes = readClientes($db);
        $color_fondo = '';
        if (!empty($clientes)) {
            $color_fondo = 'lightblue'; 
        } else {
            echo '<tr><td colspan="13">No hay clientes recientes</td></tr>'; // Mensaje si no hay clientes
        }
        // Muestra los clientes en la tabla
        foreach ($clientes as $cliente) {
        ?>
        <tr style="background-color: <?php echo $color_fondo; ?>" id="ubm_code<?php echo $cliente['ubm_code']; ?>">
            <td><?php echo $cliente['ubm_code']; ?></td>
            <td><?php echo $cliente['ensayo']; ?></td>
            <td><?php echo $cliente['barcode']; ?></td>
            <td><?php echo $cliente['npaciente']; ?></td>
            <td><?php echo $cliente['dni']; ?></td>
            <td><?php echo $cliente['edad']; ?></td>
            <td><?php echo $cliente['facultativo']; ?></td>
            <td><?php echo $cliente['centro']; ?></td>
            <td><?php echo $cliente['telefono']; ?></td>
            <td><?php echo $cliente['email']; ?></td>
            <td><?php echo $cliente['procedencia']; ?></td>
            <td><?php echo $cliente['observaciones']; ?></td>
            <td><?php echo $cliente['frecepcion']; ?></td>
        </tr>
        <?php } ?>
    </tbody>
</table>

<container class="zona_debajo_de_clientes_consultados">
    <input type="text" name="seleccionado" id="ubmcodeingresado" placeholder="Ingrese su UBM Code" onforminput="cambiarColor('ubmcodeingresado')">
    <button class="boton_verde" onclick="cambiarColor('green')">Aprobado</button>
    <button class="boton_amarillo" onclick="cambiarColor('yellow')">En Curso</button>
    <button class="boton_rojo" onclick="cambiarColor('red')">Denegado</button>
    <a href="index.html" class="boton_return4" type="submit">Volver</a>
</container>

<script>
    function cambiarColor(color) {
        var ubmCode = document.getElementById('ubmcodeingresado').value;
        var filaId = 'ubm_code' + ubmCode;
        var fila = document.getElementById(filaId);
        if (fila) {
            fila.style.backgroundColor = color;
        } else {
            alert('No se encontró ninguna fila con el UBM Code ingresado.');
        }
    }
</script>
</body>
</html>
