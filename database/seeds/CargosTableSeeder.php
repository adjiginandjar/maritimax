<?php

use Illuminate\Database\Seeder;
use App\Cargo;
use Carbon\Carbon;

class CargosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $faker = \Faker\Factory::create();

        $price=250000;
        $now=Carbon::now()->format('Y-m-d H:i:s');

        for ($i = 0; $i < 20; $i++) {
            Cargo::create([
              'name' => $faker->name,
              'description' => $faker->paragraph,
              'city' => $faker->city,
              'location' => $faker->state,
              'price' => $price,
              'length' => $faker->numberBetween(1000, 2000),
              'width' => $faker->numberBetween(200, 300),
              'height' => $faker->numberBetween(300, 400),
              'curb_weight' => $faker->numberBetween(3000, 4000),
              'load_capacity' => $faker->numberBetween(20000, 30000),
              'available_capacity' => 0,
              'available_start' => $now,
              'available_end' => $now,
              'booking_type' => $faker->randomElement(['rent' ,'buy']),
              'charter_type' => $faker->randomElement(['freight' ,'time']),
              'booking_status' => 'available',
              'category_id' => $faker->numberBetween(1, 4),
            ]);
        }
    }
}
