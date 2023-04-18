<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- incluimos bootsatrap en css y java-->
    <link rel="stylesheet" href="vista/bootstrap/bootstrap.min.css" type="text/css" >
    <link rel="stylesheet" href="vista/css.css" type="text/css">
    <script type="text/javascript" src="perfil.js" ></script>
    <title>Pet Finder</title>    
</head>
<body>
  
    <?php 
    include "funciones.php";
   include "vista/nav.php";
   ?>

    <main>
      <div class="entradaAcogida">
        <label>
            Quieres acoger o adoptar una mascota?
       </label>
       <br><br>
       <p>
            Las acogidas son fundamentales, algunas mascotas por diversos motivos pueden requerir temporalmente un hogar de paso.<br>
            Algunos son recién rescatados que no conocen lo que es vivir en una vivienda, que son mayores, o que acaban de salir de
             un problema veterinario y necesitan mayor confort. <br>
            Puedes ayudarles acogiendo o adoptando!
      </p> 
      <label> Contacta con Asociaciones y Usuarios <a href="busco.php"> Aquí.</a>
     
    </label>
       
      </div>
    </main>
</body>
</html>