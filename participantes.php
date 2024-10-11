<?php
    require_once 'php/guardian.php';
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/712575d4a5.js" crossorigin="anonymous"></script>
    <title>Participantes</title>
    <link rel="stylesheet" href="css/vistaalumno.css">
    <link rel="stylesheet" href="css/normalice.css">
    <link rel="stylesheet" href="css/participantes.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">

</head>
<body>

    <?php include 'vistas/header.php' ?>
<?php
$servidor = "localhost";
$usuario = "root";
$password = "";
$base = "citas_tutorias";
$cone = new mysqli($servidor, $usuario, $password, $base);

// Obtén el id del curso desde la solicitud (supongamos que se pasa como parámetro GET)
$cursoIdActual = 4;

// Verificar si se proporcionó un id de curso válido
if ($cursoIdActual) {
    // Consulta SQL para obtener los participantes de la clase actual
    $sqlAlumnos = "SELECT u.nombre AS alumno_nombre, u.apellidos, u.usuario, u.correo, u.estatus
                    FROM usuarios u
                    JOIN inscripciones i ON u.id = i.id_usuario
                    WHERE i.id_curso = '$cursoIdActual' and u.id_rol=2";

    $resultAlumnos = mysqli_query($cone, $sqlAlumnos);

    // Verificar si se obtuvieron resultados
    if ($resultAlumnos) {
        echo '<div class="table-widget">';
        echo '<table>';
        echo '<caption>Participantes en la Clase Actual</caption>';
        echo '<thead>';
        echo '<tr>';
        echo '<th>Nombre</th>';
        echo '<th>Apellidos</th>';
        echo '<th>Usuario</th>';
        echo '<th>Correo</th>';
        echo '<th>Estatus</th>';
        echo '</tr>';
        echo '</thead>';
        echo '<tbody>';

        // Recorre los alumnos
        while ($rowAlumno = mysqli_fetch_assoc($resultAlumnos)) {
            echo '<tr>';
            echo '<td>' . $rowAlumno['alumno_nombre'] . '</td>';
            echo '<td>' . $rowAlumno['apellidos'] . '</td>';
            echo '<td>' . $rowAlumno['usuario'] . '</td>';
            echo '<td>' . $rowAlumno['correo'] . '</td>';
            echo '<td>' . $rowAlumno['estatus'] . '</td>';
            echo '</tr>';
        }

        echo '</tbody>';
        echo '</table>';
        echo '</div>';
    } else {
        echo '<p>Error en la consulta de alumnos: ' . mysqli_error($cone) . '</p>';
    }
} else {
    echo '<p>No se proporcionó un ID de curso válido.</p>';
}

// Resto de tu código...
?>



    <?php include 'vistas/footer.php' ?>
    <script src="js/participantes.js"></script>
</body>
</html>