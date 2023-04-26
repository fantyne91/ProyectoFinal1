<!DOCTYPE html>
<html lang="es">

<body>

<?php
include "nav.php";
include "../funciones/funciones_procesarForm.php";
$persona=$_SESSION['sesion']; 
$id="";

if(!empty($_COOKIE['datos'])){ ?> 
   
<div style='background-color:rgb(60, 108, 168,0.8);color:white'>el método de contacto con los demás usuarios será el correo electrónico proporcionado, recuerda revisarlo</div><br>
<main> 
      <div class='entrada'>
        <h1>tus datos:</h1> 
          <?php  if ($persona->datosUsuario()){    ?>
      </div>    <br>
            <div class='entrada_perfil' >
               
               <button  onclick="cerrar_sesion()" name='cerrar_sesion' class='btn btn-primary'>Cerrar sesión</button><br>
               <button name='mostrar_form' onclick="mostrar_form()" class='btn btn-primary'>Cambiar protectora</button>
               <div  id="formulario" class="input-group mb-2" style="display: none">
              <!-- HTML: formulario oculto por defecto -->
                    <form  name="formulario" action= '#' method='post' style="display:flex;flex-direction:row;">                 
                        <input type="text" name="nombreP" placeholder="cambiar protectora" class="form-control"
                        aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                        <button type="submit" name="submit_asociacion" class="btn btn-primary">añadir</button>                       
                    </form>          
                </div>  
               
          </div><br>         
</main> 
      <br>
      <h1> tus mascotas publicadas:</h1>  
          <div class='imagenes'>                    
              <?php consulta_usuarioAnimal($_COOKIE['datos']); 
           
           if (isset($_POST['borrarAnimal'])){
            $id=$_POST['id'];
            echo " <div id='miVentanaModal' class='ventana-modal'>
            <div class='contenido-ventana'>
                <p>Estás seguro de eliminar el animal?</p>
                 <form method='POST' action='#'>
                     <input type='hidden' name='id' value='".$id."'>
                     <button type='submit' name='confirmaBorrar'class='btn btn-primary'style='width:50px'>Si </button>                   
                 </form> <br>   <a href=perfil.php> Cancelar   </a> 
                 </div>
            </div>";
          }
          if (isset($_POST['editarAnimal'])){
            $id=$_POST['id'];
            echo   " <div id='miVentanaModal' class='ventana-modal'>
                       <div class='contenido-ventana'>
                           <form method='POST' action='#'>
                                <input type='hidden' name='id' value='".$id."'>
                                <textarea class='form-control' name='info'></textarea><br>
                                <button type='submit' name='editar'class='btn btn-primary'>editar </button>
                            </form><a href=perfil.php> Cancelar   </a>  </div>
                       </div>";
          } }
             
           ?>       
           
              
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
               
  }var_dump($_SESSION['sesion']);
  ?>
  <script>
    
  </script>

  </body>
  </html>
      
