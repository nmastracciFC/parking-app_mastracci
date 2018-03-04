<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Eloquent::unguard();

       $faker = Faker\Factory::create();

       foreach(range(1,5) as $index) {
       	User::create([
            'fname' => $faker->firstName,
            'lname' => $faker->lastName,
            'email' => $faker->email,
            'password' => Hash::make('password'),
            'license_plate' => 'BDLS'.$index.'00'
   
       	]);
       }
    }
}
