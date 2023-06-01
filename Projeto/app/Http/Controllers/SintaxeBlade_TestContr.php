<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;

class SintaxeBlade_TestContr extends Controller
{
    public function loadPageSintaxeBlade(){
        $lista = [
            ['nome'=> 'Ana', 'idade' => 22, 'cpf' => '123.456.789', 'job' => 'social media'],
            ['nome'=> 'Whu', 'idade' => 24, 'cpf'=> null, 'job' => 'mago samurai'],
            ['nome'=> 'Meautdot', 'idade' => 21, 'cpf' => '000.456.789', 'job' => null],
            ['nome'=> 'Harry Potter', 'idade' => 20, 'job' => 'estudante de bruxaria'],
            ['nome'=> 'Alexya', 'idade' => 15],
            ['nome'=> 'Pietro', 'idade' => 2]
        ];
        return view("testes/sintaxeBlade", compact('lista'));
    }
}
