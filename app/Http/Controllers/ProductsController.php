<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;
use App\Models\User;
use Illuminate\Validation\Rules;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class ProductsController extends Controller
{
    public function productRegister(Request $request){

        

        $request->validate([
            'nameProduct' => 'required',
            'price' => 'required',
           

        ]);

        $products = new Products();
        $products->nameProduct = $request->nameProduct;
        $products->price = $request->price;
        $products->description = $request->description;
        $products->image = 0;
        $products->save();

        return redirect()->route('formProductRegister');
    }

    //Show all users that state be 0, to send firts email
    public function ShowAllProducts()
    {
     
        $showallproducts = Products::All();       
        return view('store')->with('showallproducts', $showallproducts);
    }

    public function showAllProductsUser()
    /* Get all products in view Students in dashboard */
    {
        /* We put in ShowAllproducts method in varible to call agin */
        $showallproductsuser = Products::All();       
        return view('student')->with('showallproductsuser', $showallproductsuser);

    }
}
