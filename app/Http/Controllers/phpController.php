<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class phpController extends Controller
{
    public function index_php () {
        return view('php.index');
    }
}
