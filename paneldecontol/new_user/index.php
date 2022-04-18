<?php
session_start();
$varid = $_SESSION['user_id'];
$varrol = $_SESSION['user_rol'];
if(!isset($varid)){
	header("location:/");
}else if($varrol === "User"){
	header("location:/Principal");
}


?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <title>Formulario de registro</title>
    <link rel="icon" type="image/png" href="logo/logo.png"/>
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="/assets/css/style.css">
  </head>
  <body>

  <nav class="navbar navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
      Pallolita
    </a>
	<ul class="nav justify-content-end">
  <li class="nav-item">
    <a class="nav-link " aria-current="page" href="../"><--Volver</a>
  </li>
  <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="/Principal" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Mi cuenta
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="/logout">Cerrar Sesión</a></li>
          </ul>
        </li>
</ul>
  </div>
</nav>
    <br>
    <h1>Registro</h1>

    <form action="signup" method="POST">
      <input name="usuario" type="text" placeholder="Ingresa el usuario">
      <input name="password" type="password" placeholder="Ingresa la contraseña">
      <input name="rol" type="text" placeholder="Ingresa el rol">
      <input type="submit" value="Ingresar" placeholder="Ingresar">
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>
