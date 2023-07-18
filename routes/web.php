<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\GovorganizationController;
use App\Http\Controllers\Auth\ForgotPasswordController;

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

Route::get('/landing', function () {
    return view('landing');
});

Route::resource('users', UserController::class);

Auth::routes();

/*All Normal Users Routes List*/

Route::middleware(['auth', 'user-access:user'])->group(function () {
    Route::get('/home', [HomeController::class, 'index'])->name('userHome');
    Route::get('/signup', [GovorganizationController::class, 'create'])->name('signup');
    Route::resource('govorganizations', GovorganizationController::class);
    Route::get('/livesearch',[SearchController::class,'livesearch'])->name('livesearch');

});

/*All Admin Routes List*/

Route::middleware(['auth', 'user-access:admin'])->group(function () {
    Route::get('/admin/home', [HomeController::class, 'adminHome'])->name('home');

});

Route::resource('users', UserController::class);
Route::resource('govorganizations', GovorganizationController::class);

Route::get('forget-password', [ForgotPasswordController::class, 'showForgetPasswordForm'])->name('forget.password.get');
Route::post('forget-password', [ForgotPasswordController::class, 'submitForgetPasswordForm'])->name('forget.password.post');
Route::get('reset-password/{token}', [ForgotPasswordController::class, 'showResetPasswordForm'])->name('reset.password.get');
Route::post('reset-password', [ForgotPasswordController::class, 'submitResetPasswordForm'])->name('reset.password.post');

Route::get('/search',[SearchController::class,'govOrgNameSearching'])->name('search');
Route::get('/test',[GovorganizationController::class,'testing'])->name('test');
Route::get('/testsearch',[SearchController::class,'testsearch'])->name('testsearch');

Route::controller(SearchController::class)->group(function(){
    Route::get('autocomplete', 'autocomplete')->name('autocomplete');
    Route::get('autocomplete2', 'autocomplete2')->name('autocomplete2');
    Route::get('autocomplete3', 'autocomplete3')->name('autocomplete3');
}); 
