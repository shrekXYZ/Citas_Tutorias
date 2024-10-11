<?php
// Detalles de la base de datos
$servername = "localhost";
$username = "root";
$password = "";
$database = "test";

// Crear una conexión
$conn = new mysqli($servername, $username, $password, $database);

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}


// Obtener datos del formulario
$id = $_POST['id'];
$idRol = $_POST['idRol'];
$username = $_POST['username'];
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$correo = $_POST['correo'];


// Actualizar el usuario en la base de datos
$sqlupdate = "UPDATE 
                usuarios 
              SET
                id_rol= '$idRol',
                username='$username', 
                nombre='$nombre', 
                apellido='$apellido', 
                correo='$correo'
              WHERE id_usuario=$id";

if ($conn->query($sqlupdate) === TRUE) {
    echo "Usuario actualizado correctamente";
} else {
    echo "Error al actualizar usuario: " . $conn->error;
}


// Cerrar la conexión
$conn->close();
?>
