<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;

class Comentarios_InsContr extends Controller
{
    public function loadPageComentarios(){
        return view('/insPages/comentarios');
    }
}
