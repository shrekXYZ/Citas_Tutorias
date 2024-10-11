<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Usuarios</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

<body>
    <h2>Lista de Usuarios</h2>
    <table id="usuariosTable" border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Rol</th>
                <th>Username</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Correo</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <!-- Aquí se cargarán los usuarios desde JavaScript -->
        </tbody>
    </table>
    <!-- Formulario de Edición de Usuario -->
    <div id="modalEditar" style="display:none;">
        <h3>Editar Usuario</h3>
        <form id="mostrarEditarUsuario">
            <!-- Campos de edición: id, id_rol, username, nombre, apellido, correo -->
            ID: <span id="editId"></span><br>
            Rol: <input type="text" id="editIdRol"><br>
            Username: <input type="text" id="editUsername"><br>
            Nombre: <input type="text" id="editNombre"><br>
            Apellido: <input type="text" id="editApellido"><br>
            Correo: <input type="text" id="editCorreo"><br><br>
            <button type="button" onclick="guardarEdicion()">Guardar</button>
        </form>
    </div>
    <!-- Formulario de Eliminación de Usuario -->
    <div id="mostrarEliminarUsuario" style="display:none;">
        <h3>Confirmar Eliminación</h3>
        <p>¿Estás seguro de que quieres eliminar este usuario?</p>
        <button type="button" onclick="eliminarUsuario()">Eliminar</button>
    </div>
    <script>
        // Usar jQuery para cargar los usuarios en la tabla desde PHP
        $(document).ready(function() {
            $.ajax({
                url: 'cargar_usuarios.php',
                type: 'GET',
                success: function(response) {
                    $('#usuariosTable tbody').html(response);
                }
            });
        });
    </script>
    <script>
        // funciones.js
        function mostrarEditarUsuario(id, idRol, username, nombre, apellido, correo) {
            document.getElementById('editId').innerText = id;
            document.getElementById('editIdRol').value = idRol;
            document.getElementById('editUsername').value = username;
            document.getElementById('editNombre').value = nombre;
            document.getElementById('editApellido').value = apellido;
            document.getElementById('editCorreo').value = correo;

            // Mostrar la ventana modal de edición
            document.getElementById('modalEditar').style.display = 'block';
        }

        function guardarEdicion() {
            var id = document.getElementById('editId').innerText;
            var idRol = document.getElementById('editIdRol').value;
            var username = document.getElementById('editUsername').value;
            var nombre = document.getElementById('editNombre').value;
            var apellido = document.getElementById('editApellido').value;
            var correo = document.getElementById('editCorreo').value;
            // Enviar los datos editados al servidor usando AJAX
            $.ajax({
                type: 'POST',
                url: 'guardar_edicion_usuario.php', // Este archivo procesará la edición en el servidor
                data: {
                    id,
                    idRol,
                    username,
                    nombre, 
                    apellido,
                    correo
                },
                success: function(response) {
                    alert('Usuario editado correctamente');
                    document.getElementById('modalEditar').style.display = 'none';
                    // Actualizar la lista de usuarios después de la edición
                    actualizarListaUsuarios();
                }
            });
        }

        function eliminarUsuario() {
            var id = document.getElementById('editId').innerText;

            // Enviar la solicitud de eliminación al servidor usando AJAX
            $.ajax({
                type: 'POST',
                url: 'php/eliminar_usuario.php', // Este archivo procesará la eliminación en el servidor
                data: {
                    id: id
                },
                success: function(response) {
                    alert('Usuario eliminado correctamente');
                    document.getElementById('modalEliminar').style.display = 'none';
                    // Actualizar la lista de usuarios después de la eliminación
                    actualizarListaUsuarios();
                }
            });
        }
        
        function actualizarListaUsuarios() {
            // Recargar la lista de usuarios después de la edición o eliminación
            $.ajax({
                url: 'vistas/cargar_usuarios.php',
                type: 'GET',
                success: function(response) {
                    $('#usuariosTable tbody').html(response);
                }
            });
        }
    </script>
</body>

</html>
