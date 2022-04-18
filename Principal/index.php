<?php
session_start();
$varid = $_SESSION['user_id'];
$varrol = $_SESSION['user_rol'];
if(!isset($varid)){
	header("location:/");
}?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Pallolita</title>
  <link rel="icon" type="image/png" href="/logo/logo.png"/>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
	
<nav class="navbar navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
      Pallolita
    </a>
	<ul class="nav justify-content-end">
  <li class="nav-item">
    <a class="nav-link " aria-current="page" href="/Principal/Canales-TV/">Canales Tv</a>
  </li>
  <li class="nav-item">
    <a class="nav-link active" href="/Principal/Deportes/">Deportes</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="/Principal/Radios/">Radios</a>
  </li>
  <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="/Principal" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Mi cuenta
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="http://hola.22web.org/Pallolita-app/">Descargar App</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="/logout">Cerrar Sesión</a></li>
          </ul>
        </li>
</ul>
  </div>
</nav>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
