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
	return View::make('hello');
});



Route::get('admin', array('as' => 'admin', 'uses' => 'ContactosController@mostrarContactos'));
Route::get('admin/nuevo', array('uses' => 'ContactosController@nuevoContacto'));
Route::post('admin/crear', array('uses' => 'ContactosController@crearContacto'));
Route::get('admin/{id}', array('as' => 'contact.show', 'uses' => 'ContactosController@verContacto'));
Route::get('admin/edit/{id}', array('as' => 'admin/edit', 'uses' => 'ContactosController@editarContacto'));
Route::post('admin/update/{id}', array('as' => 'contacts.update', 'uses' => 'ContactosController@updateContacto'));
Route::get('admin/delete/{id}', array('as' => 'contact.delete', 'uses' => 'ContactosController@deleteContacto'));
