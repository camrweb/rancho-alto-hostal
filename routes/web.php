<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoriaController;
use App\Models\Categoria;
use App\Models\Habitacion;



//USUARIOS
Route::get('/', function () {
    $categorias = Categoria::all();
    $habitaciones = Habitacion::all();
    return view('welcome')->with('categorias', $categorias)->with('habitaciones', $habitaciones);
})->name('index');

Route::get('habitaciones/{categoria}', [App\Http\Controllers\HabitacionController::class, 'getByCategory']);

Route::get('/habitaciones', function () {
    return view('habitaciones.index');
})->name('habitaciones');

Route::get('/galeria', function () {
    return view('galeria.index');
})->name('galeria');

Route::get('/contactanos', function () {
    return view('contactanos.index');
})->name('contactanos');

Route::get('/acerca-de', function () {
    return view('acerca-de.index');
})->name('acerca-de');







//ADMIN
Route::prefix('admin')->middleware(['auth', 'isAdmin'])->group(function () {

    Route::get('/', function () {
        return view('admin.index');
    })->name('admin');

    //Reservas
    Route::get('/reservas', function () {
        return view('admin.reservas.index');
    })->name('reservas');

    //Categorias
    Route::get('/categorias', [App\Http\Controllers\CategoriaController::class, 'index'])->name('categorias');
    Route::get('/categorias/{id}/delete', [App\Http\Controllers\CategoriaController::class, 'destroy'])->name('categoria.delete');
    Route::get('categorias/create', [App\Http\Controllers\CategoriaController::class, 'create'])->name('create');
    Route::post('categorias', [App\Http\Controllers\CategoriaController::class, 'store'])->name('store');
    Route::get('/getCategorias', [App\Http\Controllers\CategoriaController::class, 'getCategorias']);

    //HABITACIONES
    Route::get('/habitaciones/{categoria}/create', [App\Http\Controllers\HabitacionController::class, 'create'])->name('habitacion.create');
    Route::get('/habitaciones/{categoria}', [App\Http\Controllers\HabitacionController::class, 'index'])->name('habitaciones.show');
    Route::post('/habitaciones/{categoria}/store', [App\Http\Controllers\HabitacionController::class, 'store'])->name('habitacion.store');


    //Usuarios
    Route::get('/usuarios', [App\Http\Controllers\UserController::class, 'index'])->name('usuarios');
    Route::get('/usuarios/{id}/delete', [App\Http\Controllers\UserController::class, 'destroy'])->name('usuarios.delete');

    //TODAS LAS RUTAS
    Route::resource('categoria', CategoriaController::class);
});




Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
