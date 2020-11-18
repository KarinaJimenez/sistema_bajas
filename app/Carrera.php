<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Carrera extends Model
{
    protected $table = 'carreras';
    protected $fillable = [
        'id',
        'carrera', 	
        'ciclos_id'
    ];

    public function Ciclo(){
        return $this->belongsTo('App\Ciclo','ciclos_id');
    }
}
