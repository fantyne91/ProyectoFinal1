<!DOCTYPE html>
<html lang="es">

<body>
<div>
<?php
include "nav.php";
//include "../funciones/funciones_procesarForm.php";
include "../modelo/consultas_vistaAnimal.php";

// Obtener el ID del animal de la URL
$id = $_GET['id_animal'];


	 get_datosAnimal($id);
	 get_datosProtectora($id);
	
	//  echo "<button  onclick='editarAnimal($id)' name='editarAnimal' class='btn btn-primary'>editar animal</button><br>
    //            <button  onclick='borrarAnimal($id)' class='btn btn-primary'>eliminar animal</button>";
	?>

</div>

</body>
</html>

