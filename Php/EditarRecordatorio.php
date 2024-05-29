<?php
include ('Conexion.php');
session_start();


    $id=$_POST["EditarR"];
    
    $sql = "SELECT * FROM recordatorio WHERE idRecordatorio='$id'";
    $resultado = mysqli_query($con, $sql);

    if (mysqli_num_rows($resultado) > 0) {
       $fila = $resultado->fetch_assoc();
            ?>
                                
                               

                            <form class="contenedor_crear" action="EditRecordatorio.php" method="post" id="crear_re2" >
                            <div class="img_crear">

                            </div>
                            <div class="texto_crear">

                                <input type="text" class="observacion" name="mensaje" value=" <?php   echo  $fila["Mensaje"]  ?>">

                            </div>
                            <div class="fecha_hora">

                                <input type="date" name="fecha" value="<?php   echo  $fila["Fecha"]  ?>">

                                <input type="time" name="hora" value="<?php   echo  $fila["Hora"]  ?>">
                                <input type="hidden" name="id" value="<?php   echo  $fila["idRecordatorio"]  ?>">

                            </div>
                            <!-- onclick="evento_click_('CrearRecordatorio.php','#crear_re','boton_recordatorio')" -->
                            <button type="button" id="boton_recordatorioE" class="btn_crearR" onclick="evento_click_('EditRecordatorio.php','#crear_re2','boton_recordatorioE')">Modificar</button>
                            <button type="button" class="btn_crearR" onclick="Modal_('No')">Cerrar</button>
                        </form>
                            
                                        
            <?php
        
    }
?>

<script src="../Js/EliminarRecordatori2.js"></script>

