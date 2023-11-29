<!DOCTYPE html> 
<html>
<body>

<?php 
include "nav.php";
include "../funciones/funciones_procesarForm.php";

?>   
  <!--INTERFAZ  PAGINA PRINCIPAL   -->
 <div class='entrada'>       
        <h1>En buscador de mascotas queremos que encontrar una mascota, sea una tarea fácil.</h1><br>
        <h3><u>nuestra filosofía:</u></h3>
     <div class= 'filosofia'> 
     <ul> <h4>
        
            <li>Somos conscientes de que muchos animalitos se pierden de su hogar y no existe una WEB con <strong>DATOS CENTRALIZADOS</strong> donde buscar,<br> AQUÍ LOS TIENES TODOS! <br><br>
            Queremos que si buscas a tu mascota perdida o quieres adoptar, puedas <strong>FILTRAR Y NAVEGAR</strong> sin perder horas y horas buscando por asociaciones o grupos, el tiempo es oro en este caso ❤️</li><br>
            
            <li>Queremos que todas las <strong>PERSONAS Y ASOCIACIONES</strong> tengan las mismas oportunidades. <br><br> </li>
            <li>Queremos ayudar con el <strong>TRANSPORTE DE ANIMALES</strong>, sabemos que es un tema complicado. <br><br></li> 
            <li>Para nosotros lo más importante  es la seguridad de los perretes, por lo que para determinadas acciones requeriremos que estés registrado.</li> 
        
        </h4></ul> 
    </div><br><br>
     
 </div>       
     <main>   
                    <!-- si no ha hecho login podrá ver el formulario crear usuario  -->
                    <?php if(empty($_COOKIE['datos'])){ ?>        

                    <!-- FORMULARIO CREAR USUARIO DISPLAY NONE  -->       
                     <div>    
                         <form action='formularios.php' method='get'>                           
                             <button name='mostrar_form' value='1' class='btn btn-primary'>CREAR USUARIO</button>
                         </form>
                     </div><br>


         <?php   } ?>  
         <!-- MOSTRAR IMAGENES   -->
         <h4><strong>A continuación verás imágenes de las mascotas que más tiempo llevan sin familia en nuestra web:</strong></h4> 
        <div class="imagenes">  
         
             <?php   consultaPrimeros();       ?>    
        </div>
            
     </main>   
     

 <script >        
   /**FUNCION validar  EMAIL ONBLUR */     
 
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
