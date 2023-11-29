<!DOCTYPE html>
<html lang="es">

<body>
<?php
include "nav.php";
include "../funciones/funciones_procesarForm.php";
?>
<p class='linea' > Si has encontrado un animal perdido, recuerda llevarlo a un <u>veterinario o Policia Local</u>, ya que pueden leerle el chip y encontrar a su familia </p>
       
<!-- SI SE HA HECHO LOGIN Y EXISTE COOKIE DATOS -->
<main>     
<?php if(isset($_COOKIE['datos'])){  ?>
    
    <div class='publicaAnimal'>    

    <form class='form' action='#' method='POST' enctype='multipart/form-data' >     
            
    <label>Introduce los datos que puedas aportar del animal encontrado:</label>
              
               <div>
               <label>tipo: </label>
                  <select name='tipo'> 
                  <option selected value='perro'>Perro</option>
                  <option  value='gato'>Gato</option>
                  <option  value='otros'>Otros</option>
                  </select>    
             
                  <label> tamaño: </label>
                  <select name='tamano'> 
                  <option  value='pequeno'>Pequeño</option>
                  <option selected value='mediano'>Mediano</option>
                  <option  value='grande'>Grande</option>                    
                  </select>    
                </div>
                  <label>Inserta una foto: </label>
                  <input type='file' class='insertarImagen' name='insertarImagen'> <br>
                  <br>
               
               <div>
                   <input type='text' name='raza' placeholder='raza' class='form-control'
                      aria-label='Sizing example input' aria-describedby='inputGroup-sizing-default'>
               
                  <input required type='text' name='color' placeholder='color*' class='form-control'
                      aria-label='Sizing example input' aria-describedby='inputGroup-sizing-default'>
             
                  <input type='text' name='cc' placeholder='comunidad autonoma' class='form-control'
                      aria-label='Sizing example input' aria-describedby='inputGroup-sizing-default'>
                  
                  <input required type='text' name='ciudad' placeholder='ciudad*' class='form-control'
                      aria-label='Sizing example input' aria-describedby='inputGroup-sizing-default'>
               </div> 
               <div class='mb-3'>  
                       <textarea class='form-control' name='infoA' maxlength='320' id='exampleFormControlTextarea1' rows='3' placeholder='Describe el animal, cuando y donde lo encontraste...'></textarea>
                       <button type='submit' class='btn btn-primary' id='submitAnimal' name='submitAnimal'onclick="ventana_modal()" >Guardar</button>
               </div>
             </form> 
        </div>
    </main><!-- SI NO SE HA HECHO LOGIN  -->
<?php  }else{ ?>
    <div>        
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
               </div>  <br>
               
   
<?php  }  ?>

      
</body>
</html>