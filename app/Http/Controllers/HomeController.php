<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $newProducts = Product::orderBy('created_at', 'DESC')->get()->take(6);
        return view('welcome', [
            "newProducts" => $newProducts
        ]);
    }
}
