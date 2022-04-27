<?php

//Frontend
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\AboutController;
use App\Http\Controllers\Frontend\DonateController;
use App\Http\Controllers\Frontend\DataProtectionController;
use App\Http\Controllers\Admin\NewsletterSubscriberController;



//Portal
use App\Http\Controllers\Admin\AboutusController;
use App\Http\Controllers\Admin\AjaxController;
use App\Http\Controllers\Admin\IndianBloodDonorsController;
use App\Http\Controllers\Admin\SearchBreachController;
use App\Http\Controllers\Admin\CompanyController;

use App\Http\Controllers\Admin\CardsController;
use App\Http\Controllers\Admin\DataProtectionHeadingController;
use App\Http\Controllers\Admin\DonateHeadingController;
use App\Http\Controllers\Admin\FooterController;
use App\Http\Controllers\Admin\GdprComplianceController;
use App\Http\Controllers\Admin\HomeHeadingController;
use App\Http\Controllers\Admin\PaymentMethodController;
use App\Http\Controllers\Admin\RecentBranchesController;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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
    return view('backend.index');
});


Route::get('list', [AjaxController::class, 'index']);
Route::get('show-user', [AjaxController::class, 'show']);






Route::get('index', [HomeController::class, 'index'])->name('index');
Route::post('searchemail', [HomeController::class, 'searchemail'])->name('searchemail');
Route::post('searchphone', [HomeController::class, 'searchphone'])->name('searchphone');
Route::post('send_otp', [HomeController::class, 'send_otp'])->name('send_otp');
Route::post('verify_otp', [HomeController::class, 'verify_otp'])->name('verify_otp');

Route::post('searchpass', [HomeController::class, 'searchpass'])->name('searchpass');
Route::get('about', [AboutController::class, 'index'])->name('about');
Route::get('donate', [DonateController::class, 'index'])->name('donate');
Route::get('data-protection', [DataProtectionController::class, 'index'])->name('data-protection');
//Route::post('subscribe', [NewsletterSubscriberController::class, 'subscribe'])->name('subscribe');




//User
//Route::group(['prefix' => 'aboutus'], function () {
Route::get('/user-list', [UserController::class, 'index'])->name('user-list');
Route::get('/add-user', [UserController::class, 'create'])->name('show-user');
Route::post('/add-user', [UserController::class, 'store'])->name('add-user');
Route::get('/edit-user/{id}', [UserController::class, 'edit'])->name('edit-user');
Route::PUT('/update-user/{id}', [UserController::class, 'update'])->name('update-user');
Route::get('/delete-user/{id}', [UserController::class, 'destroy'])->name('delete-user');
//});

//Company
//Route::group(['prefix' => 'company'], function () {
Route::get('/company-list', [CompanyController::class, 'index'])->name('company-list');
Route::get('/add-company', [CompanyController::class, 'create'])->name('show-company');
Route::post('/add-company', [CompanyController::class, 'store'])->name('add-company');
Route::get('/edit-company/{id}', [CompanyController::class, 'edit'])->name('edit-company');
Route::PUT('/update-company/{id}', [CompanyController::class, 'update'])->name('update-company');
Route::get('/delete-company/{id}', [CompanyController::class, 'destroy'])->name('delete-company');
//});

//SearchBreach
//Route::group(['prefix' => 'searchbreach'], function () {
Route::get('/searchbreach-list', [SearchBreachController::class, 'index'])->name('searchbreach-list');
Route::get('/add-searchbreach', [SearchBreachController::class, 'create'])->name('show-searchbreach');
Route::post('/add-searchbreach', [SearchBreachController::class, 'store'])->name('add-searchbreach');
Route::get('/edit-searchbreach/{id}', [SearchBreachController::class, 'edit'])->name('edit-searchbreach');
Route::PUT('/update-searchbreach/{id}', [SearchBreachController::class, 'update'])->name('update-searchbreach');
Route::get('/delete-searchbreach/{id}', [SearchBreachController::class, 'destroy'])->name('delete-searchbreach');
//});

