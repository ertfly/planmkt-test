<?php

namespace App\Http\Controllers;

use App\Services\ProductsService;

class Products
{
    public function index(){
        $service = new ProductsService();
        return $service->index();
    }
}
