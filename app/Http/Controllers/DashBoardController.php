<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Habitacion;
use App\Models\Categoria;
use App\Models\GaleriaAdmin;

class DashBoardController extends Controller
{
    public function getDashboard(){
        $users = User::count();
        $habitaciones = Habitacion::count();
        $categorias = Categoria::count();
        $imagenes = GaleriaAdmin::count();

        $data = ['users' => $users, 'habitaciones' => $habitaciones, 'categorias' => $categorias, 'imagenes' => $imagenes];

        return view('admin.index',$data);
    }
}
