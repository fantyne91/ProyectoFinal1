<?php
 /**
 * necesitamos que incluya consultas_animal para usar sus funciones de obtener animal, y no al revés.
 */
 include "consultas_animal.php";

$correo;

function consulta_crearUsuario($nombre,$apellido,$correo,$pw){      
  
    $conexion=crearConexion();
    $query="INSERT INTO usuarios (nombre,apellido,correo,pw)
     VALUES ('$nombre','$apellido','$correo','$pw')";
    $resultado=$conexion->query($query);  
    cerrarConexion($conexion);
           
    return $resultado;    
}


function consulta_login($correo, $pw){
   
    $query="SELECT * from usuarios where correo='$correo' and pw='$pw' ";
    $resultado=crearConexion()->query($query);     
    
    try{   
        if ($datos_usuario= mysqli_fetch_assoc($resultado)){ 
            /*La variable $persona almacenará el email del objeto de clase persona para reutilizarlo en sql insert usuario_animal
     */
            
            $persona = new Usuario(
            $datos_usuario['id'],
            $datos_usuario['nombre'],
            $datos_usuario['apellido'],           
            $datos_usuario['correo'],
            $datos_usuario['pw'],
            $datos_usuario['nombreP']
        );
            $_SESSION["sesion"] = $persona;  
        
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