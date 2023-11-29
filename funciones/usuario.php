
<?php 

class Usuario {
    private $id;
    private $nombre;
    private $apellido;
    private $correo;
    private $pw;  
    public $nombreP;
    public $fecha;
    
/** 
 * *CONSTRUCTOR 
*/
    public function __construct($id,$nombre,$apellido,$correo,$pw,$nombreP,$fecha) {
        $this->id=$id;
        $this->nombre=$nombre;
        $this->apellido=$apellido;
        $this->correo=$correo;
        $this->pw=$pw;        
        $this->nombreP=$nombreP;
        $this->fecha=$fecha;        
    }
    /** SI NOMBREP ESTÁ VACIO SE BORRA DE TABLA PROTECTORAS Y SE GUARDA COMO NULL EN USUARIOS
     * SI NO ESTÁ VACIO SE ACTUALIZAN LOS DATOS DE LAS 2 TABLAS
     * añadir dato en objeto Persona con set() */ 
   
    function set_protectora($nombreP,$ciudadP,$telefonoP,$web){
        $conexion=crearConexion();


        if ($nombreP === '') {
           
            $query="DELETE FROM protectoras WHERE correo = '$this->correo'";
            $resultado=$conexion->query($query);
            $this->nombreP='';
            return $resultado;
            

        }else{

            $nombreP = strtolower($nombreP);
                try{
                    $query2="INSERT INTO protectoras (nombre,ciudad,telefono,correo,web) VALUES ('$nombreP','$ciudadP','$telefonoP','$this->correo','$web')
                    ON DUPLICATE KEY UPDATE nombre='$nombreP', ciudad='$ciudadP', telefono='$telefonoP', web='$web'";
                    $resultado2 = $conexion->query($query2);  
                       
                    $query1="UPDATE usuarios SET nombreP='$nombreP' WHERE correo = '$this->correo'";
                    $resultado1=$conexion->query($query1);    
                        if ($resultado1){
                        
                           $this->nombreP=$nombreP;   
                        
                           return $resultado1;  
                       }  
                   
                }catch(Exception $e){
                
                    header("Location:../vista/errores_form.php?error_usuario=2");
                    exit();
                }

           
         
        }      
        cerrarConexion($conexion);
      }
//Imprime datos usuario
      function datosUsuario(){    
        
            echo ("<b> Nombre: " . $this->nombre.
            "<br>Apellido: " . $this->apellido.
            "<br> Correo: ".$this->correo.
            "<br>Protectora: ".$this->nombreP. "</b>     
            ");
            return true;
        }    
     
}
?>