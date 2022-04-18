<?php

  session_start();
  if (isset($_SESSION['user_id'])) {
    header("location: paneldecontrol");
  }

  
  require 'database.php';

  if (!empty($_POST['usuario']) && !empty($_POST['password'])) {
    $records = $conn->prepare('SELECT id, usuario, password, rol FROM users WHERE usuario = :usuario');
    $records->bindParam(':usuario', $_POST['usuario']);
    $records->execute();
    $results = $records->fetch(PDO::FETCH_ASSOC);

    $message = '';

    if (count($results) > 0 && $_POST['password'] == $results['password']) {
      $_SESSION['user_id'] = $results['id'];
      $_SESSION['user_rol'] = $results['rol'];
      $varid = $_SESSION['user_id'];
      $varrol = $_SESSION['user_rol'];
      header("Location: paneldecontrol");
    } else {
      $message = 'Sorry, those credentials do not match';
    }
  }
  
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Login-Pallolita</title>
    <link rel="icon" type="image/png" href="logo/logo.png"/>
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="/assets/css/style.css">
  </head>
  <body>
    <?php require 'partials/header.php' ?>

    <?php if(!empty($message)): ?>
      <p> <?= $message ?></p>
    <?php endif; ?>

    <h1>Login</h1>

    <form action="login" method="POST">
      <input name="usuario" type="text" placeholder="Enter your user">
      <input name="password" type="password" placeholder="Enter your Password">
      <input type="submit" value="Ingresar" placeholder="Ingresar">
    </form>
  </body>
</html>
