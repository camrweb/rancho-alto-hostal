<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categoria;
use App\Models\Habitacion;
use App\Models\GaleriaAdmin;

class HogarController extends Controller
{
    //
    public function index(){
        $categorias = Categoria::all();
        $habitaciones = Habitacion::all();
        $galerias = GaleriaAdmin::all();
        return view('welcome')->with('categorias', $categorias)->with('habitaciones', $habitaciones)->with('galerias', $galerias);
    }

    public function galeriaindex(){
    $categorias = Categoria::all();
    $habitaciones = Habitacion::all();
    $galerias = GaleriaAdmin::all();
    return view('galeria.index')->with('categorias', $categorias)->with('habitaciones', $habitaciones)->with('galerias', $galerias);
    }
}
