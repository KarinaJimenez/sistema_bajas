<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class statu extends Model
{
    protected $table = 'status';
    protected $fillable = [
        'id',
        'status'
    ];
}
