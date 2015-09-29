<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('admin/contacts');
})->before('auth');

Route::group(array('prefix'=>'admin/contacts'),function()
{

	Route::get('/', array('as' => 'contacts.list', 'uses' => 'ContactosController@listContactos'))->before('auth');
	Route::get('/add', array('as' => 'contacts.new', 'uses' => 'ContactosController@nuevoContacto'))->before('auth');
	Route::post('/store', array('as' => 'contacts.store', 'uses' => 'ContactosController@crearContacto'))->before('auth');
	Route::get('/show/{id}', array('as' => 'contacts.show', 'uses' => 'ContactosController@verContacto'))->before('auth');
	Route::get('/edit/{id}', array('as' => 'contacts.edit', 'uses' => 'ContactosController@editarContacto'))->before('auth');
	Route::post('/update/{id}', array('as' => 'contacts.update', 'uses' => 'ContactosController@updateContacto'))->before('auth');
	Route::get('/delete/{id}', array('as' => 'contact.delete', 'uses' => 'ContactosController@deleteContacto'))->before('auth');

});

Route::get('login', 'SessionsController@login');
Route::get('logout', 'SessionsController@destroy');
Route::get('register', 'SessionsController@register');
Route::get('register/save', array('as' => 'register/save', 'uses' => 'SessionsController@save'));
Route::resource('sessions', 'SessionsController');
