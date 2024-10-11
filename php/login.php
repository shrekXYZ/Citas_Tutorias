<?php
    session_start();

    $servidor="localhost";
    $usuario="root";
    $password="";
    $base="citas_tutorias";
    $cone= new mysqli($servidor,$usuario,$password,$base);

    if($cone->connect_error){
        die("ConexionExitosa".$cone->connect_error);
    }

    $username=$_POST['Usuario'];
    $contra= $_POST['contrasena'];
    $id=$_POST['id'];
    
    $sql="SELECT * FROM usuarios 
    WHERE usuario= '$username' AND contrasena='$contra'";

    $result=$cone->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $_SESSION['Usuario'] = $username;
        $_SESSION['id'] = $row['id'];
        $_SESSION['correo'] = $row['correo'];

        $id_rol = $row['id_rol'];
        switch ($id_rol) {
            case 0:
                header("Location: ../vistaalumno.php");
                break;
            case 1:
                header("Location: ../vistaprofesor.php");
                break;
            case 2:
                header("Location: ../vistaalumno.php"); // Change this to the appropriate URL for id_rol = 2
                break;
            default:
                echo "Invalid id_rol";
        }

    
    } else {
        // Credenciales incorrectas
        echo "Credenciales incorrectas";
    }
    $cone->close();

?>