<?php

namespace App\Repositories;

use App\Models\Product;

class ProductRepository
{
    // DI - Dependency Injection

    private $productModel;

    public function __construct()
    {
        $this->productModel = new Product();
    }

    public function createNew($request)
    {
        $this->productModel->create([
            'name' => $request->get('name'),
            'description' => $request->get('description'),
            'amount' => $request->get('amount'),
            'price' => $request->get('price'),
            'image' => $request->get('image_name'),
        ]);
    }
}
