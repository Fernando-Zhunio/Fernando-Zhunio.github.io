<?php
include("Conexion.php");
if(isset($_POST["nombre"]) && isset($_POST["email"]) && isset($_POST["asunto"]) && isset($_POST["mensaje"])){
$nombre=$_POST["nombre"];
$email= $_POST["email"];
$asunto = $_POST["asunto"];
$mensaje = $_POST["mensaje"];
$phone="999999999";
$address="Dirección Anonima";

if(isset($_POST["phone"]))
$phone=$_POST["phone"];
if(isset($_POST["address"]))
$address=$_POST["address"];

$sql="INSERT INTO mensajes(Nombres,Email,Telefono,Direccion,Asunto,Mensaje) VALUES('$nombre','$email','$phone','$address','$asunto','$mensaje')";


if ($con->query($sql) === TRUE) {
    echo "1";
} else {
    echo "Error: " . $sql . "<br>" . $con->error;
}

$con->close();

}

?>