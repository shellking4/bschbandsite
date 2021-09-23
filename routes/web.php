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
Route::post('/admin/register', [RegisterController::class, 'storeAdmin'])->name('admin@register_action');
Route::get('/', [HomeController::class, 'index'])->name('landing');
Route::get('/accueil', [HomeController::class, 'render_home_page'])->name('home');
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'authenticate'])->name('login_action');
Route::post('/logout', [LogoutController::class, 'logout'])->name('logout');
Route::get('/repertoire/songs', [SongController::class, 'index'])->name('songs@repertoire');
Route::get('/repertoire/songs/add', [SongController::class, 'renderAddForm'])->name('song_add_view');
Route::get('/repertoire/songs/delete/{song}', [SongController::class, 'delete'])->name('song_delete');
Route::get('/repertoire/songs/setworkedout/{song}', [SongController::class, 'markAsWorkedOut'])->name('mark_as_workedout');
Route::get('/repertoire/songs/workedout', [HomeController::class, 'getWorkedOutSongs'])->name('worked_out_songs');
Route::post('/repertoire/songs/add', [SongController::class, 'storeSong'])->name('song_add_action');
Route::get('/bschband/admin/pass.reset', [HomeController::class, 'renderPassResetForm'])->name('pass.reset.view');
Route::post('/bschband/admin/pass.reset/action', [HomeController::class, 'resetPassword'])->name('pass.reset.action');
