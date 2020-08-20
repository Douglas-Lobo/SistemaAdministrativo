<?php

use Illuminate\Support\Facades\Route;

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
    return view('site.index');
});


Route::group(['middleware' => ['auth']], function () {
    
    Route::prefix('admin')->namespace('Admin')->name('admin.')->group(function(){
        Route::get('/', 'HomeAdminController@index')->name('home');

        Route::resource('/produtos', 'ProdutosController')->except([
            'show'
        ]);

        Route::resource('/clientes', 'ClientesController')->except([
            'show'
        ]);

        Route::resource('/pedidos', 'PedidosController')->except([
            'show'
        ]);

        Route::resource('/fornecedores', 'FornecedoresController')->except([
            'show'
        ])->parameters([
            'fornecedores' => 'fornecedor'
        ]);
        
    });
    
});
    
    

Auth::routes();    