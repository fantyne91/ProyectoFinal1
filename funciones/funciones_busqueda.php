<?php
 include "conexion.php";

 $tipo;
  $tamano;
  $raza;
 $color;
  $cc;
  $ciudad;

 if (isset($_POST['buscarAnimal'])){
    $tipo=$_POST['tipo'];
 $tamano=$_POST['tamano'];
 $raza=$_POST['buscaRaza'] ;
 $color=$_POST['buscaColor'];
 $cc=$_POST['buscaCC'];
 $ciudad=$_POST['buscaCiudad'];


 function animales($tipo,$tamano,$raza,$color,$cc,$ciudad){

    $con=crearConexion(); 
    $query="SELECT tipo,tamaño,raza,color,cc,ciudad FROM animales  
            where tipo LIKE '$tipo' AND tamaño= LIKE '$tamano'AND raza LIKE '$raza' AND color LIKE '$color' AND cc LIKE '$cc' AND ciudad LIKE '$ciudad'";
    $resultado=mysqli_query($con,$query);
    cerrarConexion($con);  

    if ($resultado) {

        /* obtener array asociativo */
        while ($datos= mysqli_fetch_array($resultado)) {
          //  printf ("%s (%s)\n", $row["tipo"],$row["tamano"],$row["raza"], $row["color"],$row["cc"],$row["ciudad"]);
          echo $datos;
        }
    }   
    return $resultado;
}

animales($tipo,$tamano,$raza,$color,$cc,$ciudad);
 
 }

 
 

 ?>