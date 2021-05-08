<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use App\Models\Trainers;

class SearchController extends Controller
{
    public function search(Request $request){
        $name = $request->get('search');
        $obj= new Trainers();
        // $companies= $obj-> all();
        $search= $obj ->search($name)->paginate(10);
        return view('search',['trainers'=> $search, 'name'=>$name]);
    }
}
