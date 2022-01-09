<?php
include_once("./cofig/conexion.php");
include_once("Cuentoautor.php");
class Cuento {
    private $cuento=NULL;
    private $titulo=NULL;
    private $descripcion=NULL;
    private $cuerpo=NULL;
function __construct($nom,$desc,$cu)
{

    $this->titulo=$nom;
    $this->descripcion=$desc;
    $this->cuerpo=$cu;

}

public function crear($idAutor) {
 $con=conectar();
 $query= "INSERT INTO cuento (titulo, descripcion, cuerpo) VALUES ('".$this->titulo."','".$this->descripcion."','".$this->cuerpo."');";
 $con -> query ($query);
 $idCuento= $con->insert_id;
 $queryDos= "INSERT INTO cuentoautor (fk_idcuento, fk_idautor) VALUES ('".$idCuento."','".$idAutor."');";
 $idCuento= $con->insert_id;
 if ($con -> query ($queryDos) ===TRUE){
    header("Location:index.php");
}
else{
    echo "Error detectado";
}
cerrar($con);
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
public function getIdCuento(){
    return $this-> idCuento;
}

}
?>