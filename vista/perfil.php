<!DOCTYPE html>
<html lang="es">

<body>
 <!-- PAGINA  PERFIL, se muestran datos del usuario -->
<?php
include "nav.php";
include "../funciones/funciones_procesarForm.php";


// SI SE HA HECHO LOGIN:
if(!empty($_COOKIE['datos'])){
  $persona=$_SESSION['sesion']; 
  $id="";  ?> 

<div class='linea'>
<h1>COMO FUNCIONA:</h1><br>
        <li>Si encuentras un animal y tras publicarlo encuentras a alguien que pueda hacerse cargo, debes asegurarte de que va a estar en las mejores condiciones, <u>requiere un DNI o identificación.</u></li>
        <li>Dispones de 5 anuncios gratuitos al año, si eres parte de una protectora asegurate de crear un perfil especifico.</li>
        <li>el método de contacto con los demás usuarios será el correo electrónico proporcionado, recuerda revisarlo</li>
</div><br>
<main> 
   
   <!-- Se muestran datos y botones cambiar protectora y cerrar serion. -->
      <div class='entrada'>
      
        <h1>tus datos:</h1> 
          <?php  if ($persona->datosUsuario()){    ?>   <br>
       
      <div class='entrada_perfil' >
               <form method='get' action='formularios.php' >              
               <button name='mostrar_form' value='2' class='btn btn-primary'>Modificar protectora</button><br>  
                <!-- HTML: formulario oculto por defecto -->
               </form> <br>
               <button  onclick="cerrar_sesion()" name='cerrar_sesion' class='btn btn-primary'>Cerrar sesión</button><br>               
       </div>    
</main> 
      <br>
       <!-- mascotas publicadas  -->
      <h1> tus mascotas publicadas:</h1>  
          <div class='imagenes'>                    
              <?php consulta_usuarioAnimal($_COOKIE['datos']); 

           //TODO: ventanas modal de editar y borrar animal, iconos, editar full form
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
              <form  class='form' action='#' method='post'>     <br>
               
                          <label> INICIA SESIÓN:</label>
                          <div class='input-group mb-2'>                
                             <input required type='text' name='correo' placeholder='introduce email:' class='form-control' aria-label='Sizing example input' aria-describedby='inputGroup-sizing-default'>
                          </div>                
                          <div class='input-group mb-2'>                 
                             <input required type='password' name='pw' placeholder='introduce contraseña:' class='form-control' aria-label='Sizing example input' aria-describedby='inputGroup-sizing-default'>
                          </div>
                          <label> o <a href='index.php'>crea una cuenta</a></label><br>
                          <div><button type='submit'  name='submitLogin' class='btn btn-primary btn-sm'> Acceder</button>
                          </div>  
                       
                </form>          
               </div> ";     
               
  }
  ?>
 
  </body>
  </html>
      
