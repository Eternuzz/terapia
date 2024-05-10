<?php
include ('Conexion.php');
//session_start();

    $id=$_POST["id_especialidad"];
    //$id=1;
    
    $sql = "SELECT * FROM usuarios u INNER JOIN user_especialidad ue ON u.idusuarios=ue.id_user INNER JOIN especialidad e ON ue.id_especialidad=e.idespecialidad  WHERE e.idespecialidad='$id' ";
    $resultado = mysqli_query($con, $sql);

    if (mysqli_num_rows($resultado) > 0) {
        while ($fila = $resultado->fetch_assoc()) {
            ?>
                    <div class="especialista">

                        <div class="img_especialista">

                        </div>

                        <p>   <?php  
                        
                        echo $fila["Nombre"]." ".$fila["Apellido"]
                        
                        ?></p>

                        <p>   <?php  
                        
                        echo $fila["Nombre_especialidad"]
                        
                        ?></p>

                        
                    <form class="form_enviar_mensaje" data-form="<?php echo $fila["idusuarios"];?>">
                        <input type="hidden" name="pre_mensaje" value="<?php echo $fila["idusuarios"];?>">
                        <button type="submit" class="but_eliminar">Ennviar Mensaje</button>
                    </form>
                    </div>
                                        
            <?php
        }
    }
?>
<script src="../Js/enviar_mensaje.js"></script>



