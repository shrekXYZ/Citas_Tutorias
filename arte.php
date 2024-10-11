<?php
    require_once 'php/guardian.php';
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <script src="https://kit.fontawesome.com/712575d4a5.js" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aprender sobre el arte</title>
    <link rel="stylesheet" href="css/vistaalumno.css">
    <link rel="stylesheet" href="css/normalice.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
</head>
<body>
    <?php include 'vistas/header.php'?>
    <main class="ContenidoPrincipalArte">
        <div class="ContenidoPrincipalArte1">
            <div class="ContenidoPrincipalArte1--hijos">
                <div>
                    <img loading="lazy" src="img/Curso1Arte.jpg" alt="CursoSobreArte">
                </div>
                <div class="botonarte">
                    <button class="BotonInscribirse__Arte"><a href="cursoartealumno.php">Inscribirse</a></button>
                </div>
            </div>
            <div class="ContenidoPrincipalArte2--hijos">
                <div>
                    <h2>Aprende sobre el arte</h2>
                </div>
                <div>
                    <p>El arte es un conjunto de disciplinas que fueron creadas por los seres humanos en la búsqueda de experiencias estéticas y fines simbólicos.</p>
                </div>
                <div>
                    <h3>Aprendizaje Esperado</h3>
                </div>
                <div>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur vero vitae delectus, labore similique, illum distinctio nihil</p>
                </div>
            
                    
                        <h3 class="ContenidoPrincipalArte1--hijos--Profesor__Titulo">Profesor:</h3>
                    
                
                        <p class="ContenidoPrincipalArte1--hijos--Profesor__profesor">Juan Diego Trejo Sandoval</p>
                    
                
                    <label for="codigo">Codigo de Acceso:</label>
                    <div class="codigosdeacceso1">
                        <input type="text" placeholder="Codigo" id="codigo" class="ContenidoPrincipalArte1--hijos--CodigoAcceso__Codigo" id="validacion">
                    </div>
                    <div class="codigosdeacceso">
                        <input type="submit" value="Aceptar" class="botonenviarvalidacion">
                    </div>
                
            </div>
        </div>
    </main>
    <?php include 'vistas/footer.php'?>
    <script src="js/bienvenida.js"></script>
</body>
</html>
