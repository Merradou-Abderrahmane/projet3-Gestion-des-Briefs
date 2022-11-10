<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TacheController;
use App\Http\Controllers\BriefController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/index',[BriefController::class,'index']);

Route::get('add',[BriefController::class,'create']);
Route::post('add',[BriefController::class,'store']);

Route::get('edit/{id}',[BriefController::class,'edit']);
Route::post('update/{id}',[BriefController::class,'update']);

// Route::resource('update/{id}',[PromotionController::class,'update']);

Route::get('delete/{id}',[BriefController::class,'destroy']);

Route::get('search',[BriefController::class,'search']);

// Student routes
// Route::get('/students',[StudentController::class,'index']);
Route::get('student/addStudent/{id}',[StudentController::class,'create']);
Route::post('student/add',[StudentController::class,'store']);

Route::get('student/edit/{id}',[StudentController::class,'edit']);
Route::post('student/update/{id}',[StudentController::class,'update']);

Route::get('student/delete/{id}',[StudentController::class,'destroy']);

Route::get('student/search',[StudentController::class,'search']);

// view for test blade php in promotion folder

Route::get('/test', function () {
    return view('/promotion.test');
});