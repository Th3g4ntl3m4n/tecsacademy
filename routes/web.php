<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\firstRegister;
use App\Http\Controllers\showInformation;
use App\Http\Controllers\ProductsController;

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

Route::controller(PageController::class)->group(function(){
    Route::get('/',            'home')->name('home');
    Route::get('/tecsintro',            'tecsIntro')->name('tecsintro');
    Route::get('/precios',            'pricing')->name('pricing');
    
});

Route::get('/paydetails', function () {
    return view('paydetails');
})->name('paydetails');

Route::get('/payment', function () {
    return view('payment');
})->name('payment');

Route::get('/termsAndConditions', function () {
    return view('termsAndConditions');
})->name('termsAndConditions');




Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

/* First Register Controller */
Route::post('/firstRegister', 'App\Http\Controllers\firstRegister@firstRegister')->name('firstRegister');

/* Logout Controller */
Route::get('/logout', 'App\Http\Controllers\LogoutController@logout')->name('logout');


/* Show All Users */
Route::get('/showallusers', [showInformation::class, 'ShowAllUsers'])->name('showallusers');

/* Products Register */
Route::post('/productRegister', [ProductsController::class, 'productRegister'])->name('productRegister');

/*Ruta vista registrar producto */
Route::get('/formProductRegister', function () {
    return view('dashboard.formProductRegister');
})->name('formProductRegister');





Route::get('/profile', function () {
    return view('profile');
})->name('profile');

require __DIR__.'/auth.php';


