<?php
include ('Conexion.php');

$eliminar=$_POST["id"];


    $sql = "DELETE FROM roles WHERE idroles='$eliminar'";
    $resultado = mysqli_query($con, $sql);

        if($resultado){
            include_once('AllRoles.php');
        }




?>