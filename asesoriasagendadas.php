<?php
    require_once 'php/guardian.php';


?>

<!DOCTYPE html>
<html lang="es">
<head>
    <script src="https://kit.fontawesome.com/712575d4a5.js" crossorigin="anonymous"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Asesorias Agendadas</title>
    <meta name="description" content="Pagina sobre cursos">
    <!--El preload nos ayuda a que el archivo que le estamos diciendo sea el primero que cargue-->
    <link rel="preload" href="css/vistaalumno.css" as="style">
    <link rel="stylesheet" href="css/vistaalumno.css">
    <link rel="stylesheet" href="css/normalice.css">
    <!--El preload nos ayuda a que de igual manera que con el css pero ahora con las paginas web, este caso es la primera pagina que uno piensa que es la que va a usar el usuario-->
    <link rel="prefetch" href="arte.php" as="Document">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    
</head>
<body>
<?php include 'vistas/header.php'?>
    <main class="ContenidoPrincipal">

        <?php
            $servidor = "localhost";
            $usuario = "root";
            $password = "";
            $base = "citas_tutorias";
            $cone = new mysqli($servidor, $usuario, $password, $base);
        
            // Verifica si la sesión está iniciada y tiene la variable 'id'
            if (isset($_SESSION['Usuario']) && isset($_SESSION['id'])) {
                $username = $_SESSION['Usuario'];
                $id = $_SESSION['id'];
        
                // Consulta SQL para obtener los detalles de los cursos para el usuario específico
                $sql = "SELECT c.nombre, c.enlacecurso, c.imagen
                        FROM cursos2 c
                        JOIN inscripciones i ON c.id = i.id_curso
                        JOIN usuarios u ON i.id_usuario = u.id
                        WHERE u.id_rol = 2 AND u.id = '$id'";
        
                $result = mysqli_query($cone, $sql);
        
                // Verificar si se obtuvieron resultados
                if ($result) {
                    if (mysqli_num_rows($result) > 0) {
                        echo '<div>';
                        echo '<h2 class="Titulo">Asesorias Agendadas</h2>';
                        echo '</div>';
                        echo '<div class="Cursos">';
        
                        while ($row = mysqli_fetch_assoc($result)) {
                            echo '<div>';
                            echo '<img loading="lazy" src="' . $row['imagen'] . '" alt="' . $row['nombre'] . '">';
                            echo '<div class="cursosflex">';
                            echo '<div>';
                            echo '<h3>' . $row['nombre'] . '</h3>';
                            echo '</div>';
                            echo '<div class="BotonInscribirse">';
                            
                            // Construir el enlace con el valor de 'enlacecurso'
                            echo '<a class="BotonInscribirseInput" href="' . $row['enlacecurso'] . '">Ver</a>';
                            
                            echo '</div>';
                            echo '</div>';
                            echo '</div>';
                        }
        
                        echo '</div>';
                    } else {
                        echo '<p>No hay clases agendadas. Todavía</p>';
                    }
                } else {
                    echo "Error en la consulta: " . mysqli_error($cone);
                }
        
                // Resto de tu código...
        
            } else {
                // Si la sesión no está iniciada o no tiene la variable 'id', redirige a la página de inicio
                header("Location: index.html");
                exit();
            }

        ?>
            
    </main>
    <?php include 'vistas/footer.php'?>

</body>
</html>
