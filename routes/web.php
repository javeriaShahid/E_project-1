<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\usercontroller;
use App\Http\Controllers\homecontroller;
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

Route::get('/admin',[homecontroller::class,'admin_panel']);
// Route::get('/admin',[homecontroller::class,'fetch']);
// Route::get('/destroy/{id}',[homecontroller::class,'destroy'])->name('destroy');
// Route::get('/update/{id}', [homecontroller::class, 'update'])->name('update');
// Route::post('/edit/{id}', [homecontroller::class, 'edit'])->name('update');



Route::get('/welcome', function () {
    return view('welcome');
});
Route::get('/', function(){

return view('index');


});
Route::get('/album', function(){

return view('albums-store');


});
Route::get('/contact', function(){

    return view('contact');


    });
    Route::get('/music', function(){

        return view('event');


        });
        Route::get('/videos', function(){

            return view('blog');


            });
            Route::get('/asim', function(){

                return view('asim');


                });

                Route::get('/ali', function(){

                    return view('alizafar');


                    });

                    Route::get('/atif', function(){

                        return view('atifaslam');


                        });



                        Route::get('/farhan', function(){

                            return view('farhansaeed');


                            });
                            Route::get('/rahat', function(){

                                return view('rahatfateh');


                                });

                                Route::get('/falak', function(){

                                    return view('falak');


                                    });
                                    Route::get('/bilal', function(){

                                        return view('bilalsaeed');


                                        });
                                        Route::get('/young', function(){

                                            return view('young');


                                            });
                                            Route::get('/hadiqa', function(){

                                                return view('hadiqa');


                                                });
                                                Route::get('/bohemia', function(){

                                                    return view('bohemia');


                                                    });
                            Route::get('/about', function(){

                                return view('about');



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
