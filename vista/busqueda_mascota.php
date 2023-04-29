<!DOCTYPE html>
<html lang="en">

<body>    
    <?php     
   include "nav.php"; 
   include "../funciones/funciones_procesarForm.php"; 
   ?>

   <p class="entrada"> Aquí nuestros colaboradores publicarán las ultimas mascotas encontradas. <br>
            Recuerda que puedes filtrar por Ciudad, o rasgos del animal.</p>
        <div style="display:flex;justify-content:center">
        <div style="display:flex;flex-direction:column;width:240px"> <button type='submit' name='mostrar_filtro' onclick="mostrar_filtro()" class='btn btn-primary' >FILTRO</button>
           
       <!--FILTRO ANIMALES hidden-->
         <form id="formulario2"name="formulario2" class="formFiltro" style="display: none;"action="#" method="post">
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
              </form>
</div>
</div>

  <div class="imagenes">

        <?php 
        if (isset($_POST['buscarAnimal'])){
            $tipo=$_POST['tipo'];
            $tamano=$_POST['tamano'];
           
        
            filtrarBusqueda($tipo,$tamano);
        }else{
            consultaUltimos();
        } 
        ?>    
   </div> 
  

<script>
    const filtro = document.getElementById('muestraFiltro');

// Agregar un event listener al botón para abrir la ventana modal
filtro.addEventListener('click', function() {
  filtro.style.display = 'none';
});
    </script>
  
</body>
</html>