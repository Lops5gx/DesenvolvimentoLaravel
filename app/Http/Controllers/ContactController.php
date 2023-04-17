<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function contact(){
        return view('site/contact');
    }

    public function getData($name){
        return "estamos aqui $name";
    }
}
