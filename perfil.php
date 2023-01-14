<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <!-- incluimos bootsatrap en css y java-->
     <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" >
     <link rel="stylesheet" href="css.css" type="text/css">
     <title>Document</title>
</head>

<body>
    <nav class="navbar bg-body-tertiary">
        <div class="container-fluid">
          <a class="navbar-brand" href="index.php">
            <img src="img/puppy1.jpg" alt="Logo" width="40" height="40" class="d-inline-block align-text-top">
           
                <li><a href="busco.html" id="busco"> Busco a mi mascota </a>  </li>      
                <li><a href="encontrado.php" id="encontrado"> He encontrado una mascota </a> </li> 
                <li><a href="ayudar.html" id="ayudar">Quiero colaborar acogiendo </a> </li> 
          
          </a>
        </div>
    </nav>
    <main>   
      <?php include "crearUsuario.php";

      if (isset($_COOKIE["datos"])=="registrado"){

     // <!--llamamos funcion datos(crearUsuario) con los 2 parametros del isset login anterior
       //   ENVIAMOS A PERFIL -->
     echo(" <p> Aquí podras modificar tus datos para que puedan contactarte  
      </p> <br>      
     
      <form name='formInfo' action='#' method='POST'>
          <p>Escribe los datos que consideres sobre ti o tu  tu organización.</p>
                
          <div class='mb-3'>
               <label for='exampleFormControlTextarea1' class='form-label'>Tu info:</label>
              <textarea class='form-control' name='info' maxlength='320' id='exampleFormControlTextarea1' rows='3'></textarea>
              <button type='submit' name='submitInfo' >Guardar</button>
          </div>
      </form>");
      getDatos();
      }else{
        echo("No tienes acceso, haz loggin de nuevo");
      }
      ?>
</body>
</html>