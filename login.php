<?php
include_once('conexion.php');
$con=conectar();
$nombre=filter_var($_POST["nomUsuario"],FILTER_SANITIZE_STRING);
$apellido=filter_var($_POST["apUsuario"],FILTER_SANITIZE_STRING);
$passw=$_POST["pasUsuario"];
$encriptado=password_hash($passw,PASSWORD_DEFAULT);
$query="SELECT*FROM usuario WHERE nombre='".$nombre."'";
$resultado=$con->query($query);
$datos=$resultado->fetch_assoc();
$passwHallada=$datos["passw"];
$valido=password_verify($passw,$passwHallada);
if($valido==True){
    echo "Usuario validado!<br>";
    echo $datos["nombre"]." ".$datos["apellido"];
    session_start();
    $_SESSION ["nombre"]=$datos["nombre"];
    echo "<a href=\"sectorprotegido.php\">Ir a sector protegido</a>";

}
else {
    echo "Error, datos equivocados...";
}
cerrar($con);
?>