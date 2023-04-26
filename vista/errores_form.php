<!DOCTYPE html>
<html lang="en">
<head>
  
</head>
<body>
    <?php
    include "nav.php";
    include "../funciones/funciones_procesarForm.php";
   
        if( $_GET['error_usuario'] ==1){ 

            echo ("<div class='error'>Ese correo ya está registrado<br><br>
            <a href='index.php' class='btn btn-primary' style='width:50px'>volver</a></div> ");  

        }else if( $_GET['error_usuario'] ==2){  

            echo ("<div class='error'>Esa protectora ya está registrada<br><br>
            <a href='perfil.php' class='btn btn-primary' style='width:50px'>volver</a></div>");   

        }else if( $_GET['error_usuario'] ==3){   

            echo ("<div class='error'>El usuario se ha creado correctamente, pero esa asociación ya existe y tiene un email asociado.<br><br>
            <a href='perfil.php' class='btn btn-primary' style='width:50px'>perfil</a></div>'");       
        }      
    
    ?>
    
   
   
</body>
</html>
