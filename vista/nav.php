<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta http-equiv= "X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- incluimos bootsatrap en css y java-->
    <link rel="stylesheet" href="vista/bootstrap/bootstrap.min.css" type="text/css" >
    <link rel="stylesheet" href="vista/css.css" type="text/css">
    <script type="text/javascript" src="perfil.js" ></script>
    <title>Pet Finder</title>    
</head>

<header class="titulo">
        <h1 > Pet Finder </h1>
</header>
<body>

<!--Bootstrap NAV-->
<nav class="navbar bg-body-tertiary">
        <div class="container-fluid">
          <a class="navbar-brand" href="index.php">
            <img src="vista/img/puppy1.jpg" alt="Logo" width="40" height="40" style="border-radius:20px"class="d-inline-block align-text-top">
           
                <li><a href="busco.php" id="busco"> Busco a mi mascota </a>  </li>      
                <li><a href="encontrado.php" class="encontrado"> He encontrado una mascota </a> </li> 
                <li><a href="ayudar.php" id="ayudar">Quiero acoger o adoptar </a> </li> 
                <li><a href="perfil.php" class="encontrado">Perfil </a> </li> 
          </a>
        </div>
    </nav>
         
</body>
</html>