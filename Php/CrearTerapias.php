<?php
include ('conexion.php');


$data=$_POST["date_user"];


    $insert3="INSERT INTO terapias (Nombre_Terapia) VALUES ('$data')";
    $cont=mysqli_query($con,$insert3);
    if ($cont) {
       include "AllTerapias.php";
    } else {
        echo "Algo Fallo";
    }
    
?>