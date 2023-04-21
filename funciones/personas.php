
<?php 

class Persona {
    
    private $nombre;
    private $apellido;
    private $correo;
    private $pw;
    private $protectora;
    private $nombreP;
    
/** 
 * todo: pendiente poder modificar email?
*/
    public function __construct($nombre,$apellido,$correo,$pw,$protectora,$nombreP) {
        $this->nombre=$nombre;
        $this->apellido=$apellido;
        $this->correo=$correo;
        $this->pw=$pw;
        $this->protectora=$protectora;
        $this->nombreP=$nombreP;
        
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function setNombre($nombre) {
        // actualizar el nombre de la persona en la base de datos
        // actualizar la propiedad de la clase
    }

    public function getEdad() {
        return $this->edad;
    }

    public function setEdad($edad) {
        // actualizar la edad de la persona en la base de datos
        // actualizar la propiedad de la clase
    }

    public function getEmail() {
        return $this->correo;
    }

   
}
?>