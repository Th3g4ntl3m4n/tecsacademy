<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product_Request;

class ProductRequestController extends Controller
{
    public function clickOnSent(Request $request){
        dd($request);
    }
}
