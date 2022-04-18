<?php
session_start();
$varid = $_SESSION['user_id'];
$varrol = $_SESSION['user_rol'];
if(!isset($varid)){
	header("location:/");
}else if($varrol === "User"){
	header("location:/Principal");
}


$db_host="sql104.byethost6.com";
$db_user="b6_30791248";
$db_password="Alberto2005@";
$db_name="b6_30791248_login";
$db_table_name="users";
   $db_connection = mysqli_connect($db_host, $db_user, $db_password);

if (!$db_connection) {
	die('No se ha podido conectar a la base de datos: ') .mysqli_error();
}
$db = mysqli_select_db($db_connection, $db_table_name);

$resultado = "SELECT id, usuario, rol FROM users";
$ejecuta_sentencia = mysqli_query($db_connection, $resultado);


if(!$ejecuta_sentencia){
  echo'Hay un error en la sentencia SQL:' .mysqli_error();
}else{
  echo'Error al mostrar lista de usuarios:' .mysqli_error();
}

$arrayDatos = mysqli_fetch_array($ejecuta_sentencia);


?>

<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
     <title>AdminPage-Pallolita</title>
     <link rel="stylesheet" href="vaidroll.css">	
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
    <a class="nav-link " aria-current="page" href="/Principal-Admin/">Principal</a>
  </li>
  <li class="nav-item">
    <a class="nav-link " aria-current="page" href="new_user/">Crear Usuario</a>
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

<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Usuario</th>
      <th scope="col">Rol</th>
      <th scope="col">Acción</th>
    </tr>
  </thead>
  <tbody>
     <?php while($row=mysqli_fetch_array($ejecuta_sentencia)) {                              
                          echo"<tr>";
                            echo"<td>".$row['id']."</td>";
                            echo"<td>".$row['usuario']."</td>";
                            echo"<td>".$row['rol']."</td>";
                            echo"<td></td>";
                          echo"</tr>";
                        }

                    ?>
  </tbody>
</table>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
