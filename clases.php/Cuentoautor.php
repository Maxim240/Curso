<?php
include_once("./config/conexion.php");
class CuentoAutor{
    private $idcuento;
    private $idautor;

    function __construct()
    {

    }
    public static function verAutor($idcuento){
        $con=conectar();
        $q= "SELECT autor.nombre, autor.apellido FROM cuentoautor INNER JOIN 
        autor ON cuentoautor.idautor=autor.idautor WHERE cuentoautor.idcuento=".$idcuento.";";
        $c= $con->query ($q);
        $setDatos=[];
        $r= $c-> fetch_assoc();
         return $r;
        }
    }
?>