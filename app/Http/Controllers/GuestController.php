<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Config;
class GuestController extends Controller
{
    public function index(){
        $configs = Config::find(1);
        return view('index')->with('config',$configs);
    }
    public function promotion(){
        $configs = Config::find(1);
        return view('promotion')->with('config',$configs);
    }
    public function menu(){
        $configs = Config::find(1);
        return view('menu')->with('config',$configs);
    }
    public function reservation(){
        $configs = Config::find(1);
        return view('reservation')->with('config',$configs);
    }
    public function blog(){
        $configs = Config::find(1);
        return view('blog')->with('config',$configs);
    }
    public function gallery(){
        $configs = Config::find(1);
        return view('gallery')->with('config',$configs);
    }
    public function contact(){
        $configs = Config::find(1);
        return view('contact')->with('config',$configs);
    }
}
