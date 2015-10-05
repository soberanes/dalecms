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

Route::get('/', 'LandingController@index');

Route::group(array('prefix'=>'admin/contacts', 'before' => 'auth'),function()
{

	Route::get('/', array('as' => 'contacts.list', 'uses' => 'ContactosController@listContactos'));
	Route::get('/add', array('as' => 'contacts.new', 'uses' => 'ContactosController@nuevoContacto'));
	Route::post('/store', array('as' => 'contacts.store', 'uses' => 'ContactosController@crearContacto'));
	Route::get('/show/{id}', array('as' => 'contacts.show', 'uses' => 'ContactosController@verContacto'));
	Route::get('/edit/{id}', array('as' => 'contacts.edit', 'uses' => 'ContactosController@editarContacto'));
	Route::post('/update/{id}', array('as' => 'contacts.update', 'uses' => 'ContactosController@updateContacto'));
	Route::get('/delete/{id}', array('as' => 'contact.delete', 'uses' => 'ContactosController@deleteContacto'));

});

Route::get('login', 'SessionsController@login');
Route::get('logout', 'SessionsController@destroy');
Route::get('register', 'SessionsController@register');
Route::post('register/save', array('as' => 'register/save', 'uses' => 'SessionsController@save'));
Route::resource('sessions', 'SessionsController');

Route::group(array('prefix' => 'admin', 'before' => 'auth'), function()
{
	Route::get('/', array('as' => 'admin', 'uses' => 'AdminController@index'));

});
