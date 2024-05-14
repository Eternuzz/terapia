<?php
include ('Conexion.php');

$eliminar=$_POST["id_mensaje"];
$id=$_POST["id_user"];

$sql = "SELECT * FROM mensajes  WHERE idmensajes='$eliminar'";
$resultado1 = mysqli_query($con, $sql);
if($resultado1){
    $dato = $resultado1->fetch_assoc();

    $sql = "DELETE FROM mensajes WHERE idmensajes='$eliminar'";
    $resultado = mysqli_query($con, $sql);

    if($dato["id_remitente"]==$id){
        if($resultado){
            include_once('Enviados.php');
        }

    }else{
        if($resultado){
            include_once('allMensajes.php');
        }
    }

}


?>

