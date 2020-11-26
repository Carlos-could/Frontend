<?php include_once 'arriba.php'; ?>

<div class="row">


  <div class="eight columns">

    <div class="row">
      <h5 class="titulo">array</h5>
      <h2><span>$</span>lenguajes = <span>array (</span> 'HTML', 'CSS', 'JavaScript' <span>) ;</span></h2>
      <hr>
    </div>

    <div class="row">
        <h5 class="titulo">array asociativo ( 'llave' => 'valor' )</h5>
        <pre><h2><span>$</span>lenguajes = <span>array (</span>
            'nombre' <span>=></span> 'Juan Carlos',
            'edad' <span>=></span> 2,
            'soltero' <span>=></span> true
            <span>) ;</span></h2></pre>
        <hr>
    </div>

    <div class="row">
        <h5 class="titulo">array multidimensionales ( 'llave' => 'valor' )</h5>
        <pre><h2><span>$</span>persona = <span>array (</span>
            <span>'datos' => array </span>(
                'nombre' <span>=></span> 'Juan Carlos'<span>,</span>
                'edad' <span>=></span> 2<span>,</span>
                'soltero' <span>=></span> true
            )<span> ,</span>
            <span>'lenguajes' => array </span>(
                'frontend' <span>=></span> array ( 'HTML5', 'css', 'JS', 'jQuery' )<span>,</span>
                'backend' <span>=></span> array ( 'PHP', 'MySQL', 'NodeJS', 'Vue.JS' )
            )
    <span>) ;</span></h2></pre>
        <hr>
    </div>
  </div>
  <div class="four columns">
      <h5 class="titulo">concatenacion ( . ó " " )</h5>
      <h5 class="sintaxis_derecha"> echo $nombre . " " . $apellido;</h5>
      <p class="resultado_derecha"> Juan Moran</p>

      <h5 class="sintaxis_derecha"> echo "$nombre tiene $edad";</h5>
      <p class="resultado_derecha"> Juan tiene 22</p>

      <h5 class="titulo">if</h5>
      <pre>$numero=10;

if ( $numero % 2 == 0 ) {
    echo "el numero es par";
} else {
    echo "el numero es impar";
}</pre>
<p class="resultado_derecha">El numero es par</p>

      <h5 class="titulo">switch</h5>
      <pre>$lenguaje = "PHP";

switch( $lenguaje){
    case 'PHP':
        echo "Backend";
        break;
    case 'HTML5':
        echo "Frontend";
        break;
    default:
        echo "no valido";
        break;
}</pre>
<p class="resultado_derecha">Backend</p>

  </div>

</div>
<?php include_once 'abajo.php'; ?>
