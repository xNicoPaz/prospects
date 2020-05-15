<?php

use App\Mail\Prospect as MailProspect;
use App\Prospect;
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

/**
 * Directamente uso el metodo estatico ::view en lugar de usar ::get y 
 * tener que pasarle una funcion anonima porque es la alternativa mas
 * simple y menos verbose.
 */
Route::view('/', 'pages.index');
Route::view('/video', 'pages.video');
Route::view('/prospects', 'pages.prospects');
Route::post('/prospects', 'ProspectController@store');

/**
 * Testing
 */
// Route::get('/prospects/{prospect}', function (Prospect $prospect) {
//     return new MailProspect($prospect);
// });
// Route::view('/thanks', 'pages.registered');
// Route::view('/500', 'errors.500');
