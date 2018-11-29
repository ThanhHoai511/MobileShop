<?php

namespace App\Http\Controllers\Client;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\DetailProduct;
use App\Models\DetailBill;
use App\Models\Bill;
use Illuminate\Support\Facades\Auth;
use Session;
use App\Models\Cart;

class CartController extends Controller
{
	public function cart()
	{
		$category = Category::all();
        $new = DetailProduct::orderBy('created_at', 'desc')->take(5)->get();

		if(!Session::has('cart'))
		{
			return view('client.layouts.cart', ['products' => null, 'category' => $category, 'new' => $new]);
		}
		$oldCart = Session::get('cart');
		$cart = new Cart($oldCart);
		return view('client.layouts.cart', ['products' => $cart->items, 'totalQty' => $cart->totalQty, 'totalPrice' => $cart->totalPrice, 'category' => $category, 'new' => $new]);
	}

    public function add(Request $request, $id)
    {
        if(!Auth::check())
        {
            return redirect()->route('login');
        }

        else{
            $product = DetailProduct::findOrFail($id);
            $oldCart = Session::has('cart') ? Session::get('cart') : null;
            $cart = new Cart($oldCart);
            $cart->add($product, $product->id);
            $request->session()->put('cart', $cart);

            return redirect()->route('cart');
        }
    }

    public function delete(Request $request)
    {
    	$request->session()->forget('cart');

    	return redirect()->back();
    }

    public function removeItem($id)
    {
    	$old = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($old);
        $cart->removeItem($id);
        if(count($cart->items) > 0)
        {
            Session::put('cart',$cart);
        }
        else
        {
            Session::forget('cart');
        }
        
        return redirect()->back();
    }

  
    public function checkout(){
        if(Session::has('cart')){
            $category = Category::all();
            $new = DetailProduct::orderBy('created_at', 'desc')->take(5)->get();
            $old = Session::has('cart') ? Session::get('cart') : null;
            $cart = new Cart($old);

            return view('client.layouts.checkout', ['products' => $cart->items, 'totalQty' => $cart->totalQty, 'totalPrice' => $cart->totalPrice, 'category' => $category, 'new' => $new]);
        }
        else{
            return redirect()->back();
        }
    	
    }

    public function order(Request $request)
    {
        $cart = Session::get('cart');
        $att = array(
            'id_user' => Auth::user()->id,
            'name' => $request->name,
            'phone' => $request->phone,
            'email' => $request->email,
            'note' => $request->note,
            'address' => $request->address,
            'status' => 1,
            'total' => $cart->totalPrice,
            'date' => date('Y-m-d'),
        );
        $order = Bill::create($att);

        foreach($cart->items as $key => $value)
        {
            $data = array(
                'id_bill' => $order->id,
                'id_detail_product' => $key,
                'price' => $value['price'],
            );

            DetailBill::create($data);
            $detailProduct = DetailProduct::findOrFail($key);
            $detailProduct->is_sold = 1;
            $detailProduct->save();
        }


        Session::forget('cart');
        \Session::flash('status','Order successful!');
        return redirect()->route('home');
    }
}
