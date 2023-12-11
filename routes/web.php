<?php

use App\Models\User;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CvController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SkillController;
use App\Http\Controllers\ExperienceController;

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

Route::get('/signIn', [UserController::class,'userSignIn'])->name('signIn');
Route::post('/signIn', [UserController::class,'authenticateLogIn'])->name('logIn');

Route::get('/signUp', [UserController::class,'userSignUp'])->name('signUp');
Route::post('/signUp', [UserController::class,'createUser'])->name('createUser');

Route::get('/', [UserController::class,'goToHomepage']);
Route::get('/homepage', [UserController::class,'goToHomepage'])->name('home');

Route::get('/about', [UserController::class,'goToAbout']);
Route::get('/edit_summary/{id}', [CvController::class,'editSummary'])->name('editSummary');

Route::get('/createcv', [CvController::class,'store'])->name('createCv');
Route::post('/create_skill/{id}', [SkillController::class,'store'])->name('createSkill');
Route::post('/create_exp/{id}', [ExperienceController::class,'store'])->name('createExp');

Route::get('/test', function () {
    return view('test');
});

Route::get('/logout', [UserController::class,'logout'])->name('logout');

Route::get('/makePDF{id}',[CVController::class,'makePDF'])->name('makePDF');