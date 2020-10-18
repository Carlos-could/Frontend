<?php include_once '1_head.php'; ?>
<body>

<div class="container">
   <div id="contenidoTablas" class="row">

   </div> <!-- Contenido tablas-->

</div>


   <script type="text/javascript">
   function tabla(numero){
     const tablaID = '#t'+ numero;
     const multi = 'multi' + numero;
     const multiID = '#'+multi;

      document.querySelector('#contenidoTablas').innerHTML += `

        <div id="${tablaID}" class="u-pull-left">
             <h2>X  ${numero}</h2>
             <ul id='${multi}' class="multiplicacion">
             </ul>
        </div>

       `
      for(let i=1; i<=12; i++){
          document.querySelector(multiID).innerHTML += ` <li >${numero} x ${i} = <span>${i*numero}</span> </li> `
        }
   }

   for(let i=1; i<=12; i++){
      tabla(i)
   }
   </script>
</body>
</html>
