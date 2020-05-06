<?php

namespace App\Http\Controllers;

use App\Category;
use App\Http\Controllers\Admin\OrderController;
use App\Order;
use App\Product;
use Illuminate\Http\Request;

class MainController extends Controller
{
    /*protected $order;
    public function __construct(Order $order)
    {
        $this->order = $order;
    }*/

    public function index(){
        /*$products = $this->order->pluck('phone','name');
        dd($products);*/
        /*->products()->get();*/
        $products = Product::get();
        return view("index", compact('products'));
    }

    public function categories(){
        $categories = Category::get();
        return view("categories", compact('categories'));
    }

    public function category($code){
        $category = Category::where('code', $code)->first();
        return view("category", compact('category'));
    }

    public function product($category, $product = null){

        return view("product", ["product"=>$product]);
    }



}
