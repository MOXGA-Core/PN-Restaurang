<?php

namespace App\Http\Controllers\Backend;

use App\Http\Requests\Backend\ProductRequest;
use App\Models\Course;
use App\Models\Material;
use App\Models\Price;
use App\Models\Product;
use App\Models\Type;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Yajra\Datatables\Datatables;
use Yajra\Datatables\Html\Builder;
use File;

class ProductController extends Controller
{
    private $datatable;
    private $columns = ['id', 'name', 'created_at', 'updated_at'];

    public function __construct(Datatables $datatable) {
        $this->datatable = $datatable;
    }

    public function index(Request $request) {
        if($request->ajax()) {
            return $this->data();
        }

        $courses = Course::get();
        $types = Type::get();
        $materials = Material::get();
        $html = $this->html();

        return view('backend.products.index', compact('courses', 'types', 'materials', 'html'));
    }

    public function show(Product $product) {
        $courses = Course::get();
        $types = Type::get();
        $materials = Material::get();

        return view('backend.products.edit', compact('courses', 'types', 'materials', 'product'));
    }

    public function store(ProductRequest $request) {
        $product = new Product;
        $product->course_id = $request->course_id;
        $product->type_id = $request->type_id;
        $product->profileImage = 'storage/'.$request->file('profileImage')->store('products');
        $product->name = $request->name;
        $product->detail = $request->detail;
        $product->save();

        $prices = [];
        foreach($request->price as $i => $price) {
            $prices[] = new Price(['material_id' => $request->material_id[$i], 'price' => $price]);
        }
        $product->prices()->saveMany($prices);

        return redirect()->route('backend.products.index')->with('alert', 'success');
    }

    public function update(ProductRequest $request, Product $product) {
        if($request->hasFile('profileImage')) {
            File::delete($product->profileImage);
            $product->profileImage = 'storage/'.$request->file('profileImage')->store('products');
        }
        $product->course_id = $request->course_id;
        $product->type_id = $request->type_id;
        $product->name = $request->name;
        $product->detail = $request->detail;
        $product->save();

        $prices = [];
        foreach($request->price as $i => $price) {
            $prices[] = new Price(['material_id' => $request->material_id[$i], 'price' => $price]);
        }
        $product->prices()->delete();
        $product->prices()->saveMany($prices);
        return 'success';
    }

    public function destroy(Product $product) {
        File::delete($product->profileImage);
        $product->delete();
        return redirect()->route('backend.products.index')->with('alert', 'success');
    }

    private function data() {
        return $this->datatable->of(Product::select($this->columns))->addColumn('action', function($product) {
            return '<a href="#" data-id="'.$product->id.'" class="edit-btn btn btn-xs btn-primary"><i class="glyphicon glyphicon-pencil"></i></a> '.
                   '<a href="#" data-id="'.$product->id.'" class="delete-btn btn btn-xs btn-danger"><i class="glyphicon glyphicon-trash"></i></a>';
        })->editColumn('created_at', function($product) {
            return $product->created_at->format('d/m/Y');
        })->editColumn('updated_at', function($product) {
            return $product->updated_at->format('d/m/Y');
        })->make(true);
    }

    private function html() {
        return $this->datatable->getHtmlBuilder()->columns($this->columns)->addAction();
    }
}
