<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminAuthController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\EventController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\ServiceProvider\ServiceAuthController;
use App\Http\Controllers\ServiceProvider\ServiceDashboardController;
use App\Http\Controllers\ServiceProvider\ServiceMangementController;
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

Route::get('/', 'App\Http\Controllers\LandingpageController@index')->name('index');
Route::get('/services/list', 'App\Http\Controllers\LandingpageController@services_list')->name('services.list');
Route::get('services/view/{id?}', 'App\Http\Controllers\LandingpageController@services_show')->name('services.view');
Route::view('about', 'about')->name('about');
Route::view('event', 'event')->name('event');
Route::view('faq', 'faq')->name('faq');
Route::view('gallery', 'gallery')->name('gallery');
Route::view('contact', 'contact')->name('contact');
Route::post('contact', 'App\Http\Controllers\LandingpageController@contact_form')->name('contact');
Route::get('/services', 'App\Http\Controllers\LandingpageController@services')->name('services');
Route::get('/booking/{service}/{price}', 'App\Http\Controllers\LandingpageController@booking')->name('booking');
Route::post('booking' , 'App\Http\Controllers\LandingpageController@booking_form')->name('booking');



Route::group(['middleware' => ['auth:web']], function() {
    // Route::get('/users', [UserController::class, 'users']);
});

Route::get('/testing', function(){
    return Hash::make('admin');
});

Route::get('/serviceprovider',[ServiceAuthController::class,'login_view'])->name('serviceprovider');
Route::post('/serviceprovider',[ServiceAuthController::class,'login'])->name('serviceprovider.login');

Route::get('/serviceprovider/register',[ServiceAuthController::class,'register_view'])->name('serviceprovider.register');
Route::post('/serviceprovider/register',[ServiceAuthController::class,'register'])->name('serviceprovider.register');


Route::group(['prefix'=>'serviceprovider','as'=>'serviceprovider.','middleware' => ['auth:service_provider']], function() {
    Route::get('/logout', [ServiceAuthController::class,'logout'])->name('logout');
    Route::get('/dashboard', [ServiceDashboardController::class, 'index'])->name('dashboard');
    Route::get('/booking', [ServiceDashboardController::class, 'booking'])->name('booking');
    Route::resource('service', ServiceMangementController::class);
});

Route::get('/admin',[AdminAuthController::class,'login_view'])->name('admin');
Route::post('/admin',[AdminAuthController::class,'login'])->name('admin.login');

Route::group(['prefix'=>'admin','as'=>'admin.','middleware' => ['auth:admin']], function() {
    Route::get('/logout', [AdminAuthController::class,'logout'])->name('logout');
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::resource('event', EventController::class);
    Route::resource('service', ServiceController::class);
});
