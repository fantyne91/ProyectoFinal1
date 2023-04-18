<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">   
    <title>Pet Finder</title>    
</head>

<body>

    <?php 
    
   include "funciones/funciones_busqueda.php";
   include "vista/nav.php";
   ?>

  <main>
  <p> Aquí nuestros colaboradores publicarán las ultimas mascotas encontradas. <br>
            Recuerda que puedes filtrar por Ciudad, o rasgos del animal. </p>
      
  <form  class="formFiltro" action="#" method="post">
    <button type='submit' name='muestraFiltro'>Filtrar</button>
    <!--FILTRO ANIMALES -->
    <?php
     if(isset($_POST['muestraFiltro'])){

     ?>       
        
            <div class="input-group mb-2">
                <label>TIPO  
                <select name="tipo"> 
                <option selected value="perro">perro</option>
                <option  value="dato">gato</option>
                <option  value="otros">otros</option>
                </select>    </label>
           
                <label>TAMAÑO: 
                <select name="tamano"> 
                <option  value="pequeno">pequeño</option>
                <option selected value="mediano">mediano</option>
                <option  value="grande">grande</option>                    
                </select>    </label>
            </div>
            <div class="input-group mb-2">
                <input type="text" name="buscaColor" placeholder="Color:" class="form-control"
                    aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
            </div>
            <div class="input-group mb-2">
                <input type="text" name="buscaRaza" placeholder="Raza:" class="form-control"
                    aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
            </div>
            <div class="input-group mb-2">
                <input require type="text" name="buscaCC" placeholder="Por Comunidad Autonoma:" class="form-control"
                    aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
            </div>
            <div class="input-group mb-2">
                <input type="text" name="buscaCiudad" placeholder="Por ciudad:" class="form-control"
                    aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
            </div>
            <button type="submit" name="buscarAnimal" class="btn btn-primary btn-sm">Buscar</button>
        </form>
     <?php   
    } 
    ?>
         <!--IMAGENES ULTIMOS PERDIDOS -->
        
    <div class="imagenes">
       

        <div class="imagen">
            <div class="card" style="width: 13rem;">
                <img src="#" class="card-img-top" alt="...">
    
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
    
        </div>
        <div class="imagen">
            <div class="card" style="width: 13rem;">
                <img src="#" class="card-img-top" alt="...">
    
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
            
        </div>
            <div class="imagen">
                <div class="card" style="width: 13rem;">
                    <img src="#" class="card-img-top" alt="...">
        
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                            card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
        
            </div>
            <div class="imagen">
                <div class="card" style="width: 13rem;">
                    <img src="#" class="card-img-top" alt="...">
        
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                            card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
        
            </div>
            <div class="imagen">
                <div class="card" style="width: 13rem;">
                    <img src="#" class="card-img-top" alt="...">
        
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                            card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
        
            </div>
        
    </div>
  </main>
  
</body>
</html>