<?php
include_once('./clases.php/Autor.php');
$con=conectar();
$nombre= $_POST["nomAutor"];
$apellido= $_POST["apAutor"];
$query= "INSERT INTO autor (nombre, apellido) VALUES ('".$nombre."','".$apellido."');";
if ($con -> query ($query) ===TRUE){
    header("Location:sectorprotegido.php");
}
else{
    echo "Error detectado";
}
cerrar($con);
?>

