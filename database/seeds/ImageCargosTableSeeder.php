<?php

use Illuminate\Database\Seeder;
use App\ImageCargo;

class ImageCargosTableSeeder extends Seeder
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

        for ($cargo_id = 1; $cargo_id <= 2; $cargo_id++) {
            for($index_img=0; $index_img < 6; $index_img++){
                ImageCargo::create([
                  'img_url' => 'https://loremflickr.com/786/432/tankers,vessel?random='.$faker->numberBetween(1, 5000),
                  'cargo_id' => $cargo_id,
                ]);
            }
        }
    }
}
