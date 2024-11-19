<?php

use App\Http\Controllers\SiteContactController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\CourseController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

// Authentication Routes
Route::post('/login', [UserController::class, 'login']);

// Routes for Students (Requires Authentication)
Route::middleware('auth:sanctum')->group(function () {
    Route::put('/students/{id}', [StudentController::class, 'update']);  // Update student
    Route::get('/students', [StudentController::class, 'index']);        // Fetch all students
    Route::get('/students/{id}', [StudentController::class, 'show']);    // Fetch single student

    Route::post('/teachers', [TeacherController::class, 'store']);       // Create teacher
    Route::post('/teachers/{id}', [TeacherController::class, 'update']);  // Update teacher
    Route::delete('/teachers/{id}', [TeacherController::class, 'destroy']);


    Route::post('/courses', [CourseController::class, 'store']);         // Create course
    Route::post('/courses/{id}', [CourseController::class, 'update']);    // Update course
    Route::delete('/courses/{id}', [CourseController::class, 'destroy']);

    Route::post('/site-contact', [SiteContactController::class, 'update']); // Update site contact info

    Route::post('/logout', [UserController::class, 'logout']);
});

// Public Routes for Teachers (No Authentication Required)
Route::get('/teachers', [TeacherController::class, 'index']);            // Fetch all teachers
Route::get('/teachers/{id}', [TeacherController::class, 'show']);        // Fetch single teacher


// Public Routes for Courses (No Authentication Required)
Route::get('/courses', [CourseController::class, 'index']);              // Fetch all courses
Route::get('/courses/{id}', [CourseController::class, 'show']);          // Fetch single course

Route::post('/students', [StudentController::class, 'store'])->name('students.store');       // Create student

Route::get('/site-contact', [SiteContactController::class, 'fetch']); // Fetch site contact info

