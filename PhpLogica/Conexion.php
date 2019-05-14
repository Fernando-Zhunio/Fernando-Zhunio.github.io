<?php
$host="localhost";
$usuario="root";
$pass="";
$base="fzenterprise";

$con=mysqli_connect($host,$usuario,$pass,$base)or die("Error al conectar");
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}
?>