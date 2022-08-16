<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Habitacion extends Model
{
    use HasFactory;
    protected $fillable = [
        'name','price','description','person-max','categoria_id'
    ];
    public function Categoria(){
        return $this->belongsTo('App\Models\Categoria');
    }
}