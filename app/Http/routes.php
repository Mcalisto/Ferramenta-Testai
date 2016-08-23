<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');

});


//Route::get('login', 'Auth\AuthController@showLoginForm');
//Route::post('login', 'Auth\AuthController@login');
//Route::get('logout', 'Auth\AuthController@logout');

// auth de rotas para o aluno (login, cadastro)
Route::auth();
Route::get('home', 'HomeController@index');
Route::get('aluno', 'AlunosController@aluno');
Route::get('alunos/uploads', 'AlunosController@upload');
Route::post('uploadFile', 'FilesController@uploadFile');
Route::get('loginAdmin', 'Admin\AuthController@showAdminLoginForm');
Route::post('loginAdmin', 'Admin\AuthController@login');
Route::get('aluno_notas', 'AlunosController@showNotas');





//rotas protegidas para admin.
Route::group(['middleware' => ['admins']], function () {

  Route::get('/admin', 'AdminsController@adminIndex');
  Route::get('/lista_alunos', 'AdminsController@lista');
  Route::get('uploads_folder', 'AdminsController@listaArquivos');
  Route::post('evoSuite', 'AdminsController@evoSuite');
  Route::get('evosuiteForm', 'AdminsController@evoSuiteForm');
  Route::post('add_notas', 'AdminsController@addNotas');
  Route::post('deleteFile', 'FilesController@deleteFile');
  Route::get('ver_notas', 'AdminsController@verNotas');
  Route::post('criarDiretorio', 'AdminsController@criarDiretorio');
  Route::get('verFolders', 'AdminsController@verFolders');
  Route::get('atividades', 'AdminsController@verAtividades');
  Route::post('deleteAtividade', 'FilesController@deleteAtividade');


});
