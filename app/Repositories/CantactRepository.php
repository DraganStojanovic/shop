<?php

namespace App\Repositories;

use App\Models\Contact;

class CantactRepository
{
    // DI - Dependency Injection

    private $contactModel;

    public function __construct()
    {
        $this->contactModel = new Contact();
    }

    public function createNew($request)
    {
        $this->contactModel->create([
            'email' => $request->get('email'),
            'subject' => $request->get('subject'),
            'message' => $request->get('message'),
        ]);
    }

    public function getRepositoryById($id)
    {
        return $this->productModel->where(['id' => $id])->first();

    }

    public function editProduct($product, $request)
    {
        $product->name = $request->get('name');
        $product->description = $request->get('description');
        $product->amount = $request->get('amount');
        $product->price = $request->get('price');
        $product->save();
    }

}
