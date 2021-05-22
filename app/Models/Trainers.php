<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Trainers extends Model {
    use HasFactory;
    protected $table = 'trainers';
    protected $primaryKey = 'trainers_id';

    public function companies()
    {
        return $this->hasOne(Companies::class,'companies_id','companies_id');
    }
}
