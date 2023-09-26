<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminAuthController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\EventController;
use App\Http\Controllers\Admin\ServiceController;
use Illuminate\Support\Facades\Hash;


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
Route::view('about', 'about');
Route::view('contact', 'contact');
Route::view('services', 'services');



Route::group(['middleware' => ['auth:web']], function() {
    // Route::get('/users', [UserController::class, 'users']);
});

Route::get('/testing', function(){
    return Hash::make('admin');
});

Route::get('/admin',[AdminAuthController::class,'login_view'])->name('admin');
Route::post('/admin',[AdminAuthController::class,'login'])->name('admin.login');

Route::group(['prefix'=>'admin','as'=>'admin.','middleware' => ['auth:admin']], function() {
    Route::get('/logout', [AdminAuthController::class,'logout'])->name('logout');
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::resource('event', EventController::class);
    Route::resource('service', ServiceController::class);
});
