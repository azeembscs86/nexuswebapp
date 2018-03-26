<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categories;
use App\Brands;
use App\Products;
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
}
