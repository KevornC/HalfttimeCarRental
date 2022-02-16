<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker; 
use App\Models\member;
class MemberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        for($i = 1 ; $i <= 10 ; $i++){
            member::create([
                'fname' =>  $faker->firstName,
                'lname' =>  $faker->lastName,
                'address' =>  $faker->streetAddress,
                'country' =>  $faker->country,
                'trn' =>  $faker->randomDigit,
                'phone' =>  $faker->phoneNumber,
                'email' =>  $faker->safeEmail,
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
           
            ]);
        }
    }
}
