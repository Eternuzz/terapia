<?php
include ('Conexion.php');
session_start();

    $id=$_POST["pre_mensaje"];
    
    $sql = "SELECT * FROM usuarios u INNER JOIN user_especialidad ue ON u.idusuarios=ue.id_user INNER JOIN especialidad e ON ue.id_especialidad=e.idespecialidad  WHERE u.idusuarios='$id' ";
    $resultado = mysqli_query($con, $sql);

    if (mysqli_num_rows($resultado) > 0) {
        while ($fila = $resultado->fetch_assoc()) {
            ?>
                    <h2>Enviar Mensake</h2>
                        
                    <div class="especialista_1">

                        <div class="img_especialista">

                        </div>

                        <p>   <?php  
                        
                        echo $fila["Nombre"]." ".$fila["Apellido"]
                        
                        ?></p>

                        <p>   <?php  
                        
                        echo $fila["Nombre_especialidad"]
                        
                        ?></p>
                        
                        <textarea name="mensaje_listo" id="hola"></textarea>

                        
                    <form class="form_enviar_mensaje_listo" data-form="<?php echo $fila["idusuarios"];?>">
                        <textarea name="mensaje_listo" id="hola"></textarea>
                        <input type="hidden" name="id_doc" value="<?php echo $fila["idusuarios"];?>">
                        <button type="submit" class="but_eliminar">Ennviar Mensaje</button>
                    </form>
                    </div>
                                        
            <?php
        }
    }
?>

<script src="../Js/enviarms.js"></script>