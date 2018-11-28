<?php

namespace App\Http\Controllers\Client;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\DetailProduct;

class HomeController extends Controller
{
    public function index()
    {
        $category = Category::all();
        $new = DetailProduct::orderBy('created_at', 'desc')->take(5)->get();
        $product = DetailProduct::all();

        return view('client.layouts.home', ['category' => $category, 'new' => $new, 'product' => $product]);
    }
}
