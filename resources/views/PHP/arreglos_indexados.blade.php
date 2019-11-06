@extends('layouts.header')
@section('content')

<?php
       //verciones anteriores

       $tecnologias = ['CSS','JavaScrip','HTML','jQUERY'];
       echo $tecnologias [0]; echo "<br>";
       echo $tecnologias [1]; echo "<br>";
       echo $tecnologias [2]; echo "<br>";
       echo $tecnologias [3]; echo "<br>";

        echo "<hr>";
       //vercion actual

       $lenguajes = array('CSS','HTML5','MySQL','AJAX');
       echo $lenguajes [0]; echo "<br>";
       echo $lenguajes [1]; echo "<br>";
       echo $lenguajes [2]; echo "<br>";
       echo $lenguajes [3]; echo "<br>";
?>

@endsection
