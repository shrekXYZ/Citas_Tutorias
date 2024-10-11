<?php
    $servidor="localhost";
    $usuario="root";
    $password="";
    $base="citas_tutorias";
    $cone= new mysqli($servidor,$usuario,$password,$base);

    if($cone->connect_error){
        die("ConexionExitosa".$cone->connect_error);
    }
    $sql= "SELECT * FROM USUARIOS";
    $result =$cone->query($sql);
    if($result->num_rows > 0){
        while($row = $result->Fetch_assoc()){
            echo"<tr>
                <td>{$row['id']}</td>
                <td>{$row['nombre']}</td>
                <td>{$row['apellidos']}</td>
                <td>{$row['usuario']}</td>
                <td>{$row['correo']}</td>
                <td>{$row['contrasena']}</td>
                <td>
                    <button class='botoneditar' onclick='mostrarEditarUsuario(
                        {$row['id']},
                        \"{$row['nombre']}\",
                        \"{$row['apellidos']}\",
                        \"{$row['usuario']}\",
                        \"{$row['correo']}\",
                        \"{$row['contrasena']}\")'>
                    EDITAR
                    </button>
                    <button class='botoneditar' onclick='mostrarEliminarUsuario(\"{$row['id']}\")'>
                    ELIMINAR
                    </button>
                </td>
            </tr>";
        }
    }else{
        echo"<tr><td colspan='7'>No hay usuarios</td></tr>";
    }
    $cone->close();
?>