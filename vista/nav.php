<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta http-equiv= "X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- incluimos bootsatrap en css y java-->
    <link rel="stylesheet" href="bootstrap/bootstrap.min.css" type="text/css" >
    <link rel="stylesheet" href="css.css" type="text/css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" /> 
    <script src="js/bootstrap.min.js"></script>
    <script src="vista.js"> </script>   
    
    <title>Mascotas Perdidas</title>   
</head>



<header>
  <div >
      <h1 class="titulo"> BUSCADOR</h1>
      <h1 style="border-radius:40px; background-color:white; font-family: 'Dancing Script'; margin:0px 70px "> de </h1>
      <h1 class="titulo"> MASCOTAS</h1>
  </div>    
      <img id="imgtitulo"  src="img/cabeceraProyecto.png" alt="perro perdido" width="auto";  >         
</header>

<!--Bootstrap y NAV-->
<body>
    <nav >
         <div class="navbar">
                <div class="desktop-nav">  
                    <a href="index.php" class='symbol-container'>
                         <span class="material-symbols-outlined">home</span>
                    </a>        
                    <a href="perfil.php" class='symbol-container'>
                         <span class="material-symbols-outlined">person</span>
                    </a>                          
                    <a href="busqueda_mascota.php">buscar</a>                   
                    <a href="publicar.php">publicar</a>                    
                    <a href="adoptar.php">adoptar</a>                   
                    <a href="servicios.php">servicios</a>
                    
                </div>

                <div class="mobile-nav">
                    <button class="toggle-btn">&#9776; Menú</button>
                        <div class="menu-items">
                        <a href="#index.php">Inicio</a>
                        <a href="busqueda_mascota.php">buscar</a>
                        <a href="publicar.php">publicar</a>
                        <a href="adoptar.php">adoptar</a>
                        <a href="servicios.php">servicios</a>
                        </div>
                </div>
          </div>
  </nav>
   
</body>
</html>