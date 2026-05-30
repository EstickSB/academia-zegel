<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Zegel - Login</title>
      <link rel="icon" type="image/x-icon"
        href="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRHcPJ0YfsEYmEzxKIgrEg5gPjMzKi8Qvu_JA&s">
  <link rel="stylesheet" href="../../css/login.css">
</head>
<body>
  <div class="login-container">
    <section class="form-register">
      <h4>Inicio de Sesión</h4>
      <form method="POST" action="../../controller/controlleracceso/verificar.php" class="form">
        <input class="controls" type="text" name="txtusuario" id="txtusuario" placeholder="Ingrese su Usuario" required>
        <input class="controls" type="password" name="txtclave" id="txtclave" placeholder="Ingrese su Contraseña" required>
        <input class="botons" type="submit" value="Ingresar">
      </form>
    </section>
  </div>
</body>
</html>
