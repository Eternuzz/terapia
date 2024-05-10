<?php
include ('Conexion.php');
session_start();
    $id_user=$_SESSION["id"];
    $id=$_POST["id_doc"];
    $id=$_POST["mensaje_listo"];
    //$id=1;

        $insert3="INSERT INTO mensajes (idusuarios,) VALUES ('$id_user','')";
        $cont=mysqli_query($con,$insert3);
        if ($cont) {
           echo "Si";
        } else {
            echo "No";
        }




?>
