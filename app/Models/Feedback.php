<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_user',
        'comentario',
        'flag',              
    ];

    public function user() {

        //lo vinculamos con el modelo User

        return $this->hasMany(User::class);

    }
}
