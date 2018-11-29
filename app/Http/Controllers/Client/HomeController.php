<?php

namespace App\Http\Controllers\Client;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\DetailProduct;
use App\Models\Product;
use App\Models\ProductGroup;

class HomeController extends Controller
{
    public function index()
    {
        $category = Category::all();
        $new = DetailProduct::where('is_sold', 0)->orderBy('created_at', 'desc')->take(5)->get();
        $product = DetailProduct::where('is_sold', 0)->get();

        return view('client.layouts.home', ['category' => $category, 'new' => $new, 'product' => $product]);
    }

    public function addLike($id)
    {
    	$detailProduct = DetailProduct::findOrFail($id);
    	$like = $detailProduct->like;
    	$detailProduct->like = $like + 1;
    	$detailProduct->save();

    	return redirect()->back();
    }

    public function detailProduct($id)
    {
    	$category = Category::all();
        $new = DetailProduct::where('is_sold', 0)->orderBy('created_at', 'desc')->take(5)->get();
        $product = DetailProduct::findOrFail($id);

    	return view('client.layouts.detail', ['category' => $category, 'new' => $new, 'pro' => $product]);
    }

    public function mobileByCategory($id)
    {
    	$category = Category::all();
        $new = DetailProduct::where('is_sold', 0)->orderBy('created_at', 'desc')->take(5)->get();
        $products = Product::where('id_cate', $id)->get();
        $detailProduct = null;
        if(count($products) > 0){
        	for($i = 0; $i < count($products); $i++)
	        {
	        	$product_group = ProductGroup::where('id_product', $products[$i]->id)->get();
	        	if(count($product_group) > 0){
	        		for($j = 0; $j < count($product_group); $j++)
		        	{
		        		$detailProduct = DetailProduct::where('id_product_group', $product_group[$j]->id)->get();
		        	}
	        	}
        	}
        }

        return view('client.layouts.mobileByCategory', ['category' => $category, 'new' => $new, 'product' => $detailProduct]);
    }
}
