<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;

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
    return view('frontend.home.home');
});

//Auth
Route::group(['prefix'=> 'admin', 'middleware'=>['admin:admin']], function(){
	Route::get('/login', [AdminController::class, 'loginForm']);
	Route::post('/login',[AdminController::class, 'store'])->name('admin.login');
});

Route::middleware(['auth:sanctum,admin', 'verified'])->get('/admin/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


Route::middleware(['auth:sanctum,web', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

//Cookie Policy
Route::get('/cookie-policy', function(){
    return view('frontend.cookie_policy');
});
//Privacy Policy
Route::get('/privacy-policy', function(){
    return view('frontend.privacy_policy');
});
//Returns and Refunds
Route::get('/return-and-refunds', function(){
    return view('frontend.returns_and_refunds');
});
//Terms and Conditions
Route::get('/terms-and-conditions', function(){
    return view('frontend.terms_and_conditions');
});
