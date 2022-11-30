<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ViewsController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\BooksControllerBD;


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

//CONTROLADOR BD BOOKS
//index
Route::get('book', [BooksControllerBD::class, 'index'])->name('book.index');
//insert
Route::post('book/store', [BooksControllerBD::class, 'store'])->name('book.store');
//update
Route::put('book/{id}', [BooksControllerBD::class, 'update'])->name('book.update');
//delete
Route::delete('book/{id}', [BooksControllerBD::class, 'destroy'])->name('book.destroy');

//CONTROLADOR BD CLIENTS
//index
// Route::get('client', [ClientsControllerBD::class, 'index'])->name('client.index');
// //insert
// Route::post('client/store', [ClientsControllerBD::class, 'store'])->name('client.store');
// //update
// Route::put('client/{id}', [ClientsControllerBD::class, 'update'])->name('client.update');
// //delete
// Route::delete('client/{id}', [ClientsControllerBD::class, 'destroy'])->name('client.destroy');
