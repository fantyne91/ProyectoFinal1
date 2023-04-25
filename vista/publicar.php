<!DOCTYPE html>
<html lang="es">

<body>
<?php
include "nav.php";
include "../funciones/funciones_procesarForm.php";
?>
      <!-- /**
      * *LLAMAMOS FUNCION LOGIN CON DATOS DEL POST
      * todo : acceder directamente  "publica"
      */     -->

<main>     
<?php if(isset($_COOKIE['datos'])){  ?>
  
    <div class='publicaAnimal'>

    <p class='avisoAnimal' > Si has encontrado un animal perdido, recuerda llevarlo a un <u>veterinario o Policia Local</u>, ya que pueden leerle el chip y encontrar a su familia!</p>

    <form class='formAnimal' action='#' method='POST' enctype='multipart/form-data' >     
            
          <p><b> Introduce los datos que puedas del animal encontrado:</b></p>
              
               <div  style='justify-content:center' class='input-group mb-2' style=''>
                  <label>TIPO: 
                  <select name='tipo'> </label>
                  <option selected value='perro'>Perro</option>
                  <option  value='gato'>Gato</option>
                  <option  value='otros'>Otros</option>
                  </select>    
             
                  <label>TAMAÑO: 
                  <select name='tamano'> </label>
                  <option  value='pequeno'>Pequeño</option>
                  <option selected value='mediano'>Mediano</option>
                  <option  value='grande'>Grande</option>                    
                  </select>    
                  
                  <input type='file' name='insertarImagen'> 
               </div>
               
               <div class='input-group mb-2 bs-dark'>
                   <input type='text' name='raza' placeholder='RAZA' class='form-control'
                      aria-label='Sizing example input' aria-describedby='inputGroup-sizing-default'>
               
                  <input required type='text' name='color' placeholder='COLOR*' class='form-control'
                      aria-label='Sizing example input' aria-describedby='inputGroup-sizing-default'>
               </div>          
               <div class='input-group mb-2'>
                  <input type='text' name='cc' placeholder='COMUNIDAD AUTONOMA' class='form-control'
                      aria-label='Sizing example input' aria-describedby='inputGroup-sizing-default'>
                  
                  <input required type='text' name='ciudad' placeholder='CIUDAD*' class='form-control'
                      aria-label='Sizing example input' aria-describedby='inputGroup-sizing-default'>
               </div> 
               <div class='mb-3'>  
                       <textarea class='form-control' name='infoA' maxlength='320' id='exampleFormControlTextarea1' rows='3' placeholder='DESCRIBE CUANDO Y DONDE LO ENCONTRASTE...'></textarea>
                       <button type='submit' id='submitAnimal' name='submitAnimal'onclick="ventana_modal()" >Guardar</button>
               </div>
             </form> 
        </div>
    </main>
<?php  }else{ ?>
    <div class="cuadro"> Estás accediendo como visitante.<br> Para publicar <a class="link" href ="index.php">crea una cuenta</a> o <a class="link" href="perfil.php"> accede a tu perfil. </a> </div> <br>
   
<?php  }  ?>

      
</body>
</html>