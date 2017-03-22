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


Route::get('/{id}/contrato','SiteController@contrato');
Route::get('contato', 'SiteController@contato');
Route::get('formulario','SiteController@formulario');

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::group(['middleware' => 'auth', 'where'=>['id'=>'[0-9]+']],function() {
    Route::group(['prefix' => 'sistema'],function() {
        Route::group(['prefix' => 'modalidade'], function () {
            Route::get('/', ['as' => 'modalidades', 'uses' => 'ModalidadeController@todasMdalidade']);
            Route::get('/novo', ['as' => 'modalidade.create', 'uses' => 'ModalidadeController@novaModalidade']);

            Route::post('/store', ['as' => 'modalidade.store', 'uses' => 'ModalidadeController@salvarModalidade']);

            Route::get('edit/{id}', ['as' => 'modalidade.edit', 'uses' => 'ModalidadeController@editarModalidade']);
            Route::post('update/{id}', ['as' => 'modalidade.update', 'uses' => 'ModalidadeController@alterarModalidade']);
            Route::get('delete/{id}', ['as' => 'modalidade.delete', 'uses' => 'ModalidadeController@deletarModalidade']);

        });

        Route::group(['prefix' => 'orgao'], function () {
            Route::get('/', ['as' => 'orgaos', 'uses' => 'OrgaoController@todosOrgaos']);
            Route::get('/novo', ['as' => 'orgao.create', 'uses' => 'OrgaoController@novoOrgao']);

            Route::post('/store', ['as' => 'orgao.store', 'uses' => 'OrgaoController@salvarOrgao']);
            Route::get('edit/{id}', ['as' => 'orgao.edit', 'uses' => 'OrgaoController@editarOrgao']);
            Route::post('update/{id}', ['as' => 'orgao.update', 'uses' => 'OrgaoController@alterarOrgao']);
            Route::get('delete/{id}', ['as' => 'orgao.delete', 'uses' => 'OrgaoController@deletarOrgao']);

        });


        Route::group(['prefix' => 'situacao'], function () {
            Route::get('/', ['as' => 'situacao', 'uses' => 'SituacaoController@todasSituacao']);
            Route::get('/novo', ['as' => 'situacao.create', 'uses' => 'SituacaoController@novaSituacao']);

            Route::post('/store', ['as' => 'situacao.store', 'uses' => 'SituacaoController@salvarSituacao']);
            Route::get('edit/{id}', ['as' => 'situacao.edit', 'uses' => 'SituacaoController@editarSituacao']);
            Route::post('update/{id}', ['as' => 'situacao.update', 'uses' => 'SituacaoController@alterarSituacao']);
            Route::get('delete/{id}', ['as' => 'situacao.delete', 'uses' => 'SituacaoController@deletaSituacao']);

        });

        Route::group(['prefix' => 'licitacao'], function () {
            Route::get('/', ['as' => 'licitacao', 'uses' => 'LicitacaoController@licitacao']);
            Route::get('/novo', ['as' => 'licitacao.create', 'uses' => 'LicitacaoController@novaLicitacao']);

            Route::post('/store', ['as' => 'licitacao.store', 'uses' => 'LicitacaoController@salvarLicitacao']);
            Route::get('edit/{id}', ['as' => 'licitacao.edit', 'uses' => 'LicitacaoController@editarLicitacao']);
            Route::post('update/{id}', ['as' => 'licitacao.update', 'uses' => 'LicitacaoController@alterarLicitacao']);
            Route::get('delete/{id}', ['as' => 'licitacao.delete', 'uses' => 'LicitacaoController@deletarLicitacao']);

            Route::group(['prefix' => 'documentos'], function () {
                Route::get('{id}/documento',['as'=>'licitacao.documento', 'uses' => 'LicitacaoController@documentos']);
                Route::get('novo/{id}/documento',['as'=>'licitacao.documento.novo', 'uses' => 'LicitacaoController@novoDocumento']);
                Route::post('store/{id}/documento',['as'=>'licitacao.documento.store', 'uses' => 'LicitacaoController@criarDocumento']);
                Route::get('edit/{id}/documento', ['as' => 'licitacao.documento.edit', 'uses' => 'LicitacaoController@editarDocumento']);
                Route::post('update/{id}/documento', ['as' => 'licitacao.documento.update', 'uses' => 'LicitacaoController@alterarDocumento']);
                Route::get('deletar/{id}/documento',['as'=>'licitacao.documento.deletar', 'uses' => 'LicitacaoController@deletarDocumento']);

            });
        });

        Route::group(['prefix' => 'usuario'], function () {
            Route::get('/', ['as' => 'usuario', 'uses' => 'UsuarioController@usuario']);
            Route::get('/novo', ['as' => 'usuario.create', 'uses' => 'UsuarioController@novoUsuario']);
            Route::post('/store', ['as' => 'usuario.store', 'uses' => 'UsuarioController@salvarUsuario']);
            Route::get('edit/{id}', ['as' => 'usuario.edit', 'uses' => 'UsuarioController@editarUsuario']);
            Route::post('update/{id}', ['as' => 'usuario.update', 'uses' => 'UsuarioController@alterarUsuario']);
            Route::get('delete/{id}', ['as' => 'usuario.delete', 'uses' => 'UsuarioController@deletarUsuario']);

        });
    });
});

Route::get('/scope-licitacao','SiteController@scopeLicitacao');

