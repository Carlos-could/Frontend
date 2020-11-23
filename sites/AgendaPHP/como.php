<?php include "inc/layout/header.php"; ?>

<div class="container">
  <div class="row my-4 pb-2" style="border-bottom: 1px solid gray;">
    <div class="five columns">
      <h5>Crear formulario</h5>
      <ul>
        <li>El atributo "action=#" esta vacio porque vamos a usar AJAX, por lo general escribimos un archivo.php que se conecta con la BD y almacena los datos en la BD.</li>
        <li>Lleva un ID porque vamos a seleccionarlo con JS</li>
      </ul>
    </div>  <!-- 5 columnas -->

    <div class="seven columns">
<pre class="m-cero">
<code>&lt;form action="#" method="post" id="contacto"&gt;

  &lt;label for="nombre"&gt;Nombre&lt;/label&gt;
  &lt;input type="text" id="nombre"&gt;

  &lt;input type="submit" value="Añadir"&gt;

&lt;/form&gt;
</code>
</pre>
  </div> <!-- 7 columnas -->
</div>  <!-- row -->

<div class="row my-4 pb-2" style="border-bottom: 1px solid gray;">
  <div class="five columns">
    <h5>Validar formulario</h5>
    <ul>
      <li>Cuando se apreta el boton <strong>Añadir,</strong> se ejecuta la funcion <strong>leerFormulario</strong></li>
      <li>La funcion lee los <strong>"inputs"</strong> del formulario</li>
      <li>Y con la condición <strong>"if"</strong> verificamos que no esten vacios</li>
    </ul>
  </div> <!-- 5 columnas -->

  <div class="seven columns">
     <p class="m-cero">app.js</p>
    <pre><code>formularioContactos.addEventListener('submit', leerFormulario);

function leerFormulario(e) {
    e.preventDefault();

    const nombre = document.querySelector('#nombre').value;
    const empresa = document.querySelector('#empresa').value;
    const telefono = document.querySelector('#telefono').value;

    if (nombre === "" || empresa === "" || telefono === "") {
        mostrarNotificacion("Todos los campos son obligatorios", "error");
      } else {
        console.log("Los campos estan llenos")
        }
}
</code> </pre>
  </div> <!-- 7 columnas -->
</div> <!-- row -->

