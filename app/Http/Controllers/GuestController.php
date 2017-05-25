<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Config;
use App\Models\Product;
class GuestController extends Controller
{
    public function index(){
        $products = Product::all();
        $configs = Config::find(1);
        return view('index')->with(array('config'=>$configs , 'products'=>$products));
    }
    public function promotion(){
        $products = Product::all();
        $configs = Config::find(1);
        return view('promotion')->with(array('config'=>$configs , 'products'=>$products));
    }
    public function menu(){
        $products = Product::all();
        $configs = Config::find(1);
        return view('menu')->with(array('config'=>$configs , 'products'=>$products));
    }
    public function reservation(){
        $products = Product::all();
        $configs = Config::find(1);
        return view('reservation')->with(array('config'=>$configs , 'products'=>$products));
    }
    public function blog(){
        $products = Product::all();
        $configs = Config::find(1);
        return view('blog')->with(array('config'=>$configs , 'products'=>$products));
    }
    public function gallery(){
        $products = Product::all();
        $configs = Config::find(1);
        return view('gallery')->with(array('config'=>$configs , 'products'=>$products));
    }
    public function contact(){
        $products = Product::all();
        $configs = Config::find(1);
        return view('contact')->with(array('config'=>$configs , 'products'=>$products));
    }
}
