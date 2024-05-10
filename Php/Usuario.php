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
    <link rel="stylesheet" href="../Css/Usuario.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
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
            </div>

        </div>

    </header>

    <!-- Barra Navegacion -->

    <nav>
        <div class="contain_nav">
            <button onclick="cambiar_c('terapias')">Terapias</button>
            <button onclick="cambiar_c('Seguimiento_terapia')">Seguimiento Terapias</button>
            <button onclick="cambiar_c('Comunicacion')">Comunicacion</button>
            <button onclick="cambiar_c('Recordatorio')">Recordatorio</button>
            <button onclick="cambiar_c('Configuracion')">Configuracion</button>
        </div>

    </nav>

    <!-- Informacion -->

    <main>
        <div class="contain_main">

            <section class="terapias" id="terapias">

                <div class="barra_lateral">
                    <button onclick="cambiar_c()">Home</button>
                    <button onclick="cambiar_c('terapia_espalda')">Estiramiento Para La Espalda</button>
                    <button onclick="cambiar_c('terapia_ortopedica')">Rehabilitacion Ortopedica</button>
                    <button onclick="cambiar_c('terapia_pulmonar')">Rehabilitacion Pulmonar</button>
                    <button onclick="cambiar_c('terapia_cardiaca')">Rehabilitacion Cardiaca</button>
                    <button onclick="cambiar_c('terapia_pediatrica')">Rehabilitacion Pediatrica</button>
                    <button onclick="cambiar_c('terapia_geriatrica')">Rehabilitacion Geriatrica</button>
                    <button onclick="cambiar_c('terapia_deportiva')">Rehabilitacion Deportiva</button>
    
                </div>
    
                <div class="contenido_terapias">
    
                    <div class="terapia" id="terapia_espalda">

                        
                        <h2>Ejercicios para la espalda</h2>


                        <div class="ejercicios">
                            <img src="../Img/imagen1" alt="imagen1">
                            <div class="info">
                                <h3>Estiramiento de rodilla al pecho</h3>
                                <p>Acuéstate boca arriba con las rodillas dobladas (A).
                                    Tira de una rodilla hacia el pecho con ambas manos (B).
                                    Mantén durante cinco segundos, luego cambia de pierna (C).
                                    Repite con ambas piernas al mismo tiempo (D).
                                    Haz cada estiramiento 2-3 veces.
                                    Realiza la serie de ejercicios una vez por la mañana y por la noche, si es posible.</p>

                            </div>
                        </div>


                        <div class="ejercicios">
                            <img src="../Img/imagen2" alt="imagen2">
                            <div class="info">
                                <h3>Estiramiento giratorio de la región lumbar</h3>
                                <p>Acuéstate boca arriba con las rodillas dobladas y los pies en el suelo (A).
                                    Mantén los hombros en el suelo y gira lentamente las rodillas hacia un lado (B).
                                    Mantén esa posición de 5 a 10 segundos y luego regresa a la posición inicial (C).
                                    Repite el ejercicio hacia el lado opuesto (D).
                                    Realiza cada estiramiento 2-3 veces.
                                    Haz la serie de ejercicios una vez por la mañana y una vez por la noche, si es posible.</p>
                            </div>
                        </div>


                        <div class="ejercicios">
                            <img src="../Img/imagen3" alt="imagen3">
                            <div class="info">
                                <h3>Ejercicios de flexibilidad para la región lumbar</h3>
                                <p>Acuéstate boca arriba con las rodillas dobladas y los pies en el suelo.
                                    Levanta la parte baja de la espalda contrayendo los abdominales.
                                    Mantén la posición durante cinco segundos y luego relaja.
                                    Luego, empuja el ombligo hacia el suelo.
                                    Mantén la posición durante cinco segundos y relaja.
                                    Repite el proceso.
                                    Comienza con cinco repeticiones al día y aumenta gradualmente.</p>
                            </div>
                        </div>


                        <div class="ejercicios">
                            <img src="../Img/imagen4" alt="imagen4">
                            <div class="info">
                                <h3>Ejercicio de puente</h3>
                                <p>Acuéstate boca arriba con rodillas dobladas y pies en el suelo.
                                    Mantén hombros y cabeza relajados.
                                    Aprieta abdomen y glúteos.
                                    Eleva caderas formando una línea recta con rodillas y hombros.
                                    Mantén la posición durante tres respiraciones profundas.
                                    Vuelve a la posición inicial y repite.
                                    Comienza con cinco repeticiones al día y aumenta gradualmente hasta 30.



                                    </p>
                            </div>
                        </div>


                        <div class="ejercicios">
                            <img src="../Img/imagen5" alt="imagen5">
                            <div class="info">
                                <h3>Estiramiento de gato</h3>
                                <p>Arrodíllate sobre las rodillas y las manos (A).
                                    Arquea lentamente la espalda, elevando la barriga hacia el techo y dirigiendo la cabeza hacia abajo (B).
                                    Deja caer lentamente la espalda y el abdomen hacia el suelo mientras levantas la cabeza (C).
                                    Vuelve a la posición inicial (A).
                                    Repite este estiramiento de tres a cinco veces, dos veces al día.</p>
                            </div>
                        </div>


                        <div class="ejercicios">
                            <img src="../Img/imagen6" alt="imagen6">
                            <div class="info">
                                <h3>Estiramiento giratorio sentado de la región lumbar</h3>
                                <p>siéntate en una silla o taburete sin apoyabrazos.
                                    Cruza la pierna derecha sobre la izquierda.
                                    Presiona el codo izquierdo contra la rodilla derecha y gira hacia el costado (A).
                                    Mantén la posición durante 10 segundos.
                                    Repite en el lado opuesto (B).
                                    Realiza este estiramiento entre tres y cinco veces en cada lado, dos veces al día.</p>
                            </div>
                        </div>


                        <div class="ejercicios">
                            <img src="../Img/imagen7.webp" alt="imagen7">
                            <div class="info">
                                <h3>Ejercicio de retracción del omóplato</h3>
                                <p>Siéntate en una silla sin apoyabrazos o en un taburete (A).
                                    Mantén la espalda recta y trata de juntar los omóplatos (B).
                                    Mantén la posición durante cinco segundos y luego relaja.
                                    Repite entre tres y cinco veces, dos veces al día.</p>
                            </div>
                        </div>

                        <div class="seguimiento">
                            <button>Iniciar Seguimiento Terapia</button>
                        </div>
    

                    </div>

                    <!-- ------ -->
    
                    <div class="terapia" id="terapia_ortopedica">

                        <h2>Rehabilitación ortopédica</h2>

                        
                        <div class="ejercicios">
                            <img src="../Img/imagen7.webp" alt="imagen7">
                            <div class="info">
                                <h3>
                                
                                </h3>
                                <p>
                                    Estiramiento de isquiotibiales: Siéntate en el suelo con una pierna extendida y la otra doblada. Inclínate hacia adelante desde la cintura, manteniendo la espalda recta, hasta sentir un estiramiento en la parte posterior del muslo. Mantén durante 15-30 segundos y repite de 2 a 4 veces en cada pierna.


                                </p>
                            </div>
                        </div>

                        <div class="ejercicios">
                            <img src="../Img/imagen7.webp" alt="imagen7">
                            <div class="info">
                                <h3>
                                
                                </h3>
                                <p>
                                    Estiramiento de cuádriceps: De pie, agarra el tobillo de una pierna y lleva el talón hacia las nalgas. Mantén la rodilla hacia abajo y el cuerpo erguido. Mantén durante 15-30 segundos y repite de 2 a 4 veces en cada pierna.


                                </p>
                            </div>
                        </div>

                        <div class="ejercicios">
                            <img src="../Img/imagen7.webp" alt="imagen7">
                            <div class="info">
                                <h3>
                                
                                </h3>
                                <p>
                                    Estiramiento de pantorrillas: Colócate frente a una pared con las manos apoyadas en ella. Da un paso hacia atrás con una pierna y flexiona ligeramente la rodilla delantera. Mantén el talón de la pierna trasera en el suelo y siente el estiramiento en la pantorrilla. Mantén durante 15-30 segundos y repite de 2 a 4 veces en cada pierna.


                                </p>
                            </div>
                        </div>

                        <div class="ejercicios">
                            <img src="../Img/imagen7.webp" alt="imagen7">
                            <div class="info">
                                <h3>
                                
                                </h3>
                                <p>
                                    Elevaciones de talones: De pie, levanta los talones mientras mantienes los dedos de los pies en el suelo. Baja lentamente los talones. Realiza de 2 a 3 series de 10-15 repeticiones.


                                </p>
                            </div>
                        </div>


                        <div class="ejercicios">
                            <img src="../Img/imagen7.webp" alt="imagen7">
                            <div class="info">
                                <h3>
                                
                                </h3>
                                <p>
                                    Elevaciones de piernas: Acostado boca arriba, levanta una pierna hacia arriba y luego bájala lentamente hacia el suelo. Mantén el abdomen contraído para estabilizar la espalda. Realiza de 2 a 3 series de 10-15 repeticiones en cada pierna.


                                </p>
                            </div>
                        </div>


                        <div class="ejercicios">
                            <img src="../Img/imagen7.webp" alt="imagen7">
                            <div class="info">
                                <h3>
                                
                                </h3>
                                <p>
                                    Elevaciones laterales: De pie o sentado, levanta una pierna hacia el lado mientras mantienes la otra pierna quieta. Baja lentamente la pierna levantada. Realiza de 2 a 3 series de 10-15 repeticiones en cada pierna.


                                </p>
                            </div>
                        </div>


                        <div class="ejercicios">
                            <img src="../Img/imagen7.webp" alt="imagen7">
                            <div class="info">
                                <h3>
                                    Ejercicios de equilibrio y estabilidad
                                </h3>
                                <p>
                                    Pararse sobre una pierna: Levanta una pierna del suelo y mantén el equilibrio durante 30 segundos. Cambia de pierna y repite. Realiza de 2 a 3 series en cada pierna.


                                </p>
                            </div>
                        </div>


                        <div class="ejercicios">
                            <img src="../Img/imagen7.webp" alt="imagen7">
                            <div class="info">
                                <h3>
                                
                                </h3>
                                <p>
                                    Bosu squats: De pie sobre un Bosu o plataforma de equilibrio, realiza sentadillas manteniendo el equilibrio. Realiza de 2 a 3 series de 10-15 repeticiones.


                                </p>
                            </div>
                        </div>

                        <div class="ejercicios">
                            <img src="../Img/imagen7.webp" alt="imagen7">
                            <div class="info">
                                <h3>
                                
                                </h3>
                                <p>
                                    Ejercicios de balance con una pelota suiza: Siéntate sobre una pelota suiza y trata de mantener el equilibrio mientras te inclinas hacia adelante, hacia atrás o hacia los lados. Realiza de 2 a 3 series de 10-15 repeticiones.


                                </p>
                            </div>
                        </div>

                        <div class="ejercicios">
                            <img src="../Img/imagen7.webp" alt="imagen7">
                            <div class="info">
                                <h3>
                                
                                </h3>
                                <p>
                                    Movilización de hombros: De pie o sentado, realiza movimientos de rotación y elevación con los brazos para mejorar la movilidad del hombro. Realiza de 10 a 15 repeticiones en cada dirección.
                                </p>
                            </div>
                        </div>

                        <div class="seguimiento">
                            <button>Iniciar Seguimiento Terapia</button>
                        </div>

                    </div>


                      <!-- ------ -->
                    
                    <div class="terapia" id="terapia_pulmonar">

                        <h2>Rehabilitación ortopédica</h2>

                        <div class="ejercicios">
                            <img src="../Img/imagen7.webp" alt="imagen7">
                            <div class="info">
                                <h3>
                                    Respiración Diafragmática
                                </h3>
                                <p>
                                    Siéntate o recuéstate en una posición cómoda. Coloca una mano en tu pecho y la otra en tu abdomen. Inhala profundamente por la nariz, sintiendo cómo se expande tu abdomen mientras inhalas. Exhala lentamente por la boca, asegurándote de que el abdomen se contraiga. Repite este ejercicio varias veces, centrándote en la respiración abdominal en lugar de la respiración torácica.

                                    Este ejercicio mejora la capacidad pulmonar y la eficiencia del diafragma, lo que facilita la respiración y reduce la sensación de falta de aire.
                                </p>
                            </div>
                        </div>

                        <div class="ejercicios">
                            <img src="../Img/imagen7.webp" alt="imagen7">
                            <div class="info">
                                <h3>
                                    Espiraciones Forzadas
                                </h3>
                                <p>
                                    Siéntate en una silla con la espalda recta. Inhala profundamente por la nariz. Exhala rápidamente y con fuerza por la boca como si estuvieras soplando velas. Repite este ejercicio varias veces, asegurándote de exhalar completamente entre cada respiración.

                                    Las espiraciones forzadas ayudan a eliminar el aire residual de los pulmones, mejorando la capacidad pulmonar y reduciendo la disnea durante actividades físicas.
                                </p>
                            </div>
                        </div>

                        <div class="ejercicios">
                            <img src="../Img/imagen7.webp" alt="imagen7">
                            <div class="info">
                                <h3>
                                    Ejercicios de Expansión Torácica
                                </h3>
                                <p>
                                    Siéntate en una silla con la espalda recta. Coloca las manos en los costados de tu torso, con los dedos extendidos hacia adelante. Inhala profundamente y expande tus costillas hacia los lados, sintiendo cómo se mueven tus manos. Mantén la respiración durante unos segundos y luego exhala lentamente. Repite este ejercicio varias veces, centrándote en la expansión completa de tus pulmones.

                                    Estos ejercicios mejoran la capacidad pulmonar y aumentan la flexibilidad de la caja torácica, lo que facilita la respiración profunda y reduce la sensación de opresión en el pecho.
                                </p>
                            </div>
                        </div>

                        <div class="ejercicios">
                            <img src="../Img/imagen7.webp" alt="imagen7">
                            <div class="info">
                                <h3>
                                    Ejercicios de Resistencia
                                </h3>
                                <p>
                                    Caminata: Camina a un ritmo moderado durante 20-30 minutos, de 3 a 5 veces por semana.
                                    Ciclismo estacionario: Realiza ejercicio en una bicicleta estática durante 20-30 minutos, de 3 a 5 veces por semana.
                                    Natación: Nada durante 20-30 minutos, de 2 a 3 veces por semana.
                                    Ejercicios de fortalecimiento muscular: Incluye ejercicios de fortalecimiento muscular para las extremidades superiores e inferiores, como flexiones de brazos, extensiones de piernas y levantamiento de pesas livianas.
                                    
                                    Estos ejercicios mejoran la resistencia cardiovascular, fortalecen los músculos respiratorios y facilitan la realización de actividades diarias con menos fatiga.
                                </p>
                            </div>
                        </div>

                        <div class="ejercicios">
                           
                            <div class="info">
                                <h3>
                                    Educación y Técnicas de Conservación de Energía
                                </h3>
                                <p>
                                    Aprende sobre tu enfermedad pulmonar y cómo afecta tu respiración. Aprende técnicas de conservación de energía para realizar actividades diarias con menos esfuerzo respiratorio. Aprende técnicas de manejo del estrés y de la ansiedad para mejorar tu calidad de vida.

                                    Proporciona conocimientos y habilidades para manejar la enfermedad de manera efectiva, reduciendo la ansiedad y mejorando la adaptación a la vida cotidiana con la enfermedad pulmonar.
                                </p>
                            </div>
                        </div>


                    </div>

                      <!-- ------ -->
    
                    <div class="terapia" id="terapia_cardiaca">

                        <h2>Rehabilitación Cardiaca</h2>

                        <div class="ejercicios">
                            <div class="info">
                                <h3>
                                    Introducción
                                </h3>
                                <p>
                                    La rehabilitación cardiaca es un programa de ejercicios y terapias diseñado para ayudar a los pacientes a recuperarse de enfermedades cardíacas, como un ataque al corazón o una cirugía de bypass. Este programa ayuda a mejorar la salud del corazón, la resistencia física y la calidad de vida del paciente.
                                </p>
                            </div>
                        </div>

                        <div class="ejercicios">
                            <img src="../Img/imagen7.webp" alt="imagen7">
                            <div class="info">
                                <h3>
                                    Pasos para la Rehabilitación Cardiaca
                                </h3>
                                <h3>
                                    Consultar a un Profesional de la Salud
                                </h3>
                                <p>
                                    Antes de comenzar cualquier programa de rehabilitación cardiaca, es importante consultar a un médico o especialista en cardiología para evaluar tu estado de salud y determinar qué tipo de ejercicios son seguros y apropiados para ti.
                                </p>
                            </div>
                        </div>

                        <div class="ejercicios">
                            
                            <div class="info">
                                <h3>
                                    Calentamiento
                                </h3>
                                <p>
                                    Comienza con un calentamiento suave, como caminar a paso ligero durante 5-10 minutos, para preparar tu cuerpo para el ejercicio.

                                    Realiza movimientos de estiramiento suaves para calentar los músculos principales, como cuello, hombros, brazos, cintura, cadera y piernas.
                                </p>
                            </div>
                        </div>

                        <div class="ejercicios">
                            
                            <div class="info">
                                <h3>
                                    Ejercicios Aeróbicos
                                </h3>
                                <p>
                                    Realiza ejercicios aeróbicos de intensidad moderada, como caminar, andar en bicicleta estática o nadar, durante al menos 20-30 minutos. Es importante mantener una intensidad que te permita hablar mientras realizas el ejercicio.

                                    Comienza a un ritmo suave y aumenta gradualmente la intensidad a medida que te sientas más cómodo
                                </p>
                            </div>
                        </div>

                        <div class="ejercicios">
                     
                            <div class="info">
                                <h3>
                                    Ejercicios de Fuerza
                                </h3>
                                <p>
                                    Incorpora ejercicios de fuerza, como levantamiento de pesas o ejercicios con bandas de resistencia, para fortalecer los músculos principales del cuerpo, incluido el corazón.

                                    Realiza ejercicios de resistencia utilizando pesas ligeras o bandas elásticas, con repeticiones controladas y sin forzar.
                                </p>
                            </div>
                        </div>

                        <div class="ejercicios">
                            
                            <div class="info">
                                <h3>
                                    Estiramiento y Enfriamiento
                                </h3>
                                <p>
                                    Finaliza la sesión de ejercicios con ejercicios de estiramiento para mejorar la flexibilidad y reducir la tensión muscular. Dedica al menos 5-10 minutos a estirar los principales grupos musculares.

                                    Realiza estiramientos suaves y sostenidos, manteniendo cada estiramiento durante al menos 15-30 segundos.
                                </p>
                            </div>
                        </div>

                        <div class="ejercicios">
                            <img src="../Img/imagen7.webp" alt="imagen7">
                            <div class="info">
                                <h3>
                                explicacion
                                </h3>
                                <p>
                                    1. Flexión y extensión del cuello.
                                    2. Flexión lateral del cuello.
                                    3. Rotación del cuello.
                                    4. Flexión y extensión de hombros de forma alternada.
                                    5. Abducción de la articulación de los hombros y regresar a la posición inicial.
                                    6. Circunducción de hombros.
                                    7. Flexión y extensión de los codos con pronosupinación de los antebrazos.
                                    8. Flexión dorsal-palmar y desviación radial-cubital de la muñeca.
                                    9. Flexión y extensión de tronco.
                                    10.Flexión lateral de tronco de forma alternada.
                                    11.Rotación de tronco de forma alternada.
                                    12.Flexión de cadera con rodilla flexionada de forma alternada.
                                    13.Abducción de cadera y regresar a la posición inicial.
                                    14.Flexión y extensión de rodilla de forma alternada.
                                    15.Triple flexión diagonal de forma alternada.
                                    16.Flexión dorsal-plantar y lateral de los tobillos..
                                    
                                    
                                </p>
                            </div>
                        </div>

                        <div class="ejercicios">
                            <img src="../Img/imagen7.webp" alt="imagen7">
                            <div class="info">
                                <h3>
                                    Consejos Adicionales
                                </h3>
                                <p>
                                    Escucha a tu cuerpo y no fuerces demasiado durante el ejercicio.
                                    Descansa adecuadamente entre las sesiones de ejercicio para permitir que tu cuerpo se recupere.
                                    No dudes en comunicarte con tu médico o terapeuta si experimentas algún síntoma preocupante durante el ejercicio.
                                </p>
                            </div>
                        </div>

                        

                    </div>

                      <!-- ------ -->
    
                    <div class="terapia" id="terapia_pediatrica">

                        <h2>Rehabilitación Pediátrica</h2>

                        <div class="ejercicios">
                         
                            <div class="info">
                                <h3>
                                    Introducción
                                </h3>
                                <p>
                                    La rehabilitación pediátrica es un proceso terapéutico diseñado específicamente para niños que necesitan recuperarse de lesiones, enfermedades o cirugías que afectan su movilidad y funcionalidad. Este programa busca mejorar la fuerza, la coordinación, el equilibrio y la capacidad de movimiento de los niños, promoviendo así su independencia y calidad de vida.
                                </p>
                            </div>
                        </div>

                        <div class="ejercicios">
                            
                            <div class="info">
                                <h3>
                                    Ejercicios para la Rehabilitación Pediátrica
                                </h3>
                                <p>
                                    A continuación se describen algunos ejercicios recomendados para la rehabilitación pediátrica. Es importante realizarlos bajo la supervisión de un terapeuta o profesional de la salud especializado en pediatría.
                                </p>
                            </div>
                        </div>

                        <div class="ejercicios">
                            
                            <div class="info">
                                <h3>
                                    Caminata en Línea Recta
                                </h3>
                                <p>
                                    Indicaciones:

                                    Coloca objetos pequeños a lo largo de una línea recta en el suelo.
                                    Pídele al niño que camine sobre la línea, tratando de mantener el equilibrio.
                                    Alterna entre caminar hacia adelante, hacia atrás y de lado a lado.
                                    Beneficios:
                                    
                                    Mejora el equilibrio y la coordinación.
                                    Fortalece los músculos de las piernas.
                                </p>
                            </div>
                        </div>

                        <div class="ejercicios">
                            
                            <div class="info">
                                <h3>
                                    Ejercicios de Equilibrio sobre un Pie
                                </h3>
                                <p>
                                    Indicaciones:

                                    Pídele al niño que levante un pie del suelo y mantenga el equilibrio.
                                    Puede realizar este ejercicio sosteniendo una superficie estable, como una mesa o una silla.
                                    Después de unos segundos, cambia al otro pie.
                                    Beneficios:
                                    
                                    Desarrolla el equilibrio y la estabilidad.
                                    Fomenta la concentración y la atención.
                                </p>
                            </div>
                        </div>

                        <div class="ejercicios">
                            
                            <div class="info">
                                <h3>
                                    Estiramientos de Brazos y Piernas
                                </h3>
                                <p>
                                    Indicaciones:

                                    Pídele al niño que extienda los brazos hacia arriba y los estire lo más que pueda.
                                    Repite el ejercicio con las piernas, estirándolas hacia adelante.
                                    Mantén cada estiramiento durante 10-15 segundos y repite varias veces.
                                    Beneficios:
                                    
                                    Mejora la flexibilidad muscular.
                                    Reduce el riesgo de contracturas y rigidez.
                                </p>
                            </div>
                        </div>

                        <div class="ejercicios">
                            <img src="../Img/imagen7.webp" alt="imagen7">
                            <div class="info">
                                <h3>
                                
                                </h3>
                                <p>
                                    Caminata en Línea Recta: Coloca objetos pequeños a lo largo de una línea recta en el suelo y pide al niño que camine sobre ella.
                                </p>
                            </div>
                        </div>


                        <div class="ejercicios">
                            <img src="../Img/imagen7.webp" alt="imagen7">
                            <div class="info">
                               
                                <p>
                                    Ejercicios de Equilibrio sobre un Pie: Pídele al niño que levante un pie del suelo y mantenga el equilibrio.
                                </p>
                            </div>
                        </div>

                        <div class="ejercicios">
                            <img src="../Img/imagen7.webp" alt="imagen7">
                            <div class="info">
                                <h3>
                                    Consejos Adicionales
                                </h3>
                                <p>
                                    Realiza los ejercicios en un ambiente seguro y libre de obstáculos.
                                    Adapta los ejercicios según las capacidades y necesidades específicas del niño.
                                    Fomenta un ambiente lúdico y positivo para mantener la motivación del niño durante la rehabilitación.
                                    Consulta regularmente con el terapeuta o profesional de la salud para evaluar el progreso del niño.
                                </p>
                            </div>
                        </div>


                    </div>

                      <!-- ------ -->
    
                    <div class="terapia" id="terapia_geriatrica">

                        <h2>Rehabilitación Geriátrica</h2>

                        <div class="ejercicios">
                           
                            <div class="info">
                                <h3>
                                    Introducción
                                </h3>
                                <p>
                                    La rehabilitación geriátrica es un conjunto de actividades terapéuticas diseñadas para mejorar la movilidad, la fuerza y la independencia funcional en personas mayores. Este programa se centra en mejorar la calidad de vida y prevenir la discapacidad en la población geriátrica.
                                </p>
                            </div>
                        </div>

                        <div class="ejercicios">
                            
                            <div class="info">
                                <h3>
                                    Ejercicios para la Rehabilitación Geriátrica
                                </h3>
                                <p>
                                    A continuación se describen algunos ejercicios recomendados para la rehabilitación geriátrica. Es importante realizarlos bajo la supervisión de un terapeuta o profesional de la salud especializado en geriatría.
                                </p>
                            </div>
                        </div>

                        <div class="ejercicios">
                            <img src="../Img/imagen7.webp" alt="imagen7">
                            <div class="info">
                                <h3>
                                    Caminata
                                </h3>
                                <p>
                                    Indicaciones:

                                    Realiza caminatas cortas pero frecuentes, preferiblemente en un entorno seguro y plano.
                                    Utiliza calzado cómodo y asegúrate de mantener una postura erguida durante la caminata.
                                    Comienza con distancias cortas y aumenta gradualmente la duración a medida que te sientas más cómodo.
                                    Beneficios:
                                    
                                    Mejora la resistencia cardiovascular y pulmonar.
                                    Fomenta la circulación sanguínea y reduce el riesgo de enfermedades cardiovasculares.
                                </p>
                            </div>
                        </div>

                        <div class="ejercicios">
                           
                            <div class="info">
                                <h3>
                                    Ejercicios de Fortalecimiento
                                </h3>
                                <p>
                                    Indicaciones:

                                    Realiza ejercicios de fortalecimiento muscular con pesas ligeras o bandas de resistencia.
                                    Centra los ejercicios en los grupos musculares principales, como piernas, brazos, espalda y abdomen.
                                    Realiza de 8 a 12 repeticiones de cada ejercicio, descansando entre series.
                                    Beneficios:
                                    
                                    Aumenta la fuerza muscular y la densidad ósea.
                                    Mejora la estabilidad y reduce el riesgo de caídas.
                                </p>
                            </div>
                        </div>

                        <div class="ejercicios">
                            
                            <div class="info">
                                <h3>
                                    Ejercicios de Flexibilidad
                                </h3>
                                <p>
                                    Indicaciones:

                                    Realiza ejercicios de estiramiento suaves y sostenidos para mejorar la flexibilidad muscular.
                                    Concéntrate en estirar los músculos de las piernas, brazos, espalda y cuello.
                                    Mantén cada estiramiento durante al menos 15-30 segundos y respira profundamente.
                                    Beneficios:
                                    
                                    Mejora la amplitud de movimiento y la agilidad.
                                    Reduce la rigidez articular y alivia la tensión muscular.
                                </p>
                            </div>
                        </div>

                        <div class="ejercicios">
                            <img src="../Img/imagen7.webp" alt="imagen7">
                            <div class="info">
                              
                                <p>
                                    Caminata: Realiza caminatas cortas pero frecuentes para mejorar la resistencia cardiovascular y pulmonar.
                                </p>
                            </div>
                        </div>

                        <div class="ejercicios">
                            <img src="../Img/imagen7.webp" alt="imagen7">
                            <div class="info">
                       
                                <p>
                                    Ejercicios de Fortalecimiento: Utiliza pesas ligeras o bandas de resistencia para fortalecer los músculos principales del cuerpo.
                                </p>
                            </div>
                        </div>

                        <div class="ejercicios">
                            <img src="../Img/imagen7.webp" alt="imagen7">
                            <div class="info">
                                
                                <p>
                                    Ejercicios de Flexibilidad: Realiza estiramientos suaves y sostenidos para mejorar la flexibilidad muscular y reducir la rigidez articular.
                                </p>
                            </div>
                        </div>

                        <div class="ejercicios">
                          
                            <div class="info">
                                <h3>
                                    Consejos Adicionales
                                </h3>
                                <p>
                                    Realiza una evaluación médica antes de comenzar cualquier programa de rehabilitación geriátrica.
                                    Adapta los ejercicios según las necesidades y capacidades individuales de cada persona.
                                    Realiza los ejercicios en un ambiente seguro y bien iluminado para evitar caídas y lesiones.
                                    Consulta regularmente con un terapeuta o profesional de la salud para monitorear el progreso y realizar ajustes en el programa de rehabilitación.
                                </p>
                            </div>
                        </div>

                    </div>

                      <!-- ------ -->
    
                    <div class="terapia" id="terapia_deportiva">

                        <h2>Rehabilitación Deportiva</h2>

                        <div class="ejercicios">
                            <img src="../Img/imagen7.webp" alt="imagen7">
                            <div class="info">
                                <h3>
                                    Estiramiento de Pantorrillas
                                </h3>
                                <p>
                                    Descripción: Párate frente a una pared con las manos apoyadas en ella. Extiende una pierna hacia atrás con la rodilla estirada y el pie plano en el suelo. Mantén la otra pierna ligeramente flexionada. Inclínate hacia adelante hasta sentir un estiramiento en la pantorrilla de la pierna extendida.

                                    Duración: Mantén la posición durante 20-30 segundos y luego cambia de pierna. Repite 3 veces en cada lado.
                                </p>
                            </div>
                        </div>

                        <div class="ejercicios">
                            <img src="../Img/imagen7.webp" alt="imagen7">
                            <div class="info">
                                <h3>
                                    Elevaciones de Talón
                                </h3>
                                <p>
                                    Descripción: Párate con los pies separados a la altura de los hombros. Lentamente, levanta los talones del suelo lo más alto que puedas, manteniendo el equilibrio. Mantén la posición por un segundo y luego baja los talones de regreso al suelo.

                                    Repeticiones: Haz 3 series de 10-15 repeticiones.
                                </p>
                            </div>
                        </div>

                        <div class="ejercicios">
                            <img src="../Img/imagen7.webp" alt="imagen7">
                            <div class="info">
                                <h3>
                                    Flexiones de Rodilla
                                </h3>
                                <p>
                                    Descripción: Siéntate en una silla con los pies planos en el suelo y las rodillas dobladas en un ángulo de 90 grados. Extiende una pierna hacia adelante, manteniendo la rodilla lo más recta posible, y luego vuelve a la posición inicial.

                                    Repeticiones: Haz 3 series de 10 repeticiones con cada pierna.
                                </p>
                            </div>
                        </div>

                    </div>

                      <!-- ------ -->
    
                </div>
    
            </section>
    
            <!-- seguimiento terapia -->


            <section class="Seguimiento_terapia cont_general" id="Seguimiento_terapia">
                <div class="title_general">
                    <h1>seguimiento terapia</h1>
                </div>

                <div class="mensaje_llamativo">
                    <p>¡Estamos aquí para cuidarte y ayudarte en tu proceso de recuperación! No dudes en contactarnos para cualquier pregunta o consulta.</p>
                </div>

                <button onclick="Good('Si')">bien</button>

            </section>

            <!-- Comunicacion terapia -->
    
            <section class="Comunicacion cont_general" id="Comunicacion">
                <div class="title_general">
                    <h1>¡Comunicate!</h1>
                </div>

                <div class="mensaje_llamativo">
                    <p>¡Estamos aquí para cuidarte y ayudarte en tu proceso de recuperación! No dudes en contactarnos para cualquier pregunta o consulta.</p>
                </div>

                <form class="consulta" id="comuni_espe">
                    <select name="id_especialidad"  class="select_especialidad">
                        
                        <?php  
                        
                        $sql = "SELECT * FROM especialidad ";
                        $resultado = mysqli_query($con, $sql);
                    
                        if (mysqli_num_rows($resultado) > 0) {
                            while ($fila = $resultado->fetch_assoc()) {
                                ?>

                                    <option value="<?php echo $fila["idespecialidad"];?>"><?php   echo  $fila["Nombre_especialidad"];  ?></option>

                                                            
                                <?php
                            }
                        }
                    ?>

                        
                    </select>

                    <button type="button" class="consultar_especialistas" id="buscare" onclick="evento_normal('BuscarEspecialista.php','#comuni_espe','buscare','contain_especialistas_id')">Buscar</button>
                </form>

                <div class="contain_especialistas" id=contain_especialistas_id>

                    <!-- <div class="especialista">

                        <div class="img_especialista">

                        </div>

                        <p>Nombre</p>

                        <p>Especialidad</p>

                        <button class="enviar_mensaje"> Enviar Mensaje </button>
                    </div> -->

                </div>
    
            </section>

            <!-- Recordatorio -->
                    
            <form action="" style="display:none" id="nul"></form>
            <section class="Recordatorio cont_general" id="Recordatorio">
                <div class="barra_lateral">
                    <button onclick="cambiar_c('crear_r')">Crear Recordatorio</button>
                    <button id="record" onclick="cambiar_c('mis_r'),evento_normal('BuscarRecordatorio.php','#nul','record','bandeja_recordatorio')" >Mis Recordatorios</button>
      
    
                </div>

                <div class="contain_recordatorios">
                    <div class="contain_r" id="crear_r">
                        <div class="title_general">
                            <h1>Crea Tu Recordatorio!</h1>
                        </div>

                        <form class="contenedor_crear" action="CrearRecordatorio.php" method="post" id="crear_re" >
                            <div class="img_crear">

                            </div>
                            <div class="texto_crear">

                                <input type="text" class="observacion" name="mensaje" placeholder="Mensaje">

                            </div>
                            <div class="tipo_terapia">
                            <select name="id_terapia"  class="select_especialidad">
                        
                                    <?php  
                                    
                                    $sql = "SELECT * FROM terapias ";
                                    $resultado = mysqli_query($con, $sql);
                                
                                    if (mysqli_num_rows($resultado) > 0) {
                                        while ($fila = $resultado->fetch_assoc()) {
                                            ?>

                                                <option value="<?php echo $fila["idterapias"];?>"><?php   echo  $fila["Nombre_Terapia"];  ?></option>

                                                                        
                                            <?php
                                        }
                                    }
                                ?>

                                    
                                </select>

                            </div>
                            <div class="fecha_hora">

                                <input type="date" name="fecha">

                                <input type="time" name="hora" >

                            </div>
                            <!-- onclick="evento_click_('CrearRecordatorio.php','#crear_re','boton_recordatorio')" -->
                            <button type="button" id="boton_recordatorio" onclick="evento_click_('CrearRecordatorio.php','#crear_re','boton_recordatorio')">Crear</button>

                        </form>

                    </div>

                    <div class="contain_r" id="mis_r">

                        <div class="title_general">
                            <h1>MIs Recordatorios</h1>
                        </div>

                        <form class="consulta" id="buscar_recordd">
                            <select name="id_terapia2"  class="select_especialidad">
                            
                            <?php  
                            
                            $sql = "SELECT * FROM terapias ";
                            $resultado = mysqli_query($con, $sql);
                        
                            if (mysqli_num_rows($resultado) > 0) {
                                while ($fila = $resultado->fetch_assoc()) {
                                    ?>

                                        <option value="<?php echo $fila["idterapias"];?>"><?php   echo  $fila["Nombre_Terapia"];  ?></option>

                                                                
                                    <?php
                                }
                            }
                        ?>

                            
                        </select>
        
                            <button class="consultar_especialistas" id="buscarRecord" type="button" onclick="evento_normal('BuscarRSolo.php','#buscar_recordd','buscarRecord','bandeja_recordatorio')">Buscar</button>
                        </form>

                        <div class="bandeja_recordatorios" id="bandeja_recordatorio">
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


            <!-- Configuracion -->
    
            <section class="Configuracion cont_general" id="Configuracion">
                <div class="title_general">
                    <h1>Mensajes!</h1>
                </div>

                <div class="contain_mensajes" id="bandeja_mensajes">
                    <div class="bandeja">
                        <p>Tipo_Cita</p>
                        <p>Fecha</p>
                        <p>Hora</p>
                        <button>ver</button>
                        <button>Eliminar</button>
                    </div>


                </div>

    
            </section>

        </div>



    </main>



</body>
<div class="modal_alerta">
    <div class="icono_modal">
        
    </div>
    <p class="text_modal">Exito!</p>
    
</div>


<div class="modal_mensaje">



    <form id="c_enviar_mensaje">

        
        
        <textarea name="mensaje" id=""></textarea>

        <button> Enviar Mensaje</button>
    </form>

    
</div>



<script>


function test() {
            $.ajax({
                url: "recibir.php",
                type: "POST",
                data: $("#form_prueba").serialize(),
                success: function (respuesta_server) {
                    
                }
            });
        }



        $("#id_prueba").click(function () {

            test();
        });

 </script>

<script src="../Js/Cambiar_Contenedor.js"></script>
<script src="../Js/AlertaBien.js"></script>
<script src="../Js/Ajax.js"></script>
<script src="../Js/eliminar_recordatorio.js"></script>
<script src="../Js/enviar_mensaje.js"></script>
<script src="../Js/Modal_Mensaje.js"></script>



</html>