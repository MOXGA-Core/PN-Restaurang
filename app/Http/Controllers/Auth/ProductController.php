<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Category;
use App\Models\Type;
use App\Models\Photo;
class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    protected $redirectTo = '/admin/home';
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $categories = Category::all();
        $types = Type::all();
        return view('auth.product',compact('categories','types'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        foreach ($request->prices as $key => $price){
            $arr_tojson[$key] = $price;
        }

        $arr_tojson = json_encode($arr_tojson);

        $path = $request->file('picture')->store('images/product');
        $product = new Product();
        $product->name = $request->name;
        $product->path = "storage/".$path;
        $product->category = $request->category;
        $product->tag = $request->tag;
        $product->detail = $request->detail;
        //$product->amount = $request->amount;
        $product->price =$arr_tojson;
        $product->save();
        $LastInsertId = $product->id;

        foreach ($request->photos as $photo) {
            $picture = new Photo();
            $filename = $photo->store('photos');
            $picture->id_own = $LastInsertId;
            $picture->path = "storage/".$filename;
            $picture->save();
        }
        return redirect('admin/home');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $types = Type::all();
        $productone = Product::find($id);
        $categories = Category::all();
        $prices = json_decode($productone->price, true);
        return view('auth.product_show',compact('productone','categories','types','prices'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {


    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        foreach ($request->prices as $key => $price){
            $arr_tojson[$key] = $price;
        }

        $arr_tojson = json_encode($arr_tojson);

        $product = Product::find($id);
        $product->name = $request->name;
        $product->category = $request->category;
        $product->tag = $request->tag;
        $product->detail = $request->detail;
        $product->price =$arr_tojson;
        $product->save();
        return redirect('admin/home');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Product::destroy($id);
        return redirect('admin/home');

    }
}
