<?php
 /**
 * necesitamos que incluya consultas_animal para usar sus funciones de obtener animal, y no al revés.
 */
 include "consultas_animal.php";

$correo;

function consulta_crearUsuario($nombre,$apellido,$correo,$pw){      

    $query="INSERT INTO usuarios (nombre,apellido,correo,pw)
     VALUES ('$nombre','$apellido','$correo','$pw')";
    $resultado=crearConexion()->query($query);  

    /*La variable $persona almacenará el email del objeto de clase persona para reutilizarlo en sql insert usuario_animal
     */  
     
    return $resultado;    
}


function consulta_login($correo, $pw){
   
    $query="SELECT correo, pw from usuarios where correo='$correo' and pw='$pw' ";
    $resultado=crearConexion()->query($query);     
    
    try{   
        if ($datos= mysqli_fetch_array($resultado)){ 
            //si COOKIES "DATOS" es = resultado:
            //DEVUELVE $CORREO QUE SERA LO QUE USAREMOS 
             return $correo;  
        }else{ 
                echo("<p class='error'>Algun dato no coincide</p>");   
                return false;
        };  
        
    }catch(PDOException $e){
        echo ("error");
    };  
}

function datosUsuario(){    
    $correo=$_COOKIE['datos'];
    
    $query="SELECT nombre,apellido,correo,nombreP,info from usuarios where correo= '$correo' ";
    $resultado=crearConexion()->query($query);
    
    while ($fila = mysqli_fetch_assoc($resultado)){
        echo ("<b> Nombre: " . $fila['nombre'].
        "<br>Apellido: " . $fila['apellido'].
        "<br> Correo: ".$fila['correo'].
        "<br>Protectora: ".$fila['nombreP']. "</b> </div>");
    }    
    return $resultado;
}
//añadir dato en objeto Persona con set()
  function set_protectora($nombreP){
    $_SESSION['nombreP'] = $nombreP;
    $correo=$_COOKIE['datos'];

    $conexion=crearConexion();
    //$query1="INSERT INTO protectora_animal (nombreP) VALUES ('$nombreP')";
    $query2="UPDATE usuarios SET nombreP='$nombreP' WHERE correo = '$correo'";
    $resultado1 = $conexion->query($query2);
    //$resultado2 = $conexion->query($query2);
    
    return true;
  }
?>