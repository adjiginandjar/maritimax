<?php

use Illuminate\Database\Seeder;
use App\CategoryCargo;

class CategoryCargoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      CategoryCargo::create([
        'name' => 'Kapal',
        'publish_status' => 'publish',
      ]);
      CategoryCargo::create([
        'name' => 'Service',
        'publish_status' => 'publish',
      ]);
      CategoryCargo::create([
        'name' => 'Spareparts',
        'publish_status' => 'publish',
      ]);
      CategoryCargo::create([
        'name' => 'Tools',
        'publish_status' => 'publish',
      ]);
    }
}
