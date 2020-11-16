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
  <link rel="icon" type="../image/png" href="../../images/extraterrestre.png">

</head>
  <body class="bg-2 my-4">
    <div class="container">
      <div class="row  text-center">
        <h3 class='c-w'>Aprendiendo PHP</h3>
      </div>

      <div class="row">
        <?php

          $lenguajes = ['HTML', 'CSS', 'JavaScript', 'jQuery'];
          print_r($lenguajes);
          echo "<hr>";
          ?>
          <pre>
            <?php print_r($lenguajes); ?>
          </pre>
          <hr>


          <?php
          $backend = array('NodeJS', 'PHP', 'JAVA', 'MSQL', 20);
          print_r($backend);
         ?>
         <hr>
         <pre>
           <?php
            var_dump($backend);
            ?>
         </pre>
      </div>

    </div>

  </body>
</html>
