<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PDFController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\AddNewOrganization;
use App\Http\Controllers\ResourceController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\GovofficialController;
use App\Http\Controllers\GoogleChartsController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\DeepAssessmentController;
use App\Http\Controllers\GovofficialUserController;
use App\Http\Controllers\GovorganizationController;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\GovOrganizationNameController;
use App\Http\Controllers\CompetancyAssessmentController;
use App\Http\Controllers\GovOrganizationReportController;
use App\Http\Controllers\PreliminaryassessmentController;
use App\Http\Controllers\GovOrganizationDashboardController;
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

// Route::get('/create/govofficial', function () {
//     return view('admin.CompetancyAssessment.createGovOfficial');
// });




Route::resource('users', UserController::class);

Auth::routes();

Route::get('/login2',[LoginController::class,'logingovofficial'])->name('login2');
Route::get('/register2',[RegisterController::class,'logingovofficialregister'])->name('register2');

/*All Normal Users Routes List*/

Route::middleware(['auth', 'user-access:user','prevent-back-history','web'])->group(function () {
    Route::get('/home', [HomeController::class, 'index'])->name('userHome');
    Route::get('/signup', [GovorganizationController::class, 'create'])->name('signup');
    Route::get('/get-organization-names', [GovOrganizationNameController::class, 'getOrganizationNames']);
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

    Route::get('/resources',[GovorganizationController::class,'resources'])->name('resources');

    Route::controller(SearchController::class)->group(function(){
        Route::get('autocomplete4', 'autocomplete')->name('autocomplete4');
        // Route::get('autocomplete2', 'autocomplete2')->name('autocomplete2');
        // Route::get('autocomplete3', 'autocomplete3')->name('autocomplete3');
    });

    Route::get('generate-pdf', [PDFController::class, 'generatePDF'])->name('generate-pdf');
    Route::get('download','PDFController@download');
    Route::resource('resourceusers', ResourceController::class);

    Route::get('/dashboard',[GovOrganizationDashboardController::class,'dashboard'])->name('dashboard');
    Route::get('/searchGov2', [GovOrganizationDashboardController::class, 'dashboard'])->name('searchGov2');
    Route::get('/dashboard/layers',[GovOrganizationDashboardController::class,'layerDashboard'])->name('layerDashboard');
    Route::get('/searchGov3', [GovOrganizationDashboardController::class, 'layerDashboard'])->name('searchGov3');

    Route::get('/report', [GovOrganizationReportController::class, 'report'])->name('govOrganizationReport');


});

/*All Admin Routes List*/

Route::middleware(['auth', 'user-access:admin','prevent-back-history','web'])->group(function () {
    Route::get('/admin/home', [HomeController::class, 'adminHome'])->name('home');
    // Route::get('/admin/organizationProfile', [GovorganizationController::class, 'organizationProfile'])->name('organizationProfile');
    Route::resource('govorganizations', GovorganizationController::class);
    Route::get('/show_results/{id}', [PreliminaryAssessmentResultController::class, 'adminResult'])->name('show_results');
    Route::get('generate-pdf/{id}', [PDFController::class, 'adminGeneratePDF'])->name('generate-pdf');
    Route::get('technologyresults/{id}', [GoogleChartsController::class, 'adminTechnologyChart'])->name('technologyresults');
    Route::get('customerresults/{id}', [GoogleChartsController::class, 'adminCustomerChart'])->name('customerresults');
    Route::get('operationresults{id}', [GoogleChartsController::class, 'adminOperationChart'])->name('operationresults');
    Route::get('strategyresults/{id}', [GoogleChartsController::class, 'adminStrategyChart'])->name('strategyresults');
    Route::get('cultureresults/{id}', [GoogleChartsController::class, 'adminCultureChart'])->name('cultureresults');

    Route::get('create-user', [UserController::class, 'createAdmin'])->name('create-user');
    Route::get('createUser', [RegisterController::class, 'adminUserCreate'])->name('createUser');
    Route::post('create/user/govofficial/{id}', [CompetancyAssessmentController::class, 'create'])->name('create-user-govofficial');
    Route::post('create/govofficial/', [CompetancyAssessmentController::class, 'createGovOfficial'])->name('create-govofficial');

    Route::get('/competancy/dashboard', [CompetancyAssessmentController::class, 'operational'])->name('competancyDashboard');
    Route::get('/competancy/govorganization', [CompetancyAssessmentController::class, 'govOrganization'])->name('competancyGovorganization');
    Route::resource('competancyAssessments', CompetancyAssessmentController::class);

    Route::get('/competancy/govorganization/ict/{id}', [CompetancyAssessmentController::class, 'govIct'])->name('competancyGovorganizationIct');
    Route::get('/competancy/govorganization/dg/{id}', [CompetancyAssessmentController::class, 'govDigitalGovernment'])->name('competancyGovorganizationDigitalGovernment');
    Route::get('/competancy/govorganization/mgt/{id}', [CompetancyAssessmentController::class, 'govManagement'])->name('competancyGovorganizationManagement');

    Route::get('/searchGov', [CompetancyAssessmentController::class, 'search']);

    Route::get('/cdio', [DeepAssessmentController::class, 'index'])->name('cdio');

    Route::get('/add/organization', [AddNewOrganization::class, 'create'])->name('addOrganization');
    Route::post('/store/organization', [AddNewOrganization::class, 'store'])->name('storeOrganization');

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

Route::middleware(['auth', 'user-access:manager'])->group(function () {
    Route::get('/govofficial/home', [HomeController::class, 'govofficialHome'])->name('govofficial.home');
    Route::post('/logout2', [LoginController::class, 'logout2'])->name('logout2');
    Route::get('/signup2', [GovofficialController::class, 'create'])->name('signup2');
    Route::post('/govofficials/create', [GovofficialController::class, 'create'])->name('govofficials.create');

});

Route::resource('govofficials', GovofficialController::class);





