<?php include_once "1_head.php"; ?>

<body class="">

   <div class="container">
      <div class="row my-4">
         <div class="six columns">
            <button class="" id="boton_txt" >Traer TXT </button>
            <h3>
               <div class="" id="contenedor"> </div>
            </h3>

<pre class="my-4">
<code>
var boton = document.querySelector('#boton_txt')

function traerTXT() {
    // XMLHttpRequest() es un objeto de JS que realiza peticiones HTTP asíncronas (AJAX) de forma nativa desde Javascript.
    // 1. Creamos la instancia
    var ajax = new XMLHttpRequest();
    // Abrimos la conexion
    ajax.open("GET", "ajax.txt", true);
    // onreadystatechange ejecuta una funcion cuando readyState cambia
    // Si todo esta bien...imprime el archivo traido
    ajax.onreadystatechange = function (){
       if (this.readyState == 4 && this.status == 200) {
          console.log('Se cargo correctamente')
          var contenedor = document.querySelector('#contenedor')
          contenedor.innerHTML = this.responseText;
       }
    }
    ajax.send();
}
boton.addEventListener('click', traerTXT);
</code>
</pre>
         </div> <!-- six columns -->

         <div class="six columns">
            <button class="" id="boton_json" >Traer Json </button>
            <button class="" id="boton_json_grande" >Traer Json Grande</button>
               <div class="" id="contenedor_json"> </div>
               <div class="" id="contenedor_json_grande"> </div>

         </div> <!-- six columns -->

      </div> <!-- row -->
   </div> <!-- container -->

 <script>
//Traer TXT
var boton = document.querySelector('#boton_txt')

function traerTXT() {
    // XMLHttpRequest() es un objeto de JS que realiza peticiones HTTP asíncronas (AJAX) de forma nativa desde Javascript.
    // 1. Creamos la instancia
    var ajax = new XMLHttpRequest();
    // Abrimos la conexion
    ajax.open("GET", "ajax.txt", true);
    // onreadystatechange ejecuta una funcion cuando readyState cambia
    // Si todo esta bien...imprime el archivo traido
    ajax.onreadystatechange = function (){
       if (this.readyState == 4 && this.status == 200) {
          console.log('Se cargo correctamente')
          var contenedor = document.querySelector('#contenedor')
          contenedor.innerHTML = this.responseText;
       }
    }
    ajax.send();
}
boton.addEventListener('click', traerTXT);

//Traer JSON
var boton_json = document.querySelector('#boton_json')
function traerJSON() {
   const ajax = new XMLHttpRequest();
   ajax.open("GET", "ajax.json", true);
   ajax.onreadystatechange = function (){
    if (this.readyState == 4 && this.status == 200) {
       console.log('Se cargo correctamente')
       var contenedor_json = document.querySelector('#contenedor_json')
       var persona = JSON.parse(this.responseText);
       contenedor_json.innerHTML = `
          <ul>
            <li> ID : ${persona.id}</li>
            <li> Nombre : ${persona.nombre}</li>
            <li> Empresa : ${persona.empresa}</li>
            <li> Trabajo : ${persona.trabajo}</li>
          </ul>
       `
       } //if
   } //f

    ajax.send();
   }
boton_json.addEventListener('click', traerJSON);

//Traer JSON Grande
var boton_json_grande = document.querySelector('#boton_json_grande')
var contenedor_json_grande = document.querySelector('#contenedor_json_grande')

function traerJSONGrande() {
   const ajax = new XMLHttpRequest();
   ajax.open("GET", "ajaxs.json", true);

   ajax.onreadystatechange = function (){
    if (this.readyState == 4 && this.status == 200) {

       const personal = JSON.parse(this.responseText);

       personal.forEach( function(persona){
          contenedor_json_grande.innerHTML += `
             <ul>
               <p> ID : ${persona.id}</p>
               <li> Nombre : ${persona.nombre}</li>
               <li> Empresa : ${persona.empresa}</li>
               <li> Trabajo : ${persona.trabajo}</li>
             </ul>
          `
       });

    } //if
}//f
    ajax.send();
   }
boton_json_grande.addEventListener('click', traerJSONGrande);


 </script>
</body>
</html>
