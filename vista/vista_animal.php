<?php

include "nav.php";
include "../funciones/funciones_procesarForm.php";

// Obtener el ID del animal de la URL
$id_animal = $_GET['id_animal'];

$query = "SELECT * FROM animales WHERE id = $id_animal";
$resultado = crearConexion()->query($query);

// Mostrar los datos del animal en la página web
if (mysqli_num_rows($resultado) > 0) {

	$fila = mysqli_fetch_assoc($resultado);
	echo "<div class='vista_animal'>
          <img  src=". $fila['foto']." width='280px'  width='280px'> </img><br>";
	echo "<div style='margin-left:40px'><p>Tipo: " . $fila['tipo'] . "</p>";
	echo "<p>Tamaño: " . $fila['tamaño'] . "</p>";
    echo "<p>Raza: " . $fila['raza'] . "</p>";
	echo "<p>Color: " . $fila['color'] . "</p>";
    echo "<p>Comunidad Autonoma: " . $fila['cc'] . "</p>";
	echo "<p>Ciudad: " . $fila['ciudad'] . "</p>";
    echo "<p>Contacto: " . $fila['correo'] . "</p>";
	echo "<p>Información: " . $fila['info'] . "</p></div>
        </div>";
	echo"<div>Información de la protectora:</div>";
	

} else {
	echo "Animal no encontrado";
}

/*
crear nueva  tabla protectoras_ciudad
*ingresando en nueva tabla ciudad y nombre y ID(foraneo?)
*/




?>