//Donors

//Route::group(['prefix' => 'indian-blood-donors'], function () {
Route::get('/indian-blood-donors-list', [IndianBloodDonorsController::class, 'index'])->name('indian-blood-donors-list');
Route::get('/add-indian-blood-donors', [IndianBloodDonorsController::class, 'create'])->name('show-indian-blood-donors');
Route::post('/add-indian-blood-donors', [IndianBloodDonorsController::class, 'store'])->name('add-indian-blood-donors');
Route::get('/edit-indian-blood-donors/{id}', [IndianBloodDonorsController::class, 'edit'])->name('edit-indian-blood-donors');
Route::PUT('/update-indian-blood-donors/{id}', [IndianBloodDonorsController::class, 'update'])->name('update-indian-blood-donors');
Route::get('/delete-indian-blood-donors/{id}', [IndianBloodDonorsController::class, 'destroy'])->name('delete-indian-blood-donors');
//});




//About

//Route::group(['prefix' => 'aboutus'], function () {
Route::get('aboutus-list', [AboutusController::class, 'index'])->name('aboutus-list');
Route::get('add-aboutus', [AboutusController::class, 'create'])->name('show-aboutus');
Route::post('add-aboutus', [AboutusController::class, 'store'])->name('add-aboutus');
Route::get('edit-aboutus/{id}', [AboutusController::class, 'edit'])->name('edit-aboutus');
Route::PUT('update-aboutus/{id}', [AboutusController::class, 'update'])->name('update-aboutus');
Route::get('delete-aboutus/{id}', [AboutusController::class, 'destroy'])->name('delete-aboutus');
//Route::post('/status-user/{id}', [AboutusController::class, 'changeStatus'])->name('status-user');
//});


//Payment-Method

//Route::group(['prefix' => 'payment'], function () {
Route::get('paymentmethod-list', [PaymentMethodController::class, 'index'])->name('paymentmethod-list');
Route::get('add-paymentmethod', [PaymentMethodController::class, 'create'])->name('show-paymentmethod');
Route::post('add-paymentmethod', [PaymentMethodController::class, 'store'])->name('add-paymentmethod');
Route::get('edit-paymentmethod/{id}', [PaymentMethodController::class, 'edit'])->name('edit-paymentmethod');
Route::PUT('update-paymentmethod/{id}', [PaymentMethodController::class, 'update'])->name('update-paymentmethod');
Route::get('delete-paymentmethod/{id}', [PaymentMethodController::class, 'destroy'])->name('delete-paymentmethod');
//});


//Home Heading

//Route::group(['prefix' => 'homeheading'], function () {
Route::get('homeheading-list', [HomeHeadingController::class, 'index'])->name('homeheading-list');
Route::get('add-homeheading', [HomeHeadingController::class, 'create'])->name('show-homeheading');
Route::post('add-homeheading', [HomeHeadingController::class, 'store'])->name('add-homeheading');
Route::get('edit-homeheading/{id}', [HomeHeadingController::class, 'edit'])->name('edit-homeheading');
Route::PUT('update-homeheading/{id}', [HomeHeadingController::class, 'update'])->name('update-homeheading');
Route::get('delete-homeheading/{id}', [HomeHeadingController::class, 'destroy'])->name('delete-homeheading');
//});


//Footer

//Route::group(['prefix' => 'footer'], function () {
Route::get('footer-list', [FooterController::class, 'index'])->name('footer-list');
Route::get('add-footer', [FooterController::class, 'create'])->name('show-footer');
Route::post('add-footer', [FooterController::class, 'store'])->name('add-footer');
Route::get('edit-footer/{id}', [FooterController::class, 'edit'])->name('edit-footer');
Route::PUT('update-footer/{id}', [FooterController::class, 'update'])->name('update-footer');
Route::get('delete-footer/{id}', [FooterController::class, 'destroy'])->name('delete-footer');


