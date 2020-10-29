const formularioContactos = document.querySelector('#contacto');
eventListeners();
function eventListeners() {
    //Cuando el formulario de crear o editar se ejecuta
    formularioContactos.addEventListener('submit', leerFormulario);
}
function leerFormulario(e) {
    // console.log(e)
    e.preventDefault();

    //leer los datos de los inputs
    const nombre = document.querySelector('#nombre').value;
    const empresa = document.querySelector('#empresa').value;
    const telefono = document.querySelector('#telefono').value;
    const accion = document.querySelector('#accion').value;

    if (nombre === "" || empresa === "" || telefono === "") {
        mostrarNotificacion('Todos los campos son obligatorios', 'error');
    } else {
        //Pasar la validacion
        const infoContacto = new FormData();
        infoContacto.append('nombre', nombre);
        infoContacto.append('empresa', empresa);
        infoContacto.append('telefono', telefono);
        infoContacto.append('accion', accion);

        if (accion === 'crear') {
           insertarDB(infoContacto);
        }else{
           // editar el contacto
        }
    }
}

// Insertar en la base de datos via AJAX
function insertarDB(datos) {
   //llamado a ajax

   //crear el objeto
   const xhr = new XMLHttpRequest();
   //abrir la conexion
   xhr.open('POST', 'inc/modelos/modelo-contactos.php', true);
   //pasar los datos
   xhr.onload = function () {
      if (this.status == 200) {
         // datos en array asociativo PHP
         console.log(xhr.responseText)
         // datos en objote JS - JSON.parse lo convierte
         console.log(JSON.parse(xhr.responseText));
         //leemos la respuesta de PHP
         const respuesta = JSON.parse(xhr.responseText);

         console.log(respuesta.empresa);
      }
   }
   //enviar los datos
   xhr.send(datos);
}
//Notificacion en pantalla
function mostrarNotificacion(mensaje, clase) {
    const notificacion = document.createElement('div');
    notificacion.classList.add(clase, 'notificacion', 'sombra');
    notificacion.textContent = 'Hubo un error';

    formularioContactos.insertBefore(notificacion, document.querySelector('form legend'));

    setTimeout (() => {
      notificacion.classList.add('visible');

      setTimeout(()=> {
         notificacion.classList.remove('visible');
         setTimeout(()=> {
            notificacion.remove();
         }, 500);
      }, 3000);
   }, 100);
}
