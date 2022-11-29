<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ViewsController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\ControladorBD;


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
/// VISTAS
Route::controller( ViewsController::class )->group(
    function () {
    Route::get('book', 'gotoBook') ->name('book');
    Route::get('index', 'gotoHome')->name('index');
    Route::get('client', 'gotoClient')->name('client');
}
);

Route::get('/', function () {
    return view('index');
});
// Route::get('form', function () {
//     return view('form');
// });

///CONTROLADORES

Route::post('book', [FormController::class, 'processBook']);
Route::post('client', [FormController::class, 'processClient']);

//CONTROLADOR BD
