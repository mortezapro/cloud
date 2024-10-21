<?php

use App\Http\Controllers\Profile\DirectoryController;
use App\Http\Controllers\Profile\ProfileController;
use App\Http\Controllers\RegisteredUserController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

//Route::middleware('auth')->group(function () {
//    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
//});

//require __DIR__.'/auth.php';

Route::middleware('redirect-if-authenticated')->group(function () {
    Route::get('login', [RegisteredUserController::class, 'loginFrom'])->name('login');
    Route::post('send-auth-sms', [RegisteredUserController::class, 'sendAuthenticateCode'])->name('send.Authenticate.code');
    Route::post('verify-authenticate', [RegisteredUserController::class, 'verifyAuthenticate'])->name('verify.authenticate');
});


Route::middleware('profile-auth')->prefix('profile')->group(function () {
    Route::post('/logout', [ProfileController::class, 'logout'])->name('logout');
    Route::get('/dashboard', [ProfileController::class, 'dashboard'])->name('profile.dashboard');
    Route::get('/file-manager', [DirectoryController::class, 'fileManager'])->name('profile.file-manager');
    Route::post('/getDirectoryInside', [DirectoryController::class, 'getDirectoryInside'])->name('profile.directory-inside');
    Route::post('/makeDirectory', [DirectoryController::class, 'save'])->name('profile.directory.store');

});
Route::prefix('v1')->group(function () {
    Route::get('/directories', [DirectoryController::class, 'index'])->name('directory.index');

});
