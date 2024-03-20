<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ObookController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;

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

Route::middleware(['splade'])->group(function () {


    //my routes protected with auth
    Route::middleware('auth')->group(function () {
        Route::resource('/', WelcomeController::class);
        Route::resource('/dashboard', DashboardController::class);
        Route::resource('users', UsersController::class);
        Route::resource('/roles', RoleController::class);
        Route::resource('/permissions', PermissionController::class);
        Route::resource('/dashboard', DashboardController::class);
        Route::resource('/obook', ObookController::class );
        Route::resource('/report', ReportController::class);
    });


    Route::spladeWithVueBridge();
    Route::spladePasswordConfirmation();
    Route::spladeTable();
    Route::spladeUploads();
});
