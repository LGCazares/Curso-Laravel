<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VueController extends Controller
{
    public function lista (){
        return view('vuejs.listas');
    }
}
