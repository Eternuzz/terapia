<?php
include ('Conexion.php');
session_start();


    $id=$_SESSION["id"];
    $idt=$_POST["id_terapia2"];
    
    $sql = "SELECT * FROM recordatorio r INNER JOIN terapias t ON r.id_terapia=t.idterapias WHERE r.id_usuario=$id AND t.idterapias=$idt";
    $resultado = mysqli_query($con, $sql);

    if (mysqli_num_rows($resultado) > 0) {
        while ($fila = $resultado->fetch_assoc()) {
            ?>
                            <div class="bandeja">
                                <p>   <?php   echo  $fila["Nombre_Terapia"]  ?></p>
                                <p>   <?php   echo   $fila["Fecha"]  ?></p>
                                <p>   <?php   echo   $fila["Hora"]  ?></p>}
                                <p>   <?php   echo   $fila["Mensaje"]  ?></p>
                                
                                <form data-form="<?php echo $fila["idRecordatorio"];?>" class="eliminarRecordatorio">
                                    <input type="hidden" name="deleteR" value="<?php   echo   $fila["idRecordatorio"]  ?>">
                                   
                                    <button type="submit" > Eliminar </button>
                                </form>

                                <form data-form="<?php echo $fila["idRecordatorio"];?>" class="editarRecordatorio">
                                    <input type="hidden" name="EditarR" value="<?php   echo   $fila["idRecordatorio"]  ?>">
                                   
                                    <button type="submit" > Editar </button>
                                    
                                </form>
                            </div>
                                        
            <?php
        }
    }<
?>

<script src="../Js/EliminarRecordatorio9.js"></script>