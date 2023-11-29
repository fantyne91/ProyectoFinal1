<?php
include "conexion.php";


$id;
/**
 * CONSULTAS ANIMALES
 */
/**GUARDAR ANIMAL  */
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
                
                $query2="INSERT INTO protectora_animal (id_animal,nombreP) VALUES ('$id','$nombreP')";
                $resultado2=$conexion->query($query2);                         
        }                       
        $conexion=cerrarConexion( $conexion);
        return $resultado;
}
/**
 * CONSULTA PARA OBTENER ANIMALES PUBLICADOS por usuario EN PERFIL
 */
function consulta_usuarioAnimal($correo){
    $query= "SELECT * from animales where correo='$correo' ORDER BY  fecha DESC";
    $resultado=crearConexion()->query($query);   

    while ($fila = mysqli_fetch_assoc($resultado)){
        $id= $fila['id'];       

        echo ("<div class='imagen'>
        <a class='linkAzul' href='vista_animal.php?id_animal=". $id."' >
                   <div class='card' style='width: 10rem;'>
                <img src='". $fila['foto']."' class='card-img-top' alt='' height='120px' width='98px'  >
                ID: " . $id. "</a> 
                 <form method='POST' action='#' style='border:none; display:flex;justify-content:center'>
                     <input type='hidden' name='id' value='".$id."'>                  
                     <button type='submit' name='editarAnimal' <span class='material-symbols-outlined'>edit</span></button><br>
                     
                     <button type='submit' name='borrarAnimal'class='btn btn-primary'style='padding:3px;margin:3px'>Eliminar </button>
                 </form> 
                </div></div>");                       
       } 
      
    return $resultado;    
}
/**BORRAR ANIMAL  */
function borrarAnimal($id){
    $conexion=crearConexion();
    $query="DELETE  FROM animales WHERE id='$id' ";  
    $resultado=$conexion->query($query);
    cerrarConexion($conexion); //
    return $resultado;
 }
 /**EDITAR ANIMAL  */
 function editar_Animal($id,$info){
    $conexion=crearConexion();
    $query="UPDATE animales SET info = '$info' WHERE id='$id'";  
    $resultado=$conexion->query($query);
    cerrarConexion($conexion); //
    
    return $resultado;
 }

/**FILTRAR Y MOSTRAR ANIMALES  */
function filtrarBusqueda($tipo,$tamano){

    $conexion=crearConexion();
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
    $resultado = $conexion->query($query);
    
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
    cerrarConexion($conexion);
  return $resultado;    
}
/**CONSULTAR ANIMALES PUBLICADOS PRIMERO  */
function consultaPrimeros(){
  
    $query="SELECT * FROM animales ORDER BY  fecha ASC ";  
    $resultado=crearConexion()->query($query);
       
    if ($resultado){
        /* obtener array */
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
/**CONSULTAR ULTIMOS ANIMALES PUBLICADOS   */
 function consultaUltimos(){
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