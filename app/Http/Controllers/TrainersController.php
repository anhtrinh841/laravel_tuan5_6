<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

use App\Models\Trainers;

class TrainersController extends Controller
{
    public function trainers()
    {
        $obj = new Trainers();
        $trainers = $obj->paginate(15);
        // var_dump(Trainers::find(12)->trainers()->get());die;
        
        return view('trainer', ['trainers' => $trainers]);
    }
}
