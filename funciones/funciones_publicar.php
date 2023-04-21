<?php    
    include "procesar_formularios.php"; 
  
/**cambiar BD tipo fecha A/M/D
 */
if (isset($_REQUEST['submitAnimal'])){

    $nuevo= new Animal($_POST['tipo'],$_POST['tamano'],$_POST['raza'],$_POST['color'],$_POST['cc'],$_POST['ciudad'],$_POST['infoA'],$_COOKIE['datos']);           
    consulta_guardarAnimal($_POST['tipo'],$_POST['tamano'],$_POST['raza'],$_POST['color'],$_POST['cc'],$_POST['ciudad'],$_POST['infoA'],$_COOKIE["datos"]);
    
    if ($nuevo){
    echo   "  <div id='miVentanaModal' class='ventana-modal'>
    <div class='contenido-ventana'>
      <p>Has publicado un animal. <br> Accede a tu <a href=perfil.php> perfil   </p>              
    </div>
    </div>";      
}
}


function validaLogin(){ 
   if(isset($_POST['submitLogin'])){    

    $pers=(consulta_login($_POST['correo'],$_POST['pw']));    
    return $pers;
    
    }
}  


?>

