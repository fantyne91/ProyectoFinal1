<?php
 include "conexion.php";
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
        echo (" <div id=datosPerfil>
        <b> Nombre: " . $fila['nombre'].
        "<br>Apellido: " . $fila['apellido'].
        "<br> Correo: ".$fila['correo'].
        "<br>Protectora: ".$fila['nombreP'].
        "<br>Info: ".$fila['info']."</b> </div>");
    }
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