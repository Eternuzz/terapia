<?php
include ('Conexion.php');

if(isset($_POST["id"])){

    $correo=$_POST["email1"];
    $id=$_POST["id"];

    $sql = "SELECT * FROM usuarios WHERE Correo='$correo' AND idusuarios='$id'";
    $resultado = mysqli_query($con, $sql);

    if (mysqli_num_rows($resultado) > 0) {

            $dates=mysqli_fetch_array($resultado);
            $pass=$dates["Pass"];
            $Correo=$dates["Correo"];

            $to="".$Correo;
            $subject="Prueba correo";
            $message="Su Contraseña es : ". $pass;
            $headers='From: Prueba@gmail.com'."\r\n".'Reply-To: prueba@gmail.com';

            if(mail($to,$subject,$message,$headers)){
                echo"Si";
            }else{
                echo"No";
            }

    }

    
    
}






?>