<?php

namespace App\Http\Controllers;

use App\Models\Products;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home() {
        //traigo el producto que voy a mostrar en el HOME para el formulario de primer registro
        // en este caso vamos a registrar a las personas interesadas en TECS INTRO (ID =1 )
        $product_form = Products::find(1);
        
        return view ('home')->with('product_form', $product_form);
    }

    public function tecsIntro() {
        return view ('tecsIntro');
    }

    public function pricing() {
        return view ('pricing');
    }

    public function store() {
        return view ('store');
    }

    public function stage() {
        return view ('stage');
    }
}

