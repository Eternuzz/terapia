<?php
include ('Conexion.php');

session_start();

$correo=$_POST["email"];
$pass=$_POST["password"];
    
$sql = "SELECT * FROM usuarios WHERE Correo='$correo' AND Pass='$pass'";
$resultado = mysqli_query($con, $sql);

if (mysqli_num_rows($resultado) > 0) {

    $rol=mysqli_fetch_array($resultado);

    $nombre=$rol["Nombre"];
    $rol=$rol["id_rol"];
        
    $_SESSION["nombre"]=$nombre;
    $_SESSION["rol"]=$rol;

    if($_SESSION["rol"]==1){

        echo "<script>window.location='Vistas/Admin.php'</script>";

    }else if($_SESSION["rol"]==2){

        echo "<script>window.location='Vistas/Especialista.php'</script>";

    }else if($_SESSION["rol"]==3){

        echo "<script>window.location='Vistas/Usuario.php'</script>";
        
    }

    echo "<script>window.location='../index.php'</script>";

}

?>