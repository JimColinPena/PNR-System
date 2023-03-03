<?php

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [ 'as' => 'inbox', 'uses' => 'App\Http\Controllers\Controller@index']);
Route::get('/depart', [ 'as' => 'depart', 'uses' => 'App\Http\Controllers\Controller@depart']);