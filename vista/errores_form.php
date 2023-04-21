<!DOCTYPE html>
<html lang="en">
<head>
  
</head>
<body>
    <?php
    include "nav.php";
    include "../funciones/procesar_formularios.php";
    
    try{
        if( $_SESSION["sesion"]==="error" ){
            echo ("<div class='error'>Ese usuario ya existe</div>");
       
        }else if($_SESSION['sesion']===true){
            echo ("<div class='error'>Se requiere un correo y contraseña</div>");
            
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
    <a href="index.php" class="btn btn-primary">volver</a>
</body>
</html>