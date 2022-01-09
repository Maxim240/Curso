<?php
session_start();
if(isset($_SESSION["nombre"])){
    ?>

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
    <header>
        <div
        class="bg-image"
        style="
        background-image: url('https://previews.123rf.com/images/joserpizarro/joserpizarro1409/joserpizarro140900155/32829797-biblioteca-estante-de-libros-antiguos-librer%C3%ADa.jpg');
            height: 15vh;
        "
      >
        <div class="mask" style="background-color: rgba(0,0,0,0.3);">
          <div class="d-flex justify-content-center align-items-center h-100">
            <h1 class="text-white mb-0">Mundo de cuentos</h1>
            
          </div>
           
    </header>
    
    <div class="container"> 
        <h2>Crear Cuento</h2>  
        <form method= "post" action="crearCuento.php" class="form-group">
          <label>Titulo:</label>
          <input type="text" class="form-control" name="tituloCUENTO"/>
          <label> Descripción</label>
          <textarea class="form-control" name="descripcionCUENTO"></textarea>
          <label> Cuerpo</label>
          <textarea class="form-control" name="cuerpoCUENTO"></textarea>
          <input type="submit" class="form-control" name="enviar" value="Enviar datos">
          <a href="sectorprotegido.php">Volver</a>   
            <select class= "form-control" name="idAutor">   
                         
</select> 
</form>
    <!-- Popper and Boostrap -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <br>
    <br>
   
    
    </body>
    <br>
    <br>
    <br>
        <footer>
            2021.Todos los derechos reservados
        </footer>
    
        
    
    
    
    </html>



<?php
}
else{
    echo "ERROR";
}
?>