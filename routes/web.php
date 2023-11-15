<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\RequestController;

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
    return view('home');
});


Route::get('/login', function () {
    return view('login.login');
});


Route::get('/dashboard', function () {
    return view('dashboard.index');
});

Route::get('/support', [UsersController::class, 'index']);
Route::get('/selectUser', [UsersController::class, 'nameUser'])->name('nameUser.index');
Route::get('/selectStaff', [UsersController::class, 'nameStaff'])->name('nameStaff.index');
Route::get('/selectUnit/{id}', [UsersController::class, 'nameUnit']);

Route::get('/laporanpermohonan', [RequestController::class, 'index']);
Route::post('/laporanpermohonan/store', [RequestController::class, 'store']);

// Route::get('/laporansupport/create', [RequestController::class, '@create'])->name('laporansupport.create');
// Route::post('/laporansupport', [RequestController::class, '@store'])->name('laporansupport.store');