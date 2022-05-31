<?php

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

Route::get('/', function () {
    return redirect()->route('home.index');
});
//
Route::get('/dashboard', function () {
    return redirect()->route('home.index');
});

Route::resource('/home', 'App\Http\Controllers\DashboardController');
Route::resource('d_message', 'App\Http\Controllers\DirectorMessageController');
Route::resource('o_activity', 'App\Http\Controllers\OngoingActivityController');
Route::resource('programs', 'App\Http\Controllers\ProgrammeController');
Route::resource('academics', 'App\Http\Controllers\AcademicController');
Route::resource('departments', 'App\Http\Controllers\DepartmentController');
Route::resource('staffs', 'App\Http\Controllers\StaffController');
Route::resource('about_us', 'App\Http\Controllers\AboutController');
Route::resource('applications', 'App\Http\Controllers\ApplicationController');

require __DIR__.'/auth.php';