<div class="row my-4 pb-2" style="border-bottom: 1px solid gray;">
  <div class="five columns">
    <h5>Crear mensaje, si los campos estan vacios</h5>
    <ol>
      <li>Creamos un "div"</li>
      <li>Añadimos clase al "div"</li>
      <li>Introducimos texto al "div"</li>
      <li>Lo colocamos en un lugar especifico</li>
    </ol>
    <ul>
      <li>clase notificacion es el recuadro</li>
      <li>clase error lo pinta de color rojo</li>
      <li>clase exito lo pinta de color verde</li>
    </ul>
  </div> <!-- 5 columnas -->

  <div class="seven columns">
    <p class="m-cero">app.js</p>
    <pre><code>function mostrarNotificacion(mensaje, clase) {
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
      </code>
    </pre>
  </div> <!-- 7 columnas -->
</div> <!-- row -->

<div class="row my-4 pb-2" style="border-bottom: 1px solid gray;">
  <div class="five columns">
    <h5>Despues de la validacion, pasar datos con formData()</h5>
    <p>Si los campos estan llenos, pasamos los datos de los campos a variables con formData()</p>
    <ol>
      <li>Instanciamos "formData"</li>
      <li>Pasamos los valores con el método "append"</li>
    </ol>
    <p>Si la llave "accion" contiene el valor "crear"</p>
    <ol>
      <li>Realizamos la peticion AJAX para pasar los datos a la BD</li>
    </ol>
  </div> <!-- 5 columnas -->

  <div class="seven columns">
    <p class="m-cero">app.js / dentro de la funcion leerFormulario()</p>
    <pre><code>if (nombre === "" || empresa === "" || telefono === "") {
  mostrarNotificacion("Todos los campos son obligatorios", "error");
} else {
  const infoContacto = new FormData();
  infoContacto.append ("nombre", nombre);
  infoContacto.append ("empresa", empresa);
  infoContacto.append ("telefono", telefono;
  infoContacto.append ("accion", accion);

  if(accion === "crear"){
    insertarDB(infoContacto);
  } else
  //editar contacto
}</code></pre>
</div><!-- 7 columnas -->
</div> <!-- row -->

<div class="row my-4 pb-2" style="border-bottom: 1px solid gray;">
  <div class="five columns">
    <h5>Realizar petición AJAX</h5>
    <ol>
      <li>crear el objeto - new XMLHttpRequest()</li>
      <li>Abrimos la conexion - open()</li>
      <ul>
        <li>en modelo-contactos.php, escribimos json_endode($_POST)</li>
        <li>json_endode() convierte cualquierdato en objeto</li>
      </ul>
      <li>Pasamos los datos - onload()</li>
      <li>Enviamos los datos - send()</li>
    </ol>
  </div><!-- 5 columnas -->

  <div class="seven columns">
    <pre><code>function insertarDB(datos) {
  const xhr = new XMLHttpRequest();
  xhr.open('POST', 'inc/modelos/modelo-contactos.php', true);
  xhr.onload = function () {
    if (this.status === 200) {
       const respuesta = JSON.parse(xhr.responseText);
    }
  }
  xhr.send(datos);
}</code></pre>
  </div> <!-- 7 columnas -->
</div> <!-- row -->

<div class="row my-4 pb-2" style="border-bottom: 1px solid gray;">
  <div class="five columns">
    <h5>Crear la base de datos</h5>
    <ol>
      <li>Necesita 4 parametros: usuario, password, host y nombre BD</li>
      <li>Y la clase "mysqli", la cual conecta PHP y la BD</li>
    </ol>

  </div><!-- 5 columnas -->

  <div class="seven columns">
    <p class="m-cero">bd.php</p>
<pre><code>define('DB_USUARIO', 'root');
define('DB_PASSWORD', '');
define('DB_HOST', 'localhost');
define('DB_NOMBRE', 'agendaphp');

$conn = new mysqli(DB_HOST, DB_USUARIO, DB_PASSWORD, DB_NOMBRE);</code></pre>
  </div> <!-- 7 columnas -->
</div> <!-- row -->

<div class="row my-4 pb-2" style="border-bottom: 1px solid gray;">
  <div class="five columns">
    <h5>Insertando las entradas a la BD</h5>
    <ol>
      <p>Si la "accion" es "crear":</p>
      <li>Validamos o limpiar los datos o las entradas, para que no escriban huevadas</li>
      <li>prepare statement - Asegurar que la web funcione si el server esta apagado</li>
    </ol>
  </div><!-- 5 columnas -->

  <div class="seven columns">
    <p class="m-cero">modelo-contactos.php</p>
<pre><code>if ($_POST['accion'] == 'crear') {
  require_once('../funciones/bd.php');

  $nombre = filter_var($_POST['nombre'], FILTER_SANITIZE_STRING);
  $empresa = filter_var($_POST['empresa'], FILTER_SANITIZE_STRING);
  $telefono = filter_var($_POST['telefono'], FILTER_SANITIZE_STRING);

  // prepare statement
  try {
    $stmt = $conn->prepare("INSERT INTO contactos (nombre, empresa, telefono) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $nombre, $empresa, $telefono);
    $stmt->execute();

    if($stmt->affected_rows == 1) {
      $respuesta = array(
        'respuesta' => 'correcto',
        'datos' => array(
          'nombre' => $nombre,
          'empresa' => $empresa,
          'telefono' => $telefono,
          'id_insertado' => $stmt->insert_id
        )
      );
    }
    $stmt->close();
    $conn->close();

    } catch(Exception $e) {
      $respuesta = array(
        'error' => $e->getMessage()
      );
    }
  echo json_encode($respuesta);
}</code></pre>
  </div> <!-- 7 columnas -->
</div> <!-- row -->


<div class="row my-4 pb-2" style="border-bottom: 1px solid gray;">
  <div class="five columns">
    <h5>377 - Elimar contacto de BD y DOM</h5>
    <ol>
      <p>Crear funcion eliminar contacto en app.js</p>
      <li>para ello hay que saber el id del contacto</li>
    </ol>
  </div><!-- 5 columnas -->

  <div class="seven columns">
    <p class="m-cero">app.js</p>
<pre><code></code></pre>
  </div> <!-- 7 columnas -->
</div> <!-- row -->

<div class="row my-4 pb-2" style="border-bottom: 1px solid gray;">
  <div class="five columns">
    <h5>378 - Elimar el contacto de BD y DOM</h5>
    <ol>
      <li>DB modelo.php y app.js</li>
      <li>DOM </li>
    </ol>
  </div><!-- 5 columnas -->

  <div class="seven columns">
    <p class="m-cero">app.js</p>
<pre><code></code></pre>
  </div> <!-- 7 columnas -->
</div> <!-- row -->

<div class="row my-4 pb-2" style="border-bottom: 1px solid gray;">
  <div class="five columns">
    <h5>379 - Traer datos del contacto para ser editado</h5>
    <ol>
      <li>Añadir funcion obtener contacto</li>
    </ol>
    <ol>
      <li>include funciones.php</li>
      <li>fetch_assoc para traer el contacto</li>
    </ol>
    <ol>
      <li>en input de cada campo añadir value con variables $contacto, asi pega el valor en el input</li>
      <li>crear $textoBtn y $accion para cambiar el nombre del boton (usamos operador ternario - wie 'if')</li>
      <button>añadir</button> <button>guardar</button>
    </ol>
  </div><!-- 5 columnas -->

  <div class="seven columns">
    <p class="m-cero">funciones.php</p>
<pre><code></code></pre>
<p class="m-cero">editar.php</p>
<pre><code></code></pre>
<p class="m-cero">formulario.php</p>
<pre><code></code></pre>
  </div> <!-- 7 columnas -->
</div> <!-- row -->

<div class="row my-4 pb-2" style="border-bottom: 1px solid gray;">
  <div class="five columns">
    <h5>380 - Actualizar los registros</h5>
    <ol>
      <li>crear funcion actualizarRegistro y colocarlo en la funcion leerFormulario</li>
      <li>Llamado AJAX en funcion actualizarRegistro</li>
    </ol>
    <ol>
      <li>crear el if de editar para enviar los datos a la BD</li>
    </ol>
  </div><!-- 5 columnas -->

  <div class="seven columns">
    <p class="m-cero">app.js</p>
<pre><code></code></pre>
    <p class="m-cero">modelo-contactos.php</p>
<pre><code></code></pre>
  </div> <!-- 7 columnas -->
</div> <!-- row -->


<div class="row my-4 pb-2" style="border-bottom: 1px solid gray;">
  <div class="five columns">
    <h5>381 - Buscar contactos</h5>
    <ol>
      <li>querzSelector($inputBuscar)</li>
      <li>Crear funcion buscarContactos</li>
    </ol>
  </div><!-- 5 columnas -->

  <div class="seven columns">
    <p class="m-cero">app.js</p>
<pre><code></code></pre>
  </div> <!-- 7 columnas -->
</div> <!-- row -->

<div class="row my-4 pb-2" style="border-bottom: 1px solid gray;">
  <div class="five columns">
    <h5>382 - Mostrar total de contactos</h5>
    <ol>
      <li>fin del proyecto</li>
    </ol>
  </div><!-- 5 columnas -->

  <div class="seven columns">
    <p class="m-cero">app.js</p>
<pre><code></code></pre>
  </div> <!-- 7 columnas -->
</div> <!-- row -->



</div>  <!-- container -->


<?php include "inc/layout/footer.php"; ?>
