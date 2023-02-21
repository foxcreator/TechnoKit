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

    public function category(Category $category)
    {
        $products = Product::get();
        $categories = Category::all();
        $category = Category::where('id', $category)->first();
        return view('category', compact('category', 'categories', 'products'));
    }




}
