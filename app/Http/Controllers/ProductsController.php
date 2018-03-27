<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categories;
use App\Brands;
use App\Products;
use App\Cart;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Response;

class ProductsController extends Controller
{
    public function index()
    {
        $categories = Categories::OrderBy('category_id','desc')->get();
        $brands = Brands::latest('brand_id','desc')->get();
        $products = Products::latest('product_id','desc')->get();
        return view('index',array('products'=>$products,'categories'=>$categories,'brands'=>$brands));
    }
    
    
    public function addToCart(Request $request,$id)
    {        
        $product = Products::find($id);
        $oldCart = Session::has('cart') ? Session::get('cart') : null;      
        $cart = new Cart($oldCart);
        $cart->addNewItem($product, $product->product_id);
        $request->session()->put('cart',$cart);
        return redirect()->route('product');
    }
    
    
    public function getShopingCart()
    {
        if(!Session::has('cart'))
        {            
           return view('shopingcart');
        } 
        $oldCart = Session::get('cart');      
        $cart = new Cart($oldCart);
        return view('shopingcart',array('products'=>$cart->items,'totalPrice'=>$cart->totalPrice));
    }
    
    
    public function removeCart($id)
    {
         $this->cart->delete($id);        
        return redirect()->route('product');
    }
}
