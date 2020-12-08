<?php

use App\Http\Controllers\Controller;
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

/*Route::get('/', function () {
    return view('index');
});*/


Route::get('/','Controller@index')->name('accueil');

Route::get('/apropos','Controller@about')->name('about');

Route::get('/contact','Controller@contact')->name('contact');

Route::get('/detail/{projet}','Controller@detail')->name('detail');

Route::post('/sendmail','Controller@sendMail')->name('mail');
