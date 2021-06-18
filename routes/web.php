<?php

use App\Http\Controllers\Pages;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [Pages::class, 'index'])->name('inicio');
Route::get('/nosotros', [Pages::class, 'aboutus'])->name('nosotros');
Route::get('/servicios', [Pages::class, 'services'])->name('servicios');
Route::get('/contacto', [Pages::class, 'contacto'])->name('contacto');
//experiencia == publicaciones
Route::get('/experiencia', [Pages::class, 'experiencia'])->name('experiencia');
Route::get('/miespacio', [Pages::class, 'login'])->name('login');
Route::get('/servicios/competitividad_desarrollo', [Pages::class, 'servicio_competitividad'])->name('servicio_competitividad');
Route::get('/servicios/gestion_politica', [Pages::class, 'servicio_gestion'])->name('servicio_gestion');
Route::get('/servicios/estudios_economicos', [Pages::class,'servicio_estudios'])->name('servicio_estudios');
Route::get('/servicios/inversion', [Pages::class,'servicio_inversiones'])->name('servicio_inversiones');
Route::get('/servicios/legal', [Pages::class,'servicio_legal'])->name('servicio_legal');
Route::get('/servicios/tech', [Pages::class,'servicio_tech'])->name('servicio_tech');
Route::get('/trabaja_con_nosotros',[Pages::class,'empleos'])->name('empleos');
Route::get('/set_locale', [Pages::class, 'index'])->name('set_locale');
//Intranet 
Route::post('/intranet', 'Auth\LoginController@authenticate')->name('intranet');
//Route::post('/intranet', 'UserController@authenticate')->name('intranet');

Route::group(['middleware' => ['jwt.verify']], function() {
       /*AÑADE AQUI LAS RUTAS QUE QUIERAS PROTEGER CON JWT*/
 });

Route::get('/logout', 'Auth\LoginController@logout');

Route::get('/intranet', 'DocumentController@showYears')->middleware('auth');
Route::get('/intranet/{name}', 'DocumentController@showProjects')->middleware('auth');
Route::get('/intranet/{name}/{abb_project}', 'DocumentController@showTypeDocuments')->middleware('auth');
Route::get('/intranet/{name}/{abb_project}/{nametype}', 'DocumentController@showDocuments')->middleware('auth');
