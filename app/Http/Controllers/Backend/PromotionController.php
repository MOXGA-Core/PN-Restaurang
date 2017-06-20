<?php

namespace App\Http\Controllers\Backend;

use App\Models\Promotion;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PromotionController extends Controller
{
    public function index() {
        $promotion = Promotion::first();

        return view('backend.promotion.index', compact('promotion'));
    }

    public function store(Request $request) {
        $promotion = Promotion::first();
        if(!$promotion) {
            $promotion = new Promotion;
        } else {
            \File::delete($promotion->profileImage);
        }

        $promotion->profileImage = 'storage/' . $request->file('profileImage')->store('promotion');
        $promotion->title = $request->title;
        $promotion->detail = $request->detail;
        $promotion->save();

        return redirect()->route('backend.promotion.index')->with('alert', 'success');
    }

    public function destroy(Promotion $promotion) {
        \File::delete($promotion->profileImage);
        $promotion->delete();
        return redirect()->route('backend.promotion.index');
    }
}
