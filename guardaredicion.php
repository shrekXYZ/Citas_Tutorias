<?php
    $servidor="localhost";
    $usuario="root";
    $password="";
    $base="citas_tutorias";
    $cone= new mysqli($servidor,$usuario,$password,$base);

    if(mysqli_connect_error()){
        die("ConexionExitosa".$cone->connect_error);
    }
    
    $id=$_POST['editar_Id'];
    $editNombre=$_POST["edit_Nombre"];
    $editApellido=$_POST["edit_Apellido"];
    $editusuario=$_POST["edit_usuario"];
    $editcorreo=$_POST["edit_correo"];
    $editcontrasena=$_POST["editcontrasena"];

    $sqlupdate="UPDATE USUARIOS SET
id=$id,
nombre= '$editNombre',
apellidos= '$editApellido',
usuario= '$editusuario',
correo= '$editcorreo',
contrasena= '$editcontrasena'
WHERE id=$id";


    if($cone->query($sqlupdate)===true){
        echo"Usuario actualizado correctamente";
    }else{
        echo"Error al actualizar el usuario".$cone->error;
    }
    $cone->close();
    header('Location:prueba.php');
?>