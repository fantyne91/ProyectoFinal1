

<?php

include "consultas.php";

  /**
    * * Guardar la base de datos con funcion Crear Usuario  
    */       
   
    $_SESSION["sesion"]= true;
if ($_SERVER["REQUEST_METHOD"] == "POST") {   
   
    if (isset($_POST['submitCrear'])) {       
       
        $nombre = $_POST['crearNombre'];
        $apellido = $_POST['crearApellido'];
        $correo= $_POST['crearCorreo'];
        $pw = $_POST['crearPw'];
        $protectora = $_POST['protectora'];   
        $nombreP = $_POST['nombreP']; 
         try{
    
            if($correo==null || $pw==null){               
                
                $_SESSION["sesion"] = true;                
                header("Location: ../vista/errores_form.php");  

            }else if (consulta_crearUsuario($nombre,$apellido,$correo,$pw,$protectora,$nombreP)){
               
                $persona=new Persona($nombre,$apellido,$correo,$pw,$protectora,$nombreP);

                $_SESSION["sesion"] = false;        
                header("Location: ../vista/publicar.php");    
                exit();                           
            }
        }catch(Exception $e){

            $_SESSION["sesion"] = "error"; 
                header("Location: ../vista/errores_form.php");  
             }
         }
           
 }
  

?>
