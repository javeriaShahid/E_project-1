<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\usercontroller;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/index', function(){

return view('index');


});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});


// Route::controller(usercontroller::class)->group(function(){

//     Route::get('/index','index');
//     Route::get('/contact','contact');
//     Route::get('/blog','blog');
//     Route::get('/event','event');
//     // Route::get('/login','login');
//     Route::get('/album','album');




//     });
