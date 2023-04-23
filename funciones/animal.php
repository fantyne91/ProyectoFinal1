<?php
class Animal{
    public $tipo;
    public $tamano;
    public $raza;
    public $color;
    public $cc;
    public $ciudad;
    public $infoA;
    public $correo;
    public $fecha;
    public $nombreP;

   // Declaración de un método $tipo,$tamano,$raza,$color,$cc,$ciudad,$infoA
    public function __construct($tipo,$tamano,$raza,$color,$cc,$ciudad,$infoA,$correo,$nombreP) {
         $this->tipo=$tipo;
         $this-> tamano=$tamano;
         $this-> raza=$raza;
         $this-> color=$color;
         $this-> cc=$cc;
         $this-> ciudad=$ciudad;
         $this-> infoA=$infoA;
         $this-> correo=$correo;
        $this->fecha =date("d-m-Y");
        $this-> nombreP=$nombreP;
    }
    
    public function get_animal(){
        echo  "tipo:" . $this->tipo . "<br> tamaño:". $this->tamano . "<br>Raza:" .$this->raza . "<br> Info:" .$this->infoA  ;
     
       return  $this->tipo ;
       
    }
}
?>