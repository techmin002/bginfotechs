<?php

use Illuminate\Support\Facades\Route;
use Modules\Client\Http\Controllers\ClientController;
use Modules\Client\Http\Controllers\ClientProjectController;
use Modules\Client\Http\Controllers\PackageController;

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

Route::group([], function () {
    Route::resource('clients', ClientController::class)->names('clients');
    Route::resource('projects', ClientProjectController::class)->names('projects');
    Route::resource('projects', ClientProjectController::class)->names('projects');
    Route::put('client/amount/store/{id}', [ClientProjectController::class,'amountStore'])->name('projects.admount.pay');
    Route::resource('packages', PackageController::class)->names('packages');

});
