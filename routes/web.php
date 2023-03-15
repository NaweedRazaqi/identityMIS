<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Profile\JobController;
use App\Http\Controllers\Profile\PrintController;
use App\Http\Controllers\Auth\UseraccessController;
use App\Http\Controllers\Profile\AddressController;
use App\Http\Controllers\Profile\ProfileController;
use App\Http\Controllers\Profile\RelativesController;
use App\Http\Controllers\Auth\UsersRegisterController;
use App\Http\Controllers\Dashboard\DashboarController;
use App\Http\Controllers\Profile\IdentityDetailsController;

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
// login
Route::resource('/',LoginController::class);
Route::get('/login',[LoginController::class,'index'])->name('login');

Route::post('/login', [LoginController::class, 'authUser']);

Route::get('/logout', [LoginController::class, 'logout'])->middleware('auth');
// User Registeration 
  Route::get('/register',[UsersRegisterController::class,'create'])->middleware(['auth','isAdmin']);
  // create new user
  Route::post('/users',[UsersRegisterController::class,'store'])->middleware(['auth','isAdmin']);
  // search user
  Route::get('/searchusers',[UsersRegisterController::class,'index'])->middleware(['auth','isAdmin']);
  // fetch user
  Route::get('/useredit/{id}',[UsersRegisterController::class,'edit'])->middleware(['auth','isAdmin']);
  // update user
  Route::put('/useredit/{id}',[UsersRegisterController::class,'update'])->middleware(['auth','isAdmin']);
  // User Activation
  Route::get('/useractivation/{id}',[UsersRegisterController::class,'getuser'])->middleware(['auth','isAdmin']);
  Route::put('/useractivation/{id}',[UsersRegisterController::class,'updateactivation'])->middleware(['auth','isAdmin']);
 // User Access 
 Route::get('/accesstouser/{id}',[UseraccessController::class,'getuser'])->middleware(['auth','isAdmin']);
 
 Route::put('/accesstouser/{id}',[UseraccessController::class,'storeaccess'])->middleware(['auth','isAdmin']);

 // Get dashboard
 Route::get('/dashboard',[DashboarController::class,'index'])->middleware(['auth','isAdmin']);
 Route::get('/report',[DashboarController::class,'getreport'])->middleware(['auth','isAdmin']);
 Route::post('/loadreportdata',[DashboarController::class,'getreportdata'])->middleware(['auth','isAdmin']);
 Route::post('/candidateExportDetails',[DashboarController::class,'exportCandidateData'])->middleware(['auth'])->name('exportcandidates');


 // main page
 Route::get('/', function () {
  return redirect(route('login'));
  });

// Profile
Route::get('/showpro',[ProfileController::class,'index'])->middleware(['auth']);
Route::post('/showpro',[ProfileController::class,'storeProfiles'])->middleware(['auth']);
Route::get('/profilelists',[ProfileController::class,'showprofilelist'])->middleware(['auth']);
Route::get('/addprofiledetails/{id}',[ProfileController::class,'showprofiledetails'])->middleware(['auth'])->name('addprofiledetails');
Route::get('/updatepro/{id}',[ProfileController::class,'showupdateprofile'])->middleware(['auth']);
Route::put('/updatepro/{id}',[ProfileController::class,'updatecandprofile'])->middleware(['auth']);
Route::get('/candidateDetails/{id}',[ProfileController::class,'showcandidateDetail'])->middleware(['auth']);
Route::post('/candidateDetails/{id}',[ProfileController::class,'storecandidataDetails'])->middleware(['auth']);
Route::get('/listcandidates/{id}',[ProfileController::class,'listCandidate'])->middleware(['auth'])->name('listcandidates');
Route::get('/updatecandidatedetails/{id}',[ProfileController::class,'showcandidatedetailsUpdate'])->middleware(['auth']);
Route::put('/updatecandidatedetails/{id}',[ProfileController::class,'updatecandidateDetails'])->middleware(['auth']);

//Job
Route::get('/createjob/{id}',[JobController::class,'getjobs'])->middleware(['auth']);

Route::post('/createjob/{id}',[JobController::class,'storejob'])->middleware(['auth']);

Route::get('/createjob/{id}',[JobController::class,'listjobs'])->middleware(['auth']);

// Address

Route::post('/createaddress/{id}',[AddressController::class,'storeAddress'])->middleware(['auth']);
//Route::get('/createaddress',[AddressController::class,'getprovincelist'])->name('getprovincelist');

// Relatives

Route::post('/relativesmodal/{id}',[RelativesController::class,'storeRelatives'])->middleware(['auth']);

//Print
Route::get('/IDForm/{id}',[PrintController::class,'getprintForm'])->middleware(['auth']);
Route::get('/showprofileforprint',[PrintController::class,'showprofilelistforprint'])->middleware(['auth']);


// Identity Details
Route::get('/identitydetails/{id}',[IdentityDetailsController::class,'index'])->middleware(['auth']);
Route::post('/identitydetails/{id}',[IdentityDetailsController::class,'storeCandiateIdentityDetails'])->middleware(['auth']);
