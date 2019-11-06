@extends('layouts.header')
@section('content')

<?php
        $lenguaje = "nada";

        switch($lenguaje){
            case 'PHP':
               echo "BackEnd";
               break;
            case 'JavaScrip':
                echo "FrondEnd y BackEnd";
                break;
            case 'HTML5':
                echo "Frond End";
                break;
            default:
                echo "no valido";
                break;       
        }
?>

@endsection
