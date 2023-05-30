<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;

class Comentarios_InsContr extends Controller
{
    public function loadPageComentarios(){
        //$nota = 6.1;
        //$sagradaFamilia = ['Maria', 'Jesus', 'José'];
        return view('/insPages/comentarios');//, compact('nota', 'sagradaFamilia'));
    }
}
