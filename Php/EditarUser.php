<?php
include ('Conexion.php');
session_start();
$id=$_POST["id_user"];
    
    $sql = "SELECT * FROM usuarios u INNER JOIN estado e ON u.Estado=e.idestado INNER JOIN roles r ON u.id_rol=r.idroles WHERE u.idusuarios='$id'";
    $resultado = mysqli_query($con, $sql);

    if (mysqli_num_rows($resultado) > 0) {
    $fila = $resultado->fetch_assoc();

            ?>

                            <form action="Actualizar_User.php" method="post" class="mandar_editar for" id="update_user">

                            <div class="contain_datos">

                                <div class="colum1">
                                    <input type="text" name="name" placeholder="Nombre" value="<?php echo  $fila["Nombre"] ?>" required>

                                    <input type="text" name="apellido" placeholder="Apellidos" value="<?php echo  $fila["Apellido"] ?>" required>

                                    <input type="number" name="edad" placeholder="Edad" value="<?php echo  $fila["Edad"] ?>" required>

                                    <input type="email" name="email" placeholder="Correo" value="<?php echo  $fila["Correo"] ?>"required>

                                    <input type="text" name ="genero" placeholder="Genero" value="<?php echo  $fila["Genero"] ?>" disabled>
                                    <input type="hidden" name ="genero1"  value="<?php echo  $fila["Genero"] ?>" >
                                    <input type="hidden" name ="Identificacion1"  value="<?php echo  $fila["idusuarios"] ?>" >


                                </div>

                                <div class="colum1">
                                    
                                    <input type="number" name="Identificacion" placeholder="Identificacion" value="<?php echo  $fila["idusuarios"] ?>" disabled>

                                    <input type="number" name="telefono" placeholder="Telefono" value="<?php echo  $fila["Telefono"] ?>" required>

                                    <input type="text" name="fecha" placeholder="Fecha de Nacimiento" value="<?php echo  $fila["fecha_nacimiento"] ?>" required disabled>

                                    <input type="password" name="pass" placeholder="Contraseña" value="<?php echo  $fila["Pass"] ?>" required>

                                    <select name="estado" >
                                        <option value="1">Activo</option>
                                        <option value="2">Inactivo</option>
                                    </select>

                                    
                                </div>

                            </div>
                            <div class="enviar">
                                <button type="submit" >Actualizar</button>
                            </div>

                            <div class="enviar">
                                <button type="button"  onclick="Modal_('No')">Cancelar</button>
                            </div>

                        </form> 
            <?php
        }
    

?>

<script src="../Js/Modal_Mensaje.js"></script>
<script src="../Js/Ajax.js"></script>
<script src="../Js/Admin.js"></script>

