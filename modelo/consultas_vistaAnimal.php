<?php
include "conexion.php";

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