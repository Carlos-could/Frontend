<?php include_once "1_head.php"; ?>

<body class="">

   <div class="container">
      <div class="row my-2 text-center">
         <h3 class="">JS antes de aprender React</h3>
      </div> <!-- row -->
      <div class="row">
         <h4 class="c-1">var, let, const</h4>
         <ul>
            <li>var y let pueden no estar definidas - var i; let i;</li>
            <li>let es local - dentro de for, function, if...</li>
            <!-- <li class="c-1"><strong>Constantes</strong></li> -->
            <strong class="c-1">Constantes</strong>
            <li>const tiene que estar siempre definida - const i = 13; y no se pueden cambiar el valor i=15, esto da error.</li>
            <li>Pero la const SI se puede cambiar si es un objeto
<pre style = "width: 40%;"><code>const miObj = {
   nombre: "Carlos",
   puesto: "Frontend",
   pasatiempo: "Bailar"
};
miObj.nombre = "Che Carlitos";</code></pre>
            </li>
            <li>Se puede agregar otras propiedades, pero NO otro objeto
<pre style = "width: 40%;"><code>Esto SI se puede
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
            <h5>const funFlecha = ( ) => { } </h5>
            <li>Tienen return implicito - no necesita return</li>
            <li>Si solo hay una linea de codigo, se puede eliminar las llaver</li>
            <li>Si tiene solo un argumento se puede eliminar los ()</li>
<pre style = "width: 55%;"><code>ANTES
const cubo = (a) => {return a**3}
DESPUES
const cubo = a => a**3
</code></pre>
            <li>Esta sintaxis se usa mucho en los metodos map, filter, reduce</li>
<pre style = "width: 55%;"><code>let edades = [20, 16, 28, 17];

const mayores = edades.filter( edad => edad > 18);

console.log( mayores);
[20, 18]
</code></pre>
         </ul>
      </div>
      <div class="arrow">
         <h4 class="c-1">Destructuring</h4>
         <ul>
            <li>Se utiliza para extraer datos de los arrays y los objetos</li>
            <strong class="c-1">ejemplo en un objeto</strong class="c-1">
<pre  style = "width: 55%;" class=""><code>const juancho = {
   nombre: "Carlos",
   trabajo: "Desarrollo Web",
   esGUapo: true,
   edad: 47
}

const {nombre, trabajo} = juancho;

console.log(nombre)
Carlos

console.log(trabajo)
Desarrollo Web</code></pre>
      <strong class="c-1">ejemplo en un array</strong>
         <li>Te puedes saltar elementos poniendo comas , , vacias</li>
<pre  style = "width: 55%;"><code>const [primero, segundo, , cuarto] = [10, 20, 30, 40, 50];

console.log(primero);
10</code></pre>
         <strong class="c-1">... tambien en argumentos de una function</strong>
<pre  style = "width: 55%;" class=""><code>const juancho = {
   nombre: "Carlos",
   trabajo: "Desarrollador Web",
   esGUapo: true,
   edad: 47
}

const nuevoEmpleado = ( {nombre, trabajo} ) => {
   console.log(`Hola ${nombre}, a partir de hoy eres nuestro ${trabajo}`)
}

nuevoEmpleado(juancho)</code></pre>
         </ul>
      </div>
      <div class="row">
         <h4 class="c-1">...Rest / ...Spread</h4>
         <ul>
            <h5>Sintaxis Rest</h5>
            <li>representa al resto de valores</li>
            <li>Esta sintaxis se utiliza dentro de un Destructuring de un array o objeto</li>
            <strong class="c-1">ejemplo en un array</strong>
<pre  style = "width: 55%;" class=""><code>const [primero, ...elResto] = [1,2,3,4,5,6,7,8,9,0]

console.log(primero)
1

console.log(elResto)
[2,3,4,5,6,7,8,9,0]</code></pre>

            <strong class="c-1">ejemplo en un objeto</strong>
<pre  style = "width: 55%;" class=""><code>const juancho = {
   nombre: "Carlos",
   trabajo: "Desarrollador Web",
   esGUapo: true,
   edad: 47
}

const {nombre, ...restoDeDatos} = juancho;

console.log(restoDeDatos)
{
   trabajo: "Desarrollador Web",
   esGUapo: true,
   edad: 47
}</code></pre>
<h5>Sintaxis Spread o de propagacion</h5>
<li>Copia un array o un objeto, a un nuevo array o a un nuevo objeto</li>
<li>Nos sirve para fucionar datos que estan relacionados, pero en diferentes objetos</li>
<pre  style = "width: 55%;" class=""><code>const juancho = {
   nombre: "Carlos",
   trabajo: "Desarrollador Web",
   esGUapo: true,
   edad: 47
}

const empleado = {
   ...juancho,
   sueldo: "3,000 €",
   proyecto: "el nuevo facebook",
   tazasDeCafe: 4
}</code></pre>
<p>Cuando se escribe <strong>...juancho </strong> dentro de empleado, los datos de juancho <strong>se añaden</strong> a empleado</p>
<pre  style = "width: 55%;" class=""><code>console.log(empleado)
{
   nombre: "Carlos",
   trabajo: "Desarrollador Web",
   esGUapo: true,
   edad: 47,
   sueldo: "3,000 €",
   proyecto: "el nuevo facebook",
   tazasDeCafe: 4
}</code></pre>
         </ul>
      </div>
      <div class="arrow">
         <h4 class="c-1">Modulos import y export</h4>
         <ul>
            <li>Sirve para reutilizar codigo ya escrito en otro archivo</li>
         </ul>
            <strong class="c-1">ejemplo... usar una function que esta en otro archivo (operaciones.js)</strong>
            <ol>


            <li>Escribimos export delante de la function a exportar</li>
<pre><code>NOMBRE DEL ARCHIVO operaciones.js

const suma = (a, b) => a + b;
const resta = (a, b) => a - b;
export const multiplicacion = (a, b) => a * b;
const division = (a, b) => a / b;
</code> </pre>
<li>Importamos la function desde el archivo scripts.js</li>
<pre><code>NOMBRE DEL ARCHIVO scripts.js

import {multiplicacion} from './operaciones.js';

console.log( multiplicacion(2,2) )
4</code> </pre>
<li>para que funcione: <strong>añadir type="module"</strong> dentro de la etiqueta script en <strong>index.html</strong> </li>
<pre><code>&lt;body&gt;
   &lt;h1&gt;Repaso JS&lt;/h1&gt;
   &lt;script type="module" src="scripts.js"&gt;&lt;/script&gt;
&lt;/body&gt;
</code> </pre>
      </ol>
      </div>
   </div> <!-- container -->

 <script>
 </script>
</body>
</html>
