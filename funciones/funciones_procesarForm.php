

<?php

include "consultas_usuario.php";
include "persona.php";

/**
 * PAGINA PHP INTERMEDIA FORMULARIOS, EVITA DUPLICIDAD DATOS ENVIADOS.
 * todo://Class persona tiene metodos: crear usuario, login..etc. cambiar todo a clases. al hacer login establece clase y usa atributos, no SESION?
    //error publicar pq sesion nombrep se establece solo al ingresar la asociacion, luego se pierde.
 */       
    session_start();

   

if ($_SERVER["REQUEST_METHOD"] == "POST") {    
   
    /**  Guardar en base de datos con funcion Crear Usuario 
     * todo: error al poner aso desde index repetido?  */    
    if (isset($_POST['submitCrear'])) { 
       
        $nombre = $_POST['crearNombre'];
        $apellido = $_POST['crearApellido'];
        $correo= $_POST['crearCorreo'];
        $pw = $_POST['crearPw']; 
       
         try{  
            consulta_crearUsuario($nombre,$apellido,$correo,$pw); 
          
                if (consulta_login($correo, $pw)){
                    setcookie("datos",$correo,time()+2000, "/" );   
                                     
                }  
                
               // SI NOMBREP NO ESTA VACIA ENTONCES SE LLAMA A LA FUNCION SET_PROTECTORA, la cual esta establecida como UNIQUE en bd
                   
                    if (!empty($_POST['crearNombreP'])) {
                        
                        $nombreP=$_POST['crearNombreP'];
                        $persona=$_SESSION['sesion'];
                        $persona->set_protectora($nombreP);
                        
                    }
                    header("Location: ../vista/perfil.php"); 
                    exit();
        }catch(Exception $e){   
           //si   
           header("Location: ../vista/errores_form.php?error_usuario=1");  
        }    
    }
    
    /** SI SE PUBLICA UN ANIMAL*/
    if (isset($_REQUEST['submitAnimal'])){

        $tipo = $_POST['tipo'];
        $tamano = $_POST['tamano'];
        $raza= $_POST['raza'];
        $color = $_POST['color'];
        $cc = $_POST['cc'];   
        $ciudad= $_POST['ciudad'];      
        $infoA = $_POST['infoA'];   
        $persona= $_SESSION['sesion'];
        $nombreP=$persona->nombreP; //
        $correo=$_COOKIE["datos"];

            if(consulta_guardarAnimal($tipo,$tamano,$raza,$color,$cc,$ciudad,$infoA,$correo,$nombreP)){
                $nuevo= new Animal($tipo,$tamano,$raza,$color,$cc,$ciudad,$infoA,$correo,$nombreP);           
                
                echo   "  <div id='miVentanaModal' class='ventana-modal'>
                <div class='contenido-ventana'>
                  <p>Has publicado un animal. <br> Accede a tu <a href=perfil.php> perfil   </p>              
                </div>
                </div>";   
            }   
    }     
    
    if(isset($_POST['submitLogin'])){    
        
         if(consulta_login($_POST['correo'],$_POST['pw'])){   
            // unset($_SESSION['nombreP']);
            setcookie("datos",$_POST['correo'],time()+2000, "/" );
            header("Location: ../vista/perfil.php");  
         }
           
    } 
    /** ACTUALIZAR PROTECTORA ANIMAL */
    if(isset($_POST['submit_asociacion'])){    
        $nombreP=$_POST['nombreP'] ;
        $persona=$_SESSION['sesion'];

        try{
            if( $persona->set_protectora($nombreP)){    
                header("Location: ../vista/perfil.php"); 
            }
        } catch(Exception $e){
            header("Location: ../vista/errores_form.php?error_usuario=2"); 
        }        
    }
   
    
    
}
?>
