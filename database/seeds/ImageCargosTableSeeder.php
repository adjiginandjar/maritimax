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

        for ($cargo_id = 1; $cargo_id <= 100; $cargo_id++) {
            for($index_img=0; $index_img < 6; $index_img++){
                ImageCargo::create([
                  'img_url' => $faker->imageUrl($width = 768, $height = 432),
                  'cargo_id' => $cargo_id,
                ]);
            }
        }
    }
}
