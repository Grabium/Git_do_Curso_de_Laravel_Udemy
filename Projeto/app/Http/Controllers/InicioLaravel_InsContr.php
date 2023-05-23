<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;

//com a class importada pelo "namespace App\Http\Controllers;" neste arquivo.
//uma rota (em routes/web.php) pode importar esta 
//classe instanciada abaixo "class InicioLaravel_InsContr extends Controller"
//e no callback da rota, chamar a classe e esta função "loadPageInicioLaravel()"
//esta função, por sua vez, buscar o recurso front-end direto 
//da pasta resources/view com a função "view()".

class InicioLaravel_InsContr extends Controller
{
    public function loadPageInicioLaravel(){
        return view("insPages/inicioLaravel");
    }
}
