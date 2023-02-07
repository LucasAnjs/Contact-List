<?php
$host = "HOST IP/NAME";
$database = "DATABASE";
$username = "USERNAME";
$password = "PASSWORD";

$connection = mysqli_connect($host, $username, $password, $database, "3308");

if (!$connection) {
  die("Falha ao conectar! " . mysqli_connect_error());
}
?>