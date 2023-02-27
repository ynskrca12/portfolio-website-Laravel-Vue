<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\AuthController;
use App\Http\Controllers\API\AboutController;
use App\Http\Controllers\API\ServiceController;
use App\Http\Controllers\API\SkillController;
use App\Http\Controllers\API\EducationController;
use App\Http\Controllers\API\ExperienceController;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

 Route::controller(AuthController::class)->group(function(){
     Route::post('login','login');
     Route::post('register','register');
 });

// Route::post('/login', [AuthController::class, 'login']);

 Route::controller(AboutController::class)->group(function(){
     Route::get('edit_about','edit_about');
     Route::post('update_about/{id}','update_about');
});

Route::controller(ServiceController::class)->group(function(){
    Route::get('get_all_service','get_all_service');
    Route::post('/create_service','create_service');
    Route::post('/update_service/{id}','update_service');
    Route::get('/delete_service/{id}','delete_service');
});

Route::controller(SkillController::class)->group(function(){
    Route::get('/get_all_skill','get_all_skill');
    Route::post('/create_skill','create_skill');
    Route::post('/update_skill/{id}','update_skill');
    Route::get('/delete_skill/{id}','delete_skill');
});

Route::controller(EducationController::class)->group(function(){
    Route::get('/get_all_education','get_all_education');
    Route::post('/create_education','create_education');
    Route::post('/update_education/{id}','update_education');
    Route::get('/delete_education/{id}','delete_education');
});

Route::controller(ExperienceController::class)->group(function(){
    Route::get('/get_all_experience','get_all_experience');
    Route::post('/create_experience','create_experience');
});
