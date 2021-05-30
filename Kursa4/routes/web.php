<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\Controller;
use \App\Models\clients;
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

Route::get('/admin', function () {
    return view('admin');
});
Route::get('/admin/clients', [Controller::class, 'admin_clients']);

Route::get('/admin/orders', [Controller::class, 'admin_orders']);

Route::get('/admin/drivers', [Controller::class, 'admin_drivers']);

Route::post('/web', [Controller::class, 'add_user']);

