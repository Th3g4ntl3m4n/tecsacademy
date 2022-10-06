<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product_Request extends Model
{
    use HasFactory;

    

    protected $fillable = [
        'id_User',
        'id_Product',
        'state',      
    ];


    public function user() {

        //lo vinculamos con el modelo User

        return $this->hasMany(User::class);

    }

    public function products() {

        //lo vinculamos con el modelo User

        return $this->hasMany(Products::class);

    }
}
