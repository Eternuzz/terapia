<?php
include ('Conexion.php');
session_start();
$id=$_SESSION["id"];
    
    $sql = "SELECT * FROM usuarios u INNER JOIN estado e ON u.Estado=e.idestado INNER JOIN roles r ON u.id_rol=r.idroles";
    $resultado = mysqli_query($con, $sql);

    if (mysqli_num_rows($resultado) > 0) {
        while ($fila = $resultado->fetch_assoc()) {

            ?>
                            <div class="bandeja" >
                                <p>   <?php   echo  $fila["idusuarios"]  ?></p>
                                <p>   <?php   echo   $fila["Nombre"]." ".$fila["Apellido"]  ?></p>
                                <p>   <?php   echo   $fila["Nombre_Estado"]  ?></p>
                                <p>   <?php   echo   $fila["Nombre_Rol"]  ?></p>

                               

                                <form data-form="<?php echo $fila["idusuarios"];?>" class="EditarUser ">
                                    <input type="hidden" name="id_user" value="<?php   echo   $fila["idusuarios"]  ?>">
                                    <button type="submit" > Editar </button>
                                </form>


                                <form data-form="<?php echo $fila["idusuarios"];?>" class="eliminarUser">
                                    <input type="hidden" name="id_user" value="<?php   echo   $fila["idusuarios"]  ?>">
                                    <button type="submit" > Eliminar </button>
                                </form>
                               
                            </div>                 
            <?php
        }
    }

?>

<script src="../Js/Admin.js"></script>

