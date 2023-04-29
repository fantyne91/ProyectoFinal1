
//  abrir la ventana modal SUBMIT ANIMAL
function ventana_modal(){
    const btnAbrirModal = document.getElementById('submitAnimal');
    const miVentanaModal = document.getElementById('miVentanaModal');
    miVentanaModal.style.display = 'block';
}
/**MOSTRAR Y OCULTAR FORMULARIO CREAR USUARIO */
function mostrar_crearUsuario() {
    var formulario_index = document.getElementById("formulario_index");
    if (formulario_index.style.display === "none") {
        formulario_index.style.display = "block";
    }else{
        formulario_index.style.display = "none";        
    }
}
/**MOSTRAR FORM SET PROTECTORA */
function mostrar_form() {
    var formulario = document.getElementById("formulario");
    if (formulario.style.display === "none") {
        formulario.style.display = "flex";
    }else{
        formulario.style.display = "none";        
    }
}
/**MOSTRAR FILTRO BUSQUEDA */
function mostrar_filtro() {
    var formulario2 = document.getElementById("formulario2");
    if (formulario2.style.display === "none") {
        formulario2.style.display = "block";
    }else{
        formulario2.style.display = "none";        
    }
}

function validar_expresion(correo) {
    var re = /\S+@\S+\.\S+/;
    return re.test(correo);
} 

function cerrar_sesion() {
   // var cerrarSesion = document.getElementsByName("cerrar_sesion");
  window.location.href = "../funciones/cerrar_sesion.php";

}




