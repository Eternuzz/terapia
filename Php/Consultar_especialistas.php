<?php
include ('Conexion.php');

$id = $_POST["id_especialidad"];

$a = mysqli_query($con, "SELECT * FROM usuarios u INNER JOIN user_especialidad up ON u.idusuarios=up.id_user INNER JOIN especialidad e ON e.id_especialidad=up.id_especialidad WHERE u.Estado=1 AND id_rol=2 AND e.id_especialidad=$id");

if (mysqli_num_rows($a) > 0) {
    while ($fila = $a->fetch_assoc()) {

        echo "<div class='especialista'>

            <div class='img_especialista'>

            </div>

            <p>$fila['Nombre']</p>

            <p>Especialidad: $fila['Nombre_especialidad']</p>

            <button class='enviar_mensaje'> Enviar Mensaje </button>
        </div>";
    }
}

 //       ?>


            <!-- <div class="especialista">

                <div class="img_especialista">

                </div>

                <p>Nombre</p>

                <p>Especialidad</p>

                <button class="enviar_mensaje"> Enviar Mensaje </button>

            </div> -->

<?php
//    }
//}

?>