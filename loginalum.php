<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="CSS/Login_alum.css">
  <title>Login alumno</title>
</head>
<body>
  
  <div class="fondo">
    <div class="cuadros"></div>
    <div class="cuadros"></div>
    <div class="cuadros"></div>
    <div class="cuadros"></div>
    <div class="cuadros"></div>
    <div class="cuadros"></div>
    <div class="cuadros"></div>
    <div class="cuadros"></div>
    <div class="cuadros"></div>
    <div class="cuadros"></div>
  </div>
  <div class="container">
    <h2>Bienvenido</h2>
    <form action="php/login.php" method="post">
      <div class="registro">
        <label for="matricula">Usuario</label>
        <input type="text" id="Usuario" name="Usuario">
      </div>
      <div class="registro">
        <label for="contrasena">Contraseña</label>
        <input type="password" id="contrasena" name="contrasena" required>
      </div>
      <div class="registro">
      
      
    </div>
      <div class="registro">
        <button type="submit">Log in</button>
      </div>
      <div class="cuenta">
        <p>¿Olvidaste tu contraseña?</p>
      </div>
  </div>
    </form>
</body>
</html>