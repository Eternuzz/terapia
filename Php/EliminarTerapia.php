<?php
include ('Conexion.php');

$eliminar=$_POST["id"];


    $sql = "DELETE FROM terapias WHERE idterapias='$eliminar'";
    $resultado = mysqli_query($con, $sql);

        if($resultado){
            include_once('AllTerapias.php');
        }




?>