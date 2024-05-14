<?php
include ('Conexion.php');

$eliminar=$_POST["deleteR"];


$sql = "DELETE FROM recordatorio WHERE idrecordatorio ='$eliminar'";

$resultado = mysqli_query($con, $sql);

if ($resultado) {

    include_once "BuscarRecordatorio.php";

}


