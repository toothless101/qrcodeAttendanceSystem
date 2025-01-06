<?php

use App\Http\Controllers\AttendanceController;
use App\Http\Controllers\AttendeesController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\OfficerController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\StudentOfficerController;
use Illuminate\Support\Facades\Route;



Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::get('/dashboard', [AuthController::class, 'dashboard'])->name('dashboard');
Route::get('/officers', [OfficerController::class, 'officer'])->name('officer');
Route::get('/event', [EventController::class, 'event'])->name('event');
Route::get('/attendees', [AttendeesController::class, 'attendees'])->name('attendees');
Route::get('/attendance', [AttendanceController::class, 'attendance'])->name('attendance');
Route::get('/report', [ReportController::class, 'report'])->name('report');
Route::get('/edit_officers', [OfficerController::class, 'edit_officers'])->name('edit_officers');

//STUDENT-OFFICERS
Route::get('/officerdashboard', [StudentOfficerController::class, 'std_dashboard'])->name('std_dashboard');

//POST ACTIONS
Route::post('/officer/create', [OfficerController::class, 'create_officer'])->name('officer.create');