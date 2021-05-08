<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i < 6; $i++) { 
            User::create([
                'name' => "nggoc",
                'email' => "abc@gmail.com",
                'password' => "123456"
                
            ]);
        }
    }
}
