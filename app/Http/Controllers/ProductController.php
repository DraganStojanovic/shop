<?php

namespace App\Http\Controllers;

use App\Http\Requests\SaveProductRequest;
use App\Models\Product;
use App\Repositories\ProductRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    private $productRepo;

    public function __construct()
    {
        $this->productRepo = new ProductRepository();
    }


    public function index()
    {
//        $products = DB::table('products')->paginate(3);

        return view('shop', [
            "products" => Product::all(),
        ]);
    }

    public function delete($products)
    {
        $singleProduct = $this->productRepo->getRepositoryById($products);

        if ($singleProduct === null) {
            die('Product is not found in the list of products list!');
        }

        $singleProduct->delete();
        return redirect()->back();
    }

    public function sendAdminProducts()
    {
//        return view('products', [
//            "products" => Product::all(),
//        ]);
        $products = Product::orderBy('created_at', 'desc')->get();
        return view('all-products', [
            "products" => $products,
        ]);
    }

    public function getAllProducts()
    {
        return view('add-product', [
            "products" => Product::all(),
        ]);
    }

    private function generateImageHash($image)
    {
        return md5($image->getClientOriginalName());
    }

    public function saveProduct(SaveProductRequest $request)
    {

        $image = $request->file('image');
        $image_name = $this->generateImageHash($image);

        // Čuvanje slike u direktorijumu storage/app/public/images
        $image->storeAs('public/images', $image_name);

        // Dodajte image_name u request podatke pre nego što ih prosledite
        $request->merge(['image_name' => $image_name]);

        // Prosljeđivanje request-a koji sada sadrži i image_name
        $this->productRepo->createNew($request);

        return redirect('/admin/all-products/');
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

//
    public function save(Request $request, $id)
    {
        $product = Product::findOrFail($id);

        // Proverite da li je slika poslata s formom
        if ($request->hasFile('image')) {
            // Dobijte instancu fajla
            $image = $request->file('image');

            // Generišite hash od originalnog imena slike
            $imageNameHash = $this->generateImageHash($image);

            // Postavite putanju gde će se nova slika sačuvati
            $imagePath = public_path('storage/images');

            // Pomerite novu sliku na odgovarajuću lokaciju pod jedinstvenim imenom
            $image->move($imagePath, $imageNameHash);

            // Ažurirajte polje slike u bazi podataka sa novim hash-om
            $product->image = $imageNameHash;
        }

        // Ažurirajte ostala polja
        $this->productRepo->editProduct($product, $request);

        return redirect('/admin/all-products/');
    }


}
