<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\BlogController;
use App\Http\Controllers\Api\IndexController;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('blogs', [BlogController::class,'index']);
Route::get('sliders', [IndexController::class, 'slider']);
Route::get('about', [IndexController::class, 'about']);
Route::post('contact-us', [IndexController::class, 'contactUs']);
Route::get('getCategories', [IndexController::class, 'getCategories']);
Route::get('category-details', [IndexController::class, 'categoryDetails']);
Route::get('services', [IndexController::class, 'getServices']);
Route::get('service-details', [IndexController::class, 'serviceDetails']);
Route::get('testimonials', [IndexController::class, 'getTestimonials']);
Route::post('subscribe', [IndexController::class, 'subscribe']);