<?php
function conectar(){
    $host="127.0.0.1";
    $bd="maximiliano";
    $usuario="root";
    $pass="alfaALFA1234";
    $con=new mysqli($host,$usuario,$pass,$bd);
    return $con;
}
function cerrar($con){
    $con->close();
}


?>