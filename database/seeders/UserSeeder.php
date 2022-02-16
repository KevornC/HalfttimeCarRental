<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker; //
use App\Models\User; //

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        for($i = 1 ; $i <= 5 ; $i++){
            User::create([
                'fname' => $faker->firstName,
                'lname' => $faker->lastName,
                'email' => $faker->email(),
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
                // 'remember_token' => Str::random(10),
         
            ]);
        }
    }
}
