<?php

namespace Database\Seeders;

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
        //
        $query = "insert into companies values (null,?,?,?,?,?,?)";
        for ($i = 0; $i < 100; $i++) {
            DB::insert($query, ['tien', 'tien', 'tien', 'tien', 'tien','1']);
        }
        for ($i = 0; $i < 200; $i++) {
            DB::insert($query, ['tien', 'tien', 'tien', 'tien', 'tien','2']);
        }
        for ($i = 0; $i < 100; $i++) {
            DB::insert($query, ['tien', 'tien', 'tien', 'tien', 'tien','3']);
        }
    }
}
