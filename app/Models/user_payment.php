<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;



class user_payment extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_proctorv_user_payment',
        'id_request',
        'id_user',    
        'date_generate', 
        'payment_number',  
        'status', 
        'id_transaction',  
        'sell_reference', 
        'transaction_reference', 
        'bank', 
        'val',
        'currency', 
        'entity', 
        'extra1',
        'extra2',  
    ];

}
