<?php

namespace Database\Seeders;

use App\Models\Company;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i < 1000000; $i++) { 
            DB::table('companies')->insert([
                'company_name' => "TDC",
                'company_web' => "fit.tdc.vn",
                'company_address' => "53",
                'company_code' => "T1",
                'company_phone' => "012345679",
            ]);
        }
    }
}
