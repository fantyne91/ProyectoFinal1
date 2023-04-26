<?php
include "conexion.php";

function get_datosAnimal($id){
    $conexion=crearConexion();
    $query = "SELECT * FROM animales WHERE id = $id";
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
    cerrarConexion($conexion);
}
function get_datosProtectora($id){
    $conexion=crearConexion();
    $query="SELECT nombreP from protectora_animal where id=$id"	;
    $resultado = $conexion->query($query);

if (mysqli_num_rows($resultado) > 0) {
	$fila = mysqli_fetch_assoc($resultado);
    $nombreP=$fila['nombreP'];
	echo "<div>Nombre de la protectora:".$fila['nombreP']."</div><br>";

    // $query2="SELECT correo FROM usuarios WHERE nombreP= '$nombreP'";    
    // $resultado2=$conexion->query($query2);
    // $fila2 = mysqli_fetch_assoc($resultado2);
    // var_dump($resultado2);
    // if (isset($_COOKIE['datos'])) {
    //     if($_COOKIE['datos']===$fila2){
    //         echo "<button  onclick='editarAnimal($id)' name='editarAnimal' class='btn btn-primary'>editar animal</button><br>
    //         <button  onclick='borrarAnimal($id)' class='btn btn-primary'>eliminar animal</button>"; 
    //     }   
    // } 
}else {
	echo "El animal no pertenece a una Protectora";
}
}

// class Animal{
//     public $tipo;
//     public $tamano;
//     public $raza;
//     public $color;
//     public $cc;
//     public $ciudad;
//     public $infoA;
//     public $correo;
//     public $fecha;
//     public $nombreP;

//    // Declaración de un método $tipo,$tamano,$raza,$color,$cc,$ciudad,$infoA
//     public function __construct($tipo,$tamano,$raza,$color,$cc,$ciudad,$infoA,$correo,$nombreP) {
//          $this->tipo=$tipo;
//          $this-> tamano=$tamano;
//          $this-> raza=$raza;
//          $this-> color=$color;
//          $this-> cc=$cc;
//          $this-> ciudad=$ciudad;
//          $this-> infoA=$infoA;
//          $this-> correo=$correo;
//         $this->fecha =date("d-m-Y");
//         $this-> nombreP=$nombreP;
//     }
    
//     public function get_animal(){
//         echo  "tipo:" . $this->tipo . "<br> tamaño:". $this->tamano . "<br>Raza:" .$this->raza . "<br> Info:" .$this->infoA  ;
     
//        return  $this->tipo ;
       
//     }
// }

?>