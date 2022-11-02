<?php


use App\Http\Controllers\ApplicantController;
use App\Http\Controllers\CollageController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\StudentsController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\UserController;
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

Route::get('/',[HomeController::class, 'homeback'])->name('home');

// Collage

Route::get('/history',[CollageController::class, 'history'])->name('history');

Route::get('/admin_staff',[CollageController::class, 'admin_staff'])->name('admin_staff');

Route::get('/cyclical_commission',[CollageController::class, 'cyclical_commission'])->name('cyclical_commission');

Route::get('/structural',[CollageController::class, 'structural'])->name('structural');

Route::get('/specialties',[CollageController::class, 'specialties'])->name('specialties');

Route::get('/psychological',[CollageController::class, 'psychological'])->name('psychological');

Route::get('/licenses',[CollageController::class, 'licenses'])->name('licenses');

Route::get('/directors_report',[CollageController::class, 'directors_report'])->name('directors_report');

Route::get('/accreditation_materials',[CollageController::class, 'accreditation_materials'])->name('accreditation_materials');

Route::get('/educational_activities',[CollageController::class, 'educational_activities'])->name('educational_activities');

//Applicant

Route::get('/documents_9_class',[ApplicantController::class, 'documents_9'])->name('documents_9');

Route::get('/documents_11_class',[ApplicantController::class, 'documents_11'])->name('documents_11');

Route::get('/documents_PTU',[ApplicantController::class, 'documents_PTU'])->name('documents_PTU');

Route::get('/DonbasIsUkraine',[ApplicantController::class, 'Donbas'])->name('DonbasIsUkraine');

Route::get('/CrimeaIsUkraine',[ApplicantController::class, 'Crimea'])->name('CrimeaIsUkraine');

Route::get('/decision',[ApplicantController::class, 'decision'])->name('decision');

Route::get('/cost',[ApplicantController::class, 'cost'])->name('cost');

//Students

Route::get('stud_metod_material',[StudentsController::class, 'stud_metod_material'])->name('stud_metod_material');

Route::get('day_department',[StudentsController::class, 'day_department'])->name('day_department');

Route::get('night_department',[StudentsController::class, 'night_department'])->name('night_department');

//Teacher

Route::get('/teacher',[TeacherController::class, 'teacher'])->name('teacher');

Route::get('/metodi_material',[TeacherController::class, 'metodi_material'])->name('metodi_material');

//Public information

Route::get('/timetable',[PublicController::class, 'timetable'])->name('timetable');

Route::get('/collage_life',[PublicController::class, 'collage_life'])->name('collage_life');

Route::get('/library',[PublicController::class, 'library'])->name('library');

Route::get('/corruption',[PublicController::class, 'corruption'])->name('corruption');

Route::get('/prospect',[PublicController::class, 'prospect'])->name('prospect');

Route::get('/contact',[ContactController::class, 'contact'])->name('contact');

Route::match(['get', 'post'],'/send',[ContactController::class, 'send'])->name('send');

//Registration and Sign

Route::get('/register',[UserController::class, 'create'])->name('register.create');

Route::post('/register',[UserController::class, 'store'])->name('register.store');

Route::get('/login', [UserController::class, 'loginForm'])->name('login.create');

Route::post('/login', [UserController::class, 'login'])->name('login');

Route::get('/logout', [UserController::class, 'logout'])->name('logout');


