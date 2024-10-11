
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <script src="https://kit.fontawesome.com/712575d4a5.js" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculo Diferencial</title>
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
                    <img loading="lazy" src="img/Curso2CalculoDiferencial.jpg" alt="CursoSobreArte">
                </div>
                <div class="botonarte">
                    <button class="BotonInscribirse__Arte"><a href="cursocalculodifalumno.php">Inscribirse</a></button>
                </div>
            </div>
            <div class="ContenidoPrincipalArte2--hijos">
                <div>
                    <h2>Calculo Diferencial</h2>
                </div>
                <div>
                    <p>La matemática es un área muy amplia, es por ello que se divide en varias áreas entre la que se encuentra el cálculo, destinada a la resolución o determinación de variables de una ecuación, permitiendo estudiar su comportamiento, determinar la pendiente, valores mínimos y máximos, conocer el área o volumen.</p>
                </div>
                <div>
                    <h3>Aprendizaje Esperado</h3>
                </div>
                <div>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur vero vitae delectus, labore similique, illum distinctio nihil</p>
                </div>
                <div class="ContenidoPrincipalArte1--hijos--Profesor">
                    <div>
                        <h3 class="ContenidoPrincipalArte1--hijos--Profesor__Titulo">Profesor:</h3>
                    </div>
                    <div>
                        <p class="ContenidoPrincipalArte1--hijos--Profesor__profesor">Angel Sebastian Revles Soto</p>
                    </div>
                </div>
                <div class="ContenidoPrincipalArte1--hijos--CodigoAcceso">
                    <label for="codigo">Codigo de Acceso:</label>
                    <div class="codigosdeacceso1">
                        <input type="text" placeholder="Codigo" id="codigo" class="ContenidoPrincipalArte1--hijos--CodigoAcceso__Codigo" id="validacion">
                    </div>
                    <div class="codigosdeacceso">
                        <input type="submit" value="Aceptar" class="botonenviarvalidacion">
                    </div>
                </div>
            </div>
        </div>
    </main>
    <?php include 'vistas/footer.php'?>
    <script src="js/bienvenida.js"></script>
</body>
</html>
