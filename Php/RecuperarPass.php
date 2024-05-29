<?php
include ('Conexion.php');

if(isset($_POST["id"])){

    $correo=$_POST["email1"];
    $id=$_POST["id"];

    $sql = "SELECT * FROM usuarios WHERE Correo='$correo' AND idusuarios='$id'";
    $resultado = mysqli_query($con, $sql);

    if (mysqli_num_rows($resultado) > 0) {

            $dates=mysqli_fetch_array($resultado);
            $pass=$dates["Pass"];

            $to = "eternuz123@gmail.com";
            $subject = "Prueba de correo electrónico desde PHP";
            $message = "Su Contraseña es:aaa";
            $headers="From : riseofrochy@gmail.com";
    
            // Cabeceras del correo electrónico
            // $headers = "From: riseofrochy@gmail.com\r\n";
            // $headers .= "Reply-To: remitente@example.com\r\n";
            // $headers .= "X-Mailer: PHP/" . phpversion();
    
            // Envío del correo electrónico
            if (mail($to, $subject, $message, $headers)) {
                echo mail.error_log();
            } else {
                echo "No";
            }
            
        
        
    }

    
    
}






?>