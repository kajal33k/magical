<?php


use App\Http\Controllers\AboutController;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\PlanCOntroller;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\TestimonialController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OrderRequestController;

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
Route::get('/',[HomeController::class,'index'])->name('home');
Route::get('/landing', [HomeController::class, 'landing'])->name('landing');
Route::get('/about',[HomeController::class,'about'])->name('about');

Route::get('/contact',[HomeController::class,'contact'])->name('contact');



Route::get('login-form',[AuthController::class,'index'])->name('login-form');
Route::get('registration',[AuthController::class,'registration'])->name('registration');
//Route::post('store', [AuthController::class, 'store'])->name('auth.store');
Route::post('auth-store', [AuthController::class, 'store'])->name('auth-store');
Route::post('login',[AuthController::class,'login'])->name('auth.login');
Route::get('logout',[AuthController::class,'logout'])->name('logout');
Route::get('forget',[AuthController::class,'forget'])->name('auth.forget');
Route::post('forget',[AuthController::class,'forget_pass'])->name('auth.forget_pass');
Route::get('reset-password',[AuthController::class,'reset_password'])->name('reset-password');
Route::post('store-password',[AuthController::class,'store_password'])->name('store-password');

Route::post('appointment/store',[AppointmentController::class,'store'])->name('appointment.store');
Route::post('orderRequest/store',[OrderRequestController::class,'store'])->name('orderRequest.store');


Route::get('dashboard', [AuthController::class, 'dashboard'])
    ->middleware(['auth'])
    ->name('auth.dashboard');

