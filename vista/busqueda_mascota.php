<!DOCTYPE html>
<html lang="en">

<body>    
    <?php     
   include "nav.php"; 
   include "../modelo/consultas_animal.php"; 
   ?>

<!--  PAGINA INTERFAZ BUSCAR MASCOTA-->
   <p class="entrada"> Aquí nuestros colaboradores publicarán las mascotas encontradas. <br>
            Recuerda que puedes filtrar por Ciudad, o rasgos del animal más predominantes.</p>
  
<div>
         <button name='mostrar_filtro' onclick="mostrar_filtro()" class='btn btn-primary' >FILTRO</button>
           
       <!--FILTRO ANIMALES hidden-->
         <form id="formulario2" name="formulario2" class="form" style="display: none;" action="#" method="post">
                       <div>
                            <label>tipo
                            <select name="tipo"> 
                            <option selected value="perro">perro</option>
                            <option  value="dato">gato</option>
                            <option  value="otros">otros</option>
                            </select>    </label>
                        </div>
                        <div>
                            <label>tamaño: 
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

  <div class="imagenes">
<!--  FILTRA O MUESTRA ULTIMOS-->
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
  
</body>
</html>