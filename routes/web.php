<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StudentListController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::middleware(['auth', 'verified'])
    ->group(function () {

        // get all students list
        Route::get('/dashboard', [StudentListController::class, 'index'])
            ->name('dashboard');

        Route::get('/profile/{id}', [StudentListController::class, 'show'])
            ->name('profile');
    });

Route::post('/create-student', [StudentListController::class, 'create'])
    ->name('create-student');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
