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
    });

    Route::get('/admin/login', 'Painel\PainelController@loginPainel')->name('login.painel');

    Route::post('/admin/login', 'Painel\PainelController@postLogin')->name('post.login');

    Route::get('/admin/logout', 'Painel\PainelCOntroller@logout');
 
});

Auth::routes();
Route::get('/', 'Site\SiteController@index')->name('home');
