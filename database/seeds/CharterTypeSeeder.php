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
      ]);
      CharterType::create([
        'name' => 'Voyage Charterer',
      ]);
      CharterType::create([
        'name' => 'Bareboat Charter',
      ]);

    }
}
