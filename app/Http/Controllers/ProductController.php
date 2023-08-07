<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
//        $products = DB::table('products')->paginate(3);

        return view('shop', [
            "products" => Product::all(),
        ]);
    }

    public function delete($products)
    {
        $singleProduct = Product::where([
            'id' => $products
        ])->first();

        if ($singleProduct === null) {
            die('Product is not found in the list of products list!');
        }

        $singleProduct->delete();
        return redirect()->back();
    }

    public function sendAdminProducts()
    {
        return view('products', [
            "products" => Product::all(),
        ]);
    }

    public function getAllProducts()
    {
        return view('all-product', [
            "products" => Product::all(),
        ]);
    }

    public function sendProduct(Request $request)
    {
        $request->validate([
            'name' => 'required|string|min:3|unique:products',
            'description' => 'required|string|min:5',
            'amount' => 'required|string',
            'price' => 'required|string',
            'image' => 'required|image|mimes:png,jpg,jpeg|max:2048'

        ]);

        $image = $request->file('image');
        $image_name = $image->hashName();
        $image->storeAs("/public/images/", "$image_name");

        // php artisan storage:link -> pravi symlink na "storage/app/public"
        // Mi kada upload sliku stavljamo je u "storage/app/public/images"
        // Posle mi mozemo da pristupimo njoj pomocu symlinka iz "/public/storage/images"
        // Naravno kada ti ucitavas sliku u HTML ti ne stavljas "/public/storage/images" vec samo "/storage/images" jer "/" mu je public
        // Enjoy :)
        Product::create([
            'name' => $request->get('name'),
            'description' => $request->get('description'),
            'amount' => $request->get('amount'),
            'price' => $request->get('price'),
            'image' => $image_name
        ]);

        return redirect('/admin/products/');
    }

    public function singleProduct(Request $request, $id)
    {
        $product = Product::where('id', $id)->first();
        if($product === NULL)
        {
            die('Product is not found');
        }
        return view("edit-product", compact('product'));
    }

    public function save(Request $request, $id)
    {
        $product = Product::where(['id' => $id])->first();

        if($product === NULL)
        {
            die('Product is not found');
        }
        $product->name = $request->get('name');
        $product->description = $request->get('description');
        $product->amount = $request->get('amount');
        $product->price = $request->get('price');
        $product->save();

        return redirect()->back();


    }
    /**
     * Show the form for creating a new resource.
     */

    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        //
    }
}
