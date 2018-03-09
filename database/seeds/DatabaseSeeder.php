<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	Eloquent::unguard();

        $this->call(UsersTableSeeder::class);
        $this->call(GaragesTableSeeder::class);
        $this->call(RatesTableSeeder::class);
        $this->call(TicketsTableSeeder::class);
        $this->call(CarsTableSeeder::class);
    }
}
