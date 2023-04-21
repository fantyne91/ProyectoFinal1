<?php
include "personas.php";


// if (isset($_POST['submitCrear'])) {

//     $nombre = $_POST['crearNombre'];
//     $apellido = $_POST['crearApellido'];
//     $correo= $_POST['crearCorreo'];
//     $pw = $_POST['crearPw'];
//     $protectora = $_POST['protectora'];   
//     $nombreP = $_POST['nombreP']; 
//      try{

//         if($correo==null || $pw==null){
//             echo ("< class='error'>Se requiere un correo y contraseña");
//          }else{
//             $persona=new Persona($nombre,$apellido,$correo,$pw,$protectora,$nombreP);
//             crearUsuario($nombre,$apellido,$correo,$pw,$protectora,$nombreP);
//             echo ("<div style='background-color:#3C6CA8; color:white'> Usuario creado. Ahora <a style='color:white' href='publicar.php'>accede a tu cuenta </a> </div> <br>. ");  
//          };
//      }catch(Exception $e){
//         echo ("<p class='error'>Ha ocurrido algún error, puede que el e-mail ya esté registrado.</p>");
//      }
//     };   

// /**
// * * Guardar la base de datos con funcion Crear Usuario  
// */       
// function crearUsuario($nombre,$apellido,$correo,$pw,$protectora,$nombreP){  
   
//    $query="INSERT INTO usuarios (nombre,apellido,correo,pw,protectora,nombreP)
//     VALUES ('$nombre','$apellido','$correo','$pw','$protectora','$nombreP')";
//    $resultado=crearConexion()->query($query);
    
   
//    return $resultado;    
// };

// function mostrarTodos(){
  
//    $query="SELECT * FROM animales ORDER BY  fecha ASC ";  
//    $resultado=crearConexion()->query($query);
      
//    if ($resultado) {
//        /* obtener array asociativo */
//        foreach ( $resultado as $datos) {
//       ?>     
      
<!-- //        <div class="imagen">
//        <div class="card" style="width: 12rem;">
//            <img src="<?php echo $datos['foto']; ?>" class="card-img-top" alt="" height="120px">

//            <div class="card-body" >
//                <h5 class="card-title" height="100px"><?php echo $datos['ciudad']; ?></h5>         
//                <a href="<?php echo $datos['foto'];?>" target="_blank" class="btn btn-primary">Go </a>
//            </div>
//        </div>
//        </div> -->
// <?php

// }
// }    
// return $resultado;
// }   
?>