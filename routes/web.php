<?php

use App\Http\Controllers\ClienteControlador;
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



Route::get('/novocliente', [ClienteControlador::class, 'create']);
Route::get('/', [ClienteControlador::class, 'index']);

Route::post('/clientes', [ClienteControlador::class, 'store']);
