<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class primerController extends Controller
{
    public function inicio () {
    return view('01.formularios');
    }

    public function guarda(Request $request) {
     return $request;
    }

}


