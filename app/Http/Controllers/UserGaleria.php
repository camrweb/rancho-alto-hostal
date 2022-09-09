<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\GaleriaAdmin;

class UserGaleria extends Controller
{
    public function user_galeria(GaleriaAdmin $id){

        $galerias = GaleriaAdmin::get();
        return view('galeria');
    }
}
