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
      <h2 class="my-2">Formulario de registro</h2>

      <div class="row">
        <div class="five columns">

            <form method="post" action="registrar.php">
               <div class="row">

               <div class="u-full-width" >
                  <label for="exampleEmailInput">Tu nombre</label>
                  <input class="u-full-width" type="text" name="nombre" placeholder="nombre" id="exampleEmailInput">
               </div>

               <div class="u-full-width" >
                  <label for="exampleEmailInput">Tu email</label>
                  <input class="u-full-width" type="email" name="email" placeholder="test@mailbox.com" id="exampleEmailInput">
               </div>

               </div> <!--row-->

               <input class="button-primary" type="submit" name="mandalo" value="Mandalo">
            </form>
         </div> <!-- one-half-->




      <div class="seven columns">
<p class="m-cero">HTML - Hacer el Formulario</p>
<pre class="m-cero">
<code>
 &lt;form method="post" action="registrar.php"&gt; &lt;!-- action="registrar.php --&gt;
     &lt;div&gt;
         &lt;label&gt;Tu nombre&lt;/label&gt;
         &lt;input type="text" name="nombre" &gt; &lt;!-- name="nombre" --&gt;
     &lt;/div&gt;

     &lt;div&gt;
         &lt;label&gt;Tu email&lt;/label&gt;
         &lt;input type="email" name="email" &gt; &lt;!-- name="email" --&gt;
     &lt;/div&gt;

     &lt;input type="submit" name="mandalo" value="Mandalo"&gt;
 &lt;/form&gt;
</code>
</pre>

<p class="m-cero">PHP - Crear conexión a la Base de Datos</p>
<pre class="m-cero">
<code>
&lt;?php
$servidor="localhost";
$usuario="root";
$clave="";
$baseDeDatos="formulario";

$enlace = mysqli_connect($servidor, $usuario, $clave, $baseDeDatos);

if (!$enlace) {
  echo "hay un error";
}
?&gt;
</code>
</pre>

<p class="m-cero">PHP - Mandar datos a la Base de Datos </p>
<pre class="m-cero">
<code>
&lt;?php
include "conex_bd.php";

if (isset($_POST['mandalo']) ) {
  //Recibir datos del formulario y almacenarlos en variables
  $nombre = $_POST['nombre'];
  $email = $_POST['email'];

  //Consulta SQL para insertar en la BD
  $insertarDatos = "INSERT INTO usuarios (nombre, email) VALUES('$nombre', '$email')";

  //Ejecutar consulta
  $ejecutarInsertar = mysqli_query($enlace, $insertarDatos);

  if (!$ejecutarInsertar) {
      echo "Error perro";
  }else{
      echo 'Registrado';
  }
}

mysqli_close($enlace);
?&gt;

</code>
</pre>

    </div> <!-- one-half -->

</div> <!-- row-->
  </div> <!-- container -->

</body>
</html>
