<?php
include ('Conexion.php');
session_start();

    $correo=$_POST["email"];
    $pass=$_POST["password"];
    

    $sql = "SELECT * FROM usuarios WHERE Correo='$correo' AND Pass='$pass'";
    $resultado = mysqli_query($con, $sql);

    if (mysqli_num_rows($resultado) > 0) {
        $rol=mysqli_fetch_array($resultado);
        $nombre=$rol["Nombre"]."".$rol["Apellido"];
        $id_rol=$rol["id_rol"];
        $id=$rol["idusuarios"];
        
        $_SESSION["id"]=$id;
        $_SESSION["nombre"]=$nombre;
        $_SESSION["id_rol"]=$id_rol;

        echo "Si";
       
    }else{
        echo "No";
    }


?>