<!DOCTYPE html>
<html lang="en">
<head>
  
</head>
<body>
    <?php
    include "nav.php";
    include "../funciones/funciones_procesarForm.php";
   
    try{
        if( $_GET['error_usuario'] ==1){            
            echo ("<div class='error'>Ese correo ya está registrado</div>");           
       
        }     
        if( $_GET['error_usuario'] ==2){            
            echo ("<div class='error'>Esa protectora ya está registrada</div>");          
       
        }   
        if( $_GET['error_usuario'] ==3){            
            echo ("<div class='error'>El usuario se ha creado correctamente, pero esa asociación ya existe y tiene un email asociado.</div>
            <a href='perfil.php>'");            
       
        }         
       
    }catch(exception $e){
      echo"ha ocurrido un error";  
    }
    
        
    
      // foreach($_SESSION as $key =>$valor)
        // {
        // echo "variable : $key Valor: $valor <br>";
        // }
    ?>
    <br>
    <a href="index.php" class="btn btn-primary" style="width:50px">volver</a>
</body>
</html>
