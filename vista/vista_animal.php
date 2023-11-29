<!DOCTYPE html>
<html lang="es">

<body>
<div>

<?php
include "nav.php";
include "../modelo/consultas_vistaAnimal.php";

// Obtener el ID del animal de la URL
$id = $_GET['id_animal'];

//imprime datos animal 
	 get_datosAnimal($id);?></div> <div> <?php
	 get_datosProtectora($id);
	
	?>

</div>

</body>
</html>

