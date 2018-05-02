<?php

use Illuminate\Database\Seeder;
use App\CargoModel;

class CargoModelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      CargoModel::create([
        'name' => 'Cargo Vessle',
        'publish_status' => 'publish',
      ]);
      CargoModel::create([
        'name' => 'Container Ship',
        'publish_status' => 'publish',
      ]);
      CargoModel::create([
        'name' => 'Tanker',
        'publish_status' => 'publish',
      ]);
      CargoModel::create([
        'name' => 'Reefer Ship',
        'publish_status' => 'publish',
      ]);
    }
}
