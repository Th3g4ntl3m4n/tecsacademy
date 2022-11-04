<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product_Request extends Model
{

    protected $table = 'product__requests';

    use HasFactory;

    

    protected $fillable = [
        'idConsultant',
        'product',
        'idUser',
        'status',       
    ];


    public function user() {

        //lo vinculamos con el modelo User

        return $this->hasMany(User::class);

    }

    public function products() {

        //lo vinculamos con el modelo Products

        return $this->hasMany(Products::class);

    }
}
