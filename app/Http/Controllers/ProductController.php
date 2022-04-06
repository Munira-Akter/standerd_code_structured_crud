<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function productShow(){
        return view('product.product');
    }

    public function productAdd(){
        return view('product.add_product');
    }
}
