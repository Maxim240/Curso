<?php
include_once('conexion.php');
$con=conectar();
$nombre= $_POST["nomUsuario"];
$apellido= $_POST["apUsuario"];
$passw= $_POST["pasUsuario"];
$encriptado= password_hash($passw,PASSWORD_DEFAULT);
$query= "INSERT INTO usuario (nombre, apellido, passw) VALUES ('".$nombre."','".$apellido."','".$passw."');";


if($con ->query($query) ===TRUE){
   echo "Registro insertado con exito";
}
else{
    echo "Error detectado";
}
cerrar($con);
?>