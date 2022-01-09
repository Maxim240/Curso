<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MUNDO DE CUENTOS</title>
        <!-- Boostrap CSS -->
    <link rel="stylesheet" href="css/estilos.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<!-- Body -->
<body>
<?php include_once("includes/header.php"); ?>
<div class="container"> 
    <h2>Acceda a la base de cuentos más grande de latinoamérica</h2>  
    <section class="main row">
        <article class="col-lg-9">
        <p>
        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Vitae asperiores autem esse sapiente consectetur mollitia voluptatem, cum distinctio itaque, et voluptate quis amet odit, est atque impedit tempore. Iure, maiores.
        </p>
       <img src="img/cuentos.jpg">
       <img src="img/dragon.jpg">
       <img src="img/dormir.jpg">
       <img src="img/selva.jpg">
       
       <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Assumenda quis, tempora minima illum laboriosam necessitatibus suscipit quod delectus a dolore expedita similique soluta exercitationem voluptatum dicta obcaecati architecto hic consequuntur.
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim distinctio vitae id officia consequuntur, perferendis dolorem ut commodi, autem beatae reiciendis, dolores ex impedit sequi aliquid. Nemo eos pariatur expedita!
       </p>
    </article>
    
        <!-- ASIDE -->
        <aside class="col-lg-3">
            
        <?php 
        session_start();
        if(!isset($_SESSION["nombre"]))
        {
            ?>


        <p><a href="registrarUsuario.php">Registrar nuevo Usuario</a></p>
        
        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Cupiditate quidem minus voluptatum unde? Tempore in, fugiat natus eaque similique rerum soluta vitae ratione ipsa expedita sunt, assumenda accusantium numquam. Adipisci.
        <br>
        <br>
        <form method="post" action="login.php">
          <label>Nombre:</label>
          <input type="text" name="nomUsuario">
          <label>Apellido:</label>
          <input type="text" name="apUsuario">
          <label>Contraseña:</label>
          <input type="password" name="pasUsuario">
          <input type="submit" name="envFormulario" value="Login">
</form>
<?php 
}
    else
    { ?>
     "Bienvenido, ya estás indentificado"
     <br>
     <a href="sectorprotegido.php">Ir a sector protegido</a>
     <br>
    <a href="cerrarSesion.php">Cerrar Sesion</a>
    
    <?php
    }
    ?>
    <br>
    <?php include_once("buscador.php"); ?>
        </aside>
  
         
         </section>
         
     
<!-- Popper and Boostrap -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

</body>
<br>
<br>
<br>
    

<?php include_once("includes/footer.php"); ?>
    


</html>

<?php
include_once('conexion.php');
$con=conectar();
$query="SELECT*FROM usuario";
$resultado=$con-> query ($query);
while ($datos=$resultado->fetch_assoc()){
  echo "Nombre:".$datos["nombre"]." | Apellido: ".$datos["apellido"]."<br>";

}
cerrar($con);
?>