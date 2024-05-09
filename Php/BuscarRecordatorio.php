<?php
include ('Conexion.php');
session_start();


    $id=$_SESSION["id"];
    
    $sql = "SELECT * FROM recordatorio r INNER JOIN terapias t ON r.id_terapia=t.idterapias WHERE r.id_usuario=$id";
    $resultado = mysqli_query($con, $sql);

    if (mysqli_num_rows($resultado) > 0) {
        while ($fila = $resultado->fetch_assoc()) {
            ?>
                            <div class="bandeja">
                                <p>   <?php   echo  $fila["Nombre_Terapia"]  ?></p>
                                <p>   <?php   echo   $fila["Fecha"]  ?></p>
                                <p>   <?php   echo   $fila["Hora"]  ?></p>}
                                <p>   <?php   echo   $fila["Mensaje"]  ?></p>
                                
                                <button >Eliminar</button>
                            </div>
                                        
            <?php
        }
    }
?>
