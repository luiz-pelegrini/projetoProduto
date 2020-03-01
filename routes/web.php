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

// Route::get('/', function () {
//     return view('welcome');
// });


// Route::get('/', function () {
//     return view('template.app');;
// });

Route::group(['prefix' => 'produtos'], function () {
    Route::get('/', 'ProdutosController@index');
    Route::get('/novo', 'ProdutosController@novoView');
    Route::get('/{ID_PRODUTO_PRD}/editar', 'ProdutosController@editarView');
    Route::post('/post', 'ProdutosController@post');
    Route::post('/put', 'ProdutosController@put');
    Route::get('/{ID_PRODUTO_PRD}/delete', 'ProdutosController@delete');
});

Route::group(['prefix' => 'contacategoria'], function () {
    Route::get('/', 'ContacategoriaController@index');
    Route::get('/novo', 'ContacategoriaController@novoView');
    Route::get('/{ID_CONTACATEGORIA_CC}/editar', 'ContacategoriaController@editarView');
    Route::post('/post', 'ContacategoriaController@post');
    Route::post('/put', 'ContacategoriaController@put');
    Route::get('/{ID_CONTACATEGORIA_CC}/delete', 'ContacategoriaController@delete');
});




// Route::get('/teste', function () {
//     return view('teste');
// });

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
