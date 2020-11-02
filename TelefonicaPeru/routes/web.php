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

Route::get('hola', function(){
	return '<h1>Hola Mundo!!!</h1>';
});
//rutas 1
/*Route::get('home', function(){
	return view('home');
});

Route::get('nosotros', function(){
	return view('nosotros');
});

Route::get('contactos', function(){
	return view('contactos');
});*/
//rutas2
Route::get('home',function(){
	return view('tickets.home');
});
Route::get('matrizEFE', function(){
	return view('tickets.matrizEFE');
});
Route::get('matrizEFI',function(){
	return view('tickets.matrizEFI');
});
Route::get('matrizBCG',function(){
	return view('tickets.matrizBCG');
});
Route::get('matrizIE',function(){
	return view('tickets.matrizIE');
});
Route::get('matrizEP',function(){
	return view('tickets.matrizEP');
});
Route::get('matrizMPC',function(){
	return view('tickets.matrizMPC');
});
Route::get('matrizMPEC',function(){
	return view('tickets.matrizMPEC');
});
Route::get('matrizPEYEA',function(){
	return view('tickets.matrizPEYEA');
});
Route::get('matrizFODA',function(){
	return view('tickets.matrizFODA');
});
Route::get('eje1',function(){
	return view('tickets.eje1');
});
Route::get('eje2',function(){
	return view('tickets.eje2');
});
Route::get('eje3',function(){
	return view('tickets.eje3');
});
Route::get('eje4',function(){
	return view('tickets.eje4');
});
//tickets
Route::resource('tickets','TicketController');
Route::resource('comments','CommentsController');
Route::get('reportes','TicketController@reporte');