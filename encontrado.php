<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- incluimos bootsatrap en css y java-->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" >
    <link rel="stylesheet" href="css.css" type="text/css">
    <title>Encuentra</title>
   
</head>

<body>
    
<header> 
       
       </header> 
   
       <!--Bootstrap NAV-->
       <nav class="navbar bg-body-tertiary">
           <div class="container-fluid">
             <a class="navbar-brand" href="index.php">
               <img src="img/puppy1.jpg" alt="Logo" width="40" height="40" class="d-inline-block align-text-top">
              
                   <li><a href="busco.php" id="busco"> Busco a mi mascota </a>  </li>      
                   <li><a href="encontrado.php" id="encontrado"> He encontrado una mascota </a> </li> 
                   <li><a href="ayudar.html" id="ayudar">Quiero colaborar acogiendo </a> </li> 
             
             </a>
           </div>
       </nav>
   
       

<main>
<?php
     include "crearUsuario.php";
     
        validaLogin();      
     
     ?>
   <!--FORM LOGGIN USUARIO BOOTSTRAP-->
   <div class="formLoggin">
   <p>Para publicar necesitamos que hagas Login o  <a href="index.html">crees una cuenta: </a></p>  

          <form action="encontrado.php" method="post">
      <p class="text-black">Haz loggin:</p>
              <div class="input-group mb-2">                
                   <input type="text" name="correo" placeholder="Introduce Email:" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
              </div>                
              <div class="input-group mb-2">                 
                   <input type="password" name=pw placeholder="Introduce contraseña:" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
              </div>
              <button type="submit"  name="submitloggin" class="btn btn-primary btn-sm">Acceder</button>
          </form>
     </div> 

     
</main>
   
</body>
</html>