Route::group(['middleware' => ['auth']],function (){
    Route::get('index',[BannerController::class,'index'])->name('banner.index');
    Route::get('create',[BannerController::class,'create'])->name('banner.create');
    Route::post('store',[BannerController::class,'store'])->name('banner.store');
    Route::get('edit/{banner}',[BannerController::class,'edit'])->name('banner.edit');
    Route::get('delete/{banner}',[BannerController::class,'delete'])->name('banner.delete');
    Route::get('duplicate/{banner}',[BannerController::class,'duplicate'])->name('banner.duplicate');
    Route::post('update/{banner}',[BannerController::class,'update'])->name('banner.update');

      //  about

    Route::get('about/index',[AboutController::class,'index'])->name('about.index');
    Route::get('about/create',[AboutController::class,'create'])->name('about.create');
    Route::post('about/store',[AboutController::class,'store'])->name('about.store');
    Route::get('about/edit/{about}',[AboutController::class,'edit'])->name('about.edit');
    Route::get('about/delete/{about}',[AboutController::class,'delete'])->name('about.delete');
    Route::get('about/duplicate/{about}',[AboutController::class,'duplicate'])->name('about.duplicate');
    Route::post('about/update/{about}',[AboutController::class,'update'])->name('about.update');

    // Appointment

    Route::get('appointment/index',[AppointmentController::class,'index'])->name('appointment.index');
    Route::get('appointment/create',[AppointmentController::class,'create'])->name('appointment.create');
    Route::get('appointment/edit/{appointment}',[AppointmentController::class,'edit'])->name('appointment.edit');
    Route::post('appointment/update/{appointment}',[AppointmentController::class,'update'])->name('appointment.update');
    Route::get('appointment/delete/{appointment}',[AppointmentController::class,'delete'])->name('appointment.delete');
    Route::get('appointment/duplicate/{appointment}',[AppointmentController::class,'duplicate'])->name('appointment.duplicate');

    Route::get('orderRequest/index',[OrderRequestController::class,'index'])->name('orderRequest.index');
    Route::get('orderRequest/delete/{orderRequest}',[OrderRequestController::class,'delete'])->name('orderRequest.delete');


    //services

    Route::get('service/index',[ServiceController::class,'index'])->name('service.index');
    Route::get('service/create',[ServiceController::class,'create'])->name('service.create');
    Route::post('service/store',[ServiceController::class,'store'])->name('service.store');
    Route::get('service/edit/{service}',[ServiceController::class,'edit'])->name('service.edit');
    Route::post('service/update/{service}',[ServiceController::class,'update'])->name('service.update');
    Route::get('service/delete/{service}',[ServiceController::class,'delete'])->name('service.delete');
    Route::get('service/duplicate/{service}',[ServiceController::class,'duplicate'])->name('service.duplicate');


    // Plans

    Route::get('plan/index',[PlanCOntroller::class,'index'])->name('plan.index');
    Route::get('plan/create',[PlanCOntroller::class,'create'])->name('plan.create');
    Route::post('plan/store',[PlanCOntroller::class,'store'])->name('plan.store');
    Route::get('plan/edit/{plan}',[PlanCOntroller::class,'edit'])->name('plan.edit');
    Route::post('plan/update/{plan}',[PlanCOntroller::class,'update'])->name('plan.update');
    Route::get('plan/delete/{plan}',[PlanCOntroller::class,'delete'])->name('plan.delete');
    Route::get('plan/duplicate/{plan}',[PlanCOntroller::class,'duplicate'])->name('plan.duplicate');


    //testimonial

    Route::get('testimonial/index',[TestimonialController::class,'index'])->name('testimonial.index');
    Route::get('testimonial/create',[TestimonialController::class,'create'])->name('testimonial.create');
    Route::post('testimonial/store',[TestimonialController::class,'store'])->name('testimonial.store');
    Route::get('testimonial/edit/{testimonial}',[TestimonialController::class,'edit'])->name('testimonial.edit');
    Route::post('testimonial/update/{testimonial}',[TestimonialController::class,'update'])->name('testimonial.update');
    Route::get('testimonial/delete/{testimonial}',[TestimonialController::class,'delete'])->name('testimonial.delete');
    Route::get('testimonial/duplicate/{testimonial}',[TestimonialController::class,'duplicate'])->name('testimonial.duplicate');


    // teams

    Route::get('team/index',[TeamController::class,'index'])->name('team.index');
    Route::get('team/create',[TeamController::class,'create'])->name('team.create');
    Route::post('team/store',[TeamController::class,'store'])->name('team.store');
    Route::get('team/edit/{team}',[TeamController::class,'edit'])->name('team.edit');
    Route::post('team/update/{team}',[TeamController::class,'update'])->name('team.update');
    Route::get('team/delete/{team}',[TeamController::class,'delete'])->name('team.delete');
    Route::get('team/duplicate/{team}',[TeamController::class,'duplicate'])->name('team.duplicate');

//    // enquiry
//    Route::prefix('blog')->name('blog.')->group(function(){
//        Route::get('/',[BlogController::class,'index'])->name('index');
//        Route::get('create/',[BlogController::class,'create'])->name('create');
//        Route::post('store',[BlogController::class,'store'])->name('store');
//        Route::get('edit/{blog}',[BlogController::class,'edit'])->name('edit');
//        Route::post('update/{blog}',[BlogController::class,'update'])->name('update');
//        Route::get('delete/{blog}',[BlogController::class,'delete'])->name('delete');
//        Route::get('duplicate/{blog}',[BlogController::class,'duplicate'])->name('duplicate');
//    });


    // counter logo

    Route::get('blogs/index',[\App\Http\Controllers\BlogController::class,'index'])->name('blogs.index');
    Route::get('blogs/create',[\App\Http\Controllers\BlogController::class,'create'])->name('blogs.create');
    Route::post('blogs/store',[\App\Http\Controllers\BlogController::class,'store'])->name('blogs.store');
    Route::get('blogs/edit/{blog}',[\App\Http\Controllers\BlogController::class,'edit'])->name('blogs.edit');
    Route::post('blogs/update/{blog}',[\App\Http\Controllers\BlogController::class,'update'])->name('blogs.update');
    Route::get('blogs/delete/{blog}',[\App\Http\Controllers\BlogController::class,'delete'])->name('blogs.delete');
    Route::get('blogs/duplicate/{blog}',[\App\Http\Controllers\BlogController::class,'duplicate'])->name('blogs.duplicate');

//    //counter
//
//    Route::get('counter/index',[CounterController::class,'index'])->name('counter.index');
//    Route::get('counter/create',[CounterController::class,'create'])->name('counter.create');
//    Route::post('counter/store',[CounterController::class,'store'])->name('counter.store');
//    Route::get('counter/edit/{counter}',[CounterController::class,'edit'])->name('counter.edit');
//    Route::post('counter/update/{counter}',[CounterController::class,'update'])->name('counter.update');
//    Route::get('counter/delete/{counter}',[CounterController::class,'delete'])->name('counter.delete');
//    Route::get('counter/duplicate/{counter}',[CounterController::class,'duplicate'])->name('counter.duplicate');
//

});




