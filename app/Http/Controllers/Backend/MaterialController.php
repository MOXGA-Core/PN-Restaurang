<?php

namespace App\Http\Controllers\Backend;

use App\Http\Requests\Backend\MaterialRequest;
use App\Models\Material;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use File;

class MaterialController extends Controller
{
    public function index() {
        $materials = Material::get();

        return view('backend.materials.index', compact('materials'));
    }

    public function show(Material $material) {
        return view('backend.materials.edit', compact('material'));
    }

    public function store(MaterialRequest $request) {
        $material = new Material;
        $material->iconImage = 'storage/' . $request->file('iconImage')->store('materials');
        $material->name = $request->name;
        $material->save();

        return redirect()->back()->with('alert', 'success');
    }

    public function update(MaterialRequest $request, Material $material) {
        if($request->hasFile('iconImage')) {
            File::delete($material->iconImage);
            $material->iconImage = 'storage/' . $request->file('iconImage')->store('products');
        }
        $material->name = $request->name;
        $material->save();
        return redirect()->back()->with('alert', 'success');
    }

    public function destroy(Material $material) {
        File::delete($material->iconImage);
        $material->delete();

        return redirect()->back()->with('alert', 'success');
    }
}
