<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="utf-8">
  <title>Your page title here :)</title>
  <meta name="description" content="">
  <meta name="author" content="">

  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link href="//fonts.googleapis.com/css?family=Raleway:400,300,600" rel="stylesheet" type="text/css">

  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/skeleton.css">
  <link rel="stylesheet" href="css/prism.css">

  <link rel="icon" type="image/png" href="images/favicon.png">

</head>

<body>

  <!-- Primary Page Layout
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <div class="container">
    <h1 class="text-center mt-2">Formulario de registro</h1>
    <div class="row">
        <div class="one-half column mt-2">
            <form method="post" action="registrar.php">
            <div class="row">

              <div class="six columns" >
                <label for="exampleEmailInput">Tu nombre</label>
                <input class="u-full-width" type="text" name="nombre" placeholder="nombre" id="exampleEmailInput">
              </div>

              <div class="six columns" >
                <label for="exampleEmailInput">Tu email</label>
                <input class="u-full-width" type="email" name="email" placeholder="test@mailbox.com" id="exampleEmailInput">
              </div>

            </div>

            <input class="button-primary" type="submit" name="mandalo" value="Mandalo">
        </form>

        </div>
    </div>

    <div class="row">
        <h4>Formulario</h4>
        <pre>
            <code class="language-html">
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

        <h4>Conexión a la Base de Datos</h4>
        <pre>
            <code class="language-php">
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
        <h4>Insertar regitros </h4>
        <pre>
            <code class="language-php">
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

    </div> <!-- row -->

  </div> <!-- container -->

<!-- End Document
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <script src="js/prism.js">

  </script>
</body>
</html>
