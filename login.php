<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- incluimos bootsatrap en css y java-->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" >
    <link rel="stylesheet" href="css.css" type="text/css">
    <title>login</title>
    
</head>

<body>
<?php      
   session_start();
    include "crearUsuario.php";
   
/**
 * !Hacemos login
 */
$correo;
$pw;
if(isset($_POST['submitloggin'])){
   
    $correo = $_POST['correo'];
    $pw = $_POST['pw'];
      //SET COOKIE
    $usuario=datosUsuario($correo,$pw);  
    setcookie("datos",$usuario , time()+200);

    try{
        Login($correo,$pw);
        echo("<br>Bienvenido <b>".$correo."</b>");
      
       
    }catch(Exception $e){
        echo ($e->getMessage());   
    };
     
    
};

?>
<div>
    <p> Aquí podras modificar tus datos para que puedan contactarte  
    </p>
    <!--llamamos funcion datos(crearUsuario) con los 2 parametros del isset login anterior -->
   
    <form action="login.php" method="POST">
        <p>Escribe los datos que consideres sobre tu organización.</p>
              
        <div class="mb-3">
             <label for="exampleFormControlTextarea1" class="form-label">Tu info:</label>
            <textarea class="form-control" name="info" maxlength="320" id="exampleFormControlTextarea1" rows="3"></textarea>
            <button type="submit" name=submitInfo >Guardar</button>
        </div>
    </form>
<?php
/**
 * todo:guarda info pweo borra los demas
 */
  if(isset($_SESSION['usuario'])){
    if(isset($_POST['submitInfo'])){
        $info = $_POST['info'];
       
     try{
           guardarInfo($info);  
          
        }catch(Exception $e){
            echo ($e->getMessage());
        };
    };   
   };
   
  
  
 

    
?>
   
   
    
</div>

</body>
</html>