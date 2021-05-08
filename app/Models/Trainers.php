<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trainers extends Model
{
    protected $table = 'trainers';
    public function search($key){
        $result = self::where('trainer_name','LIKE','%'.$key.'%')->orwhere('trainer_email','LIKE','%'.$key.'%');
        return $result;
    }
}
