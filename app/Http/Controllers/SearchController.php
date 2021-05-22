<?php

namespace App\Http\Controllers;

use App\Models\category;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    //
    public function search()
    {
        $obj = new category();
        $category = $obj->pluck('category_name');

        return view('search', ['categories' => $category]);
    }
}
