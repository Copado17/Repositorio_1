<?php
use App\Http\Controllers\Controlador;
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

Route::get('/', function () {
    return view('Formulario');
});

Route::get('/Tabla', function () {
    return view('Tabla');
});

Route::post('Guardarsueño', [Controlador::class, 'validadorio']);