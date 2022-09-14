<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class reservation extends Model
{
    use HasFactory;
    protected $fillable = [
        'nombres','apellidos','tipo_documento','numero_documento','categoria_name','habitacion_name',
        'person_max','check_in','check_out','precio_total'
    ];
}
