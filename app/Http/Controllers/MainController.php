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

//    public function catalog()
//    {
//        return view('catalog');
//    }

    public function category($code)
    {
        $categories = Category::get();
        $category = Category::where('code', $code)->first();
        return view('category', compact('category', 'categories'));
    }


}
