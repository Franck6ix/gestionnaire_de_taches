<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Route  d'affichage des taches
Route::get('/app', [TaskController::class, 'index'])->name('index.App');

//Route de formulaire de création de tache
Route::get('/formulaire', [TaskController::class, 'create'])->name('formulaire');

// Route de stockage de la tache
Route::post('/formulaire', [TaskController::class, 'store']); 

// Routes pour la gestion du profil utilisateur
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';