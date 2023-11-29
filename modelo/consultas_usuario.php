<?php
 /**
 * FUNCIONES USUARIO
 */
 include "consultas_animal.php";

$correo;
/**CREAR USUARIO  */
function crearUsuario($nombre,$apellido,$correo,$pw){      
  
    $conexion=crearConexion();
    $query="INSERT INTO usuarios (nombre,apellido,correo,pw)
     VALUES ('$nombre','$apellido','$correo','$pw')";
    $resultado=$conexion->query($query);  
    cerrarConexion($conexion);
           
    return $resultado;    
}

/**HACER LOGIN  */
function consulta_login($correo, $pw){
   
    $query="SELECT * from usuarios where correo='$correo' and pw='$pw' ";
    $resultado=crearConexion()->query($query);     
    
    try{   
        if ($datos_usuario= mysqli_fetch_assoc($resultado)){ 
            /*Se almacena el correo en cookie para reutilizarlo en diversas funciones
     */
            
            $persona = new Usuario(
            $datos_usuario['id'],
            $datos_usuario['nombre'],
            $datos_usuario['apellido'],           
            $datos_usuario['correo'],
            $datos_usuario['pw'],
            $datos_usuario['nombreP'],
            $datos_usuario['fecha'] );

            $_SESSION["sesion"] = $persona;  
             setcookie("datos",$correo,time()+2000, "/" ); 
             return $correo;  
        }else{ 
                echo("<p class='error'>Algun dato no coincide</p>");   
                return false;
        };  
        
    }catch(PDOException $e){
        echo ("error");
    };  
}



  
?>