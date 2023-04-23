<?php
include "conexion.php";
include "persona.php";
include "animal.php";

$id;
/**
 * todo: hacer tabla ciudad id, para luego consulta por ciudades. 
 */
function consulta_guardarAnimal($tipo,$tamaño,$raza,$color,$cc,$ciudad,$info,$correo,$nombreP){
    //insertar imagen:
        $nombre_imagen=$_FILES['insertarImagen']['name'];
        $temporal=$_FILES['insertarImagen']['tmp_name'];
        $carpeta= '../vista/img/publicados';
        $ruta= $carpeta. '/' . $nombre_imagen;
        move_uploaded_file($temporal,$carpeta.'/'.$nombre_imagen);    
        
        $conexion=crearConexion();
        $query="INSERT INTO animales (foto,tipo,tamaño,raza,color,cc,ciudad,info,correo) 
                VALUES ('$ruta','$tipo','$tamaño','$raza','$color','$cc','$ciudad','$info','$correo')";        
        $resultado=$conexion->query($query);
        
        global $id;
        $id = $conexion->insert_id;

        
        /** incluimos en la tabla animal_usuario si obtenemos la ID recien creada en BD*/
        if ($id){
             $query2="INSERT INTO protectora_animal (id,nombreP) VALUES ('$id','$nombreP')";
             $resultado=$conexion->query($query2);          
        }
        
        $conexion=cerrarConexion( $conexion);
        return $resultado;
}
/**
 * CONSULTA PARA OBTENER ANIMALES PUBLICADOS EN PERFIL
 */
function consulta_usuarioAnimal($correo){
    $query= "SELECT foto, id, correo from animales where correo='$correo'";
    $resultado=crearConexion()->query($query);   
    while ($fila = mysqli_fetch_assoc($resultado)){
        echo (" <div class='imagen'>
        <img src='". $fila['foto']."' height='100px' width='120px'  >
        <br>ID: " . $fila['id']. "</b> </div>");
       }
    return $resultado;    
}

/**FILTRAR Y MOSTRAR ANIMALES  */
function filtrarBusqueda($tipo,$tamano,$raza,$color,$cc,$ciudad){

    $query="SELECT * FROM animales WHERE tipo LIKE '%{$tipo}%' AND tamaño LIKE '%{$tamano}%' ";                   

             if (isset($_POST['buscaRaza'])){   
                $query=$query." AND raza LIKE '%{$_POST['buscaRaza']}%'";
             } 
             if (isset($_POST['buscaColor'])){   
                $query=$query." AND color LIKE '%{$_POST['buscaColor']}%'";
             }  
             if (isset($_POST['buscaCC'])){   
                $query=$query." AND cc LIKE '%{$_POST['buscaCC']}%'";
             }  
             if (isset($_POST['buscaCiudad'])){   
                $query=$query." AND ciudad LIKE '%{$_POST['buscaCiudad']}%'";
             }                   
    $resultado = crearConexion()->query($query);
    
    foreach ( $resultado as $datos) {
     echo "<div class='imagen'>
             <div class='card' style='width: 12rem;'>
                 <img src='".$datos['foto']."' class='card-img-top' alt='' height='120px' width='100px'>
  
                 <div class='card-body'>
                     <h5 class='card-title'>". $datos['ciudad']."</h5>                
                     <a href='vista_animal.php?id_animal=". $datos['id']."' class='btn btn-primary'>Go </a>
                 </div>
             </div>
         </div>";     
    }   
  return $resultado;    
}

function consultaUltimos(){
  
    $query="SELECT * FROM animales ORDER BY  fecha ASC ";  
    $resultado=crearConexion()->query($query);
       
    if ($resultado){
        /* obtener array asociativo */
        foreach ( $resultado as $datos){         
       
       echo "<div class='imagen'>
                  <div class='card' style='width: 12rem;'>
                    <img src='".$datos['foto']."' class='card-img-top' alt='' height='120px' width='100px'>
  
                    <div class='card-body'>
                        <h5 class='card-title'>". $datos['ciudad']."</h5>                
                        <a href='vista_animal.php?id_animal=". $datos['id']."' class='btn btn-primary'>Go </a>
                    </div>
                  </div>
             </div>";        
        }
    }    
 return $resultado;
 }   

 function consultaPrimeros(){
    $conexion=crearConexion();
    $query="SELECT * FROM animales ORDER BY  fecha DESC ";  
    $resultado=$conexion->query($query);
    cerrarConexion($conexion); //
       
    if ($resultado) {
        /* obtener array asociativo */
        foreach ( $resultado as $datos) {    
            echo "<div class='imagen'>
            <div class='card' style='width: 12rem;'>
                <img src='".$datos['foto']."' class='card-img-top' alt='' height='120px' width='100px'>
        
                <div class='card-body'>
                    <h5 class='card-title'>". $datos['ciudad']."</h5>                
                    <a href='vista_animal.php?id_animal=". $datos['id']."' class='btn btn-primary'>Go </a>
                </div>
            </div>
            </div>";
        }
    }    
 return $resultado;
 }  


?>