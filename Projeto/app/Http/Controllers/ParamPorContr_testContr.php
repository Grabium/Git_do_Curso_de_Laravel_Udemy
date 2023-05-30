<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;

class ParamPorContr_testContr extends Controller
{
    public function loadParamPorController(string $acont, int $bcont){
        $nota = 6.1;
        $sagradaFamilia = ['Maria', 'Jesus', 'José', 'array declarada no controller ParamPorContr_testContr'];

        //abaixo, as formas de enviar:
        //return view("testes/paramPorController", ['acont' => $acont, 'bcont' => $bcont]); //array ascociativo.
        return view("testes/paramPorController", compact('acont', 'bcont', 'nota', 'sagradaFamilia')); //compact() é nativo do php. O mais recomendável.
        //return view("testes/paramPorController")->with('acont', $acont)->with('bcont', $bcont); //with('nomeVar',valorVar) metodo do Laravel.
    }
}
