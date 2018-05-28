<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    
    protected $fillable = [
        'nombre', 'fecha', 'horai','horat','direccion','lat','lng','user_id'
    ];
}
