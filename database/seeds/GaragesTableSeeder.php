<?php

use Illuminate\Database\Seeder;
use App\Garage;

class GaragesTableSeeder extends Seeder
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

       foreach(range(1,4) as $index) {
       	Garage::create([
            'garage_name' => 'Garage'.$index,
            'total_spaces' => 100,
            'occupied_spaces' => $faker->biasedNumberBetween($min = 30, $max = 80, $function = 'sqrt'),
            'entrance' => null,
            'exit' => null
       	]);
       }
       Garage::create([
            'garage_name' => 'Garage5',
            'total_spaces' => 100,
            'occupied_spaces' => 100,
            'entrance' => null,
            'exit' => null
   
        ]);
    }
}
