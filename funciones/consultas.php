<?php
include "conexion.php";
include "personas.php";
include "animal.php";

function consulta_crearUsuario($nombre,$apellido,$correo,$pw,$protectora,$nombreP){  
       
    $query="INSERT INTO usuarios (nombre,apellido,correo,pw,protectora,nombreP)
     VALUES ('$nombre','$apellido','$correo','$pw','$protectora','$nombreP')";
    $resultado=crearConexion()->query($query);        
    
    return $resultado;    
}; 

function consulta_login($correo, $pw){
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

function consulta_guardarAnimal($tipo,$tamaño,$raza,$color,$cc,$ciudad,$info,$correo){
    //insertar imagen:
        $nombre_imagen=$_FILES['insertarImagen']['name'];
        $temporal=$_FILES['insertarImagen']['tmp_name'];
        $carpeta= '../vista/img/publicados';
        $ruta= $carpeta. '/' . $nombre_imagen;
        move_uploaded_file($temporal,$carpeta.'/'.$nombre_imagen);    
        
        $query="INSERT INTO animales (foto,tipo,tamaño,raza,color,cc,ciudad,info,correo) 
                VALUES ('$ruta','$tipo','$tamaño','$raza','$color','$cc','$ciudad','$info','$correo')";
        $resultado=crearConexion()->query($query);
        
        return $resultado;
}


function consultaUltimos(){
  
    $query="SELECT * FROM animales ORDER BY  fecha ASC ";  
    $resultado=crearConexion()->query($query);
       
    if ($resultado){
        /* obtener array asociativo */
        foreach ( $resultado as $datos){
        ?>     
       
        <div class="imagen">
        <div class="card" style="width: 12rem;">
            <img src="<?php echo $datos['foto']; ?>" class="card-img-top" alt="" height="120px">
 
            <div class="card-body" >
                <h5 class="card-title" height="100px"><?php echo $datos['ciudad']; ?></h5>         
                <a href="vista_animal.php?id_animal=<?php echo $datos['id'];?>" target="_blank" class="btn btn-primary">Go </a>
            </div>
        </div>
        </div>
        <?php 
        }
    }    
 return $resultado;
 }   

 function consultaPrimeros(){
  
    $query="SELECT * FROM animales ORDER BY  fecha DESC ";  
    $resultado=crearConexion()->query($query);
       
    if ($resultado) {
        /* obtener array asociativo */
        foreach ( $resultado as $datos) {
       ?>     
       
        <div class="imagen">
        <div class="card" style="width: 12rem;">
            <img src="<?php echo $datos['foto']; ?>" class="card-img-top" alt="" height="120px">
 
            <div class="card-body" >
                <h5 class="card-title" height="100px"><?php echo $datos['ciudad']; ?></h5>         
                <a href="vista_animal.php?id_animal=<?php echo $datos['id'];?>" target="_blank" class="btn btn-primary">Go </a>
            </div>
        </div>
        </div>
 <?php
 
 }
 }    
 return $resultado;
 }  


?>