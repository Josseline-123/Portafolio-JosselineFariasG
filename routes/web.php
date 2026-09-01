<?php

use App\Http\Controllers\ContactoController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProyectoController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| PORTAFOLIO
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    return view('pages.home');
})->name('home');

Route::view('/sobre-mi', 'pages.sobre-mi')->name('sobre-mi');

Route::get('/proyectos', [ProyectoController::class, 'index'])
    ->name('proyectos');

Route::view('/contacto', 'pages.contacto')->name('contacto');

Route::post('/contacto', [ContactoController::class, 'enviar'])
    ->name('contacto.enviar');


/*
|--------------------------------------------------------------------------
| AUTENTICACIÓN
|--------------------------------------------------------------------------
*/

Route::get('/dashboard', [ProyectoController::class, 'admin'])
    ->middleware(['auth', 'verified'])
    ->name('dashboard');


/*
|--------------------------------------------------------------------------
| PERFIL
|--------------------------------------------------------------------------
*/

Route::middleware('auth')->group(function () {

    Route::get('/profile', [ProfileController::class, 'edit'])
        ->name('profile.edit');

    Route::patch('/profile', [ProfileController::class, 'update'])
        ->name('profile.update');

    Route::delete('/profile', [ProfileController::class, 'destroy'])
        ->name('profile.destroy');
});


/*
|--------------------------------------------------------------------------
| PROYECTOS PRIVADOS
|--------------------------------------------------------------------------
*/

Route::middleware('auth')->group(function () {

    Route::get('/crear-proyecto', [ProyectoController::class, 'create'])
        ->name('proyectos.create');

    Route::post('/proyectos', [ProyectoController::class, 'store'])
        ->name('proyectos.store');

    Route::get('/proyectos/{proyecto}/editar', [ProyectoController::class, 'edit'])
        ->name('proyectos.edit');

    Route::put('/proyectos/{proyecto}', [ProyectoController::class, 'update'])
        ->name('proyectos.update');

    Route::delete('/proyectos/{proyecto}', [ProyectoController::class, 'destroy'])
        ->name('proyectos.destroy');
});


require __DIR__.'/auth.php';