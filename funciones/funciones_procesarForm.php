

<?php

include "consultas_usuario.php";


/**
 * PAGINA PHP INTERMEDIA FORMULARIOS, EVITA DUPLICIDAD DATOS ENVIADOS.
 */       
    session_start();

   

if ($_SERVER["REQUEST_METHOD"] == "POST") {     
    /**  Guardar en base de datos con funcion Crear Usuario   */    
    if (isset($_POST['submitCrear'])) {       
        $_SESSION["sesion"] = true;

        $nombre = $_POST['crearNombre'];
        $apellido = $_POST['crearApellido'];
        $correo= $_POST['crearCorreo'];
        $pw = $_POST['crearPw'];
        $protectora = null;   
        $nombreP= NULL;

        
         try{    
            //si se ejecuta correctamente funcion crear usuario, se guarda sesion y envia a publicar.
            if (consulta_crearUsuario($nombre,$apellido,$correo,$pw)){  
                
                      
                setcookie("datos",$correo,time()+2000, "/" ); 
                $persona= new Persona($nombre,$apellido,$correo,$pw,$protectora,$nombreP);
                $_SESSION["sesion"] = $persona;   
                if (consulta_login($correo, $pw)){
                    
                    header("Location: ../vista/perfil.php");
                    exit();
                }                        
            }
            
        }catch(Exception $e){            
            header("Location: ../vista/errores_form.php");  
        }
    
    }
    /** SI SE PUBLICA UN ANIMAL*/
    if (isset($_REQUEST['submitAnimal'])){
    
            if(consulta_guardarAnimal($_POST['tipo'],$_POST['tamano'],$_POST['raza'],$_POST['color'],$_POST['cc'],$_POST['ciudad'],$_POST['infoA'],$_COOKIE["datos"])){
                $nuevo= new Animal($_POST['tipo'],$_POST['tamano'],$_POST['raza'],$_POST['color'],$_POST['cc'],$_POST['ciudad'],$_POST['infoA'],$_COOKIE['datos']);           
                
                echo   "  <div id='miVentanaModal' class='ventana-modal'>
                <div class='contenido-ventana'>
                  <p>Has publicado un animal. <br> Accede a tu <a href=perfil.php> perfil   </p>              
                </div>
                </div>";   
            }   
    }     
    
    if(isset($_POST['submitLogin'])){    
        
         if(consulta_login($_POST['correo'],$_POST['pw'])){    
         setcookie("datos",$_POST['correo'],time()+2000, "/" );
         header("Location: ../vista/perfil.php");  
         }
           
    } 
    
}
?>
