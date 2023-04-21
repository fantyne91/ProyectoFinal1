<?php
 include "consultas.php";
session_start();


// if (isset($_POST)){
//     foreach($_POST as $post){
//         echo  $post;
//     }
    
// }
/**FILTRAR Y MOSTRAR ANIMALES  */
 function filtrarBusqueda($tipo,$tamano,$raza,$color,$cc,$ciudad){

    $query="SELECT foto,tipo,tamaño,raza,color,cc,ciudad FROM animales WHERE tipo LIKE '%{$tipo}%' AND tamaño LIKE '%{$tamano}%' ";                   

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
     ?>     
     
      <div class="imagen">
      <div class="card" style="width: 12rem;">
          <img src="<?php echo $datos['foto']; ?>" class="card-img-top" alt="" height="120px" width="100px">
  
          <div class="card-body">
              <h5 class="card-title"><?php echo $datos['ciudad']; ?></h5>                
              <a href="#" class="btn btn-primary">Go </a>
          </div>
      </div>
      </div>
  <?php
  }         
      
  return $resultado;    
  }




 ?>