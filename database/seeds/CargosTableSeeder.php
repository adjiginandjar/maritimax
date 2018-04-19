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
        $now=Carbon::now();

        for ($i = 0; $i < 100; $i++) {
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
              'available_start' => $now->format('Y-m-d H:i:s'),
              'available_end' => $now->addDays($faker->numberBetween(15, 30))->format('Y-m-d H:i:s'),
              'area_of_service' => 'Ocean Going',
              'flag' => $faker->country,
              'year_build'=> $faker->numberBetween(2000, 2018),
              'dimension' => $faker->numberBetween(200, 300) .' x '.$faker->numberBetween(400, 500),
              'booking_type' => $faker->randomElement(['charter' ,'buy']),
              'cargo_model_id' => $faker->numberBetween(1, 4),
              'charter_type_id' => $faker->numberBetween(1, 3),
              'booking_status' => 'available',
              'category_cargo_id' => $faker->numberBetween(1, 4),
            ]);
        }
    }
}
