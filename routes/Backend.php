<?php

use App\Http\Controllers\Dashboard\DashboardController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Backend Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/Dashboard_Admin', [DashboardController::class, 'index']);

Route::get('/dashboard/user', function () {
    return view('Dashboard.User.dashboard');
})->middleware(['auth'])->name('dashboard.user');

require __DIR__.'/auth.php';
