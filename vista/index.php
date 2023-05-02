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
        <main>   
         <?php if(empty($_COOKIE['datos'])){ ?>        

        <!-- FORMULARIO CREAR USUARIO DISPLAY NONE HASTA QUE SE PRESIONA BOTON. -->
         <div class="formUsuario" >
            
                <div>                   
                    <button name='mostrar_form' onclick="mostrar_crearUsuario()" class='btn btn-primary'>CREAR USUARIO</button>
                </div><br>
            <form id='formulario_index'   action="#" method="post" style="display:none">
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
                    <input required type="text" id="correo" onblur="validarEmail()" name="crearCorreo" placeholder="email*" class="form-control  "
                    aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" >
                </div>
                <div class="input-group mb-2">
                    <input required type='password' name="crearPw" placeholder="contraseña*" class="form-control"
                        aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                </div>
                <label>eres una protectora?</label>
                <div class="input-group mb-2">
                   <input type="text" name="crearNombreP" placeholder="nombre protectora" class="form-control"
                        aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                </div>                   
                <button type="submit" name="submitCrear" class="btn btn-primary">Crear</button>
               
            </form>
            <div id="error-correo" style="color:red;"></div>
        </div>  
     </div>
 <?php   }     ?>  
        <div class="imagenes">    
             <?php    consultaPrimeros();   ?>    
       </div>
            
     </main>   
     
 <script > 
        
   /**FUNCION validar  EMAIL ONBLUR */     
   function validarEmail(){
    var correo=document.getElementById("correo");
    var errorCorreo = document.getElementById("error-correo");
        if (validar_expresion(correo.value)) {
                errorCorreo.innerHTML = "";
                return true;  
        } else {
                errorCorreo.innerHTML = "Por favor ingresa un correo válido";
                return false; 
        }
} 
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
