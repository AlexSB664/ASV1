<?php
use Illuminate\Auth\Middleware\EnsureEmailIsVerified;
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
    return view('auth.login');
});

//Route::get('/','PrincipalController@index');

//Route::get('/login.html','PrincipalController@index')->name('web.login');

Route::get('/registro.html','PrincipalController@registro')->name('registro');


Route::get('/home', 'HomeController@index')->name('home');
Route::get('/orgIntercambio', 'PrincipalController@orgIntercambio')->name('nuevoInter');
Route::get('/misIntercambios', 'PrincipalController@misIntercambios')->name('listaInter');
Route::get('/desbloquearIntercambio', 'PrincipalController@aguaFiestas')->name('aguaFiestas');
/*Auth::routes();
Route::get('email/verify', 'Auth\VerificationController@show')
->name('verification.notice');
Route::get('email/verify/{id}', 'Auth\VerificationController@verify')->name('verification.verify');
Route::get('email/resend', 'Auth\VerificationController@resend')
->name('verification.resend');*/
Auth::routes(['verify' => true]);
Route::get('profile', function () {
    // Only verified users may enter...
})->middleware('verified');