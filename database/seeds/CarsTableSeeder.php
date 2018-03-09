<?php

use Illuminate\Database\Seeder;
use App\Car;

class CarsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Eloquent::unguard();

       // $faker = Faker\Factory::create();
  
       	Car::create([
            'license_plate' => 'BDLE 800',
            'user_id' => 2
   
       	]);
       	Car::create([
            'license_plate' => 'FDSE 870',
            'user_id' => 3
   
       	]);
       	Car::create([
            'license_plate' => 'YDLT 909',
            'user_id' => 4
       	]);
       	Car::create([
            'license_plate' => 'KMDW 680',
            'user_id' => 5
       	]);
       	Car::create([
            'license_plate' => 'QVJL 350',
            'user_id' => 1
       	]);

    }
}
