<?php
include ('conect.php');

$eliminar=$_POST["delete"];


$sql = "DELETE  FROM recordatorio WHERE idrecordatorio =$eliminar'";

$resultado = mysqli_query($c, $sql);

if ($resultado) {
    while($fill1=mysqli_fetch_array($efectuar1)){
    ?>


            <div class="bandeja">

                <p>   <?php   echo  $fila["Nombre_Terapia"]  ?></p>
                <p>   <?php   echo   $fila["Fecha"]  ?></p>
                <p>   <?php   echo   $fila["Hora"]  ?></p>
                <p>   <?php   echo   $fila["Mensaje"]  ?></p>
                                                 
                <form class="form_eliminar_record" data-form="<?php echo $fila["idrecordatorio"];?>">
                    <input type="hidden" name="delete" value="<?php echo $fila["idrecordatorio"];?>">
                    <button type="submit" class="but_eliminar">Eliminar</button>
                </form>
            </div>
                    <?php
                    }
                }
            ?>
    </table>
    <script src="../Js/eliminar_recordatorio.js"></script>


