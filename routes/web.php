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
//Sem restrição
Route::get('/', function () {
    return view('welcome');
});

Route::get('/Books', 'BooksController@book');

Route::get('/Artigos', 'ArtigosController@artigo');


Route::get('/Sobre_nos', function () {
    return view('Sobre_nos');
});


//Restrito
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

  Route::get('/home/Editar_livros', function () {
      return view('Editar_livros');
  });

  Route::get('/home/Editar_artigos', function () {
      return view('Editar_artigos');
  });

  Route::get('/home/Usuarios', function () {
      return view('Usuarios');
  });


