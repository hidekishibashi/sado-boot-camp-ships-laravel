<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index(){
        $test = ["テスト1","テスト2","テスト3"];
        dump($test);
        dd($test);
        ddd($test);
        return view('welcome',compact('test'));
    }
}