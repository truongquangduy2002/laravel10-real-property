<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;

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
//     return view('welcome');
// });

Route::get('/', [UserController::class, 'Index'])->name('user.index');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__ . '/auth.php';

//------------------------------User-----------------------------//
Route::get('/user/profile', [UserController::class, 'UserProfile'])->name('user.profile');
Route::post('/user/profile/store', [UserController::class, 'UserProfileStore'])->name('user.profile.store');
Route::get('/user/change/password', [UserController::class, 'UserChangePassword'])->name('user.change.password');
Route::get('/user/logout', [UserController::class, 'UserLogout'])->name('user.logout');

Route::post('/user/password/update', [UserController::class, 'UserPasswordUpdate'])->name('user.password.update');

//----------------------Admin-------------------------------//
Route::get('/admin/dashboard', [AdminController::class, 'AdminDashboard'])->name('admin.dashboard');
Route::get('/admin/login', [AdminController::class, 'AdminLogin'])->name('admin.login');
Route::get('/admin/profile', [AdminController::class, 'AdminProfile'])->name('admin.profile');
Route::post('/admin/profile/store', [AdminController::class, 'AdminProfileStore'])->name('admin.profile.store');
Route::get('/admin/change/password', [AdminController::class, 'AdminChangePassword'])->name('admin.change.password');
Route::post('/admin/update/password', [AdminController::class, 'AdminUpdatePassword'])->name('admin.update.password');
Route::get('/admin/logout', [AdminController::class, 'AdminLogout'])->name('admin.logout');
