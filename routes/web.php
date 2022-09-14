<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoriaController;
use App\Models\Categoria;
use App\Models\Habitacion;
use App\models\GaleriaAdmin;
use Illuminate\Support\Facades\Session;

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


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

//USUARIOS
Route::get('/', function () {
    $categorias = Categoria::all();
    $habitaciones = Habitacion::all();
    return view('welcome')->with('categorias', $categorias)->with('habitaciones', $habitaciones);
})->name('index');

Route::get('habitaciones/{categoria}', [App\Http\Controllers\HabitacionController::class, 'getByCategory']);

Route::get('habitacion/{nombre}', [App\Http\Controllers\HabitacionController::class, 'getRoomData']);

Route::get('/habitaciones', function () {
    $categorias = Categoria::all();
    $habitaciones = Habitacion::all();
    return view('habitaciones.index')->with('categorias', $categorias)->with('habitaciones', $habitaciones);
})->name('habitaciones');

Route::get('/galeria', function () {
    $categorias = Categoria::all();
    $habitaciones = Habitacion::all();
    $galerias = GaleriaAdmin::all();
    return view('galeria.index')->with('categorias', $categorias)->with('habitaciones', $habitaciones)->with('galerias', $galerias);
})->name('galeria');

Route::get('/contactanos', function () {
    $categorias = Categoria::all();
    $habitaciones = Habitacion::all();
    return view('contactanos.index')->with('categorias', $categorias)->with('habitaciones', $habitaciones);
})->name('contactanos');

Route::get('/acerca-de', function () {
    $categorias = Categoria::all();
    $habitaciones = Habitacion::all();
    return view('acerca-de.index')->with('categorias', $categorias)->with('habitaciones', $habitaciones);
})->name('acerca-de');



//RESERVAR
Route::post('/guardar-reserva', [App\Http\Controllers\ReservationController::class, 'store'])->name('reserva.store');

Route::middleware(['auth'])->group(function () {

    Route::get('/perfil', [App\Http\Controllers\UserController::class, 'userdetails'])->name('perfil');
    Route::put('/perfil/update', [App\Http\Controllers\UserController::class, 'userdetailsupdate'])->name('perfil.update');
    Route::put('/perfil/update-password', [App\Http\Controllers\UserController::class, 'userpasswordupdate'])->name('perfil.update.password');

});




//ADMIN
Route::prefix('admin')->middleware(['auth', 'isAdmin'])->group(function () {



    //Reservas
    Route::get('/reservas', [App\Http\Controllers\ReservationController::class, 'index'])->name('reservas');
    Route::get('/reservas/{id}/delete', [App\Http\Controllers\ReservationController::class, 'destroy'])->name('reserva.delete');


    //Categorias
    Route::get('/categorias', [App\Http\Controllers\CategoriaController::class, 'index'])->name('categorias');
    Route::get('/categorias/{id}/delete', [App\Http\Controllers\CategoriaController::class, 'destroy'])->name('categoria.delete');
    Route::get('categorias/create', [App\Http\Controllers\CategoriaController::class, 'create'])->name('create');
    Route::post('categorias', [App\Http\Controllers\CategoriaController::class, 'store'])->name('store');
    Route::get('/categorias/pdf', [App\Http\Controllers\CategoriaController::class, 'pdf'])->name('categorias.pdf');
    Route::get('/getCategorias', [App\Http\Controllers\CategoriaController::class, 'getCategorias']);

    //HABITACIONES
    Route::get('/habitaciones/{categoria}/create', [App\Http\Controllers\HabitacionController::class, 'create'])->name('habitacion.create');
    Route::get('/habitaciones/{categoria}', [App\Http\Controllers\HabitacionController::class, 'index'])->name('habitaciones.show');
    Route::post('/habitaciones/{categoria}/store', [App\Http\Controllers\HabitacionController::class, 'store'])->name('habitacion.store');
    Route::get('/habitaciones/{categoria}/edit', [App\Http\Controllers\HabitacionController::class, 'edit'])->name('habitacion.edit');
    Route::delete('/admin/habitaciones/{categoria}/delete', [App\Http\Controllers\HabitacionController::class, 'destroy'])->name('habitacion.delete');
    Route::get('/habitaciones/{categoria}/pdf', [App\Http\Controllers\HabitacionController::class, 'pdf'])->name('habitaciones.pdf');
    Route::put('/habitaciones/{categoria}/update',[App\Http\Controllers\HabitacionController::class, 'update'])->name('habitacion.update');


    Route::get('/galeria', [App\Http\Controllers\GaleriaAdminController::class, 'index'])->name('galeria.index');
    Route::get('/galeria/create', [App\Http\Controllers\GaleriaAdminController::class, 'create'])->name('galeria.create');
    Route::post('/galeria/create/store', [App\Http\Controllers\GaleriaAdminController::class, 'store'])->name('galeria.store');
    Route::get('/galeria/{id}/edit', [App\Http\Controllers\GaleriaAdminController::class, 'edit'])->name('galeria.edit');
    Route::put('/galeria/{id}/update', [App\Http\Controllers\GaleriaAdminController::class, 'update'])->name('galeria.update');
    Route::delete('/galeria/{id}/delete', [App\Http\Controllers\GaleriaAdminController::class, 'destroy'])->name('galeria.delete');

    //Usuarios
    Route::get('/usuarios', [App\Http\Controllers\UserController::class, 'index'])->name('usuarios');
    Route::get('/usuarios/{id}/edit', [App\Http\Controllers\UserController::class, 'edit'])->name('usuarios.edit');
    Route::get('/usuarios/{id}/delete', [App\Http\Controllers\UserController::class, 'destroy'])->name('usuarios.delete');
    Route::put('/usuarios/{id}/update', [App\Http\Controllers\UserController::class, 'update'])->name('usuarios.update');
    Route::get('/usuarios/pdf', [App\Http\Controllers\UserController::class, 'pdf'])->name('usuarios.pdf');

    Route::get('/admin', [App\Http\Controllers\DashBoardController::class, 'getDashboard'])->name('admin.dashboard');


    //TODAS LAS RUTAS
    Route::resource('categoria', CategoriaController::class);
});




Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
