<?php

namespace App\Services;

use App\Models\Product;

class ProductsService
{
    public function index(){
        $query = Product::all('*');

        return $query->all();
    }
}
