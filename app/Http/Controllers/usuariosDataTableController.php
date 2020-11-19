<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Usuario;

class usuariosDataTableController extends Controller
{
    public function index (){
        return view('datatable.lista_usuarios');
    }
}
