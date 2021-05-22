<?php

namespace App\Http\Controllers;

use App\Models\category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    //
    public function category(Request $request) {
        // Input::get('exampleCheckBox');
        $obj = new category();
        $category = $obj->pluck('category_name');

        return view('category',['categories' => $category]);
    }
}
