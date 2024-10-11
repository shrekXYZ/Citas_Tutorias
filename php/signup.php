<?php
    $servidor = "localhost";
    $usuario = "root";
    $password = "";
    $base = "citas_tutorias";
    $cone = new mysqli($servidor, $usuario, $password, $base);

    if (!$cone) {
        die("La conexión falló: " . mysqli_connect_error());
    }else{
        echo "La conexión se realizó con exito";
    }

    $name = $_POST["nombre"];
    $surname = $_POST["apellidos"];
    $username = $_POST["usuario"];
    $email = $_POST["correo"];
    $password = $_POST["contrasena"];

    $sql = "INSERT INTO usuarios(nombre, apellidos, usuario, correo, contrasena) VALUES(
       '$name',
       '$surname',
       '$username',
       '$email',
       '$password'
    )";

    if(mysqli_query($cone, $sql)){
        header("Location: ../index.php");
    }else {
        echo "Error: " . $sql . "<br>" . mysqli_error($cone);
    }

    mysqli_close($cone);
?>