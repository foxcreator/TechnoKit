<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('index', compact('products'));
    }

    public function product($category, $id)
    {
        $product = Product::findOrFail($id);
        return view('   product', compact('product'));
    }

    public function oneProduct()
    {

    }


    public function category($code)
    {
        $categories = Category::all();
        $products = Product::all();
        ;
        if ($code) {
            $category = Category::where('code', $code)->first();
            if ($category) {
                $products = $category->products;
            }
        }
        $categoryName = $category->name;
        return view('category', compact('categories', 'category', 'products', 'categoryName'));
    }


    public function show()
    {
        $category = Category::first();
        return redirect()->route('category', $category->code);
    }

    public function contacts()
    {
        return view('contacts');
    }

    public function aboutus()
    {
        return view('aboutus');
    }

    public function formChecking(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'phone' => 'required',
            'region' => 'required',
            'city' => 'required',
            'novaposhta' => 'required',
        ]);
    }


}
