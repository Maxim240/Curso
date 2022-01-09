<?php
include_once("./config/conexion.php");
include_once("Cuentoautor.php");
class Cuento {
    private $idCuento=NULL;
    private $nombre=NULL;
    private $descripcion=NULL;
    private $cuerpo=NULL;
public function_construct($id,$nom,$desc,$cu)
{

    $this->idCuento=$id;
    $this->nombre=$nom;
    $this->descripcion=$desc;
    $this->cuerpo=$cu;

}

public function list (){
$con=conectar();
$q= "SELECT * FROM cuento";
$c= $con->query ($q);
$setDatos=[];
while($r=$c->fetch_assoc()){
    $datosAutor=CuentoAutor::verAutor($r["id"]);
    $r["nombreAutor"]= $datosAutor["nombre"];
    $r["apellidoAutor"]= $datosAutor["apellido"];
    array_push($setDatos, $r);

}
cerrar($con);
 return $setDatos;

}

public function setIdCuento($idc){
    $this-> idCuento= $idc;
}
public fuction getIdCuento(){
    return $this-> idCuento;
}

}
?>