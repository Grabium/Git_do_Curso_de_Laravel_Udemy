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
    
    public function testarRecebimentoDeParametrosMVC($a, $b, $opcional='variável não foi declarada'){
        echo "Passagem de parâmetros pela classe de controle InicioLaravel_InsContr extends Controller.\n";
        echo "1° e 2° variáveis são, respectivamente = $a e $b.\n";
        echo "E a variável opcional = $opcional.";
    }
}
