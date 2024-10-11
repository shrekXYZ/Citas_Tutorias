<?php
    $servidor="localhost";
    $usuario="root";
    $password="";
    $base="citas_tutorias";
    $cone= new mysqli($servidor,$usuario,$password,$base);

    if(mysqli_connect_error()){
        die("ConexionExitosa".$cone->connect_error);
    }
    
    $id=$_POST['id'];

    

    $sqlupdate="DELETE FROM usuarios
WHERE id='$id'";


    if($cone->query($sqlupdate) === TRUE){
        echo"Usuario actualizado correctamente";
    }else{
        echo"Error al actualizar el usuario".$cone->error;
    }
$cone->close();
header('Location: prueba.php');
?>