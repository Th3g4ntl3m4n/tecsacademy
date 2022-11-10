<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\firstRegister;
use App\Http\Controllers\showInformation;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\ProductRequestController;
use App\Http\Controllers\UserPaymentController;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\CursoController;

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
    Route::get('/stage',            'stage')->name('stage');
    Route::get('/satageTeacher',            'satageTeacher')->name('satageTeacher');
   
    
});

/* Prueba de vistas pagos */

Route::get('/payment-response', function () {
    return view('payment-response');
})->name('payment-response');

Route::get('/payment-confirmation', function () {
    return view('payment-confirmation');
})->name('payment-confirmation');

/* End pruebas rutas pagos */

Route::get('/paydetails', function () {
    return view('paydetails');
})->name('paydetails');

Route::get('/payment', function () {
    return view('payment');
})->name('payment');

Route::get('/termsAndConditions', function () {
    return view('termsAndConditions');
})->name('termsAndConditions');

Route::get('/store', function () {
    return view('store');
})->name('store');




Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

/* First Register Controller */
Route::post('/firstRegister', 'App\Http\Controllers\firstRegister@firstRegister')->name('firstRegister');

/* Logout Controller */
Route::get('/logout', 'App\Http\Controllers\LogoutController@logout')->name('logout');


/* Show All Users */
Route::get('/consultantSells', [ProductRequestController::class, 'sells'])->name('consultantSells');

/* show All sells */

/* Show All Users */
Route::get('/showallusers', [showInformation::class, 'ShowAllUsers'])->name('showallusers');

/* Show pending users */
Route::get('/counterView', [UserPaymentController::class, 'counter'])->name('counterView');

/* Show Aproved users in teachers view*/
Route::get('/teacherStudentsView', [FeedbackController::class, 'ShowAllStudents'])->name('teacherStudentsView');

/* Show Aproved users in counter view*/
Route::get('/counterAprobed', [UserPaymentController::class, 'counterAprobed'])->name('counterAprobed');

/* Show all pays users in counter view*/
Route::get('/counterAllPays', [UserPaymentController::class, 'counterAllPays'])->name('counterAllPays');


/* confirm pay */
Route::post('/ClickonConfirmation', 'App\Http\Controllers\UserPaymentController@ClickonConfirmation')->name('ClickonConfirmation');

/* Refuse pay */ 
Route::post('/cliconDenegate', 'App\Http\Controllers\UserPaymentController@cliconDenegate')->name('cliconDenegate');


/* Show All Products */
Route::get('/store', [ProductsController::class, 'ShowAllProducts'])->name('showallproducts');

/* Show All Products in Student Dashboard*/

Route::get('dashboard.student', [ProductsController::class, 'showAllProductsUser'])->name('showallproductsuser');

/* pay page in Student Dashboard*/

Route::get('dashboard.studentPay', [ProductRequestController::class, 'payButton'])->name('payButton');

/* Products Register */
Route::post('/productRegister', [ProductsController::class, 'productRegister'])->name('productRegister');

/* Ajax to sent Email */

Route::post('miJqueryAjax','ProductRequestController@create');

/* Formulario enviar correo bienvenida*/
Route::post('/showallusers', 'App\Http\Controllers\ProductRequestController@clickOnSent')->name('clickOnSent');

/* Enviar feedback Controller */
Route::post('/sendFeedback', 'App\Http\Controllers\FeedbackController@sendFeedback')->name('sendFeedback');


/* formulario Crear curso y/o clasa para el profesor (salon) */
Route::get('/formNewCourse', function () {
    return view('dashboard.createNewCourse');
})->name('formNewCourse');

/* Creat formulario de curso */
Route::post('/createNewCourse', 'App\Http\Controllers\CursoController@createNewCourse')->name('createNewCourse');

/*Ruta vista registrar producto */
Route::get('/formProductRegister', function () {
    return view('dashboard.formProductRegister');
})->name('formProductRegister');





Route::get('/profile', function () {
    return view('profile');
})->name('profile');



require __DIR__.'/auth.php';


