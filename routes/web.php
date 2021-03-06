<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MapsController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\UjiCobaController;
use App\Http\Controllers\DashboardAdminController;
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

// Route::get('/', function () {
//     return view('auth.login');
// });

Route::get('/', function () {
    return redirect("/login");
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('room', RoomController::class);
Route::resource('dashboardadmin', DashboardAdminController::class);
Route::resource('contact-us', ContactController::class);
Route::resource('maps', MapsController::class);
Route::resource('test', UjiCobaController::class);
Route::resource('book', BookController::class);
Route::get('dashboard',[ DashboardAdminController::class, 'userIndex'])->name('dashboard-user');
Route::get('listdb', [DashboardAdminController::class, 'listdb'])->name('listdb');