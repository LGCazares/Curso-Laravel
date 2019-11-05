@extends('layouts.header')
@section('content')

<h1><?php
// Variables $
    $nombre = "Luis Gerardo";
    $apellido = "Cazares ";
    $edad = 23;
   echo $nombre ." ". $apellido . $edad; 
?> 
</h1>
<hr>
<?php
// Variables $
    echo "10+20= " . (10+20); 
?>
<hr>
<?php
$numero1 = 10;
$numero2 = 20;
$numero3 = 30;
$numero4 = 40;
$numero5 = 50;

// suma
echo "suma";
echo "<hr>";
echo $numero1 + $numero2;
echo "<hr>";
echo $numero2 + $numero3;
echo "<hr>";

//resta
echo "resta";
echo "<hr>";
echo $numero1 - $numero2;
echo "<hr>";
echo $numero2 - $numero3;
echo "<hr>";

// multiplicacion
echo "Multiplicacion";
echo "<hr>";
echo $numero1 * $numero2;
echo "<hr>";
echo $numero2 * $numero3;
echo "<hr>";

// Divicion
echo "Divicion";
echo "<hr>";
echo $numero1 / $numero2;
echo "<hr>";
echo $numero2 / $numero3;
echo "<hr>";

?>

@endsection