<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;

class Instrucao_InsContr extends Controller
{
    public function loadPageInstrucao(){
        return view("insPages/instrucao");
    }
}
