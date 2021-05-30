<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\Controller;

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
    return view('web', ['flag' => 0]);
});

Route::get('/web', function () {
    return view('web', ['flag' => 0]);
});

Route::get('/clients', function () {
    return view('clients');
});

Route::get('/drivers', function () {
    return view('drivers');
});

Route::get('/cities', function () {
    return view('cities');
});

Route::get('/contacts', function () {
    return view('contacts');
});

Route::post('/web', [Controller::class, 'add_user']);

