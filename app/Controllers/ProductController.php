<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class ProductController extends BaseController
{
    public function product($product)
    {
        echo $product;
    }
    public function index()
    {
       
    }
    public function shekinah()
    {
       return view('products');
    }
}
