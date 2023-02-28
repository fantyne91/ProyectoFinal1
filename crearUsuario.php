<?php
    include "conexion.php";  

     static $nombre;
     static $apellido;
     static $correo;
     static $pw;
     static $nombreP;
     static $info;
   

    if (isset($_POST['submitCrear'])) {

        $nombre = $_POST['crearNombre'];
        $apellido = $_POST['crearApellido'];
       $correo= $_POST['crearCorreo'];
        $pw = $_POST['crearPw'];
       $protectora = $_POST['protectora'];   
         $nombreP = $_POST['nombreP']; 
         try{

            if($correo==null || $pw==null){
                echo ("<p class='error'>Se requiere un correo y contraseña");
             }else{
                crearUsuario($nombre,$apellido,$correo,$pw,$protectora,$nombreP);
                echo ("<p> Usuario creado. Ahora accede a tu cuenta <button><a href='encontrado.php'>AQUI</a></button> </p> <br>. ");  

             };
         }catch(Exception $e){
            echo ("<p class='error'>Ha habido algún error</p>");
         }
        };   
    
/**
* * Guardar la base de datos con funcion Crear Usuario 
* 
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
* *VALIDA Y CREA COOKIE
* !FUNCIONES LOGGIN/ ENCONTRADO.PHP
*/    
function validaLoggin(){ 
   if(isset($_POST['submitLoggin'])){
    

    $pers=(Loggin($_POST['correo'],$_POST['pw']));    
    setcookie("datos",$pers,time()+2000, "/" );
    
    }
}  
 /***
  * *RETURN STRING PARA HACER ISSET COOKIES(perfil)
   * 
   * 
   */
 function Loggin($correo, $pw){
    $con=crearConexion();
    $query="SELECT correo, pw from usuarios where correo='$correo' and pw='$pw' ";
    $resultado=mysqli_query($con, $query);
    cerrarConexion($con);  
    
    try{   
        if($correo==null || $pw ==null){
         echo ("<p class='error'>introduce todos los campos</p>");
         return false;   

        }else if ($datos= mysqli_fetch_array($resultado)){ 
            //si COOKIES "DATOS" es = resultado:
            //DEVUELVE $CORREO QUE SERA LO QUE USAREMOS 
            echo("<p class='cuadro'> Bienvenido $correo <br> <a href='encontrado.php' class='link'>Publica AQUI <a></p>   <br>");            
             
             return $correo;  

        }else{ 
                echo("<p class='error'>Algun dato no coincide</p>");   
                return false;
        };  
        
    }catch(PDOException $e){
        echo ("error");
    };  
}
function guardarAnimal($tipo,$tamaño,$raza,$color,$cc,$ciudad,$info,$correo){
    $con=crearConexion(); 
    $query="INSERT INTO animales (tipo,tamaño,raza,color,cc,ciudad,info,correo) VALUES ('$tipo','$tamaño','$raza','$color','$cc','$ciudad','$info','$correo')";
    $resultado=mysqli_query($con,$query);
    cerrarConexion($con);  
    
    return $resultado;
}

/**
 * !funciones PERFIL
 */

function datosUsuario(){    
   $correo=$_COOKIE['datos'];
    $con=crearConexion();
    $query="SELECT nombre,apellido,correo,nombreP,info from usuarios where correo= '$correo' ";
    $resultado=mysqli_query($con, $query);
    cerrarConexion($con); 
   
    
    while ($fila = mysqli_fetch_assoc($resultado)){
        echo ("<b>Nombre: " . $fila['nombre'].
        "<br>Apellido: " . $fila['apellido'].
        "<br> Correo: ".$fila['correo'].
        "<br>Protectora: ".$fila['nombreP'].
        "<br>Info: ".$fila['info']."</b>");
    };     
    return $resultado;
}

/**
 * !
 */

function  guardarInfo(){
    $info=$_POST['info'];
    $correo=$_COOKIE['datos'];

    $con=crearConexion();
    $query="UPDATE usuarios SET info='$info'  WHERE correo = '$correo'";
    $resultado=mysqli_query($con, $query);
    cerrarConexion($con);    
    return $resultado;

}



?>

