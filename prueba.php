<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"> </script>
    <title>CRUD TREJO SANDOVAL</title>
    <link rel="stylesheet" href="prueba.css">
</head>
<body>
<div class="division">
     <button class="BotonComun" type="button" onclick="usuarioNuevo()">AGREGAR USUARIO</button>
     </div>
     <table class="tablausuarios" id="prueba" border="1">
        <thead>
            <tr class="Elementos">
                <td>ID</td>
                <td>NOMBRE</td>
                <td>APELLIDOS</td>
                <td>USUARIOS</td>
                <td>CORREO</td>
                <td>CONTRASEÑA</td>
            </tr>
        </thead>
        <tbody>

        </tbody>
     </table>
     
     
     <div class="ModalEditar" id="modalEditar" style="display:none;">
        <h3>Editar usuario</h3>
        <form id="mostrarEditarUsuario" method="POST" action="guardaredicion.php">
            id: <input type="number" id='editarId' name='editar_Id'><br>
            nombre: <input type="text" id="editNombre" name="edit_Nombre"><br>
            apellido: <input type="text" id="editApellido" name="edit_Apellido"><br>
            usuario: <input type="text" id="editusuario" name="edit_usuario"><br>
            correo: <input type="text" id="editcorreo" name="edit_correo"><br>
            contrasena: <input type="text" id="editcontrasena" name="editcontrasena"><br>
            <input type="submit" value="ACEPTAR">
        </form>
     </div>
     <div class="agregarusuario" id="modalAgregar" style="display:none;">
        <h3>Editar usuario</h3>
        <form id="usuarioNuevo" action="registrarnuevosusers.php" method="POST">
            id: <input type="number" id='editarId' name='editar_Id'><br>
            nombre: <input type="text" id="editNombre" name="edit_Nombre"><br>
            apellido: <input type="text" id="editApellido" name="edit_Apellido"><br>
            usuario: <input type="text" id="editusuario" name="edit_usuario"><br>
            correo: <input type="text" id="editcorreo" name="edit_correo"><br>
            contrasena: <input type="text" id="editcontrasena" name="editcontrasena"><br>
            <input type="submit" onclick="agregarbasededatos()" value="ACEPTAR">
        </form>
     </div>
     <div class="modalEliminar" id="modalEliminar" style="display:none;">
        <form id="mostrarEliminarUsuario" action="eliminar_1.php" method="post">
        <h3>Confirmar Eliminación</h3>
        <p>¿Estás seguro de que quieres eliminar este usuario?</p>
        ID: <input id="id" name="id"><br>
        <button type="submit" onclick="eliminarUsuario()">Eliminar</button>
        </form>
        
    </div>
     <script>
         $(document).ready(function(){
            $.ajax({
                url: 'cargarusuario.php',
                type: 'GET',
                success: function(response){
                    $('#prueba tbody').html(response);
                }
            });
        });
        function mostrarEditarUsuario(editarId,editNombre,editApellido,editusuario,editcorreo,editcontrasena){
            document.getElementById('editarId').value=editarId;
            document.getElementById('editNombre').value=editNombre;
            document.getElementById('editApellido').value=editApellido;
            document.getElementById('editusuario').value=editusuario;
             document.getElementById('editcorreo').value=editcorreo;
            document.getElementById('editcontrasena').value=editcontrasena;
            document.getElementById('modalEditar').style.display='block';
        }

        function guardarEdicion(){
            var id = document.getElementById('editarId').value;
            var editNombre= document.getElementById('editNombre').value;
            var editApellido=document.getElementById('editApellido').value;
            var editusuario=document.getElementById('editusuario').value;
            var editcorreo=document.getElementById('editcorreo').value;
            var editcontrasena=document.getElementById('editcontrasena').value;
            $.ajax({
                type: 'POST',
                url: 'guardaredicion.php',
                data:{
                    id,
                    editNombre,
                    editApellido,
                    editusuario,
                    editcorreo,
                    editcontrasena,
                },
                success:function(response){
                    alert('usuario editado correctamente');
                    document.getElementById('modalEditar').style.display='none';
                    actualizarListaUsuarios()
                }
            });
        }
        function mostrarEliminarUsuario(id){
            document.getElementById('id').InnerText=id;
            document.getElementById('modalEliminar').style.display='block';
        }
        function eliminarUsuario(){
            
            var id = document.getElementById('id').value;

            // Enviar la solicitud de eliminación al servidor usando AJAX
            $.ajax({
                type: 'POST',
                url: 'eliminar_1.php', // Este archivo procesará la eliminación en el servidor
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
        function actualizarListaUsuarios(){
            
                $.ajax({
                    url: 'cargarusuario.php',
                    type: 'GET',
                    success: function(response){
                        $('#prueba tbody').html(response);
                    }
                });
            
        }
        function usuarioNuevo() {
            // Limpiar los campos del formulario de agregar usuario
            document.getElementById('editarId').value = '';
            document.getElementById('editNombre').value = '';
            document.getElementById('editApellido').value = '';
            document.getElementById('editusuario').value = '';
            document.getElementById('editcorreo').value = '';
            

            // Mostrar la ventana modal de agregar
            document.getElementById('modalAgregar').style.display = 'block';
        }
        function agregarbasededatos() {
            var id = document.getElementById('editarId').value;
            var editNombre= document.getElementById('editNombre').value;
            var editApellido=document.getElementById('editApellido').value;
            var editusuario=document.getElementById('editusuario').value;
            var editcorreo=document.getElementById('editcorreo').value;
            var editcontrasena=document.getElementById('editcontrasena').value;

            // Enviar los datos del nuevo usuario al servidor usando AJAX
            $.ajax({
                type: 'POST',
                url: 'registrarnuevosusers.php',
                data: {
                    id,
                    editNombre,
                    editApellido,
                    editusuario,
                    editcorreo,
                    editcontrasena
                },
                success: function(response) {
                    
                    document.getElementById('modalAgregar').style.display = 'none';
                    // Actualizar la lista de usuarios después de la adición
                    cargarUsuarios();
                },
                error: function(xhr, status, error) {
                    console.error(xhr.responseText);
                    alert("Error al agregar el usuario.");
                }
            });
        }
     </script>
</body>
</html>