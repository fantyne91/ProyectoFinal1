<!DOCTYPE html> 
<html>
<head>
       <title>Pet Finder</title>    
</head>

<body>
<?php 

include "nav.php";
include "../funciones/procesar_formularios.php";

session_start();

?>   
 
        <div class='entrada'>       
        Busca tu mascota perdida, o colabora con asociaciones.          
            <p><b>A continuación verás imágenes de las mascotas que más tiempo llevan esperando familia en nuestra web</b></p>            
       </div>

       <main>       
           
         <?php if(empty($_COOKIE['datos'])){ ?>         
            
            <div class="formUsuario">
                <p class="cuadro">Estás accediendo como visitante.<br> Para publicar crea una cuenta o haz <a class="link" href="publicar.php">LOGIN </a> </p>

            <form action="../funciones/procesar_formularios.php" method="post">
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
                    <input require type="text" name="crearCorreo" placeholder="email" class="form-control  "
                    aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                </div>
                <div class="input-group mb-2">
                    <input type="text" name="crearPw" placeholder="contraseña" class="form-control"
                        aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                </div>
                <div class="input-group mb-2">
                    <label>Eres una Asociación? </label>
                    <select name="protectora">
                    <option value="si">Si</option>
                    <option selected value="no">No</option>
                    </select>      
                </div>          
                    <input type="text" name="nombreP" placeholder="nombre asociación" class="form-control"
                        aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                
                <button type="submit" name="submitCrear" class="btn btn-primary">Crear Usuario</button>
            </form>
        </div>  

        <div class="imagenes">    
             <?php  
                 } 
                
                consultaPrimeros();
             ?>    
       </div>
            
    </main>
 <script src="js/bootstrap.min.js"></script>    
</body>

 <!--FOOTER BOOTSTRAP (en linea)-->
<footer id="footer" class="bg-body-tertiary"  >    
    <div class="container-fluid">    
        <a href="#"> Contacto </a>    
        <a href="#"> Somos</a>
    </div>   
</footer>




</html>
