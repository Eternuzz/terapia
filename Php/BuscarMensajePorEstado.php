<?php
include ('Conexion.php');
session_start();
$id=$_SESSION["id"];
$estado=$_POST["estado"];
    
    $sql = "SELECT * FROM usuarios u INNER JOIN mensajes n ON u.idusuarios=n.id_receptor  WHERE u.idusuarios='$id' AND m.Estado='$estado'";
    $resultado = mysqli_query($con, $sql);

    if (mysqli_num_rows($resultado) > 0) {
        while ($fila = $resultado->fetch_assoc()) {

            $remitente=$fila["id_remitente"];
            $sql1 = "SELECT * FROM usuarios  WHERE idusuarios='$remitente' ";
            $resultado1 = mysqli_query($con, $sql);
        
            if (mysqli_num_rows($resultado1) > 0) {
                while ($fila1 = $resultado1->fetch_assoc()) {
        


            ?>
                            <div class="bandeja">
                                <p>   <?php   echo  $fila["Fecha"]  ?></p>
                                <p>   <?php   echo   $fila["Nombre"]  ?></p>
                                <p>   <?php   echo   $fila["Mensaje"]  ?></p>}
                                <p>   <?php   echo   $fila["Estado"]  ?></p>
                                <button >Eliminar</button>
                                <button >Eliminar</button>
                            </div>            
            <?php
        }
    }
?>
