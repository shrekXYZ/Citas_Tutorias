<?php
    require_once 'php/guardian.php';
?>

<!DOCTYPE html>
<html lang="es">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso 2023 - 2024</title>
    <link rel="preload" href="css/arteprof.css" as="style">
    <link rel="stylesheet" href="css/arteprof.css">
    <link rel="stylesheet" href="css/normalice.css">
    <link rel="stylesheet" href="css/vistaalumno.css">

</head>
<body>
    
<?php include 'vistas/header.php'?>

    <main class="ContenidoPrincipalArte">
        <div class="ContenidoPrincipalArte1">
            <div class="ContenidoPrincipalArte1--hijos">
                <div class="ImagenCentrada">
                    <img class="imagenCurso" loading="lazy" src="img/Curso1Arte.jpg" alt="CursoSobreArte">
                </div>
                <div class="BotonesCentrados">
                    <button class="botonArte"><a href="calendarioprofesor.php">Agregar Nueva Tarea</a></button>
                    <button class="botonArte"><a href="Calendario.php">Horarios y Ubicacion</a></button>
                    <button class="botonArte"><a href="#">Editar Informacion</a></button>
                    <button class="botonArte"><a href="participantes.php">Revisar Participantes</a></button>
                </div>

                    <ul class="ListaTareas">
                        <li><a class="tarea1" href="tarea1.php">- Tarea 1: Realizar un dibujo</a></li>
                        <li><a href="tarea2.php">- Tarea 2: Investigar sobre un artista famoso</a></li>
                        <li><a href="tarea3.php">- Tarea 3: Preparar una presentación</a></li>
                        <!-- Agrega más elementos <li> con enlaces <a> según tus tareas -->
                    </ul>
    
            </div>
            <div class="TextoCentrado">
                <h2>Aprender sobre el curso</h2>
                <p>El arte es un conjunto de disciplinas que fueron creadas por los seres humanos en la búsqueda de experiencias estéticas y fines simbólicos.</p>
                <h3>Aprendizaje Esperado</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur vero vitae delectus, labore similique, illum distinctio nihil</p>
                <h3 class="ContenidoPrincipalArte1--hijos--Profesor__Titulo">Profesor:</h3>
                <p class="ContenidoPrincipalArte1--hijos--Profesor__profesor">Juan Diego Trejo Sandoval</p>
            </div>


                    </div>
                </div>
            </div>
        </div>
    </main>
    
    <footer class="footer">
            <div class="container">
                <div class="footer-row">
                    <div class="footer-links">
                        <h4>Citas de tutoria</h4>
                        <ul>
                            <li><a href="#">¿Porque Date Corp?</a></li>
                            <li><a href="#">Nosotros</a></li>
                        </ul>
                    </div>
                    
                    <div class="footer-links">
                        <h4>Privacidad</h4>
                        <ul>
                            <li><a href="#">Aviso y privacidad</a></li>
                            <li><a href="#">Aviso de no discriminacion</a></li>
                        </ul>
                    </div>
                    <div class="footer-links">
                        <h4>Siguenos</h4>
                        <div class="redessociales">
                            <a href="https://www.facebook.com/profile.php?id=61552327104638"><i class="fab fa-facebook-f"></i></a>
                            <a href="https://www.instagram.com/datecorp/"><i class="fab fa-instagram"></i></a>
                            <a href="https://twitter.com/datecorp2023"><i class="fab fa-twitter"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    <script src="./js/bienvenida.js"></script>

                </div>
            </div>
        </div>
    </footer>
    <script src="js/opciones.js"></script>
</body>
</html>
