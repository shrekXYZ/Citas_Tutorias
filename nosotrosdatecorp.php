<?php
    require_once 'php/guardian.php';
?>
<!--Parte de abajo de la pagina en el apartado de nosotros-->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nosotros</title>
    <link rel="stylesheet" href="estilo2.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">

    <!--Estilos en CSS-->
    <link rel="stylesheet" href="css/datecorp.css">
    <link rel="stylesheet" href="css/nosotrosdatecorp.css">
    <link rel="stylesheet" href="css/vistaalumno.css">
    <link rel="stylesheet" href="css/normalice.css">
    
</head>
<!--Cabezera-->
<header>
<?php include 'vistas/header.php'?>

</header>

<!--Contenido-->
<body>
    <div class="row">
        <div class="col-md-4" id="texto">
        <h2>¡Bienvenidos a Date Corp - Donde Tu Éxito Es Nuestra Prioridad!</h2>
            <p>En Date Corp, no solo te ofrecemos una plataforma de agendamiento de tutorías, sino que también compartimos contigo
                nuestros valores fundamentales que guían cada paso que damos. Nuestra misión es contribuir al éxito de nuestros
                usuarios, ya sean estudiantes que buscan mejorar sus habilidades académicas o profesionales en busca de un
                aprendizaje continuo.</p><br>
                <ul>
                    <li>Compromiso con la Excelencia: Buscamos brindar servicios de alta calidad a través de tutores comprometidos con tu éxito.</li>
                    <li>Accesibilidad: Nuestra plataforma es fácil de usar y accesible para todos, sin importar la ubicación o nivel de experiencia.</li>
                    <li>Personalización: Ofrecemos opciones para elegir tutores y programar tutorías adaptadas a tus necesidades y horarios.</li>
                    <li>Ética y Confidencialidad: Priorizamos la ética y la privacidad, garantizando la seguridad de tus datos y la confidencialidad de tus interacciones.</li>
                    <li>Transparencia y Retroalimentación: Fomentamos la comunicación abierta y la retroalimentación para mejorar constantemente.</li>
                </ul>
                

        
        

        </div>
<!--Carrusel de imagenes-->
    <div class="col-md-6" id="carrusel">
            <div id="slider" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="img/imagen1-1.jpg" class="d-block w-100" alt="">
                    </div>
                    <div class="carousel-item ">
                        <img src="img/imagen2-2.png" class="d-block w-100" alt="">
                    </div>
                    <div class="carousel-item ">
                        <img src="img/imagen3-3.png"  class="d-block w-100" alt="">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#slider" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#slider" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>

    </div>
<!--Script de bootstart para el carrusel-->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</body>

<?php include 'vistas/footer.php' ?>

</html>