<?php

use App\Http\Controllers\CargaController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\MotoristaController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProdutoController;
use App\Models\Motorista;
use App\Models\Cliente;
use App\Models\Carga;
use Illuminate\Support\Facades\Route;

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
    Route::resource('carga', CargaController::class);
    Route::resource('cliente', ClienteController::class);
    Route::resource('motorista', MotoristaController::class);
    Route::resource('produto', ProdutoController::class);
});

require __DIR__.'/auth.php';
