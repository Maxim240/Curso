<?php
include_once('conexion.php');
$con=conectar();
$nombre= $_POST["nomUsuario"];
$apellido= $_POST["apUsuario"];
$passw= $_POST["pasUsuario"];
$encriptado= password_hash($passw,PASSWORD_DEFAULT);

$query= "INSERT INTO usuario (nombre, apellido, passw) VALUES ('".$nombre."','".$apellido."','".$encriptado."');";
if ($con -> query ($query) ===TRUE){
    header("Location:index.php");
}
else{
    echo "Error detectado";
}
cerrar($con);
?>