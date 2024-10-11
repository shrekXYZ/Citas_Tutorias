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

        $sql="SELECT * from usuarios where id='$id'";
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
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Vista_PerfilAlum.css">
    <title>Perfil de Usuario</title>
    <link rel="stylesheet" href="css/Vista_PerfilAlum.css">
    <link rel="stylesheet" href="css/vistaalumno.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">

</head>
<body>
    <header class="HeaderVistaProfile">
        <div class="HeaderVistaProfileTitulo">
            <div class="TituloPerfil">
                <h1>Perfil de Usuario</h1>
            </div>
            
        </div>
        <div class="HeaderVistaProfileImagen">
            <a href="vistaalumno.php"><img class="ImagenLogo" src="img/logo_png_blanco.png" alt=""></a>
        </div>
    </header>
    <div class="contenedor">
        <div class="profile-picture">
            <img src="https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460_960_720.png" alt="Imagen de perfil">
        </div>
        <div class="user-info">
            <h1>Datos alumno</h1>
            
           
            <?php
                
                while ($mostrar=mysqli_fetch_array($result)){
                ?>
                <tr>
                    <p>Usuario</p>
                    <td><?php echo $mostrar['usuario'] ?></td>
                    <p>Nombre</p>
                    <td><?php echo $mostrar['nombre'] ?></td>
                    <p>Apellidos</p>
                    <td><?php echo $mostrar['apellidos'] ?></td>
                    <p>Correo</p>
                    <td><?php echo $mostrar['correo'] ?></td>
                    <p>Estatus</p>
                    <td><?php echo $mostrar['estatus'] ?></td>

                </tr>
            <?php    
            }
            ?>
 
        
        </div>
        <div class="activity">
            <h2>Actividad de Inicio de Sesión</h2>
            <ul>
                <li>Fecha y hora: 2023-10-07 14:30</li>
                <li>Ubicación: Durango</li>
                <li>Dispositivo: PC con Windows</li>
            </ul>
        </div>
        <div class="courses">
            <h2>Cursos Inscritos</h2>
            <table>
                <?php

                
                $sql = "SELECT c.nombre FROM cursos2 c, usuarios u, inscripciones i
                        WHERE i.id_usuario=u.id AND i.id_curso=c.id AND u.id='$id'";
                $result = mysqli_query($cone, $sql);

                // Verifica si la consulta fue exitosa
                if ($result) {
                    while ($mostrar = mysqli_fetch_array($result)) {
                        echo "<tr><td>" . $mostrar['nombre'] . "</td></tr>";
                    }
                } else {
                    // Maneja el caso en el que la consulta falla
                    echo "Error en la consulta: " . mysqli_error($cone);
                }
                ?>
            </table>

        </div>
    </div>
    <?php include 'vistas/footer.php'?>
</body>
</html>
