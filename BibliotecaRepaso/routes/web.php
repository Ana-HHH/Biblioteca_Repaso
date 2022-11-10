<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ViewsController;
use App\Http\Controllers\FormController;


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
    Route::get('form', 'gotoForm') ->name('form');
    Route::get('index', 'gotoHome')->name('index');
    Route::get('clientnew', 'gotoClientNew')->name('clientnew');
}
);

// Route::get('/', function () {
//     return view('index');
// });
// Route::get('form', function () {
//     return view('form');
// });

///CONTROLADORES

Route::post('form', [FormController::class, 'processForm']);
Route::post('clientnew', [FormController::class, 'processNewClient']);