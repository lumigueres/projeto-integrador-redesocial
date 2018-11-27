<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FaqController extends Controller
{
    public function  exibir(){
        return view('faq');
    }
    
    public function quemSomos(){
        return view('quemsomos');
    }

    public function start(){
        return view ('start');
    }
}
