<?php
include "conexion.php";

//include "../funciones/animal.php";

$id;
/**
 * 
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
        
        if ($nombreP==!null){           
                
                $query2="INSERT INTO protectora_animal (id,nombreP) VALUES ('$id','$nombreP')";
                $resultado2=$conexion->query($query2);                         
        }                       
        $conexion=cerrarConexion( $conexion);
        return $resultado;
}
/**
 * CONSULTA PARA OBTENER ANIMALES PUBLICADOS por usuario EN PERFIL
 */
function consulta_usuarioAnimal($correo){
    $query= "SELECT * from animales where correo='$correo'";
    $resultado=crearConexion()->query($query);   

    while ($fila = mysqli_fetch_assoc($resultado)){
        $id= $fila['id'];       

        echo ("<div class='imagen'>
        <a class='linkAzul' href='vista_animal.php?id_animal=". $fila['id']."' >
                   <div class='card' style='width: 10rem;'>
                <img src='". $fila['foto']."' class='card-img-top' alt='' height='120px' width='98px'  >
                ID: " . $fila['id']. "</a> 
                 <form method='POST' action='#'>
                     <input type='hidden' name='id' value='".$id."'>                  
                     <button type='submit' name='editarAnimal' class='btn btn-primary'>Editar</button><br>
                     <button type='submit' name='borrarAnimal'class='btn btn-primary'>Eliminar </button>
                 </form> 
                </div></div>");                       
       } 
      
    return $resultado;    
}
function borrarAnimal($id){
    $conexion=crearConexion();
    $query="DELETE  FROM animales WHERE id='$id' ";  
    $resultado=$conexion->query($query);
    cerrarConexion($conexion); //
    return $resultado;
 }
 function editar_Animal($id,$info){
    $conexion=crearConexion();
    $query="UPDATE animales SET info = '$info' WHERE id='$id'";  
    $resultado=$conexion->query($query);
    cerrarConexion($conexion); //
    
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
     <a class='linkAzul' href='vista_animal.php?id_animal=". $datos['id']."' >
                <div class='card' style='width: 10rem;'>
                  <img src='".$datos['foto']."' class='card-img-top'  height='120px' width='98px'>
                  <div class='card-body'>
                      <h5 class='card-title'>". $datos['ciudad']."</h5>                                       
                  </div>
                </div>
                </a>
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
              <a class='linkAzul' href='vista_animal.php?id_animal=". $datos['id']."' >
                         <div class='card' style='width: 10rem;'>
                           <img src='".$datos['foto']."' class='card-img-top'  height='120px' width='98px'>
                           <div class='card-body'>
                               <h5 class='card-title'>". $datos['ciudad']."</h5>                                       
                           </div>
                         </div>
                         </a>
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
            <a class='linkAzul' href='vista_animal.php?id_animal=". $datos['id']."' >
                       <div class='card' style='width: 10rem;'>
                         <img src='".$datos['foto']."' class='card-img-top'  height='120px' width='98px'>
                         <div class='card-body'>
                             <h5 class='card-title'>". $datos['ciudad']."</h5>                                       
                         </div>
                       </div>
                       </a>
                  </div>"; 
        }
    }    
 return $resultado;
 }  



?>