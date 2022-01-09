<?php
include_once('./cofig/conexión.php');
include_once("Cuentoautor.php");
class Autor {
    private $idAutor=NULL;
    private $nombre=NULL;
    private $apellido=NULL;
function __construct($id,$nom,$apell)
{

    $this->idAutor=$id;
    $this->nombre=$nom;
    $this->apellido=$apell;

}
public function crear($idAutor) {
    $con=conectar();
    $query= "INSERT INTO autor (nombre, apellido) VALUES ('".$this->nombre."','".$this->apellido."');";
    $con -> query ($query);
    $idAutor= $con->insert_id;
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
$q= "SELECT * FROM autor";
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

public function setIdAutor($idc){
    $this-> idAutor= $idc;
}
public function getIdAutor(){
    return $this-> idAutor;
}

}
?>