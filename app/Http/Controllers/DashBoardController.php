<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Habitacion;
use App\Models\Categoria;
use App\Models\Contacto;
use App\Models\GaleriaAdmin;
use App\Models\Reservation;

class DashBoardController extends Controller
{
    public function getDashboard(){
        $users = User::count();
        $habitaciones = Habitacion::count();
        $categorias = Categoria::count();
        $imagenes = GaleriaAdmin::count();
        $reservas = Reservation::count();
        $correos = Contacto::count();

        $data = ['users' => $users, 'habitaciones' => $habitaciones, 'categorias' => $categorias, 'imagenes' => $imagenes, 'reservas' => $reservas, 'correos' => $correos];

        return view('admin.index',$data);
    }
}
