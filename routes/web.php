<?php

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
use App\Http\Controllers\PageController;

Route::get('/',[PageController::class,'home'])->name('home');
//Route::get('curso',[PageController::class,'course'])->name('course');
Route::get('curso/{course:slug}',[PageController::class,'course'])->name('course');
//Route::view('/', 'index')->name('home');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


