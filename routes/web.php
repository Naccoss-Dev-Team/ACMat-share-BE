<?php

use App\Http\Controllers\MaterialController;
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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', function () {
    if (auth()->check())
        return  redirect()->route('home');

    return redirect()->route('login');
//    return view('welcome');
});
Route::post('/', [MaterialController::class, 'store'])->name('upload');
Route::get('{id?}/materials', [\App\Http\Controllers\FolderController::class, 'show'])->name('materials');
Route::get('folders', [\App\Http\Controllers\FolderController::class, 'index'])->name('folders');

