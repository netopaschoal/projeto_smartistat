<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Dispositivo;
use App\Dado;
use App\User;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/lista_categorias', 'ControladorSistema@listar_categorias');

Route::get('/usuarios', function ( ){
    $usuario = User::all();
    if (count($usuario) == 0)
        echo "<h2>Você não possui usuarios cadastrados</h2>";
    else {
        foreach($usuario as $u){
            echo "<p>" .$u->id . " - " .$u->email ."</p>";
            $disp = $u->dispositivos;

        foreach($disp as $d){
            echo "<p>" .$d->user_id . " - " .$d->nome_dispositivo ."</p>";
            $dadoss = $d->dados;

            foreach($dadoss as $ds){
                echo "<p>" .$ds->dispositivo_id . " - " .$ds->temperatura ."</p>";
            }
        }
        }
    }
    
});

Route::get('/dispositivos', function ( ){
    
    $disp = Dispositivo::where('id',1)->get();
    if (count($disp) == 0)
        echo "<h2>Você não possui usuarios cadastrados</h2>";
    else {
        foreach($disp as $d){
            echo $d->data_grafico;
        }
        
    }
    
});

Route::get('/apagar/{id}', 'ControladorSistema@destroy');

Route::get('/listar_dados/{id}', 'ControladorSistema@listar_dados');

Route::get('/stock/chart/{id_dispositivo}','ControladorSistema@chart');

Route::get('/adicionar_dispositivo','ControladorSistema@create');


Route::post('/novo_disp','ControladorSistema@store');

Route::post('/data_grafico/{id}','ControladorSistema@mudar_grafico'); // colocar o token

Route::get('/unidade_temperatura/{id}/{unidade}','ControladorSecundario@mudar_unidade')->name("unidade.temperatura");



