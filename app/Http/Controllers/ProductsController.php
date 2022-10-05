<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;

class ProductsController extends Controller
{
    public function productRegister(Request $request){

        $request->validate([
            'nameProduct' => 'required',
            'price' => 'required',
            'description' => 'required',
            'image' => 'required',

        ]);

        $products = new Products();
        $products->nameProduct = $request->nameProduct;
        $products->price = $request->price;
        $products->description = $request->description;
        $products->image = 0;
        $products->save();

        return redirect()->route('formProductRegister');




    }
}
