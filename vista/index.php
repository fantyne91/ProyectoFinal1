<!DOCTYPE html> 
<html>
<body>
<?php 
include "nav.php";
include "../funciones/funciones_procesarForm.php";
?>   
 
        <div class='entrada'>       
        Busca tu mascota perdida, o colabora con asociaciones.          
            <p><b>A continuación verás imágenes de las mascotas que más tiempo llevan esperando familia en nuestra web</b></p>            
       </div>
           
         <?php if(empty($_COOKIE['datos'])){ ?>         
            
            <div class="formUsuario" name='formulario_index'>
                <p class="cuadro">Estás accediendo como visitante.<br> Para publicar crea una cuenta o haz <a class="link" href="publicar.php">LOGIN </a> </p>

            <form action="../funciones/funciones_procesarForm.php" method="post">
                <label>Crea un usuario:</label>
                <div class="input-group mb-2 bs-dark">
                    <input type="text" name="crearNombre" placeholder="nombre" class="form-control  "
                        aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                </div>
                <div class="input-group mb-2">
                    <input type="text" name="crearApellido" placeholder="apellido" class="form-control"
                        aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                </div>
                <div class="input-group mb-2">
                    <input required type="text" name="crearCorreo" placeholder="email*" class="form-control  "
                    aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                </div>
                <div class="input-group mb-2">
                    <input required type="text" name="crearPw" placeholder="contraseña*" class="form-control"
                        aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                </div>
                <!-- <div class="input-group mb-2">
                    <label>Eres una Asociación? </label>
                    <select id="protectora" name="protectora" onclick=>
                    <option id="protectora_si" value="si" onclick="datos_protectora()">Si</option>
                    <option selected value="no">No</option>
                    </select>      
                </div>          
                    <input type="text" name="nombreP" placeholder="asociación" class="form-control"
                        aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default"> -->
                    
                <button type="submit" name="submitCrear" class="btn btn-primary">Crear</button>
            </form>
        </div>  

        <div class="imagenes">    
             <?php  
                 }                 
                consultaPrimeros();
             ?>    
       </div>
            
   
 <script src="js/bootstrap.min.js">
    

//   // Obtener el formulario
//   const formulario_index = document.querySelector('#miFormulario');

//   // Agregar un evento "submit" al formulario
//   formulario.addEventListener('submit', function(evento) {
//     // Obtener el valor del campo "nombre_protectora"
//     const nombreProtectora = document.querySelector('#nombre_protectora').value;

//     // Verificar si el campo está vacío
//     if (nombreProtectora.trim() === '') {
//       // Evitar que se envíe el formulario
//       evento.preventDefault();
//       alert('El campo Nombre Protectora no puede estar vacío');
//     }
//   });

 </script>    
</body>

 <!--FOOTER BOOTSTRAP (en linea)-->
<footer id="footer" class="bg-body-tertiary"  >    
    <div class="container-fluid">    
        <a href="#"> Contacto </a>    
        <a href="#"> Somos</a>
    </div>   
</footer>

</html>
