<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PassController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TripController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Slide;
use App\Http\Controllers\StationController;
use App\Http\Controllers\BookingController;
use Illuminate\support\Facades\Auth;
use App\Models\Trip;
use Illuminate\Http\Request;
/*|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|*/


Route::get('edito', function () {
    return view('driver.edito');
});




Route::get('new', function () {
    return view('signUP.signupdriver');
});

Route::get('wel', function () {
    return view('welcome');
});


// Route::get('hhome', function () {
//     return view('home');
// });



Route::get('admin', function () {
    return view('adminf');
})->name('admin');

Route::get('loo', function () {
    return view('driverimg');
});

Route::get('drivert',[AdminController::class,'drivers'])->name('alldriver');

Route::get('ree', function () {
    return view('reservtion');
});
Route::get('policy', function () {
    return view('policy');
});


Route::get('here', function () {
    return view('aboutUs');
});



Route::get('add', function(){

    return view('driver.add');

});

Auth::routes();


Route::get('passt', function () {
    return view('passtable');
});
Route::get('dshoww/{driver}',[AdminController::class,'dshow'])->name('dshow');


Route::get('book', function () {
    return view('booking');
});


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



Route::get('dri', function () {
    return view('driv');
})->name('dri');


Route::get('hop', function () {
    return view('user3');
});

Route::resource('driver', App\Http\Controllers\PassController::class);


Route::get('/add', [App\Http\Controllers\TripController::class, 'form'])->name('form');


Route:: get('myadmin',[AdminController::class]);
Route:: get('mylogout',[TripController::class,'logoutuser'])->name('mylogout');
Auth::routes();

Route:: resource('books',BookingController::class);
Route::get('/profile', [PassController::class,'profile']);
Route::get('/show', [PassController::class,'profile']);
//Route::get('/show/{trip}', [AdminController::class,'showest']);
//Route::get('/edit/{ppass}', [PassController::class,'edit_t']);
//Route::post('/update/{ppass}', [PassController::class,'update_t']);
Route::resource('ppass', PassController::class);
Route:: resource('trips',TripController::class);
Route:: resource('stations',StationController::class);
Route:: resource('showbook',BookingController::class);
Route::get('/station', [StationController::class,'search']);



// Route::get('trip', function () {
    // return view('tript');
// });
// Route::get('imge',[AdminController::class,'img']);
// Route::get('imge', function () {
//     return view('driverimg');
// });


// Route::get('searchh', function () {
//     return view('exprince.search');
// });

Route::get('user',[AdminController::class,'users']);




Route::get('/tri', [AdminController::class,'index_trip'])->name('trip');
Route::get('/pass', [AdminController::class,'index_pass'])->name('pass');
Route::get('/driv', [AdminController::class,'index_driv'])->name('driv');
Route::get('/show/{pass}', [AdminController::class,'show'])->name('show');
Route::get('/book', [AdminController::class,'index_book'])->name('book');

Route::PUT('/accept/{id}',[AdminController :: class, 'update_book']);
Route::PUT('/rejected/{id}',[AdminController :: class, 'update_book2']);


Route::PUT('/acse/{id}',[AdminController :: class, 'acse']);
Route::PUT('/reje/{id}',[AdminController :: class, 'reje']);


Route::PUT('/done/{id}',[AdminController :: class, 'done']);
Route::PUT('/not_done/{id}',[AdminController :: class, 'not_done']);


Route::DELETE('/delete/{trip}',[AdminController :: class, 'destroy_trip'])->name('delete');
Route::DELETE('/delete2/{item}',[AdminController :: class, 'destroy_pass'])->name('delete1');
Route::DELETE('/delete3/{pass}',[AdminController :: class, 'destroy_driv'])->name('delete2');
Route::DELETE('/delete4/{book}',[AdminController :: class, 'destroy_book'])->name('delete3');

//////////////////////////////////////////////////////////////////////////

Route::get('/prof', [Slide::class,'profe']);
Route::get('/about', [Slide::class,'ex1']);
Route::get('/homes', [Slide::class,'ex2']);
Route::get('/contact', [Slide::class,'con']);
Route::get('/terms', [Slide::class,'ex5']);

Route::get('/policy', [Slide::class,'ex4']);
Route::get('ree/{data}',[BookingController::class,'creaat'] )->name('ree');

Route::get('/ex', [BookingController::class,'index']);
Route::post('shower', [BookingController::class,'shower']);
Route::post('showtrip', [TripController::class,'showtrip'])->name('showtrip');
// Route::post('edittrip', [TripController::class,'edittrip'])->name('edittrip');
// Route::post('UPDAT', [TripController::class,'UPDAT'])->name('UPDAT');

Route::get('/add', [TripController::class,'crea']);
Route::get('/ex3', [TripController::class,'index'])->name('/ex3');
//Route::get('/ex4', [TripController::class,'create']);
Route::put('peind/{item}',[AdminController::class,'peind'])->name('peind');

// 

//Route::post('/rev',[BookingController::class,'store'])->name('rev');


Route::get('contact', function () {
    return view('contactUs');
});


Route::get('DRISHOWW', function () {
    return view('driver.show');
});
