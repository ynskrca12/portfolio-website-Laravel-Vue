<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\AuthController;
use App\Http\Controllers\API\AboutController;
use App\Http\Controllers\API\ServiceController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

 Route::controller(AuthController::class)->group(function(){
     Route::post('login','login');
     Route::post('register','register');
 });

// Route::post('/login', [AuthController::class, 'login']);
// Route::post('/register', [AuthController::class, 'register']);

// Route::post('/edit_about', [AboutController::class, 'edit_about']);
// Route::post('/update_about/{id}', [AboutController::class, 'update_about']);

 Route::controller(AboutController::class)->group(function(){
     Route::get('edit_about','edit_about');
     Route::post('update_about/{id}','update_about');
});

// Route::post('/admin/about', [AboutController::class, 'adminAbout']);


Route::controller(ServiceController::class)->group(function(){
    Route::get('get_all_service','get_all_service');
    Route::post('/create_service','create_service');
    Route::post('/update_service/{id}','update_service');
    Route::get('/delete_service/{id}','delete_service');
});
