<!DOCTYPE html>
<html lang="en">

<body>
    <
    <!-- CODIGOS DE ERROR RECIBIDOS POR GET -->
    <?php
    include "nav.php";
    include "../funciones/funciones_procesarForm.php";
    $id=$_GET['mostrar_form'];
   

if ($id==1){

   echo ("
   <div class='form'>
        <form id='formulario_index'action='#' method='post' >
             <label>Crea un usuario:</label>
             <div class='input-group mb-2 bs-dark'>
                 <input type='text' name='crearNombre' placeholder='nombre' class='form-control'
                     aria-label='Sizing example input' aria-describedby='inputGroup-sizing-default'>
             </div>
             <div class='input-group mb-2'>
                 <input type='text' name='crearApellido' placeholder='apellidos' class='form-control'
                     aria-label='Sizing example input' aria-describedby='inputGroup-sizing-default'>
             </div>
             <div class='input-group mb-2'>
                 <input required type='text' id='correo' onblur='validarEmail()' name='crearCorreo' placeholder='email*' class='form-control'
                 aria-label='Sizing example input' aria-describedby='inputGroup-sizing-default' >
             </div>
             <div class='input-group mb-2'>
                 <input required type='password' name='crearPw' placeholder='contraseña*' class='form-control'
                     aria-label='Sizing example input' aria-describedby='inputGroup-sizing-default'>
             </div>
             <p>Si perteneces a una asociación puedes añadirlo en el perfil </p>

         <button type='submit' name='submitCrear' class='btn btn-primary'>Crear</button>
         <div id='error-correo' style='color:red;'></div>
        </form>
    </div>");
    
}
//TODO: insertar imagen en base de datos, no fun borrar protectora
if ($id==2){
 echo ("  
 <div>
 <p class='linea'><u> Para asociar una protectora hay que tener en cuenta:</u><br>
 1. Cada asocciación puede tener solo un email asociado, que será el encargado de gestionar la cuenta
 <br>2.Las asociaciones tienes bonificaciones en los anuncios <br>
 3.Nos tomamos muy en serio la seguridad y la usabilidad de esta plataforma, por lo que revisaremos todas las solicitudes.<br>
 4. Si decides borrar la protectora los animales  publicados seguiran perteneciendo a tu correo electronico <button  name='borrar_asociacion' class='btn btn-primary'>Borrar Protectora</button></p>
 </div>
 <div class='form'>             
    <form name='formulario' action='#' method='post' >  
        <label>Asegurate de tener los permisos necesarios para gestionar la protectora.<br></label>         
                                
        <input type='text' name='nombreP' placeholder='nombre de la protectora' class='form-control'
            aria-label='Sizing example input' aria-describedby='inputGroup-sizing-default'>
        <input type='text' name='ciudadP' placeholder='ciudad' class='form-control'
            aria-label='Sizing example input' aria-describedby='inputGroup-sizing-default'>
        <input type='text' name='telefonoP' placeholder='teléfono' class='form-control'
            aria-label='Sizing example input' aria-describedby='inputGroup-sizing-default'>
        <input type='text' name='web' placeholder='web o red social' class='form-control'
            aria-label='Sizing example input' aria-describedby='inputGroup-sizing-default'>
            <label>Inserta un documento que te acredite: </label>
            <input type='file' class='insertarImagen' name='insertarImagen'>  <br><br>   
        <button type='submit' name='submit_asociacion' class='btn btn-primary'>Guardar</button> 
                                 
    </form>          
</div>
");

if(isset($_POST['borrar_asociacion'])){
    $nombreP='' ;
    $ciudadP='' ;
    $telefonoP='' ;
    $web='';
    $persona=$_SESSION['sesion'];

 
        if( $persona->set_protectora($nombreP,$ciudadP,$telefonoP,$web)){    
            header("Location: ../vista/perfil.php"); 
        }else{ echo "error"; }          
}
}
?>

</body>
</html>