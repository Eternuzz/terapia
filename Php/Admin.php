<?php
include('Conexion.php');
session_start();

if($_SESSION["id"]!=null){

}else{
    echo "<script>window.location.href = '../Vistas/IniciarSesion.html'</script>";
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Css/Usuario5.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <title>Document</title>
</head>

<body>
    <!-- Encabezado -->

    <header>
        <div class="contain_header">
            <div class="logo">

            </div>
            <div class="barra">
                <?php

                 echo $_SESSION["nombre"];

                ?>
                            <form action="CerrarSesion.php" method="post" class="form_cerrar">
                 <button type="submit">Cerrar Sesion</button>
            </form>
            </div>

        </div>

    </header>

    <!-- Barra Navegacion -->

    <nav>
        <div class="contain_nav">
            <button onclick="cambiar_c('home')">Inicio</button>
            <button onclick="cambiar_c('users')">Usuarios y Especialistas</button>
            <!-- <button onclick="cambiar_c('graficas')">Ver Graficas Usuarios</button> -->
            <button onclick="cambiar_c('gestion')">Gestion</button>
        </div>

    </nav>

    <!-- Informacion -->

    <main>
        <div class="contain_main">


            <section class="Recordatorio cont_general" id="">

                        <div class="barra_lateral">
                            <button onclick="cambiar_c('crear_r')">Home</button>
                            <!-- <button id="record" onclick="cambiar_c('mis_r')">Mis Recordatorios</button> -->
                        </div>

                        <div class="contain_recordatorios">

                            <div class="contain_r" id="crear_r">
                                <div class="title_general">
                                    <h1>Home</h1>
                                </div>
                            </div>


                            <!-- <div class="contain_r" id="mis_r">

                                <div class="title_general">
                                    <h1>MIs Recordatorios</h1>
                                </div>

                                <form class="consulta" id="buscar_recordd">

                                    <button class="consultar_especialistas" id="buscarRecord" type="button" onclick="evento_normal('BuscarRSolo.php''#buscar_recordd''buscarRecord''bandeja_recordatorio'">Buscar</button>
                                </form>

                                <div class="bandeja_recordatorios" id="">

                                    <div class="bandeja">
                                        <p>Tipo_Cita</p>
                                        <p>Fecha</p>
                                        <p>Hora</p>
                                        <button>Eliminar</button>
                                    </div>

                                </div>

                            </div> -->


                        </div>


            </section>


            <section class="Recordatorio cont_general" id="users">

                <div class="barra_lateral">
                    <button onclick="cambiar_c('crear_user')">Crear Usuario</button>
                    <button onclick="cambiar_c('panel_users');Llamar_Users()">Panel Usuarios</button>
                </div>

                <div class="contain_recordatorios">

                    <div class="contain_r" id="crear_user">
                        <div class="title_general">
                            <h1>Crear Usuario/Especialista</h1>
                        </div>

                        <form action="../Php/ProcesarRegistro.php" method="post" class="for">

                            <div class="titulo">
                                <h2>REGISTRO</h2>
                            </div>


                            <div class="contain_datos">

                                <div class="colum1">
                                    <input type="text" name="name" placeholder="Nombre" required>

                                    <input type="text" name="apellido" placeholder="Apellidos" required>

                                    <input type="number" name="edad" placeholder="Edad"required>

                                    <select name="genero" >
                                        <option value="Femenino">Femenino</option>
                                        <option value="Masculino">Masculino</option>
                                    </select>

                                    <input type="email" name="email" placeholder="Correo"required>

                                </div>

                                <div class="colum1">
                                    
                                    <input type="number" name="Identificacion" placeholder="Identificacion" required>

                                    <input type="number" name="telefono" placeholder="Telefono" required>

                                    <input type="date" name="fecha" placeholder="Fecha de Nacimiento" required>


                                    <select name="rol" >
                                        <option value="3">Paciente</option>
                                        <option value="2">Especialista</option>
                                    </select>

                                    <input type="password" name="pass" placeholder="Contraseña"required>

                                    
                                </div>

                            </div>
                            <div class="enviar">
                                <button type="button" id="registroo" onclick="evento_click('../Php/ProcesarRegistro.php','.for','registroo','1',0)">Resgitrarse</button>
                            </div>

                        </form> 

                    </div>


                    <div class="contain_r" id="panel_users">

                        <div class="title_general">
                            <h1>Panel Usuarios</h1>
                        </div>

                        <form class="consulta" id="form_buscar_user">

                            <input type="text" name="date_user"class="select_especialidad">

                            <button class="consultar_especialistas" id="btn_user_bus" type="button" onclick="evento_normal('ConsultarUsuarioSolo.php','#form_buscar_user','btn_user_bus','panel_usuarios')">Buscar</button>
                        </form>

                        <div class="bandeja_recordatorios" id="panel_usuarios">


                        </div>

                    </div>


                </div>


            </section>


            <section class="Recordatorio cont_general" id="graficas">

                <div class="barra_lateral">
                    <button onclick="cambiar_c('ver_grafica')">Crear Usuario</button>
                    <button onclick="cambiar_c('panel_users')">Panel Usuarios</button>
                </div>

                <div class="contain_recordatorios">

                    <div class="contain_r" id="ver_grafica">
                        <div class="title_general">
                            <h1>Crear Usuario/Especialista</h1>
                        </div>
                        



                    </div>


                    <div class="contain_r" id="panel_users">

                        <div class="title_general">
                            <h1>Panel Usuarios</h1>
                        </div>

                        <form class="consulta" id="form_bus_user">

                            <input type="text" name="date_user"class="select_especialidad">

                            <button class="consultar_especialistas" id="btn_busca" type="button" >Buscar</button>
                        </form>

                        <div class="bandeja_recordatorios" id="ffq">

                            <div class="bandeja">
                                <p>Tipo_Cita</p>
                                <p>Fecha</p>
                                <p>Hora</p>
                                <button>Eliminar</button>
                            </div>

                        </div>

                    </div>
                </div>
            </section>


            <section class="Recordatorio cont_general" id="gestion">

                    <div class="barra_lateral">
                        <button onclick="cambiar_c('roles')">Roles</button>
                        <button onclick="cambiar_c('especialidades')">Especialidades</button>
                        <button onclick="cambiar_c('terapiass')">Terapias</button>
                        
                    </div>

                    <div class="contain_recordatorios">

                        <div class="contain_r" id="roles">


                        <div class="title_general">
                                <h1>Roles</h1>
                            </div>

                            <form class="consulta" id="crear_rol">

                                <input type="text" name="date_user" class="select_especialidad">

                                <button class="consultar_especialistas" id="btn_CrearRol" type="button"  onclick="evento_normal('CrearRoles.php','#crear_rol','btn_CrearRol','panel_rol')">Crear</button>
                            </form>

                            <div class="bandeja_recordatorios" id="panel_rol">

                            <?php  include_once ("AllRoles.php") ?>

                         

                            </div>
                            



                        </div>


                        <div class="contain_r" id="especialidades">

                            <div class="title_general">
                                <h1>Especialidad</h1>
                            </div>

                            <form class="consulta" id="form_crearEspecialidad">

                                <input type="text" name="date_user"class="select_especialidad">

                                <button class="consultar_especialistas" id="btnCE" type="button" onclick="evento_normal('CrearEspecialidades.php','#form_crearEspecialidad','btnCE','Panel_Especialidad')">Buscar</button>
                            </form>

                            <div class="bandeja_recordatorios" id="Panel_Especialidad">

                            <?php  include_once ("AllTerapias.php") ?>

                            </div>

                        </div>


                        <div class="contain_r" id="terapiass">
                            <div class="title_general">
                                <h1>Terapias</h1>
                            </div>

                                <form class="consulta" id="form_CT">

                                <input type="text" name="date_user"class="select_especialidad">

                                <button class="consultar_especialistas" id="btn_CT" type="button" onclick="evento_normal('CrearTerapias.php','#form_CT','btn_CT','panel_terapias')">Buscar</button>
                                </form>

                                <div class="bandeja_recordatorios" id="panel_terapias">

                                <?php  include_once ("AllEspecialidades.php") ?>

                                </div>
                            



                        </div>
                    </div>
                </section>



            <form action="" style="display:none" id="nul"></form>
        </div>
    </main>
</body>



<div class="modal_alerta">

    <div class="icono_modal">

    </div>

    <p class="text_modal">Exito!</p>

</div>


<div class="modal_mensaje" id="contain_modal">

    <form id="c_enviar_mensaje">

    </form>

</div>


<script src="../Js/Cambiar_Contenedor.js"></script>
<script src="../Js/AlertaBien.js"></script>
<script src="../Js/Ajax.js"></script>
<script src="../Js/enviar_mensaje.js"></script>
<script src="../Js/Modal_Mensaje.js"></script>
<script src="../Js/Admin.js"></script>
<script src="../Js/Mensajess.js"></script>

</html>