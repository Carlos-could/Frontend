<?php include_once "1_head.php"; ?>

<body class="">

   <div class="container">
      <div class="row my-2 text-center">
         <h3 class="">Ajax</h3>
         <h5>Asynchronous JavaScript And XML</h5>
         <p class="c-1">Envia o trae datos externos sin recargar toda la página </p>
         <ul>
            <li>
               XMLHttpRequest() es un objeto de JS que realiza peticiones HTTP asíncronas (AJAX) de forma nativa desde Javascript.
            </li>
         </ul>
      </div> <!--row -->

      <div class="row">
         <ol>
            <li> Creamos la instancia - new XMLHttpRequest() </li>
            <li>Abrimos la conexion - ajax.open("GET", "ajax.txt", true)</li>
            <li>imprime el archivo traido - onreadystatechange ejecuta una funcion cuando readyState cambia</li>
            <li>Enviamos el Request (solicitud) - ajax.send();</li>
         </ol>
      </div> <!--row -->

      <div class="row my-4 pb-2" style="border-bottom: 1px solid gray;">
         <div class="six columns">
            <h5>Traer archivo de texto</h5>
<pre class="c-1">
<code>var boton = document.querySelector('#boton_txt')

function traerTXT() {

    var ajax = new XMLHttpRequest();

    ajax.open("GET", "ajax.txt", true);

    ajax.onreadystatechange = function (){
       if (this.readyState == 4 && this.status == 200) {
          var contenedor = document.querySelector('#contenedor')
          contenedor.innerHTML = this.responseText;
       }
    }
    ajax.send();
}
boton.addEventListener('click', traerTXT);
</code>
</pre>

               <button class="" id="boton_txt" >Traer TXT </button>
               <h3>
                  <div class="" id="contenedor"> </div>
               </h3>
         </div> <!-- izquierda -->

         <div class="six columns"> <!-- six columns - Derecha -->
            <h5>Traer archivo JSON</h5>
<pre class="c-1">
<code>function traerJSONGrande() {
   const ajax = new XMLHttpRequest();

   ajax.open("GET", "ajax.json", true);

   ajax.onreadystatechange = function (){

    if (this.readyState == 4 && this.status == 200) {
      const personal = JSON.parse(this.responseText);

      personal.forEach( function(persona){
         contenedor_json_grande.innerHTML += `
          &lt;ul&gt;
            &lt;li&gt; ID : ${persona.id}&lt;/li&gt;
            &lt;li&gt; Nombre : ${persona.nombre}&lt;/li&gt;
            &lt;li&gt; Empresa : ${persona.empresa}&lt;/li&gt;
            &lt;li&gt; Trabajo : ${persona.trabajo}&lt;/li&gt;
          &lt;/ul&gt;
       `
       }
       ajax.send();
   }</code>
</pre>
      <button class="" id="boton_json" >Traer Json </button>
      <button class="" id="boton_json_grande" >Traer Json Grande</button>
      <div class="" id="contenedor_json"> </div>
      <div class="" id="contenedor_json_grande"> </div>
</div> <!-- six columns - Derecha -->

      </div> <!-- row -->

      <div class="row">
        <div class="six columns">
          <h4>diccionario</h4>
          <ul>
            <li>request = solicitud</li>
            <li>response = respuesta</li>
            <li>instancia = hacer una copia</li>
          </ul>
          <h4>metodos</h4>
          <ul>
            <li>new -> crea un nuevo Request</li>
            <li>abort( ) -> cancela el Request</li>
            <li>getAllResponseHeaders( ) -> Retorna informacion - accion del header</li>
            <li>open( ) -> informacion basica del Request</li>
            <li>send( ) -> envia el Request al servidor</li>
            <li>set RequestHeader( ) -> agrega valores al header que se desea enviar</li>
          </ul>
        </div>

        <div class="six columns">
          <h4>propiedades</h4>
          <ul>
            <li>readyState = el estado del XMLHttpRequest</li>
            <ul>
              <li>0 = request sin iniciar</li>
              <li>1 = conexion establecida</li>
              <li>2 = request recibido</li>
              <li>3 = procesando el request</li>
              <li>4 = request finalizado y la respuesta esta lista</li>
            </ul>
            <li>onreadystatechange = define una funcion que debera ser llamada cuando el estado cambie. Esta funcion se ejecuda cada vez que readyState cambie.</li>
            <li>responseText = retorna la respuesta como string</li>
            <li>responseXML = retorna la respuesta como XML</li>
            <li>status = retorna la respuesta del request</li>
            <ul>
              <li>200: correcto / ok</li>
              <li>403: prohibido / Forbidden(derechos)</li>
              <li>404: no encontrado/ Not found</li>
            </ul>
          </ul>
        </div>

        </div> <!-- row -->

      </div>

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
