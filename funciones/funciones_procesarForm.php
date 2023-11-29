

<?php

include "../modelo/consultas_usuario.php";
include "usuario.php";


/**
 * PAGINA PHP INTERMEDIA FORMULARIOS, EVITA DUPLICIDAD DATOS ENVIADOS. 
 */       
    session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {    
   
    /**  Guardar en base de datos con funcion Crear Usuario 
     */    
    if (isset($_POST['submitCrear'])) {         
       
        $nombre = $_POST['crearNombre'];
        $apellido = $_POST['crearApellido'];
        $correo= $_POST['crearCorreo'];
        $pw = $_POST['crearPw']; 
        //tolower
        $nombre = strtolower($nombre);
        $apellido = strtolower($apellido);
        $correo= strtolower($correo);
       
         try{  
            crearUsuario($nombre,$apellido,$correo,$pw); 
          
                consulta_login($correo, $pw);
                                                        
                
               // SI NOMBREP NO ESTA VACIA ENTONCES SE LLAMA A LA FUNCION SET_PROTECTORA, la cual esta establecida como UNIQUE en bd
                   
                    if (!empty($_POST['crearNombreP'])) {
                        
                        $nombreP=$_POST['crearNombreP'];
                       
                        $persona=$_SESSION['sesion'];
                        $persona->set_protectora($nombreP);                        
                    }
                    header("Location: ../vista/perfil.php"); 
                    exit();
        }catch(Exception $e){   
           //si el usuario ya existe  
           header("Location: ../vista/errores_form.php?error_usuario=1");  
        }   
    } 
              
     /** SI SE HACE LOGIN, SE CREA COOKIE*/
    if(isset($_POST['submitLogin'])){    
        
         if(consulta_login($_POST['correo'],$_POST['pw'])){   
            // unset($_SESSION['nombreP']);
            
            header("Location: ../vista/publicar.php");  
         }           
    } 

     /** SI SE PUBLICA UN ANIMAL, REQUIERE QUE LA COOKIE EXISTA, SI LA COOKIE CADUCA DEBE VOLVER A INICIAR SESION*/
    if(isset($_COOKIE["datos"])){

        /**SUBMIT PUBLICAR ANIMAL */
            if (isset($_REQUEST['submitAnimal']))  {      

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
                //tolower
                $raza= strtolower($raza);;
                $color = strtolower($color);
                $cc =  strtolower($cc);   
                $ciudad=  strtolower($ciudad);  

                    if(consulta_guardarAnimal($tipo,$tamano,$raza,$color,$cc,$ciudad,$infoA,$correo,$nombreP)){                      

                        echo   "  <div id='miVentanaModal' class='ventana-modal'>
                        <div class='contenido-ventana'>
                          <p>Has publicado un animal. <br> Accede a tu <a href=perfil.php> perfil  </a> </p>              
                        </div>
                        </div>";   
                    }   
            } 

            /** ACTUALIZAR PROTECTORA ANIMAL */
            if(isset($_POST['submit_asociacion'])){    
                $nombreP=$_POST['nombreP'] ;
                $ciudadP=$_POST['ciudadP'] ;
                $telefonoP=$_POST['nombreP'] ;
                $web=$_POST['web'] ;
                $persona=$_SESSION['sesion'];
            
             
                    if( $persona->set_protectora($nombreP,$ciudadP,$telefonoP,$web)){    
                        header("Location: ../vista/perfil.php"); 
                    }else{ echo "error"; }
                      
            }
            /**BORRAR ANIMAL */
            if(isset($_POST['confirmaBorrar'])){
                $id=$_POST['id'];
                borrarAnimal($id);
            }
            /**EDITAR ANIMAL */
            if (isset($_POST['editar'])){
                 $id=$_POST['id'];
                 $info=$_POST['info'];
                 var_dump($info);

                 editar_Animal($id,$info);
            }
        }else{
            echo "La sesión ha caducado";
        }

}
   


?>
