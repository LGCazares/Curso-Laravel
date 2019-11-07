@extends('layouts.header')
@section('content')


<?php
    //verciones anteriores
       $tecnologias = ['CSS','JavaScrip','HTML','jQUERY'];
?>
       <pre>
                <?php  print_r($tecnologias); ?>
       </pre>
<?php
       echo "<hr>";      
       print_r($tecnologias);
       echo "<hr>";
?>
<?php
       //vercion actual 
       echo "Esto es un ARRAY";
       echo " <br>";
       $lenguajes = array('CSS','HTML5','MySQL','AJAX');
       echo $lenguajes [0]; echo "<br>";
       echo $lenguajes [1]; echo "<br>";
       echo $lenguajes [2]; echo "<br>";
       echo $lenguajes [3]; echo "<br>";
?>

  <pre>
<?php
      echo "<hr>";
      echo "Esto lo hace var_dump"; 
      echo "<br>";
       var_dump ($lenguajes); 
 ?>

  </pre>


@endsection
