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
Route::group(['middleware' => 'auth'], function (){
    Route::get('/profile', [\App\Http\Controllers\UserController::class, 'edit'])->name('profile');
    Route::post('/profile/password', [\App\Http\Controllers\UserController::class, 'updatePassword'])->name('profile.password');
    Route::post('/profile', [\App\Http\Controllers\UserController::class, 'update'])->name('profile.update');
    Route::post('/', [MaterialController::class, 'store'])->name('upload');
    Route::get('{id?}/materials', [\App\Http\Controllers\FolderController::class, 'show'])->name('materials');
    Route::get('folders', [\App\Http\Controllers\FolderController::class, 'index'])->name('folders');
    Route::get('my-files', [\App\Http\Controllers\MaterialController::class, 'myFiles'])->name('myFiles');
    Route::get('{id}/download', [\App\Http\Controllers\MaterialController::class, 'download'])->name('download');
});

Route::get('{id?}/file-download', [\App\Http\Controllers\MaterialController::class, 'downloadWindow'])->name('download_window');

