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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/brandon', function()
{
	return view('brandon');
});

// Route::post('/brandon', function()
// {
// 	return 'Brandon Torres POST';
// });

Route::get('contacto', function()
{
	return view('contacto.contacto');
});

// Route::match(['get', 'post'], 'contacto', function()
// {
// 	return view('contacto');
// });

Route::get('contacto/{nombre?}/{edad?}', function($nombre = "Brandon Torres", $edad = null)
{
	return view('contacto.contacto')	->with('nombre', $nombre)
										->with('edad', $edad)
										->with('frutas', array('naranja', 'pera', 'manzana', 'melon'));
	/*return view('contacto', array(
		'nombre' => $nombre,
		'edad' => $edad
	));*/
})->where([
	'nombre' => '[A-Za-z]+',
	'edad' => '[0-9]+'
]);
