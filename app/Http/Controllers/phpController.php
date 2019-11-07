<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class phpController extends Controller
{
    public function index_php () {
        return view('php.index');
    }
    public function estructuras_control () {
        return view('php.estructuras_control');
    }
    public function switch () {
        return view('php.switch');
    }
    public function arreglos_indexados () {
        return view('php.arreglos_indexados');
    }
    public function print_r_var_dump () {
        return view('php.print_r_var_dump');
    }
}
