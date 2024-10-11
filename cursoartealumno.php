<?php
    require_once 'php/guardian.php';
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/712575d4a5.js" crossorigin="anonymous"></script>
    <title>Aprender sobre el arte</title>
    <link rel="stylesheet" href="css/vistaalumno.css">
    <link rel="stylesheet" href="css/normalice.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">

</head>
<body>
    <?php include 'vistas/header.php'?>
    <div class="TituloCursoAlumno">
        <div>
            <h2>Aprender sobre el arte</h2>
        </div>
    </div>
    <main class="ContenidoPrincipalCursoAlumno">
        <div class="ContenidoPrincipalCursoAlumno--Tareas barraslaterales" >
            <div>
                <picture>
                    <source loading="lazy" srcset="webp/Curso1Arte.webp" type="image/webp">
                    <img loading="lazy" src="img/Curso1Arte.jpg" alt="">
                </picture>
            </div>
            <div>
                <div>

                </div>
                <div class="Mensajes_Del_Curso">
                    <ul>
                        <li class="Lista123"><a href="visaprofesor.php">Agenda</a></li>
                        
                        <li class="Lista123"><a href="participantes.php">Participantes</a></li>
                    </ul>
                </div>
            </div>
            
        </div>
        <div class="ContenidoPrincipalCursoAlumno--Actividades">
            <div>
                <h3>Horario de asesorias</h3>
            </div>
            <div class="Lista123">
                <ul>
                    <li class="Lista123">Lunes</li>
                    <p>8:00am - 9:00am</p>
                    <li class="Lista123">Martes</li>
                    <p>9:00am - 10:00am</p>
                    <li class="Lista123">Miercoles</li>
                    <p>9:00am - 10:00am</p>
                    <li class="Lista123">Jueves</li>
                    <p>9:00am - 10:00am</p>
                    <li class="Lista123">Viernes</li>
                    <p>1:00pm - 2:00pm</p>
                </ul>
            </div>
        </div>
        <div class="ContenidoPrincipalCursoAlumno--ActividadesVencer barraslaterales">
            <div>
                <h3>Actividades para reforzar el conocimiento</h3>
            </div>
            <div>
                <ul>
                    <li class="Lista123"><a href="tarea.php">Investigacion sobre tecnicas de dibujo</a></li>
                    <li class="Lista123"><a href="tarea2.php">Actividad dibujo creativo</a></li>
                </ul>
                <p>Vencimiento: <span>25 de octubre</span></p>
                <button type="button" id="BotonNotificacion12">Activar Recordatorios</button>
            </div>
        </div>
    
    </main>
    <div>
    <div class="LugarAsesoria">
        <div>
            <h2>Lugar de la asesoria</h2>
        </div>
    </div>
    <div id="map"></div>
    </div>
    <script src="js/recordatorio.js"></script>
    <script src="js/ubicacion.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBDaeWicvigtP9xPv919E-RNoxfvC-Hqik&callback=iniciarMap"></script>
    <?php include 'vistas/footer.php'?>
    
</body>
</html>
