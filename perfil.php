<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- incluimos bootsatrap en css y java-->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" >
    <link rel="stylesheet" href="css.css" type="text/css">
    <title>Perfil</title>
</head>
<header>
</header>

<body>
<?php
include "crearUsuario.php";
include "nav.php";


if(!empty($_COOKIE['datos'])){
      
      echo "
      <div class='formInfo'>
       <form action='#' method='POST'>
         <p> Aquí podras añadir tus datos para que puedan contactarte. <br>    
           <b>Escribe los datos que consideres sobre ti o tu organización.</b></p>
         
             <div class='mb-3'>                       
                  <textarea class='form-control' name='info' maxlength='320' id='exampleFormControlTextarea1' rows='3'></textarea>
                  <button type='submit' name='submitInfo' >Guardar</button>
             </div>
         </form>";
  
       //si hacemos submit info 
      if(isset($_POST['submitInfo'])) {
         guardarInfo();
      }
      //PINTAMOS DESPUËS PARA QUE RECARGE
      datosUsuario();

      echo"";





    }else{
        echo" <a href='encontrado.php'> Accede a tu perfil</a>";
    }
  ?>
      </div>
  
































<!-- // const formInfo= document.querySelector('#formInfo');
// //evento por submit
// formInfo.addEventListener('submit',enviarInfo);

// function enviarInfo(e){
//     //evita recargar pagina automatico
//     e.preventDefault();

//     const data =new FormData(formInfo);

//     //a DONDE enviamos y recibimos info
//     fetch('login.php',{
//     method:'POST',
//     body: data});
// } -->