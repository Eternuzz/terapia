<?php
include ('Conexion.php');

$eliminar=$_POST["id"];


    $sql = "DELETE FROM especialidad WHERE idespecialidad='$eliminar'";
    $resultado = mysqli_query($con, $sql);

        if($resultado){
            include_once('AllEspecialidades.php');
        }




?>