<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(){
        return 'hello';
        // return view('welcome');
    }
    public function adminlte(){

        return view('adminlte');
    }
}
