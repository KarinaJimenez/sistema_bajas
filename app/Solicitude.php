<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Solicitude extends Model
{
    protected $table = 'solicitudes';
    protected $fillable = [
        'id',
        'solicitud',
        'users_id',
        'status_id'
        ];

        public function User(){
            return $this->belongsTo('App\User','users_id');
        }
        public function statu(){
            return $this->belongsTo('App\statu','status_id');
        }
}
