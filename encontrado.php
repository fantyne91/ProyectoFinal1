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
    <?php
     
    ?>
<!--Bootstrap NAV-->
<nav class="navbar bg-body-tertiary">
        <div class="container-fluid">
          <a class="navbar-brand" href="index.html">
            <img src="img/puppy1.jpg" alt="Logo" width="40" height="40" class="d-inline-block align-text-top">
           
                <li><a href="busco.html" id="busco"> Busco a mi mascota </a>  </li>      
                <li><a href="encontrado.php" id="encontrado"> He encontrado una mascota </a> </li> 
                <li><a href="ayudar.html" id="ayudar">Quiero colaborar acogiendo/adoptando </a> </li> 
          
          </a>
        </div>
      </nav>

    <h1>Has encontrado una mascota?</h1>
    <p>Para publicar necesitamos que hagas <a href="login.php"> Login </a> o crees una cuenta:</p>
           
    <!--FORM CREAR USUARIO BOOTSTRAP
        LO MANDAMOS A LOGIN DONDE HACEMOS LAS OPERACIONES,
        ASI LOS DATOS DE LAS VARIABLES NO DAN ERRORES -->

    <div class="formUsuario">
        <form action="crearUsuario.php" method="post">
        <p class="text-white">Crea un usuario</p>
            <div class="input-group mb-2">
                 <span class="input-group-text" id="inputGroup-sizing-default">Nombre</span>
                 <input  type="text" name="crearNombre" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">                              
            </div>
            <div class="input-group mb-2">
                 <span class="input-group-text" id="inputGroup-sizing-sm">Apellido</span>
                 <input type="text" name="crearApellido" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
            </div>          
            <div class="input-group mb-2">
                 <span class="input-group-text" id="inputGroup-sizing-sm">Correo Electrónico</span>
                 <input require type="text" name="crearCorreo" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
            </div>
            <div class="input-group mb-2">
                 <span class="input-group-text" id="inputGroup-sizing-sm">Contraseña</span>
                 <input type="text" name="crearPw" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
            </div>
            <div class="input-group mb-2">
                <p>Eres una Protectora? <select  name="protectora"></p>
                    <option value="si">Si</option>
                    <option selected value="no">No</option>
                    </select> 
            </div>
            <div class="input-group mb-2">
                 <span class="input-group-text" id="inputGroup-sizing-sm">Nombre de la protectora</span>
                 <input type="text" name=nombreP class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
            </div>
            
            <button type="submit"  name="submitCrear" class="btn btn-primary btn-sm" >Crear Usuario</button>
        </form><br>
    </div>

    
   <!--FORM LOGGIN USUARIO BOOTSTRAP-->
   <div class="loggin">
        <form action="login.php" method="post">
    <p class="text-white">Haz loggin</p>
            <div class="input-group mb-2">                
                 <input type="text" name="correo" placeholder="Introduce Email:" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
            </div>
            
            <div class="input-group mb-2">                 
                 <input type="password" name=pw placeholder="Introduce contraseña:" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
            </div>
            <button type="submit"  name="submitloggin" class="btn btn-primary btn-sm">Acceder</button>
        </form>
   </div>

   
</body>
</html>