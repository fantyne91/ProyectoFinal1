<?php 


	function crearConexion() {
		// Cambiar en el caso en que se monte la base de datos en otro lugar
		$host = "localhost";
		$user = "root";
		$pass = "";
		$bd = "proyectoanimal";

		//ESTABLECEMOS CONEXION  Completar...
               // $conexion = mysqli_connect($host, $user, $pass, $bd );
                $conexion= new mysqli($host, $user, $pass, $bd );
               if(!$conexion){
                   die("<br> Error de conexion con base de datos: ". mysqli_connect_error());
               }else {
                    return $conexion;
                }
	}


	function cerrarConexion($conexion) {
		
                mysqli_close($conexion);
	}


?>