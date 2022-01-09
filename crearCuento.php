<?php
include_once('./clases.php/Cuento.php');
$titulo= $_POST["tituloCUENTO"];
$descripcion= $_POST["descripcionCUENTO"];
$cuerpo= $_POST["cuerpoCUENTO"];
$idAutor=$_POST["idAutor"];
$cuento= New Cuento($titulo, $descripcion, $cuerpo);
$cuento->crear ($idAutor);
?>