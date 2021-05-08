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
        for ($i=0; $i < 1000000; $i++) { 
            DB::table('trainers')->insert([
                'trainer_name' => "a",
                'company_id' => "1",
                'trainer_email' => "",
                'trainer_phone' => "012345679",
            ]);
        }
    }
}
