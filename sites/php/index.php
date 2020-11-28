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
            'edad' <span>=></span> 22,
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
    <div class="row">
        <h5 class="titulo">foreach</h5>
        <hr>
    </div>
    <div class="row">
        <h5 class="titulo">for</h5>
        <hr>

    </div>
  </div>

  <div class="four columns">
    <h5 class="titulo">concatenacion ( . ó " " )</h5>
<pre>echo $nombre . " " . $apellido;
Juan Moran

echo "$nombre tiene $edad";
Juan tiene 22</pre>

    <h5 class="titulo">print_r  /  var_dump</h5>
    <?php $lenguajes = array('HTML', 'CSS', 'JS'); ?>
<pre>$lenguajes = array ( 'HTML', 'CSS', 'JS' );
print_r ( $lenguajes );
<?php print_r($lenguajes); ?>
var_dump ( $lenguajes );
<?php var_dump($lenguajes); ?></pre>

    <h5 class="titulo">array_values ( ) y array_keys ( )</h5>
    <?php $persona = array (
        'nombre' => 'Juan',
        'edad' => 22,
        'soltero' => true
    ); ?>
    <pre>print_r ( array_values ($persona) );</pre>
    <pre> <?php print_r ( array_values ($persona) ); ?></pre>
    <pre>print_r ( array_keys ($persona) );</pre>
    <pre> <?php print_r ( array_keys ($persona) ); ?></pre>



    <h5 class="titulo">agregar valores al array</h5>
    <?php $lenguajes = array('HTML', 'CSS', 'JS', 'Python'); ?>

<pre>$lenguajes = array ( 'HTML', 'CSS', 'JS' );
$lenguajes [ ] = "Python";</pre>

<pre><strong>Extraer el ultimo valor y agregarlo en una variable</strong>
$python = <strong>array_pop</strong> ( $lenguajes );</pre>

<pre><strong>Remover un elemento</strong>
<strong>unset</strong>( $lenguajes [1] );</pre>

<pre><strong>Extraer el primer elemento y agregarlo en una variable</strong>
$html = <strong>array_shift</strong> ( $lenguajes );</pre>

<pre><strong>Remover elementos y agregar otros</strong>
$lenguajes = array ( 'HTML', 'CSS', 'JS' );
$array = <strong>array_splice</strong> ( $lenguajes, 1, 1, array ('Angular') );

$array contendría lo extraido 'CSS'
$lenguajes contendría 'HTML, Angular y JS'</pre>

<h5 class="titulo">revisando si existe un valor en array</h5>
<pre>$lenguajes = array ( 'HTML', 'CSS', 'JS' );
$existe = <strong>in_array ( 'HTML', $lenguajes ) ;</strong>
echo $existe;
1

$existe2 = <strong>in_array</strong> ('Carlos', array_values ($persona) );</pre>

<h5 class="titulo">if</h5>
<pre>$numero=10;

if ( $numero % 2 == 0 ) {
echo "el numero es par";
} else {
echo "el numero es impar";
}

El numero es par</pre>

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
}

Backend</pre>
  </div>

</div>
<?php include_once 'abajo.php'; ?>
