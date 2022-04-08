<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\Route;

//Frontend Routes
Route::get('/', function () {
    return view('frontend.home');
})->name('home');

Route::get('classes-and-services', function () {
    return view('frontend.services');
})->name('services');

Route::get('about-us', function () {
    return view('frontend.about');
})->name('about');

Route::get('contact-us', function () {
    return view('frontend.contact');
})->name('contact');

Route::post('contact-us-form', [Frontend\ContactController::class, 'insertdata'])->name('contact.insert');

Route::post('registration', [Frontend\AuthController::class, 'customRegistration'])->name('register.custom');



//User Login
Route::post('login', [Frontend\AuthController::class, 'customLogin'])->name('login.custom');



//Admin Login
Route::get("/admin/login", function(){
    return View("backend.layouts.login");
})->name('admin_login');



//Logout
Route::get('logout', [Frontend\AuthController::class, 'logOut'])->name('logout');



//User Protected Routes
Route::group(['middleware' => ['auth', 'user']], function () {

Route::get('dashboard',[Backend\UserController::class,'dashboard'])->name('dashboard');

Route::get('/payment',[Backend\UserController::class,'payment'])->name('user_payment');

Route::get('/plan',[Backend\UserController::class,'plan'])->name('user_plan');

Route::post('/add-user-plan',[Backend\UserController::class,'addPlan'])->name('add_user_plan');

});



//Trainer Protected Routes
Route::group(['middleware' => ['auth','trainer'], 'prefix' => 'trainer'], function () {

Route::get('/',[Backend\TrainerController::class,'index'])->name('trainer_dashboard');

});

//Admin Protected Routes
Route::group(['middleware' => ['auth', 'admin'], 'prefix' => 'admin'], function () {

Route::get('/',[Backend\AdminController::class,'index'])->name('admin_dashboard');

Route::get('/users',[Backend\AdminController::class,'usersList'])->name('admin_users');

Route::get('/trainers',[Backend\AdminController::class,'trainerList'])->name('admin_trainers');

Route::get('/contact-data',[Frontend\ContactController::class,'contactList'])->name('contact_page');

Route::get('/add-trainer',[Backend\AdminController::class,'addTrainerForm'])->name('add_user_trainer');

Route::post('/add-trainer',[Backend\AdminController::class,'add_trainer'])->name('add_trainer_post');

Route::delete('/remove-trainer/{id}',[Backend\AdminController::class,'destroyTrainer'])->name('trainer_delete');

Route::delete('/remove-user/{id}',[Backend\AdminController::class,'destroyUser'])->name('user_delete');

Route::delete('/remove-contact-user/{id}',[Backend\AdminController::class,'destroyContactUser'])->name('contact_user_delete');

route::get('plans',[Backend\PlansController::class,'index'])->name('plans');

Route::post('/add-plan',[Backend\PlansController::class,'addPlan'])->name('add_plan');

Route::delete('/remove-plan/{id}',[Backend\PlansController::class,'destroyPlan'])->name('plan_delete');

Route::get('/assign-trainer',[Backend\TrainerController::class,'showAssignTrainer'])->name('show.assignTrainer');

Route::post('/add-assign-trainer',[Backend\TrainerController::class,'addAssignTrainer'])->name('addAssignTrainer');

});
