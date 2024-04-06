<?php

require 'config.php';



function createCliente($db, $ubm_code, $ensayo, $barcode, $npaciente, $dni, $edad, $facultativo, $centro, $telefono, $email, $procedencia, $observaciones, $frecepcion) {
    try {
        $stmt = $db->prepare("INSERT INTO cliente (ubm_code, ensayo, barcode, npaciente, dni, edad, facultativo, centro, telefono, email, procedencia, observaciones, frecepcion) 
                            VALUES (:ubm_code, :ensayo, :barcode, :npaciente, :dni, :edad, :facultativo, :centro, :telefono, :email, :procedencia, :observaciones, :frecepcion)");
        $stmt->bindParam(':ubm_code', $ubm_code);
        $stmt->bindParam(':ensayo', $ensayo);
        $stmt->bindParam(':barcode', $barcode);
        $stmt->bindParam(':npaciente', $npaciente);
        $stmt->bindParam(':dni', $dni);
        $stmt->bindParam(':edad', $edad);
        $stmt->bindParam(':facultativo', $facultativo);
        $stmt->bindParam(':centro', $centro);
        $stmt->bindParam(':telefono', $telefono);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':procedencia', $procedencia);
        $stmt->bindParam(':observaciones', $observaciones);
        $stmt->bindParam(':frecepcion', $frecepcion);
        $stmt->execute();
        echo "Cliente creado exitosamente";
    } catch (PDOException $e) {
        echo "Error al crear el cliente: " . $e->getMessage();
    }
}



function readClientes($db) {
    try {
        $stmt = $db->query('SELECT * FROM cliente');
        $clientes = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $clientes;
        

    } catch (PDOException $e) {
        echo "Error al leer los clientes: " . $e->getMessage();
        return false;
    }
}

function updateCliente($db,  $ubm_code, $ensayo, $barcode, $npaciente, $dni, $edad, $facultativo, $centro, $telefono, $email, $procedencia, $observaciones, $frecepcion) {
    try {
        $stmt = $db->prepare("UPDATE cliente SET ubm_code = :ubm_code, ensayo = :ensayo, barcode = :barcode, npaciente = :npaciente, dni = :dni, edad = :edad, 
                            facultativo = :facultativo, centro = :centro, telefono = :telefono, email = :email, procedencia = :procedencia, observaciones = :observaciones, 
                            frecepcion = :frecepcion WHERE ubm_code = :ubm_code");
        $stmt->bindParam(':ubm_code', $ubm_code);
        $stmt->bindParam(':ensayo', $ensayo);
        $stmt->bindParam(':barcode', $barcode);
        $stmt->bindParam(':npaciente', $npaciente);
        $stmt->bindParam(':dni', $dni);
        $stmt->bindParam(':edad', $edad);
        $stmt->bindParam(':facultativo', $facultativo);
        $stmt->bindParam(':centro', $centro);
        $stmt->bindParam(':telefono', $telefono);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':procedencia', $procedencia);
        $stmt->bindParam(':observaciones', $observaciones);
        $stmt->bindParam(':frecepcion', $frecepcion);

        
        
        $stmt->execute();

        if(isset($_POST['crud'])) $id = $_GET['crud'];
       

        echo "Cliente actualizado exitosamente";
    } catch (PDOException $e) {
        echo "Error al actualizar el cliente: " . $e->getMessage();
    }
}

function deleteCliente($db, $id) {
    try {
        $stmt = $db->prepare("DELETE FROM cliente WHERE id = :id");
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        echo "Cliente eliminado exitosamente";
    } catch (PDOException $e) {
        echo "Error al eliminar el cliente: " . $e->getMessage();
    }
}

?>

