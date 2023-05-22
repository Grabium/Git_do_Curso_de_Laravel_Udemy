<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;

class SobreNos_Contr extends Controller
{
    public function loadPageSobreNos(){
        return view("site/sobreNos");
    }
}
