<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TrainerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $query = "insert into trainers values (null,?,?,?,?)";
        for ($i = 0; $i < 400; $i++) {
            DB::insert($query, ['tien', 1, 'tien', 'tien']);
        }
        //
    }
}
