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
        return view('category', compact('categories'));
    }

    public function category(Category $category)
    {

        $category = Category::where('id', $category)->first();
        return view('category', compact('category'));
    }




}
