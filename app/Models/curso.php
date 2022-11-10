<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class curso extends Model
{
    use HasFactory;

    protected $fillable = [
        'type',
        'teacher',
        'estado',
        'schedule',
        'url',
        'fecha_inicio',
        'fecha_fin',
        'size'           
    ];

}
