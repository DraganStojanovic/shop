<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $newProducts = Product::orderByDesc('created_at', 'id')->get()->take(6);
        return view('welcome', [
            "newProducts" => $newProducts
        ]);
    }
}
