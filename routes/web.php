<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\SiswaController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::prefix('guru')->group(function(){
    Route::get('/login',[GuruController::class, 'Index'])->name('login_from');
    Route::post('/login/owner',[GuruController::class, 'Login'])->name('guru.login');
    Route::get('/dashboard',[GuruController::class, 'Dashboard'])->name('guru.dashboard')->middleware('guru');
    Route::get('/logout',[GuruController::class, 'GuruLogout'])->name('guru.logout')->middleware('guru');
    Route::get('/register',[GuruController::class, 'GuruRegister'])->name('guru.register');
    Route::post('/register/owner',[GuruController::class, 'GuruRegisterCreate'])->name('guru.register.create');
});



Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::resource('siswa', SiswaController::class)->except('show')->middleware('auth');
Route::resource('mapel', MapelController::class)->except('show')->middleware('auth');
Route::resource('guru', GuruController::class)->except('show')->middleware('auth');
Route::resource('kelas', KelasController::class)->except('show')->middleware('auth');
Route::resource('agenda', AgendaController::class)->except('show')->middleware('auth');
Route::resource('jadwal', JadwalController::class)->except('show')->middleware('auth');

Route::get('/siswa/{id}/detail', [SiswaController::class, 'detail'])
    ->middleware('auth');

Route::get('/guru/index/data', [GuruController::class, 'indexdata'])
    ->middleware('auth');

require __DIR__.'/auth.php';
