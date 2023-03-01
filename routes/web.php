<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\UseraccessController;
use App\Http\Controllers\Auth\UsersRegisterController;
use App\Http\Controllers\Dashboard\DashboarController;

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
  // ----> show register Form

  Route::get('/register',[UsersRegisterController::class,'create'])->middleware('auth');
  // create new user
  Route::post('/users',[UsersRegisterController::class,'store'])->middleware('auth');
  // search user
  Route::get('/searchusers',[UsersRegisterController::class,'index'])->middleware('auth');;
  // fetch user
  Route::get('/useredit/{id}',[UsersRegisterController::class,'edit'])->middleware('auth');;
  // update user
  Route::put('/useredit/{id}',[UsersRegisterController::class,'update'])->middleware('auth');;
  // User Activation
  Route::get('/useractivation/{id}',[UsersRegisterController::class,'getuser'])->middleware('auth');;
  Route::put('/useractivation/{id}',[UsersRegisterController::class,'updateactivation'])->middleware('auth');;
 // User Access 
 Route::get('/accesstouser',[UseraccessController::class,'index'])->middleware('auth');;
 
 Route::post('/accesstouser',[UseraccessController::class,'storeaccess'])->middleware('auth');;


 // Get dashboard
 Route::get('/dashboard',[DashboarController::class,'index'])->middleware('auth');

 // main page
 Route::get('/', function () {
  return redirect(route('login'));
  });
