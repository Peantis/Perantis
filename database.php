<?php

$server = 'sql104.byethost6.com';
$username = 'b6_30791248';
$password = 'Alberto2005@';
$database = 'b6_30791248_login';

try {
  $conn = new PDO("mysql:host=$server;dbname=$database;", $username, $password);
} catch (PDOException $e) {
  die('Connection Failed: ' . $e->getMessage());
}

?>
