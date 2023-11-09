<?php
session_start();
include_once("include/dbconn.php");
if (isset($_POST["editar"])) {
    $id = $_POST["id2"];
    $nombre = $_POST["nombres"];
    $database = new conexion();
    $db = $database->open();
    try {
        $stmt = $db->prepare("UPDATE equipo SET nombre_equipo = '$nombre' WHERE id_equipo = $id");
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