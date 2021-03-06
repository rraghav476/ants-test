<?php

use App\Http\Controllers\AnswereSheetController;
use App\Http\Controllers\UserAttemptController;
use GuzzleHttp\Middleware;
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
    return view('welcome');
});

Route::middleware(['auth'])->group(function(){
    Route::get('/dashboard',[UserAttemptController::class,'index'])->name('dashboard');
    Route::get('/startTest',[UserAttemptController::class,'StartTest'])->name('startTest');
    Route::post('/submit',[AnswereSheetController::class,'submit'])->name('submit');

});
// ->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
