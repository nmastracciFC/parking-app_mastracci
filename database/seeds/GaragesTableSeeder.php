<?php

use Illuminate\Database\Seeder;

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

       foreach(range(1,3) as $index) {
       	Garage::create([
            'garage_name' => $faker->garage_name,
            'total_spaces' => 100,
            'occupied_spaces' => 0,
            'entrance' => $this->entrance,
            'exit' => $this->exit,
       	]);
       }
    }
}
