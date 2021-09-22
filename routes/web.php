<?php

use App\Http\Controllers\Admin\Song\SongController;
use App\Http\Controllers\Admin\User\UserController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Home\HomeController;

Route::get('/register', [RegisterController::class, 'index'])->name('user@register_view');
Route::post('/register', [RegisterController::class, 'storeUser'])->name('user@register_action');
Route::get('/admin/register', [RegisterController::class, 'index'])->name('admin@register_view');
Route::post('/admin/register', [RegisterController::class, 'storeAdmin'])->name('admin@register_action');
Route::get('/', [HomeController::class, 'index'])->name('landing');
Route::get('/accueil', [HomeController::class, 'render_home_page'])->name('home');
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'authenticate'])->name('login_action');
Route::post('/logout', [LogoutController::class, 'logout'])->name('logout');
Route::get('/repertoire/songs', [SongController::class, 'index'])->name('songs@repertoire');
Route::get('/repertoire/songs/add', [SongController::class, 'renderAddForm'])->name('song_add_view');
Route::post('/repertoire/songs/add', [SongController::class, 'add'])->name('song_add_action');
Route::get('/bschband/admin/pass.reset', [HomeController::class, 'renderPassResetForm'])->name('pass.reset.view');
Route::post('/bschband/admin/pass.reset/action', [HomeController::class, 'resetPassword'])->name('pass.reset.action');
