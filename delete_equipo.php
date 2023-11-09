<?php
session_start();
include_once("include/dbconn.php");
if (isset($_POST["id"])) {
    $id = $_POST["id"];
    $database = new conexion();
    $db = $database->open();
    try {
        $stmt = $db->prepare("DELETE FROM equipo WHERE id_equipo = $id");
        $_SESSION['message']=($stmt ->execute() ?'Equipo guardado exitosamente':'Algo salio mal');
    } catch (PDOException $e) {
        $_SESSION['message'] = $e-> getMessage();
    }
    $database->close();
}
else {
    $_SESSION['message'] == 'Error';
}
header('location: jugadores.php');
?>