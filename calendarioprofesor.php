<?php
    require_once 'php/guardian.php';
    
?>
<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/calendario_maestro.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <link rel="stylesheet" href="css/vistaalumno.css">
    <link rel="stylesheet" href="css/barraprofesor.css">
    <title>Calendario Vista_Profesor</title>
</head>
<body>
    <?php include 'vistas/header.php'?>
    <section class="layout">
    <div class="barra">
        <nav>
            <ul class="nav-links">
                <li><a href="arteprof.php">Inicio</a></li>
                <li><a href="participantes.php">Participantes</a></li>
                <li><a href="Calendario.php">Calendario</a></li>
                <!--<button class="BotonInscribirseInput"><a href="arte.php">Inscribirse</a></button>-->
            </ul>
        </nav>
    </div>
        <div class="agenda">
            <form id="agenda-form">
                <label for="evento">Evento:</label>
                <input type="text" id="evento" name="evento" required>
                <label for="fecha">Fecha de apertura:</label>
                <input type="date" id="fecha-apertura" name="fecha-apertura" required>
                <label for="fecha">Fecha de cierre:</label>
                <input type="date" id="fecha-cierre" name="fecha-cierre" required>
                <label for="materia">Materia:</label>
                <select name="materia" id="materia">
                    <option disabled selected value="Materia">Seleccione una materia</option>
                    <option value="Materia1">Arte</option>
                    <option value="Materia2">Seguridad Industrial</option>
                    
                </select>
                <label for="grupo">Grupo:</label>
                <select name="grupo" id="grupo">
                    <option value="Grupo A">Grupo A</option>
                    <option value="Grupo B">Grupo B</option>
                </select>
                <div>
                    <label for="desc">Descripción:</label>
                    <textarea name="desc" id="desc" placeholder="Describe la tarea"></textarea>
                </div>

                <div class="avatar">
                    <input type="file" name="avatar" id="avatar">
                </div>
                <div class="archivo">
                    <button type="submit" class="btn-green">Guardar Evento</button>
                </div>
            </form>
        </div>
        
        
    </section>
    <div></div>
    <?php include 'vistas/footer.php'?>
    <script src="js/scripts.js"></script>
</body>
</html>
