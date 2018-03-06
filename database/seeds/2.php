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
      ]);
      CategoryCargo::create([
        'name' => 'Service',
      ]);
      CategoryCargo::create([
        'name' => 'Spareparts',
      ]);
      CategoryCargo::create([
        'name' => 'Tools',
      ]);
    }
}
