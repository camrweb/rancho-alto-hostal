<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Habitacion;
use App\Models\Categoria;


class UserHabitacion extends Controller
{
    //
    public function user_habitacion(Habitacion $id){

        $habitaciones = Habitacion::get();
        return view('habitaciones');
    }
}
