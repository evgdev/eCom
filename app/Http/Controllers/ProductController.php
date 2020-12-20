<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Session;

class ProductController extends Controller
{
    function index() {
    	$data = Product::all();
    	return view('product',['products'=>$data]);
    }
    function detail($id) {
    	 $data = Product::find($id);
    	 return view('detail',['product'=>$data]);
    }
    function search(Request $req) {
    	$data = Product::where('name','like','%'.$req->input('search-query').'%')
    	->get();
    	return view('search',['products'=>$data]);
    }
    function add_to_cart(Request $req) {
    	if ($req->session()->has('user')) {
    		$cart = new Cart;
    		$cart->user_id=$req->session()->get('user')['id'];
    		$cart->product_id=$req->product_id;
    		$cart->save();
    		return redirect('/');
    	} else {
    		return redirect('/login');
    	}
    }
    static function cart_item()    {
    	$user_id=Session::get('user')['id'];
    	return Cart::where('user_id',$user_id)->count();
    }
    function cart() {
    	$user_id=Session::get('user')['id'];
    	$products=DB::table('cart')
    	->join('products','cart.product_id','=','products.id')
    	->where('cart.user_id',$user_id)
    	->select('products.*')
    	->get();
    	return view('cart',['products'=>$products]);
    }
}
