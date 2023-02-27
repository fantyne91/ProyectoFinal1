<!DOCTYPE html>
<html lang='es'>
<head>
    <meta charset='UTF-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <!-- incluimos bootsatrap en css y java-->
    <link rel='stylesheet' href='css/bootstrap.min.css' type='text/css' >
    <link rel='stylesheet' href='css.css' type='text/css'>
    <title>Encuentra</title>   
</head>

<body>    
<header> 
       
</header> 
<?php 
include "crearUsuario.php";
include "nav.php";

      /**
       * *LLAMAMOS FUNCION LOGIN CON DATOS DEL POST
      * 
      */  
      validaLoggin();

 if(!empty($_COOKIE['datos'])){
      
   
?>
    </div>

    <div class='publicaAnimal'>

            <form class='formAnimal' action='#' method='POST'>
                   <p><b> Introduce los datos del animal encontrado:</b></p>
              
               <div class="input-group mb-2" style="">
                  <label>TIPO  
                  <select name="tipo"> </label>
                  <option selected value="perro">perro</option>
                  <option  value="dato">gato</option>
                  </select>    
             
                  <label>TAMAÑO: 
                  <select name="tamaño"> </label>
                  <option  value="pequeño">pequeño</option>
                  <option selected value="mediano">mediano</option>
                  <option  value="grande">grande</option>                    
                  </select>    
                  
                  <label>INSERTA IMAGEN                     </label>
                  
              </div>
               
              <div class="input-group mb-2 bs-dark">
                  <input type="text" name="raza" placeholder="RAZA" class="form-control  "
                      aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
              </div>

              <div class="input-group mb-2">
                  <input type="text" name="color" placeholder="COLOR" class="form-control"
                      aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
              </div>          
              <div class="input-group mb-2">
                  <input type="text" name="cc" placeholder="COMUNIDAD AUTONOMA" class="form-control"
                      aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
              </div>  
              <div class="input-group mb-2">
                  <input type="text" name="ciudad" placeholder="CIUDAD" class="form-control"
                      aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
              </div>  
       
              <div class='mb-3'>                       
                       <textarea class='form-control' name='infoA' maxlength='320' id='exampleFormControlTextarea1' rows='3' placeholder='DESCRIBE CUANDO Y DONDE LO ENCONTRASTE...'></textarea>
                       <button type='submit' name='submitAnimal' >Guardar</button>
             </div>
             </form>

            <?php if(isset($_POST['submitAnimal'])){

                guardarAnimal($_POST['tipo'],$_POST['tamaño'],$_POST['raza'],$_POST['color'],$_POST['cc'],$_POST['ciudad'],$_POST['infoA'],$_COOKIE['datos']);
                echo"Se ha guardado"  ;
            }?>
    </div>
         
  
<?php
   
}

    if (empty($_COOKIE["datos"])){
        
        echo("<div>
        <br> <p> Para publicar necesitamos que hagas Loggin o  <a href='index.php'>crees una cuenta: </a></p>' 
        <form  class='formLoggin' action='encontrado.php' method='post'>
    
                    <p class='text-black'>Haz loggin:</p>
                    <div class='input-group mb-2'>                
                       <input type='text' name='correo' placeholder='Introduce Email:' class='form-control' aria-label='Sizing example input' aria-describedby='inputGroup-sizing-default'>
                    </div>                
                    <div class='input-group mb-2'>                 
                       <input type='password' name='pw' placeholder='Introduce contraseña:' class='form-control' aria-label='Sizing example input' aria-describedby='inputGroup-sizing-default'>
                    </div>
                    <button type='submit'  name='submitLoggin' class='btn btn-primary btn-sm'>Acceder</button>
             </form>          
         </div> ");

        //  if isset(['submitLogin']) {
        //  }
        
    }    
?>
      
</body>
</html>