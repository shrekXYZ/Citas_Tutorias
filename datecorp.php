<?php
    require_once 'php/guardian.php';
?>
<!--Apartado de porque date corp hasta abajo-->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>¿Porque Date Corp?</title>
    
    <link rel="stylesheet" href="css/datecorp.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"/>
    <link rel="stylesheet" href="css/vistaalumno.css">
    <link rel="stylesheet" href="css/normalice.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">

    <!--Estilos en CSS-->
    

</head>
<!--Cabezera-->
<header>
<?php include 'vistas/header.php'?>

</header>

<!--Contenido-->
<body>
    <div class="row">
        <div class="col-md-4" id="texto">
            <p>En Date Corp entendemos que el tiempo es valioso y la educación es esencial. Hemos creado una plataforma que
                simplifica la programación de tutorías para que ahorres tiempo y obtengas la ayuda que necesitas. Elige Date Corp
                para facilidad y comodidad, una variedad de servicios, flexibilidad en horarios, valor añadido, seguridad y
                confidencialidad, y retroalimentación transparente. En Date Corp, facilitamos tu aprendizaje. Únete y descubre una
                forma más eficiente de programar tutorías. Invierte en tu educación y futuro con Date Corp.</p><br>

        </div>
<!--Carrusel de imagenes-->
    <div class="col-md-6" id="carrusel">
            <div id="slider" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="img/imagen1.jpg" class="d-block w-100" alt="">
                    </div>
                    <div class="carousel-item ">
                        <img src="img/imagen2.jpg" class="d-block w-100" alt="">
                    </div>
                    <div class="carousel-item ">
                        <img src="img/imagen3.jpg"  class="d-block w-100" alt="">
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

<!--Pie de pagina-->
<?php include 'vistas/footer.php'?>

</html>