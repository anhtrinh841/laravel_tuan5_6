<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

use App\Models\Companies;
use Illuminate\Http\Request;
// use Symfony\Component\Console\Input\Input;

class CompaniesController extends Controller
{
    public function companies(Request $request) {
        // Input::get('exampleCheckBox');
        $result = $request->get('exampleCheckBox');
        $obj = new Companies();
        
        if ($request->get('search')!=null) {
            $companies = $obj->search($request->get('search'),$request->get('category'));    
        }else{
            $companies = $obj->paginate(15);
        }
        
        return view('companies',['companies' => $companies]);
    }
}
