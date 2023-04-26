
<?php 

class Usuario {
    private $id;
    private $nombre;
    private $apellido;
    private $correo;
    private $pw;  
    public $nombreP;
    
/** 
 * *CONSTRUCTOR PERSONA 
*/
    public function __construct($id,$nombre,$apellido,$correo,$pw,$nombreP) {
        $this->id=$id;
        $this->nombre=$nombre;
        $this->apellido=$apellido;
        $this->correo=$correo;
        $this->pw=$pw;        
        $this->nombreP=$nombreP;
        
    }
    //añadir dato en objeto Persona con set()
    function set_protectora($nombreP){
       
         try{
             $conexion=crearConexion();      
             $query="UPDATE usuarios SET nombreP='$nombreP' WHERE correo = '$this->correo'";
             $resultado = $conexion->query($query);

         }catch(Exception $e){
             header("Location: ../vista/errores_form.php?error_usuario=3"); 
             exit();
         }
         if ($resultado){

             $this->nombreP=$nombreP;   
             return $resultado;  
         }      
      }

      function datosUsuario(){    
        
            echo ("<b> Nombre: " . $this->nombre.
            "<br>Apellido: " . $this->apellido.
            "<br> Correo: ".$this->correo.
            "<br>Protectora: ".$this->nombreP. "</b>     
            ");
            return true;
        }    
        function editarAnimal(){
           
            if (isset($_POST['info'])){
              
              $info=$_POST['info'];

              var_dump($info);
              editar_Animal($id,$info);
              return $resultado;
          }

    } 
}
?>