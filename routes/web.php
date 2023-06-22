<?php

use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\CourseController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {return view('home');})->name('home');

Route::get('/registration_form', [RegistrationController::class, 'registrationInput'])->name('registration-input-form');
Route::post('/registration_form', [RegistrationController::class, 'registrationSend'])->name('registration-send-form');

Route::get('/registration_id_form/{id}', [RegistrationController::class, 'registrationInputIDInput'])->name('registration-id-input-form');
Route::post('/registration_id_form/{id}', [RegistrationController::class, 'registrationInputIDSend'])->name('registration-id-send-form');

Route::get('/registrations_all', [RegistrationController::class, 'registrationsAll'])->name('registrations-all');

Route::get('/registration_single/{id}', [RegistrationController::class, 'registrationSingle'])->name('registration-single');
Route::post('/registration_single/{id}', [RegistrationController::class, 'registrationChangeStatus'])->name('change-status');
Route::get('/registration_delete/{id}', [RegistrationController::class, 'registrationDelete'])->name('registration-delete');

Route::get('/registration_sort_course/{course_id}', [RegistrationController::class, 'registrationSortCourse'])->name('registration-sort-course');
Route::get('/registration_sort_status/{status}', [RegistrationController::class, 'registrationSortStatus'])->name('registration-sort-status');

Route::get('/contact_form', [RegistrationController::class, 'contactInput'])->name('contact-input-form');
Route::post('/contact_form', [RegistrationController::class, 'contactSend'])->name('contact-send-form');

Route::get('/course_form', [CourseController::class, 'courseInput'])->name('course-input-form');
Route::post('/course_form', [CourseController::class, 'courseSend'])->name('course-send-form');

Route::get('/courses_all_user', [CourseController::class, 'coursesAllUser'])->name('courses');
Route::get('/courses_all_admin', [CourseController::class, 'coursesAllAdmin'])->name('courses-all');

Route::get('/course_single/{id}', [CourseController::class, 'courseSingle'])->name('course-single');
Route::post('/course_single/{id}', [CourseController::class, 'courseChangeStatus'])->name('course-change-status');
Route::get('/course_delete/{id}', [CourseController::class, 'courseDelete'])->name('course-delete');
