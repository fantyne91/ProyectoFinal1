<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>


<body>

    <?php
    include "conexion.php";

/**
* * Guardar la base de datos con funcion Crear Usuario 
* ! creamos usuario
*/
            
if (isset($_POST['submitCrear'])) {

$crearNombre = $_POST['crearNombre'];
$crearApellido = $_POST['crearApellido'];
$crearCorreo= $_POST['crearCorreo'];
$crearPw = $_POST['crearPw'];
$protectora = $_POST['protectora'];   
$nombreP = $_POST['nombreP'];        

    try{
        if($crearCorreo==null || $crearPw==null){
        echo ("se requiere un correo y contraseña");
        }else{
        //creamos usuario con las variables obtenidas con POST anteriormente
        crearUsuario($crearNombre,$crearApellido,$crearCorreo,$crearPw,$protectora,$nombreP);
        echo ("Usuario creado. Ahora accede a tu cuenta");    
        }
    }catch(Exception $e){        
    echo ($e->getMessage());               
    };  
};    

 /**
   * !funcion de CONSULTA crear usuario
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
   * !funcion de CONSULTA login
   * todo: 
   */
function Login($correo,$pw){
    $con=crearConexion();
    $query="SELECT * from usuarios where correo='$correo' and pw='$pw' ";
    $resultado=mysqli_query($con, $query);
    cerrarConexion($con);  

    if($resultado){
        
        return $resultado;
};
};
/**
 * !funcion datos usuarios
 */
function datosUsuario($correo,$pw){
   
    // llamamos funcion Login con los 2 parametros consulta	
        $datos= Login($correo,$pw);
        while ($fila = mysqli_fetch_assoc($datos)){
            echo ("<b>Nombre: " . $fila['nombre'].
            "<br>Apellido: " . $fila['apellido'].
            "<br> Correo: ".$fila['correo'].
            "<br>Protectora: ".$fila['nombreP'].
            "<br>Info: ".$fila['info']."</b>");
        };
       
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