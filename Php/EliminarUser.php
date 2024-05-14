<?php
include ('Conexion.php');

$eliminar=$_POST["id_user"];



    $sql = "DELETE FROM usuarios WHERE idusuarios ='$eliminar'";

    $resultado = mysqli_query($con, $sql);
    
    if ($resultado) {
    
        include_once "ConsultarUsuarios.php";
    
    }
    



