<?php
// Conexión a la base de datos (reemplaza con tus propios detalles de conexión)
$servername = "localhost";
$username = "root";
$password = "";
$database = "test";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Consulta para obtener los usuarios
$sql = "SELECT * FROM usuarios";
$result = $conn->query($sql);

// Generar la tabla de usuarios con acciones de edición y eliminación
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>{$row['id_usuario']}</td>
                <td>{$row['id_rol']}</td>
                <td>{$row['username']}</td>
                <td>{$row['nombre']}</td>
                <td>{$row['apellido']}</td>
                <td>{$row['correo']}</td>
                <td>
                    <button onclick='mostrarEditarUsuario({$row['id_usuario']}, {$row['id_rol']}, \"{$row['username']}\", \"{$row['nombre']}\", \"{$row['apellido']}\", \"{$row['correo']}\")'>Editar
                    </button>
                    <button onclick='mostrarEliminarUsuario({$row['id_usuario']})'>Eliminar</button>
                </td>
            </tr>";
    }
} else {
    echo "<tr><td colspan='7'>No hay usuarios</td></tr>";
}

$conn->close();
?>
