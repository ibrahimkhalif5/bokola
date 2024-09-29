<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JobController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\DocumentController;
use App\Http\Controllers\FeedbackController;

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


Route::get('/board_members', [MemberController::class, 'index']);
Route::get('/downloads', [DocumentController::class, 'index']);
Route::get('/projects', [ProjectController::class, 'index']);
Route::get('/contact_us', [FeedbackController::class, 'index']);
Route::post('/contact_us', [FeedbackController::class, 'store'])->name('contact_us');

Route::get('/careers', [JobController::class, 'index']);



Route::get('/', function () {
    return view('frontend.home');
});
Route::get('/about_us', function () {
    return view('frontend.background');
});


