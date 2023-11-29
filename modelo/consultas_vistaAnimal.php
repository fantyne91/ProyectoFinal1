<?php
include "conexion.php";
/**
 * CONSULTAS DE VISTA ANIMAL
  */

  /**OBTENER DATOS ANIMAL POR ID */
function get_datosAnimal($id){
    $conexion=crearConexion();
    $query = "SELECT * FROM animales WHERE id = $id";
    $resultado = $conexion->query($query);    
   
    if (mysqli_num_rows($resultado) > 0) {
    
        $fila = mysqli_fetch_assoc($resultado);
        //convertir formato con hora de bd  a formato sin hora en orden d-m-a
        $date= strtotime($fila['fecha']);
        $fecha = date('d-m-y', $date);



        echo "<div class='vista_animal'>
              <img  src=". $fila['foto']." width='280px'  width='280px'> </img><br>";
        echo "<div style='margin-left:40px'><p>Tipo: " . $fila['tipo'] . "</p>";
        echo "<p>Id: " . $fila['id'] . "</p>";
        echo "<p>Tamaño: " . $fila['tamaño'] . "</p>";
        echo "<p>Raza: " . $fila['raza'] . "</p>";
        echo "<p>Color: " . $fila['color'] . "</p>";
        echo "<p>Comunidad Autonoma: " . $fila['cc'] . "</p>";
        echo "<p>Ciudad: " . $fila['ciudad'] . "</p>";
        echo "<p>Contacto: " . $fila['correo'] . "</p>";
        echo "<p>Fecha publicación : " . $fecha. "</p>";
        echo "<p>Información: " . $fila['info'] . "</p></div>
            </div>";	
    }
    cerrarConexion($conexion);
}
/**OBTENER DATOS PROTECTORA SI PERTENECE  */
function get_datosProtectora($id){
    $conexion=crearConexion();
    $query="SELECT nombreP from protectora_animal where id_animal='$id'"	;
    $resultado = $conexion->query($query);

if (mysqli_num_rows($resultado) > 0) {
	$fila = mysqli_fetch_assoc($resultado);
    $nombreP=$fila['nombreP'];
	echo "<div>Nombre de la protectora:".$nombreP."</div><br>";

    return $resultado;
}else {
	echo "El animal no pertenece a una Protectora";
}
}



?>