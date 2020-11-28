<?php include "arriba.php"; ?>
<div class="row">

<?php
  $persona = array(
    'nombre' => 'Juan Carlos',
    'pais' => 'Peru',
    'profesion' => 'Arbeitloss'
  );
 ?>

<pre>
  <?php print_r($persona); ?>
</pre>
<pre>
  <?php var_dump($persona); ?>
</pre>
<hr>
<?php echo $persona['profesion']; ?>
<hr>
<pre>
  <?php print_r (array_values($persona) ); ?>
</pre>

</div> <!-- row -->
<?php include "abajo.php"; ?>
