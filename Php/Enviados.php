<?php
include ('Conexion.php');
session_start();
$id=$_SESSION["id"];
    
    $sql = "SELECT * FROM usuarios u INNER JOIN mensajes n ON u.idusuarios=n.id_remitente  WHERE u.idusuarios='$id' ";
    $resultado = mysqli_query($con, $sql);

    if (mysqli_num_rows($resultado) > 0) {
        while ($fila = $resultado->fetch_assoc()) {


            $remitente=$fila["id_remitente"];
            $sql1 = "SELECT * FROM usuarios  WHERE idusuarios='$remitente' ";
            $resultado1 = mysqli_query($con, $sql1);
        
            if (mysqli_num_rows($resultado1) > 0) {
                while ($fila1 = $resultado1->fetch_assoc()) {

         
        


            ?>
                            <div class="bandeja" >
                                <p>   <?php   echo  $fila["Fecha"]  ?></p>
                                <p>   <?php   echo   $fila["Nombre"]  ?></p>
                                <p>   <?php   echo   $fila["Mensaje"]  ?></p>
                                <p>   <?php   echo   $fila["Estado"]  ?></p>

                               

                                <form data-form="<?php echo $fila["idusuarios"];?>" class="VerMs">
                                    <input type="hidden" name="id_mensaje" value="<?php   echo   $fila["idmensajes"]  ?>">
                                    <input type="hidden" name="id_user" value="<?php   echo   $id ?>">
                                    <button type="submit" > Ver </button>
                                </form>


                                <form data-form="<?php echo $fila["idusuarios"];?>" class="eliminarMs">
                                    <input type="hidden" name="id_mensaje" value="<?php   echo   $fila["idmensajes"]  ?>">
                                    <input type="hidden" name="id_user" value="<?php   echo   $id ?>">
                                    <button type="submit" > Eliminar </button>
                                </form>
                               
                            </div>                 
            <?php
        }
    }
}
    }
?>

<script src="../Js/EliminarMsEnviado.js"></script>
<script src="../Js/VerMensajes.js"></script>