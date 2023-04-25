<?php

include "nav.php";
include "../funciones/funciones_procesarForm.php";

// Obtener el ID del animal de la URL
$id_animal = $_GET['id_animal'];
$conexion=crearConexion();
$query = "SELECT * FROM animales WHERE id = $id_animal";
$resultado = $conexion->query($query);

// Mostrar los datos del animal en la página web
if (mysqli_num_rows($resultado) > 0) {

	$fila = mysqli_fetch_assoc($resultado);
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
	echo "<p>Información: " . $fila['info'] . "</p></div>
        </div>";	
}		
$query2="SELECT nombreP from protectora_animal where id=$id_animal"	;
$resultado2 = $conexion->query($query2);

if (mysqli_num_rows($resultado2) > 0) {
	$fila = mysqli_fetch_assoc($resultado2);
	echo "<div>Nombre de la protectora:".$fila['nombreP']."</div><br>";
		

} else {
	echo "Animal no encontrado";
}

/*
crear nueva  tabla protectoras_ciudad
*ingresando en nueva tabla ciudad y nombre y ID(foraneo?)
*/




?>