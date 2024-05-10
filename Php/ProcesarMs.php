<?php
include ('Conexion.php');
session_start();
    $id_user=$_SESSION["id"];
    $id_doc=$_POST["id_doc"];
    $mensaje=$_POST["mensaje_listo"];

        $insert3="INSERT INTO mensajes (id_remitente,Mensaje,id_receptor,Estado) VALUES ('$id_user','$mensaje','$id_doc','Sin Leer')";
        $cont=mysqli_query($con,$insert3);
        if ($cont) {
           echo "Si";
        } else {
            echo "No";
        }




?>
