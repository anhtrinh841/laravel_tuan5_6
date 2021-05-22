<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(CompanySeeder::class);
        $this->call(TrainerSeeder::class);
        DB::insert('insert into category values(null,?)',['tien']);
        DB::insert('insert into category values(null,?)',['tien1']);
        DB::insert('insert into category values(null,?)',['tien2']);
//         \App\Models\User::factory(10)->create();
    }
}
