<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminAuthController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\EventController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\ServiceProvider\ServiceAuthController;
use App\Http\Controllers\ServiceProvider\ServiceDashboardController;
use App\Http\Controllers\ServiceProvider\ServiceMangementController;
use App\Http\Middleware\CheckStatus;
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
Route::get('service/search', 'App\Http\Controllers\LandingpageController@service_search')->name('service.search');
Route::get('/booking/make/{service}/{price}', 'App\Http\Controllers\LandingpageController@booking')->name('booking.make');
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

Route::view('pendding/profile', 'serviceProvider.pendding_profile')->name('pendding.profile');


Route::group(['prefix'=>'serviceprovider','as'=>'serviceprovider.','middleware' => ['auth:service_provider','checkStatus']], function() {
    Route::get('/logout', [ServiceAuthController::class,'logout'])->name('logout');
    Route::get('/edit', [ServiceAuthController::class,'edit'])->name('edit');
    Route::post('/update/{id}', [ServiceAuthController::class,'update'])->name('update');
    Route::get('/dashboard', [ServiceDashboardController::class, 'index'])->name('dashboard');
    Route::get('/booking', [ServiceDashboardController::class, 'booking'])->name('booking');
    Route::get('/booking/today', [ServiceDashboardController::class, 'booking_today'])->name('booking.today');
    Route::resource('service', ServiceMangementController::class);
});

Route::get('/admin',[AdminAuthController::class,'login_view'])->name('admin');
Route::post('/admin',[AdminAuthController::class,'login'])->name('admin.login');

Route::group(['prefix'=>'admin','as'=>'admin.','middleware' => ['auth:admin']], function() {
    Route::get('/logout', [AdminAuthController::class,'logout'])->name('logout');
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    // provider

    Route::get('/provider/all', [DashboardController::class, 'provider_all'])->name('provider.all');

    Route::get('/provider/unverfied', [DashboardController::class, 'provider_unverfied'])->name('provider.unverfived');
    Route::get('/provider/edit/{id}', [DashboardController::class, 'provider_edit'])->name('provider.edit');
    Route::post('/provider/update/{id}', [DashboardController::class, 'provider_update'])->name('provider.update');


    Route::get('/booking/today', [DashboardController::class, 'booking_today'])->name('booking.today');
    Route::get('/booking/all', [DashboardController::class, 'booking_all'])->name('booking.all');


    Route::resource('event', EventController::class);
    Route::resource('service', ServiceController::class);
});
