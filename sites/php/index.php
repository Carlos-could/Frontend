<?php include_once 'arriba.php'; ?>

    <div class="row">
      <h5>array</h5>
      <h2><span>$</span>lenguajes = <span>array (</span> 'HTML', 'CSS', 'JavaScript' <span>) ;</span></h2>
      <hr>
    </div>

    <div class="row">
        <h5>array asociativo ( 'llave' => 'valor' )</h5>
        <pre><h2><span>$</span>lenguajes = <span>array (</span>
            'nombre' <span>=></span> 'Juan Carlos',
            'edad' <span>=></span> 2,
            'soltero' <span>=></span> true
            <span>) ;</span></h2></pre>
        <hr>
    </div>

    <div class="row">
        <h5>array multidimensionales ( 'llave' => 'valor' )</h5>
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

<?php include_once 'abajo.php'; ?>
