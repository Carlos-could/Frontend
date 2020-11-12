const formularioContactos = document.querySelector('#contacto'),
      listadoContactos = document.querySelector('#listado-contactos tbody');
eventListeners();
function eventListeners() {
    //Cuando el formulario de crear o editar se ejecuta
    formularioContactos.addEventListener('submit', leerFormulario);

    //Listener para eliminar el boton
    listadoContactos.addEventListener('click', eliminarContacto);
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
        //Pasar la validacion, crear llamado a Ajax
        const infoContacto = new FormData();
        infoContacto.append('nombre', nombre);
        infoContacto.append('empresa', empresa);
        infoContacto.append('telefono', telefono);
        infoContacto.append('accion', accion);

        // console.log('Esta info es de formData()');
        // console.log(...infoContacto);
        if (accion === 'crear') {
           insertarDB(infoContacto);
        }else{
           // editar el contacto
        } //if crear
    } //else formData
} //function leerFormulario

// Insertar en la base de datos via AJAX
function insertarDB(datos) {
   //llamado a ajax

   //crear el objeto
   const xhr = new XMLHttpRequest();
   //abrir la conexion
   xhr.open('POST', 'inc/modelos/modelo-contactos.php', true);
   //pasar los datos
   xhr.onload = function () {
      if (this.status === 200) {
        console.log(JSON.parse(xhr.responseText));
         const respuesta = JSON.parse(xhr.responseText);

         //Inserta un nuevo elemento a la tabla
         const nuevoContacto = document.createElement('tr');

         nuevoContacto.innerHTML = `
          <td>${respuesta.datos.nombre}</td>
          <td>${respuesta.datos.empresa}</td>
          <td>${respuesta.datos.telefono}</td>
         `;

         //crear contenedor para los botones
         const contenedorAcciones = document.createElement('td');
         contenedorAcciones.classList.add('acciones')

         //crear el icono de editar
         const iconoEditar = document.createElement('i');
         iconoEditar.classList.add('fas', 'fa-pen-square', 'btn-doscinco');

         //crear el enlace para iconoEditar
         const btnEditar = document.createElement('a');
         btnEditar.appendChild(iconoEditar);
         btnEditar.href = `editar.php?id=${respuesta.datos.id_insertado}`;
         btnEditar.classList.add('btn-editar', 'btn', 'c-5');

         //agregarlo al padre
         contenedorAcciones.appendChild(btnEditar);

         //crear el icono de eliminar
         const iconoEliminar = document.createElement('i');
         iconoEliminar.classList.add('fas', 'fa-trash-alt', 'btn-dos');

         //crear el boton de iconoEliminar
         const btnEliminar = document.createElement('button');
         btnEliminar.appendChild(iconoEliminar);
         btnEliminar.setAttribute('data-id', respuesta.datos.id_insertado);
         btnEliminar.classList.add('btn-borrar', 'btn', 'm-cero', 'p-cero', 'c-1');

         //agregarlo al padre
         contenedorAcciones.appendChild(btnEliminar);

         //agregar al try {
         nuevoContacto.appendChild(contenedorAcciones);

        //agregarlo con los Contactos
        listadoContactos.appendChild(nuevoContacto);

        //resetear el formularioContactos
        document.querySelector('form').reset();

        //mostrar la Notificacion
        mostrarNotificacion('Contacto creado correctamente', 'correcto');
         }
      }//f

      //enviar los datos
      xhr.send(datos);
   }

//eliminar el contactos

function eliminarContacto (e){
  if (e.target.parentElement.classList.contains('btn-borrar') ) {
    const id = e.target.parentElement.getAttribute('data-id');
    // console.log(id);
    // preguntar al usuario
    const respuesta = confirm('Estas seguro?');

    if (respuesta) {
      //llamado a ajas
      //crear el objeto
      const xhr = new XMLHttpRequest();

      //abrir la conexion
      xhr.open('GET', `inc/modelos/modelo-contactos.php?id=${id}&accion=borrar`, true);

      //leer la respuesta
      xhr.onload = function() {
        if (this.status === 200) {
          const resultado = JSON.parse(xhr.responseText);

          console.log(resultado);

          if (resultado.respuesta == 'correcto') {
            //eliminar el registro del DOM
            console.log(e.target.parentElement.parentElement.parentElement);
            e.target.parentElement.parentElement.parentElement.remove();

            //mostrar Notificacion de eliminado
            mostrarNotificacion('Contacto eliminado correctamente', 'correcto');
          } else {
            mostrarNotificacion('Hubo un error', 'error');
          }
        }
      }
      //enviar la peticion
      xhr.send();
    }
  }
}





//Notificacion en pantalla
function mostrarNotificacion(mensaje, clase) {
    const notificacion = document.createElement('div');
    notificacion.classList.add(clase, 'notificacion', 'sombra');
    notificacion.textContent = mensaje;

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
