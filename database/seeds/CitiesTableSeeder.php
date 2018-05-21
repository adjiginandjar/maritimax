<?php

use Illuminate\Database\Seeder;
use App\Cities;

class CitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $cities = json_decode(Storage::disk('local')->get('id_cities.json'), Cities::class);

      foreach ($cities as $city) {
        Cities::create([
            'name' => $city['city_name'],
          ]);
      }
    }
}
