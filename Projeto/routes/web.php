<?php

use App\Http\Controllers\InicioLaravel_InsContr;
use App\Http\Controllers\Instrucao_InsContr;
use App\Http\Controllers\Principal_contr;
use App\Http\Controllers\RoutesMVC_InsContr;
use App\Http\Controllers\Contato_Contr;
use App\Http\Controllers\SobreNos_Contr;

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

Route::get('/', [Principal_contr::class, 'loadPagePrincipal']);

Route::get('/PageInstrucao', [Instrucao_InsContr::class, 'loadPageInstrucao']);

Route::get('/PageInicioLaravel', [InicioLaravel_InsContr::class, 'loadPageInicioLaravel']);

Route::get('/PageRoutesMVC', [RoutesMVC_InsContr::class, 'loadPageRoutesMVC']);

Route::get('/PageSobreNos', [SobreNos_Contr::class, 'loadPageSobreNos']);

Route::get('/PageContato', [Contato_Contr::class, 'loadPageContato']);
