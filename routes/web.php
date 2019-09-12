<?php

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


Route::group(['middleware' => 'admin'], function(){

    Route::group(['middleware' => 'auth:admin'], function(){
        Route::get('/admin', 'Painel\PainelController@index');
        Route::get('produto/create', 'Painel\ProdutoController@create')->name('produto.create');  
        Route::post('produto/store', 'Painel\ProdutoController@store')->name('produto.store');  
        Route::get('produto/{id}/edit', 'Painel\ProdutoController@edit')->name('produto.edit');
        Route::put('produto/{id}', 'Painel\ProdutoController@update')->name('produto.update');
        Route::get('produto/{id}', 'Painel\ProdutoController@show')->name('produto.show');
        Route::delete('produto/{id}', 'Painel\ProdutoController@destroy')->name('produto.destroy');
        Route::get('/pedido', 'Painel\PedidoController@index');
    });

    


    Route::get('/admin/login', 'Painel\PainelController@loginPainel')->name('login.painel');

    Route::post('/admin/login', 'Painel\PainelController@postLogin')->name('post.login');

    Route::get('/admin/logout', 'Painel\PainelCOntroller@logout');
 
});

Route::get('/user/pedido/{id_produto}', 'Painel\PedidoController@create')->name('pedido.create');
Route::get('/novo/pedido/cliente/{id_user}', 'Painel\PedidoController@cliente_pedidos')->name('pedido.cliente.lista');
Route::post('/novo/pedido', 'Painel\PedidoController@store')->name('pedido.store');

Auth::routes();
Route::get('/', 'Site\SiteController@index')->name('home');
