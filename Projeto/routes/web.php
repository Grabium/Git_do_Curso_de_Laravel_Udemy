<?php

use App\Http\Controllers\InicioLaravel_InsContr;
use App\Http\Controllers\Instrucao_InsContr;
use App\Http\Controllers\Principal_contr;
use App\Http\Controllers\RoutesMVC_InsContr;
use App\Http\Controllers\Contato_Contr;
use App\Http\Controllers\SobreNos_Contr;
use App\Http\Controllers\Login_Contr;
use App\Http\Controllers\Clientes_Contr;
use App\Http\Controllers\Produtos_Contr;
use App\Http\Controllers\Fornecedores_Contr;

//As rotas acima tem suas classe criadas com o comando
//php artisan make:controller NomeExemplo
//uma classe é criada em app/http/controllers com o nome que vc escolheu.
//é necessário impostá-la manualmente aqui para usar "Route::get()" abaixo.

use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


//Os apelidos instanciados na função "->name()" funcionam no scopo do laravel para codificação
//mas não funciona no navegador do usuário.
//é vantajoso para abstrair.
//Você usa o apelido no html e não se preocupa em trocá-los caso troque a rota.
Route::get('/', [Principal_contr::class, 'loadPagePrincipal'])->name('home');

Route::get('/PageInstrucao', [Instrucao_InsContr::class, 'loadPageInstrucao'])->name('instrucao');

Route::get('/PageInicioLaravel', [InicioLaravel_InsContr::class, 'loadPageInicioLaravel'])->name('inicioLaravel');

Route::get('/PageRoutesMVC', [RoutesMVC_InsContr::class, 'loadPageRoutesMVC'])->name('routesMVC');

Route::get('/PageSobreNos', [SobreNos_Contr::class, 'loadPageSobreNos'])->name('sobreNos');

Route::get('/PageContato', [Contato_Contr::class, 'loadPageContato'])->name('contato');

Route::get('/PageLogin', function(){return 'Página de login'; })->name('login');

//foi adicionado um prefixo no grupo dessas rotas a seguir:
Route::prefix('/Restrito')->group(function(){
    Route::get('/PageClientes', function(){return 'Página de clientes'; })->name('clientes');
    Route::get('/PageProdutos', function(){return 'Página de produtos'; })->name('produtos');
    Route::get('/PageFornecedores', function(){return 'Página de fornecedores'; })->name('fornecedores');
});


//passando parâmetros pelas rotas.
//veja que "PageInstrucao" é uma rota que já existe.
//ao passar 2 ou 3 parâmetros essa rota abaixo será ativada.
//diferente disso, ou de 0(zero) parâmetros, vai dar erro.
Route::get('/PageInstrucao/{var1}/{var2}/{varOpcional?}', 
function(string $a, float $b, string $opcional='variável não foi declarada'){
    echo "1° e 2° variáveis são, respectivamente = $a e $b.\n";
    echo "E a variável opcional = $opcional.";
})->where('var1', '[A-Za-z]+')->where('var2', '[1.0-9.0]+')->where('opcional', '[A-Za-z]+');
//Epressões regulares:
//imposições de condições. var1 deve receber strings e var2, números.
//o parâmetro "opcional" pode receber números de 5 a 8. 
//
//caso não cumprida uma ou mais requisito, a página de "not found" será carregada.

