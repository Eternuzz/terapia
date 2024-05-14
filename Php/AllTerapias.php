<?php
include ('Conexion.php');
    
    $sql = "SELECT * FROM terapias";
    $resultado = mysqli_query($con, $sql);

    if (mysqli_num_rows($resultado) > 0) {
        while ($fila = $resultado->fetch_assoc()) {

            ?>
                            <div class="bandeja" >
                                <p>   <?php   echo  $fila["Nombre_Terapia"]  ?></p>

                                <form data-form="<?php echo $fila["idterapias"];?>" class="eliminarTerapia">
                                    <input type="hidden" name="id" value="<?php   echo   $fila["idterapias"]  ?>">
                                    <button type="submit" > Eliminar </button>
                                </form>
                               
                            </div>                 
            <?php
        }
    }

?>

<script src="../Js/Admin.js"></script>