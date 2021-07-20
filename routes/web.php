<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\DocumentController;
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
Route::post('/contacto',[Pages::class, 'store'])->name('store');
Route::get('/experiencia', [Pages::class, 'experiencia'])->name('experiencia');
Route::get('/servicios/competitividad_desarrollo', [Pages::class, 'servicio_competitividad'])->name('servicio_competitividad');
Route::get('/servicios/gestion_politica', [Pages::class, 'servicio_gestion'])->name('servicio_gestion');
Route::get('/servicios/estudios_economicos', [Pages::class,'servicio_estudios'])->name('servicio_estudios');
Route::get('/servicios/inversion', [Pages::class,'servicio_inversiones'])->name('servicio_inversiones');
Route::get('/servicios/legal', [Pages::class,'servicio_legal'])->name('servicio_legal');
Route::get('/servicios/tech', [Pages::class,'servicio_tech'])->name('servicio_tech');
Route::get('/trabaja_con_nosotros',[Pages::class,'empleos'])->name('empleos');
Route::get('/set_locale', [Pages::class, 'index'])->name('set_locale');
Route::get('/visionmision', [Pages::class, 'visionmision'])->name('visionmision');
Route::get('/publicaciones', [Pages::class, 'publicaciones'])->name('publicaciones');
Route::get('/videos', [Pages::class, 'videos'])->name('videos');
Route::get('/noticias', [Pages::class, 'noticias'])->name('noticias');
Route::get('/qrverificado', [Pages::class, 'qrverificado'])->name('qrverificado');

Route::get('/nosotros/rudylaguna', [Pages::class, 'rudylaguna'])->name('rudylaguna');

Route::get('/nosotros/vivianasanchez', [Pages::class, 'vivianasanchez'])->name('vivianasanchez');

Route::get('/nosotros/sergiovillegas', [Pages::class, 'sergiovillegas'])->name('sergiovillegas');

Route::get('/nosotros/katherinepiedra', [Pages::class, 'katherine'])->name('katherine');

Route::get('/nosotros/geneolarte', [Pages::class, 'geneolarte'])->name('geneolarte');

Route::get('/nosotros/alvaroorozco', [Pages::class, 'alvaroorozco'])->name('alvaroorozco');


//Intranet 
// Route::post('/intranet', [LoginController::class, 'authenticate'])->name('intranet');
//Route::post('/intranet', 'UserController@authenticate')->name('intranet');

Route::group(['middleware' => ['jwt.verify']], function() {
       /*AÑADE AQUI LAS RUTAS QUE QUIERAS PROTEGER CON JWT*/
 });

Route::get('/intranet', [DocumentController::class,'showYears'])->middleware('auth');
Route::get('/intranet/{name}', 'DocumentController@showProjects')->middleware('auth');
Route::get('/intranet/{name}/{abb_project}', 'DocumentController@showTypeDocuments')->middleware('auth');
Route::get('/intranet/{name}/{abb_project}/{nametype}', 'DocumentController@showDocuments')->middleware('auth');

Auth::routes(['register' => false]);
