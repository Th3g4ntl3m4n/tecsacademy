<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    protected $table = 'products';

    use HasFactory;

   
    
    protected $fillable = [
        'nameProduct',
        'price',
        'description',    
        'image', 
        'objetive',
        'currency',   
    ];

    public function product_request() {

        //lo vinculamos con el modelo User

        return $this->hasMany(Product_Request::class);

    }
}
