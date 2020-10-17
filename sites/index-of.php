<?php include_once "1_head.php"; ?>

<body>
  <div class="container">
      <h2 class="my-2">Buscador con IndexOf</h2>
      <div class="row">
         <div class="one-half column">
            <input type="text" id="formulario" class="u-full-width">
            <ul id="resultado">

            </ul>
         </div>
         <div class="one-half column">
            <p class="m-cero">HTML</p>
<pre class="m-cero">
<code>&ltinput type="text" id="formulario"&gt
&ltul id="resultado"&gt

&lt/ul&gt
</code>
</pre>
            <p class="m-cero">JavaScript</p>
<pre class="m-cero">
<code>
const productos = [
   {nombre: 'Platano', precio: 20},
   {nombre: 'Pera', precio: 20},
   {nombre: 'Sandilla', precio: 20},
   {nombre: 'Melon', precio: 20},
   {nombre: 'Fresa', precio: 20}
]

const formulario = document.querySelector('#formulario');
const boton = document.querySelector('#boton');
const resultado = document.querySelector('#resultado');

const filtrar = () => {
   resultado.innerHTML = "";
   const texto = formulario.value.toLowerCase();

   for(let producto of productos){
     let nombre = producto.nombre.toLowerCase();

     //   platano       pla
     if(nombre.indexOf(texto) !== -1){
       resultado.innerHTML += `
         &ltli&gt${producto.nombre} - ${producto.precio}&lt/li&gt
       `
      } //if - busca e imprime productos encontrados
   } // for - hace bucle de productos

   if(resultado.innerHTML === ""){
     resultado.innerHTML += `
     &ltli&gtProductos NO encontrados...&lt/li&gt
     `
   } //if - imprime Productos NO encontrados.!
} //function filtrar

formulario.addEventListener('input', filtrar);
filtrar(); //para que aparescan todos los productos al empezar
</code>
</pre>
</div> <!-- one-half -->
      <div>
  </div>

  <script>

    const productos = [
      {nombre: 'Platano', precio: 20},
      {nombre: 'Pera', precio: 20},
      {nombre: 'Sandilla', precio: 20},
      {nombre: 'Melon', precio: 20},
      {nombre: 'Fresa', precio: 20}
    ]

    const formulario = document.querySelector('#formulario');
    const boton = document.querySelector('#boton');
    const resultado = document.querySelector('#resultado');

    const filtrar = () => {
      resultado.innerHTML = "";
      const texto = formulario.value.toLowerCase();

      for(let producto of productos){
        let nombre = producto.nombre.toLowerCase();

        //   platano       pla
        if(nombre.indexOf(texto) !== -1){
          resultado.innerHTML += `
            <li>${producto.nombre} - ${producto.precio}</li>
          `
        } //busca e imprime productos encontrados
      } // for hace bucle de productos

      if(resultado.innerHTML === ""){
        resultado.innerHTML += `
        <li>Producto no encontrado...</li>
        `
      } //imprime productos NO encontrados.!
    }

    // boton.addEventListener('click', filtrar);
    formulario.addEventListener('input', filtrar);
    filtrar(); //para que aparescan todos los productos al empezar


  </script>
</body>
</html>
