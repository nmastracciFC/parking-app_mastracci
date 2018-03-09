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
            'payment_type' => Hash::make('Visa'),
            'payment_number' => Hash::make('1234567890123456'),
            'payment_expiry' => Hash::make('10/21')
   
       	]);
       }
    }
}
