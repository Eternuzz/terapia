<?php
include ('Conexion.php');

    
    $sql = "SELECT * FROM roles";
    $resultado = mysqli_query($con, $sql);

    if (mysqli_num_rows($resultado) > 0) {
        while ($fila = $resultado->fetch_assoc()) {

            ?>
                            <div class="bandeja" >
                                <p>   <?php   echo  $fila["Nombre_Rol"]  ?></p>

                                <form data-form="<?php echo $fila["idroles"];?>" class="eliminarRol">
                                    <input type="hidden" name="id" value="<?php   echo   $fila["idroles"]  ?>">
                                    <button type="submit" > Eliminar </button>
                                </form>
                               
                            </div>                 
            <?php
        }
    }

?>

<script src="../Js/Admin.js"></script>