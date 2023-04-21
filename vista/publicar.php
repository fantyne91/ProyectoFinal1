<!DOCTYPE html>
<html lang="es">

<body>
<?php

include "nav.php";
include "../funciones/funciones_publicar.php";


      /**
      * *LLAMAMOS FUNCION LOGIN CON DATOS DEL POST
      * todo : acceder directamente  "publica"
      */               
if ($_SESSION['sesion']==false) {
    echo ("<div style='background-color:rgb(60, 108, 168,0.8)'> <a style='color:white' href='../vista/perfil.php'> Aquí puedes acceder a tu cuenta </a> </div> <br>. "); 
    unset($_SESSION['sesion']); 
}   
if (!isset($_COOKIE['datos'])) {        
       
        echo("<div>
        
        <form  class='formLoggin' action='publicar.php' method='post'>
    
        <br> <p> Para publicar haz Login o  <a href='index.php'>crea una cuenta: </a></p>
                    <label>Haz loggin:</label>
                    <div class='input-group mb-2'>                
                       <input type='text' name='correo' placeholder='introduce email:' class='form-control' aria-label='Sizing example input' aria-describedby='inputGroup-sizing-default'>
                    </div>                
                    <div class='input-group mb-2'>                 
                       <input type='password' name='pw' placeholder='introduce contraseña:' class='form-control' aria-label='Sizing example input' aria-describedby='inputGroup-sizing-default'>
                    </div>
                    <button type='submit'  name='submitLogin' class='btn btn-primary btn-sm'> Acceder</button>
             </form>          
         </div> ");     
        /**
         * ! header()
         */
        if (validaLogin()){
            setcookie("datos",$_POST['correo'],time()+2000, "/" );
            header("Location: publicar.php");
        }  
}    
    
 if(isset($_COOKIE['datos'])){
  
    echo " <div class='publicaAnimal'>

    <p class='avisoAnimal' > Si has encontrado un animal perdido, recuerda llevarlo a un <u>veterinario o Policia Local</u>, ya que pueden leerle el chip y encontrar a su dueño!</p>

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
               
                  <input type='text' name='color' placeholder='COLOR' class='form-control'
                      aria-label='Sizing example input' aria-describedby='inputGroup-sizing-default'>
               </div>          
               <div class='input-group mb-2'>
                  <input type='text' name='cc' placeholder='COMUNIDAD AUTONOMA' class='form-control'
                      aria-label='Sizing example input' aria-describedby='inputGroup-sizing-default'>
                  
                  <input type='text' name='ciudad' placeholder='CIUDAD' class='form-control'
                      aria-label='Sizing example input' aria-describedby='inputGroup-sizing-default'>
               </div>  
       
               <div class='mb-3'>  
                       <textarea class='form-control' name='infoA' maxlength='320' id='exampleFormControlTextarea1' rows='3' placeholder='DESCRIBE CUANDO Y DONDE LO ENCONTRASTE...'></textarea>
                       <button type='submit' id='submitAnimal' name='submitAnimal' >Guardar</button>
               </div>
             </form> 
        </div>";
} 
?>

<script>
 const btnAbrirModal = document.getElementById('submitAnimal');
// Obtener la ventana modal
const miVentanaModal = document.getElementById('miVentanaModal');

// Agregar un event listener al botón para abrir la ventana modal
btnAbrirModal.addEventListener('click', function() {
  miVentanaModal.style.display = 'block';
});

// const registrado=document.getElementById('creado');
// const submitLogin=document.getElementByName('submitLogin');

// submitLogin.addEventListener('click',function(){
//     registrado.style.display = 'none';
// })



 </script>
      
</body>
</html>