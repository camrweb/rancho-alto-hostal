<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    use HasFactory;
    protected $fillable = [
        'name'
    ];
    public function Habitacion(){
        // return $this->hasMany('App\Models\Habitacion');
        return $this->hasMany(Habitacion::class,'id');
    }
}
