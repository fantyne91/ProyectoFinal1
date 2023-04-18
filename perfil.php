<!DOCTYPE html>
<html lang="es">
<head>   
    <title>Pet Finder</title>    
</head>

<body>
<?php
include "funciones/funciones_perfil.php";
include "vista/nav.php";;


if(!empty($_COOKIE['datos'])){
 
      
      echo "
      <div class='formInfo'>
       <form action='#' method='POST'>
         <p> Aquí podras añadir tus datos para que puedan contactarte. <br>    
           <b>Introduce el medio donde quieres que te contacten: telefono o e-mail.</b></p>
         
             <div class='mb-3'>                       
                  <textarea class='form-control' name='info' maxlength='320' id='exampleFormControlTextarea1' rows='3'></textarea>
                  <button type='submit' name='submitInfo' >Guardar</button>
             </div>
         </form>";
  

    /**
     * si hacemos submit info 
     * ! PONER EN PARALELO
     */
      if(isset($_POST['submitInfo'])) {
         guardarInfo();
      }
      //PINTAMOS DESPUËS PARA QUE RECARGE
      datosUsuario();


    }else{
        echo" <a href='encontrado.php'> Clica aquí para acceder a tu cuenta</a>";
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