

@extends('layouts.header')
@section('content')

<?php
        if(1 < 0){
            echo "1 es menor";
        } else {
            echo "1 es mayor";
        }
        echo "<hr>";

//Dos variables y compararciones

        $edad1 = 12;
        $edad2 = 10;

        if($edad1 < $edad2){
            echo "Edad 1 es menor";
        } 
        elseif ($edad1 == $edad2){
            echo "son iguales";
        }
        else {
            echo "Edad 2 es menor";
        }
?>

@endsection