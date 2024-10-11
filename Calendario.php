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
    <link rel="stylesheet" href="css/calendarioprof.css">
    <link rel="stylesheet" href="css/barraprofesor.css">
    <title>Calendario Vista_Profesor</title>
</head>
<body>
    <?php include 'vistas/header.php'?>
    <div class="barra">
        <nav>
            <ul class="nav-links">
                <li><a href="vistaprofesor.php">Inicio</a></li>
                <li><a href="participantes.php">Participantes</a></li>
                <li><a href="Calendario.php">Calendario</a></li>
                <!--<button class="BotonInscribirseInput"><a href="arte.php">Inscribirse</a></button>-->
            </ul>
        </nav>
    </div>
    <section class="layout">
        <div class="calendar">
            <dl class="calendar__info">
                <dt class="calendar__prev" id="prev-month">&#9664;</dt>
                <dt class="calendar__month" id="month"></dt>
                <dt class="calendar__year" id="year"></dt>
                <dt class="calendar__next" id="next-month">&#9654;</dt>
            </dl>
            <dl class="calendar__week">
                <dt class="calendar__day calendar__item">Lun</dt>
                <dt class="calendar__day calendar__item">Mar</dt>
                <dt class="calendar__day calendar__item">Mier</dt>
                <dt class="calendar__day calendar__item">Juev</dt>
                <dt class="calendar__day calendar__item">Vier</dt>
                <dt class="calendar__day calendar__item">Sab</dt>
                <dt class="calendar__day calendar__item">Dom</dt>
            </dl>
            <ul class="calendar__dates" id="dates"></ul>
        </div> 
        <div>
            <div class="LugarAsesoria"><div>
            <h2>Lugar de la asesoria</h2>
        </div>
    </div>
    <div id="map"></div>
    </div>       
    </section>
    <div></div>
    <?php include 'vistas/footer.php'?>
    <script src="js/meses_maestro.js"></script>
    <script src="js/ubicacion.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBDaeWicvigtP9xPv919E-RNoxfvC-Hqik&callback=iniciarMap"></script>
</body>
</html>
