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

# Aqui fica a rota principal ;D
Route::get('/', 'SiteController@principal');


Route::get('/sistema','SiteController@admin');


Auth::routes();



Route::get('/home', 'HomeController@index');


Route::group(['prefix' => 'modalidade'],function() {
    Route::get('/', ['as' => 'modalidades', 'uses' => 'ModalidadeController@todasMdalidade']);
    Route::get('/novo', ['as' => 'modalidade.create', 'uses' => 'ModalidadeController@novaModalidade']);

    Route::post('/store', ['as' => 'modalidade.store', 'uses' => 'ModalidadeController@salvarModalidade']);

    Route::get('edit/{id}', ['as' => 'modalidade.edit', 'uses' => 'ModalidadeController@editarModalidade']);
    Route::post('update/{id}', ['as' => 'modalidade.update', 'uses' => 'ModalidadeController@alterarModalidade']);
    Route::get('delete/{id}',['as'=> 'modalidade.delete','uses' => 'ModalidadeController@deletarModalidade'  ]);

});

Route::group(['prefix' => 'orgao'],function() {
    Route::get('/', ['as' => 'orgaos', 'uses' => 'OrgaoController@todosOrgaos']);
    Route::get('/novo', ['as' => 'orgao.create', 'uses' => 'OrgaoController@novoOrgao']);

    Route::post('/store', ['as' => 'orgao.store', 'uses' => 'OrgaoController@salvarOrgao']);
    Route::get('edit/{id}', ['as' => 'orgao.edit', 'uses' => 'OrgaoController@editarOrgao']);
    Route::post('update/{id}', ['as' => 'orgao.update', 'uses' => 'OrgaoController@alterarOrgao']);
    Route::get('delete/{id}',['as'=> 'orgao.delete','uses' => 'OrgaoController@deletarOrgao']);

});


Route::group(['prefix' => 'situacao'],function() {
    Route::get('/', ['as' => 'situacao', 'uses' => 'SituacaoController@todasSituacao']);
    Route::get('/novo', ['as' => 'situacao.create', 'uses' => 'SituacaoController@novaSituacao']);

    Route::post('/store', ['as' => 'situacao.store', 'uses' => 'SituacaoController@salvarSituacao']);
    Route::get('edit/{id}', ['as' => 'situacao.edit', 'uses' => 'SituacaoController@editarSituacao']);
    Route::post('update/{id}', ['as' => 'situacao.update', 'uses' => 'SituacaoController@alterarSituacao']);
    Route::get('delete/{id}',['as'=> 'situacao.delete','uses' => 'SituacaoController@deletaSituacao']);

});

