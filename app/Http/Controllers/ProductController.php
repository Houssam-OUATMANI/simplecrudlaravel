<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePostRequest;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    public function index(Request $request) {

        $products = Product::query()->with("user")->paginate(1);
        //return view("products.index", ["products" => $products]);
        return view("products.index", compact("products"));
    }

    public function show (Product $product) {
            $product = $product->load("user");
           // $id = $request->route("id");
           // $product = Product::query()->where("id", "=", $id)->get();

           return view("products.show", compact("product"));
    }


    public function create() {
        return view("products.create");
    }

    public function store(StorePostRequest $request) {
        $products = $request->validated();

        $products["user_id"] = Auth::id();
        Product::create($products);
        return redirect()->route("product.index")->with("success", "Produit ajoute");
    }


    public function edit(Product $product) {
        return view("products.edit", compact("product"));
    }

    public function update(StorePostRequest $request, Product $product) {
        $product->update($request->validated());
        return redirect()->route("product.index")->with("success", "Produits mis á jour");

    }

    public function destroy(Product $product) {
        $product->delete();
        return redirect()->route("product.index")->with("success", "Produits supprime");
    }
}
