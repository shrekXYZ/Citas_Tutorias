<?php
    require_once 'php/guardian.php';
?>
<!doctype html>
<html lang="es">
<!--Encabezado-->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/vistaalumno.css">
    <link rel="stylesheet" href="css/normalice.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <?php include 'vistas/header.php' ?>


</head>

<!--Calendario-->
<body>


    <section class="layout">
        <div class="cabeza">
        </div>
        <nav calss></nav>
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

<!--Tabla de Datos-->
        <div class="Tabla">
            <table>
                <tr>
                    <th>Numero de la asesoria</th>
                    <th>Día para la asesoria</th>
                </tr>
                <tr>
                    <td>Primer Asesoria</label>

                
                <td>
                <select id="cars">
                <option value="volvo">25 de Septiembre</option>
                <option value="saab">30 de Octubre</option>
                <option value="opel">1 de Diciembre</option>
                <option value="audi">10 de Diciembre </option>
                </select>
                </td>
                
                <tr>
                    <td>Segunda Asesoria</td>
                    <td>
                <select id="cars">
                <option value="volvo">1 de Septiembre</option>
                <option value="saab">28 de Octubre</option>
                <option value="opel">19 de Diciembre</option>
                <option value="audi">20 de Diciembre </option>
                </select>
                </td>
                </tr>
            </table>
        </div>

<!--Pie de pagina-->
        
    </section>
    <?php include 'vistas/footer.php' ?>
<script src="js/scripts.js"></script>
</body>
</html>