//Donate

//Route::group(['prefix' => 'dataprotection'], function () {
Route::get('donate-list', [DonateHeadingController::class, 'index'])->name('donate-list');
Route::get('add-donate', [DonateHeadingController::class, 'create'])->name('show-donate');
Route::post('add-donate', [DonateHeadingController::class, 'store'])->name('add-donate');
Route::get('edit-donate/{id}', [DonateHeadingController::class, 'edit'])->name('edit-donate');
Route::PUT('update-donate/{id}', [DonateHeadingController::class, 'update'])->name('update-donate');
Route::get('delete-donate/{id}', [DonateHeadingController::class, 'destroy'])->name('delete-donate');
//});


//Data Protection

//Route::group(['prefix' => 'dataprotection'], function () {
Route::get('dataprotection-list', [DataProtectionHeadingController::class, 'index'])->name('dataprotection-list');
Route::get('add-dataprotection', [DataProtectionHeadingController::class, 'create'])->name('show-dataprotection');
Route::post('add-dataprotection', [DataProtectionHeadingController::class, 'store'])->name('add-dataprotection');
Route::get('edit-dataprotection/{id}', [DataProtectionHeadingController::class, 'edit'])->name('edit-dataprotection');
Route::PUT('update-dataprotection/{id}', [DataProtectionHeadingController::class, 'update'])->name('update-dataprotection');
Route::get('delete-dataprotection/{id}', [DataProtectionHeadingController::class, 'destroy'])->name('delete-dataprotection');
//});


//Cards

//Route::group(['prefix' => 'Cards'], function () {
Route::get('cards-list', [CardsController::class, 'index'])->name('cards-list');
Route::get('add-cards', [CardsController::class, 'create'])->name('show-cards');
Route::post('add-cards', [CardsController::class, 'store'])->name('add-cards');
Route::get('edit-cards/{id}', [CardsController::class, 'edit'])->name('edit-cards');
Route::put('update-cards/{id}', [CardsController::class, 'update'])->name('update-cards');
Route::get('delete-cards/{id}', [CardsController::class, 'destroy'])->name('delete-cards');

//});


//Recent Branches

//Route::group(['prefix' => 'Recent Branches'], function () {
Route::get('recentbranches-list', [RecentBranchesController::class, 'index'])->name('recentbranches-list');
Route::get('add-recentbranches', [RecentBranchesController::class, 'create'])->name('show-recentbranches');
Route::post('add-recentbranches', [RecentBranchesController::class, 'store'])->name('add-recentbranches');
Route::get('edit-recentbranches/{id}', [RecentBranchesController::class, 'edit'])->name('edit-recentbranches');
Route::PUT('update-recentbranches/{id}', [RecentBranchesController::class, 'update'])->name('update-recentbranches');
Route::get('delete-recentbranches/{id}', [RecentBranchesController::class, 'destroy'])->name('delete-recentbranches');
//});

//GDPR Compliance

//Route::group(['prefix' => 'GDPR-Compliance'], function () {
Route::get('gdprcompliance-list', [GdprComplianceController::class, 'index'])->name('gdprcompliance-list');
Route::get('add-gdprcompliance', [GdprComplianceController::class, 'create'])->name('show-gdprcompliance');
Route::post('add-gdprcompliance', [GdprComplianceController::class, 'store'])->name('add-gdprcompliance');
Route::get('edit-gdprcompliance/{id}', [GdprComplianceController::class, 'edit'])->name('edit-gdprcompliance');
Route::PUT('update-gdprcompliance/{id}', [GdprComplianceController::class, 'update'])->name('update-gdprcompliance');
Route::get('delete-gdprcompliance/{id}', [GdprComplianceController::class, 'destroy'])->name('delete-gdprcompliance');
//});




Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
