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
//é necessário importá-la manualmente aqui para usar "Route::get()" abaixo.

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
//é vantajoso para abstrair durante o desenvolvimento.
//Você usa o apelido no html e não se preocupa em trocá-los caso troque a rota.

Route::get('/', [Principal_contr::class, 'loadPagePrincipal'])->name('home');

Route::get('/PageInstrucao', [Instrucao_InsContr::class, 'loadPageInstrucao'])->name('instrucao');

Route::get('/PageInicioLaravel', [InicioLaravel_InsContr::class, 'loadPageInicioLaravel'])->name('inicioLaravel');

Route::get('/PageRoutesMVC', [RoutesMVC_InsContr::class, 'loadPageRoutesMVC'])->name('routesMVC');

Route::get('/PageSobreNos', [SobreNos_Contr::class, 'loadPageSobreNos'])->name('sobreNos');

Route::get('/PageContato', [Contato_Contr::class, 'loadPageContato'])->name('contato');

Route::get('/PageLogin', function(){return 'Página de login'; })->name('login');

//foi adicionado um prefixo ( Route::prefix()->group(function(){}) ) no grupo dessas rotas combinando com apelidos(->names())
//exemplo: 
//   o código abaixo aplicará uma function php/laravel dentro do cód html:
//      href="{{ route('clientes') }}" 
//   no html irá chamar a rota equivalente:
//      href="/Restrito/PageClientes"

Route::prefix('/Restrito')->group(function(){
    Route::get('/PageClientes', function(){return 'Página de clientes'; })->name('clientes');
    Route::get('/PageProdutos', function(){return 'Página de produtos'; })->name('produtos');
    Route::get('/PageFornecedores', function(){return 'Página de fornecedores'; })->name('fornecedores');
});


//-------------------------------------Passando parâmetros pelas rotas usando tanto Route quanto MVC.
//Usando Route:
//Veja que "/PageInstrucao" é uma rota que já existe (acima) e não exige nenhum parâmetro.
//Se não for passado nenhum parâmetro, não haverá erro.
//No exemplo abaixo, ao passar 2 (2 são obrigatórios) ou 3 (o 3° é opcional) parâmetros essa rota abaixo será ativada.
//Diferente disso, ou de 0(zero) parâmetros, vai dar erro.
Route::get('/PageInstrucao/{var1}/{var2}/{varOpcional?}', 
    function(string $a, float $b, string $opcional='variável não foi declarada'){
        echo "1° e 2° variáveis são, respectivamente = $a e $b.\n";
        echo "E a variável opcional = $opcional.";
    })->where('var1', '[A-Za-z]+')->where('var2', '[1.0-9.0]+')->where('opcional', '[A-Za-z]+');
//Epressões regulares:
//imposições de condições. var1 deve receber strings e var2, números.
//o parâmetro "opcional" pode receber números de 5 a 8. 
//caso não cumprida uma ou mais requisito, a página de "not found" será carregada.

//Usando MVC:
//A opçaõ abaixo atende aos moldes do MVC.
//Talvez seja necessário corrigir as variáveis e/ou excluir as Regex (expressões regulares).
//Testes ainda não executados.
Route::get('/PageInicioLaravel/{var1}/{var2}/{varOpcional?}',
           [InicioLaravel_InsContr::class, 'testarRecebimentoDeParametrosMVC']
           })->where('var1', '[A-Za-z]+')->where('var2', '[1.0-9.0]+')->where('opcional', '[A-Za-z]+');

//------------------------------------Desvios em routes:
//há dudas maneiras de ser feitas. no Routes/Callback ou Controller.
//-1Routes/Callback:

Route::get('/rotaDestino', function(){
    echo "Página de destino alcançado. Desvio concluido com sucesso!";
    echo '</br>Volte para a <a href="'.route('home').'">home page</a>!';
})->name('destino');

Route::get('/rotaOriginal', function(){
    echo "Página original. Fail redirect!";
    echo '</br>Volte para a <a href="'.route('home').'">home page</a>!';
})->name('original');

Route::redirect('/rotaOriginal', '/rotaDestino');
//Route::redirect() recebe as rotas originais e seu respectivo desvio. (não use o ->name() como parâmetro)
//pode manter o ->name() da rota original no cóidigo html:
//     <a href="{{ route('original') }}">Testar desvio de rota na class Route</a>
//Enquanto houver a linha de código do redirect(), o php vai "ignorar" os efeitos da /rotaOriginal e 
//vai desviar para a /rotaDestino


//Neste exemplo o redirecionamento é chamado dentro da rota original. Mais comum entre projetos.
Route::get('/rotaDestinoEx2', function(){
    echo "Página de destino alcançado. Desvio concluido com sucesso!";
    echo '</br>Volte para a <a href="'.route('home').'">home page</a>!';
})->name('destino2');

Route::get('/rotaOriginalEx2', function(){
    echo "Página original. Fail redirect!";
    echo '</br>Volte para a <a href="'.route('home').'">home page</a>!';
    return redirect()->route('destino2');
})->name('original2');


//Route::fallback() captura rotas inexistentes que iriam para a página "404 NOT FOUND!" 
//e desvia para um callback que poderia ser uma rota de uma página customizada mais 
//intuitiva e melhor UX para soluções de problemas.
//neste exemplo retornaremos apenas um echo() para mais praticidade.
Route::fallback(function(){
    echo'Página NÃO encontrada!!! </br></br>Volte para a <a href="'.route('home').'">home page</a>!';
});
