<?php include_once "1_head.php"; ?>

<body class="">

   <div class="container">
      <div class="row my-2 text-center">
         <h3 class="">JS antes de aprender React</h3>
      </div> <!-- row -->
      <div class="row">
         <h4>Variables - var, let, const</h4>
         <ul>
            <li>var y let pueden no estar definidas - var i; let i;</li>
            <li>let es local - dentro de for, function, if...</li>
            <li>const tiene que estar siempre definida - const i = 13; y no se pueden cambiar el valor i=15, esto da error.</li>
            <li>Pero la const SI se puede cambiar si es un objeto
<pre style = "width: 30%;"><code>const miObj = {
   nombre: "Carlos",
   puesto: "Frontend",
   pasatiempo: "Bailar"
};
miObj.nombre = "Che Carlitos";</code></pre>
            </li>
            <li>Se puede agregar otras propiedades, pero NO otro objeto
<pre style = "width: 30%;"><code>Esto SI se puede
miObj.edad = 35;

Esto NO se puede
miObj = {nombre: "Rocco"}
</code></pre>
            </li>

         </ul>
      </div> <!-- var, let, const -->

      <div class="row">
         <h4 class="c-1">Objetos</h4>
         <ul>
            <li>En JS se puede definir objetos de diferentes formas: literal, clases</li>
            <li>{ llave : valor, }</li>
         </ul>
      </div>

      <div class="row">
         <h4 class="c-1">Template String</h4>
         <ul>
            <li>Concatenar valores con comillas inversas alt+96 ` ` y ${ variable }</li>
<pre style = "width: 55%;"><code>console.log(`Mi nombre es ${ miObj.nombre } y trabajo como ${ miObj.puesto }`)
</code></pre>
         </ul>
      </div>

      <div class="row">
         <h4 class="c-1">Arrow Functions</h4>
         <ul>
            <h5>const funFlecha = () => {} </h5>
            <li>Tienen return implicito - Si solo hay una linea de codigo, se puede eliminar las llaver</li>
<pre style = "width: 55%;"><code>const cubo = () => {return a**3}
const cubo = a => a**3
</code></pre>
<h1> minuto 13:30</h1>
         </ul>
      </div>


   </div> <!-- container -->

 <script>
 </script>
</body>
</html>
