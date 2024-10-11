<?php
    $servidor="localhost";
    $usuario="root";
    $password="";
    $base="citas_tutorias";
    $cone= new mysqli($servidor,$usuario,$password,$base);

    if(mysqli_connect_error()){
        die("ConexionExitosa".$cone->connect_error);
    }
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['editar_Id']) && isset($_POST["edit_Nombre"]) && isset($_POST["edit_Apellido"]) && isset($_POST["edit_usuario"]) && isset($_POST["edit_correo"]) && isset($_POST["editcontrasena"])) {
      
        $id=$_POST['editar_Id'];
        $editNombre=$_POST['edit_Nombre'];
        $editApellido=$_POST['edit_Apellido'];
        $editusuario=$_POST['edit_usuario'];
        $editcorreo=$_POST['edit_correo'];
        $editcontrasena=$_POST['editcontrasena'];
    
        // Preparar la consulta para insertar un nuevo usuario
        $sql = "INSERT INTO usuarios (id,nombre ,apellidos,usuario, correo, contrasena) VALUES ($id, '$editNombre', '$editApellido', '$editusuario', '$editcorreo', '$editcontrasena')";
    
        if (mysqli_query($cone, $sql)) {
            echo "Usuario agregado correctamente";
        } else {
            echo "Error al agregar el usuario: " . mysqli_error($cone);
        }
      }
      $cone->close();
    
      header('Location: prueba.php');
?>