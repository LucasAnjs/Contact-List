<?php
$host = "localhost";
$database = "contacts";
$username = "root";
$password = "M@ster";

$connection = mysqli_connect($host, $username, $password, $database, "3308");

if (!$connection) {
  die("Falha ao conectar! " . mysqli_connect_error());
}
?>