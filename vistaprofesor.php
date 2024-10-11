<?php
    session_start();
    $servidor="localhost";
    $usuario="root";
    $password="";
    $base="citas_tutorias";
    $cone= new mysqli($servidor,$usuario,$password,$base);

    if(isset($_SESSION['Usuario']) && isset($_SESSION['id'])){
        $username=$_SESSION['Usuario'];
        $id= $_SESSION['id'];

        $sql = "SELECT c.nombre, c.enlacecurso, c.imagen
        FROM cursos2 c
        JOIN inscripciones i ON c.id = i.id_curso
        JOIN usuarios u ON i.id_usuario = u.id
        WHERE u.id_rol = 1 AND u.id = '$id'";
        $result=mysqli_query($cone,$sql);

        //echo "<h1>Bienvenido, $username</h1>";
        //echo "<p> Tu ID de usuario es:$id $</p>"
        //echo "<a href= 'php/logout.php '>Cerrar Sesión </a>";
        
    }else{
        header("Location: index.html");
        exit();
    }


  
?>


<!DOCTYPE html>
<html lang="es">
<head>
    <script src="https://kit.fontawesome.com/712575d4a5.js" crossorigin="anonymous"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cursos</title>
    <meta name="description" content="Pagina sobre cursos">
    <!--El preload nos ayuda a que el archivo que le estamos diciendo sea el primero que cargue-->
    <link rel="preload" href="css/vistaprofesor.css" as="style">
    <link rel="stylesheet" href="css/vistaprofesor.css">
    <link rel="stylesheet" href="css/normalice.css">
    <link rel="stylesheet" href="css/vistaalumno.css">
    <!--El preload nos ayuda a que de igual manera que con el css pero ahora con las paginas web, este caso es la primera pagina que uno piensa que es la que va a usar el usuario-->
    
    <!--link rel="prefetch" href="arte.html" as="Document">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"-->

</head>
<body>
<?php include 'vistas/header.php'?>

    <main class="ContenidoPrincipal">
        <div>
            <h2 class="Titulo">Cursos Creados</h2>
        </div>
        <div class="Cursos">
        <?php
        // Mostrar resultados de la consulta en el HTML
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo '<div>';
                echo '<img src="' . $row['imagen'] . '" alt="' . $row['nombre'] . '">';
                echo '<div class="cursosflex">';
                echo '<div>';
                echo '<h3>' . $row['nombre'] . '</h3>';
                echo '</div>';
                echo '<div class="BotonAdministrar">';
                echo '<button class="BotonAdministrarInput"><a href="arteprof.php ">Administrar</a></button>';
                echo '<button class="BotonEliminarInput">Eliminar</button>';
                echo '</div>';
                echo '</div>';
                echo '</div>';
            }
        } else {
            echo 'No se encontraron cursos para el profesor.';
        }
        ?>
    </div>
                
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
    <script src="js/opciones.js"></script>
</body>
</html>
