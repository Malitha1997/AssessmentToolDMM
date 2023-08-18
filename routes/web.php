<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PDFController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\GoogleChartsController;
use App\Http\Controllers\GovorganizationController;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\GovOrganizationNameController;
use App\Http\Controllers\PreliminaryassessmentController;
use App\Http\Controllers\PreliminaryAssessmentResultController;

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

Route::get('/report', function () {
    return view('chart');
});

Route::get('/adminNavbar', function () {
    return view('layouts.adminNavbar');
});

Route::resource('users', UserController::class);

Auth::routes();

/*All Normal Users Routes List*/

Route::middleware(['auth', 'user-access:user'])->group(function () {
    Route::get('/home', [HomeController::class, 'index'])->name('userHome');
    Route::get('/signup', [GovorganizationController::class, 'create'])->name('signup');
    Route::resource('govorganizations', GovorganizationController::class);
    Route::get('/livesearch',[SearchController::class,'livesearch'])->name('livesearch');

    //Preliminary Assessment
    Route::get('/preliminaryAssessment1', [PreliminaryassessmentController::class, 'index'])->name('preliminaryAssessment1');
    Route::get('/preliminaryAssessment2', [PreliminaryassessmentController::class, 'prepage2'])->name('preliminaryAssessment2');
    Route::get('/preliminaryAssessment3', [PreliminaryassessmentController::class, 'prepage3'])->name('preliminaryAssessment3');
    Route::get('/preliminaryAssessment4', [PreliminaryassessmentController::class, 'prepage4'])->name('preliminaryAssessment4');
    Route::get('/preliminaryAssessment5', [PreliminaryassessmentController::class, 'prepage5'])->name('preliminaryAssessment5');
    Route::get('/preliminaryResults', [PreliminaryAssessmentResultController::class, 'result'])->name('preliminaryResults');
    Route::get('/technologyresults',[GoogleChartsController::class,'technologyChart'])->name('technologyresults');
    Route::get('/customerresults',[GoogleChartsController::class,'customerChart'])->name('customerresults');
    Route::get('/culturerresults',[GoogleChartsController::class,'cultureChart'])->name('culturerresults');
    Route::get('/strategyresults',[GoogleChartsController::class,'strategyChart'])->name('strategyresults');
    Route::get('/operationresults',[GoogleChartsController::class,'operationChart'])->name('operationresults');
    Route::resource('preliminaryAssessments', PreliminaryAssessmentResultController::class);

    Route::post('/store-value-page01', [PreliminaryassessmentController::class, 'storeValuePage01'])->name('storeValue1');
    Route::post('/store-value-page02', [PreliminaryassessmentController::class, 'storeValuePage02'])->name('storeValue2');
    Route::post('/store-value-page03', [PreliminaryassessmentController::class, 'storeValuePage03'])->name('storeValue3');
    Route::post('/store-value-page04', [PreliminaryassessmentController::class, 'storeValuePage04'])->name('storeValue4');
    Route::post('/store-value-page05', [PreliminaryassessmentController::class, 'storeValuePage05'])->name('storeValue5');


    Route::controller(SearchController::class)->group(function(){
        Route::get('autocomplete4', 'autocomplete')->name('autocomplete4');
        // Route::get('autocomplete2', 'autocomplete2')->name('autocomplete2');
        // Route::get('autocomplete3', 'autocomplete3')->name('autocomplete3');
    });

    Route::get('generate-pdf', [PDFController::class, 'generatePDF'])->name('generate-pdf');

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

Route::controller(GovOrganizationNameController::class)->group(function(){
    Route::get('test', 'index');
    Route::get('autocomplete10', 'autocomplete10')->name('autocomplete10');
});

Route::get('/testsearch',[SearchController::class,'testsearch'])->name('testsearch');

Route::controller(SearchController::class)->group(function(){
    Route::get('autocomplete', 'autocomplete')->name('autocomplete');
    Route::get('autocomplete2', 'autocomplete2')->name('autocomplete2');
    Route::get('autocomplete3', 'autocomplete3')->name('autocomplete3');
});

Route::get('/preliminaryAssessment1', [PreliminaryassessmentController::class, 'index'])->name('preliminaryAssessment1');
Route::get('/preliminaryAssessment2', [PreliminaryassessmentController::class, 'prepage2'])->name('preliminaryAssessment2');
Route::get('/preliminaryAssessment3', [PreliminaryassessmentController::class, 'prepage3'])->name('preliminaryAssessment3');

Route::get('preview', [PDFController::class,'preview']);

Route::get('download', [PDFController::class,'download'])->name('download');


