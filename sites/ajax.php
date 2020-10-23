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
         </div>

         <div class="six columns">
            <button class="" id="boton_json" >Traer Json </button>
            <h5>
               <div class="" id="contenedor"> </div>
            </h5>

         </div>

      </div>
   </div>

 <script>

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





 </script>
</body>
</html>
