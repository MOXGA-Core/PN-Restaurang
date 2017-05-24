<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Config;
class GuestController extends Controller
{
    public function index(){
        $configs = new Config();
        return view('index')->with('config',$configs);
    }
    public function promotion(){
        return view('promotion');
    }
    public function menu(){
        return view('menu');
    }
    public function reservation(){
        return view('reservation');
    }
    public function blog(){
        return view('blog');
    }
    public function gallery(){
        return view('gallery');
    }
    public function contact(){
        return view('contact');
    }
}
