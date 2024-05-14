<?php
include ('Conexion.php');
session_start();
$id=$_SESSION["id"];
$id_terapia=$_POST["id_terapia"];
$data = array(
    "labels" => ["Duracion(mn)", "Dolor", "Fuerza"],
    "datasets" => array()
);
    
    $sql = "SELECT * FROM segterapia WHERE id_usuario='$id' AND Tipo_terapia='$id_terapia'";
    $resultado = mysqli_query($con, $sql);

    if (mysqli_num_rows($resultado) > 0) {

        $usedColors = array(); // Array para almacenar los colores ya utilizados

    while ($fila = $resultado->fetch_assoc()) {
        do {
            // Generar componentes RGB aleatorios
            $red = rand(0, 255);
            $green = rand(0, 255);
            $blue = rand(0, 255);

            // Generar el color en formato RGBA
            $backgroundColor = "rgba($red, $green, $blue, 0.5)";

            // Comprobar si el color ya ha sido utilizado
        } while (in_array($backgroundColor, $usedColors));

        // Agregar el color a la lista de colores utilizados
        $usedColors[] = $backgroundColor;

        // Agregar el conjunto de datos con el color de fondo aleatorio
        array_push($data['datasets'], array(
            "label" => $fila['Fecha'],
            "backgroundColor" => $backgroundColor,
            "data" => [$fila['Duracion'], $fila['Dolor'], $fila['Fuerza']]
        ));
    }
                


        ?>

            <canvas id="bar-chart"></canvas>

            <script>

                var data = <?php echo json_encode($data); ?>
               
                var options = {
                    scales: {
                        yAxes: [{
                            ticks: {
                                beginAtZero: true
                            }
                        }]
                    }
                };

                
                var ctx = document.getElementById("bar-chart").getContext("2d");
                var myBarChart = new Chart(ctx, {
                    type: 'bar',
                    data: data,
                    options: options
                });
            </script>

        <?php
    }

         
        
?>

