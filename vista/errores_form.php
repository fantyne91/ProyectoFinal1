<!DOCTYPE html>
<html lang="en">
<head>
  
</head>
<body>
    <?php
    include "nav.php";
    include "../funciones/funciones_procesarForm.php";
   
    try{
        if( $_SESSION["sesion"]==true){            
            echo ("<div class='error'>Ese correo ya está registrado</div>");
            
       
        }       
        // foreach($_SESSION as $key =>$valor)
        // {
        // echo "variable : $key Valor: $valor <br>";
        // }
    }catch(exception $e){
      echo"ha ocurrido un error";  
    }
    
        
    
     
    ?>
    <br>
    <a href="index.php" class="btn btn-primary" style="width:50px">volver</a>
</body>
</html>