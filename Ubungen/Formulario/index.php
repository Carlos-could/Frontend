<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Mi Skeleton</title>
  <meta name="Mi Skeleton" content="">
  <meta name="author" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="//fonts.googleapis.com/css?family=Raleway:400,300,600" rel="stylesheet" type="text/css">

  <!-- CSS
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link rel="stylesheet" href="../../css/normalize.css">
  <link rel="stylesheet" href="../../css/skeleton.css">
  <link rel="stylesheet" href="../../css/styles.css">
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

  <!-- Favicon
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link rel="icon" type="../image/png" href="images/extraterrestre.png">

</head>

<body>

   <div class="container">
     <h3 class="my-2 text-center">Formulario de registro</h3>

    <div class="row my-4 pb-2 flex-center" style="border-bottom: 1px solid gray;">
      <div class="five columns">
        <form method="post" action="registrar.php">

          <label for="exampleEmailInput">Tu nombre</label>
          <input class="u-full-width" type="text" name="nombre" placeholder="nombre" id="exampleEmailInput">

          <label for="exampleEmailInput">Tu email</label>
          <input class="u-full-width" type="email" name="email" placeholder="test@mailbox.com" id="exampleEmailInput">

          <input class="button-primary" type="submit" name="mandalo" value="Mandalo">
        </form>
      </div> <!--5 columnas-->
    </div> <!--row-->

    <div class="row my-4 pb-2" style="border-bottom: 1px solid gray;">
      <div class="five columns">
        <h5>Creamos el formulario</h5>
        <p>Puntos importantes:</p>
        <ol>
          <li>method: Post o Get</li>
          <li>accion: archivo a leer despues de apretar "Submit"</li>
          <li>name de los inputs: para poder coger los datos</li>
        </ol>

      </div> <!-- 5 columnas-->

      <div class="seven columns">
        <p class="m-cero">HTML - Hacer el Formulario</p>
        <pre class="m-cero">
          <code>&lt;form method="post" action="registrar.php"&gt;
  &lt;label&gt;Tu nombre&lt;/label&gt;
  &lt;input type="text" name="nombre" &gt;

  &lt;label&gt;Tu email&lt;/label&gt;
  &lt;input type="email" name="email" &gt;

  &lt;input type="submit" name="mandalo" value="Mandalo"&gt;
&lt;/form&gt;</code>
</pre>
</div> <!-- 7 columnas-->
</div> <!--row-->

  <div class="row my-4 pb-2" style="border-bottom: 1px solid gray;">
    <div class="five columns">
      <h5>Creamos la conexión a la Base de Datos</h5>

    </div><!-- 5 columnas-->

    <div class="seven columns">
      <p class="m-cero">conex_db.php</p>
      <pre class="m-cero"><code>&lt;?php
  $servidor="localhost";
  $usuario="root";
  $clave="";
  $baseDeDatos="formulario";

  $enlace = mysqli_connect($servidor, $usuario, $clave, $baseDeDatos);

  if (!$enlace) {
    echo "hay un error";
  }
?&gt;</code>
  </pre>
    </div><!-- 7 columnas-->
  </div><!-- row-->

    <div class="row my-4 pb-2">
      <div class="five columns">
        <h5>Mandamos los datos a la Base de Datos </h5>
        <ol>
          <li>Recibimos los datos del formulario y los almacenarlos en variables</li>
          <ul>
            <p class="c-2">$nombre = $_POST['nombre']</p>
          </ul>
          <li>Hacemos la consulta SQL para insertar los datos en la BD</li>
          <ul>
            <p class="c-3">$insertarDatos = "INSERT INTO usuarios...</p>
          </ul>
          <li>Ejecutamos la consulta</li>
          <ul>
            <p class="c-1">$ejecutarInsertar = mysqli_query...</p>
          </ul>
        </ol>

      </div><!-- 5 columnas-->
      <div class="seven columns">
        <p class="m-cero">registrar.php</p>
        <pre class="m-cero">
          <code>&lt;?php
  include "conex_bd.php";

  if (isset($_POST['mandalo']) ) {
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];

    $insertarDatos = "INSERT INTO usuarios (nombre, email) VALUES('$nombre', '$email')";

    $ejecutarInsertar = mysqli_query($enlace, $insertarDatos);

    if (!$ejecutarInsertar) {
      echo "Error perro";
    }else{
      echo 'Registrado';
    }
  }

  mysqli_close($enlace);
  ?&gt;</code>
</pre>
      </div><!-- 7 columnas-->
    </div><!-- row-->

  </div> <!-- container -->

</body>
</html>
