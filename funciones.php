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
* todo: js, valide input patrones regex
* !FUNCIONES LOGGIN/ ENCONTRADO.PHP
*/    
function validaLoggin(){ 
   if(isset($_POST['submitLoggin'])){
    

    $pers=(Loggin($_POST['correo'],$_POST['pw']));    
    return $pers;
    
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


             return $correo;  

        }else{ 
                echo("<p class='error'>Algun dato no coincide</p>");   
                return false;
        };  
        
    }catch(PDOException $e){
        echo ("error");
    };  

}
//cambiar BD tipo fecha A/M/D
/**
 * todo: como filtrar y mostrar imagen segun filtro. CON JS?
 */
function guardarAnimal($tipo,$tamaño,$raza,$color,$cc,$ciudad,$info,$correo){
//insertar imagen:
    $nombre_imagen=$_FILES['insertarImagen']['name'];
    $temporal=$_FILES['insertarImagen']['tmp_name'];
    $carpeta= 'vista/img/publicados';
    $ruta= $carpeta. '/' . $nombre_imagen;
    move_uploaded_file($temporal,$carpeta.'/'.$nombre_imagen);

    $con=crearConexion(); 
    $query="INSERT INTO animales (foto,tipo,tamaño,raza,color,cc,ciudad,info,correo) 
            VALUES ('$ruta','$tipo','$tamaño','$raza','$color','$cc','$ciudad','$info','$correo')";
    $resultado=mysqli_query($con,$query);
    cerrarConexion($con);  
    
    return $resultado;
}

function mostrarAnimal($color, $ciudad){
    $con=crearConexion();
    $query= "SELECT foto FROM animales where color LIKE '$color' and ciudad LIKE '$ciudad'";
    $resultado=mysqli_query($con,$query);

    cerrarConexion($con);  
    
    return $resultado;
}
?>

