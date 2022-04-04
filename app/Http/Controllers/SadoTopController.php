<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SadoTopController extends Controller
{
    public function index(){
        return view('toppage');
    }
}
