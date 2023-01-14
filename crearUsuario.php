<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <!-- incluimos bootsatrap en css y java-->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" >
    <link rel="stylesheet" href="css.css" type="text/css">
    <title>Document</title>
</head>


<body>



<?php
    include "conexion.php";  
    
   
/**
* * Guardar la base de datos con funcion Crear Usuario 
* ! creamos usuario
*/       
function validaUsuario(){     
if (isset($_POST['submitCrear'])) {

    $crearNombre = $_POST['crearNombre'];
    $crearApellido = $_POST['crearApellido'];
    $crearCorreo= $_POST['crearCorreo'];
    $crearPw = $_POST['crearPw'];
    $protectora = $_POST['protectora'];   
    $nombreP = $_POST['nombreP'];        
    
        try{
            if($crearCorreo==null || $crearPw==null){
            echo ("<p class='error'>Se requiere un correo y contraseña");
            }else{
            //creamos usuario con las variables obtenidas con POST anteriormente
            crearUsuario($crearNombre,$crearApellido,$crearCorreo,$crearPw,$protectora,$nombreP);
            echo ("<p> Usuario creado. Ahora accede a tu cuenta</p> <br>");    
            Login($crearCorreo, $crearPw);
            }
        }catch(Exception $e){        
        echo ("<p class='error'>Ya has creado un Usuario</p>");               
        };  
    };   
};
 /**
   * !funcion de crear usuario con CONSULTA 
   * todo: try catch error y duplicados
   */
function crearUsuario($nombre,$apellido,$correo,$pw,$protectora,$nombreP){

    $con=crearConexion();
    $query="INSERT INTO usuarios (nombre,apellido,correo,pw,protectora,nombreP)
     VALUES ('$nombre','$apellido','$correo','$pw','$protectora','$nombreP')";
   $resultado=mysqli_query($con, $query);
   cerrarConexion($con);    
   return $resultado;   
};

/**
 * *SI SUBMIT:
 * !Hacemos login
 */
static $correo;
static $pw;
static  $usuario;

      function validaLogin(){
            if(isset($_POST['submitloggin'])){
   
                $correo= $_POST['correo'];
                $pw = $_POST['pw'];

                if($correo==null || $pw ==null){
                    echo ("<p class='error'>introduce todos los campos</p>");
                    return false;
                }else{
                //SET COOKIE y llamada FUNCION login
                $usuario =Login($correo,$pw);  

                setcookie("datos",$usuario,time()+10000, "/" );                 
                };                   
            };
        };
    

 /***
  * *RETURN STRING PARA HACER ISSET COOKIES(perfil)
   * !funcion de CONSULTA login
   * todo: return registrado?
   */
function Login($correo, $pw){
    $con=crearConexion();
    $query="SELECT correo, pw from usuarios where correo='$correo' and pw='$pw' ";
    $resultado=mysqli_query($con, $query);
    cerrarConexion($con);  
    //si COOKIES "DATOS" es = resultado:
    try{
        if($datos = mysqli_fetch_array($resultado)){ 

            echo(" Bienvenido $correo <br>
            Accede a tu perfil para poder publicar: <br><br>
                <button autofocus type='submit' name='submitPerfil' class='btn btn-primary'><a href='perfil.php' class='link'>
                ACCEDE A TU PERFIL</a> </button> <br><br>"); 
               
            return "registrado";              
        }else{ echo("<p class='error'>Algun dato no coincide</p>");
            
        };   
        
        
    }catch(PDOException $e){
        echo ("error");
    }
       
   
};
    
function datosUsuario(){
    $correo=$_COOKIE['datos'];
    $con=crearConexion();
    $query="SELECT nombre,apellido,correo,nombreP,info from usuarios where correo='$correo'  ";
    $resultado=mysqli_query($con, $query);
    cerrarConexion($con); 
    return $resultado;
    
    while ($fila = mysqli_fetch_assoc($resultado)){
        echo ("<b>Nombre: " . $fila['nombre'].
        "<br>Apellido: " . $fila['apellido'].
        "<br> Correo: ".$fila['correo'].
        "<br>Protectora: ".$fila['nombreP'].
        "<br>Info: ".$fila['info']."</b>");
    };      
    
    
}
/**
 * !funcion datos usuarios
 */
function getDatos(){
    $datos=datosUsuario();
   
   
    // llamamos funcion Login con los 2 parametros consulta	
     
          
};


/**
 * todo: se borran los datos al guardar info? constantes?? SESSIONS
 */
function  guardarInfo($info){
    $con=crearConexion();
    $query="INSERT INTO usuarios (info) VALUES ('$info')";
    $resultado=mysqli_query($con, $query);
    cerrarConexion($con);    
    return $resultado;

}
?>

</body>
</html>