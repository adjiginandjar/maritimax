<?php

use Illuminate\Database\Seeder;
use App\CharterType;

class CharterTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      CharterType::create([
        'name' => 'Time Charter',
        'publish_status' => 'publish',
      ]);
      CharterType::create([
        'name' => 'Voyage Charterer',
        'publish_status' => 'publish',
      ]);
      CharterType::create([
        'name' => 'Bareboat Charter',
        'publish_status' => 'publish',
      ]);

    }
}
