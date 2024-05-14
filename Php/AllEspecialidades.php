<?php
include ('Conexion.php');
    
    $sql = "SELECT * FROM especialidad";
    $resultado = mysqli_query($con, $sql);

    if (mysqli_num_rows($resultado) > 0) {
        while ($fila = $resultado->fetch_assoc()) {

            ?>
                            <div class="bandeja" >
                                <p>   <?php   echo  $fila["Nombre_especialidad"]  ?></p>

                                <form data-form="<?php echo $fila["idespecialidad"];?>" class="eliminarEspecialidad">
                                    <input type="hidden" name="id" value="<?php   echo   $fila["idespecialidad"]  ?>">
                                    <button type="submit" > Eliminar </button>
                                </form>
                               
                            </div>                 
            <?php
        }
    }

?>

<script src="../Js/Admin.js"></script>