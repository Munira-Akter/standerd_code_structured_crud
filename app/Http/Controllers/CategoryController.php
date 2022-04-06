<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function categoryShow(){
        return view('category.category');
    }

    public function categoryAdd(){
        return view('category.add_new_category');
    }
}
