<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;

class Principal_contr extends Controller
{
    public function loadPagePrincipal(){
        return view("welcome");
    }
}
