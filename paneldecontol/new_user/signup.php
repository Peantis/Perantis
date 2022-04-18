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
   $db_connection = mysql_connect($db_host, $db_user, $db_password);

if (!$db_connection) {
	die('No se ha podido conectar a la base de datos');
}
$subs_password = ($_POST['password']);
$subs_rol = ($_POST['rol']);
$subs_usuario = ($_POST['usuario']);

$resultado=mysql_query("SELECT * FROM ".$db_table_name." WHERE Email = '".$subs_email."'", $db_connection);

if (mysql_num_rows($resultado)>0)
{

header('Location: Fail.html');

} else {
	
	$insert_value = 'INSERT INTO `' . $db_name . '`.`'.$db_table_name.'` (`Password` , `Rol` , `Usuario`) VALUES ("' . $subs_password . '", "' . $subs_rol . '", "' . $subs_usuario . '")';

mysql_select_db($db_name, $db_connection);
$retry_value = mysql_query($insert_value, $db_connection);

if (!$retry_value) {
   die('Error: ' . mysql_error());
}
	
header('Location: ../');
}

mysql_close($db_connection);
		
?>
