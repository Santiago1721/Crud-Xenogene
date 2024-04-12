<?php

require 'config.php';



function createCliente($db, $ubm_code, $ensayo, $barcode, $npaciente, $dni, $edad, $facultativo, $centro, $telefono, $email, $procedencia, $observaciones, $frecepcion) {
    try {

        $stmt_check = $db->prepare("SELECT COUNT(*) FROM cliente WHERE ubm_code = :ubm_code");
        $stmt_check->bindParam(':ubm_code', $ubm_code);
        $stmt_check->execute();
        $count = $stmt_check->fetchColumn();

        if($count > 0){
            echo "La id Primaria ya esta en uso";
            return;
        }
      
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



function readClientes($db, $ubm_code) {
    try {
        $stmt = $db->prepare("SELECT * FROM cliente WHERE ubm_code = :ubm_code");
        $stmt->bindParam(':ubm_code', $ubm_code);

        $stmt->execute();

        $clientes = $stmt->fetchAll(PDO::FETCH_ASSOC);

        if(count($clientes) > 0) {
            foreach($clientes as $cliente){
                echo "UBM CODE" . $cliente['ubm_code'] . "<br>";
                echo "Ensayo" . $cliente['ensayo'] . "<br>";
                echo "Barcode" . $cliente['barcode'] . "<br>";
                echo "Npaciente" . $cliente['npaciente'] . "<br>";
                echo "dni" . $cliente['dni'] . "<br>";
                echo "edad" . $cliente['edad'] . "<br>";
                echo "facultativo" . $cliente['facultativo'] . "<br>";
                echo "centro" . $cliente['centro'] . "<br>";
                echo "telefono" . $cliente['telefono'] . "<br>";
                echo "email" . $cliente['email'] . "<br>";
                echo "procedencia" . $cliente['procedencia'] . "<br>";
                echo "observaciones" . $cliente['observaciones'] . "<br>";
                echo "frecepcion" . $cliente['frecepcion'] . "<br>";
            }
        }

        if(isset($_GET['crud'])) $db = $_GET['crud'];
        echo "Cliente Consultado exitosamente";

        
    } catch (PDOException $e) {
        echo "Error al eliminar el cliente: " . $e->getMessage();
    }

    /*if(key_exists($ubm_code){
       
    }catch(PDOException $e){

    } )
    */
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

function deleteCliente($db, $ubm_code) {
    try {
        $stmt = $db->prepare("DELETE FROM cliente WHERE ubm_code = :ubm_code");
        $stmt->bindParam(':ubm_code', $ubm_code);

        $stmt->execute();
        
        if(isset($_POST['crud'])) $id = $_POST['crud'];
        echo "Cliente eliminado exitosamente";
    } catch (PDOException $e) {
        echo "Error al eliminar el cliente: " . $e->getMessage();
    }
}

?>

