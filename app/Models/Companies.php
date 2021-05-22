<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Companies extends Model
{
    use HasFactory;
    protected $table = 'companies';
    protected $primaryKey = 'companies_id';

    public function search($input, $category)
    {
        $data = self::where('category_id', '=', $category[0]);

        $data->where(function ($query) use ($input) {
            $query->orwhere('companies_id', 'LIKE', "%{$input}%")
                ->orwhere('company_name', 'LIKE', "%{$input}%")
                ->orwhere('company_web', 'LIKE', "%{$input}%")
                ->orwhere('company_address', 'LIKE', "%{$input}%")
                ->orwhere('company_code', 'LIKE', "%{$input}%")
                ->orwhere('company_phone', 'LIKE', "%{$input}%");
            
        });

        return $data->paginate(15);
    }
    public function companies()
    {
        return $this->hasMany(Companies::class, 'foreign_key');
    }
    public function trainers()
    {
        return $this->hasOne(Trainers::class,'companies_id','companies_id');
    }
}
