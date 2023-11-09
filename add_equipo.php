<?php 
    session_start();
    include_once("include/dbconn.php");

    if (isset($_POST['agregar'])) {
        $database = new conexion();
        $db = $database->open();
        try {
            $stmt = $db->prepare('INSERT INTO equipo (nombre_equipo) VALUES (:nombre)');
            $_SESSION['message']=($stmt ->execute(array(':nombre' => $_POST['nombre'])) ?'Equipo guardado exitosamente':'Algo salio mal');
        }
        catch (PDOException $e) {
        $_SESSION['message'] = $e-> getMessage();
        }
        $database->close();
    }
    else {
        $_SESSION['message'] == 'Por favor escribe algun nombre del equipo';
    }
    header('location: jugadores.php');

?>