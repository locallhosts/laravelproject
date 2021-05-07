<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Products;

class ProductController extends Controller
{




     public function product(){

        return view ('product.index');


    }

}
