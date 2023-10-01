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
// Route::get('/admin',[homecontroller::class,'abc']);
// Route::get('/destroy/{id}',[homecontroller::class,'destroy'])->name('destroy');
// Route::get('/update/{id}', [homecontroller::class, 'update'])->name('update');
// Route::post('/edit/{id}', [homecontroller::class, 'edit'])->name('update');
Route::post('/upload',[usercontroller::class,'store']);
Route::get('/admin',[usercontroller::class,'show']);
// Route::get('//{is}',[usercontroller::class,'view']);
Route::get('/delete/{id}',[usercontroller::class,'delete'])->name('delete');



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

                Route::get('/selena', function(){

                    return view('selena');


                    });

                    Route::get('/billie', function(){

                        return view('billie');


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

                                                Route::get('/justin', function(){

                                                    return view('justin');


                                                    });

                                                Route::get('/bohemia', function(){

                                                    return view('bohemia');


                                                    });
                            Route::get('/about', function(){

                                return view('about');



                                });

                                Route::get('/2014', function(){

                                    return view('2014');



                                    });


                                    Route::get('/2015', function(){

                                        return view('2015');



                                        });


                                        Route::get('/2016', function(){

                                            return view('2016');



                                            });





                                            Route::get('/2017', function(){

                                                return view('2017');



                                                });

                                                Route::get('/2018', function(){

                                                    return view('2018');



                                                    });
                                                    Route::get('/2019', function(){

                                                        return view('2019');



                                                        });

                                                        Route::get('/2020', function(){

                                                            return view('2020');



                                                            });
                                                            Route::get('/2021', function(){

                                                                return view('2021');



                                                                });
                                                                Route::get('/2022', function(){

                                                                    return view('2022');



                                                                    });
                                                                    Route::get('/2023', function(){

                                                                        return view('2023');



                                                                        });
                                                                        Route::get('/urdu', function(){

                                                                            return view('urdu');




                                                                            });
                                                                            Route::get('/english', function(){

                                                                                return view('english');



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


