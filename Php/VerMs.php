<?php
include ('Conexion.php');
session_start();



    $id=$_POST["id_mensaje"];
    
    $sql = "SELECT * FROM  mensajes   WHERE idmensajes='$id' ";
    $resultado = mysqli_query($con, $sql);

    if($resultado){

        $fila1 = $resultado->fetch_assoc();
        
 

        ?>
                        <div class="contain_mensaje" >
                            <p>   <?php   echo  $fila1["Mensaje"]  ?></p>

                            <button type="button"onclick="Modal_('No')">Cerrar</button>
                           
                        </div>            
        <?php

    }



?>


<script src="../Js/Modal_Mensajes.js"></script>