<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;

class SintaxeBlade_TestContr extends Controller
{
    public function loadPageSintaxeBlade(){
        $lista = [
            ['nome'=> 'Ana', 'idade' => 22, 'cpf' => '123.456.789'],
            ['nome'=> 'Whu', 'idade' => 24, 'cpf'=> null],
            ['nome'=> 'Meautdot', 'idade' => 21, 'cpf' => '000.456.789'],
            ['nome'=> 'Bruno', 'idade' => 20, 'cpf' => null]
        ];
        return view("testes/sintaxeBlade", compact('lista'));
    }
}
