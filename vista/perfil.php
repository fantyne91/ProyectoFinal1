<!DOCTYPE html>
<html lang="es">

<body>

<?php
include "nav.php";
include "../funciones/funciones_procesarForm.php";

?>

<?php if(!empty($_COOKIE['datos'])){ ?> 
   
<div style='background-color:rgb(60, 108, 168,0.8);color:white'>el método de contacto con los demás usuarios será el correo electrónico proporcionado, recuerda revisarlo</div><br>
<main> 
      <div class='entrada'>
        <h1>tus datos:</h1> 
          <?php  if (datosUsuario()){    ?>
            <button id="cerrar_sesion" name='cerrar_sesion'>Cerrar sesión</button>
      </div>
      <div class="input-group mb-2">
                    <form action= '#' method='post'><label>Eres una Asociación? </label>
                    
                      
                    <input type="text" name="nombreP" placeholder="asociación" class="form-control"
                        aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                    <button type="submit" name="submit_asociacion" class="btn btn-primary">Crear</button>
          </form>
                    </div>  
        
</main> 
      <br>
      <h1> tus mascotas publicadas:</h1>  
          <div class='imagenes'>                    
              <?php consulta_usuarioAnimal($_COOKIE['datos']); }?>           
          </div>

<!-- SI NO TIENE COOKIE MUESTRA LOGIN: var_dump( $_SESSION['sesion']);  -->
  <?php    }else{ 

      echo" <div>        
              <form  class='formLoggin' action='#' method='post'>     <br>
               <p> Para publicar <a href='index.php'>crea una cuenta</a> o  haz Login:</p>
                          <label>Haz loggin:</label>
                          <div class='input-group mb-2'>                
                             <input required type='text' name='correo' placeholder='introduce email:' class='form-control' aria-label='Sizing example input' aria-describedby='inputGroup-sizing-default'>
                          </div>                
                          <div class='input-group mb-2'>                 
                             <input required type='password' name='pw' placeholder='introduce contraseña:' class='form-control' aria-label='Sizing example input' aria-describedby='inputGroup-sizing-default'>
                          </div>
                          <button type='submit'  name='submitLogin' class='btn btn-primary btn-sm'> Acceder</button>
                </form>          
               </div> ";     
  }
  ?>
  <script>
    var cerrarSesion = document.getElementById("cerrar_sesion");

// Agregar un evento de clic al botón
cerrarSesion.addEventListener("click", function() {
  // Eliminar la variable de sesión o la cookie que indica que el usuario ha iniciado sesión
  // redirigir a la página de inicio de sesión o a la página principal
  window.location.href = "../funciones/cerrar_sesion.php";
});
  </script>
  </body>
  </html>
      
