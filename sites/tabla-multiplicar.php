<?php include_once '1_head.php'; ?>
<body>

<div class="container">
   <div id="contenidoTablas" class="row">
      <h3 class="my-2 text-center c-1">Tabla de Multiplicar</h3>

   </div> <!-- Contenido tablas-->
   <div class="row">
<pre>
<code>
function tabla(numero){
  const tablaID = '#t'+ numero;
  const multi = 'multi' + numero;
  const multiID = '#'+multi;

   document.querySelector('#contenidoTablas').innerHTML += `

     &ltdiv id="${tablaID}" class="u-pull-left" style="margin:0 5rem"&gt
          &lth4&gtX  ${numero}&lt/h4&gt
          &ltul id='${multi}' class="multiplicacion"&gt
          &lt/ul&gt
     &lt/div&gt

    `
   for(let i=1; i<=12; i++){
       document.querySelector(multiID).innerHTML += `
       &ltli style="list-style:none"&gt${numero} x ${i} = &ltspan style="font-weight:bold "&gt${i*numero}&lt/span&gt &lt/li&gt
       `
     }
}

for(let i=1; i<=12; i++){
   tabla(i)
}
</code>
</pre>

   </div>
</div>


   <script type="text/javascript">
   function tabla(numero){
     const tablaID = '#t'+ numero;
     const multi = 'multi' + numero;
     const multiID = '#'+multi;

      document.querySelector('#contenidoTablas').innerHTML += `

        <div id="${tablaID}" class="u-pull-left" style="margin:0 5rem">
             <h4>X  ${numero}</h4>
             <ul id='${multi}' class="multiplicacion">
             </ul>
        </div>

       `
      for(let i=1; i<=12; i++){
          document.querySelector(multiID).innerHTML += `
          <li style="list-style:none">${numero} x ${i} = <span  class="c-1" style="font-weight:bold ">${i*numero}</span> </li>
          `
        }
   }

   for(let i=1; i<=12; i++){
      tabla(i)
   }
   </script>
</body>
</html>
