<?php
    require_once 'php/guardian.php';
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/712575d4a5.js" crossorigin="anonymous"></script>
    <title>Calculo Diferencial</title>
    <link rel="stylesheet" href="css/vistaalumno.css">
    <link rel="stylesheet" href="css/normalice.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">

</head>
<body>
    <?php include 'vistas/header.php'?>
    <div class="TituloCursoAlumno">
        <div>
            <h2>Aplicaciones de la derivada</h2>
        </div>
    </div>
    <main class="ContenidoPrincipalCursoAlumno">
        <div class="ContenidoPrincipalCursoAlumno--Tareas barraslaterales" >
            <div>
                <picture>
                    <source loading="lazy" srcset="webp/Curso2CalculoDiferencial.webp" type="image/webp">
            
                </picture>
                <img loading="lazy" src="img/Curso2CalculoDiferencial.jpg" alt="Calculo Diferencial">

            </div>
            <div>
                <div>

                </div>
                <div class="Mensajes_Del_Curso">
                    <ul>
                        <li><a href="visaprofesor.php">Agenda</a></li>
                        
                        <li><a href="participantes.php">Participantes</a></li>
                    </ul>
                </div>
            </div>
            
        </div>
        <div class="ContenidoPrincipalCursoAlumno--Actividades">
            <div>
                <h3>Horario de asesorias</h3>
            </div>
            <div>
                <ul>
                    <li>Lunes</li>
                    <p>8:00am - 9:00am</p>
                    <li>Martes</li>
                    <p>9:00am - 10:00am</p>
                    <li>Miercoles</li>
                    <p>9:00am - 10:00am</p>
                    <li>Jueves</li>
                    <p>9:00am - 10:00am</p>
                    <li>Viernes</li>
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
                    <li><a href="tarea3.php">Investigacion de donde se pueden aplicar las derivadas</a></li>
                    <li><a href="tarea4.php">Actividad: Realizar 10 derivadas</a></li>
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
    <script src="js/ubicacion1.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBDaeWicvigtP9xPv919E-RNoxfvC-Hqik&callback=iniciarMap"></script>
    <?php include 'vistas/footer.php'?>
    
</body>
</html>
