<?php

use Illuminate\Database\Seeder;
use App\Rate;

class RatesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Eloquent::unguard();
  
       	Rate::create([
            'duration' => 3600,
            'price' => 300
   
       	]);
       	Rate::create([
            'duration' => 10800,
            'price' => 450
   
       	]);
       	Rate::create([
            'duration' => 21600,
            'price' => 675
   
       	]);
       	Rate::create([
            'duration' => 86400,
            'price' => 1015
   
       	]);

    }
}
