<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        $products = Product::get();
        return view('index', compact('products'));
    }

    public function product($product)
    {
        return view('product', ['product' => $product]);
    }


    public function show(Category $category)
    {
        $categories = Category::all();
        $products = $category->products;
        return view('category', compact('category', 'categories', 'products'));
    }

    public function category($code = null)
    {
        if ($code) {
            $category = Category::where('code', $code)->firstOrFail();
            $products = Product::where('category_id', $category->id)->get();
            return view('category', compact('category', 'products'));
        }

        $products = Product::get();
        return view('category', compact('products'));
    }




}
