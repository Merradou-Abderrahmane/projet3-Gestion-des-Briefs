<?php

use App\Http\Controllers\ApprenantBriefController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TacheController;
use App\Http\Controllers\BriefController;
use App\Http\Controllers\PromotionController;
use App\Http\Controllers\ApprenantController;

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


Route::get('delete/{id}',[BriefController::class,'destroy']);
Route::get('search',[BriefController::class,'search']);

// tache routes
Route::get('tache/addTache/{id}',[TacheController::class,'create']);
Route::post('tache/add',[TacheController::class,'store']);
Route::get('tache/edit/{id}',[TacheController::class,'edit']);
Route::post('tache/update/{id}',[TacheController::class,'update']);
Route::get('tache/delete/{id}',[TacheController::class,'destroy']);
Route::get('tache/search',[TacheController::class,'search']);
// apprenant routes
Route::get('apprenant/addApprenant/{id}',[ApprenantController::class,'create']);
// assgin brief view
Route::get('brief/assignBrief/{id}',[BriefController::class,'assign']);
// assign brief to apprenant
Route::post('brief/assignBrief',[ApprenantBriefController::class,'assignBrief']);
// promotion routes
Route::get('promotion',[PromotionController::class,'index']);
Route::get('promotion/addPromotion',[PromotionController::class,'create']);
Route::post('/promotion/add',[PromotionController::class,'store']);
Route::get('promotion/edit/{id}',[PromotionController::class,'show']);
Route::post('promotion/update/{id}',[PromotionController::class,'update']);
Route::get('promotion/delete/{id}',[PromotionController::class,'destroy']);
Route::get('promotion/search',[PromotionController::class,'search']);
// apprenant routes
Route::get('apprenant',[ApprenantController::class,'index']); // later
Route::get('apprenant/addApprenant',[ApprenantController::class,'create']);
Route::post('apprenant/add',[ApprenantController::class,'store']);
Route::get('apprenant/edit/{id}',[ApprenantController::class,'show']);
Route::post('apprenant/update/{id}',[ApprenantController::class,'update']);
Route::get('apprenant/delete/{id}',[ApprenantController::class,'destroy']);
Route::get('apprenant/search',[ApprenantController::class,'search']);

