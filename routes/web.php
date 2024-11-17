<?php

use App\Http\Controllers\IndexController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [IndexController::class, 'home'])->name('home');
Route::get('/about', [IndexController::class, 'about'])->name('about');
Route::get('/contact-us', [IndexController::class, 'contactUs'])->name('contact-us');
Route::get('/teachers', [IndexController::class, 'teachers'])->name('teachers');
Route::get('/courses', [IndexController::class, 'courses'])->name('courses');
Route::get('/student-registration', [IndexController::class, 'studentRegistration'])->name('student-registration');
