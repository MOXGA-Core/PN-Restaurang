<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Config;
use App\Models\Product;
use App\Models\Category;
use App\Models\Photo;
class GuestController extends Controller
{
    public function index(){
        $products = Product::all();
        $configs = Config::find(1);
        $launchs =  Product::where('category','Launch')->orderBy('id','desc')->get();
        $dinners =  Product::where('category','Dinner')->orderBy('id','desc')->get();
        $desserts =  Product::where('category','Dessert')->orderBy('id','desc')->get();
        $drinks =   Product::where('category','Drink')->orderBy('id','desc')->get();
        $productsRand =  Product::where('category','Launch')->orderBy('id','desc')->get();
      //  dd($productsRand[0]['attributes']['name']);
        return view('index',compact('products','configs','launchs','dinners','desserts','drinks','productsRand'));
    }
    public function promotion(){
        $products = Product::all();
        $configs = Config::find(1);
        return view('promotion',compact('products','configs'));
    }
    public function menu(){
        $products1 = Product::orderBy('id','desc')->paginate(15);
        $products = Product::all();
        $configs = Config::find(1);
        return view('menu',compact('products','configs','products1'));
    }
    public function reservation(){
        $products = Product::all();
        $configs = Config::find(1);
        return view('reservation',compact('products','configs'));
    }
    public function blog(){
        $products = Product::all();
        $configs = Config::find(1);
        return view('blog',compact('products','configs'));
    }
    public function gallery(){
        $products = Product::orderBy('id','desc')->get();
        $configs = Config::find(1);
        $categories = Category::all();
        return view('gallery',compact('products','configs','categories'));
    }
    public function contact(){
        $products = Product::all();
        $configs = Config::find(1);
        return view('contact',compact('products','configs'));
    }
    public function product($id){
        $photos  = Photo::where('id_own', $id)->get();
        $productone = Product::find($id);
        $products = Product::all();
        $configs = Config::find(1);
        $prices = json_decode($productone->price, true);
      //  dd($prices);
        return view('single_product',compact('products','configs','productone','photos','prices'));
    }
}
