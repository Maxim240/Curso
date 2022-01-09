<?php
include_once 'conexion.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buscador</title>
</head>
<body>
    <div class="barra">
      <form action="" method="get">
    <input type="text" placeholder="Buscar" required name="buscador" maxlength="30">
    <input type="submit"value="Enviar" > </div>
  </div> 
 <?php
	if(isset($_GET['enviar'])){
    $busqueda= $_GET['busqueda'];
    $consulta= $con->query ("SELECT * FROM badges WHERE autor LIKE '%$busqueda%'");
    while($row= $consulta->fetch_array()){
      echo $row ['cuento'].'';
    }
  }
  ?>
   
</body>
</html>