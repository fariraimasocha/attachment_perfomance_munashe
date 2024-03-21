<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ObookController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UsersController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;

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
    return view('index');
});

Route::middleware(['splade'])->group(function () {
    //my routes protected with auth
    Route::middleware('auth')->group(function () {
//        Route::get('/home', function () {
//            return view('home');
//        });

        Route::get('/storage/reports/{file}', [ReportController::class, 'downloadReport'])->name('storage.reports')->where('file', '(.*)');




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
