<?php

/*PAGINA PARA CERRAR SESION Y ELIMINAR COOKIES*/ 
session_destroy();
setcookie('datos', '', time()-3600,"/");

header("Location:../vista/perfil.php");
exit();


?>