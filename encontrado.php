<!DOCTYPE html>
<html lang="es">

<body>
<?php
include "funciones.php";
include "vista/nav.php";
include "animal.php";
      /**
      * *LLAMAMOS FUNCION LOGIN CON DATOS DEL POST
      * todo : acceder directamente  "publica"
      */               
   
if (!isset($_COOKIE['datos'])) {        
       
        echo("<div>
        
        <form  class='formLoggin' action='encontrado.php' method='post'>
    
        <br> <p> Para publicar necesitamos que hagas Loggin o  <a href='index.php'>crees una cuenta: </a></p>
                    <label>Haz loggin:</label>
                    <div class='input-group mb-2'>                
                       <input type='text' name='correo' placeholder='Introduce Email:' class='form-control' aria-label='Sizing example input' aria-describedby='inputGroup-sizing-default'>
                    </div>                
                    <div class='input-group mb-2'>                 
                       <input type='password' name='pw' placeholder='Introduce contraseña:' class='form-control' aria-label='Sizing example input' aria-describedby='inputGroup-sizing-default'>
                    </div>
                    <button type='submit'  name='submitLoggin' class='btn btn-primary btn-sm'> Acceder</button>
             </form>          
         </div> ");     
        /**
         * ! header()
         */
        if (validaLoggin()){
            setcookie("datos",$_POST['correo'],time()+2000, "/" );
            header("Location: encontrado.php");
        }       

}    
    
 if(isset($_COOKIE['datos'])){
  
    echo " <div class='publicaAnimal'>

    <p class='avisoAnimal' > Si has encontrado un animal perdido, recuerda pasar por cualquier <u>veterinario o Policia Local</u>, ya que pueden leerle el chip y encontrar a su dueño!</p>

    <form class='formAnimal' action='#' method='POST' enctype='multipart/form-data' > 
    
            <form class='formAnimal' action='#' method='POST' enctype='multipart/form-data'>
                   <p><b> Introduce los datos que puedas del animal encontrado:</b></p>
              
               <div class='input-group mb-2' style=''>
                  <label>TIPO  
                  <select name='tipo'> </label>
                  <option selected value='perro'>Perro</option>
                  <option  value='dato'>Gato</option>
                  <option  value='otros'>Otros</option>
                  </select>    
             
                  <label>TAMAÑO: 
                  <select name='tamano'> </label>
                  <option  value='pequeno'>Pequeño</option>
                  <option selected value='mediano'>Mediano</option>
                  <option  value='grande'>Grande</option>                    
                  </select>    
                  
                  <label> Inserta imagen <input type='file' name='insertarImagen'> </label>
                  
               </div>
               
               <div class='input-group mb-2 bs-dark'>
                   <input type='text' name='raza' placeholder='RAZA' class='form-control'
                      aria-label='Sizing example input' aria-describedby='inputGroup-sizing-default'>
               </div>

               <div class='input-group mb-2'>
                  <input type='text' name='color' placeholder='COLOR' class='form-control'
                      aria-label='Sizing example input' aria-describedby='inputGroup-sizing-default'>
               </div>          
               <div class='input-group mb-2'>
                  <input type='text' name='cc' placeholder='COMUNIDAD AUTONOMA' class='form-control'
                      aria-label='Sizing example input' aria-describedby='inputGroup-sizing-default'>
               </div>  
               <div class='input-group mb-2'>
                  <input type='text' name='ciudad' placeholder='CIUDAD' class='form-control'
                      aria-label='Sizing example input' aria-describedby='inputGroup-sizing-default'>
               </div>  
       
               <div class='mb-3'>  
                       <textarea class='form-control' name='infoA' maxlength='320' id='exampleFormControlTextarea1' rows='3' placeholder='DESCRIBE CUANDO Y DONDE LO ENCONTRASTE...'></textarea>
                       <button type='submit' id='submitAnimal' name='submitAnimal' >Guardar</button>
               </div>
             </form> 
        </div>";

             if (isset($_REQUEST['submitAnimal'])){

            $nuevo= new Animal($_POST['tipo'],$_POST['tamano'],$_POST['raza'],$_POST['color'],$_POST['cc'],$_POST['ciudad'],$_POST['infoA'],$_COOKIE['datos']);           
            guardarAnimal($_POST['tipo'],$_POST['tamano'],$_POST['raza'],$_POST['color'],$_POST['cc'],$_POST['ciudad'],$_POST['infoA'],$_COOKIE["datos"]);
            


            if ($nuevo){
            echo   "  <div id='miVentanaModal' class='ventana-modal'>
            <div class='contenido-ventana'>
              <p>Has publicado un animal. <br> Accede a tu <a href=perfil.php>perfil   </p>              
            </div>
            </div>";      
}
}}  
 
?>

<script>
 const btnAbrirModal = document.getElementById('submitAnimal');

// Obtener el botón para cerrar la ventana modal
const btnCerrarModal = document.getElementById('btnCerrarModal');

// Obtener la ventana modal
const miVentanaModal = document.getElementById('miVentanaModal');

// Agregar un event listener al botón para abrir la ventana modal
btnAbrirModal.addEventListener('click', function() {
  miVentanaModal.style.display = 'block';
});



 </script>
      
</body>
</html>