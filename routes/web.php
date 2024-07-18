<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;

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


Route::get('/',[HomeController::class,'index']);
Route::get('/home',[HomeController::class,'redirect']);
Route::get('/reload-captcha',[HomeController::class,'reloadCaptcha']);
Route::post('/post',[HomeController::class,'postCaptcha']);

// for Users navigation
Route::get('/user/about',[HomeController::class,'about']);

// for adding and viewing of doctors
Route::get('/add_doctor_view',[AdminController::class,'addview']);

// for adding and viewing of patients
Route::get('/add_patient_view',[AdminController::class,'addviewPatient']);

// for adding and viewing of appointments
Route::get('/add_appointment_view',[AdminController::class,'addviewAppointment']);

// for adding and viewing of medicine
Route::get('/add_medicine_view',[AdminController::class,'addviewMedicine']);

// for adding and viewing of report
Route::get('/add_report_view',[AdminController::class,'addviewReport']);




// for Form
Route::get('/form',[AdminController::class,'addForm']);

// patients form
Route::get('/patient_form',[AdminController::class,'addPatient']);

// medicine form
Route::get('/medicine_form',[AdminController::class,'addMedicine']);

// for adding appointments
Route::get('/appointment_form',[AdminController::class,'addAppointment']);









// add Doctor Function
Route::post('/add_doctor',[AdminController::class,'upload_doctor']);

// add patient Function
Route::post('/add_patient',[AdminController::class,'upload_patient']);

// add appointment Function
Route::post('/add_appointment',[AdminController::class,'upload_appointment']);

// add medicine Function
Route::post('/add_medicine',[AdminController::class,'upload_medicine']);





Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

