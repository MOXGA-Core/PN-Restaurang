<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $products = Product::orderBy('id','desc')->paginate(15);
        return view('auth.home',compact('products'));
    }
    public function AddLocal()
    {
        $postdata = "123456";
        $myfile = time().str_random();

        Storage::disk('local')->put($myfile, $postdata);
        dd($myfile);
    }
}
