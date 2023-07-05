<?php

use App\Http\Controllers\ServicesController;
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

Route::get('/', function () {
    return view('home');
})->name('home');
Route::controller(ServicesController::class)->prefix('/services')->group(function () {
    Route::get('/', 'index')->name('services');
    Route::get('/websites', 'websites')->name('websites');
    Route::get('/bulksms', 'bulksms')->name('bulksms');
    Route::get('/hosting', 'hosting')->name('hosting');
});
Route::get('/contact', function () {
    return view('contact');
})->name('contact');
