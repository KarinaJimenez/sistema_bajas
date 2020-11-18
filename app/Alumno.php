<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Alumno extends Model
{
    protected $table = 'alumnos';
    protected $fillable = [
        'id',
        'codigo', 	
        'nombre',
        'aPaterno',
        'aMaterno',
        'telefono',
        'ciclos_id',
        'carreras_id',
        'solicitudes_id',
        'Dominio',
        'Moodle'
    ];

    public function Ciclo(){
        return $this->belongsTo('App\Ciclo','ciclos_id');
    }

    public function Carrera(){
        return $this->belongsTo('App\Carrera','carreras_id');
    }

    public function Solicitude(){
        return $this->belongsTo('App\Solicitude','solicitudes_id');
    }

}
