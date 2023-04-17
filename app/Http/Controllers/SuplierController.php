<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SuplierController extends Controller
{
    public function index(){
        return view('app/suplier/index');
    }
}
