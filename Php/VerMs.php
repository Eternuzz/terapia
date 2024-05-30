<?php
include ('Conexion.php');
session_start();



    $id=$_POST["id_mensaje"];
    
    $sql = "SELECT * FROM  mensajes   WHERE idmensajes='$id' ";
    $resultado = mysqli_query($con, $sql);

    if($resultado){

        $fila1 = $resultado->fetch_assoc();

        if($fila1["id_remitente"]==$_SESSION["id"]){

                        ?>


                        <div class="contain_mensaje" >
                            <p>   <?php   echo  $fila1["Mensaje"]  ?></p>


                            <button type="button" onclick="Modal_('No')">Cerrar</button>
                           
                        </div>     

                            <?php

                                    }else{

                            ?>

                            <div class="contain_mensaje" >
                            <p>   <?php   echo  $fila1["Mensaje"]  ?></p>

                            <form class="form_enviar_mensaje_listo" data-form="<?php echo $fila1["idmensajes"];?>">

                                <textarea name="mensaje_listo" id="hola" placeholder="escribe aqui tu respuesta"></textarea>
                                <input type="hidden" name="id_doc" value="<?php echo $fila1["id_remitente"];?>">
                                
                                <button type="submit" class="but_mensaje" onclick="Modal_('No')">Responder</button>

                                
                            </form>

                            <button type="button" onclick="Modal_('No')">Cerrar</button>
                           
                        </div>    


<?php
        }
        
 

        ?>
       
        <?php

    }



?>


<script src="../Js/Modal_Mensajes.js"></script>
<script src="../Js/enviarms.js"></script>

