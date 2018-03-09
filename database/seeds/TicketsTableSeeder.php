<?php

use Illuminate\Database\Seeder;
use App\Ticket;

class TicketsTableSeeder extends Seeder
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
  
       	

   		foreach(range(1,10) as $index) {
       		Ticket::create([
            'has_paid' => 0,
            'user_id' => $faker->numberBetween($min = 1, $max = 5),
            'garage_id' => $faker->numberBetween($min = 1, $max = 5)
   
       		]);
       	}

    }
}
