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
      ]);
      CargoModel::create([
        'name' => 'Container Ship',
      ]);
      CargoModel::create([
        'name' => 'Tanker',
      ]);
      CargoModel::create([
        'name' => 'Reefer Ship',
      ]);
    }
}
