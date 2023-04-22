<!DOCTYPE html>
<html lang="en">

<body>    
    <?php     
   include "nav.php"; 
   include "../funciones/funciones_procesarForm.php"; 
   ?>

   <p class="entrada"> Aquí nuestros colaboradores publicarán las ultimas mascotas encontradas. <br>
            Recuerda que puedes filtrar por Ciudad, o rasgos del animal.</p>
    <div>
       <main>
   
         <form  class="formFiltro" action="#" method="post">

             <button type='submit'  id='muestraFiltro' name='muestraFiltro' style='border:none'>FILTRO</button>

    <!--FILTRO ANIMALES -->
                <?php   if(isset($_POST['muestraFiltro'])){  ?>  

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
                            <input type="text" name="buscaColor" placeholder="color:" class="form-control"
                                aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                        </div>
                        <div class="input-group mb-2">
                            <input type="text" name="buscaRaza" placeholder="raza:" class="form-control"
                                aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                        </div>
                        <div class="input-group mb-2">
                            <input require type="text" name="buscaCC" placeholder="comunidad autonoma:" class="form-control"
                                aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                        </div>
                        <div class="input-group mb-2">
                            <input type="text" name="buscaCiudad" placeholder="ciudad:" class="form-control"
                                aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                        </div>
                        <button type="submit" name="buscarAnimal" class="btn btn-primary btn-sm">Buscar</button>           

                   <?php } ?>
              </form>
  </div>   

  <div class="imagenes">

        <?php 
        if (isset($_POST['buscarAnimal'])){
            $tipo=$_POST['tipo'];
            $tamano=$_POST['tamano'];
            $raza=$_POST['buscaRaza'] ;
            $color=$_POST['buscaColor'];
            $cc=$_POST['buscaCC'];
            $ciudad=$_POST['buscaCiudad'];
        
            filtrarBusqueda($tipo,$tamano,$raza,$color,$cc,$ciudad);
        }else{
            consultaUltimos();
        } 
        ?>    
   </div> 
   </main>

<script>
    const filtro = document.getElementById('muestraFiltro');

// Agregar un event listener al botón para abrir la ventana modal
filtro.addEventListener('click', function() {
  filtro.style.display = 'none';
});
    </script>
  
</body>
</html>