<?php

use App\Http\Controllers\FrontendController;
use App\Http\Controllers\InquiryController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Modules\Service\Entities\ServiceCategory;

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

Route::get('/login', function () {
    return view('auth.login');
});
Route::get('/', [FrontendController::class,'index']);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/aboutus', [FrontendController::class, 'aboutUs'])->name('aboutus');
Route::get('/service/list', [FrontendController::class, 'services'])->name('services.list');
Route::get('/blogs/all', [FrontendController::class, 'blogs'])->name('blog.all');
Route::get('/blog/details/{slug}', [FrontendController::class, 'blogsDetails'])->name('blog.details');
Route::get('/contact', [FrontendController::class, 'contactUs'])->name('contact.index');
Route::post('frontend/contact/store', [FrontendController::class, 'contactStore'])->name('frontend.contactus.store');

Route::get('/service/{slug}', [FrontendController::class, 'serviceShow'])->name('service.show');

Route::resource('inquires',InquiryController::class);
